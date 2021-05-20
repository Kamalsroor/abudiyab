<x-front-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">
    <section class="register">
        <div class="container-fluid px-0 mx-0 register-background">
            <div class="d-flex align-items-center justify-content-center py-5 heading" >
                <h1 class=" mb-0" >إنشاء حساب جديد</h1>
            </div>
            <div class="content" style="padding: 30px">
                <form action="{{ route('register') }}"  method="post" enctype="multipart/form-data" style="background-color: rgb(177 177 177 / 75%);border-radius:30px;">
                @csrf
                <div class="row py-3 pt-5 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center" >الاسم</p>
                    </div>
                    <div class="col px-0">
                    <input type="text" class="form-control" name="username"
                    value="{{ old('username') }}"
                    required
                    autofocus>
                    @if($errors->has('username'))
                        <div class="valiadtion-error">{{ $errors->first('username') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">كلمة السر</p>
                    </div>
                    <div class="col px-0">
                    <input type="password" class="form-control" required
                    name="password"
                    autocomplete="new-password">
                    @if($errors->has('password'))
                        <div class="valiadtion-error">{{ $errors->first('password') }}</div>
                    @endif
                    </div>
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center mt-4 mt-md-0">تأكيد كلمة السر</p>
                    </div>
                    <div class="col px-0">
                    <input type="password" class="form-control" required
                    name="password_confirmation"
                    autocomplete="new-password">
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">رقم الهوية</p>
                    </div>
                    <div class="col px-0">
                    <input type="text" class="form-control" required  value="{{old('id_number')}}"  name="id_number">
                    @if($errors->has('id_number'))
                        <div class="valiadtion-error">{{ $errors->first('id_number') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">البريد الالكترونى</p>
                    </div>
                    <div class="col px-0">
                    <input type="email" class="form-control" required name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <div class="valiadtion-error">{{ $errors->first('email') }}</div>
                    @endif
                    </div>
                </div>

                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">رقم الجوال</p>
                    </div>
                    <div class="col px-0">
                    <input type="text" class="form-control" required  name="phone" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                        <div class="valiadtion-error">{{ $errors->first('phone') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">البطاقه الشخصيه الوجه الامامي</p>
                    </div>
                    <div class="col px-0">
                    <input  type="file" class="form-control"  required name='identityFace' placeholder="البطاقه الشخصيه">
                    @if($errors->has('identityFace'))
                        <div class="valiadtion-error">{{ $errors->first('identityFace') }}</div>
                    @endif
                    </div>
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">البطاقه الشخصيه الوجه الخلفي</p>
                    </div>
                    <div class="col px-0">
                    <input  type="file" class="form-control"   required name='identityBack' placeholder="البطاقه الشخصيه">
                    @if($errors->has('identityBack'))
                        <div class="valiadtion-error">{{ $errors->first('identityBack') }}</div>
                    @endif
                    </div>
                </div>
                <div class="row py-3 px-4 mx-0">
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">الرخصه الوجه الامامي</p>
                    </div>
                    <div class="col px-0">
                    <input  type="file" class="form-control"  required name='licenceFace' placeholder="البطاقه الشخصيه">
                    @if($errors->has('licenceFace'))
                        <div class="valiadtion-error">{{ $errors->first('licenceFace') }}</div>
                    @endif
                    </div>
                    <div class="col-md-2 col-12">
                    <p class="color-black text-right text-md-center">الرخصه الوجه الخلفي</p>
                    </div>
                    <div class="col px-0">
                    <input  type="file" class="form-control"  required name='licenceBack' placeholder="البطاقه الشخصيه">
                    @if($errors->has('licenceBack'))
                        <div class="valiadtion-error">{{ $errors->first('licenceBack') }}</div>
                    @endif
                    </div>
                </div>


                <div class="row mx-0 px-0 py-3">
                    <div class="col-5 text-center m-auto">
                        <button type="submit" class="primary-btn btn-hover btn-curved p-3 m-auto">تأكيد البيانات</button>

                        <!-- Button that handles sign-in/sign-out -->
                        <button disabled class=" primary-btn btn-hover btn-curved p-3 m-auto mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-in">Sign in with Google</button>

                    </div>
                </div>
                </form>


                <!-- Container where we'll display the user details -->
                <div class="quickstart-user-details-container">
                    Firebase sign-in status: <span id="quickstart-sign-in-status">Unknown</span>
                    <div>Firebase auth <code>currentUser</code> object value:</div>
                    <pre><code id="quickstart-account-details">null</code></pre>
                    <div>Google OAuth Access Token:</div>
                    <pre><code id="quickstart-oauthtoken">null</code></pre>
                </div>


            </div>
        </div>
    </section>
    @push('js')
        {{-- <script src="/__/firebase/8.6.1/firebase-app.js"></script>
        <script src="/__/firebase/8.6.1/firebase-auth.js"></script>
        <script src="/__/firebase/init.js"></script> --}}
        <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
        {{-- <script src="https://www.gstatic.com/firebasejs/8.6.1/init.js"></script> --}}

        <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>

        <script type="text/javascript">
        if (typeof firebase === 'undefined') throw new Error('hosting/init-error: Firebase SDK not detected. You must include it before /__/firebase/init.js');
        var firebaseConfig = {
            apiKey: "AIzaSyAFKqP6AeGcJKP55yEYtSWCo1m4PWE83Zk",
            authDomain: "abudiyab-ab965.firebaseapp.com",
            projectId: "abudiyab-ab965",
            storageBucket: "abudiyab-ab965.appspot.com",
            messagingSenderId: "1092780024078",
            appId: "1:1092780024078:web:5f9175e624aab40aa4375f",
            measurementId: "G-8E58DWRBWT"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        /**
        * Function called when clicking the Login/Logout button.
        */
        function toggleSignIn() {
            // Using a popup.
            var provider = new firebase.auth.TwitterAuthProvider();
            // firebase.auth().signInWithRedirect(provider);

            firebase.auth().signInWithPopup(provider).then(function(result) {
            // For accessing the Twitter API.
            var token = result.credential.accessToken;
            var secret = result.credential.secret;
            // The signed-in user info.
            var user = result.user;
            });


            // if (!firebase.auth().currentUser) {
            // // var provider = new firebase.auth.GoogleAuthProvider();
            // var provider = new firebase.auth.TwitterAuthProvider();

            // // provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
            // firebase.auth().signInWithPopup(provider).then(function(result) {
            //     // This gives you a Google Access Token. You can use it to access the Google API.
            //     console.log(result , result.credential.accessToken , result.user);
            //     var token = result.credential.accessToken;
            //     // The signed-in user info.
            //     var user = result.user;
            //     document.getElementById('quickstart-oauthtoken').textContent = token;
            // }).catch(function(error) {
            //     // Handle Errors here.
            //     var errorCode = error.code;
            //     var errorMessage = error.message;
            //     // The email of the user's account used.
            //     var email = error.email;
            //     // The firebase.auth.AuthCredential type that was used.
            //     var credential = error.credential;
            //     if (errorCode === 'auth/account-exists-with-different-credential') {
            //     alert('You have already signed up with a different auth provider for that email.');
            //     // If you are using multiple auth providers on your app you should handle linking
            //     // the user's accounts here.
            //     } else {
            //     console.error(error);
            //     }
            // });
            // } else {
            // firebase.auth().signOut();
            // }
            // document.getElementById('quickstart-sign-in').disabled = true;
        }

        /**
        * initApp handles setting up UI event listeners and registering Firebase auth listeners:
        *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
        *    out, and that is where we update the UI.
        */
        function initApp() {
            // Listening for auth state changes.
            firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in.
                // var displayName = user.displayName;
                // var email = user.email;
                // var emailVerified = user.emailVerified;
                // var photoURL = user.photoURL;
                // var isAnonymous = user.isAnonymous;
                // var uid = user.uid;
                // var providerData = user.providerData;
                // document.getElementById('quickstart-sign-in-status').textContent = 'Signed in';
                // document.getElementById('quickstart-sign-in').textContent = 'Sign out';
                // document.getElementById('quickstart-account-details').textContent = JSON.stringify(user, null, '  ');
            } else {
                // User is signed out.
                // document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
                // document.getElementById('quickstart-sign-in').textContent = 'Sign in with Google';
                // document.getElementById('quickstart-account-details').textContent = 'null';
                // document.getElementById('quickstart-oauthtoken').textContent = 'null';
            }
            document.getElementById('quickstart-sign-in').disabled = false;
            });

            document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
        }

        window.onload = function() {
            initApp();
        };
        </script>
    @endpush
 </x-front-layout>
