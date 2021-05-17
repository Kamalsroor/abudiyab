@can('delete', $area_pricing)
    <a href="#area_pricing-{{ $area_pricing->id }}-delete-model"
       class="btn btn-outline-danger btn-sm"
       data-toggle="modal">
        <i class="fas fa fa-fw fa-trash"></i>
    </a>


    <!-- Modal -->
    <div class="modal fade" id="area_pricing-{{ $area_pricing->id }}-delete-model" tabindex="-1" role="dialog"
         aria-labelledby="modal-title-{{ $area_pricing->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-{{ $area_pricing->id }}">@lang('area_pricings.dialogs.delete.title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('area_pricings.dialogs.delete.info')
                </div>
                <div class="modal-footer">
                    {{ BsForm::delete(route('dashboard.area_pricings.destroy', $area_pricing)) }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        @lang('area_pricings.dialogs.delete.cancel')
                    </button>
                    <button type="submit" class="btn btn-danger">
                        @lang('area_pricings.dialogs.delete.confirm')
                    </button>
                    {{ BsForm::close() }}
                </div>
            </div>
        </div>
    </div>
@endcan
