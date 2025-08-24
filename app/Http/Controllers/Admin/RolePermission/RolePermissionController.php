<?php

namespace App\Http\Controllers\Admin\Rolepermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{

    public function index()
    {
        $title = 'Role & Permission';
        $roles = Role::where('guard_name', 'admin')->get();
        return view('admin.role-permission.index', compact('title', 'roles'));
    }


    public function create()
    {
        $title = 'Add Role & Permission';
        $roles = Role::where('guard_name', 'admin')->get();
        $permissions = Permission::where('guard_name', 'admin')->get()->groupBy('group_name');
        return view('admin.role-permission.create', compact('title', 'roles', 'permissions'));
    }

    public function store(Request $request, $id = null)
    {
        $roleId = $id;

        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id . ',id',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        if ($roleId) {
            $role = Role::findOrFail($roleId);
            $role->name = $request->name;
            $role->save();
        } else {
            $role = Role::create([
                'name' => $request->name,
                'guard_name' => 'admin',
            ]);
        }

        $validPermissions = Permission::whereIn('id', $request->permissions ?? [])
            ->where('guard_name', 'admin')
            ->pluck('id');

        $role->syncPermissions($validPermissions);

        return redirect()->back()->with('success', $roleId
            ? __('Role updated successfully')
            : __('Role created successfully'));
    }

    public function edit($id)
    {
        $title = 'Edit Role & Permission';
        $role = Role::findOrFail($id);
        $permissions = Permission::where('guard_name', 'admin')->get()->groupBy('group_name');
        return view('admin.role-permission.create', compact('role', 'permissions', 'title'));
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if (in_array($role->name, ['Super Admin'])) {
            return redirect()->back()->with('error', __('This role cannot be deleted.'));
        }
        $role->delete();
        return redirect()->back()->with('success', __('Role deleted successfully!'));
    }
}
