@extends('layouts.app')
@section('title','Leave Requests')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_request">
                <span><i class="fa fa-plus"></i> </span>
                Request Leave
            </a>
        </div>
        <div class="box-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Leave type</th>
                    <th>Start Date</th>
                    <th>end Date</th>
                    <th>No of Days</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @if($leaveRequests->isEmpty())
                    <tr>
                        <td colspan="4">There are no leaves requested</td>
                    </tr>
                @else
                    @foreach($leaveRequests as $leaveRequest)
                        <tr>
                            <td>
                                <a href="{{route('leave-requests.show',$leaveRequest->id)}}">
                                    {{$leaveRequest->employees->full_name}}
                                </a>
                            </td>
                            <td>{{$leaveRequest->leaveCategory->name}}</td>
                            <td>{{$leaveRequest->start_date->format('d-m-Y')}}</td>
                            <td>{{$leaveRequest->end_date->format('d-m-Y')}}</td>
                            <td>{{$leaveRequest->total_days_requested}}</td>
                            <td>{{$leaveRequest->status}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@include('leave_request.form')
@endsection