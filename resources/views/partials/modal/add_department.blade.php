
<div class="modal fade" id="add_department" tabindex="-1" role="dialog" aria-labelledby="departLabel" aria-hidden="true">

  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="departLabel">Add New Department</h4>
            </div>
        <div class="modal-body">

        <form class="form-horizontal" action="{{route('departments.store')}}" method="POST">
            {!! csrf_field() !!}
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="branch_name">Department Name</label>  
          <div class="col-md-6">
          <input id="department_name" name="name" type="text" placeholder="department Name" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="department_code">Department Code</label>  
          <div class="col-md-6">
          <input id="department_code" name="department_code" type="text" placeholder="department code" class="form-control input-md">  
          </div>
        </div>

        
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
           </div>
        </fieldset>
        </form>
        </div>
      </div>
  </div>
</div>