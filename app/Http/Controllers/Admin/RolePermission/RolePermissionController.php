<?php

namespace App\Http\Controllers\Admin\Rolepermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    // Show Role & Permission page
    public function index()
    {
        $roles = Role::where('guard_name', 'admin')->get();
        $permissions = Permission::where('guard_name', 'admin')->get()->groupBy('group_name');
        return view('admin.role-permission.index', compact('roles', 'permissions'));
    }

    // Create new Role
    public function roleStore(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        Role::create([
            'name' => $request->name,
            'guard_name' => 'admin'
        ]);

        return redirect()->back()->with('success', 'Role created successfully');
    }

    // Create new Permission
    public function permissionStore(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name ?? null,
            'guard_name' => 'admin'
        ]);

        return redirect()->back()->with('success', 'Permission created successfully');
    }

    // Assign Permissions to Role
    public function assignPermissionStore(Request $request, Role $role)
    {
        $request->validate([
            'permissions' => 'array'
        ]);

        $role->syncPermissions($request->permissions);

        return redirect()->back()->with('success', 'Permissions assigned successfully');
    }
}
