<?php
//header("sign_up.php");
//die();
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous" type="text/css">



<script type="application/javascript">
    function performLogin() {
        var un_text = $('#username_text').val();
        var pw_text = $('#password_text').val();
        if (un_text != "" || pw_text != "") {
            $('#login_form_element').submit();
        } else {
            alert("Please enter your credentials");
        }
    }

</script>
<link rel="stylesheet" href="elements.css" />

<form action="#" method="post" id="login_form_element">
    <div id="form_box" align="center">
        <h5>Login</h5>
        <hr>
        <div class="input_label container">
            <div class="row">
                <div class="col-12">
                    <span class="custom_label">Username</span><input class="input_box" type="text" id="username_text" />
                </div>
            </div><br>
            <div class="row">
                <div class="col-12">
                    <span class="custom_label">Password</span><input class="input_box" id="password_text" type="password" />
                    </label>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12">
                    <span class="custom_button" id="login_button" onmouseup="performLogin();">Login</span>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-6" align="left">
                    <span class="custom_button">Sign Up</span>
                </div>
                <div class="col-6" align="right">
                    <a href="iforgot">I forgot my password</a>
                </div>
            </div>

        </div>
    </div>
</form>
