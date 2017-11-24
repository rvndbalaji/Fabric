<?php require_once('header.php')?>
<?php
                if(!isLoggedIn())
                {
                     echo "<div class='centerpos' id='log_reg''>";
                    require_once($REG_TOKEN);
                    echo "</div>";

                }
                else
                {
                    body();
                }
function body()
{

?>


    <!--div id="fake_body" class="lazy">
    </div-->
    <div class="body_content" class="container-fluid">
        <?php
                echo "<br><br><center>Welcome <b>".$_SESSION['user_fn']."  ".$_SESSION['user_ln']."</b></center>";
            ?>
    </div>




    <?php }
        require_once('footer.php');?>
