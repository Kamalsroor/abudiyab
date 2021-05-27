<x-layout :title="$addition->name" :breadcrumbs="['dashboard.additions.show', $addition]">
    <div class="row">
        <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('additions.attributes.name')</th>
                        <td>{{ $addition->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('additions.attributes.type')</th>
                        <td>{{ $addition->type }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('additions.attributes.mini_des')</th>
                        <td>{{ $addition->mini_des }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('additions.attributes.des')</th>
                        <td>{!! $addition->des !!}</td>
                    </tr>
                    @if($addition->getFirstMedia())
                        <tr>
                            <th width="200">@lang('additions.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $addition->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.additions.partials.actions.edit')
                    @include('dashboard.additions.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
