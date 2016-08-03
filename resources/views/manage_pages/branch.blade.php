@extends('layouts.app')
@section('content')


         <div class="panel">
        <div class="panel-heading">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_branch">Add New Branch</a>
        </div>
        <div class="panel-body">
                   <table class="table table-hover" id="indexTables">
            <caption>table title and/or explanatory text</caption>
            <thead>
            <tr>
                <th>Name</th>
                <th>Branch Code</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($branches->isEmpty())
                <tr>
                    <td colspan="3">No branches Added</td>
                </tr>
            @else
                @foreach($branches as $branch)
                <tr>
                    <td>{{$branch->name}}</td>
                    <td>{{$branch->branch_code}}</td>
                    <td><a href="#"><i class="fa fa-edit"></i></a></td>
                    <td><a href="#" data-toggle="modal" data-target="#branch_delete"><i class="fa fa-remove"></i></a></td>
                    
                </tr>
                
                @endforeach
            @endif
            </tbody>
        </table>
        </div>
    </div>
    @include('partials.modal.add_branch')
@endsection