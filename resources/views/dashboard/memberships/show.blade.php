<x-layout :title="$membership->name" :breadcrumbs="['dashboard.memberships.show', $membership]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('memberships.attributes.name')</th>
                        <td>{{ $membership->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('memberships.attributes.rental_discount')</th>
                        <td>{{ $membership->rental_discount }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('memberships.attributes.ratio_points')</th>
                        <td>{{ $membership->ratio_points }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('memberships.attributes.extra_hours')</th>
                        <td>{{ $membership->extra_hours }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('memberships.attributes.allowed_Kilos')</th>
                        <td>{{ $membership->allowed_Kilos }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('memberships.attributes.delivery_discount_regions')</th>
                        <td>{{ $membership->delivery_discount_regions }}</td>
                    </tr>
                    @if($membership->getFirstMedia())
                        <tr>
                            <th width="200">@lang('memberships.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $membership->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    @if($membership->getFirstMedia('profile'))
                        <tr>
                            <th width="200">@lang('memberships.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $membership->getMediaResource('profile') }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.memberships.partials.actions.edit')
                    @include('dashboard.memberships.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
