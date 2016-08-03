
<div class="modal fade" id="add_permission" tabindex="-1" role="dialog" aria-labelledby="groupaddlabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="groupaddlabel">Add New Permission</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(
                    [
                       'method' => 'post',
                       'route'  => 'admin.create-permission',
                       'class'  =>'form-horizontal'
                    ])!!}
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <div class="col-md-6">
                            <!--Role or User Group Name-->
                            {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Permission name']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="display_name">Display Name</label>
                        <div class="col-md-6">
                            <!--Role or User Group Name-->
                            {!! Form::text('display_name',null, ['class' => 'form-control ','placeholder'=>'Display Name']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-6">
                            <!--Role or User Group Name-->
                            {!! Form::textarea('description',null, ['class' => 'form-control ','placeholder'=>'Description']) !!}
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>