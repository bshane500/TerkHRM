@extends('layouts.app')
@section('title',' Branches')
@section('content')

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="#" id="add" class="btn btn-primary">
                    AddNew Branch
                </a>
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
                                    <div hidden id="id" data-id="{{$branche->id}}"></div>
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
            $('#msubmit').text("Update").removeClass('btn-primary').addClass('btn-info update').removeAttr('type');
            $('.modal-title').text('Edit Branch');
            $('#branch_name').val($(this).data('name'));
            $('#branch_code').val($(this).data('code'));
            $('#id').val($(this).data('id'));
            $('#add_branch').modal('show');
            console.log($('#id').val());
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
        $('.modal-footer').on('click', '.update', function() {

            $.ajax({
                type: 'patch',
                url: '/branches/'+$('#id').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $('#id').val(),
                    'name': $('#branch_name').val(),
                    'branch_code':$('#branch_code').val()
                },
                success:function (data) {
                    if(data == 200) {
                        window.location = '/branches';
                        toastr.options = {
                            "closeButton": true
                        };
                        toastr.success('Updates]d', 'Notification');
                    }
                    else{
                        toastr.options ={
                            "closeButton": true
                        };
                        toastr.error('Error', 'Notification');
                    }

                }
            });

        });

    </script>

@endsection