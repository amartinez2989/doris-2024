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
    </ul>
</div>