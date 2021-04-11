<x-layout :title="$partner->name" :breadcrumbs="['dashboard.partners.show', $partner]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('partners.attributes.name')</th>
                        <td>{{ $partner->name }}</td>
                    </tr>
                    @if($partner->getFirstMedia())
                        <tr>
                            <th width="200">@lang('partners.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $partner->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.partners.partials.actions.edit')
                    @include('dashboard.partners.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
