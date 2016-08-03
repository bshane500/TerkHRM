@inject('$bran','App\Controller\BranchController')
<div class="modal fade" id="branch_delete" tabindex="-1" role="dialog" aria-labelledby="departLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="confirm_label">Confirm</h4>
            </div>
        <div class="modal-body">
        {!! Form::open(['method'=>'delete','route'=> ['branches.destroy',$bran->show()->id]]) !!}
        <p>You are about to delete a Branch, Are you sure?</p>       
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">No,Get me out of here</button>
              <button type="submit" class="btn btn-danger">Yes,Delete</button>
           </div>
         {!! Form::close() !!}
        </div>
      </div>
  </div>
</div>