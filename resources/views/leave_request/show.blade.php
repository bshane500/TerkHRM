@extends('layouts.app')
@section('title','Leave Request')
@section('content')



    <div class="box box-primary">
        <div class="box-header with-border">
            <h4><i class="fa fa-fw fa-user"></i>
                Employee Name: {{$leaveRequest->employees->full_name}}
            </h4>

        </div>
        <div class="box-body">
            <h4>Leave Category:{{$leaveRequest->leaveCategory->name}}</h4>
            <hr/>
            <h4>Start Date: {{$leaveRequest->start_date->format('d-m-Y')}}</h4>
            <hr/>
            <h4>End Date: {{$leaveRequest->end_date->format('d-m-Y')}}</h4>
            <hr/>
            <h4>Total Days Requested: {{$leaveRequest->total_days_requested}}</h4>
            <hr/>
            <p> {{$leaveRequest->reason}}</p>
            <hr/>
            {!! Form::model($leaveRequest,[
                'method' => 'put',
                'route'  => ['leave-requests.update',$leaveRequest->id]
               ]) !!}
            <button type="submit" class="btn btn-primary" name="approve" value="approve">HR Approve</button>
            @role('user')
            <button type="submit" class="btn btn-info" name="on-hold" value="on-hold">OnHold</button>
            @endrole
            <button type="submit" class="btn btn-danger" name="reject" value="reject">Reject</button>
            {!! Form::close() !!}

        </div>
    </div>





@endsection
