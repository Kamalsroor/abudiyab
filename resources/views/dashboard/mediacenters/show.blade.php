<x-layout :title="$mediacenter->title" :breadcrumbs="['dashboard.mediacenters.show', $mediacenter]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('mediacenters.attributes.title')</th>
                        <td>{{ $mediacenter->title }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('mediacenters.attributes.description')</th>
                        <td>{{ $mediacenter->description }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('mediacenters.attributes.show')</th>
                        <td>{{ $mediacenter::shownews[$mediacenter->show]}}</td>
                    </tr>
                    @if($mediacenter->getFirstMedia())
                        <tr>
                            <th width="200">@lang('mediacenters.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $mediacenter->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.mediacenters.partials.actions.edit')
                    @include('dashboard.mediacenters.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
