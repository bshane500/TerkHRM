@extends('layouts.app')
@section('title',' Branches')
@section('content')

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="#" id="add" class="btn btn-primary">Add
                    New Branch</a>
            </div>
            <div class="box-body">
                <table class="table table-hover" id="indexTables">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Branch Code</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($branches->isEmpty())
                        <tr>
                            <td colspan="3">No branches Added</td>
                        </tr>
                    @else
                        @foreach($branches as $branche)
                            <tr>
                                <td>{{$branche->name}}</td>
                                <td>{{$branche->branch_code}}</td>
                                <td>
                                    <div hidden id="id"></div>
                                    <button class="edit-modal btn btn-info"
                                            data-code="{{$branche->branch_code}}"
                                            data-name="{{$branche->name}}" data-id="{{$branche->id}}">

                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="delete-modal btn btn-danger"
                                            data-code="{{$branche->branch_code}}"
                                            data-name="{{$branche->name}}" data-id="{{$branche->id}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>
                                </td>

                            </tr>

                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>



    @include('partials.modal.add_branch')
    @include('partials.modal.delete_confirm.delete_branch')
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