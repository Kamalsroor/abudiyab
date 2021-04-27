@can('forceDelete', $custmerrequest)
    <a href="#custmerrequest-{{ $custmerrequest->id }}-force-delete-model"
       class="btn btn-outline-danger btn-sm"
       data-toggle="modal">
        <i class="fas fa fa-fw fa-trash"></i>
    </a>

    <a href="https://ssrweb.zoom.us/cmr/replay/2021/04/26/9DC35158-82AA-4010-AEEE-83C834668E17/GMT20210426-180054_Recording_1366x768.mp4?response-content-type=video%2Fmp4&amp;response-cache-control=max-age%3D0%2Cs-maxage%3D86400&amp;data=871e8d26647165b167fc04e312c7bd07e4ed2aade76aad74ec02ce7729ddc080&amp;s001=yes&amp;cid=us02&amp;fid=suWXLHezL-M_VsgIzVK_pHx7EA9r6UMwwM-PcuVNrib0BRCVeQmakUJFh2J-0IH47SnQtiTBFjIJ9hwo.sLXNFTnW_iPoCv_E&amp;s002=Loe89eZhyACt72XhyenBdt5jo29tJfzqC7Aqjdg5W7sHKRV2DunPK2jpXrGUqoWGaSKr-jvGiRdrBxLiV7iNGAAs-VGV.YIfBmM_DWo4TurFg&amp;Policy=eyJTdGF0ZW1lbnQiOiBbeyJSZXNvdXJjZSI6Imh0dHBzOi8vc3Nyd2ViLnpvb20udXMvY21yL3JlcGxheS8yMDIxLzA0LzI2LzlEQzM1MTU4LTgyQUEtNDAxMC1BRUVFLTgzQzgzNDY2OEUxNy9HTVQyMDIxMDQyNi0xODAwNTRfUmVjb3JkaW5nXzEzNjZ4NzY4Lm1wND9yZXNwb25zZS1jb250ZW50LXR5cGU9dmlkZW8lMkZtcDQmcmVzcG9uc2UtY2FjaGUtY29udHJvbD1tYXgtYWdlJTNEMCUyQ3MtbWF4YWdlJTNEODY0MDAmZGF0YT04NzFlOGQyNjY0NzE2NWIxNjdmYzA0ZTMxMmM3YmQwN2U0ZWQyYWFkZTc2YWFkNzRlYzAyY2U3NzI5ZGRjMDgwJnMwMDE9eWVzJmNpZD11czAyJmZpZD1zdVdYTEhlekwtTV9Wc2dJelZLX3BIeDdFQTlyNlVNd3dNLVBjdVZOcmliMEJSQ1ZlUW1ha1VKRmgySi0wSUg0N1NuUXRpVEJGaklKOWh3by5zTFhORlRuV19pUG9Ddl9FJnMwMDI9TG9lODllWmh5QUN0NzJYaHllbkJkdDVqbzI5dEpmenFDN0FxamRnNVc3c0hLUlYyRHVuUEsyanBYckdVcW9XR2FTS3ItanZHaVJkckJ4TGlWN2lOR0FBcy1WR1YuWUlmQm1NX0RXbzRUdXJGZyIsIkNvbmRpdGlvbiI6eyJEYXRlTGVzc1RoYW4iOnsiQVdTOkVwb2NoVGltZSI6MTYxOTU0MTE2MX19fV19&amp;Signature=edKk0EvjA8ksV7ARgk3MEQT9tH2yU1GzCfgnAS4JX~zz2WMIOh7ujwHeDH2rKgb2aXG0hpjYpwaUvWkn3ikNC9CYRobRE5gPDMTYEiliUvyoNhnyJTLI7N2OM0cujkXQ4rD0C27-LlgC9QkM~915Mmu1FF0FzIaf69nr08dHWCW4WxioVHW2FkwHhQ5aTtCzW7Yf6x-lm28FJo9-Fl4HeBVM0MaRCmVzINKtDkoBWqTezVqQ-Y-X-WXzkJpSYb0zj497JmRWiH0e022Bu5HI6mR-AhUVt0rdExU5kd71fP6Vg-6Yf3QfoiV3EsRDWjfSAqJ3Q3zj4VdX7UNnyJP-BA__&amp;Key-Pair-Id=APKAJFHNSLHYCGFYQGIA" <download>

      kamal salah sroor
    </a>


    <!-- Modal -->
    <div class="modal fade" id="custmerrequest-{{ $custmerrequest->id }}-force-delete-model" tabindex="-1" role="dialog"
         aria-labelledby="modal-title-{{ $custmerrequest->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-{{ $custmerrequest->id }}">@lang('custmerrequests.dialogs.forceDelete.title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('custmerrequests.dialogs.forceDelete.info')
                </div>
                <div class="modal-footer">
                    {{ BsForm::delete(route('dashboard.custmerrequests.forceDelete', $custmerrequest)) }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        @lang('custmerrequests.dialogs.forceDelete.cancel')
                    </button>
                    <button type="submit" class="btn btn-danger">
                        @lang('custmerrequests.dialogs.forceDelete.confirm')
                    </button>
                    {{ BsForm::close() }}
                </div>
            </div>
        </div>
    </div>
@endcan
