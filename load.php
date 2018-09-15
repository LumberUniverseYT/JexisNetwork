<!DOCTYPE html>
<html>
	<head>
		<!--==================================
		LOADING SCREEN BY TASID           
		http://steamcommunity.com/id/tasid
		===================================-->
		<meta charset="UTF-8">
		
		<title>Tee Load &middot; Loading Screen</title>
		
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		
		<script src="inc/js/cycle2.js"></script>
		<script src="inc/js/jquery.js"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		<script src="inc/js/jquery.backstretch.min.js"></script>
		<script src="https://use.fontawesome.com/c87fd1e779.js"></script>
		
		<?php
			include('inc/js/js.php');
			include('api.php');
			include('inc/css/style.php');
		?>
	</head>
	
	<body style="background: none; !important">
		
		<?php
			$get = file_get_contents("param.xml");
			$arr = simplexml_load_string($get);
			
			$website = $arr -> web -> website;
			$store = $arr -> store -> storeurl;
			$tsip = $arr -> teamspeak -> tsip;
			
			$servername = $arr -> topbar -> servername;
						
			$slogan = $arr -> tb -> slogan;
			
			$gamemode_dis = $arr -> gamemode_dis -> cnt;
			$map_dis = $arr -> map_dis -> cnt;
			$slots_dis = $arr -> slots_dis -> cnt;
			$website_dis = $arr -> website_dis -> cnt;
			$store_dis = $arr -> store_dis -> cnt;
			$ts_dis = $arr -> ts_dis -> cnt;
			$dis_oi = $arr -> disable_oi -> dis;
			$dis_si = $arr -> disable_si -> dis;
			$dis_load = $arr -> disable_load -> dis;
			$dis_ct = $arr -> disable_ct -> dis;
			
			$ct1 = $arr -> ct1 -> ct;
			$ct2 = $arr -> ct2 -> ct;
			$ct3 = $arr -> ct3 -> ct;
			$cttime = $arr -> cttime -> ct;
			
			$bg1 = $arr -> bg1 -> bg;
			$bg2 = $arr -> bg2 -> bg;
			$bg3 = $arr -> bg3 -> bg;
			$cycletime = $arr -> cycletime -> bg;
			
			$cbox1 = $arr -> cbox1 -> cbox;
			$cbox2 = $arr -> cbox2 -> cbox;
			$cbox3 = $arr -> cbox3 -> cbox;
			$cbox4 = $arr -> cbox4 -> cbox;
			$cbox5 = $arr -> cbox5 -> cbox;
			$cboxheader = $arr -> cboxh -> cbox;
			$cboxcycle = $arr -> cbox -> cycle;
			$dis_cbox = $arr -> dis_rfsection -> dis;
			
			$about = $arr -> about -> info;
			$dis_about = $arr -> disabout -> dis;
			
			
			$dis_music = $arr -> dis_music -> dis;
			
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
			
			$dis_staff = $arr -> staff -> dis;
			$dis_st1 = $arr -> st1 -> dis;
			$dis_st2 = $arr -> st2 -> dis;
			$dis_st3 = $arr -> st3 -> dis;
			$dis_st4 = $arr -> st4 -> dis;
			$dis_st5 = $arr -> st5 -> dis;
			$dis_st6 = $arr -> st6 -> dis;
	
			$ytsongurl = $arr -> youtube_song -> song;
			$mname = $arr -> music -> name;
			
			$ytsongurl2 = $arr -> youtube_song2 -> song;
			$mname2 = $arr -> music2 -> name;
			
			$ytsongurl3 = $arr -> youtube_song3 -> song;
			$mname3 = $arr -> music3 -> name;
			
			$volume = $arr -> youtube -> vol;
	
		?>
		
		<?php
			if ($gamemode_dis == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#gm').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($slots_dis == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#slots').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($map_dis == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#mp').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($website_dis == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#website').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($store_dis == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#store').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($ts_dis == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#teamspeak3').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($dis_oi == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#otherinfo').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($dis_si == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#serverinfo').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($dis_load == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_loader').css('display', 'none');

			});
		</script>
		
		<?php
			}
		?>
		
		<?php
			if ($dis_ct == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#cycle').css('display', 'none');
				$('.about').css('top', '110px');
				$('.stafftwo').css('top', '110px');

			});
		</script>
		
		<?php
			}
			if ($dis_music == "false") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_music').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			if ($dis_cbox == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#rfsection').css('display', 'none', '!important');
				$('.about').css('left', '20px');
				$('.staff').css('left', '495px');
				$('.stafftwo').css('left', '20px');
				$('#cycle').css('left', '0', '!important');
				
			});
		</script>
		
		<?php
			}
			if ($dis_about == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_about').css('display', 'none', '!important');
				$('.staff').css('display', 'none');
				$('.stafftwo').css('display', 'block');

			});
		</script>
		
		<?php
			}
			if ($dis_staff == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_staff').css('display', 'none', '!important');
				$('#dis_stafftwo').css('display', 'none', '!important');
				$('.about').css('display', 'block');

			});
		</script>
		
		<?php
			}
			if ($dis_st1 == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_st1').css('display', 'none', '!important');
				$('#dis_st12').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			if ($dis_st2 == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_st2').css('display', 'none', '!important');
				$('#dis_st22').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			if ($dis_st3 == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_st3').css('display', 'none', '!important');
				$('#dis_st32').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			if ($dis_st4 == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_st4').css('display', 'none', '!important');
				$('#dis_st42').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			if ($dis_st5 == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_st5').css('display', 'none', '!important');
				$('#dis_st52').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			if ($dis_st6 == "1") {
		?>
		<script type="text/javascript">
			$( document ).ready(function() {

				$('#dis_st6').css('display', 'none', '!important');
				$('#dis_st62').css('display', 'none', '!important');

			});
		</script>
		
		<?php
			}
			
		?>
		
		<div class="cycle-slideshow backgrounds" data-cycle-fx="fade"  data-cycle-timeout="<?php echo $cycletime ?>000" data-cycle-slides="> div" > 
	
			<div id="bg" style="background-image: url('<?php echo $bg1; ?>');">&nbsp;</div>
			<div id="bg" style="background-image: url('<?php echo $bg2; ?>');">&nbsp;</div>
			<div id="bg" style="background-image: url('<?php echo $bg3; ?>');">&nbsp;</div>
			
		</div>
		
			<div id="player">
			</div>
			
			<div class="top">
				<div class="left">
					<h1><?php echo $servername ?></h1>
					<p><?php echo $slogan ?></p>
				</div>
				
				<div class="center">
					<?php echo $profileimg ?>
					<div class="right-a-text" style="position: absolute; top: 15px;">
						<p>Username: <small><?php echo $username; ?></small></p>
						<p>SteamID: <small><?php echo $id; ?></small></p>
					</div>
				</div>
		
				<div class="rightt" id="dis_music">
					<h3 style="font-weight: 100;"><small id="music-name"></small></h3>
				</div>
			</div>
			
			<div class="holder">
				<div class="rfsection" id="rfsection">
					<div class="header">
						<?php echo $cboxheader ?>
					</div>
					
					<div class="content">
						<table>
							<tr>
								<td style="text-align: center; padding: 10px 25px; background-color: rgba(0,0,0,.5);">1</td>
								<td>&nbsp;&nbsp; <?php echo $cbox1 ?></td>
							</tr>
							<tr>
								<td style="text-align: center; padding: 10px 25px; background-color: rgba(0,0,0,.5);">2</td>
								<td>&nbsp;&nbsp; <?php echo $cbox2 ?></td>
							</tr>
							<tr>
								<td style="text-align: center; padding: 10px 25px; background-color: rgba(0,0,0,.5);">3</td>
								<td>&nbsp;&nbsp; <?php echo $cbox3 ?></td>
							</tr>
							<tr>
								<td style="text-align: center; padding: 10px 25px; background-color: rgba(0,0,0,.5);">4</td>
								<td>&nbsp;&nbsp; <?php echo $cbox4 ?></td>
							</tr>
							<tr id="five">
								<td style="text-align: center; padding: 10px 25px; background-color: rgba(0,0,0,.5);">5</td>
								<td>&nbsp;&nbsp; <?php echo $cbox5 ?></td>
							</tr>
						</table>		
					</div>
				</div>
				
				<div style="position: fixed; margin-top: 110px; margin-left: 20px; background-color: rgba(0,0,0,.6); height: auto; width: 450px; left: 475px;" class="cycle-slideshow" id="cycle" data-cycle-fx="fade"  data-cycle-timeout="<?php echo $cttime ?>000" data-cycle-slides="> p" > 
		
					<p style="padding: 0; padding-left: 20px;"><?php echo $ct1 ?></p>
					<p style="padding: 0; padding-left: 20px;"><?php echo $ct2 ?></p>
					<p style="padding: 0; padding-left: 20px;"><?php echo $ct3 ?></p>
							
				</div>
				
				<div class="about" id="dis_about">
					<div class="header">
						About
					</div>
					<p style="margin: 15px; padding: 0; line-height: 1.5em;">
						<?php echo $about ?>
					</p>
				</div>
				
				<div class="staff" id="dis_staff">
					<table>
						<tr id="dis_st12">
							<td><?php echo $profileimgs1 ?></td>
							<td><?php echo $usernames1 ?> <br /> <?php echo $rank1; ?></td>
						</tr>
						<tr id="dis_st22">
							<td><?php echo $profileimgs2 ?></td>
							<td><?php echo $usernames2 ?> <br /> <?php echo $rank2; ?></td>
						</tr>
						<tr id="dis_st32">
							<td><?php echo $profileimgs3 ?></td>
							<td><?php echo $usernames3 ?> <br /> <?php echo $rank3; ?></td>
						</tr>
						<tr id="dis_st42">
							<td><?php echo $profileimgs4 ?></td>
							<td><?php echo $usernames4 ?> <br /> <?php echo $rank4; ?></td>
						</tr>
						<tr id="dis_st52">
							<td><?php echo $profileimgs5 ?></td>
							<td><?php echo $usernames5 ?> <br /> <?php echo $rank5; ?></td>
						</tr>
						<tr id="dis_st62">
							<td><?php echo $profileimgs6 ?></td>
							<td><?php echo $usernames6 ?> <br /> <?php echo $rank6; ?></td>
						</tr>
					</table>
				</div>
				
				<div class="stafftwo" id="dis_stafftwo">
					<table>
						<tr id="dis_st1">
							<td><?php echo $profileimgs1 ?></td><td><?php echo $usernames1 ?> <br /> <?php echo $rank1; ?></td>
							<td>&nbsp;&nbsp; | &nbsp;&nbsp;</td>
							<td><?php echo $profileimgs2 ?></td><td><?php echo $usernames2 ?> <br /> <?php echo $rank2; ?></td>
						</tr>
						<tr id="dis_st3">
							<td><?php echo $profileimgs3 ?></td><td><?php echo $usernames3 ?> <br /> <?php echo $rank3; ?></td>
							<td>&nbsp;&nbsp; | &nbsp;&nbsp;</td>
							<td><?php echo $profileimgs4 ?></td><td><?php echo $usernames4 ?> <br /> <?php echo $rank4; ?></td>
						</tr>
						<tr style="dis_st5">
							<td><?php echo $profileimgs5 ?></td><td><?php echo $usernames5 ?> <br /> <?php echo $rank5; ?></td>
							<td>&nbsp;&nbsp; | &nbsp;&nbsp;</td>
							<td><?php echo $profileimgs6 ?></td><td><?php echo $usernames6 ?> <br /> <?php echo $rank6; ?></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="bottom-left-holder">
				
				<div id="dis_loader">
					<p style="display: inline-block; margin-top: 40px; font-size: 18px; background-color: rgba(255,255,255,.2); padding: 5px; margin-right: 20px;" id="status">Retrieving server info...</p>
				
					<div id="loader">
						<div id="loading-progress">
						</div>
					</div>
				</div>
			
				<div class="bottom" style="margin-right: 20px;" id="serverinfo">
					<div class="header">
						Server Information
					</div>
					
					<div class="content">
						<p id="mp"><i class="fa fa-map" aria-hidden="true"></i>&nbsp; Map:&nbsp; <small id="map">rp_downtown_vs</small></p>
						<p id="gm"><i class="fa fa-gamepad" aria-hidden="true"></i>&nbsp; Gamemode:&nbsp; <small id="gamemode">SandBox</small></p>
						<p id="slots"><i class="fa fa-braille" aria-hidden="true"></i>&nbsp; Slots:&nbsp; <small id="maxplayers">6.9</small></p>
					</div>
					
					
				</div>
				
				<div class="bottom" id="otherinfo">
					<div class="background">
					</div>
				
					<div class="header">
						Other Information
					</div>
					
					<div class="content">
						<p id="website"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; Website:&nbsp; <small><?php echo $website; ?></small></p>
						<p id="store"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Store:&nbsp; <small><?php echo $store; ?></small></p>
						<p id="teamspeak3"><i class="fa fa-microphone" aria-hidden="true"></i>&nbsp; Teamspeak:&nbsp; <small><?php echo $tsip ?></small></p>
					</div>
				</div>
			</div>
	
			<script>
				// Found on stack
				function shuffle(array) {
					var currentIndex = array.length, temporaryValue, randomIndex ;
					
					// While there remain elements to shuffle...
					while (0 !== currentIndex) {

						// Pick a remaining element...
						randomIndex = Math.floor(Math.random() * currentIndex);
						currentIndex -= 1;
						
						// And swap it with the current element.
						temporaryValue = array[currentIndex];
						array[currentIndex] = array[randomIndex];
						array[randomIndex] = temporaryValue;
					}

					return array;
				}
			</script>
			
			<script src="inc/js/cycle2.js"></script>
			<script src="inc/js/jquery.js"></script>
			<script src="inc/js/jquery.backstretch.min.js"></script>
			<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
	</body>
</html>