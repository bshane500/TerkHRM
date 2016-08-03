@extends('layouts.app')
@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_department">Add
                New department</a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <caption>table title and/or explanatory text</caption>
                <thead>
                <tr>
                    <th>Name</th>
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
                            <td>
                                <a href="{{ route('departments.edit',$department->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                            {!! Form::open(['method'=>'delete','route'=>['departments.destroy',$department->id]]) !!}
                                <button class="btn btn-danger btn-xs" type="submit" id="del"
                                        onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i>
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

    {{--<script>
        function confirm(){
            bootbox.confirm("Are You Sure?",function(result){
                if (result) {
                    console.log('delted')
                }
            })
        }
    </script>--}}

@endsection