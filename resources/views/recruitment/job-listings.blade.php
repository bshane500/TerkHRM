@extends('layouts.public')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            @if($vacancies->isEmpty())
                <div class="box box-default">
                    <div class="box-header"><h1>No Vacancies</h1></div>
                    <div class="box-body"><h3>Come Back Later or You can subscribe Below</h3></div>
                </div>
            @else
                @foreach($vacancies as $vacancy)
                    <div class="col-md-6">
                        <div class="box box-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-aqua">

                                <h3 class="widget-user-username">{{$vacancy->job_title->job_title}}</h3>
                                <div class="widget-user-desc"></div>
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a><b>Minimum Qualification</b><span class="pull-right badge
                                    bg-blue">Bsc. Computer Science</span></a>
                                    </li>
                                    <li><a href="#"><b>No. Of Positions</b>
                                            <span
                                                class="pull-right badge
                                                bg-aqua">{{$vacancy->no_of_positions}}
                                            </span>
                                        </a>
                                    </li>
                                    <li><a href="#"><b>Years of Experience</b>
                                            <span class="pull-right badge
                                                bg-aqua">{{$vacancy->no_of_positions}}
                                            </span>
                                        </a>
                                    </li>
                                    <li><a><b>Job Description</b></a></li>
                                    <li>
                                        <a>{!!$vacancy->description!!}</a>
                                    </li>
                                    <div class="box-footer">
                                        <a href="{{route('job-listings.apply',$vacancy->vacancy_name)}}" class="btn btn-success pull-right">
                                            Apply 
                                        </a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    {{$vacancies->render()}}
@endsection

