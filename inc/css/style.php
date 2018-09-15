<style>

body {
	margin: 0;
	padding: 0;
	font-family: 'Comfortaa', cursive;
	background-color: #CCC;
	color: #FFF;
	background-image: url('inc/bg/bg2.jpg');
	background-attachment: fixed;
	background-size: 100% 100%;
}

#h3 {
	line-height: 1.5em;
}

a {
	color: #CCC;
	transition: color .5s ease-in-out;
}

a:hover {
	color: #FFF;
}

.holder {
	width: 75%;
	margin: auto;
}

.top {
	background-color: rgba(0,0,0,.7);
	height: 100px;
	width: 100%;
	position: absolute;
	top: 0;
	transition: all .5s ease-in-out;
}

.top .left {
	display: inline-block;
	max-width: 500px;
	padding-left: 20px;
	transition: all .5s ease-in-out;
}

.top .left h1 {
	padding: 0;	
	margin: 0;
	padding-top: 7px;	
	transition: all .5s ease-in-out;
	font-size: 35px;
}

.top .left p {
	margin: 0;
	padding: 0;
	font-size: 17px;
}

.top .center {
	display: inline-block;
	text-align: center;
	position: absolute;
	left: 0;
	right: 0;
	margin-right: 175px !important;
}

.top .center img {
	height: 70px;
	width: 70px;
	margin-top: 12px;
	margin-bottom: 6px;
	transition: all .5s ease-in-out;
	display: inline-block;
}

.top .center .right-a-text {
	display: inline-block;
	transition: all .5s ease-in-out;
	text-align: left;
}

.top .center .right-a-text p {
	font-size: 17px;
	margin: 6px;
	transition: all .5s ease-in-out;
	padding: 0;
}

.top .center .right-a-text p small {
	color: #CCC;
	transition: all .5s ease-in-out;
}

.top .rightt {
	display: inline-block;
	text-align: left;
	position: absolute;
	right: 0;
}

.top .rightt h3 {
	font-size: 24px;
	margin-top: 30px;
	margin-right: 25px;
}

.bottom-left-holder {
	position: absolute;
	bottom: 0;
	left: 0;
	margin: 0;
	padding: 0;
	margin-bottom: 20px;
	transition: all .5s ease-in-out;
	margin-left: 20px;
}

.rfsection,
.bottom {
	background-color: rgba(0,0,0,.4);
	height: auto;
	display: inline-block;
	transition: all .5s ease-in-out;
	margin: 0;
}

.rfsection {
	width: 450px;
}

.rfsection .header,
.bottom .header {
	padding: 12px;
	font-size: 20px;
	font-weight: 900;
	background-color: rgba(0,0,0,.3);
	margin: 0;
	transition: all .5s ease-in-out;
}

.rfsection .header {
	font-size: 20px;
}

.bottom .content {
	margin: 20px 80px 20px 20px;
}

.bottom .content p {
	font-weight: 900;
	font-size: 20px;
	margin: 10px;
	padding: 0;
}

.bottom .content p small {
	color: #CCC;
}

.midcenter {
	width: 65%;
	position: fixed;
	left: 0;
	right: 0;
	height: auto;
	text-align: center;
	margin: auto;
}
			
.midcenter h1 {
	background-color: rgba(0,0,0,.6);
	padding: 25px;
	font-size: 350%;
}
			
.mid {
	width: 75%;
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	height: 1px;
	text-align: center;
	margin: auto;
}
			
.mid a {
	padding: 75px 40px;
	font-size: 180%;
	width: 40%;
	background: rgba(0,0,0,.4);
	transition: all .5s ease-in-out;
	color: #CCC;
	border: 1px solid #555;
	text-decoration: none;
	margin: 20px;
}
			
.mid a:hover {
	background-color: rgba(0,0,0,.6);
	color: #FFF;
}

.admin.centre {
	margin: auto;
	width: 65%;
	background-color: rgba(0,0,0,.4);
	padding: 20px;
	overflow: none;
	height: auto;
	margin-top: 25px;
	margin-bottom: 25px;
}

.admin.text-centre h1 {
	width: 65%;
	margin: auto;
	margin-top: 25px;
	background-color: rgba(0,0,0,.6);
	padding: 20px;
	font-size: 350%;
	text-align: center;
}

input[type="password"] {
	outline: 0;
	padding: 8px;
	width: 300px;
	border: 1px solid #eee;
	display: inline-block;
	background-color: rgba(0,0,0,.5);
	color: #DDD;
	font-size: 18px;
	margin: 10px 0 20px 0;
}

input[type="text"] {
	outline: 0;
	padding: 8px;
	width: 300px;
	border: 1px solid #eee;
	display: inline-block;
	background-color: rgba(0,0,0,.5);
	color: #DDD;
	font-size: 18px;
	margin: 10px 0 20px 0;
}

input[type="submit"] {
	padding: 12px;
	color: #FFF;
	background: rgba(0,0,0,.5);
	margin: 20px;
	margin-top: 0;
	cursor: pointer;
	border: 0;
	display: inline-block;
	color: #CCC;
	transition: all .5s ease-in-out;
	font-size: 18px;
	outline: 0;
	margin-bottom: 15px !important;
}

input[type="submit"]:hover {
	background: rgba(0,0,0,.8);
	color: #FFF;
}

.nodisplay {
	display: none;
}

@media screen and (max-width: 1300px) {
	.left {
		border: 0 !important;
		margin: auto !important;
	}
	
	.right {
		margin: auto !important;
	}
}

@media screen and (max-width: 1450px) {
	.mid a {
		padding: 45px 30px;
		font-size: 150%;
	}
}

@media screen and (max-width: 1350px) {
	.mid a {
		padding: 35px 20px;
		font-size: 150%;
	}
}

.right {
	vertical-align: top;
}

.loader {
	border-radius: 100%;
	height: 150px;
	width: 150px;
	border: 10px solid rgba(0,0,0,.6);
	border-top-color: #FFF;
}

button.disable {
	margin: 20px;
	margin-top: 0;
	cursor: pointer;
	border: 0;
	display: inline-block;
	transition: all .5s ease-in-out;
	font-size: 16px;
	background: none;
	outline: 0;
	font-weight: 300;
}

button.disable:hover {
	color: #FF4747;
}

.red {
	color: rgb(255,150,0);
}

#loader {
	width: 100%;
	background-color: rgba(0,0,0,.6);
	height: 5px;
	margin-bottom: 20px;
}

#loading-progress {
	background-color: red;
	height: 100%;
	width: 2%;
	transition: all 2s ease-in-out;
}

.cycle-slideshow.backgrounds {
	width: 100%;
	height: 100%;
	position: fixed !important;
	top: 0;
	left: 0;
	z-index: -100 !important;
}

span {
	padding: 0;
	margin: 0;
}

#bg {
	background-size: 100% 100%;
	position: absolute;
	width: 100%;
	height: 100%;
	z-index: -100 !important;
}

hr {
	width: 60%;
}

#player {
	position: absolute;
	z-index: -150;
	top: -1000px;
	left: -1000px;
}

#musicname {
	margin-top: 40px;
}

.rfsection {
	position: absolute;
	margin-top: 110px;
	left: 20px;
}

.rtholder {
	display: block;
	margin: 0;
	padding: 0;
}

.about {
	position: fixed;
	top: 185px;
	background-color: rgba(0,0,0,.4);
	height: auto;
	width: 450px;
	left: 495px;
}

.staff .header,
.about .header {
	padding: 10px 20px;
	background-color: rgba(0,0,0,.3);
	font-size: 20px !important;
}

.stafftwo,
.staff {
	position: fixed;
	left: 970px;
	top: 110px;
	width: 230px;
	background-color: rgba(0,0,0,.4)
}

.stafftwo {
	left: 495px;
	width: 450px;
	top: 185px;
	display: none;
}

.stafftwo img,
.staff img {
	width: 45px;
	height: 45px;
}

textarea {
	resize: none;
	width: 300px;
	font-size: 16px;
	border: 0;
	outline: 0;
	border: 1px solid #FFF;
	background-color: rgba(0,0,0,.5);
	color: #FFF;
	font-family: 'Comfortaa', cursive;
	padding: 20px;
	height: 25px;
	line-height: 1.7em;
	margin-bottom: 15px;
}

@media screen and (max-width: 1750px) {
	
	.bottom .header {
		font-size: 22px;
	}

	.bottom .content p {
		font-size: 17px;
	}
	
	.bottom .header {
		font-size: 20px;
	}
	
	.bottom .content {
		margin-right: 20px;
	}
	
	#status {
		font-size: 16px !important;
	}
	
	table tr td {
		font-size: 15px;
	}
}

@media screen and (max-width: 1350px) {
	.admin.text-centre h1,
	.admin.centre {
		width: 90%;
	}
}

@media screen and (max-width: 1150px) {
	#dis_rules,
	#dis_loader {
		display: none;
	}
	
	.about#dis_about {
		display: none;
	}
	
	.stafftwo {
		display: block;
	}
	
	.staff {
		display: none;
	}
}



</style>