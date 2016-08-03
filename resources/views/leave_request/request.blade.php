
<div class="modal fade" id="leave_request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Submit New Request</h4>
            </div>
            <div class="modal-body">
                <form action="add_employee_submit" method="post" accept-charset="utf-8"
                      class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Contact on Leave</label>
                        <div class="col-md-6">
                            <input type="tel" name="phone_number" value="" placeholder="Enter Phone Number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="leave_type">Type of Leave</label>
                        <div class="col-md-6">
                            <select name="leave_type" class="select select-primary select-block mbl form-control ">
                                @foreach($leave_type as $ltype)
                                    <option value="{{$ltype->id}}">{{$ltype->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="reason">Reason</label>
                        <div class="col-md-6">
                            <textarea name="reason" placeholder="Enter Reason" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="start_date">Start Date</label>
                        <div class="col-md-6">
                            <input type="date" name="start_date" value=""  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="end_date">End Date</label>
                        <div class="col-md-6">
                            <input type="date" name="end_date" value=""  class="form-control">
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
