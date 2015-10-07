<?php session_start();
include 'session.php'; ?>
<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		
		<title>Mad mimi</title>
		
		  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css"> 
        <link rel="stylesheet" href="css/crazymimi-style.css"> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/myStyle.css" rel="stylesheet" type="text/css">
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" />	

<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    //-->
</script>
<style>
 .half{
	 
	 width: 47%;
 }

.comp
{
 float: left;
 width: 68%;
 margin-left: 21px;
 margin-top: 8px !important;
}

.rightinfo img {
width: 70px;
  height: 70px;
    padding:0px;
}


 
 
</style>
	</head>
	<body>


 <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid" style="width:100%">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                   <h1><a href="index.php"><img src="./images/crazy3.jpg"></img></h1>
 
               
                </div> <!-- /.logo -->
               
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a href="logout.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                               <li><a href="account.php">Account</a></li>
                            <li><a href="addon.php">Add Things</a>   </li>
                            <li><a href="gopro.php">Go Pro</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                             <li ><a href="logout.php">Logout, <?php include 'session.php'; echo $login_session ?></a > </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                       <li><a href="account.php">Account</a></li>
                            <li><a href="addon.php">Add Things</a>   </li>
                            <li><a href="gopro.php">Go Pro</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                             <li ><a href="logout.php">Logout, <?php include 'session.php'; echo $login_session ?></a > </li>
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

        <div class="content-wrapper">
						<div class="midpart" style="width: 86%; !important;width: 67%; margin-left: 257px;margin-top: 81px;">
							<div class="leftinfo" style="overflow: scroll;height: 375px;">
								
									<h1> Hi!  <?php  echo $login_session; ?>.....
									Your User List is here <small><a href="multiuser.php" style=" margin-left: 112px;">Back
									</a><br><br>

										<?php
                                                                                                 include 'connect.php';
                                                                                                  include 'session.php';
											  	

                                                                                                // Create connection
                                                                                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                                                                if (!$conn)
                                                                                                        {
                                                                                                            die("Connection failed: " . mysqli_connect_error());
                                                                                                        }
												if(isset($_SESSION['login_user'])){
												$parentemail=$user_check;
											  echo "<ul style='width: 97%;border:1px solid;padding: 7px;'>";
											  $sql="SELECT first_name, email FROM AddUser WHERE parentemail = '$parentemail'  ";
											  $qry=mysqli_query($conn,  $sql);
											  $count=mysqli_num_rows($qry);
											  if($count > 0){
											  while($row = mysqli_fetch_array($qry))
											  	echo "<div style=' background-color: gainsboro;  margin-bottom: 12px;'> <li> first_name : $row[first_name] </li> <li> email : $row[email] <a style='padding-left:367px;' href='delete_user.php?del=$row[email]'> Delete </a></li> <br/> </div>";
											  echo "</ul>";
											  	}
											  	else
											  	{
												  	echo  "You have no users yet. ";
												  	
											  	}
											  }
	
											 ?>
															 
										</small>
									</h1>
								</div><!-- leftinfo end -->
							<div class="rightinfo" style="height: 375px;">
								<div class="comp" style="margin-left: 63px;margin-top:30px">
									<a href="javascript:void(0)" > 
									<input class="adduser" type="button" name="adduser" value="Add a User" onclick="toggle_visibility('new_user_dialog');" style="padding:15px;width: 100%;">
									</a>
								</div>
								<div class="pro">
							<figure class="upgrade_nag" style="padding-top: 73px;">
								<span >
<!-- 									<span class="icon check-mark">Check</span> -->
								</span>
<!-- 								<span class="pro_badge_label subtle">Pro User</span> -->
									<span style="padding-left: 10px;">
									<img alt="Bdelpesco" src="images/bdel.jpg" style="  margin-left: 19px;">
									</span>
								<span class="avatar_person" style="position: absolute;left: 1085px;top: 427px;}">
									<a href="https://twitter.com/bdelpesco" target="blank">@bdelpesco</a>
									<span class="avatar_company subtle">
										<a href="http://belindadelpesco.blogspot.com/" title="Visit Belinda Del Pesco Fine Art" target="_blank">
										Belinda Del Pesco Fine Art
										</a>
									</span>
								</span>
								<span class="prouser">
									<img src="images/prouser.jpg" style="margin-left: 260px;margin-top: -87px;">
								</span>
								<figcaption>
								

									<span class="upgrade_nag_action right" style="float: right">
										<a href="/service_agreements/change_plan" class="btn primary small">Go Pro Today</a>
									</span>
									<cite>Mad Mimi Pro rocks! Without fail, when I've announced an event with Mad Mimi, I've sold art to a patron pre-opening.</cite>
								</figcaption>
							</figure>
						</div>
							</div> <!-- rightinfo end dash-->
						</div><!-- midpart end of dash-->	
					</div> <!--  end content-wrapper-->
					<div id="new_user_dialog" class="window " style="display: none; position: fixed; z-index: 7000; left: 415px; top: 27px;">						
						<header>
						<h1 class="window_title" style="margin-top: 21px;">
						Add a person to Company
						</h1>
						<a href="javascript:void(0);" onclick="toggle_visibility('new_user_dialog');" class="window_close" style="top: 17px;"><span>×</span></a>
						</header>
						<div class="window_contents">
						<form accept-charset="UTF-8" action="multiuser.php" class="new_user" id="new_user" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="?">
								<input name="authenticity_token" type="hidden" value="VweM7KBiMOZUO+iqybd+wStmRgzU2wUJjxQqa4FM28Y=">
							</div>
							<fieldset>
								<div class="field">
									<span class="half">
									<label for="user_first_name">First name</label>
									<input autocomplete="off" autofocus="autofocus" id="user_first_name" name="first_name" 
									required="required" size="30" type="text">
									</span>
									<span class="half">
									<label for="user_last_name">Last name</label>
									<input autocomplete="off" id="user_last_name" name="last_name" required="required" size="30" type="text">
									</span>
								</div>
								<div class="field">
									<span class="half">
									<label for="user_email">Email address</label>
									<input autocomplete="off" id="user_email" name="email" required="required" size="30" type="email">
									</span>
									<span class="half">
									<label for="user_password" style="padding-right:20px">Password</label>
									<input autocomplete="off" id="user_password" name="password" required="required" size="30" type="password">
									</span>
								</div>
								<div class="field">
									<span class="full" style="  width: 93%; !important;">
									<label for="user_organization_name">Company/Group</label>
									<input id="user_organization_name" name="comp" required="required" type="text" value="" size="76">
									</span>
								</div>
								<div class="actions" style="WIDTH: 100%;margin-left: 2px;  margin-bottom: -9px;">
									<button class="btn primary" id="primary_form_action" name="proceed" type="submit" style="  margin-left: 171PX;">
										<span>Add this person to my account</span>
									</button>
								</div>
							</fieldset>
						</form>
						</div> 
					</div>

  <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>
	</body>
</html>