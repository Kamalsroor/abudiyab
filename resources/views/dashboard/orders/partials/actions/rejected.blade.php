@can('delete', $order)

    @if ($order->pending())
        <a href="#order-{{ $order->id }}-rejected-model"
        class="btn btn-danger btn-sm"
        data-toggle="modal">
            <i class="fas fa fa-fw fa-trash"></i>
            @lang('orders.actions.rejected')
        </a>

        <!-- Modal -->
        <div class="modal fade" id="order-{{ $order->id }}-rejected-model" tabindex="-1" role="dialog"
            aria-labelledby="modal-title-{{ $order->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title-{{ $order->id }}">@lang('orders.dialogs.rejected.title')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{ BsForm::patch(route('dashboard.orders.rejected', $order)) }}
                    <div class="modal-body">
                        @lang('orders.dialogs.rejected.info')
                        {{ BsForm::text('status')->label(trans('orders.dialogs.rejected.status')) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            @lang('orders.dialogs.rejected.cancel')
                        </button>
                        <button type="submit" class="btn btn-danger">
                            @lang('orders.dialogs.rejected.confirm')
                        </button>
                    </div>
                    {{ BsForm::close() }}

                </div>
            </div>
        </div>
    @endif

@endcan
