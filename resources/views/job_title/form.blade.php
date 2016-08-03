@extends('layouts.app')
@section('title','Add Job Title')
@section('content')
        <div class="panel panel-primary">
            <div class="panel-heading">Job Title</div>
            <div class="panel-body">
                {!! Form::model($job_title,
                        ['method' =>  $job_title -> exists ? 'put':'post',
                         'route'  =>  $job_title -> exists ? ['job-titles.update',$job_title->id]:['job-titles.store']
                    ])!!}
                <div class=form-group>
                    {!! Form::label('job_title', 'Job Title') !!}
                    {!! Form::text('job_title',null, ['class' => 'form-control ','placeholder'=>'Job Title']) !!}
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
                {!! Form::submit('Save!',['class'=>'btn btn-primary btn-wide' ])!!}
                {!! Form::close() !!}
            </div>
        </div>
@endsection
