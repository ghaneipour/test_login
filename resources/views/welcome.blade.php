
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'SofLock.ir') }}</title>
        <meta charset="utf-8"> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta property="og:site_name" content="Laracasts">   
    <link href="{{ asset('resources\css\app.css')}}" rel="stylesheet">
    
    <link rel="icon" href="http://supportco.ir/wp-content/uploads/2020/05/subscriptions.ico" sizes="32x32" />
    <link rel="icon" href="http://supportco.ir/wp-content/uploads/2020/05/subscriptions.ico" sizes="192x192" />
    <link rel="apple-touch-icon" href="http://supportco.ir/wp-content/uploads/2020/05/subscriptions.ico" />
    <meta name="msapplication-TileImage" content="http://supportco.ir/wp-content/uploads/2020/05/subscriptions.ico" />
    <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

    <body class="tw-leading-normal"
          style='background-image: url({{URL::asset("img/bg1.png")}});
              background-size:cover;
              background-repeat:no-repeat;
              '
    >


    <div id="OurvinID" name="OurvinID"
        style="position:absolute;
        left:2%;
        top:16px;
        color: #FFFFFF;
        font-size: 35px;
        font-family: Consolas;
        font-stretch: extra-condensed
        ">
          Ourvin
    </div>

    <div id="laravelversion" name="laravelversion"
        style="position:absolute;
        left:1%;
        top:8px;
        color: #32C5FF;
        font-size: 10pt;
      ">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>


    
<br><br><br>

<br><br><br>
    <!--
<script>
    document.getElementById("laravelversion").style.top =document.getElementById("OurvinID").style.top +100;

</script> 

    <div style="top:200px; ">
        <form action="/user" method="post"  >

            <div class="form-group row">
                <label for="n1" class="col-md-4 col-form-label text-md-right" style="color: #a0aec0;">
                    {{ __('User Name:') }}
                </label>

                <div class="col-md-6">
                    <input id="uname"
                           type="text"
                           name="uname"
                           class="form-control
                                @error('uname')
                               is-invalid
                                @enderror"
                           value="{{ old('uname') }}"
                           required autocomplete="uname" autofocus>

                    @error('uname')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="f1"
                       class="col-md-4 col-form-label
                           text-md-right"  style="color: #a0aec0;">{{ __('Password:') }}
                </label>

                <div class="col-md-6">
                    <input id="f1" type="password"
                           class="form-control
                                @error('f1') is-invalid @enderror"
                           name="f1" value="{{ old('f1') }}"
                           required autocomplete="f1" autofocus>

                    @error('f1')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  style="color: #a0aec0;">

                        <label class="form-check-label" for="remember" style="color: #a0aec0;">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>

        </form>
    </div> 
 <a href="{{ url('/registery')}}" 
 style="color:#dcdcdc;">register</a></li>
 ====================-->                 
 
             <hr>
           <div><a href="{{ url('/logi')}}" style="color:#dcdcdc;">controller test</a></div>
            <ul class="nav navbar-nav" style="color:#dcdcdc;">
                <li class="active"><a href="#" style="color:#dcdcdc;">Home</a></li>
                <li><a href="{{ url('/aboutus')}}" style="color:#dcdcdc;">Aboutus</a></li>
                <li><a href="{{ url('/contactus')}}" style="color:#dcdcdc;">Contactus</a></li>
                <li><a href="{{ url('/logi')}}" style="color:#dcdcdc;">my controller</a></li>
                <li><a href="{{ url('/api/apiuser/')}}" style="color:#dcdcdc;">my API controller</a></li>
                <li><a href="{{ url('/user/')}}" style="color:#dcdcdc;">my user</a></li>
            </ul>
    @if (Route::has('login'))  
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home')}}" class="text-sm text-gray-700 underline" 
                style="color:#ecec22 ">Home</a>
            @else
                <a href="{{ route('login')}}" class="text-sm text-gray-700 underline" 
                style="color:#ecec22 ">Log in</a>
                @if(Route::has('registery'))
                
                    <a href="{{ route('registery')}}" class="ml-4 text-sm text-gray-700 underline" 
                    style="color:#ecec22 ">Register</a>
                @endif
            @endauth
        </div> 
    @endif
 <!--=====================--> 
    </body>
</html>
























////
