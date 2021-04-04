<x-layout :title="$manufactory->name" :breadcrumbs="['dashboard.manufactories.show', $manufactory]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('manufactories.attributes.name')</th>
                        <td>{{ $manufactory->name }}</td>
                    </tr>
                    @if($manufactory->getFirstMedia())
                        <tr>
                            <th width="200">@lang('manufactories.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $manufactory->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.manufactories.partials.actions.edit')
                    @include('dashboard.manufactories.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
