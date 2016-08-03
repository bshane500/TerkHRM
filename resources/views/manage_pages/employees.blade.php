@extends('layouts.app')
@section('page-header','Employees')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="#" class="btn btn-primary" data-toggle="modal"
               data-target="#add_employee">
                <span><i class="fa fa-plus"></i> </span>
                Add New Employee
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Department</th>
                <th>Branch</th>
                <th>Privilege</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($employees->isEmpty())
                <tr>
                    <td  colspan="3">No user added yet</td>
                </tr>
                @else
                    @foreach($employees as $employee)
                        <tr>
                            <td>
                                {{$employee->id}}
                            </td>
                            <td>{{$employee->full_name}}</td>
                            <td>{{$employee->departments->name}}</td>
                            <td>{{$employee->branches->name}}</td>
                            <td>
                                @foreach($employee->roles as $role)
                                    {{$role->display_name}}
                                @endforeach
                            </td>
                            <td><a href="{{ route('employees.edit',$employee->id) }}"><i class="fa fa-edit"></i></a></td>
                            <td><a href="#"><i class="fa fa-remove"></i></a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        </div>
    </div>
 @include('partials.modal.add_employee')
@endsection