<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">@lang('Dashboard')</li>
            
        
            <li>
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <i class="icon-chart menu-icon"></i><span class="nav-text">@lang('Dashboard')</span>
                </a>
            </li>



            <li class="nav-label">@lang('Main')</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i> <span class="nav-text">Email</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./email-inbox.html">Inbox</a></li>
                    <li><a href="./email-read.html">Read</a></li>
                    <li><a href="./email-compose.html">Compose</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Profile</a></li>
                    <li><a href="./app-calender.html">Calender</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i> <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./chart-flot.html">Flot</a></li>
                    <li><a href="./chart-morris.html">Morris</a></li>
                    <li><a href="./chart-chartjs.html">Chartjs</a></li>
                    <li><a href="./chart-chartist.html">Chartist</a></li>
                    <li><a href="./chart-sparkline.html">Sparkline</a></li>
                    <li><a href="./chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">UI Components</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./ui-accordion.html">Accordion</a></li>
                    <li><a href="./ui-alert.html">Alert</a></li>
                    <li><a href="./ui-badge.html">Badge</a></li>
                    <li><a href="./ui-button.html">Button</a></li>
                    <li><a href="./ui-button-group.html">Button Group</a></li>
                    <li><a href="./ui-cards.html">Cards</a></li>
                    <li><a href="./ui-carousel.html">Carousel</a></li>
                    <li><a href="./ui-dropdown.html">Dropdown</a></li>
                    <li><a href="./ui-list-group.html">List Group</a></li>
                    <li><a href="./ui-media-object.html">Media Object</a></li>
                    <li><a href="./ui-modal.html">Modal</a></li>
                    <li><a href="./ui-pagination.html">Pagination</a></li>
                    <li><a href="./ui-popover.html">Popover</a></li>
                    <li><a href="./ui-progressbar.html">Progressbar</a></li>
                    <li><a href="./ui-tab.html">Tab</a></li>
                    <li><a href="./ui-typography.html">Typography</a></li>
                    <li><a href="./uc-nestedable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                </ul>
            </li>
      

            <li class="nav-label">@lang('Admin & Permission')</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">@lang('Admin')</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">@lang('Add New')</a></li>
                    <li><a href="#">@lang('Manage Admin')</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.role.permission.index') }}" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">@lang('Role & Permission')</span>
                </a>
            </li>
           

            <li class="nav-label">@lang('Others')</li>

             <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">@lang('Settings')</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.settings.general') }}" aria-expanded="false">@lang('General Setting')</a></li>
                    <li><a href="#" aria-expanded="false">@lang('Email Template')</a></li>
                    <li><a href="#" aria-expanded="false">@lang('Maintenance Mode')</a></li>
                    <li><a href="#" aria-expanded="false">@lang('Custom CSS')</a></li>
                </ul>
            </li>


            <li>
                <a href="#" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">@lang('Database Backup')</span>
                </a>
            </li>

            <li>
                <a href="#" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">@lang('System Update')</span>
                </a>
            </li>

            <li>
                <a href="#" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">@lang('Application Information')</span>
                </a>
            </li>


        </ul>
    </div>
</div>
