<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
        @can('user_package')
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false">
                    <i class="material-icons">people</i>
                    <p>{{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ ($activePage == 'users' || $activePage == 'roles' || $activePage == 'permissions') ? 'show' : '' }}" id="users">
                    <ul class="nav">
                        @can('user_index')
                            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    <i class="material-icons">person</i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                        @endcan
                        @can('role_index')
                            <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('roles.index') }}">
                                    <i class="material-icons">accessibility</i>
                                    <p>{{ __('Roles') }}</p>
                                </a>
                            </li>
                        @endcan
                        @can('permission_index')
                            <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('permissions.index') }}">
                                    <i class="material-icons">key</i>
                                    <p>{{ __('Permissions') }}</p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
        @endcan
        <li class="nav-item{{ $activePage == 'schedules' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('schedules.index') }}">
                <i class="material-icons">schedule</i>
                <p>{{ __('Agenda') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'reports' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('reports.index') }}">
                <i class="material-icons">content_paste</i>
                <p>{{ __('Reportes') }}</p>
            </a>
        </li>
        @can('project_package')
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#projects" aria-expanded="false">
                    <i class="material-icons">list_alt</i>
                    <p>{{ __('Proyectos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ ($activePage == 'projects' || $activePage == 'condominiums' || $activePage == 'departments') ? 'show' : '' }}" id="projects">
                    <ul class="nav">
                        @can('user_index')
                            <li class="nav-item{{ $activePage == 'projects' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('projects.index') }}">
                                    <i class="material-icons">person</i>
                                    <p>{{ __('Proyectos') }}</p>
                                </a>
                            </li>
                        @endcan
                        @can('role_index')
                            <li class="nav-item{{ $activePage == 'condominiums' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('condominiums.index') }}">
                                    <i class="material-icons">accessibility</i>
                                    <p>{{ __('Condominios') }}</p>
                                </a>
                            </li>
                        @endcan
                        @can('permission_index')
                            <li class="nav-item{{ $activePage == 'departments' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('departments.index') }}">
                                    <i class="material-icons">key</i>
                                    <p>{{ __('Apartamentos') }}</p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
        @endcan
        </ul>
  </div>
</div>
