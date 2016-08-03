@extends('layouts.app')
@section('content')
    <form role="form"  action="{{model($user,[
        'method' =>'put',
        'route' =>['users.update', $user->id]])}}" accept-charset="utf-8" class="form-horizontal">

        <div class="form-group">
            <label class="col-md-4 control-label" for="first_name">First Name</label>
            <div class="col-md-6">
                <input type="text" name="first_name" value="{{old('first_name')}}" placeholder="First Name" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="last_name">Last Name</label>
            <div class="col-md-6">
                <input type="text" name="last_name" value="{{old('last_name')}}" placeholder="Last Name" class="form-control">
            </div>

        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-6">
                <input type="email" name="email" value="{{ old('email')}}" placeholder="Enter Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-md-4">Password</label>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="password_confirmation">First Name</label>
            <div class="col-md-6">
                <input type="password" name="password_confirmation" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="phone_number">Phone Number</label>
            <div class="col-md-6">
                <input type="tel" name="phone_number" value="" placeholder="Enter Phone Number" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="date_of_birth">Date Of Birth</label>
            <div class="col-md-6">
                <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}" placeholder="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="roles" class="col-md-4 control-label">Roles</label>
            <div class="col-md-6">
                <select name="roles[]" multiple="multiple" class="form-control multiselect multiselect-info">
                    <option value="0">1</option>
                    <option value="1" >2</option>
                    <option value="2" >3</option>
                    <option value="3" >4</option>
                    <option value="4">5</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="branch">Branch</label>
            <div class="col-md-6">
                <select name="branch" class="select select-primary select-block mbl form-control ">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>

        </div>
        @include('partials.modal.modal_footer')
    </form>
@endsection