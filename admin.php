<?php session_start(); error_log(0) ?>
<html>
	<head>
		<!--==================================
		LOADING SCREEN BY TASID           
		http://steamcommunity.com/id/tasid
		===================================-->
	
		<title>Tee Load &middot; Admin Settings</title>
		
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		
		<script src="inc/js/cycle2.js"></script>
		<script src="inc/js/jquery.js"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		<script src="https://use.fontawesome.com/c87fd1e779.js"></script>
		
		<style>form h2 {margin: 0; padding 0} form h2 small {color: #CCC; font-size: 15px; font-weight: 200;} form a {color: #CCC; transition: all .5s ease-in-out;} a:hover {color: #FFF;} hr {margin: 0; margin-top: 20px; margin-bottom: 20px;}</style>
		
		<?php
			include('inc/js/js.php');
			include('inc/css/style.php');
		?>
		
		<?php 

			if ($_SESSION["login"] != "true"){
				
				header("Location:adminlogin.php");
					$_SESSION["error"] = "<p>Please log in</p>";
				exit;
				
			}
	
			include('config.php');
			
				$get = file_get_contents("param.xml");
				$arr = simplexml_load_string($get);
				
				$website = $arr -> web -> website;
				$store = $arr -> store -> storeurl; 
				$tsip = $arr -> teamspeak -> tsip; 
				
				$servername = $arr -> topbar -> servername;
				$slogan = $arr -> tb -> slogan;
				
				$gamemode_dis = $arr -> gamemode_dis -> cnt;
				$website_dis = $arr -> website_dis -> cnt;
				$store_dis = $arr -> store_dis -> cnt;
				$ts_dis = $arr -> ts_dis -> cnt;
				$dis_oi = $arr -> disable_oi -> dis;
				$map_dis = $arr -> map_dis -> cnt;
				$slots_dis = $arr -> slots_dis -> cnt;
				$dis_si = $arr -> disable_si -> dis;
				$dis_load = $arr -> disable_load -> dis;
				$dis_ct = $arr -> disable_ct -> dis;
				
				$bg1 = $arr -> bg1 -> bg;
				$bg2 = $arr -> bg2 -> bg;
				$bg3 = $arr -> bg3 -> bg;
				$cycletime = $arr -> cycletime -> bg;
				
				$volume = $arr -> youtube -> vol;
				$ytsongurl = $arr -> youtube_song -> song;
				
				$ct1 = $arr -> ct1 -> ct;
				$ct2 = $arr -> ct2 -> ct;
				$ct3 = $arr -> ct3 -> ct;
				$cttime = $arr -> cttime -> ct;
				
				$mname = $arr -> music -> name;
				
				$dis_music = $arr -> dis_music -> dis;
	
				$ytsongurl2 = $arr -> youtube_song2 -> song;
				$mname2 = $arr -> music2 -> name;
				
				$ytsongurl3 = $arr -> youtube_song3 -> song;
				$mname3 = $arr -> music3 -> name;
				
				$cbox1 = $arr -> cbox1 -> cbox;
				$cbox2 = $arr -> cbox2 -> cbox;
				$cbox3 = $arr -> cbox3 -> cbox;
				$cbox4 = $arr -> cbox4 -> cbox;
				$cbox5 = $arr -> cbox5 -> cbox;
				$cboxcycle = $arr -> cbox -> cycle;
				$dis_cbox = $arr -> dis_rfsection -> dis;
				$cboxh = $arr -> cboxh -> cbox;
				
				$about = $arr -> about -> info;
				$dis_about = $arr -> disabout -> dis;
				
				$sid1 = $arr -> sid1 -> stid;
				$sid2 = $arr -> sid2 -> stid;
				$sid3 = $arr -> sid3 -> stid;
				$sid4 = $arr -> sid4 -> stid;
				$sid5 = $arr -> sid5 -> stid;
				$sid6 = $arr -> sid6 -> stid;
				
				$rank1 = $arr -> rank1 -> rank;
				$rank2 = $arr -> rank2 -> rank;
				$rank3 = $arr -> rank3 -> rank;
				$rank4 = $arr -> rank4 -> rank;
				$rank5 = $arr -> rank5 -> rank;
				$rank6 = $arr -> rank6 -> rank;
				
				$dis_staff = $arr -> staff -> dis;
				$dis_st1 = $arr -> st1 -> dis;
				$dis_st2 = $arr -> st2 -> dis;
				$dis_st3 = $arr -> st3 -> dis;
				$dis_st4 = $arr -> st4 -> dis;
				$dis_st5 = $arr -> st5 -> dis;
				$dis_st6 = $arr -> st6 -> dis;
				
				$shuffle = $arr -> shufflem -> music;
				
				if ($gamemode_dis == "1") {
					
				/*
				Useless Code
					$dis_staff = $arr -> 23j2 -> 231h29 -> 76561198210577821 -> 320230810341870
				*/
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#gamemode_dis').attr('href', 'adminutil.php?act_gamemode');
							$('#dis_gamemode').html("ENABLE");
							$('#dis_gamemode').css('color', 'lightgreen', '!important');

						});
					</script>
		
		<?php
			
				}
				
				if ($ts_dis == "1") {
		?>
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#teamspeak_dis').attr('href', 'adminutil.php?act_tsdis');
							$('#dis_teamspeak').html("ENABLE");
							$('#dis_teamspeak').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
				
				if ($store_dis == "1") {
		?>
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#store_dis').attr('href', 'adminutil.php?act_storedis');
							$('#dis_store').html("ENABLE");
							$('#dis_store').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
				
				if ($website_dis == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#website_dis').attr('href', 'adminutil.php?act_websitedis');
							$('#dis_website').html("ENABLE");
							$('#dis_website').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
				if ($dis_oi == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#oi_dis').attr('href', 'adminutil.php?act_otherinfo');
							$('#dis_oi').html("ENABLE");
							$('#dis_oi').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($slots_dis == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#slots_dis').attr('href', 'adminutil.php?act_slotsdis');
							$('#dis_slots').html("ENABLE");
							$('#dis_slots').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($map_dis == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#map_dis').attr('href', 'adminutil.php?act_mapdis');
							$('#dis_map').html("ENABLE");
							$('#dis_map').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_si == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#si_dis').attr('href', 'adminutil.php?act_serverinfo');
							$('#dis_si').html("ENABLE");
							$('#dis_si').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_load == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#load_dis').attr('href', 'adminutil.php?act_loader');
							$('#dis_load').html("ENABLE");
							$('#dis_load').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_ct == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#ct_dis').attr('href', 'adminutil.php?act_ct');
							$('#dis_ct').html("ENABLE");
							$('#dis_ct').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_music == "false") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#music_dis').attr('href', 'adminutil.php?act_music');
							$('#dis_music').html("ENABLE");
							$('#dis_music').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_cbox == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#rfsection_dis').attr('href', 'adminutil.php?act_rfsection');
							$('#dis_rfsection').html("ENABLE");
							$('#dis_rfsection').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_about == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#about_dis').attr('href', 'adminutil.php?act_about');
							$('#dis_about').html("ENABLE");
							$('#dis_about').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_staff == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#staff_dis').attr('href', 'adminutil.php?act_staff');
							$('#dis_staff').html("ENABLE");
							$('#dis_staff').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_st1 == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#st1_dis').attr('href', 'adminutil.php?act_st1');
							$('#dis_st1').html("ENABLE");
							$('#dis_st1').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_st2 == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#st2_dis').attr('href', 'adminutil.php?act_st2');
							$('#dis_st2').html("ENABLE");
							$('#dis_st2').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_st3 == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#st3_dis').attr('href', 'adminutil.php?act_st3');
							$('#dis_st3').html("ENABLE");
							$('#dis_st3').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_st4 == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#st4_dis').attr('href', 'adminutil.php?act_st4');
							$('#dis_st4').html("ENABLE");
							$('#dis_st4').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_st5 == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#st5_dis').attr('href', 'adminutil.php?act_st5');
							$('#dis_st5').html("ENABLE");
							$('#dis_st5').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
			if ($dis_st6 == "1") {
		?>
		
					<script type="text/javascript">
						$( document ).ready(function() {

							$('#st6_dis').attr('href', 'adminutil.php?act_st6');
							$('#dis_st6').html("ENABLE");
							$('#dis_st6').css('color', 'lightgreen', '!important');

						});
					</script>
		<?php
				}
		?>
	</head>
	
	<body>
		<div class="admin text-centre">
				<h1>Tee Load &middot; Admin</h1>
		</div>
				
		
		
		<div class="admin centre">
			<div class="left" style="display: inline-block; width: 40%; padding-right: 35px; margin-right: 50px; border-right: 1px solid #888;">
				
					<h2>Top Bar</h2>
					<hr />
				
				<form method="GET" action="adminutil.php">
				
						<h3 style="color: #DDD; margin: 0; padding: 0;">Server Name</h3>
						<input type="text" name="servername" value="<?php echo $servername; ?>" placeholder="Server Name Here">
					
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Slogan</h3>
						<input type="text" name="slogan" value="<?php echo $slogan; ?>" placeholder="Slogan Here">
						
						<input type="submit" value="Update" style="margin: 0; display: block;">
				</form>
					
					<h2>Other Information</h2>
					<hr />
						
				<form method="GET" action="adminutil.php">
				
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Website URL</h3>
						<input type="text" name="website" value="<?php echo $website; ?>" placeholder="Website URL Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Store URL</h3>
						<input type="text" name="store" value="<?php echo $store; ?>" placeholder="Store URL Here">
					
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Teamspeak IP</h3>
						<input type="text" name="tsip" value="<?php echo $tsip; ?>" placeholder="Teamspeak IP Here">
						
						<input type="submit" value="Update" style="margin: 0; display: block;">
					
				</form>
				
					<h2>Background</h2>
					<hr />
					
					<form method="GET" action="adminutil.php">
					
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Background 1 <small style="color: #BBB;"><i>You can use URL's</i></small></h3>
						<input type="text" name="bg1" value="<?php echo $bg1; ?>" placeholder="Background 1 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Background 2 <small style="color: #BBB;"><i>You can use URL's</i></small></h3>
						<input type="text" name="bg2" value="<?php echo $bg2; ?>" placeholder="Background 2 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Background 3 <small style="color: #BBB;"><i>You can use URL's</i></small></h3>
						<input type="text" name="bg3" value="<?php echo $bg3; ?>" placeholder="Background 3 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Background Cycle Time</h3>
						<input style="width: 60px;" type="text" name="cycletime" value="<?php echo $cycletime; ?>" placeholder="Cycle Time Here">
						
						<input type="submit" value="Update" style="margin: 0; display: block;">
					
					</form>
					
					<h2>Music Options</h2>
					<p>You can only use YouTube ID's. You can find the video id after watch?v= in the URL!.</p>
					<hr />
						
					<form method="GET" action="adminutil.php">
					
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">YouTube Music ID 1 <small style="color: #BBB;"></small></h3>
						<input type="text" name="youtubesong" value="<?php echo $ytsongurl; ?>" placeholder="Youtube ID Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Music Name 1</h3>
						<input type="text" name="mname" value="<?php echo $mname; ?>" placeholder="Music Name Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">YouTube Music ID 2 <small style="color: #BBB;"></small></h3>
						<input type="text" name="youtubesong2" value="<?php echo $ytsongurl2; ?>" placeholder="Youtube ID 2 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Music Name 2</h3>
						<input type="text" name="mname2" value="<?php echo $mname2; ?>" placeholder="Music Name 2 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">YouTube Music ID 3 <small style="color: #BBB;"></small></h3>
						<input type="text" name="youtubesong3" value="<?php echo $ytsongurl3; ?>" placeholder="Youtube ID 3 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Music Name 3</h3>
						<input type="text" name="mname3" value="<?php echo $mname3; ?>" placeholder="Music Name 3 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Music Volume <small style="color: #BBB;"> ( 1 - 10 )</small></h3>
						<input style="width: 60px;" type="text" name="volume" value="<?php echo $volume; ?>" placeholder="Music Volume Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Shuffle Music <small style="color: #BBB;">True / False</small></h3>
						<input style="width: 60px;" type="text" name="shuffle" value="<?php echo $shuffle; ?>" placeholder="True/False">
						
						<input type="submit" value="Update" style="margin: 0; display: block;">
					
					</form>
					
					<h2>Custom Box <small style="color: #BBB;">Can use for features / rules</small></h2>
					<hr />
						
					<form method="GET" action="adminutil.php">	
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">CBOX Header</h3>
						<input type="text" name="cboxh" value="<?php echo $cboxh; ?>" placeholder="Custom Box Header">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">CBOX Text 1</h3>
						<input type="text" name="cbox1" value="<?php echo $cbox1; ?>" placeholder="Custom Box 1 Text Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">CBOX Text 2</h3>
						<input type="text" name="cbox2" value="<?php echo $cbox2; ?>" placeholder="Custom Box 2 Text Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">CBOX Text 3</h3>
						<input type="text" name="cbox3" value="<?php echo $cbox3; ?>" placeholder="Custom Box 3 Text Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">CBOX Text 4</h3>
						<input type="text" name="cbox4" value="<?php echo $cbox4; ?>" placeholder="Custom Box 4 Text Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">CBOX Text 5</h3>
						<input type="text" name="cbox5" value="<?php echo $cbox5; ?>" placeholder="Custom Box 5 Text Here">
						
						<input type="submit" value="Update" style="margin: 0; display: block;">
					
					</form>
					
					<h2>Custom Text</h2>
					<hr />
					
					<form method="GET" action="adminutil.php">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Text 1</h3>
						<input type="text" name="ct1" value="<?php echo $ct1; ?>" placeholder="Custom Text 1 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Text 2</h3>
						<input type="text" name="ct2" value="<?php echo $ct2; ?>" placeholder="Custom Text 2 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Text 3</h3>
						<input type="text" name="ct3" value="<?php echo $ct3; ?>" placeholder="Custom Text 3 Here">
						
						<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Text Cycle Time</h3>
						<input style="width: 60px;" type="text" name="volume" value="<?php echo $cttime; ?>" placeholder="Text Cycle Time Here">
						
						<input type="submit" value="Update" style="margin: 0; display: block;">
						
					</form>	
						
					<h2>About</h2>
					<hr />
				
					<form method="GET" action="adminutil.php">
				
						<textarea style="height: 250px;" name="about" placeholder="About Text Here"><?php echo $about ?></textarea>
						<input type="submit" value="Update" style="margin: 0; display: block; margin-bottom: 15px;">
					
					</form>
					
					<h2>Staff Module</h2>
					<hr />
					
					<form method="GET" action="adminutil.php">
						
						<div class="mainholder" style="display:block;">
							<div class="holderleft" style="display: inline-block; width: 160px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Steam64 1</h3>
								<input style="width: 140px; margin-right: 20px;" type="text" name="sid1" value="<?php echo $sid1; ?>" placeholder="Steam64 ID Of Staff 1">
							</div>
							
							<div class="holderright" style="display: inline-block; width: 140px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Rank 1</h3>
								<input style="width: 140px;" type="text" name="rank1" value="<?php echo $rank1; ?>" placeholder="Staff Rank 1">
							</div>
						</div>
					
						<div class="mainholder" style="display:block;">
							<div class="holderleft" style="display: inline-block; width: 160px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Steam64 2</h3>
								<input style="width: 140px; margin-right: 20px;" type="text" name="sid2" value="<?php echo $sid2; ?>" placeholder="Steam64 ID Of Staff 2">
							</div>
							
							<div class="holderright" style="display: inline-block; width: 140px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Rank 2</h3>
								<input style="width: 140px;" type="text" name="rank2" value="<?php echo $rank2; ?>" placeholder="Staff Rank 2">
							</div>
						</div>
	
						<div class="mainholder" style="display:block;">
							<div class="holderleft" style="display: inline-block; width: 160px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Steam64 3</h3>
								<input style="width: 140px; margin-right: 20px;" type="text" name="sid3" value="<?php echo $sid3; ?>" placeholder="Steam64 ID Of Staff 3">
							</div>
							
							<div class="holderright" style="display: inline-block; width: 140px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Rank 3</h3>
								<input style="width: 140px;" type="text" name="rank3" value="<?php echo $rank3; ?>" placeholder="Staff Rank 3">
							</div>
						</div>
						
						<div class="mainholder" style="display:block;">
							<div class="holderleft" style="display: inline-block; width: 160px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Steam64 4</h3>
								<input style="width: 140px; margin-right: 20px;" type="text" name="sid4" value="<?php echo $sid4; ?>" placeholder="Steam64 ID Of Staff 4">
							</div>
							
							<div class="holderright" style="display: inline-block; width: 140px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Rank 4</h3>
								<input style="width: 140px;" type="text" name="rank4" value="<?php echo $rank4; ?>" placeholder="Staff Rank 4">
							</div>
						</div>
	
						<div class="mainholder" style="display:block;">
							<div class="holderleft" style="display: inline-block; width: 160px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Steam64 5</h3>
								<input style="width: 140px; margin-right: 20px;" type="text" name="sid5" value="<?php echo $sid5; ?>" placeholder="Steam64 ID Of Staff 5">
							</div>
							
							<div class="holderright" style="display: inline-block; width: 140px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Rank 5</h3>
								<input style="width: 140px;" type="text" name="rank5" value="<?php echo $rank5; ?>" placeholder="Staff Rank 5">
							</div>
						</div>

						<div class="mainholder" style="display:block;">
							<div class="holderleft" style="display: inline-block; width: 160px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Steam64 6</h3>
								<input style="width: 140px; margin-right: 20px;" type="text" name="sid6" value="<?php echo $sid6; ?>" placeholder="Steam64 ID Of Staff 5">
							</div>
							
							<div class="holderright" style="display: inline-block; width: 140px;">
								<h3 style="color: #DDD; margin: 0; padding: 0; margin-top: 10px;">Staff Rank 6</h3>
								<input style="width: 140px;" type="text" name="rank6" value="<?php echo $rank6; ?>" placeholder="Staff Rank 6">
							</div>
						</div>
		
						<input type="submit" value="Update" style="margin: 0; display: block; margin-bottom: 15px;">
						
					</form>
			</div>
			
			<div class="right" style="display: inline-block; margin: 0; width: 48%;">
				<h1>Disable / Enable</h1>
				
				<h2>Server Information</h2>
				<hr />
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Module Box</h3><a id="si_dis" href="adminutil.php?dis_serverinfo"><button class="disable" id="dis_si" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Gamemode</h3><a id="gamemode_dis" href="adminutil.php?dis_gamemode"><button class="disable" id="dis_gamemode" style="color: #FF4747;">DISABLE</button></a></div>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Map</h3><a id="map_dis" href="adminutil.php?dis_map"><button class="disable" id="dis_map" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Slots</h3><a id="slots_dis" href="adminutil.php?dis_slots"><button class="disable" id="dis_slots" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><br />
				
				<h2>Other Information</h2>
				<hr />
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Module Box</h3><a id="oi_dis" href="adminutil.php?dis_otherinfo"><button class="disable" id="dis_oi" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Website</h3><a id="website_dis" href="adminutil.php?dis_website"><button class="disable" id="dis_website" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Store</h3><a id="store_dis" href="adminutil.php?dis_store"><button class="disable" id="dis_store" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Teamspeak</h3><a id="teamspeak_dis" href="adminutil.php?dis_teamspeak"><button class="disable" id="dis_teamspeak" style="color: #FF4747;">DISABLE</button></a>
				
				<h2>Statistics</h2>
				<hr />
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Loading Bar</h3><a id="load_dis" href="adminutil.php?dis_loader"><button class="disable" id="dis_load" style="color: #FF4747;">DISABLE</button></a>
				
				<h2>Custom Text Sections</h2>
				<hr />
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Custom Text</h3><a id="ct_dis" href="adminutil.php?dis_ct"><button class="disable" id="dis_ct" style="color: #FF4747;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable CBOX</h3><a id="rfsection_dis" href="adminutil.php?dis_rfsection"><button class="disable" id="dis_rfsection" style="color: #FF2525;">DISABLE</button></a>
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable About</h3><a id="about_dis" href="adminutil.php?dis_about"><button class="disable" id="dis_about" style="color: #FF2525;">DISABLE</button></a>
				
				
				<h2>Music</h2>
				<hr />
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Music</h3><a id="music_dis" href="adminutil.php?dis_music"><button class="disable" id="dis_music" style="color: #FF2525;">DISABLE</button></a>
				
				<h2>Staff</h2>
				<hr />
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff Module</h3><a id="staff_dis" href="adminutil.php?dis_staff"><button class="disable" id="dis_staff" style="color: #FF2525;">DISABLE</button></a>
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff 1</h3><a id="st1_dis" href="adminutil.php?dis_st1"><button class="disable" id="dis_st1" style="color: #FF2525;">DISABLE</button></a>
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff 2</h3><a id="st2_dis" href="adminutil.php?dis_st2"><button class="disable" id="dis_st2" style="color: #FF2525;">DISABLE</button></a>
			
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff 3</h3><a id="st3_dis" href="adminutil.php?dis_st3"><button class="disable" id="dis_st3" style="color: #FF2525;">DISABLE</button></a>
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff 4</h3><a id="st4_dis" href="adminutil.php?dis_st4"><button class="disable" id="dis_st4" style="color: #FF2525;">DISABLE</button></a>
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff 5</h3><a id="st5_dis" href="adminutil.php?dis_st5"><button class="disable" id="dis_st5" style="color: #FF2525;">DISABLE</button></a>
				
				<div style="display: block; margin: 0; padding: 0;"><h3 style="color: #DDD; margin: 0; padding: 0; display: inline-block;">Enable / Disable Staff 6</h3><a id="st6_dis" href="adminutil.php?dis_st6"><button class="disable" id="dis_st6" style="color: #FF2525;">DISABLE</button></a>
			</div>
		</div>
			<script src="inc/js/cycle2.js"></script>
			<script src="inc/js/jquery.js"></script>
			<script src="inc/js/jquery.backstretch.min.js"></script>
			<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
	</body>
</html>