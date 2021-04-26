
<form action="{{route('front.changePassword')}}" method="post"  class="text-center">
    @csrf
    <table class="table table-striped color-black">
                <tbody>
                    <tr>
                        <th class="color-black text-center" scope="row">كلمة السر</th>
                        <td class=" color-black text-center">
                            <div class="form-group">
                                <label class="color-black" style="font-size: 16px;">ادخل كلمة السر القديمه</label>
                                <input type="password" class="color-black form-control" name="old_password" value="">
                                @if($errors->has('old_password'))
                                    <div class="valiadtion-error">{{ $errors->first('old_password') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="color-black" style="font-size: 16px;">ادخل كلمة السر الجديدة</label>
                                <input type="password" class="color-black form-control" name="password" value="">
                                @if($errors->has('password'))
                                    <div class="valiadtion-error">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="color-black" style="font-size: 16px;">تأكيد كلمة السر</label>
                                <input type="password" class="color-black form-control" name="password_confirmation" value="">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="primary-btn btn-hover btn-curved p-2 m-auto">تأكيد البيانات</button>
    </form>


    @section('js')
        @if($errors->has('old_password') || $errors->has('password'))
            <script>
                $(document).ready(function() {
                    console.log('password error');
                    $('#update-password').toggleClass('d-none');
                    $('#profile').toggleClass('d-none');
                    $('#toggel-password').toggleClass('d-none');
                    $('#toggel-profile').toggleClass('d-none');
                });

            </script>
        @endif
    @endsection

