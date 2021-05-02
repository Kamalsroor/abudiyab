@can('delete', $purchaserequest)
<a href="#custmerrequest-{{ $purchaserequest->id }}-approved-model"
    class="btn btn-outline-success btn-sm"
    data-toggle="modal">
   موافقه
 </a>


    <!-- Modal -->
    <div class="modal fade" id="purchaserequest-{{ $purchaserequest->id }}-delete-model" tabindex="-1" role="dialog"
         aria-labelledby="modal-title-{{ $purchaserequest->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-{{ $purchaserequest->id }}">@lang('purchaserequests.dialogs.delete.title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('purchaserequests.dialogs.delete.info')
                </div>
                <div class="modal-footer">
                    {{ BsForm::delete(route('dashboard.purchaserequests.destroy', $purchaserequest)) }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        @lang('purchaserequests.dialogs.delete.cancel')
                    </button>
                    <button type="submit" class="btn btn-danger">
                        @lang('purchaserequests.dialogs.delete.confirm')
                    </button>
                    {{ BsForm::close() }}
                </div>
            </div>
        </div>
    </div>
@endcan
