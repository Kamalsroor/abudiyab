<x-layout :title="$custmerrequest->name" :breadcrumbs="['dashboard.custmerrequests.show', $custmerrequest]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('custmerrequests.attributes.name')</th>
                        <td>{{ $custmerrequest->name }}</td>
                    </tr>
                    @if($custmerrequest->getFirstMedia())
                        <tr>
                            <th width="200">@lang('custmerrequests.attributes.image')</th>
                            <td>
                                <file-preview :media="{{ $custmerrequest->getMediaResource() }}"></file-preview>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <video controls="" autoplay="" name="media"><source src="https://ssrweb.zoom.us/cmr/replay/2021/04/26/9DC35158-82AA-4010-AEEE-83C834668E17/GMT20210426-180054_Recording_1366x768.mp4?response-content-type=video%2Fmp4&amp;response-cache-control=max-age%3D0%2Cs-maxage%3D86400&amp;data=871e8d26647165b167fc04e312c7bd07e4ed2aade76aad74ec02ce7729ddc080&amp;s001=yes&amp;cid=us02&amp;fid=suWXLHezL-M_VsgIzVK_pHx7EA9r6UMwwM-PcuVNrib0BRCVeQmakUJFh2J-0IH47SnQtiTBFjIJ9hwo.sLXNFTnW_iPoCv_E&amp;s002=Loe89eZhyACt72XhyenBdt5jo29tJfzqC7Aqjdg5W7sHKRV2DunPK2jpXrGUqoWGaSKr-jvGiRdrBxLiV7iNGAAs-VGV.YIfBmM_DWo4TurFg&amp;Policy=eyJTdGF0ZW1lbnQiOiBbeyJSZXNvdXJjZSI6Imh0dHBzOi8vc3Nyd2ViLnpvb20udXMvY21yL3JlcGxheS8yMDIxLzA0LzI2LzlEQzM1MTU4LTgyQUEtNDAxMC1BRUVFLTgzQzgzNDY2OEUxNy9HTVQyMDIxMDQyNi0xODAwNTRfUmVjb3JkaW5nXzEzNjZ4NzY4Lm1wND9yZXNwb25zZS1jb250ZW50LXR5cGU9dmlkZW8lMkZtcDQmcmVzcG9uc2UtY2FjaGUtY29udHJvbD1tYXgtYWdlJTNEMCUyQ3MtbWF4YWdlJTNEODY0MDAmZGF0YT04NzFlOGQyNjY0NzE2NWIxNjdmYzA0ZTMxMmM3YmQwN2U0ZWQyYWFkZTc2YWFkNzRlYzAyY2U3NzI5ZGRjMDgwJnMwMDE9eWVzJmNpZD11czAyJmZpZD1zdVdYTEhlekwtTV9Wc2dJelZLX3BIeDdFQTlyNlVNd3dNLVBjdVZOcmliMEJSQ1ZlUW1ha1VKRmgySi0wSUg0N1NuUXRpVEJGaklKOWh3by5zTFhORlRuV19pUG9Ddl9FJnMwMDI9TG9lODllWmh5QUN0NzJYaHllbkJkdDVqbzI5dEpmenFDN0FxamRnNVc3c0hLUlYyRHVuUEsyanBYckdVcW9XR2FTS3ItanZHaVJkckJ4TGlWN2lOR0FBcy1WR1YuWUlmQm1NX0RXbzRUdXJGZyIsIkNvbmRpdGlvbiI6eyJEYXRlTGVzc1RoYW4iOnsiQVdTOkVwb2NoVGltZSI6MTYxOTU0MTE2MX19fV19&amp;Signature=edKk0EvjA8ksV7ARgk3MEQT9tH2yU1GzCfgnAS4JX~zz2WMIOh7ujwHeDH2rKgb2aXG0hpjYpwaUvWkn3ikNC9CYRobRE5gPDMTYEiliUvyoNhnyJTLI7N2OM0cujkXQ4rD0C27-LlgC9QkM~915Mmu1FF0FzIaf69nr08dHWCW4WxioVHW2FkwHhQ5aTtCzW7Yf6x-lm28FJo9-Fl4HeBVM0MaRCmVzINKtDkoBWqTezVqQ-Y-X-WXzkJpSYb0zj497JmRWiH0e022Bu5HI6mR-AhUVt0rdExU5kd71fP6Vg-6Yf3QfoiV3EsRDWjfSAqJ3Q3zj4VdX7UNnyJP-BA__&amp;Key-Pair-Id=APKAJFHNSLHYCGFYQGIA" type="video/mp4"></video>
                <source src="https://ssrweb.zoom.us/cmr/replay/2021/04/26/9DC35158-82AA-4010-AEEE-83C834668E17/GMT20210426-180054_Recording_1366x768.mp4?response-content-type=video%2Fmp4&amp;response-cache-control=max-age%3D0%2Cs-maxage%3D86400&amp;data=871e8d26647165b167fc04e312c7bd07e4ed2aade76aad74ec02ce7729ddc080&amp;s001=yes&amp;cid=us02&amp;fid=suWXLHezL-M_VsgIzVK_pHx7EA9r6UMwwM-PcuVNrib0BRCVeQmakUJFh2J-0IH47SnQtiTBFjIJ9hwo.sLXNFTnW_iPoCv_E&amp;s002=Loe89eZhyACt72XhyenBdt5jo29tJfzqC7Aqjdg5W7sHKRV2DunPK2jpXrGUqoWGaSKr-jvGiRdrBxLiV7iNGAAs-VGV.YIfBmM_DWo4TurFg&amp;Policy=eyJTdGF0ZW1lbnQiOiBbeyJSZXNvdXJjZSI6Imh0dHBzOi8vc3Nyd2ViLnpvb20udXMvY21yL3JlcGxheS8yMDIxLzA0LzI2LzlEQzM1MTU4LTgyQUEtNDAxMC1BRUVFLTgzQzgzNDY2OEUxNy9HTVQyMDIxMDQyNi0xODAwNTRfUmVjb3JkaW5nXzEzNjZ4NzY4Lm1wND9yZXNwb25zZS1jb250ZW50LXR5cGU9dmlkZW8lMkZtcDQmcmVzcG9uc2UtY2FjaGUtY29udHJvbD1tYXgtYWdlJTNEMCUyQ3MtbWF4YWdlJTNEODY0MDAmZGF0YT04NzFlOGQyNjY0NzE2NWIxNjdmYzA0ZTMxMmM3YmQwN2U0ZWQyYWFkZTc2YWFkNzRlYzAyY2U3NzI5ZGRjMDgwJnMwMDE9eWVzJmNpZD11czAyJmZpZD1zdVdYTEhlekwtTV9Wc2dJelZLX3BIeDdFQTlyNlVNd3dNLVBjdVZOcmliMEJSQ1ZlUW1ha1VKRmgySi0wSUg0N1NuUXRpVEJGaklKOWh3by5zTFhORlRuV19pUG9Ddl9FJnMwMDI9TG9lODllWmh5QUN0NzJYaHllbkJkdDVqbzI5dEpmenFDN0FxamRnNVc3c0hLUlYyRHVuUEsyanBYckdVcW9XR2FTS3ItanZHaVJkckJ4TGlWN2lOR0FBcy1WR1YuWUlmQm1NX0RXbzRUdXJGZyIsIkNvbmRpdGlvbiI6eyJEYXRlTGVzc1RoYW4iOnsiQVdTOkVwb2NoVGltZSI6MTYxOTU0MTE2MX19fV19&amp;Signature=edKk0EvjA8ksV7ARgk3MEQT9tH2yU1GzCfgnAS4JX~zz2WMIOh7ujwHeDH2rKgb2aXG0hpjYpwaUvWkn3ikNC9CYRobRE5gPDMTYEiliUvyoNhnyJTLI7N2OM0cujkXQ4rD0C27-LlgC9QkM~915Mmu1FF0FzIaf69nr08dHWCW4WxioVHW2FkwHhQ5aTtCzW7Yf6x-lm28FJo9-Fl4HeBVM0MaRCmVzINKtDkoBWqTezVqQ-Y-X-WXzkJpSYb0zj497JmRWiH0e022Bu5HI6mR-AhUVt0rdExU5kd71fP6Vg-6Yf3QfoiV3EsRDWjfSAqJ3Q3zj4VdX7UNnyJP-BA__&amp;Key-Pair-Id=APKAJFHNSLHYCGFYQGIA" type="video/mp4">
                @slot('footer')
                    @include('dashboard.custmerrequests.partials.actions.edit')
                    @include('dashboard.custmerrequests.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
