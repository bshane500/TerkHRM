@extends('layouts.app')
@section('title','Leave Types')
@section('content')


    <div class="box box-primary">
        <div class="box-header with-header">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_leave_type">Add
                New Leave Category
            </a>
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

                            <td>
                                <a href="{{route('leave-types.edit',$leaveType->id) }}"
                                   class="edit-modal btn btn-sm btn-info">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['leave-types.destroy',$leaveType->id]])!!}
                                <button class="delete-modal btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
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
