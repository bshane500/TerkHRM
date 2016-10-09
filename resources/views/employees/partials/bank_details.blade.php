<!--Bank Name-->
<div class=form-group>
    {!! Form::label('bank_name', 'Bank Name') !!}
    {!! Form::text('bankDetails[bank_name]',null, ['class' =>
    'form-control ',
    'placeholder'=>'Bank Name']) !!}
</div>
<!--Bank Branch-->
<div class=form-group>
    {!! Form::label('branch', 'Branch') !!}
    {!! Form::text('bankDetails[branch]',null, ['class' => 'form-control ','placeholder'=>'Bank
    Branch'])
     !!}
</div>
<!--Account Number-->
<div class=form-group>
    {!! Form::label('account_number', 'Account Number') !!}
    {!! Form::text('bankDetails[account_number]',null, ['class' => 'form-control ',
    'placeholder'=>'Account Number']) !!}
</div>
<!--Account Name-->
<div class=form-group>
    {!! Form::label('account_name', 'Account Name') !!}
    {!! Form::text('bankDetails[account_name]',null, ['class' => 'form-control ',
    'placeholder'=>'Account Name']) !!}
</div>


