<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

  </head>
  
  <body>
   
  <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <video autoplay muted loop id="myVideo">
                <!-- <source src="{{asset('asset/video/WMVIP.mp4')}}" type="video/mp4"> -->
            </video>


            <div class="welcome-form" id="welcome">


                <button class=" welcomBTN hadding2 px-3" style="font-size: 30px;" id="showSignUp">Join Now</button>
                <br>
                <button class="welcomBTNLog " style="color: #6c6437" id="showLogin">Login</button>
            </div>


          <div class="container" id="signUp">
            <div class="row ">
              <div class="col-md-4 md-4  sign-up ">
                    <form action="{{route('profile')}}" method="POST" enctype="multipart/form-data"  id="form" >
                                @csrf                    
                     <fieldset>
                      <h1 class="text-white hadding mt-3">Sign up</h1>
                      <br/>
                      <input type="text" name="username" id="username" placeholder="Username" required autofocus>
                      <p id="p1" class="text-danger"></p>

                      <input type="email" name="email" id="email" placeholder="E-mail" required>
                      <p id="p2" class="text-danger"></p>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                      <input type="password" name="password" id="password" placeholder="Password" required>
                      <p id="p3" class="text-danger"></p>

               
                      <input type="password" name="confirm-password" id="confirmPassword" placeholder="Confirm Password" required>
                      <p id="p4" class="text-danger"></p>

                 
                      <label for="submit"></label>
                      <input type="submit" name="submit" id="submit" value="REGISTER">

                      <span class="text-white loginLink" id="signupBtnClick">Alreaday have an account ? Log In </span>
                    </fieldset>
                </form>
              </div>
            </div>
          </div>



          <div class="container " id="login">
            <div class="row">
              <div class="col-md-4 md-4 log-in login">
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <fieldset>
                        <h1 class="text-white hadding mt-3">Sign In</h1>
                        
                        <br/>
                        <input type="email" name="email" id="email" class=" @error('email') is-invalid @enderror"
                         placeholder="E-mail" value="{{ old('email') }}" autocomplete="email"  required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <br/><br/>
                        <input type="password" name="password" class=" @error('password') is-invalid @enderror"
                         id="password" placeholder="Password" required autocomplete="current-password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <br><br>

                        <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4 text-white text-left">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <label for="submit"></label>
                        <input type="submit" name="submit" id="submit" value="LOGIN">

                        <span class="text-white loginLink" id="loginBtnClick" >Create new account ? sign up </span>


                        <span class="text-white loginLink" id="forgetLink" >Forgot Password </span>
                      </fieldset>
                  </form>
              </div>
            </div>
          </div>




          <div class="container " id="forgot">
            <div class="row">
              <div class="col-md-4 md-4 forget login">
                <form method="post">
                      <fieldset>
                        <h1 class="text-white hadding mt-3">Forgot Password</h1>
                        
                        <br/> <br>
                        <input type="email" name="email" id="email" placeholder="E-mail" required>
                        <br/><br/>
                        <label for="submit"></label>
                        <input type="submit" name="submit" id="submit" value="HELP ME">

                        <span class="text-white loginLink" id="forgettologin" >Back to the login ? log in</span>


                      </fieldset>
                  </form>
              </div>
            </div>
          </div>

        </div>
    </div>
  </div>
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  
  <script>
    $(document).ready(function() {
        $("#signUp").css('display', 'none');
      $('#showSignUp').click(function() {
        $("#signUp").css('display', 'block');
        $("#welcome").css('display', 'none');
      });
  });
  </script>


<script>
    $(document).ready(function() {
        $("#login").css('display', 'none');
      $('#showLogin').click(function() {
        $("#login").css('display', 'block');
        $("#welcome").css('display', 'none');

      });
  });
  </script>


<script>
    $(document).ready(function() {
      $('#loginBtnClick').click(function() {
        $("#signUp").css('display', 'block');
        $("#welcome").css('display', 'none');
        $("#login").css('display', 'none');

      });
  });
  </script>


<script>
    $(document).ready(function() {
      $('#signupBtnClick').click(function() {
        $("#signUp").css('display', 'none');
        $("#welcome").css('display', 'none');
        $("#login").css('display', 'block');

      });
  });
  </script>


<script>
    $(document).ready(function() {
        $("#forgot").css('display', 'none');
      $('#forgetLink').click(function() {
        $("#signUp").css('display', 'none');
        $("#welcome").css('display', 'none');
        $("#login").css('display', 'none');
        $("#forgot").css('display', 'block');

      });
  });
  </script>


<script>
    $(document).ready(function() {
      $('#forgettologin').click(function() {
        $("#signUp").css('display', 'none');
        $("#welcome").css('display', 'none');
        $("#login").css('display', 'block');
        $("#forgot").css('display', 'none');

      });
  });
  </script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



<script>
    $("#submit").click(function() {
        var username = $("#username").val();
        var email = $("#email").val();
        var pass = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
     

      if(username.length == "")
          {
            $("#p1").text("Username required");
            $("#username").focus();
            return false;
          }
          else if(email.length == "")
          {
            $("#p2").text("Email required");
            $("#email").focus();
            return false;
          }
          else if(pass.length == "")
          {
            $("#p3").text("Password required");
            $("#password").focus();
            return false;
          }



          else if(confirmPassword != pass)
          {
            $("#p4").text("Password does not match");
            $("#confirmPassword").focus();
            return false;
          }
        else
          {
                return true;
              }
          
      });

  
 

</script>

  <!-- toaster js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- toaster script -->
  <script>
    @if(Session::has('message'))
    var type = "{{ Session ::get('alert_type','danger') }}"
    switch(type){
        case 'info':
        toastr.info("{{ Session ::get('message') }}");
        break;
        case 'success':
        toastr.success("{{ Session ::get('message') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session ::get('message') }}");
        break;
        case 'error':
        toastr.error("{{ Session ::get('message') }}");
        break;
    }
    @endif
  </script>
  <!-- toaster script end --> 
  </body>
</html>