@extends('layouts.app')
@section('title','News')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{route('news.create')}}" class="btn btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Add News
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Author</th>
                    <th>Published At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($news->isEmpty())
                    <tr>
                        <td colspan="3">No News Added</td>
                    </tr>
                @else
                    @foreach($news as $info)
                        <tr>
                            <td>
                                {{$info->id}}
                            </td>
                            <td>{{$info->title}}</td>
                            <td>
                                {{$info->body}}
                            </td>
                            <td>{{$info->user_id}}</td>
                            <td>{{$info->published_at->diffForHumans()}}</td>
                            <td><a href="{{ route('news.edit',$info->id) }}"><i
                                            class="fa fa-edit"></i></a></td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['news.destroy',$info->id]]) !!}
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
@endsection