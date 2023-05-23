<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> {{ __('words.dashboard')}} <span
                    class="tag tag-info">جدید</span></a>
        </li>

        <li class="nav-title">
            User management
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-user-follow"></i> {{__('words.User registration')}}</a>
            <a class="nav-link" href="#"><i class="icon-people"></i>List of users</a>
            <a class="nav-link" href="#"><i class="icon-user-following"></i> User access </a>
        </li>

        <li class="nav-title">
            File management
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-docs"></i> List of files </a>
        </li>

        <li class="nav-title">
            reporting
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-people"></i> users </a>
            <a class="nav-link" href=""><i class="icon-docs"></i> Files </a>
            <a class="nav-link" href="{{Route('dashboard.settings')}}"><i class="fa fa-wrench"></i>setting</a>
        </li>

    </ul>
</nav>
