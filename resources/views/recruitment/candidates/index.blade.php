@extends('layouts.app')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            Candidates
        </div>
        <div class="box-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>Candidate Name</th>
                    <th>Phone Number</th>
                    <th>Job Title Applied</th>
                    <th>Resume</th>
                    <th>Action</th>
                    <th>Reject</th>
                </tr>
                </thead>
                <tbody>
                @if($candidates->isEmpty())
                    <tr>
                        <td colspan="3">No Vacancies Added</td>
                    </tr>
                @else
                    @foreach($candidates as $candidate)
                        <tr>
                            <td>
                                {{$candidate->first_name.' '.$candidate->last_name}}
                            </td>
                            <td>{{$candidate->phone_number}}</td>
                            <td>{{$candidate->vacancy->vacancy_name}}</td>
                            <td><a href="{{url('recruitment/candidates/resumes',$candidate->resume) }}"
                                   class="edit-modal btn btn-sm btn-info" target="new">
                                    <span class="glyphicon glyphicon-edit"></span> View Resume
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'put','route'=>['recruitment.candidates.update',
                                $candidate->id]])!!}
                                <button type="submit"
                                        {{$candidate->status=='short-listed' ?'disabled':''}} name="shortlist"
                                        value="short-listed" class="btn btn-sm btn-info">
                                    <span class="glyphicon glyphicon-edit"></span> Short-List
                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['recruitment.candidates.destroy',
                                $candidate->id]])!!}
                                <button class="delete-modal btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">
                                    <span class="glyphicon glyphicon-trash"></span> Reject
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