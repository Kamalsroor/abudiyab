<x-layout :title="$work->title" :breadcrumbs="['dashboard.works.show', $work]">
    <div class="row">
        <div class="col-md-8">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('works.attributes.title')</th>
                        <td>{{ $work->title }}</td>
                        <th width="200">@lang('works.attributes.description')</th>
                        <td>{{ $work->description }}</td>
                        <th width="200">@lang('works.attributes.available')</th>
                        <td>{{ $work->available ? 'متاح' : 'غير متاح' }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.works.partials.actions.edit')
                    @include('dashboard.works.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
