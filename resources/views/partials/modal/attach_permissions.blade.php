
<div class="modal fade" id="attach_permissions" tabindex="-1" role="dialog"
     aria-labelledby="groupaddlabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="groupaddlabel">Attach Permissions to Role</h4>
            </div>
            <div class="modal-body">


                {!! Form::open(
                    [
                       'method' =>'post',
                       'route'  => 'admin.attach-permissions',
                       'class'  =>'form-horizontal'
                    ])!!}
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Select Role</label>
                        <div class="col-md-6">
                            <!--Role or User Group Name-->
                            {!! Form::select('role',$roles,null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="display_name">Permissions</label>
                        <div class="col-md-6">
                            <!--Role or User Group Name-->
                            {!! Form::select('permissions[]',$perms,null, ['class' => 'form-control select2','multiple','placeholder'=>'Display Name']) !!}
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