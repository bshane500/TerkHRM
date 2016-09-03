@extends('layouts.public')
@section('title','Application')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">Application for @foreach($job as $j)
                {{$j->vacancy_name}}
            </div>
        <div class="box-body">
            {!! Form::open(['url'=>route('recruitment.candidates.store'),'class'=>'form-horizontal',
            'method'=>'post']) !!}
            <input name="vacancy_id" type="text" hidden value="{{$j->id}}">
               @include('recruitment.partials._candidate_form')
            {!! Form::close() !!}
        </div>
        @endforeach
    </div>
@endsection