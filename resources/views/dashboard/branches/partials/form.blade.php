@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::text('address') }}
@endBsMultilangualFormTabs
{{ BsForm::number('code') }}
{{ BsForm::number('p_coud') }}
{{ BsForm::text('tele_number') }}



<table class="table table-striped table-middle">

    <thead>
        <tr>
            <th>اليوم</th>
            <th>مفتوح / مغلق</th>
            <th>الفتح</th>
            <th>الاغلاق</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>السبت</th>
            <td>{{ BsForm::checkbox('work_time[sat][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['sat']['lock'] : false) }}</td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['sat']['timeopen']:null}}" name="work_time[sat][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['sat']['timeclose']:null}}" name="work_time[sat][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الحد</th>
            <td>{{ BsForm::checkbox('work_time[sun][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['sun']['lock'] : false) }}</td>
                   <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['sun']['timeopen']:null}}" name="work_time[sun][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['sun']['timeclose']:null}}" name="work_time[sun][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الاتنين</th>
            <td>{{ BsForm::checkbox('work_time[mon][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['mon']['lock'] : false) }}</td>
                   <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['mon']['timeopen']:null}}" name="work_time[mon][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['mon']['timeclose']:null}}" name="work_time[mon][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الثلاثاء</th>
            <td>{{ BsForm::checkbox('work_time[tue][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['tue']['lock'] : false) }}</td>
                   <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['tue']['timeopen']:null}}" name="work_time[tue][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['tue']['timeclose']:null}}" name="work_time[tue][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الاربعاء</th>
            <td>{{ BsForm::checkbox('work_time[wed][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['wed']['lock'] : false) }}</td>
                   <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['wed']['timeopen']:null}}" name="work_time[wed][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['wed']['timeclose']:null}}" name="work_time[wed][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الخميس</th>
            <td>{{ BsForm::checkbox('work_time[thu][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['thu']['lock'] : false) }}</td>
                   <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['thu']['timeopen']:null}}" name="work_time[thu][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['thu']['timeclose']:null}}" name="work_time[thu][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th>الجمعه</th>
            <td>{{ BsForm::checkbox('work_time[fri][lock]')->value(1)->default('0')->checked(isset($branch) &&  $branch->work_time != null ?  $branch->work_time['fri']['lock'] : false) }}</td>
                   <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['fri']['timeopen']:null}}" name="work_time[fri][timeopen]" id="example-time-input">
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group row">
                    <div class="col-10">
                      <input class="form-control" type="time" value="{{isset($branch) && $branch->work_time != null  ? $branch->work_time['fri']['timeclose']:null}}" name="work_time[fri][timeclose]" id="example-time-input">
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>




{{--
@isset($branch)
    {{ BsForm::image('image')->files($branch->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset --}}

