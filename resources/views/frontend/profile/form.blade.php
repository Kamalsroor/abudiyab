
    <form action="{{route('front.custermRequest')}}" method="post"  class="text-center">
        @csrf
        <table class="table table-striped color-black">
                    <tbody>
                        <tr>
                            <th class="color-black text-center" scope="row">الأسم</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="name" value="{{Auth::user()->name}}"></td>
                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">رقم الجوال</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="phone" value="{{Auth::user()->phone}}"></td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">البريد الالكترونى</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="email" value="{{Auth::user()->email}}"></td>

                        </tr>
                        <tr>
                            <th class="color-black text-center" scope="row">صندوق البريد</th>
                            <td class="color-black text-center"><input type="text" class="color-black form-control" name="post_box" value="{{Auth::user()->post_box}}"></td>
                        </tr>


                        <tr>
                            <th class="color-black text-center" scope="row">البطاقه الشخصيه الوجه الامامي </th>
                            <td class="color-black text-center"><input type="file" class="color-black form-control" name="identityFace"></td>
                        </tr>

                        <tr>
                            <th class="color-black text-center" scope="row">البطاقه الشخصيه الوجه الخلفي</th>
                            <td class="color-black text-center"><input type="file" class="color-black form-control" name="identityBack"></td>
                        </tr>

                        <tr>
                            <th class="color-black text-center" scope="row">الرخصه الوجه الامامي </th>
                            <td class="color-black text-center"><input type="file" class="color-black form-control" name="licenceFace"></td>
                        </tr>

                        <tr>
                            <th class="color-black text-center" scope="row">الرخصه الوجه الخلفي</th>
                            <td class="color-black text-center"><input type="file" class="color-black form-control" name="licenceBack"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="primary-btn btn-hover btn-curved p-2 m-auto">تأكيد البيانات</button>
    </form>
