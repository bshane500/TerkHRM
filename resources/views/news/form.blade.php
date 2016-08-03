
@extends('layouts.app')
@section('title','Add News')
@section('content')

    <div class="panel panel-primary">
            <div class="panel-heading">Event</div>
            <div class="panel-body">
                {!! Form::model($news,
                        ['method' =>  $news-> exists ? 'put':'post',
                         'route'  =>  $news-> exists ? ['news.update',$news->id]:['news.store']
                    ])!!}
                <div class=form-group>
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title',null, ['class' => 'form-control ','placeholder'=>'Title']) !!}
                </div><!--Job Description-->
                <div class=form-group>
                    {!! Form::label('body', 'Body') !!}
                    {!! Form::textarea('body',null, ['class' => 'form-control textarea','placeholder'=>'Description']) !!}
                </div>
                <!--Published At-->
                <div class=form-group>
                    {!! Form::label('published_at', 'Published Date') !!}
                    {!! Form::date('published_at',$news->published_at, ['class' => 'form-control datepicker']) !!}
                </div>


                <!--submit button-->
                {!! Form::submit('Save!',['class'=>'btn btn-primary btn-wide' ])!!}
                {!! Form::close() !!}
            </div>
        </div>

@endsection
