@extends('layouts.app')
@section('title',$user->exists ? 'Editing '.$user->first_name:'Add new Employee')
@section('page-header',$user->exists ? 'Editing '.$user->first_name:'Add new Employee')
@section('content')

   <div class="panel panel-default">
       <div class="panel-heading">Add Employee</div>
       <div class="panel-body">
           {!! Form::model($user,
       [
          'method' => $user -> exists ? 'put':'post',
          'route'  => $user -> exists ? ['employees.update',$user->id]:['employees.store'],
          'class'  =>'form-horizontal'
       ])!!}


           <input type="password" name="password" hidden value="secret">
           <input type="password" name="password_confirmation" hidden value="secret">
           <div class="form-group">
               <label class="col-md-4 control-label" for="first_name">First Name</label>

               <div class="col-md-6">
                   {!! Form::text('first_name',null, ['class' => 'form-control ','placeholder'=>'First Name']) !!}
               </div>
           </div>
           <div class="form-group">
               <label class="col-md-4 control-label" for="last_name">Last Name</label>

               <div class="col-md-6">
                   {!! Form::text('last_name',null, ['class' => 'form-control ','placeholder'=>'Last Name']) !!}
               </div>
           </div>
           <div class="form-group">
               <label class="col-md-4 control-label" for="email">Email</label>

               <div class="col-md-6">
                   {!! Form::email('email',null, ['class' => 'form-control ','placeholder'=>'Email']) !!}
               </div>
           </div>
           <div class="form-group">
               <label class="col-md-4 control-label" for="phone_number">Phone Number</label>

               <div class="col-md-6">
                   {!! Form::text('phone_number',null, ['class' => 'form-control ','placeholder'=>'Phone Number']) !!}

               </div>
           </div>
           <div class="form-group">-
               <label class="col-md-4 control-label" for="date_of_birth">Date Of Birth</label>

               <div class="col-md-6">
                   {!! Form::date('date_of_birth',null, ['class' => 'form-control datepicker']) !!}
               </div>
           </div>
           <div class="form-group">
               <label for="roles" class="col-md-4 control-label">Roles</label>

               <div class="col-md-6">
                   {!! Form::select('roles_list[]',$roles,null,
                   ['class' => 'form-control select2 multiselect-primary','multiple']) !!}
               </div>
           </div>

           <div class="form-group">
               <div class="col-md-4 control-label">
                   {!! Form::label('branch_id','Branch') !!}
               </div>
               <div class="col-md-6">
                   {!! Form::select('branch_id',$branches,null, ['class' => 'form-control select select-primary select-block mbl']) !!}
               </div>
           </div>
           <div class="form-group">
               <div class="col-md-4 control-label">
                   {!! Form::label('department_id','Department') !!}
               </div>
               <div class="col-md-6">
                   {!! Form::select('department_id',$departments,null, ['class' => 'form-control select select-primary select-block mbl']) !!}
               </div>
           </div>
           @include('partials.modal.modal_footer')
           {!!form::close()!!}
       </div>
   </div>

@endsection