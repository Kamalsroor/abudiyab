<x-layout :title="trans('applications.plural')" :breadcrumbs="['dashboard.applications.index']">
    @include('dashboard.applications.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('applications.actions.list') ({{ count_formatted($applications->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-delete
                        type="{{ \App\Models\Application::class }}"
                        :resource="trans('applications.plural')"></x-check-all-delete>
                @include('dashboard.applications.partials.actions.read')
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('applications.attributes.application_id')</th>
            <th>@lang('applications.attributes.name')</th>
            <th>@lang('applications.attributes.phone')</th>
            <th>@lang('applications.attributes.email')</th>
            <th>@lang('applications.attributes.expected_salaray')</th>
            <th>@lang('applications.attributes.work_name')</th>
            <th style="width: 160px">تقدم منذ</th>
            <th style="width: 160px">...</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($applications as $application)
            <tr class="{{ $application->read() ? 'tw-bg-gray-300' : 'font-weight-bold tw-bg-gray-100' }}">
                <td>
                    <x-check-all-item :model="$application"></x-check-all-item>
                </td>
                <td>
                    {{ $application->id }}
                </td>
                <td>
                    <a href="{{ route('dashboard.applications.show', $application) }}"
                       class="text-decoration-none text-ellipsis">
                        {{ $application->name }}
                    </a>
                </td>
                <td>{{ $application->phone }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->expected_salaray }}</td>
                <td>{{ $application->work->title }}</td>
                <td>{{ $application->created_at->diffForHumans() }}</td>
                <td>
                    <a class="text-decoration-none text-ellipsis" target="__blank" href="{{ $application->getFirstMediaUrl('cv') }}">
                        السيره الذاتيه
                    </a>
                </td>
                <td>
                    @include('dashboard.applications.partials.actions.show', ['application' => $application])
                    @include('dashboard.applications.partials.actions.delete', ['application' => $application])
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('applications.empty')</td>
            </tr>
        @endforelse

        @if($applications->hasPages())
            @slot('footer')
                {{ $applications->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
