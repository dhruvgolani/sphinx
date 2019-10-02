<?php
include("config.php");
$db= new Database();
?>
<!DOCTYPE html>

<html class="skrollr skrollr-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx 2.0 | Sign In, Shine Out</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/parsley.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script> 
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script> 


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

<?php
	include('header.php');
?>

<style>
.payment_link{
	color:#fff;
	font-size:12px;
	font-weight:bold;
	text-align:center;
	border:2px solid #fff;
	box-shadow:4px 4px 0px 0px;
	border-radius:40px;
	width:170px;
	height:35px;
	padding-top:6px;
	margin:0 auto;
	display:inline-block;
	margin-left:5px;
}
.payment_link:hover{
	background-color:#fff;
	color:#2A5D88;
}
.payment_link:hover a{

	color:#2A5D88;
}
.payment_link a:hover{
	text-decoration:none;
}
.google_form{
	font-size:14px;
}
section::-webkit-scrollbar {
    width: 50px;
}

.contentbox_pwr {
	width:700px; height:300px;border-radius: 40px 0px 0px 0;
}
.title_img2{
	width:25%; position:absolute; right:17%; top:30%;
}
.title_img{
	position:absolute; width:17%; top:100px; margin:0 auto; left:265px;
}


</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/hospitality.png" class="title_img">  
<img src="images/hospitality2.png" class="title_img2">
  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp">
   
                <div class="contact-info">
                  <!--<div class="title">
                    <center><p><span style="font-size:20px; font-weight:bold;">Accommodation:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    <li class="place-icon">
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
                   <div class="google_form">      Accommodation will be provided in MNIT Jaipur Hostels without food from 19th noon to 21st Midnight.Charges: 300/student.<br>
<h3 style="display:inline-block; line-height:0px;">**&nbsp;</h3>After payment is done save your e-receipt and bring it during sphinx'18 and fill the following Form to confirm your payment.</div>
<center> <div class="payment_link"><a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=873895">Click here for payment</a></div>
 <div class="payment_link"><a href="https://goo.gl/forms/qlbRf9FNVBMMHStD2">Confirm Form</a></div></center>
 
                    </li>
  
                  </ul>-->
                </div>
				<!--<hr class="hr1">-->
				<div class="contact-info">
                 <!-- <div class="title">
                    <center><p><span style="font-size:20px; font-weight:bold;">Event + Workshop:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    <li class="place-icon">
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
               <div class="google_form">        Participants will be allowed to participate in any technical event and any one workshop according to their registration on website. Make sure to register for workshop before payment.Charges: 1100/student .<br>
<h3 style="display:inline-block; line-height:0px;">**&nbsp;</h3>After payment is done save your e-receipt and bring it during sphinx'18 and fill the following Form to confirm your payment.</div>


<center> <div class="payment_link"><a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=873895" > Click here for payment</a></div>
 <div class="payment_link"><a href="https://goo.gl/forms/qlbRf9FNVBMMHStD2">Confirm Form</a></div></center>
                    </li>
  
                  </ul>-->
                </div>
				
				<!--<hr class="hr1">-->
				<div class="contact-info" style="font-size:14px;">
                 <!-- <div class="title">
                    <center><p><span style="font-size:20px; font-weight:bold;">Events and Campus Visit:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    <li class="place-icon">
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
                 <div class="google_form">       Participants(Non MNIT student) will be allowed to participate any of the technical event except workshops. Charges: 300/student..<br>
 <h3 style="display:inline-block; line-height:0px;">**&nbsp;</h3>After payment is done save your e-receipt and bring it during sphinx'18 and fill the following Form to confirm your payment.</div>
<center><div class="payment_link"><a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=873895">Click here for payment</a></div>
 <div class="payment_link"><a href="https://goo.gl/forms/qlbRf9FNVBMMHStD2">Confirm Form</a></div>
                    </center></li>
  
                  </ul>-->
                </div>
            
            
             
            </div>
          </div>
		    <div  style="height:200px; margin-top:-20px; padding-left:20px; font-family:arial;">
                   Event registration + campus visit : <b>Rs. 400/-</b><br>
                   Event registration + accommodation : <b>Rs. 700/-</b><br>
                   Event registration + workshop : <b>Rs. 1200/-</b><br>
                   Event registration + accommodation + workshop : <b>Rs. 1500/-</b><br><br>
                   
                    Payment will be done on this Bank account via Internet Banking.<br><br>
                   NAME: MALVIYA NATIONAL INSTITUTE OF TECHNOLOGY<BR>
                    ACCOUNT NO: 00000037347860345<BR>
                    IFS CODE: SBIN0015921<BR><BR>
                   It is mandatory to fill this below google form after payment has been done, otherwise your payment will not be considered.
                   <br>Transaction ID obtained after payment should be filled in the form.<br>
                   <br>
                   <a href="https://goo.gl/forms/uqlxetVNmFsZILIS2" class="btn btn-primary" role="button">Google Form</a>
					<br><br>
                    
                    Pronites are absolutely free<br>
                    Accomodation will be provided for 3-days excluding food<br>
                    
                    <h3>Note:</h3>
                    <ul class="checkboxlist">
                    <li>1. The event registration fee includes registration fee for all the events in the fest.</li>
                    <li>2. For the specific events which require additional amount, it will be collected at the time of event.</li>
                    <li>3. For team events, each participant has to register and pay the charges individually.</li>
                    <li>4. Accommodation will be provided for three days- 27, 28, 29th September.</li> 
                    <li>5. Accommodation does not include food.</li> 
                    <li>6. Pronites are absolutely free.</li>
                    </ul>

                    <h3>Payment Gateway:</h3>
                    <ul class="checkboxlist">
                    <li>1. The payment must be made through Internet Banking (NEFT or IMPS) to the above mentioned account.</li>
                    <li>2. The transaction ID obtained after payment should be filled in Google form provided below.</li>
                    <li>3. The payment can also be done via Paytm app. Go to ‘Money Transfer’, enter the Bank account number, IFSC number and the account holder name (mentioned above) and the amount to be paid. The ‘Transaction ID’ has to be filled in the Google form provided below. You can obtain the ‘Transaction ID’ by visiting ‘Passbook’
                        -> Your bank name from which you transferred’->’UPI Transaction History’. Select your Last transaction detail where you can find ‘Txn ID’ at the bottom.<br>
                        <b>NOTE:</b> The Paytm mode of payment is valid only if your Paytm account is linked with your bank account.</li>
                    <li>4. It is mandatory to fill the Google form after the payment is completed, otherwise the payment will not be considered.</li>
                    </ul>
                  </div>
        </div> 
<?php
					include('footer.php');
				?>
<script src="js/skrollr.min.js"></script> 
<script src="js/jquery.ticker.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/skrollr.menu.js"></script> 
<script type="text/javascript">
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var phyWidth = x;

        if(phyWidth > 30){

        setTimeout(function() {
        var s = skrollr.init({
			forceHeight: false  
            
        });


        skrollr.menu.init(s, {
            change: function(hash, top) {
                }
            });
        }, 500);
         $(window).load(function(){
                $('#loader').delay(2000).fadeOut();
                
        }); 
    }
    else{
         $('#mob_text').append("Use your device in landscape mode for better experience");
         $(window).load(function(){
                $('#loader').delay(400).fadeOut();

        });  
        $('#slides').css("display","none");
        $('.topnav').css("display","none");
        $('.mobile').show();
    }

        $(window).resize(function(){
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var w = $(window).width();
        var phyWidth = w;
        console.log(x);
        console.log(y);
        console.log(z);
        console.log(w);
        console.log(phyWidth);
        if(phyWidth > 450){

        setTimeout(function() {
        var s = skrollr.init({  
            
        });


        skrollr.menu.init(s, {
            change: function(hash, top) {
                console.log(hash, top);
                }
            });
        }, 500);
        $('#slides').css("display","block");
        $('.topnav').css("display","block");
        $('.mobile').hide();
         $(window).load(function(){
                /*$('#loader').delay(350).fadeOut();*/
        });
            
    }
    else{
         $('#mob_text').append("Use your device in landscape mode for better experience");
         $(window).load(function(){
               /* $('#loader').delay(400).fadeOut();*/

        });  
        $('#slides').css("display","none");
        $('.topnav').css("display","none");
        $('.bottomnav').css("transform","translate(0,0)");
        $('.mobile').show();
    }
    });
    </script> 
<script type="text/javascript">
        $(function () {
  $('#js-news').ticker();
  });
    </script>
</body>
</html>
