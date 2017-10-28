<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous" type="text/css">
<style type="text/css">
    #form_box {
        background-color: aliceblue;
        position: absolute;
        padding: 2rem;
        margin: 0 auto;
        height: 23rem;
        width: 30rem;
        box-shadow: 0 0 2rem 0.1rem gray;
    }


    input {
        font-size: 1.1rem;
        padding: 0.5rem;
    }

    .clicker {
        background-color: blueviolet;
    }

    .custom_label {
        padding: 0.5rem;
        background-color: #90CAF9;
    }

    .input_box {
        border-color: transparent;
        background-color: transparent;
    }

</style>

<form action="#" method="post">
    <div id="form_box" align="center">
        Login
        <hr>
        <div class="input_label container">
            <div class="row">
                <div class="col-12">
                    <span class="custom_label"> Username</span>
                    <input class="input_box" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="password_text"> Password
                <input name= "password_text" type="password" />
            </label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Login" class="clicker" />
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-6" align="left">
                    <input type="button" value="Sign Up" class="clicker" />
                </div>
                <div class="col-6" align="right">
                    <a href="iforgot">I forgot my password</a>
                </div>
            </div>

        </div>
    </div>
</form>
