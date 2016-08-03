
<div class="modal fade" id="add_job_title" tabindex="-1" role="dialog"
     aria-labelledby="label" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="label">Add New Job Title</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" method="post" action="{{route('branches.store')}}">
                    {!! csrf_field() !!}

                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="branch_name">Branch Name</label>
                            <div class="col-md-6">
                                <input id="branch_name" name="name" type="text" placeholder="branch Name" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="branch_code">Branch Code</label>
                            <div class="col-md-6">
                                <input id="branch_code" name="branch_code" type="text" placeholder="branch code" class="form-control input-md">
                            </div>
                        </div>

                        @include('partials.modal.modal_footer')
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>