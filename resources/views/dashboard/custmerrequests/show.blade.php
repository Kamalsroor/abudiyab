<x-layout :title="$custmerrequest->name" :breadcrumbs="['dashboard.custmerrequests.show', $custmerrequest]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('custmerrequests.attributes.name')</th>
                        <td>{{ $custmerrequest->name }}</td>
                    </tr>
                    @if($custmerrequest->getFirstMedia())
                        <tr>
                            <th width="200">@lang('custmerrequests.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $custmerrequest->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                @slot('footer')
                    @include('dashboard.custmerrequests.partials.actions.edit')
                    @include('dashboard.custmerrequests.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
