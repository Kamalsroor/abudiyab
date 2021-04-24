<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="recruitment" style="background: url('{{ asset('front/img/recruitment.png') }}'); background-size: cover;">
        <div class="recruitment_center">
            <header class="recruitment_center_header" style="background: url('{{asset('front/img/jobs.jpg')}}')">
                <div class="recruitment_center_header_content">
                    <div>
                        <h1>قسم التوظيف</h1>
                        <h2>مرحبًا بكم في قسم التوظيف في أبو دياب لتأجير السيارات. يسعدنا انضمامك إلينا</h2>
                    </div>
                </div>
            </header>
            <div class="recruitment_center_content">
                <div class="recruitment_center_content_form">
                {{-- {{ BsForm::resource('works')->post(route('front.addCandidates')) }} --}}
                <form action="{{route('front.addCandidates')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="select">
                            <label for="">اختر الوظيفه المناسبه <span>*</span></label>
                            <select id="" name='jobname' >
                                <option value="" hidden>وظيفتي هيا</option>
                                @foreach ($works as $work)
                                    @if ($work->available)
                                        <option value="{{$work->id}}">{{$work->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('jobname'))
                            <div class="valiadtion-error">{{ $errors->first('jobname') }}</div>
                        @endif
                        <div class="input">
                            <label for="">الاسم <span>*</span></label>
                            <input  type="text" id="" name='name' placeholder="الاسم">
                        </div>
                        @if($errors->has('name'))
                            <div class="valiadtion-error">{{ $errors->first('name') }}</div>
                        @endif
                        <div class="input">
                            <label for="">رقم الجوال <span>*</span></label>
                            <input  type="number" id="" name='phone' placeholder="رقم الجوال">
                        </div>
                        @if($errors->has('phone'))
                            <div class="valiadtion-error">{{ $errors->first('phone') }}</div>
                        @endif
                        <div class="input">
                            <label for="">البريد الالكتروني <span>*</span></label>
                            <input  type="email" id="" name='email' placeholder="البريد الالكتروني">
                        </div>
                        @if($errors->has('email'))
                            <div class="valiadtion-error">{{ $errors->first('email') }}</div>
                        @endif
                        <div class="input">
                            <label for="">الراتب المتوقع <span>*</span></label>
                            <input  type="number" id="" name='expected_salary' placeholder="الراتب المتوقع">
                        </div>
                        @if($errors->has('expected_salaray'))
                            <div class="valiadtion-error">{{ $errors->first('expected_salaray') }}</div>
                        @endif
                        <div class="input">
                            <label for="">السيرة الذاتية <span>*</span></label>
                            <input  type="file" id="" name='cv' placeholder="السيرة الذاتية">
                        </div>
                        @if($errors->has('cv'))
                            <div class="valiadtion-error">{{ $errors->first('cv') }}</div>
                        @endif
                        <div class="textarea">
                            {{-- <label for="">ملاحظات <span>*</span></label> --}}
                            <textarea   id="" name='message' placeholder="رسالتك"></textarea>
                        </div>
                        <div class="button">
                            <button class="primary-btn" type="submit">ارسال</button>
                        </div>
                        {{-- {{ BsForm::close() }} --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
