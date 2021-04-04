<!-- @extends('web.layouts.app')
@section('content') -->
<link rel="stylesheet" href="../web/css/contact.css">
<link rel="stylesheet" href="../web/css/cssRtl.css">
<link rel="stylesheet" href="../lnkse/botton_style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://use.fontawesome.com/a29aea3929.js"></script>
<script src="https://use.fontawesome.com/9885f268c6.js"></script>
<style type="text/css">
    form .content_wrapper .textarea{
        height: 140px;
    }
    .form_wrapper .heading{
        padding: 35px 0;
    }
    .contact_wrapper{
        padding: 80px 100px;
    }
    form .submit_wrapper{
        text-align: center;
    }
</style>
<body style="margin: 0;">
    <main>
        <section id="contact" class="contact_wrapper">
            <div class="form_wrapper">
                <div class="heading" style="overflow: hidden;">
                    <div style="position: absolute;width: 100%;height: 100%;background: #1500ff42;margin: -35px 0;"></div>
                    <h2><span style="color: #fff;border-bottom: 2px solid;">تواصل معنا</span></h2>
                    <p>اكتب شكوتك وسوف نقوم بالرد عليك في اقرب وقت</p>
                </div>
                <form action="#" method="post" enctype="multipart/form-data" accept-charset="UTF-8" name="contact"><!-- 960 * 807 -->
                    <!-- select -->
                    <!-- <p class="select_wrapper">
                        <label for="type">
                <span>نوع الشكوي</span>
                <select name="contact_type" class="select" id="type">
                  <option value="" hidden>نوع الشكوي</option>
                </select>
              </label>
                    </p> -->
                    <!-- name -->
                    <p class="name_wrapper">
                        <label for="name">
                <span>الاسم</span>
                <input type="text" class="text" id="name" placeholder="الاسم الكامل" required>
              </label>
                    </p>
                    <!-- furigana -->
                    <p class="furigana_wrapper">
                        <label for="furigana">
                <span>تليفون</span>
                <input type="number" class="text" id="furigana" required placeholder="رقم التليفون">
              </label>
                    </p>
                    <!-- email -->
                    <p class="furigana_wrapper">
                        <label for="email">
                <span>البريد الالكتروني</span>
                <input type="email" class="text" id="email" placeholder="البريد الالكتروني">
              </label>
                    </p>

                    <!-- content -->
                    <p class="content_wrapper">
                        <label for="content">
                <span></span>
                        <textarea maxlength="1000" name="contact_content" class="textarea" id="content" placeholder="النص"></textarea>
                        </label>
                    </p>
                    <!-- check -->

                    <!-- submit -->
                    <p class="submit_wrapper">
                        <button class="submit conversion_btn" type="submit">ارسال</button>
                    </p>
                </form>
            </div>
            <!-- form_wrapper -->
        </section>
        <!-- contact_wrapper -->
    </main>
</body>
<!-- @endsection -->