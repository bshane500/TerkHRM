@extends('layouts.app')
@section('title','Job Titles')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('job-titles.create')}}" class="btn btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Add Job Title
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Job Title</th>
                    <th>Job Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($job_titles->isEmpty())
                    <tr>
                        <td colspan="3">No Job Titles Added</td>
                    </tr>
                @else
                    @foreach($job_titles as $job_title)
                        <tr>
                            <td>
                                {{$job_title->id}}
                            </td>
                            <td>{{$job_title->job_title}}</td>
                            <td>
                                {{$job_title->job_description}}
                            </td>
                            <td>
                                <a href="{{route('job-titles.edit',$job_title->id) }}"
                                   class="edit-modal btn btn-sm btn-info">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['job-titles.destroy',$job_title->id]])!!}
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