<?php session_start(); error_log(0) ?>

<?php
	if ($_SESSION["login"] != "true"){		
		header("Location:adminlogin.php");
			$_SESSION["error"] = "<p>Please log in</p>";
		exit;
	}
	
	include('inc/js/js.php');
	include('config.php');
	
	$website = $arr -> web -> website;
	$store = $arr -> store -> storeurl;
	$tsip = $arr -> teamspeak -> tsip;
				
	$servername = $arr -> topbar -> servername;
	$slogan = $arr -> tb -> slogan;
	
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
	
	$cbox1 = $arr -> cbox1 -> cbox;
	$cbox2 = $arr -> cbox2 -> cbox;
	$cbox3 = $arr -> cbox3 -> cbox;
	$cbox4 = $arr -> cbox4 -> cbox;
	$cbox5 = $arr -> cbox5 -> cbox;
	$cboxcycle = $arr -> cbox -> cycle;
	$cboxh = $arr -> cboxh -> cbox;
	$dis_cbox = $arr -> dis_rfsection -> dis;
	
	$ytsongurl2 = $arr -> youtube_song2 -> song;
	$mname2 = $arr -> music2 -> name;
	
	$about = $arr -> about -> info;
	
	$ytsongurl3 = $arr -> youtube_song3 -> song;
	$mname3 = $arr -> music3 -> name;
	
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
	
	$shuffle = $arr -> shufflem -> music;
	
	if (isset($_GET['website'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> web -> website = $_GET['website'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['store'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> store -> storeurl = $_GET['store'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['tsip'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> teamspeak -> tsip = $_GET['tsip'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['servername'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> topbar -> servername = $_GET['servername'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['slogan'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> tb -> slogan = $_GET['slogan'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_gamemode'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> gamemode_dis -> cnt = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_gamemode'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> gamemode_dis -> cnt = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_slots'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> slots_dis -> cnt = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_slotsdis'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> slots_dis -> cnt = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_map'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> map_dis -> cnt = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_mapdis'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> map_dis -> cnt = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_teamspeak'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> ts_dis -> cnt = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_tsdis'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> ts_dis -> cnt = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_website'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> website_dis -> cnt = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_websitedis'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> website_dis -> cnt = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_store'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> store_dis -> cnt = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_storedis'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> store_dis -> cnt = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_otherinfo'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_oi -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_otherinfo'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_oi -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_serverinfo'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_si -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_serverinfo'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_si -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_loader'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_load -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_loader'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_load -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['bg1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> bg1 -> bg = $_GET['bg1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['bg2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> bg2 -> bg = $_GET['bg2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['bg3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> bg3 -> bg = $_GET['bg3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cycletime'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cycletime -> bg = $_GET['cycletime'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['youtubesong'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> youtube_song -> song = $_GET['youtubesong'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['volume'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> youtube -> vol = $_GET['volume'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['ct1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> ct1 -> ct = $_GET['ct1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['ct2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> ct2 -> ct = $_GET['ct2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['ct3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> ct3 -> ct = $_GET['ct3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cttime'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cttime -> ct = $_GET['cttime'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_ct'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_ct -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_ct'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disable_ct -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_music'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_music -> dis = "false";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_music'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_music -> dis = "true";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['mname'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> music -> name = $_GET['mname'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['youtubesong2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> youtube_song2 -> song = $_GET['youtubesong2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['mname2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> music2 -> name = $_GET['mname2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['youtubesong3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> youtube_song3 -> song = $_GET['youtubesong3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['mname3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> music3 -> name = $_GET['mname3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cboxcycle'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox -> cycle = $_GET['cboxcycle'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox1 -> cbox = $_GET['cbox1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox2 -> cbox = $_GET['cbox2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox3 -> cbox = $_GET['cbox3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox4 -> cbox = $_GET['cbox4'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['cbox5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cbox5 -> cbox = $_GET['cbox5'];
		$xml -> asXML('param.xml');
	} 
	
	if (isset($_GET['cboxh'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> cboxh -> cbox = $_GET['cboxh'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_rfsection'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_rfsection -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_rfsection'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> dis_rfsection -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_about'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disabout -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_about'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> disabout -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['about'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> about -> info = $_GET['about'];
		$xml -> asXML('param.xml');
	}
	
	
	
	if (isset($_GET['sid1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid1 -> stid = $_GET['sid1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid2 -> stid = $_GET['sid2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid3 -> stid = $_GET['sid3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid4 -> stid = $_GET['sid4'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid5 -> stid = $_GET['sid5'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['sid6'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> sid6 -> stid = $_GET['sid6'];
		$xml -> asXML('param.xml');
	}
	
	
	
	if (isset($_GET['rank1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank1 -> rank = $_GET['rank1'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank2 -> rank = $_GET['rank2'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank3 -> rank = $_GET['rank3'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank4 -> rank = $_GET['rank4'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank5 -> rank = $_GET['rank5'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['rank6'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> rank6 -> rank = $_GET['rank6'];
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_staff'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> staff -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_staff'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> staff -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_st1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st1 -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_st1'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st1 -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_st2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st2 -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_st2'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st2 -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_st3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st3 -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_st3'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st3 -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_st4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st4 -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_st4'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st4 -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_st5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st5 -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_st5'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st5 -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['dis_st6'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st6 -> dis = "1";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['act_st6'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> st6 -> dis = "0";
		$xml -> asXML('param.xml');
	}
	
	if (isset($_GET['shuffle'])) {
		$xml = simplexml_load_file('param.xml');
		$xml -> shufflem -> music = $_GET['shuffle'];
		$xml -> asXML('param.xml');
	}
	
	echo '<script type="text/javascript">window.location = "admin.php" </script>' ;
	
	// 76561198210577821 938210983928 3218280371823890 32710827318283
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Updating...</title>
		
		<script src="inc/js/jquery.js"></script>
	</head>
	
	<body>
	
		<div class="loader">
		</div>
		
	
		<script>
			$(function() {
				var $spinner = $(".loader"), degree = 0, timer;
				rotate();
					function rotate() {        
						$spinner.css({ WebkitTransform: 'rotate(' + degree + 'deg)'});  
						$spinner.css({ '-moz-transform': 'rotate(' + degree + 'deg)'});                      
						timer = setTimeout(function() {
							++degree; rotate();
					},2);
				}
			});
		</script>
	
	</body>
</html>