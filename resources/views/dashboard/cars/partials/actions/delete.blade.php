@can('delete', $car)
<a href="#car-{{ $car->id }}-delete-model"
   class="btn btn-outline-danger btn-sm"
   data-toggle="modal">
  <i class="fas fa fa-fw fa-trash"></i>
</a>


<!-- Modal -->
<div class="modal fade" id="car-{{ $car->id }}-delete-model" tabindex="-1" role="dialog"
     aria-labelledby="modal-title-{{ $car->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title-{{ $car->id }}">@lang('cars.dialogs.delete.title')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @lang('cars.dialogs.delete.info')
      </div>
      <div class="modal-footer">
        {{ BsForm::delete(route('dashboard.cars.destroy', $car)) }}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          @lang('cars.dialogs.delete.cancel')
        </button>
        <button type="submit" class="btn btn-danger">
          @lang('cars.dialogs.delete.confirm')
        </button>
        {{ BsForm::close() }}
      </div>
    </div>
  </div>
</div>
@endcan
