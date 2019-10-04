<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Cantilivo"){
		$min=2;
		$max=3;
	} else if($event=='Canvamosaic') {
		$min=1;
		$max=2;
	}
	else{
		header("Location:architecture");
	}

}
?>

<!DOCTYPE html>
<html class="skrollr skrollr-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx'19</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/timestamp.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/graph-calc.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/auto-complete.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/toolbar.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
<!--<script>

	$(function(){
		$('.regist-popshow').click(function(){
			$('.modalevent').modal('hide');

			$('#eventregister2').modal('show');

			$('#loginbox').modal('show');

		});
	});
</script> -->
<?php
if(isset($_REQUEST['event']))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#eventregister2').modal('show'); });</script>
<?php }
?>
<script>
$(function(){
	$('.teamC').change(function(){
		$('.teamember_detial').empty();
		var selVal = $(this).val();
		for (i = 0; i < selVal; i++) {
			$('.teamember_detial').append('<div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Registration Id</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="text" class="form-control" id="recipient-name" placeholder="Enter registration id" required name="regid[]"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Email Id</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="email" class="form-control" id="recipient-name" placeholder="Enter email address" required name="emailid[]"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Password</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="Password" name="password[]" class="form-control" id="recipient-name" placeholder="Enter your password"  required> </div> </div> </div><div class="breaklinke"></div>')
		}
	})
})
</script>

<!-- END WAYBACK TOOLBAR INSERT -->

<script>
$(window).bind("load", function() {
	//alert('hello');
  	$('#overlay').css({'left':'110%', 'transition':'all 1s ease-in-out'}, 2000);

});
</script>
<div id="overlay" style="width:100%;">
	<div class="ppp1" >
		 <div class="ppp2"></div>
		 <div class="ppp3"></div>
	</div>
</div>

<div class="modal fade" id="eventregister2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form class="form" method="post" action="core-love-reg.php">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-7">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Number of Team Members</label>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control teamC"  required name="teamsize">
                <option value="">Select</option>
                  <?php
				  for($i=$min;$i<=$max;$i++)
				  {
				  ?>
                  <option value="<?=$i;?>"><?=$i;?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="teamember_detial">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Registration Id</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Enter registration id" name="regid[]" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Email Id</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Enter email address" name="emailid[]" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Password</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="Password" class="form-control" id="recipient-name" placeholder="Enter your password" name="password[]" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="event_type" value="Architecture">
        <input type="hidden" name="event_name" value="<?=$event;?>">
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
        <p style="color:#CF5759"><?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg" class="btn btn-input">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade Cantilivo  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CANTILIVO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
			It is an event in which the participants have to design a cantilever structure and make model and further it will be judged on stability. The idea behind this event is to show that anyone with a basic understanding can create great structures as well as it creates   a platform for learning and innovation.
		</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
          The team can consist of minimum 2 participants and maximum 3 participants.
		  </div>

		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
			The competition will be conducted in 1 phase only.<br>
			Time duration: 1 hr 30 minutes
            </ul>
          </div>

<div class="evencon_box">
            <h3>Rules and Regulations:</h3>
      This is a team event for 2 members. Some images will be shown one by one and questions will be asked about those images which can have any type of riddle and the teams will have to write their answers on a sheet in a specific time and submit it to the judges. Negative marks will be awarded on every wrong answer.
	  <ul class="checboxlist">
		<li>1. The participants will be provided the following materials:
			<ul>
				<li>Bamboo Sticks (40 sticks per team)</li>
				<li>Cello tape</li>
				<li>Fevicol</li>
				<li>Thread</li>
				<li>All pins</li>
				<li>Cutter</li>
		<li>2. A3 size of cardboard will be given to the participants on which they have to stick their model.</li>
		<li>3. Minimum length of cantilever should be 25 cm; if less the participating team will be disqualified.</li>
		<li>4. A sketch of the cantilever has to be submitted by the team along with the model explaining its functioning.</li>

		<div class="evencon_box">
            <h3>Note:</h3>
			The participants can bring their own materials if they want.
		</div>

		<div class="evencon_box">
            <h3>Testing:</h3>
			Some weight would be placed on the cantilever and the ratio of weight / length will be calculated.
		</div>

	  <h3>Judging Criteria:</h3>
	The model will be judged on the basis of the following criteria:
	  <ul class="checboxlist">
		<li>Originality and innovation.</li>
		<li>Stability.</li>
		<li>Length of cantilever.</li>
		<li>Maximum load the cantilever can hold.</li>
	  </ul>
 </div>

		<div class="evencon_box">
            <h3>Note:</h3>
			<li>The decision of the judges and organizers shall be final and abiding.</li>
			<li>Rules for the event can be changed by the organizers at the time of the event.</li>
		</div>

		          <div class="evencon_box">
            <h3>Prizes worth : 6000/-</h3>
        </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Shubhi Vaid</td>
                  <td>8003697172</td>
				  <td>2016uar1611@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Monika</td>
                  <td>8239006824</td>
				  <td>2016uar1112@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="architecture?event=Cantilivo"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Canvamosaic  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CANVA-MOSAIC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
			It is an event in which a beautiful and creative mosaic art has to be created on a given geometric pattern selected by the organizers.
		</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
          A team of maximum two members can participate.
		  </div>

		  <div class="evencon_box">
            <h3>Registration:</h3>
			<ul class="checboxlist">
				<li>Anyone can participate; you just have to use your own creativity.</li>
				<li>Registrations will be done on first come first basis through website.</li>
		  </div>

		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            This event will be held in only 1 round.<br>
			Time Duration: 1 hr<br>
			 <ul class="checboxlist">
				<li>1. In this, participants will design a mosaic art with craft paper.</li>
				<li>2. A geometrical pattern will be given to the participating team.</li>
				<li>3. They have to fill the geometrical pattern with provided craft papers.</li>
				<li>4. They can fill it either with the papers of different colors or can choose different shades of one color.</li>
				<li>5. The materials required for the event will be provided on the spot for the event.</li>
			</ul>
          </div>

          <div class="evencon_box">
            <h3>Judging Criteria:</h3>
			The art work will be judged on the following basis:
			<ul class="checboxlist">
				<li>1. The choice of colors.</li>
				<li>2. Neatness.</li>
				<li>3. Application and innovation of pattern filling.</li>
			</ul>
		</div>

		<div class="evencon_box">
			<h3>Note:</h3>
			<ul class="checboxlist">
				<li>1. The decision of the judges and the organizers shall be final and abiding.</li>
				<li>2. Rules for the event can be changed by the organizers at the time of the event.</li>
			</ul>
		</div>

		          <div class="evencon_box">
            <h3>Prizes worth : 6000/-</h3>
        </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Monika</td>
                  <td>8239006824</td>
				  <td>2016uar1112@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Ritu Choudhary</td>
                  <td>9602412495</td>
				  <td>2017uar1464@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="architecture?event=Canvamosaic"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<!--top nav-->
<?php
	include('header.php');
?>

<!--top nav end-->
<style>
.content_p{
	margin-top:10px;

}
.card_box{

	border:2px solid #fff; padding:10px; color:#2A5D88; border-radius :22px; background-color:#fff; width:200px;  margin-top:-25px; font-size:20px; font-weight:bold;
}
.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    margin: 0 auto;
	font-size:32px;
	font-family:text;
}
.btn-secondary {
    color: #fff;
    background-color: #2A5D88;
    border-color: #868e96;
}

.contentbox_pwr {
 overflow-x: hidden; height: 40%;  padding-left: 210px; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
	position:absolute; width:17%; top:150px; left:42%;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/architecture.png" class="title_img">
  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">CANTILIVO</div></center>
					<p class="content_p">On his recent visit to San Francisco, Sputnik was stunned by the structure of the world famous
Golden Gate Bridge. He found out that complicated Cantilever structures like bridges are first
designed and modelled using simple construction materials to encourage hands on approach to
solving design problems. Can your structure be the next architectural marvel ?</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Cantilivo"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="architecture?event=Cantilivo" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>


			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">CANVA-MOSAIC</div></center>
					<p class="content_p">Impressed by the beautiful marble mosaic art in the Taj Mahal, Sputnik wishes to make uniquely
gorgeous mosaic patterns of his own. Sputnik holds a competition to make mosaic artwork in craft
paper in a kaleidoscope of colors much like pieces of a puzzle coming together to create an image.
Set your creative spirits free and make your own masterpiece that’ll be a feast for the eyes.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Canvamosaic"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="architecture?event=Canvamosaic" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
</div>
<?php
if(isset($_SESSION['suc_msg']))
{ ?>
<script>
alert("<?=$_SESSION['suc_msg'];?>");
</script>
<?php unset($_SESSION['suc_msg']); } ?>
<?php
	include('footer.php');
?>
</body>
</html>
