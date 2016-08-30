@extends('layouts.app')
@section('title','Editing '.$department->name)
@section('content')
    <div class="col-lg-6 col-lg-offset-2">
        <div class="box box-primary">
            <div class="box-header with-border">Add New Department</div>
            <div class="box-body">
            {!! Form::model($department,
                [
                   'method' => 'put',
                   'route'  => ['departments.update',$department->id],
                   'class'  =>'form-horizontal'
                ])!!}
            <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Department Name</label>
                    <div class="col-md-6">
                        {!!Form::text('name',null,['class'=>'form-control input-md','placeholder'=>'department Name'])!!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="department_code">Department
                        Code</label>
                    <div class="col-md-6">
                        {!!Form::text('department_code',null,['class'=>'form-control input-md','placeholder'=>'department Code'])!!}
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection