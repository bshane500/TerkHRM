
    <div class="col-md-6">
       {{-- <input type="password" name="password" hidden value="secret">
        <input type="password" name="password_confirmation" hidden value="secret">--}}
        <!--Staff ID-->
        <div class=form-group>
            {!! Form::label('staff_id', 'Staff ID') !!}
            {!! Form::text('staff_id',null, ['class' => 'form-control ','placeholder'=>'Staff ID']) !!}
        </div>

        <!--Department-->
        <div class=form-group>
            {!! Form::label('department_id', 'Department') !!}
            {!! Form::select('department_id',$departments,null, ['class' => 'form-control']) !!}
        </div>
        <!--Social Security Number-->
        <div class=form-group>
            {!! Form::label('social_security', 'Social Security Number') !!}
            {!! Form::text('social_security',null, ['class' => 'form-control']) !!}
        </div>

        <!--Branch-->
        <div class=form-group>
            {!! Form::label('branch_id', 'Branch') !!}
            {!! Form::select('branch_id',$branches,null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <!--Job Title-->
        <div class=form-group>
            {!! Form::label('job_title', 'Job Title') !!}
            {!! Form::select('job_title',$job_title,null, ['class' => 'form-control ',
            'data-placeholder'=>'Select Job']) !!}
        </div>

        <!--Supervisor-->
        <div class=form-group>
            {!! Form::label('supervisor', 'Supervisor') !!}
            {!! Form::text('supervisor',null, ['class' => 'form-control ','placeholder'=>'Supervisor']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('roles_list[]', 'User Roles') !!}
            {!! Form::select('roles_list[]',$roles,null,
            ['class' => 'form-control select2 multiselect-primary','multiple']) !!}
        </div>

        <!--Email-->
        <div class=form-group>
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email',null, ['class' => 'form-control ','placeholder'=>'Email']) !!}
        </div>
    </div>
