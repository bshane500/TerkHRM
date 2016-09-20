<div class="modal fade" id="add_branch" tabindex="-1" role="dialog" aria-labelledby="branchLabel"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="branchLabel">Add New branch</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form">
                    {!! csrf_field() !!}

                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="branch_name">Branch
                                Name</label>
                            <div class="col-md-6">
                                <input id="branch_name" name="name" type="text"
                                       placeholder="branch Name" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="branch_code">Branch
                                Code</label>
                            <div class="col-md-6">
                                <input id="branch_code" name="branch_code" type="text"
                                       placeholder="branch code" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="region">Region</label>
                            <div class="col-md-4">
                                <select id="region" name="region"
                                        class="select2 select-primary select-block mbl form-control ">
                                    <option value="Greater Accra">Greater Accra</option>
                                    <option value="Volta">Volta</option>
                                    <option value="Western">Western</option>
                                    <option value="Eastern">Eastern</option>
                                </select>
                            </div>
                        </div>
                        @include('partials.modal.modal_footer')
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>