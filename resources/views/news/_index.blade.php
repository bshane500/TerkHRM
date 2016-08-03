<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            News & Announcements
        </div>
        <div class="box-body">
           @if($news->isEmpty())
           <ul><li>No news available</li></ul>

           @else
            @foreach($news as $info)
               <div class="list-group">
                   <a href="#" class="list-group-item">
                       {{$info->title}}
                       <span class="pull-right text-muted">{{$info->published_at->diffForHumans()
                       }}</span>
                   </a>
               </div>
           @endforeach
           @endif
        </div>
    </div>
</div>