<?php
//Perform registration
//Connect to database
require_once('db_core.php');
Global $MYSQL_CODE_DUPLICATE_KEY;

//Perform form validation
if(isset($_POST['firstname_text']) &&
   isset($_POST['lastname_text']) &&
   isset($_POST['username_text']) &&
   isset($_POST['password_text']) &&
   isset($_POST['email_text'])
  )
{
    $fn = $_POST['firstname_text'];
    $ln = $_POST['lastname_text'];
    $un = $_POST['username_text'];
    $pw = $_POST['password_text'];
    $et = $_POST['email_text'];
    if(!(empty($fn) ||
       empty($ln) ||
       empty($un) ||
       empty($pw) ||
       empty($et)))
    {
        //Print either error or success;
         $result = validateDetails($un,$pw,$et);
        if($result=="success")
        {
            $reg_res  = registerUser($fn,$ln,$un,$pw,$et);
        if(strcmp($reg_res,$MYSQL_CODE_DUPLICATE_KEY)==0)
            {
            echo "A user already exists with that username";
            }
            else
            {
                echo "Sucessfully registered.     Redirecting you...<br><br>";
                header("refresh:4;url=index.php");
            }

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
function registerUser($fn,$ln,$un,$pw,$et)
{
    $result = Fetch("insert into users values(NULL,'$un','$pw','$fn','$ln','$et','')");
    return $result;
}
function un_validate($user)
{
    //Username can contain alphabets, numbers, underscores, full stops and must start with an alphabet only
  $re = "/^[A-Za-z][\w\-\.]*$/i";
  return preg_match($re,$user);

}
function email_validate($em)
{
  $re = "/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i";
  return preg_match($re,$em);

}
function validateDetails($un,$pw,$et)
       {
           //Validating password length
           if(strlen($pw)<6)
               return "Password too short";
           //Validating username
           if(!un_validate($un))
               return "Invalid username";

            //Validating email
           if(!email_validate($et))
               return "Invalid email";

            return "success";

       }

?>





    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous" type="text/css">


    <script type="application/javascript">
        function performSignUp() {
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
            <h5>Register</h5>
            <hr>
            <div class="input_label container">

                <div class="row">
                    <div class="col-12">
                        <span class="custom_label">First Name</span><input class="input_box" type="text" name="firstname_text" />
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-12">
                        <span class="custom_label">Last Name</span><input class="input_box" type="text" name="lastname_text" />
                    </div>
                </div><br>



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
                        <span class="custom_label">Email</span><input class="input_box" name="email_text" type="text" />
                        </label>
                    </div>
                </div><br>




                <div class="row">
                    <div class="col-12">
                        <span class="custom_button" name="login_button" onmouseup="performSignUp();">Sign Up</span>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-6" align="left">
                        <a href="index.php" target="_self">
                    <span class="custom_button">Login</span></a>
                    </div>
                </div>

            </div>
        </div>
    </form>
