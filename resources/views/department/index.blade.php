@extends('layouts.app')
@section('title','Departments')
@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_department">Add
                New department</a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Department Code</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($departments->isEmpty())
                    <tr>
                        <td colspan="3">No departments added yet</td>
                    </tr>
                @else
                    @foreach($departments as $department)
                        <tr>
                            <td>{{$department->name}}</td>
                            <td>{{$department->department_code}}</td>
                            <td>
                                <a  class="edit-modal btn btn-info" href="{{ route('departments.edit',$department->id) }}">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>
                            </td>
                            <td>
                            {!! Form::open(['method'=>'delete','route'=>['departments.destroy',$department->id]]) !!}
                                <button class="delete-modal btn btn-danger"
                                        type="submit"
                                        onclick="return confirm('Are you sure?')"
                                        data-id="{{$department->id}}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            {!! Form::close() !!}

                            </td>
                        </tr>

                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.modal.add_department')

    <script>
        $(document).on('click', '.edit-modal', function() {
            $('#msubmit').text("Update").removeClass('btn-primary').addClass('btn-info update');
            form.action('/branches/update/'+$(this).data('id'));
            $('.modal-title').text('Edit Branch');
            $('#branch_name').val($(this).data('name'));
            $('#branch_code').val($(this).data('code'));
            $('#id').text($(this).data('id'));
            $('#add_branch').modal('show');
        });
        $(document).on('click','#add',function () {
            $('#msubmit').text("Save");
            $('.modal-title').text('Add Branch');
            $('#branch_name').val('');
            $('#branch_code').val('');
            $('#add_branch').modal('show');
        });
        $(document).on('click','.delete-modal',function () {
            $('.modal-title').text('Delete Branch');
            $('#branch_delete').modal('show');
        });

    </script>

@endsection