@extends('layouts.app')
@section('title','Pay Grades')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{route('pay-grades.create')}}" class="btn btn-primary">
                <span><i class="fa fa-plus"></i> </span>
                Add Pay Grade
            </a>
        </div>
        <div class="panel-body">
            <table class="table table-hover" id="indexTables">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Currency</th>
                    <th>minimum</th>
                    <th>Maximum</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($pay_grades->isEmpty())
                    <tr>
                        <td  colspan="3">No Pay Grades Added</td>
                    </tr>
                @else
                    @foreach($pay_grades as $pay_grade)
                        <tr>
                            <td>
                                {{$pay_grade->id}}
                            </td>
                            <td>{{$pay_grade->title}}</td>
                            <td>{{$pay_grade->currency}}</td>
                            <td>{{$pay_grade->minimum_amount}}</td>
                            <td>{{$pay_grade->maximum_amount}}</td>
                            <td><a href="{{ route('pay-grades.edit',$pay_grade->id) }}"><i class="fa fa-edit"></i></a></td>
                            <td>
                                {!! Form::open(['method'=>'delete','route'=>['pay-grades.destroy',$pay_grade->id]]) !!}
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