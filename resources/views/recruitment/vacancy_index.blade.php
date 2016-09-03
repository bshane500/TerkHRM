@extends('layouts.app')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('recruitment.vacancies.create')}}" class="btn btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Add Job Listing
            </a>
        </div>
        <div class="box-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>Vacancy Name</th>
                    <th>Job Title</th>
                    <th>Hiring Manager</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($vacancies->isEmpty())
                    <tr>
                        <td  colspan="3">No Vacancies Added</td>
                    </tr>
                @else
                    @foreach($vacancies as $vacancy)
                        <tr>
                            <td>
                                {{$vacancy->vacancy_name}}
                            </td>
                            <td>{{$vacancy->job_title->job_title}}</td>
                            <td>{{$vacancy->hiring_manager}}</td>
                            <td>
                                <a href="{{route('recruitment.vacancies.edit',$vacancy->id) }}"
                                   class="edit-modal btn btn-sm btn-info">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['recruitment.vacancies.destroy',
                                $vacancy->id]])!!}
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
@endsection