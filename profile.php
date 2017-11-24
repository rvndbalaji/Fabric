<?php
require_once("header.php");
if(!isLoggedIn())
{
	die("Please log in to see the profile");
}


//Pre-requisites and profile data
$un = getFileName();
$fn = getUserInfo($un,'fab_firstname');
$ln = getUserInfo($un,'fab_lastname');
$em = getUserInfo($un,'fab_email');
$ph = getUserInfo($un,'fab_phnumber');

require_once('card.php');

?>
<style>
    .img-circle:hover {
        -webkit-box-shadow: 0 0 0.5em 0.1em white;
        box-shadow: 0 0 0.5em 0.1em white;
    }

    .img-circle {
        position: relative;
        z-index: 3;
        margin: 1rem;
        -webkit-transition: 0.3s -webkit-box-shadow;
        transition: 0.3s -webkit-box-shadow;
        transition: 0.3s box-shadow;
        transition: 0.3s box-shadow, 0.3s;
        -webkit-box-shadow;
        border-radius: 100%;
    }

    #dp {
        z-index: 2;
        position: relative;
        border: 0.3rem solid rgba(33, 33, 33, 0.5);
        max-width: 12rem;
        max-height: 12rem;
        margin: auto;
        margin-top: -6.5rem;
        opacity: 1;
        animation-delay: 0s;
        animation-duration: 0.5s;
    }

    #dp:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    #user_fullname {
        font-weight: bold;
        font-size: 150%;

    }

    .content {
        margin-top: 1rem;
    }

    #one_liner {
        width: 35vw;
        min-height: 1rem;
        border-bottom: 0.05rem solid #027baa;
        border-radius: 0.5rem;
        color: #027baa;
        font-size: 1.1rem;
        font-weight: bold;
        font-family: 'Poiret One';
    }

    .info_card {
        height: 15rem;
        padding: 1rem;
        box-shadow: 0rem 0rem 2rem lightgrey;
        border-radius: 0.5rem;
        color: white;
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
        background-color: rgba(0, 0, 0, 0.4);
    }

    #info_about {
        background-image: url('https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/14021723_1312543342137852_3331314458029867334_n.jpg?oh=f56bd96ef834d38c91c24611ef08d4bf&oe=5AA5CE20');

    }

    #info_friends {
        background-image: url('https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/18342463_638915486307202_7005656593503891201_n.jpg?oh=00782fbdade91ec05ccc457bfa27d395&oe=5AA96D82');

    }

    #info_photos {
        background-image: url('https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/22089562_1772602929465222_9082833758932885312_n.jpg?oh=7aa274d42c10467818b0f179e2e71090&oe=5AA33E50');
    }


    .info_row {
        margin-left: 1rem;
        margin-right: 1rem;
    }

    #cover {
        background-position: bottom;
        background-repeat: no-repeat;
        background-image: url('https://static.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg');
        background-color: rgba(0, 0, 0, 0.25);
        background-blend-mode: multiply;
        background-size: cover;
        background-attachment: fixed;
        width: 97vw;
        height: 15rem;
        color: White;
        margin-bottom: 0;
        border-radius: 0rem 0rem 0.5rem 0.5rem;
        margin-top: 4rem;
        box-shadow: 0rem 0rem 1rem gray;
        position: relative;
        z-index: -2;

    }

    .body_content {
        width: 97vw !important;
        border-radius: 0.5rem;
        box-shadow: 0rem 0rem 5rem gray;
        margin-top: 0.3rem;
    }

    .info_title {
        font-size: 120%;
        font-weight: bold;
    }

</style>
<!--div id="fake_body" class="lazy">
</div-->
<div id="cover" class="container-fluid jumbotron">
</div>
<div class="body_content container-fluid">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" align="center">
            <img id="dp" src="https://rvndbalaji.github.io/images/dp.png" class="img-circle img-responsive">
        </div>
    </div>

    <div class="row">
        <div class="content col-md-12" align="center">
            <span id="user_fullname"><?php echo $fn." ".$ln; ?></span>
            <div class="col-md-12 col-sm-12 col-xs-12" align="center" id="one_liner">
                <span id="user_quote">Talk to me, and you'll laugh your lungs out xD</span>
            </div><br>


            <div class="row" style="padding:1rem;">
                <div class="col-md-4" align="center">
                    <div class="info_card" id="info_about">
                        <span class="info_title"><?php echo "About ".$fn;?></span>
                        <div class="info_details" align="left">
                            <span>Username<br><b>@<?php echo $un;?></b></span><br><br>

                            <span>Email<br><b><?php echo $em;?></b></span><br><br>

                            <span>Phone<br><b><?php echo $ph;?></b></span><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" align="center">
                    <div class="info_card" id="info_friends">
                        <span class="info_title">Friends</span>
                        <div class="info_details" align="left"><br>
                            <ul>
                                <li>Vaishu</li>
                                <li>Hashu</li><br>
                                <li>Arun</li>
                                <li>Bindu</li><br>
                                <li>Ashok</li>
                                <li>Girish</li><br>
                                <li>Bhavish</li>
                                <li>Dhanush</li><br>
                                <li>Akshay</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" align="center">
                    <div class="info_card" id="info_photos">
                        <span class="info_title">Photos</span>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>




<?php
require_once('footer.php');
?>
