@extends('layouts.app')
@section('title','Add Pay Grade')
@section('content')

        <div class="box box-primary">
            <div class="box-header with-header"><b>Add New Pay Grade</b></div>
            <div class="box-body">
                {!! Form::model($pay_grade,
                        ['method' =>  $pay_grade-> exists ? 'put':'post',
                         'route'  =>  $pay_grade-> exists ? ['pay-grades.update',$pay_grade->id]:['pay-grades.store']
                    ])!!}
                        <!--Job Title-->
                <div class=form-group>
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title',null, ['class' => 'form-control ','placeholder'=>'Title']) !!}
                </div>
                <!--Currency-->
                <div class=form-group>
                    {!! Form::label('currency', 'Currency') !!}
                    {!! Form::text('currency',null, ['class' => 'form-control ','placeholder'=>'Currency']) !!}
                </div>
                <!--Minimum-->
                <div class=form-group>
                    {!! Form::label('minimum_amount', 'Minimum') !!}
                    {!! Form::text('minimum_amount',null, ['class' => 'form-control ','placeholder'=>'Minimum Amount']) !!}
                </div>

                <!--Minimum-->
                <div class=form-group>
                    {!! Form::label('maximum_amount', 'Minimum') !!}
                    {!! Form::text('maximum_amount',null, ['class' => 'form-control ','placeholder'=>'Maximum Amount']) !!}
                </div>
                <!--submit button-->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection
