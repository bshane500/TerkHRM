@extends('layouts.app')
@section('title','Add Event')
@section('content')

    <div class="panel panel-primary">
            <div class="panel-heading">Event</div>
            <div class="panel-body">
                {!! Form::model($event,
                        ['method' =>  $event-> exists ? 'put':'post',
                         'route'  =>  $event-> exists ? ['events.update',$event->id]:['events.store']
                    ])!!}
                <div class=form-group>
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title',null, ['class' => 'form-control ','placeholder'=>'Title']) !!}
                </div><!--Job Description-->
                <div class=form-group>
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description',null, ['class' => 'form-control textarea','placeholder'=>'Description','rows'=>'3']) !!}
                </div><!--Job Specification-->
                <div class=form-group>
                    {!! Form::label('venue', 'Venue') !!}
                    {!! Form::text('venue',null, ['class' => 'form-control ','placeholder'=>'Venue']) !!}
                </div>
                <!--Start Date-->
                <div class=form-group>
                    {!! Form::label('start_date_time', 'Start Date') !!}
                    {!! Form::date('start_date_time',$event->start_date_time, ['class' => 'form-control date-time-picker','placeholder'=>'']) !!}
                </div>
                <!--Start Date-->
                <div class=form-group>
                    {!! Form::label('end_date_time', 'End Date') !!}
                    {!! Form::date('end_date_time',$event->end_date_time, ['class' => 'form-control date-time-picker','placeholder'=>'']) !!}
                </div>
                <!--submit button-->
                {!! Form::submit('Save!',['class'=>'btn btn-primary btn-wide' ])!!}
                {!! Form::close() !!}
            </div>
        </div>

@endsection
