
<div class="modal fade" id="add_leave_type" tabindex="-1" role="dialog" aria-labelledby="leavetypeLabel" aria-hidden="true">

  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="leavetypeLabel">Add New Leave</h4>
            </div>
        <div class="modal-body">

        <form class="form-horizontal" method="post" action="{{route('leave-types.store')}}">
          {!! csrf_field() !!}
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Leave Name</label>
          <div class="col-md-6">
          <input id="branch_name" name="name" type="text" placeholder="Leave Name" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Description</label>  
          <div class="col-md-6">
          <textarea name="description" class="form-control input-md">

          </textarea>
          </div>
        </div>

        @include('partials.modal.modal_footer')
        </fieldset>
        </form>
        </div>
      </div>
  </div>
</div>