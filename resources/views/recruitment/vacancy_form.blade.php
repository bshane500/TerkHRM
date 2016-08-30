@extends('layouts.app')
@section('title','Add Vacancy')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">Add Vacancy</div>
        <div class="box-body">
            {!! Form::open(['action'=>'Recruitment\VacancyController@store',
            'class'=>'form-horizontal'
            ])!!}
            @include('recruitment.partials._vacancy_form',['buttonText'=>'Create'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection