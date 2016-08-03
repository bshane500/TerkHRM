@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row col-lg-12">
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-9 info-tab-container">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 info-tab-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item active text-center">
                            <i class="fa fa-building fa-2x"></i> <br/>Employment Details
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <i class="fa fa-user fa-2x"></i><br/>Personal Details
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <i class="fa fa-plus fa-2x"></i><br/>Emergency Contact
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <h4 class="glyphicon glyphicon-home"></h4><br/>Bank Details
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <i class="fa fa-graduation-cap fa-2x"></i><br/>Qualifications
                        </a>
                        <a href="#" class="list-group-item text-center">
                            <i class="fa fa-graduation-cap fa-2x"></i><br/>Dependents
                        </a>

                    </div>
                </div>
                {!! Form::model($user,
                     [
                        'method' => $user -> exists ? 'put':'post',
                        'route'  => $user -> exists ? ['employees.update',$user->id]:['employees.store'],
                     ])!!}
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 info-tab">

                    <!-- flight section -->
                    <div class="info-tab-content active">
                        @include('employees.partials.employment_details')
                    </div>
                    <!-- train section -->
                    <div class="info-tab-content">
                        @include('employees.partials.personal_details')
                    </div>
                        <!--submit button-->
                        <!--submit button-->



                    <!-- hotel search -->
                    <div class="info-tab-content">
                        @include('employees.partials.emergency_contact')
                    </div>
                    <div class="info-tab-content">
                        @include('employees.partials.bank_details')
                    </div>
                    <div class="info-tab-content">
                    </div>
                    <div class="info-tab-content">
                        @include('employees.partials.dependents')
                    </div>

                </div>
                {!! Form::close() !!}
            </div>

        </div>


    </div>


@stop
