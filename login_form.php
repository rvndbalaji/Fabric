<?php
//Perform login
//Connect to database
require_once('db_core.php');

//Perform form validation
if(isset($_POST['username_text']) &&
   isset($_POST['password_text']))
{
    $un = $_POST['username_text'];
    $pw = $_POST['password_text'];
    if(!(empty($un) || empty($pw)))
    {
        //Print either error or success;
         $result = performLogin($un,$pw);
        if($result=="success")
        {
           //User can now login.
            //Create a new session with user id
            $_SESSION['user_id']=  getUserInfo($un,'fab_id');
            $_SESSION['user_un'] = $un;
            $_SESSION['user_fn'] = getUserInfo($un,'fab_firstname');
            $_SESSION['user_ln'] = getUserInfo($un,'fab_lastname');

            $_SESSION['user_em'] = getUserInfo($un,'fab_email');

            $_SESSION['user_ph'] = getUserInfo($un,'fab_phnumber');
            echo "Logging in...<br><br>";
           header("refresh:0;url=http://localhost/Fabric");
        }
        else
        {
            echo $result;
        }


    }
    else
    {
        echo "Enter details and then submit you idiot!";
    }
}
function performLogin($un,$pw)
   {
       $result = Fetch("select fab_password from users where fab_username='$un'");
       $row=mysqli_fetch_array($result);
        if($row['fab_password']==$pw)
        {
            return "success";
        }
        else
        {
            return "Invalid Password";
        }
   }
?>




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

    <form action="" method="post" id="login_form_element" target="_self">
        <div id="form_box" align="center">
            <h5>Login</h5>
            <hr>
            <div class="input_label container">
                <div class="row">
                    <div class="col-12">
                        <span class="custom_label">Username</span><input class="input_box" type="text" name="username_text" />
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-12">
                        <span class="custom_label">Password</span><input class="input_box" name="password_text" type="password" />
                        </label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-12">
                        <span class="custom_button" name="login_button" onmouseup="performLogin();">Login</span>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-6" align="left">
                        <a href="register.php" target="_self"><span class="custom_button"
                    name="signup_button" onmouseup="performLogin;">Sign Up</span></a>
                    </div>
                    <div class="col-6" align="right">
                        <a href="iforgot">I forgot my password</a>
                    </div>
                </div>

            </div>
        </div>
    </form>
