<!--Vacancy Name-->
<div class="form-group row">
    {!! Form::label('first_name', 'Full Name',['class'=>'col-sm-2']) !!}
    <div class="col-md-3">
            {!! Form::text('first_name',null, ['class' => 'form-control','placeholder'=>'first name'])!!}
    </div>

        <!--Last Name-->
        <div class="col-md-3">
                {!! Form::text('last_name',null, ['class' => 'form-control',
           'placeholder'=>'last name']) !!}
        </div>
        <div class="col-md-3">
                {!! Form::text('other_name',null, ['class' => 'form-control',
           'placeholder'=>'other name']) !!}
        </div>

</div>

    <!--Description-->
    <div class="form-group">
        {!! Form::label('email', 'email',['class'=>'col-md-2']) !!}
        <div class="col-sm-4">
            {!! Form::email('email',null, ['class' => 'form-control',
            'placeholder'=>'email']) !!}
        </div>
    </div>
    <!--No of Positions-->
    <div class="form-group">
        {!! Form::label('phone_number', 'Contact number',['class'=>'col-md-2']) !!}
        <div class="col-sm-4">
            {!! Form::text('phone_number',null, ['class' => 'form-control',
            'placeholder'=>'Phone Number']) !!}
        </div>
    </div>
    <!--status-->
    <div class="form-group">
        {!! Form::label('note', 'Note',['class'=>'col-md-2']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('note',null, ['class' => 'form-control','rows'=>'3',
            'placeholder'=>'Any additional comment']) !!}
        </div>
    </div>
    <!--Published-->
    <div class="form-group">
        {!! Form::label('resume', 'resume',['class'=>'col-md-2']) !!}
        <div class="col sm-10">
            {!! Form::file('resume',null,['class' =>'form-control'])
         !!}
        </div>
    </div>

    <div class="box-footer">
        {!! Form::submit('Apply',['class'=>'btn btn-primary pull-right'])!!}
    </div>
