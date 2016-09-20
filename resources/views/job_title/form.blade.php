@extends('layouts.app')
@section('title','Add Job Title')
@section('content')
    <div class="col-lg-6 col-lg-offset-1">
        <div class="box box-primary">
            <div class="box-header with-border"><b>Add New Job Title</b></div>
            <div class="box-body">
                {!! Form::model($job_title,
                        ['method' =>  $job_title -> exists ? 'put':'post',
                         'route'  =>  $job_title -> exists ? ['job-titles.update',$job_title->id]:['job-titles.store']
                    ])!!}
                <div class=form-group>
                    {!! Form::label('name', 'Job Title') !!}
                    {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Job Title']) !!}
                </div><!--Job Description-->
                <div class=form-group>
                    {!! Form::label('job_description', 'Job Description') !!}
                    {!! Form::textarea('job_description',null, ['class' => 'form-control ','placeholder'=>'Job Description','rows'=>'3']) !!}
                </div><!--Job Specification-->
                <div class=form-group>
                    {!! Form::label('job_specification', 'Job Specification') !!}
                    {!! Form::textarea('job_specification',null, ['class' => 'form-control ','placeholder'=>'Job Specification','rows'=>'3']) !!}
                </div>
                <!--submit button-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
