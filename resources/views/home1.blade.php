@extends('layouts.app')
@section('title','Dashboard')
@section('days',$leaves.' days Remaining')
@section('header','Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="text-center">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <h5 class="text-center">Employees</h5>
                </div>
                    <div class="panel-footer">
                        <a href="{{route('employees.index')}}">
                            <span class="pull-left">Manage</span>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <span class="pull-right"><i class="fa fa-plus"></i>Add</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                        <div class="text-center">
                            <i class="fa fa-building-o fa-5x"></i>
                        </div>
                        <h5 class="text-center">Departments</h5>
                </div>

                    <div class="panel-footer">
                        <a href="{{route('departments.index')}}">
                            <span class="pull-left">Manage</span>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#add_department">
                            <span class="pull-right"><i class="fa fa-plus"></i>Add</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                        <div class="text-center">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                    <h5 class="text-center">Leave Type</h5>
                </div>

                    <div class="panel-footer">
                        <a href="{{route('leave-types.index')}}">
                            <span class="pull-left">Manage</span>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#add_leave_type">
                            <span class="pull-right"><i class="fa fa-plus"></i>Add</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                        <div class="text-center">
                            <i class="fa fa-list-alt fa-5x"></i>
                        </div>
                    <h5 class="text-center">Branch</h5>
                </div>
                <div class="panel-footer">
                    <a href="{{route('branches.index')}}">
                        <span class="pull-left">Manage</span>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#add_branch">
                        <span class="pull-right"><i class="fa fa-plus"></i>Add</span>
                    </a>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="text-center">
                        <i class="fa fa-list-alt fa-5x"></i>
                    </div>
                    <h5 class="text-center">Leave Requests</h5>
                </div>
                <div class="panel-footer">
                    <a href="#">
                        <span class="pull-left">view previous</span>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#leave_request">
                        <span class="pull-right"><i class="fa fa-plus"></i>Add</span>
                    </a>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

    @include('partials.modal.add_employee')
    @include('partials.modal.add_department')
    @include('partials.modal.add_branch')
    @include('partials.modal.add_leave_type')
    @include('leave_request.form')
</div>
@endsection
