<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>UNUJA Laravel</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    @include('layouts.style')
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
        <form class="form-login needs-validation" id="form_personal" novalidate action="{{ route('auth') }}" method="POST">
            @csrf
            <h2 class="form-login-heading">sign in now</h2>
            <div class="login-wrap">
                <div class="form-group">
                    <input type="text" name="nim" class="form-control" placeholder="NIM" minlength="5"
                        value="" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                    </span>
                </div>
                <button id="submitEditPersonal" class="btn btn-theme btn-block" type="submit"><i
                        class="fa fa-lock"></i>
                    SIGN IN</button>
                <hr>
                <div class="registration">
                    Don't have an account yet?<br />
                    <a class="" href="#">
                        Create an account
                    </a>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
            class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off"
                            class="form-control placeholder-no-fix">
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-theme" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.script')
  <script src="{{ url('template/lib/jquery3/jquery.validate.min.js') }}"></script>
  <script type="text/javascript">
    var formPersonal = $("#form_personal");
    formPersonal.validate();
    $("#submitEditPersonal").click(function(event) {
        if (formPersonal.valid() === false) {
            alert("invalid");
        } else {
            alert("valid");
            // window.location.href = "{{ route('dashboard') }}";
        }
    });
</script>
</body>

</html>
