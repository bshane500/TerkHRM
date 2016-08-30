
<div class="modal fade" id="add_employee" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content col-lg-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h6 class="modal-title" id="myModalLabel">Add New Employee</h6>
            </div>
            <div class="modal-body">
                <form action="{{route('employees.store')}}" method="post" class="form-horizontal">
                   {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="first_name">First Name</label>
                        <div class="col-md-6">
                            <input type="text" name="first_name" value="" placeholder="First Name" class="form-control">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="last_name">Last Name</label>
                        <div class="col-md-6">
                            <input type="text" name="last_name" value="" placeholder="Last Name" class="form-control">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-6">
                           <input type="email" name="email" value="" placeholder="Enter Email" class="form-control"> 
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="phone_number">Phone Number</label>
                        <div class="col-md-6">
                            <input type="tel" name="phone_number" value="" placeholder="Enter Phone Number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date_of_birth">Date Of Birth</label>
                        <div class="col-md-6">
                            {!! Form::text('date_of_birth',null, ['class' => 'form-control
                            dobdatepicker']) !!}
                        </div>                      
                    </div>
                    <div class="form-group">
                        <label for="roles" class="col-md-4 control-label">Roles</label>
                        <div class="col-md-6" style="width: 250px">
                            {!! Form::select('roles[]',$select['roles'],null,
                            ['class' => 'form-control select2 multiselect-primary','multiple']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="branch_id">Branch</label>
                        <div class="col-md-6">
                            {!! Form::select('branch_id',$select['branches'], null, ['class' =>
                            'form-control
                           select-primary select-block mbl'])!!}
                        </div>
                        
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="department_id">Department</label>
                    <div class="col-md-6">
                        {!! Form::select('department_id',$select['departments'], null, ['class' =>
                        'form-control
                          select-primary select-block mbl'])!!}
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