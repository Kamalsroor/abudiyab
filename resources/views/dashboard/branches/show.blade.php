<x-layout :title="$branch->name" :breadcrumbs="['dashboard.branches.show', $branch]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('branches.attributes.name')</th>
                        <td>{{ $branch->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('branches.attributes.code')</th>
                        <td>{{ $regions[$branch->code] }}</td>

                    </tr>
                    <tr>
                        <th width="200">@lang('branches.attributes.p_coud')</th>
                        <td>{{ $branch->p_coud }}</td>
                    </tr>
                    {{-- @if($branch->getFirstMedia())
                        <tr>
                            <th width="200">@lang('branches.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $branch->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif --}}
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.branches.partials.actions.edit')
                    @include('dashboard.branches.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
        <div class="col-md-6">
            <livewire:cars-in-stock :branch="$branch->id" />

        </div>
    </div>
</x-layout>
