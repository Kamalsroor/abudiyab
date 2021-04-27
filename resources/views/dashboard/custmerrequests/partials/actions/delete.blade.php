@can('delete', $custmerrequest)
<a href="#custmerrequest-{{ $custmerrequest->id }}-delete-model"
   class="btn btn-outline-danger btn-sm"
   data-toggle="modal">
  <i class="fas fa fa-fw fa-trash"></i>
</a>


<!-- Modal -->
<div class="modal fade" id="custmerrequest-{{ $custmerrequest->id }}-delete-model" tabindex="-1" role="dialog"
     aria-labelledby="modal-title-{{ $custmerrequest->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title-{{ $custmerrequest->id }}">@lang('custmerrequests.dialogs.delete.title')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      {{ BsForm::delete(route('dashboard.custmerrequests.destroy', $custmerrequest)) }}

      <div class="modal-body">
        @lang('custmerrequests.dialogs.delete.reseon')
        <div class="row">
            <div class="col-12">
                {{ BsForm::textarea('description') }}
            </div>
        </div>
      </div>

      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
              @lang('custmerrequests.dialogs.delete.cancel')
            </button>
            <button type="submit" class="btn btn-danger">
                @lang('custmerrequests.dialogs.delete.confirm')
            </button>
      </div>
        {{ BsForm::close() }}
    </div>
  </div>
</div>
@endcan
