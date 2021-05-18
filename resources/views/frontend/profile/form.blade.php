
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

                        {{-- @if (isset($user))
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
                        @endif --}}
                    </tbody>
                </table>
                <div id="img">
                    <div class="container">
                        <div class="wrapper" id="identityFace">
                            <div class="image">
                                <img src="{{$newRequest->getFirstMediaUrl('identityFace')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">البطاقه الشخصيه الوجه الامامي</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">البطاقه الشخصيه الوجه الامامي</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input id="default-btn-1" type="file" hidden name="identityFace">

                        <div class="wrapper" id="identityBack">
                            <div class="image">
                                <img src="{{$newRequest->getFirstMediaUrl('identityBack')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">البطاقه الشخصيه الوجه الخلفي</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">البطاقه الشخصيه الوجه الخلفي</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input id="default-btn-2" type="file" hidden name="identityBack">

                        <div class="wrapper" id="licenceFace">
                            <div class="image">
                                <img src="{{$newRequest->getFirstMediaUrl('licenceFace')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">الرخصه الوجه الامامي</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">الرخصه الوجه الامامي</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input id="default-btn-3" type="file" hidden name="licenceFace">

                        <div class="wrapper" id="licenceBack">
                            <div class="image">
                                <img src="{{$newRequest->getFirstMediaUrl('licenceBack')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <div class="text">الرخصه الوجه الخلفي</div>
                            </div>
                            <div class="cancel-btn"><i class="fas fa-times"></i></div>
                            <div class="file-name">الرخصه الوجه الخلفي</div>
                            <p class="image-projection"></p>
                            <div class="div-hidden"></div>
                        </div>
                        <input id="default-btn-4" type="file" hidden name="licenceBack">

                    </div>
                </div>

                <div class="row">
                    <button class="primary-btn btn-hover btn-curved p-2 m-auto">تأكيد البيانات</button>
                    <button class="primary-btn btn-hover btn-curved p-2 m-auto">الرجوع</button>
                </div>
    </form>
    @push('js')
    <script>
        let validExtensions = ['image/jpeg','image/jpg','image/png'];
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

        function bringPicture(div, click){
            let fileName = div.children[3];
            let defaultBtn = div.nextElementSibling;
            let cancelBtn = div.children[2];
            let img = div.children[0].children[0];
            if (click == 'I') {
                img.src = '';
                img.style.display = 'none';
                cancelBtn.style.display = 'none';
                fileName.style.display = 'none';
                div.style.border = '2px dashed #c2cdda';
                defaultBtn.value = null;
            }
            else{
                defaultBtn.click();
            }
            defaultBtn.addEventListener("change", function(){
                const file = this.files[0];
                if(file && validExtensions.includes(file.type)){
                    const reader = new FileReader();
                    reader.onload = function(){
                        const result = reader.result;
                        img.src = result;
                        img.style.display = 'block';
                        cancelBtn.style.display = 'block';
                        fileName.style.display = 'block';
                        div.style.border = 'none';
                    }
                    reader.readAsDataURL(file);
                }
                if(this.value && validExtensions.includes(file.type)) {
                    let valueStore = this.value.match(regExp);
                    fileName.textContent = valueStore;
                }
            });
        }

        function identifyElement(divId) {
            let div = document.getElementById(divId);
            let img = div.children[0].children[0];
            let cancelBtn = div.children[2];
            let fileName = div.children[3];
            let imageProjection = div.children[4];
            let divHidden = div.children[5];
            div.addEventListener('click', function(n){
                bringPicture(this, n.target.nodeName);
            });
            divHidden.addEventListener('dragover', () => {
                event.preventDefault();
                div.classList.add('image-projection');
                imageProjection.classList.add('show');
                imageProjection.classList.remove('hide');
                // fileName.textContent = 'افلت الصوره';
            });
            divHidden.addEventListener('dragleave', () => {
                div.classList.remove('image-projection');
                imageProjection.classList.remove('show');
                imageProjection.classList.add('hide');
            });
            divHidden.addEventListener('drop', (event) => {
                event.preventDefault();
                const file = event.dataTransfer.files[0];
                div.classList.remove('image-projection');
                imageProjection.classList.remove('show');
                imageProjection.classList.add('hide');
                if(file && validExtensions.includes(file.type)){
                    const reader = new FileReader();
                    reader.onload = function(){
                        const result = reader.result;
                        img.src = result;
                        console.log(result);
                        img.style.display = 'block';
                        cancelBtn.style.display = 'block';
                        fileName.style.display = 'block';
                        div.style.border = 'none';
                        div.classList.remove('image-projection');
                        imageProjection.classList.remove('show');
                        imageProjection.classList.add('hide');
                    }
                    reader.readAsDataURL(file);
                }
                if(file.name && validExtensions.includes(file.type)) {
                    let valueStore = file.name.match(regExp);
                    fileName.textContent = valueStore;
                }
            });
        }
        identifyElement('identityFace');
        identifyElement('identityBack');
        identifyElement('licenceFace');
        identifyElement('licenceBack');

    </script>
@endpush
