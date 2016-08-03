
    <div class="modal fade" id="leave_request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Submit New Request</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('leave-requests.store')}}" method="post" class="form-horizontal">
                        {!! csrf_field() !!}
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Contact on Leave</label>
                            <div class="col-md-6">
                               <input type="tel" name="contact_on_leave" value="" placeholder="Enter Phone Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="branch">Type of Leave</label>
                            <div class="col-md-6">
                                <select name="leave_type_id" class="select select-primary select-block mbl form-control ">
                                @foreach($leave_type as $ltype)
                                  <option value="{{$ltype->id}}">{{$ltype->name}}</option>
                                @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="reason">Reason</label>
                            <div class="col-md-6">
                                <textarea name="reason" value="" placeholder="Enter Reason" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="start_date">Start Date</label>
                            <div class="col-md-6">
                                <input type="date" name="start_date" value=""  id="start_date" class="form-control requestdates">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="end_date">End Date</label>
                            <div class="col-md-6">
                                <input type="date" name="end_date" value=""  id="end_date" class="form-control requestdates">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="end_date">Total Days</label>
                            <div class="col-md-6">
                                <input type="number" name="total_days_requested" value="" id="total_days" class="form-control">
                            </div>
                        </div>
                    @include('partials.modal.modal_footer')
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script>
        $(document).ready(function(){
         $('#end_date').on('change',function(e){
                    var end_date = e.target.value;
                    var start_date = $('#start_date').val();
                    $.get('ajax/dates?start-date='+start_date+ '&end-date='+end_date,function(data){
                        $("#total_days").val(data);
                        /*var totaldays = $('#total_days').val();
                    var remainingDays = 21 - totaldays;*/
                    //$('#remaining_days').val(remainingDays);
                    });
            });
        });

    </script>