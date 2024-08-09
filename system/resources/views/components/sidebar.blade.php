<div class="sidebar" id="sidebar">
    <div class="logo">
        <img src="{{ url('/static/images/logo_64.png') }}">
        <a href="#" id="trigger_sidebar_close" class="hide-in-desktop"><i class="bi bi-x-lg"></i></a>
    </div>
    <ul>
        @if(getPermissions(Auth::User()->permissions,'dashboard'))
        <li>
            <a href="{{ url('/') }}" class="lk-dashboard">
                <i class="bi bi-house"></i>
                <span>Dashboard</span>
            </a>
        </li>    
        @endif
        @if(getPermissions(Auth::User()->permissions,'users_list'))
        <li>
            <a href="{{ url('/users/all') }}" class="lk-users_list lk-users_view lk-users_edit lk-users-permissions lk-users_add sidebar_accordion" data-target="accordion_users">  
                <i class="bi bi-people"></i>
                <span>Usuarios</span>
                <span class="row-icon" id="row_icon_accordion_users"><i class="bi bi-chevron-right"></i></span>
            </a>
            <ul id="accordion_users" class="accordion_ul">
                <li>
                    <a href="{{ url('/users/list/all') }}" id="side_lk_users_all"><i class="bi bi-record"></i>
                        Todos</a>
                </li>
                @foreach (user_role() as $key => $role)
                <li>
                    <a href="{{ url('/users/list/'.$key) }}" id="side_lk_users_{{ $key }}"><i class="bi bi-record"></i>
                        {{ $role }}</a>
                </li>                   
                @endforeach
            </ul>
        </li>    
        @endif
        @if(getPermissions(Auth::User()->permissions,'platform_settings'))
        <li>
            <a href="{{ url('/settings') }}" class="lk-platform_settings">
                <i class="bi bi-rocket-takeoff"></i>
                <span>Configuración</span>
            </a>       
        </li>    
        @endif                
    </ul>
</div>