{{ BsForm::resource('applications')->get(url()->current()) }}
@component('dashboard::components.box')
    @slot('title', trans('applications.filter'))

    <div class="row">
        <div class="col-md-3 d-flex align-items-end">
            {{ BsForm::radio('status')
                ->value('read')
                ->checked(request('status') == 'read')
                 ->label(trans('applications.attributes.read')) }}
        </div>
        <div class="col-md-3 d-flex align-items-end">
            {{ BsForm::radio('status')
                ->value('unread')
                ->checked(request('status') == 'unread')
                 ->label(trans('applications.attributes.unread')) }}
        </div>
        <div class="col-md-3 d-flex align-items-end">
            {{ BsForm::radio('status')
                ->value('all')
                ->checked(request('status') == 'all')
                 ->label(trans('applications.actions.list')) }}
        </div>
        <div class="col-md-3">
            {{ BsForm::number('perPage')
                ->value(request('perPage', 15))
                ->min(1)
                 ->label(trans('applications.perPage')) }}
        </div>
    </div>

    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa fa-fw fa-filter"></i>
            @lang('applications.actions.filter')
        </button>
    @endslot
@endcomponent
{{ BsForm::close() }}
