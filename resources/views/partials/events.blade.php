<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Upcoming Events</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Venue</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @if($events->isEmpty())
                    <tr><td>none</td></tr>
                @else
                    @foreach($events as $event)
                <tr>
                    <td>{{$event->title}}</td>
                    <td>{{$event->venue}}</td>
                    <td>{{$event->end_date_time->format('d-m-Y')}}</td>
                </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All</a>
        </div>
        <!-- /.box-footer -->
    </div>
</div>