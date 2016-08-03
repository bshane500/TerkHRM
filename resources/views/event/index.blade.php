@extends('layouts.app')
@section('title','Events')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{route('events.create')}}" class="btn btn-primary" >
                <span><i class="fa fa-plus"></i> </span>
                Add Event
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Venue</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($events->isEmpty())
                    <tr>
                        <td colspan="3">No Events Added</td>
                    </tr>
                @else
                    @foreach($events as $event)
                        <tr>
                            <td>
                                {{$event->id}}
                            </td>
                            <td>{{$event->title}}</td>
                            <td>{{$event->venue}}</td>
                            <td>{{$event->start_date_time->format('d-m-Y,H:m')}}</td>
                            <td>{{$event->end_date_time->format('d-m-Y,H:m')}}</td>
                            <td><a href="{{ route('events.edit',$event->id) }}"><i
                                            class="fa fa-edit"></i></a></td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['events.destroy',$event->id]]) !!}
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