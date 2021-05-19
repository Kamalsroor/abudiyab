@can('confirmation', $order)

    @if ($order->pending())
        <a href="#order-{{ $order->id }}-confirmation-model"
        class="btn btn-success btn-sm"
        data-toggle="modal">
            <i class="fas fa fa-fw fa-trash"></i>
            @lang('orders.actions.confirmation')
        </a>

        <!-- Modal -->
        <div class="modal fade" id="order-{{ $order->id }}-confirmation-model" tabindex="-1" role="dialog"
            aria-labelledby="modal-title-{{ $order->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title-{{ $order->id }}">@lang('orders.dialogs.confirmation.title')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @lang('orders.dialogs.confirmation.info')
                    </div>
                    <div class="modal-footer">
                        {{ BsForm::patch(route('dashboard.orders.confirmation', $order)) }}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            @lang('orders.dialogs.confirmation.cancel')
                        </button>



                        <button type="submit" class="btn btn-success">
                            @lang('orders.dialogs.confirmation.confirm')
                        </button>
                        {{ BsForm::close() }}
                    </div>
                </div>
            </div>
        </div>
    @endif

@endcan
