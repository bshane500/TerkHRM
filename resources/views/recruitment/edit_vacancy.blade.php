@extends('layouts.app')
@section('title','Editing '.$vacancy->name)
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">Edit {{$vacancy->name}}</div>
        <div class="box-body">
            {!! Form::model($vacancy,['method'=>'put',
            'action'=>['Recruitment\VacancyController@update',$vacancy->id],
            'class'=>'form-horizontal'])!!}

            @include('recruitment.partials._vacancy_form',['buttonText'=>'Update'])

            {!! Form::close() !!}
        </div>
    </div>
@endsection