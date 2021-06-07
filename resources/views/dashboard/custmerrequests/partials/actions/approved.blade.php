@can('delete', $custmerrequest)
<a href="#custmerrequest-{{ $custmerrequest->id }}-approved-model"
   class="btn btn-outline-success btn-sm"
   data-toggle="modal">
  موافقه
</a>


<!-- Modal -->
<div class="modal fade" id="custmerrequest-{{ $custmerrequest->id }}-approved-model" tabindex="-1" role="dialog"
     aria-labelledby="modal-title-{{ $custmerrequest->id }}" aria-hidden="approved">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title-{{ $custmerrequest->id }}">@lang('custmerrequests.dialogs.approved.title')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      {{ BsForm::resource('custmerrequests')->putModel($custmerrequest, route('dashboard.custmerrequests.update', $custmerrequest)) }}
        <div class="modal-body">
            @lang('custmerrequests.dialogs.approved.info')

            <div class="row">
                <div class="col-6">
                    <img style="width: 100%;" src="{{$custmerrequest->getFirstMediaUrl('identityFace')}}" alt="">
                </div>
                <div class="col-6">
                    <img style="width: 100%;" src="{{$custmerrequest->getFirstMediaUrl('identityBack')}}" alt="">
                </div>
                <div class="col-6">
                    <img style="width: 100%;" src="{{$custmerrequest->getFirstMediaUrl('licenceFace')}}" alt="">
                </div>
                <div class="col-6">
                    <img style="width: 100%;" src="{{$custmerrequest->getFirstMediaUrl('licenceBack')}}" alt="">
                </div>
                <div class="col-4">
                    {{ BsForm::text('id_number') }}
                </div>
                <div class="col-4">
                    {{ BsForm::date('id_expiry_date') }}

                </div>
                <div class="col-4">
                    {{ BsForm::select('nationality')->options(trans('users.countries')) }}
                </div>

                <div class="col-4">
                    {{ BsForm::text('driver_number') }}
                </div>
                <div class="col-4">
                    {{ BsForm::date('driver_id_expiry_date') }}
                </div>
                <div class="col-4">
                    {{ BsForm::text('address') }}
                </div>

                <div class="col-4">
                    {{ BsForm::date('date_of_birth') }}
                </div>
                <div class="col-4">
                    {{ BsForm::select('gender')->options(trans('users.gender'))}}
                </div>

            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
            @lang('custmerrequests.dialogs.approved.cancel')
            </button>
            <button type="submit" class="btn btn-success">
            @lang('custmerrequests.dialogs.approved.confirm')
            </button>
        </div>
        {{ BsForm::close() }}
    </div>
  </div>
</div>
@endcan
