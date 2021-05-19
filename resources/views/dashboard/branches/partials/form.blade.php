@include('dashboard.errors')
@bsMultilangualFormTabs

<div class="row">
    <div class="col-md-6">
        {{ BsForm::text('name') }}
    </div>
    <div class="col-md-6">
        {{ BsForm::text('address') }}
    </div>
</div>
@endBsMultilangualFormTabs
{{-- {{ BsForm::number('code') }} --}}
{{-- {{ BsForm::select('code')->options($regions) }} --}}



<div class="row">
    <div class="col-md-6" id="regions_select" >
        <select2
            placeholder="@lang('branches.attributes.code')"
            name="code"
            value="{{optional($branch ?? "")->code}}"
            label="@lang('branches.attributes.code')"
            remote-url="{{ route('api.regions.select') }}"
        ></select2>
    </div>
    <div class="col-md-6">
        {{ BsForm::number('p_coud') }}
    </div>
    <div class="col-md-6">
        {{ BsForm::text('tele_number') }}
    </div>
</div>



<table class="table table-striped table-middle">

    <thead>
        <tr>
            <th>اليوم</th>
            <th>فتره/فترتين</th>
            <th colspan='2'>صباحا</th>
            <th colspan='2'>مساء</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>من السبت الي الخميس </th>
            <td>{{ BsForm::checkbox('work_time[alldays][period]')->attribute(['class' => 'period','id' => 'alldays'])->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['alldays']['period'] : false) }}</td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['alldays']['morning']['timeopen']:null}}" name="work_time[alldays][morning][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['alldays']['morning']['timeclose']:null}}" name="work_time[alldays][morning][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row alldays-period" style="display: {{(isset($branch->work_time) && $branch->work_time != null) ? $branch->work_time['alldays']['period']==1 ? 'block':'none' : 'none'}}">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['alldays']['afternone']['timeopen']:null}}" name="work_time[alldays][afternone][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row alldays-period" style="display: {{(isset($branch->work_time) && $branch->work_time != null) ? $branch->work_time['alldays']['period']==1 ? 'block':'none' : 'none'}}">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['alldays']['afternone']['timeclose']:null}}" name="work_time[alldays][afternone][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الجمعه</th>
            <td>{{ BsForm::checkbox('work_time[fri][period]')->attribute(['class' => 'period','id' => 'friday'])->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['fri']['period'] : false) }}</td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['fri']['morning']['timeclose']:null}}" name="work_time[fri][morning][timeclose]"  id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['fri']['morning']['timeclose']:null}}" name="work_time[fri][morning][timeclose]"  id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row fri-period" style="display: {{(isset($branch->work_time) && $branch->work_time != null) ? $branch->work_time['fri']['period']==1 ? 'block':'none' : 'none'}}">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['fri']['afternone']['timeclose']:null}}" name="work_time[fri][afternone][timeclose]"  id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row fri-period" style="display: {{(isset($branch->work_time) && $branch->work_time != null) ? $branch->work_time['fri']['period']==1 ? 'block':'none' : 'none'}}">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch->work_time) && $branch->work_time != null  ? $branch->work_time['fri']['afternone']['timeclose']:null}}" name="work_time[fri][afternone][timeclose]"  id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>

    </tbody>
</table>
<table class="table table-striped table-middle">
    <p>مفتوح / مغلق</p>
    <tr class="row">
        <td class="col-1">{{ BsForm::checkbox('work_time[sat][lock]')->label(trans('branches.weekDays.sat'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['sat']['lock'] : false) }}</td>
        <td class="col-1">{{ BsForm::checkbox('work_time[sun][lock]')->label(trans('branches.weekDays.sun'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['sun']['lock'] : false) }}</td>
        <td class="col-1">{{ BsForm::checkbox('work_time[mon][lock]')->label(trans('branches.weekDays.mon'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['mon']['lock'] : false) }}</td>
        <td class="col-1">{{ BsForm::checkbox('work_time[tue][lock]')->label(trans('branches.weekDays.tue'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['tue']['lock'] : false) }}</td>
        <td class="col-1">{{ BsForm::checkbox('work_time[wed][lock]')->label(trans('branches.weekDays.wed'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['wed']['lock'] : false) }}</td>
        <td class="col-1">{{ BsForm::checkbox('work_time[thu][lock]')->label(trans('branches.weekDays.thu'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['thu']['lock'] : false) }}</td>
        <td class="col-1">{{ BsForm::checkbox('work_time[fri][lock]')->label(trans('branches.weekDays.fri'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['fri']['lock'] : false) }}</td>
    </tr>
</table>
<table class="table table-striped table-middle">
    <p>مفتوح 24 ساعه</p>
    <tr class="row">
        <td class="col-3">{{ BsForm::checkbox('work_time[sat][allday]')->label(trans('branches.weekDays.openAllDays'))->value(1)->default('0')->checked(isset($branch->work_time) &&  $branch->work_time != null ?  $branch->work_time['sat']['allday'] : false) }}</td>
    </tr>
</table>


@push('scripts')
    <script>
        let periods=document.getElementsByClassName('period');
        for (let i = 0; i < periods.length; i++) {
            periods[i].addEventListener('change',switchPeriod) ;
        }
        function switchPeriod(e){
            console.log(e.target.checked);
            if(e.target.checked)
            {

                if(e.target.id == 'alldays')
                {
                    document.getElementsByClassName('alldays-period')[0].style.display='block';
                    document.getElementsByClassName('alldays-period')[1].style.display='block';
                }
                else if(e.target.id == 'friday'){
                    document.getElementsByClassName('fri-period')[0].style.display='block';
                    document.getElementsByClassName('fri-period')[1].style.display='block';
                }
            }
            else{
                if(e.target.id == 'alldays')
                {
                    document.getElementsByClassName('alldays-period')[0].style.display='none';
                    document.getElementsByClassName('alldays-period')[1].style.display='none';
                }
                else if(e.target.id == 'friday'){
                    document.getElementsByClassName('fri-period')[0].style.display='none';
                    document.getElementsByClassName('fri-period')[1].style.display='none';
                }
            }
        }
    </script>
@endpush

{{--
@isset($branch)
    {{ BsForm::image('image')->files($branch->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

