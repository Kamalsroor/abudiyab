<button type="submit" class="btn btn-default btn-sm"
        data-checkbox=".item-checkbox"
        data-form="read-selected-form"
        form="read-selected-form">
    <i class="fa fa-fw fa-eye"></i>
    @lang('orders.actions.read')
</button>
<button type="submit" class="btn btn-default btn-sm"
        data-checkbox=".item-checkbox"
        data-form="unread-selected-form"
        form="unread-selected-form">
    <i class="fa fa-fw fa-eye-slash"></i>
    @lang('orders.actions.unread')
</button>
{{ BsForm::patch(route('dashboard.orders.read'), ['id' => 'read-selected-form', 'class' => 'd-none']) }}
{{ BsForm::close() }}
{{ BsForm::patch(route('dashboard.orders.unread'), ['id' => 'unread-selected-form', 'class' => 'd-none']) }}
{{ BsForm::close() }}
