
<div class="modal fade" id="branch_delete" tabindex="-1" role="dialog" aria-labelledby="departLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="confirm_label">Confirm</h4>
            </div>
        <div class="modal-body">
       <form method="post">
           {{csrf_field()}}
        <p>You are about to delete a Branch, Are you sure?</p>       
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">No,Get me out of here</button>
              <button id="del" class="btn btn-danger">Yes,Delete</button>
           </div>
         </form>
        </div>
      </div>
  </div>
</div>