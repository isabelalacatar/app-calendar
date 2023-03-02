<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('employee_access')
                <li class="nav-item">
                    <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is('admin/employees') || request()->is('admin/employees/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.employee.title') }}
                    </a>
                </li>
            @endcan
            @can('client_access')
                <li class="nav-item">
                    <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.client.title') }}
                    </a>
                </li>
            @endcan
            @can('appointment_access')
                <li class="nav-item">
                    <a href="{{ route("admin.appointments.index") }}" class="nav-link {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.appointment.title') }}
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                    <i class="nav-icon fa-fw fas fa-calendar">

                    </i>
                    {{ trans('global.systemCalendar') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>