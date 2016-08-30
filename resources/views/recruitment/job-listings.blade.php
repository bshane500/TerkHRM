<div class="page-wrapper">
    @foreach($vacancies as $vacancy)
        <ul>
            <li><a href="{{route('job-listings',$vacancy->id)
            }}">{{$vacancy->vacancy_name}}</a></li>
        </ul>
    @endforeach
</div>

