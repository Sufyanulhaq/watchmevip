<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
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
                  <form method="post">
                    <fieldset>
                      <h1 class="text-white hadding mt-3">Sign up</h1>
                      <br/>
                      <input type="text" name="username" id="username" placeholder="Username" required autofocus>
                      <br/><br/>
                      <input type="email" name="email" id="email" placeholder="E-mail" required>
                      <br/><br/>
                      <input type="password" name="password" id="password" placeholder="Password" required>
                      <br/><br/>
                      <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
                      <br/> <br/> <br/>
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
                <form method="post">
                      <fieldset>
                        <h1 class="text-white hadding mt-3">Sign In</h1>
                        
                        <br/>
                        <input type="email" name="email" id="email" placeholder="E-mail" required>
                        <br/><br/>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <br/><br/>
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



  </body>
</html>