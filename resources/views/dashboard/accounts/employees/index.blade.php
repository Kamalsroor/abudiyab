<x-layout :title="trans('employees.plural')" :breadcrumbs="['dashboard.employees.index']">
    @include('dashboard.accounts.employees.partials.filter')

    @component('dashboard::components.table-box')

        @slot('title')
            @lang('employees.actions.list') ({{ count_formatted($employees->total()) }})
        @endslot

        <thead>
        <tr>
            <th colspan="100">
                <x-check-all-delete
                        type="{{ \App\Models\Employee::class }}"
                        :resource="trans('employees.plural')"></x-check-all-delete>

                @include('dashboard.accounts.employees.partials.actions.create')
            </th>
        </tr>
        <tr>
            <th>
                <x-check-all></x-check-all>
            </th>
            <th>@lang('employees.attributes.name')</th>
            <th class="d-none d-md-table-cell">@lang('employees.attributes.email')</th>
            <th>@lang('employees.attributes.phone')</th>
            <th>@lang('employees.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($employees as $employee)
            <tr>
                <td>
                    <x-check-all-item :model="$employee"></x-check-all-item>
                </td>
                <td>
                    <a href="{{ route('dashboard.employees.show', $employee) }}"
                       class="text-decoration-none text-ellipsis">
                            <span class="index-flag">
                            @include('dashboard.accounts.employees.partials.flags.svg')
                            </span>
                        <img src="{{ $employee->getAvatar() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2">
                        {{ $employee->name }}
                    </a>
                </td>

                <td class="d-none d-md-table-cell">
                    {{ $employee->email }}
                </td>
                <td>
                    @include('dashboard.accounts.employees.partials.flags.phone')
                </td>
                <td>{{ $employee->created_at->format('Y-m-d') }}</td>

                <td style="width: 160px">
                    @include('dashboard.accounts.employees.partials.actions.impersonate')
                    @include('dashboard.accounts.employees.partials.actions.edit')
                    @include('dashboard.accounts.employees.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('employees.empty')</td>
            </tr>
        @endforelse

        @if($employees->hasPages())
            @slot('footer')
                {{ $employees->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
