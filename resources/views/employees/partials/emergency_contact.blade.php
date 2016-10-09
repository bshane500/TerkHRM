    <div class="row contact-container">
    <div class="contact">
        <!--Name-->
        <div class="form-group col-md-4">
            {!! Form::label('contact_name', 'Contact Name') !!}
            {!! Form::text('emergency_contact[contact_name]',null, ['class' => 'form-control',
            'placeholder'=>'Contact Name']) !!}

        </div>

        <!--Relation-->
        <div class="form-group col-md-4">
            {!! Form::label('relationship', 'Relationship') !!}
            {!! Form::text('emergency_contact[relationship]',null, ['class' => 'form-control ',
            'placeholder'=>'Relationship']) !!}
        </div>

        <!--Phone Number-->
        <div class="form-group col-md-4">
            {!! Form::label('r_phone_number', 'Phone Number') !!}
            {!! Form::text('emergency_contact[phone_number]',null, ['class' => 'form-control',
            'placeholder'=>'Phone Number']) !!}

        </div>
        <div class="more-button">
            <button class="btn btn-primary btn-xs btn-add"><i class="fa fa-plus"></i></button>
        </div>
    </div>

</div>

<script>
    /*
    |--------------------------------------------------------------------------
    | Script to add more contacts
    |--------------------------------------------------------------------------
    */
    $(document).on('click', '.btn-add', function (e) {

        e.preventDefault();
        var stepTemplate = $(this).parents('.contact:first'),
                newEntry = $(stepTemplate.clone()).appendTo('.contact-container');

        newEntry.find('input').val('');


        stepTemplate.find('.more-button').find('.btn-add').removeClass('btn-add').addClass('' +
                'btn-remove').removeClass('.btn-primary').addClass('btn-danger').find('i').removeClass('fa-plus').addClass('fa-minus');

    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.contact:first').remove();
        e.preventDefault();
        return false;
    });
</script>