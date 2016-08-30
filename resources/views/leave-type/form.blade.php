@extends('layouts.app')
@section('title',$leaveType->exists ? 'Editing '.$leaveType->name:'Add new leave Category')
@section('content')

    {!! Form::model($leaveType,
        [
           'method' => $leaveType -> exists ? 'put':'post',
           'route'  => $leaveType -> exists ? ['leave-types.update',$leaveType->id]:['leave-types.store'],
           'class'  =>'form-horizontal'
        ])!!}

    <div class="form-group">
        <label class="col-md-4 control-label" for="name">Leave Name</label>
        <div class="col-md-6">
            {!!Form::text('name',null,['class'=>'form-control input-md','placeholder'=>'Leave Name'])!!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="description">Description</label>
        <div class="col-md-6">
            {!!Form::textarea('description',null,['class'=>'form-control input-md','placeholder'=>'Description'])!!}
        </div>
    </div>
    @include('partials.modal.modal_footer')
    {!!form::close()!!}

@endsection