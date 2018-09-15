<?php
	$get = file_get_contents("param.xml");
	$arr = simplexml_load_string($get);
	
	$volume = $arr -> youtube -> vol;
	
	$ytsongurl = $arr -> youtube_song -> song;
	$mname = $arr -> music -> name;
	
	$ytsongurl2 = $arr -> youtube_song2 -> song;
	$mname2 = $arr -> music2 -> name;
	
	$ytsongurl3 = $arr -> youtube_song3 -> song;
	$mname3 = $arr -> music3 -> name;
	
	$dis_music = $arr -> dis_music -> dis;
	
	$shuffle = $arr -> shufflem -> music;
?>

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
	
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		
		$("#map").html(mapname);
		$("#maxplayers").html(maxplayers);
		$("#gamemode").html(gamemode);
		
	}

	function musicName(name) {
		
		$("#music-name").fadeOut(500, function() {
			$(this).html(name);
			$(this).fadeIn(500);
		});

	}
	
	function loadYoutube() {
		
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		
	}
	
	var music = <?php echo $dis_music ?>;
	
	var musicList = [{ytid: "<?php echo $ytsongurl ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp; <?php echo $mname ?>"}, {ytid: "<?php echo $ytsongurl2 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp;  <?php echo $mname2 ?>"}, {ytid: "<?php echo $ytsongurl3 ?>", name: "<i class='fa fa-volume-up' aria-hidden='true'></i>&nbsp; &nbsp;  <?php echo $mname3 ?>"}];

	musicList = shuffle(musicList);
		
	$(function() {
	
		if (music) {
			loadYoutube();
		}
		
	});

	function onYouTubeIframeAPIReady() {
		
		player = new YT.Player('player', {
		  height: '390',
		  width: '640',
		  events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		  }
		});
		
	}

	function onPlayerReady(event) {
		
		if (player.isMuted()) {
			player.unMute();
		}
		
		player.setVolume(vol);
		
		playNext();
	
	}
	
	var vol = <?php echo $volume ?> * 10;
	
	var player;
	
	var theMusic = -1;
	
	var filesNeeded;
	
	var filesDownloaded = 0;

	function onPlayerStateChange(event) {
		
		if (event.data == YT.PlayerState.ENDED) {
			playNext();
		}
		
	}

	function playNext() {
		
		theMusic++;

		if (theMusic >= musicList.length) {
			theMusic = 0;
		}

		var mainMus = musicList[theMusic];

		if (mainMus.ytid) {
			player.loadVideoById(mainMus.ytid);
		}

		musicName(mainMus.name);
		
	}

	function DownloadingFile( fileName ) {
		
		filesDownloaded++;
		refreshProgress();

		setStatus("Downloading files...");
		
	}

	function SetStatusChanged( status ) {
		
		if (status.indexOf("Getting Addon #") != -1) {
			filesDownloaded++;
			refreshProgress();
		}
		
		else if (status == "Retrieving server info...") {
			setProgress(23);
		}
		
		else if (status == "Workshop Complete") {
			setProgress(85);
		}
		
		else if (status == "Sending client info...") {
			setProgress(100);
		}

		setStatus(status);
		
	}

	function setStatus(text) {
		
		$("#status").html(text);
		
	}

	function SetFilesNeeded( needed ) {
		
		filesNeeded = needed + 1;
		
	}

	function refreshProgress() {
		
		progress = Math.floor(((filesDownloaded / filesNeeded)*100));

		setProgress(progress);
		
		$("#progress").html(progress + "%")
		
	}

	function setProgress(progress) {
		
		$("#loading-progress").css("width", progress + "%");
		
	}
</script>