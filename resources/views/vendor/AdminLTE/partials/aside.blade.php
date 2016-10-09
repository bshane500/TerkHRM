<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->first_name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Main Navigation</li>
            <!-- Optionally, you can add icons to the links -->
            <li {{Request::is('*dashboard') ? 'class=active':''}}><a href="/dashboard"><i class="fa fa-dashboard"></i>
                <span>Dashboard</span></a>
            </li>
            <li {{Request::is('*employees') ? 'class=active':''}}>
                <a href="{{ route('employees.index') }}"><i class="fa fa-users">
                    </i> <span>Employees</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-building"></i> <span>Organization</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li {{Request::is('*departments') ? 'class=active':''}}><a href="{{ route
                    ('departments.index') }}">Departments</a>
                    <li {{Request::is('*branches') ? 'class=active':''}}><a href="{{ route
                    ('branches.index') }}">Branches</a>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-heartbeat"></i> <span>Leave Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('leave-types.index') }}">LeaveCategories</a></li>
                    <li><a href="{{ route('leave-requests.index') }}">Leave Requests</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i><span>Job</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('job-titles.index') }}">Job Titles</a></li>
                    <li><a href="{{ route('pay-grades.index') }}">Pay Grades</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-newspaper-o"></i><span>News & Events</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('news.index') }}">News</a></li>
                    <li><a href="{{ route('events.index') }}">Events</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-user-plus"></i> <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/user-group')}}">Roles</a></li>
                </ul>
            </li>
            <li class="treeview {{Request::is('*candidates','*vacancies') ? 'active':''}} ">
                <a href="#"><i class="fa fa-link"></i> <span>Recruitment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" >
                    <li {{Request::is('*candidates') ? 'class=active':''}}><a href="{{url('recruitment/candidates')}}">Candidates</a></li>
                    <li {{Request::is('*vacancies') ? 'class=active':''}}><a href="{{url('recruitment/vacancies')}}">Vacancies</a></li>
                </ul>
            </li>
            <li {{Request::is('*settings') ? 'class=active':''}}>
                <a href="{{route('settings.index')}}"><i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>