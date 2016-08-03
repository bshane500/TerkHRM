@extends('layouts.app')
@section('title','Leave Request')
@section('content')


<div class="col-md-10">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div>
                <h6><i class="fa fa-fw fa-user"></i>
                    Employee Name: {{$leaveRequest->employees->full_name}}
                </h6>
            </div>

        </div>
        <div class="panel-body">
            <div class="row">
                <h5>Leave Category:{{$leaveRequest->leaveCategory->name}}</h5>
            </div>

            <hr/>
            <h5>Start Date: {{$leaveRequest->start_date->format('d-m-Y')}}</h5>
            <hr/>
            <h5>End Date: {{$leaveRequest->end_date->format('d-m-Y')}}</h5>
            <hr/>
            <h5>Total Days Requested: {{$leaveRequest->total_days}}</h5>
            <hr/>
            <p> {{$leaveRequest->reason}}</p>
            <hr/>
            {!! Form::model($leaveRequest,[
                'method' => 'put',
                'route'  => ['leave-requests.update',$leaveRequest->id]
               ]) !!}
            <button type="submit" class="btn btn-primary" name="approve" value="approve">Approve</button>
            <button type="submit" class="btn btn-info" name="onhold" value="onhold">On Hold</button>
            <button type="submit" class="btn btn-danger" name="reject" value="reject">Reject</button>
            {!! Form::close() !!}


        </div>
    </div>

</div>



@endsection
