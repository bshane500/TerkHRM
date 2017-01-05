@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                @if($user->photo->exists())
                <img class="profile-user-img img-responsive img-circle" src="{{'/images/'.$user->photo->path}}" alt="User profile picture">
                @else
                    <img class="profile-user-img img-responsive img-circle" src="#" alt="User profile picture">
                @endif
                <h3 class="profile-username text-center">{{$user->full_name}}</h3>

                <p class="text-muted text-center">{{$user->job_title}}</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Job Title</b> <a class="pull-right">{{$user->job_title}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Department</b> <a class="pull-right">{{$user->departments->name}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Branch</b> <a class="pull-right">{{$user->branches->name}}</a>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>

    </div>
    <!-- /.col -->
    {!! Form::model($user,['method' =>  'put','route'  => ['employees.update',$user->id],'files'=>true])!!}
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#employment" data-toggle="tab">Employment Details</a></li>
                <li><a href="#personal" data-toggle="tab">Personal</a></li>
                <li><a href="#bank" data-toggle="tab">Bank</a></li>
                <li><a href="#education" data-toggle="tab">Education</a></li>
                <li><a href="#dependents" data-toggle="tab">Dependents</a></li>
            </ul>

            <div class="tab-content">
                <div class="active tab-pane" id="employment">
                    @include('employees.partials.employment_details')
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="personal">
                    @include('employees.partials.personal_details')
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="bank">
                    @include('employees.partials.bank_details')
                </div>
                <div class="tab-pane" id="education">
                    @include('employees.partials.qualification_details')
                </div>
                <div class="tab-pane" id="dependents">
                    @include('employees.partials.dependents')
                </div>
            </div>

            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
{!! Form::close() !!}
    <!-- /.col -->
</div>
@endsection