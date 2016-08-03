 <div class="navbar-default sidebar" role="navigation" style="margin-top: 60px">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/"  class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('employees.index') }}"><i class="fa fa-users fa-fw"></i> Employees</a>
                        </li>
                        <li>
                            <a href="{{ route('departments.index') }}"><i class="fa fa-table fa-fw"></i> Departments</a>
                        </li>
                        <li>
                            <a href="{{ route('branches.index') }}"><i class="fa fa-edit fa-fw"></i> Branches</a>
                        </li>
                        <li>
                            <a href="{{ route('leave-types.index') }}"><i class="fa fa-edit fa-fw"></i> Leave Categories</a>
                        </li>
                        <li>
                            <a href="{{ route('leave-requests.index') }}"><i class="fa fa-edit fa-fw"></i> Leave Requests</a>
                        </li>
                        <li>
                            <a href="admin/user-group"><i class="fa fa-edit fa-fw"></i>User Permissions</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->