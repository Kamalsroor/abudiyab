<x-layout :title="$application->name" :breadcrumbs="['dashboard.applications.show', $application]">
    <div class="row">
        <div class="col-md-12">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('applications.attributes.name')</th>
                        <td>{{ $application->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('applications.attributes.phone')</th>
                        <td>{{ $application->phone }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('applications.attributes.email')</th>
                        <td>{{ $application->email }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('applications.attributes.expected_salaray')</th>
                        <td>{{ $application->expected_salaray }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('applications.attributes.work_name')</th>
                        <td>{{ $application->work_id }}</td>
                    </tr>

                    @if($application->getFirstMedia('cv'))
                        <tr>
                            <th width="200">@lang('applications.attributes.work_name')</th>
                        @if ($application->getMediaResource('cv')->first()['type'] == "pdf")

                            <td>
                                <iframe src="https://docs.google.com/gview?url={{ $application->getFirstMediaUrl('cv') }}&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>
                            </td>

                        @else
                            <td>
                                <file-preview :media="{{ $application->getMediaResource('cv') }}"></file-preview>
                            </td>
                        @endif
                        </tr>
                    @endif



                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.applications.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
