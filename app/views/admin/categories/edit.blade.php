{{-- /home/vagrant/Code/ajaxcrud4/app/views/admin/categories/edit.blade.php --}}
{{-- /home/vagrant/Code/ajaxcrud4/app/views/admin/events/edit.blade.php --}}
<div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="editEventLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editEventLabel">Edit Events</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger avatar_alert" role="alert" style="display: none">
              <ul></ul>
          </div>
        {{ Form::open(['id' => 'edit_form', 'method' => 'put']) }}
  			<div class="control-group">
  				{{ Form::label('name', 'Name', ['class' => 'control-label'])}}
  				<div class="controls">
  					{{ Form::text('name', null, ['class' => 'span5', 'placeholder' => 'Name', 'id' => 'name'])}}
  				</div>
  			</div>
        	{{ Form::close()}}
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateButton">Confirm</button>
        </div>
      </div>
    </div>
  </div>
</div>