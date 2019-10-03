<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.ppp1{
	position:absolute; top:0; left:0; background:rgba(21,24,33,1.0); width:100%; height:100%; text-align:center;
}
.ppp2{
	position:absolute; width:100%; height:100%; background:url('images/loading4.gif') center 100% no-repeat; background-size:800px;
}
.ppp3{
	position:absolute; width:100%; height:100%; background:url('images/title.png') center 40% no-repeat; background-size:500px;
}
</style>
<style>
a{
		color:#ffffff;
		text-decoration:none;
	}
@font-face{
		font-family:Beyond;
		src: url(font/Beyond.woff);
	}
	@font-face{
		font-family:text;
		src: url(font/text.ttf);
	}
	.bottom_nav{
		position:fixed;
		top:0px;
		right:0px;
		color:#ffffff;
		font-size:20px;
		 z-index:3;
		 border-radius:0px 0px 0px 20px;
		 background-color:rgba(0,0,0,0.4);
		 width:105px;
		 height:50px;
		 padding-top:10px;
		 padding-left:25px;
	}
	.bottom_nav a:hover{
		color:#53ADA4;
		text-decoration:none;
	}
		.bottom_nav2{
		position:fixed;
		top:0px;
		left:0px;
		color:#ffffff;
		font-size:20px;
		 z-index:3;
		 border-radius:0px 0px 0px 20px;

		 width:105px;
		 height:50px;
		 padding-top:10px;

	}
	.bottom_nav2 a:hover{
		color:#53ADA4;
		text-decoration:none;
	}
	#logo{

		 border-radius:0px 0px 20px 0px;
		 background-color:rgba(0,0,0,0.4);
		 width:130px;
		 height:50px;
		 padding-top:0px;
		 padding-left:10px;
		 top:0;

	}
	.topnav {
    border-radius: 0px 0px 20px 20px;
    background-color: rgba(0,0,0,0.4);
    height: 65px;
    padding-top: 10px;
    width: 51%;
    text-align: center;
    left: 26%;
    top: 0px;
    padding-left: 50px;
}
	.topnav a{
		text-decoration:none;
	}
	.topnav a:hover{
		text-decoration:none;
	}
	#social_icon{

	}
	.top_title{
		display:inline-block;
	}
	.m_logo{
	display:none;

}

	@media (max-width: 767px){
	.bottom_nav{
		display:none;
	}
	.ppp1{
	position:absolute; top:0; left:0; background:rgba(21,24,33,1.0); width:100%; height:100%; text-align:center;
}
.ppp2{
	position:absolute; width:100%; height:100%; background:url('images/loading4.gif') center 100% no-repeat; background-size:200%;
}
.ppp3{
	position:absolute; width:100%; height:100%; background:url('images/title.png') center 33% no-repeat; background-size:70%;
}


.profilewrp{
	display:none;
}
.profilewrp2 {
    border: 1px solid #FFF;
    padding: 8px;
    margin-top: 5px;
}
.m_logo{
	display:block;
	position:fixed;
	left:0;
	top:0;
}
.lower_logo{
	display:none;
}
#logo {
    border-radius: 0px 0px 20px 0px;
    background-color: rgba(0,0,0,0.4);
    width: 80px;
    height: 39px;
    padding-top: 0px;
    padding-left: 100%;
    top: 0;
}


}
	</style>




<div class="bottom_nav">
		<a href="https://www.facebook.com/sphinxMNIT/?ref=settings" title="Facebook" target="_blank"><i class="fa fa-facebook-square" id="social_icon"></i></a>
		<a href="https://www.instagram.com/sphinx_mnit/?hl=en" title="Instagram" target="_blank"><i class="fa fa-instagram" id="social_icon"></i></a>
	<a href="https://twitter.com/sphinx_mnit" title="Twitter" target="_blank"><i class="fa fa-twitter-square" id="social_icon"></i></a>
	</div>
	<div id="logo">
        <a href="index.php"><img src="images/logo.png" width="100%"></a>
        </div>
	<div style="width:100%; text-align:center;">
	<center>
<div class="topnav" style="display: block;">
        <div class="topufo skrollable skrollable-between" data-0="transform: translate(0%,0%)" data-200p="transform: translate(60%,0)" data-250p="" data-450p="transform: translate(126%,0)" data-500p="" data-700p="transform: translate(194%,0)" data-750p="" data-950p="transform: translate(287%,0)" data-1000p="" data-1200p="transform:translate(519%,0)" data-1250p="" data-1450p="transform:translate(575%,0)" data-1500p="" data-1700p="transform:translate(656%,0)" data-1750p="" data-1950p="transform:translate(738%,0)" data-2000p="" data-2200p="transform:translate(820%,0)" style="transform: translate(0%, 0%);">

        </div>

        <ul class="navlist" id="left">
        <div class="top_title"><li><a href="index.php">

        Home</a></li></div>
        <li><a href="about.php">

        About Us</a></li>
         <li><a href="event.php">

          Event</a></li>
          <li><a  href="workshop.php">

          Workshop</a></li>

        </ul>
        <ul class="navlist" id="right">
        <li><a href="labyrinth.php">

        Labyrinth</a></li>
        <li><a href="exhibition.php">

        Exhibitions</a></li>
        <li><a  href="techtalk.php">

        Tech Talk</a></li>
        <li><a   href="contact.php">

         Contact Us</a></li>
        </ul>
        </div>
</center>
</div>
<div class="headernav_mobile">
	<div class="logowpr">
		<div id="logo">
			<a href="index.php"><img src="images/logo.png" width="100%"><div class="logodate">19th-21st Jan</div></a>
        </div>
	</div>
	<div class="profilewrp">
		<?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="profile.php">Profile</a> /
            <a href="logout.php">Logout</a>
            <?php
		}
		else
		{
		?>
            <a href="javascript:;"  data-toggle="modal" data-target="#registerbox">Register</a> /
            <a href="javascript:;"  data-toggle="modal" data-target="#loginbox">Login</a>
        <?php } ?>
	</div>
	<div class="homemenu_Wrp">
		<a href="javascript:;" class="menusbtn"><i class="fa fa-bars" aria-hidden="true"></i></a>

		<div class="menushowwrp">
			<a href="javascript:;" class="menuscloseb"><i class="fa fa-close" aria-hidden="true"></i></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="event.php">Event</a></li>
				<li><a href="workshop.php">Workshop</a></li>
				<li><a href="labyrinth.php">Labyrinth</a></li>
				<li><a href="exhibition.php">Exhibitions</a></li>
				<li><a href="techtalk.php">Tech Talk</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="schedule.php" target="_blank">Schedule</a></li>
				<li><a href="hospitality.php">Hospitality</a></li>
				<li><a href="sponsors.php">Sponsors</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<div class="bottom_nav2">
		<a href="https://www.facebook.com/sphinxMNIT/?ref=settings" target="_blank"><i class="fa fa-facebook-square" id="social_icon"></i></a>
		<a href="https://www.instagram.com/sphinx_mnit/?hl=en" target="_blank"><i class="fa fa-instagram" id="social_icon"></i></a>
	<a href="https://twitter.com/sphinx_mnit" target="_blank"><i class="fa fa-twitter-square" id="social_icon"></i></a>
	</div>

	<div class="profilewrp2">
		<?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="profile.php">Profile</a> /
            <a href="logout.php">Logout</a>
            <?php
		}
		else
		{
		?>
            <a href="javascript:;"  data-toggle="modal" data-target="#registerbox">Register</a> /
            <a href="javascript:;"  data-toggle="modal" data-target="#loginbox">Login</a>
        <?php } ?>
	</div>
			</ul>
		</div>
	</div>


</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112037216-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-112037216-1');
</script>
