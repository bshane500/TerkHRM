<div class="row">
    <div class="col-md-6">
        <!--First Name-->
        <div class=form-group>
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name',null, ['class' => 'form-control ']) !!}
        </div>
        <!--Last Name-->
        <div class=form-group>
            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name',null, ['class' => 'form-control ']) !!}
        </div>

        <!--Other Name-->
        <div class=form-group>
            {!! Form::label('other_name', 'Other Name') !!}
            {!! Form::text('other_name',null, ['class' => 'form-control']) !!}
        </div>

        <!--Date of Birth-->
        <div class=form-group>
            {!! Form::label('date_of_birth', 'Date of Birth') !!}
            {!! Form::text('date_of_birth',null, ['class' => 'form-control dobdatepicker']) !!}
        </div>

       <!--Gender-->
       <div class=form-group>
           {!! Form::label('gender', 'Gender') !!}
           {!! Form::select('gender',['male'=>'male','female'=>'female'],null, ['class' => 'form-control ','placeholder'=>'Select Gender']) !!}
       </div>

    </div>

    <div class="col-md-6">
        <!--Hometown-->
        <div class=form-group>
            {!! Form::label('hometown', 'Hometown') !!}
            {!! Form::text('hometown',null, ['class' => 'form-control']) !!}
        </div>

        <!--Region-->
        <div class=form-group>
            {!! Form::label('region', 'Region') !!}
            {!! Form::text('region',null, ['class' => 'form-control']) !!}
        </div>

        <!--Religion-->
        <div class=form-group>
            {!! Form::label('religion', 'Religion') !!}
            {!! Form::text('religion',null, ['class' => 'form-control']) !!}
        </div>

        <!--Phone Number-->
        <div class=form-group>
            {!! Form::label('phone_number', 'Phone Number') !!}
            {!! Form::text('phone_number',null, ['class' => 'form-control ','placeholder'=>'Phone']) !!}
        </div>
        <div class=form-group>
            {!! Form::label('country', 'Country') !!}
            {!! Form::select('country',['Ghana'=>'Ghana'],null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


