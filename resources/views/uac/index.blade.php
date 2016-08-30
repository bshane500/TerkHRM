@extends('layouts.app')
@section('title','User Groups')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="#" data-toggle="modal" data-target="#add_usergroup" class="btn btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Add New User Group
            </a>
            <a href="#" data-toggle="modal" data-target="#attach_permissions" class="btn
            btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Attach Permissions
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Group</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($usergroups->isEmpty())
                    <tr>
                        <td  colspan="3">No user added yet</td>
                    </tr>
                @else
                    @foreach($usergroups as $group)
                        <tr>
                            <td>
                                {{$group->id}}
                            </td>
                            <td>{{$group->display_name}}</td>
                            <td>{{$group->description}}</td>
                            <td><a href="#" data-toggle="modal" data-target="#add_usergroup"><i class="fa fa-edit"></i></a></td>
                            <td ><a id="group-delete" href="{{route('admin.delete-role',$group->id)}}" ><i class="fa fa-remove"></i></a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="#" data-toggle="modal" data-target="#add_permission" class="btn btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Add New Permission
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Permission</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($permissions->isEmpty())
                    <tr>
                        <td  colspan="3">No user added yet</td>
                    </tr>
                @else
                    @foreach($permissions as $permission)
                        <tr>
                            <td>
                                {{$permission->id}}
                            </td>
                            <td>{{$permission->display_name}}</td>
                            <td>{{$permission->description}}</td>
                            <td><a href="#"><i class="fa fa-edit"></i></a></td>
                            <td><a href="#"><i class="fa fa-remove"></i></a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    @include('partials.modal.add_user_group')
    @include('partials.modal.add_permission')
    @include('partials.modal.attach_permissions')


    <script>
        $(document).on("click","#group-delete",function(e){
            el = document.getElementById('group-delete');
            e.preventDefault();
            bootbox.confirm("Are You Sure?", function(result){
                if (result){
                    console.log(el)
                }
            })
        });
    </script>
@endsection