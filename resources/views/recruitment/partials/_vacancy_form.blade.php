
    <div class="form-group">
        {!! Form::label('vacancy_name', 'Name',['class'=>'col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('vacancy_name',null, ['class' => 'form-control',
       'placeholder'=>'Vacancy name']) !!}
        </div>
    </div>
  <div>
      <!--Job Title-->
      <div class="form-group">
          {!! Form::label('job_title_id', 'Job Title',['class'=>'col-sm-2']) !!}
          <div class="col-sm-10">
          {!! Form::select('job_title_id',$select['job_title'], ['class' => 'form-control ']) !!}
        </div>

      </div>
      <!--Hiring Manager-->
      <div class="form-group">
          {!! Form::label('hiring_manager', 'Hiring Manager',['class'=>'col-sm-2']) !!}
          <div class="col-sm-10">
              {!! Form::text('hiring_manager',null, ['class' => 'form-control','placeholder'=>'start typing name']) !!}
          </div>
      </div>
  </div>
    <!--Description-->
    <div class="form-group">
        {!! Form::label('description', 'Description',['class'=>'col-md-2']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('description',null, ['class' => 'form-control',
            'placeholder'=>'Description','rows'=>'3']) !!}
        </div>

    </div>
    <!--No of Positions-->
    <div class="form-group">
        {!! Form::label('no_of_positions', 'No. of Positions',['class'=>'col-md-2']) !!}
        <div class="col-sm-10">
            {!! Form::number('no_of_positions',null, ['class' => 'form-control ']) !!}
        </div>

    </div>
        <!--status-->
        <div class="form-group">
            {!! Form::label('status', 'Active',['class'=>'col-md-2']) !!}
            <div class="col-sm-10">
                {!! Form::checkbox('status',null, ['class' => 'form-control ']) !!}
            </div>

        </div>
        <!--Published-->
        <div class="form-group">
            {!! Form::label('published', 'Published',['class'=>'col-md-2']) !!}
            <div class="col sm-10">
                {!! Form::select('published',['internal'=>'Internal','external'=>'external'],
            ['class' =>'form-control'])
             !!}
            </div>

        </div>
    <div class="box-footer">
        {!! Form::submit($buttonText,['class'=>'btn btn-primary pull-right' ])!!}
    </div>
    <!--submit button-->