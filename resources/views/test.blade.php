@extends('layouts.app')
@section('content')
    <form class="form-horizontal" action="{{route('departments.store')}}" method="post" role="form">
        {!! csrf_field() !!}

        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="branch_name">Department Name</label>
                <div class="col-md-6">
                    <input id="department_name" name="name" type="text" placeholder="department Name" class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="department_code">Department Code</label>
                <div class="col-md-6">
                    <input id="department_code" name="department_code" type="text" placeholder="department code" class="form-control input-md">
                </div>
            </div>

            <select name="tese" id="">
                @foreach($departments as $depart)
                    <option value="{{$depart->id}}">{{$depart->name}}</option>
                @endforeach
            </select>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </fieldset>
    </form>
@endsection