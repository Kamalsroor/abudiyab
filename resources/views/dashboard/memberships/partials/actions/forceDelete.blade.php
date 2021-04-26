@can('forceDelete', $membership)
    <a href="#membership-{{ $membership->id }}-force-delete-model"
       class="btn btn-outline-danger btn-sm"
       data-toggle="modal">
        <i class="fas fa fa-fw fa-trash"></i>
    </a>

    <!-- Modal -->
    <div class="modal fade" id="membership-{{ $membership->id }}-force-delete-model" tabindex="-1" role="dialog"
         aria-labelledby="modal-title-{{ $membership->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-{{ $membership->id }}">@lang('memberships.dialogs.forceDelete.title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('memberships.dialogs.forceDelete.info')
                </div>
                <div class="modal-footer">
                    {{ BsForm::delete(route('dashboard.memberships.forceDelete', $membership)) }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        @lang('memberships.dialogs.forceDelete.cancel')
                    </button>
                    <button type="submit" class="btn btn-danger">
                        @lang('memberships.dialogs.forceDelete.confirm')
                    </button>
                    {{ BsForm::close() }}
                </div>
            </div>
        </div>
    </div>
@endcan
