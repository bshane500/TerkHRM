@extends('layouts.app')
@section('page-header','Dashboard')
@section('title','Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$count['employees']}}</h3>
                    <p>Employees</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{route('employees.index')}}"
                   class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$count['departments']}}</h3>

                    <p>Departments</p>
                </div>
                <div class="icon">
                    <i class="fa fa-building"></i>
                </div>
                <a href="{{route('departments.index')}}"
                   class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$count['branches']}}</h3>

                    <p>Branches</p>
                </div>
                <div class="icon">
                    <i class="fa fa-sitemap"></i>
                </div>
                <a href="{{route('branches.index')}}"
                   class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$leaves}}</h3>

                    <p>Leave Day(s) Remaining</p>
                </div>
                <div class="icon">
                    <i class="fa fa-heartbeat"></i>
                </div>
                <a href="{{route('leave-requests.index')}}"
                   class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        @include('partials.events')
        @include('news._index')


    </div>

    @include('partials.modal.add_employee')
@endsection
