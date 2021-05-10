
    <form action="{{route('front.custermRequest')}}" method="post" enctype="multipart/form-data" class="text-center">
        @csrf
        <table class="table table-striped color-black">
                    <tbody>
                        <tr>
                            <th class="color-black text-center" scope="row">الأسم</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="name" value="{{Auth::user()->name}}"></td>
                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">رقم الجوال</th>

                            <td class="color-black text-center"><input type="text" class="color-black form-control"  name="phone" value="{{Auth::user()->phone}}"></td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">البريد الالكترونى</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="email" value="{{Auth::user()->email}}"></td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">صندوق البريد</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="post_box" value="{{Auth::user()->post_box}}"></td>
                        </tr>

                        @if (isset($user))
                            <tr>
                                <th class="color-black text-center" scope="row">البطاقه الشخصيه الوجه الامامي </th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control" style="border: 1px solid {{(now()->gt($user->id_expiry_date)) ? 'red':''}}" name="identityFace"></td>
                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">البطاقه الشخصيه الوجه الخلفي</th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control" style="border: 1px solid {{(now()->gt($user->id_expiry_date)) ? 'red':''}}" name="identityBack"></td>
                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">الرخصه الوجه الامامي </th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control" style="border: 1px solid {{(now()->gt($user->driver_id_expiry_date)) ? 'red':''}}" name="licenceFace"></td>
                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">الرخصه الوجه الخلفي</th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control" style="border: 1px solid {{(now()->gt($user->driver_id_expiry_date)) ? 'red':''}}" name="licenceBack"></td>
                            </tr>
                        @else
                            <tr>
                                <th class="color-black text-center" scope="row">البطاقه الشخصيه الوجه الامامي </th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control"  name="identityFace"></td>
                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">البطاقه الشخصيه الوجه الخلفي</th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control"  name="identityBack"></td>
                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">الرخصه الوجه الامامي </th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control"  name="licenceFace"></td>
                            </tr>

                            <tr>
                                <th class="color-black text-center" scope="row">الرخصه الوجه الخلفي</th>
                                <td class="color-black text-center"><input type="file" class="color-black form-control"  name="licenceBack"></td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{-- <div id="img">
                    <div class="container">
                        <div class="wrapper" onclick="defaultBtnActive()">
                            <div class="image">
                                <img src="" alt="" id="ShowImg">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">No file chosen, yet!</div>
                            </div>
                            <div id="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">File name here</div>
                        </div>
                        <input id="default-btn" type="file" hidden>
                    </div>
                </div>
                @push('js')
                    <script>
                        const defaultBtn = document.querySelector('#default-btn');
                        const customBtn = document.querySelector('#custom-btn');
                        const ShowImg = document.querySelector('#ShowImg');
                        function defaultBtnActive(){
                            defaultBtn.click();
                        }
                        defaultBtn.addEventListener("change", function(){
                            const file = this.files[0];
                            if(file){
                                const reader = new FileReader();
                                reader.onload = function(){
                                    const result = reader.result;
                                    ShowImg.src = result;
                                    ShowImg.style.display = 'block';
                                }
                                reader.readAsDataURL(file);
                            }
                        });
                    </script>
                @endpush --}}
                <button type="submit" class="primary-btn btn-hover btn-curved p-2 m-auto">تأكيد البيانات</button>
                <button  class="primary-btn btn-hover btn-curved p-2 m-auto">الرجوع</button>
    </form>
