    <div class="row dependent-container">
    <div class="dependent">
        <!--Name-->
        <div class="form-group col-md-4">
            {!! Form::label('dependent_name', 'Dependent Name') !!}
            {!! Form::text('dependent_name',null, ['class' => 'form-control',
            'placeholder'=>'Name']) !!}

        </div>

        <!--Relation-->
        <div class="form-group col-md-4">
            {!! Form::label('relationship', 'Relationship') !!}
            {!! Form::text('relationship',null, ['class' => 'form-control ','placeholder'=>'Relationship']) !!}
        </div>

        <!--date of birth-->
        <div class="form-group col-md-4">
            {!! Form::label('d_phone_number', 'Date of Birth') !!}
            {!! Form::date('d_phone_number',null, ['class' => 'form-control datepicker',
            'data-placeholder'=>'date of Birth']) !!}
        </div>
        <div class="more-btn">
            <button class="btn btn-primary btn-xs add-more"><i class="fa fa-plus"></i></button>
        </div>

    </div>

<!--submit button-->
        {!! Form::submit('Save',['class'=>'btn btn-primary col-md-offset-4' ])!!}
</div>

<script>
    $(document).on('click', '.add-more', function (e) {

        e.preventDefault();
        var stepTemplate = $(this).parents('.dependent:first'),
                newEntry = $(stepTemplate.clone()).appendTo('.dependent-container');

        newEntry.find('input').val('');


        stepTemplate.find('.more-btn').find('.add-more').removeClass('add-more').addClass('' +
                'btn-remove').removeClass('.btn-primary').addClass('btn-danger').find('i').removeClass('fa-plus').addClass('fa-minus');

    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.dependent:first').remove();
        e.preventDefault();
        return false;
    });
</script>