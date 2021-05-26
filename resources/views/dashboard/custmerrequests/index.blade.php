<x-layout :title="trans('custmerrequests.plural')" :breadcrumbs="['dashboard.custmerrequests.index']">
    @include('dashboard.custmerrequests.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title')
            @lang('custmerrequests.actions.list') ({{ $custmerrequests->total() }})
        @endslot

        <thead>
        <tr>
          <th colspan="100">
            <div class="d-flex">
                <x-check-all-delete
                    type="{{ \App\Models\Custmerrequest::class }}"
                    :resource="trans('custmerrequests.plural')"></x-check-all-delete>
                <x-import-excel
                            model="{{ \App\Models\Custmerrequest::class }}"
                            import="{{ \App\Imports\CustmerrequestsImport::class }}"
                            exportResource="{{ App\Http\Resources\CustmerrequestResource::class }}"
                            :resource="trans('custmerrequests.plural')"></x-import-excel>
                <x-export-excel
                            model="{{ \App\Models\Custmerrequest::class }}"
                            export="{{ \App\Exports\Export::class }}"
                            resource="{{ App\Http\Resources\CustmerrequestResource::class }}"
                            fileName="Custmerrequests"
                ></x-export-excel>
                <div class="ml-2 d-flex justify-content-between flex-grow-1">
                    @include('dashboard.custmerrequests.partials.actions.create')
                    @include('dashboard.custmerrequests.partials.actions.trashed')
                </div>
            </div>
          </th>
        </tr>
        <tr>
            <th style="width: 30px;" class="text-center">
              <x-check-all></x-check-all>
            </th>
            <th>@lang('custmerrequests.attributes.name')</th>
            <th>@lang('custmerrequests.attributes.email')</th>
            <th>@lang('custmerrequests.attributes.identityfront')</th>
            <th>@lang('custmerrequests.attributes.identityback')</th>
            <th>@lang('custmerrequests.attributes.licencefront')</th>
            <th>@lang('custmerrequests.attributes.licenceback')</th>
            <th>@lang('custmerrequests.attributes.created_at')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($custmerrequests as $custmerrequest)
                <tr class="{{$custmerrequest->is_confirmed == 'pending' ? 'table-warning': "" }} {{ $custmerrequest->is_confirmed == 'confirmed' ? 'table-success' : ""}} {{ $custmerrequest->is_confirmed == 'rejected' ? 'table-danger' : ""}}">
                    <td class="text-center">
                    <x-check-all-item :model="$custmerrequest"></x-check-all-item>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.custmerrequests.show', $custmerrequest) }}"
                            class="text-decoration-none text-ellipsis">
                            {{$custmerrequest->customer->name}}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.custmerrequests.show', $custmerrequest) }}"
                            class="text-decoration-none text-ellipsis">
                            {{$custmerrequest->customer->email}}
                        </a>
                    </td>
                    <td>
                        @if($custmerrequest->getFirstMedia('identityFace'))
                        <file-preview :media="{{ $custmerrequest->getMediaResource('identityFace') }}"></file-preview>
                        @endif
                    </td>
                    <td>
                        @if($custmerrequest->getFirstMedia('identityBack'))
                        <file-preview :media="{{ $custmerrequest->getMediaResource('identityBack') }}"></file-preview>
                        @endif
                    </td>
                    <td>
                        @if($custmerrequest->getFirstMedia('licenceFace'))
                        <file-preview :media="{{ $custmerrequest->getMediaResource('licenceFace') }}"></file-preview>
                        @endif
                    </td>
                    <td>
                        @if($custmerrequest->getFirstMedia('licenceBack'))
                        <file-preview :media="{{ $custmerrequest->getMediaResource('licenceBack') }}"></file-preview>
                        @endif
                    </td>
                    <td>{{ $custmerrequest->created_at->format('Y-m-d') }}</td>

                    <td style="width: 160px">
                        {{-- @include('dashboard.custmerrequests.partials.actions.show') --}}
                        {{-- @include('dashboard.custmerrequests.partials.actions.edit') --}}
                        @include('dashboard.custmerrequests.partials.actions.approved')
                        @include('dashboard.custmerrequests.partials.actions.delete')
                    </td>
                </tr>



        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('custmerrequests.empty')</td>
            </tr>
        @endforelse

        @if($custmerrequests->hasPages())
            @slot('footer')
                {{ $custmerrequests->links() }}
            @endslot
        @endif
    @endcomponent
    @push('scripts')
        <script>
            let errors="{{$errors->all()? 1:0 }}";
            if(errors==1)
            {
                let id=`#custmerrequest-{{ $custmerrequest->id }}-approved-model`;
                $(id).modal('show');
            }
        </script>
    @endpush
</x-layout>
