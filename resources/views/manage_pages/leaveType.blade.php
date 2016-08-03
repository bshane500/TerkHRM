@extends('layouts.app')
@section('content')
       

<div class="box box-primary">
        <div class="box-header">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_leave_type">Add New Leave Category</a>
        </div>
        <div class="box-body">
             <table class="table table-hover" id="indexTables">
            <thead>
            <tr>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($leaveTypes->isEmpty())
                <tr>
                    <td colspan="3">No leave types added yet</td>
                </tr>
            @else
                @foreach($leaveTypes as $leaveType)
            <tr>
                <td>{{$leaveType->name}}</td>
                <td><a href="{{route('leave-types.edit',$leaveType->id)}}"><i class="fa fa-edit"></i></a></td>
                <td>
                    {!! Form::open(['method'=>'delete','route'=>['leave-types.destroy',$leaveType->id]]) !!}
                    <button class="btn btn-danger btn-xs" type="submit" id="del"
                            onclick="return confirm('Are you sure?')">
                        <i class="fa fa-trash"></i>
                    </button>
                    {!! Form::close() !!}
                </td>
            </tr>
             
                @endforeach
            @endif
            </tbody>
        </table>
        </div>
    </div>
    @include('partials.modal.add_leave_type')
@endsection
