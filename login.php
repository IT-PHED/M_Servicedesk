<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Fri Jan 31 2020 06:58:33 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="template-helpdesk.webflow.io" data-wf-page="56d16d1f7353db7850333cf6" data-wf-site="56d16d1f7353db7850333cf5"><head><meta charset="utf-8"/><title>ServiceDesk |PHED</title><meta content="Template Helpdesk - Webflow Responsive Website Template" property="og:title"/><meta content="Template Helpdesk - Webflow Responsive Website Template" property="og:description"/><meta content="Template Helpdesk - Webflow Responsive Website Template" property="twitter:title"/><meta content="Template Helpdesk - Webflow Responsive Website Template" property="twitter:description"/><meta property="og:type" content="website"/><meta content="summary_large_image" name="twitter:card"/><meta content="width=device-width, initial-scale=1" name="viewport"/><meta content="Webflow" name="generator"/>

<link href="css/template-helpdesk.webflow.282808070.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet" />
	  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]  }});</script>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<link href="https://assets.website-files.com/56d16d1f7353db7850333cf5/5787869e10c15d9651446b61_Webclip.jpg" rel="apple-touch-icon"/>
<style>
.modal-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #2d184a;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
    background-color: #2d184a;
}
.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: rgb(255 255 255 / 90%);
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}
.btn-primary {
    color: #fff;
    background-color: #2d184a;
    border-color: #2d184a;
}
.modal-body {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    background-color: #fff;
}
.modal-content {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #2d184a;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
.block-titlen {
    position: relative;
    z-index: 10;
    display: inline-block;
    padding-right: 10px;
    font-size: 16px;
    line-height: 21px;
    font-weight: 900;
    letter-spacing: 0px;
    text-transform: uppercase;
}
.dataTables_wrapper {
    position: relative;
    clear: both;
    background-color: #fff;
}
</style>
</head>

<body><div data-collapse="medium" data-animation="over-left" data-duration="400" data-doc-height="1" data-easing="ease" data-easing2="ease" role="banner" class="navbar top-navbar w-nav">
<div class="w-container">
<a href="/" class="logo-block top-nav-logo-block w-nav-brand"><img src="logo.png" srcset="logo.png 500w, logo.png 784w" sizes="(max-width: 479px) 50vw, (max-width: 767px) 155px, 165px" alt="" class="logo top-nav-logo"/></a>



<div class="menu-button top-nav-menu-button w-nav-button"><div class="w-icon-nav-menu"></div></div></div></div><div class="hero-section color _2 wf-section"><div class="hero-overlay-section subpage"><div class="container subpage-container push-down w-container"><div class="hero-content-block"><h1 data-ix="fade-in-on-load" class="hero-title">Welcome to our Online Support Desk</h1><h2 data-ix="fade-in-on-load-2" class="hero-title _2">Questions? Just sign in and drop it!</h2></div>



</div></div></div>
<div class="section wf-section">
<div class="container subpage-container w-container">
<div class="subpage-white-content-block">
<h1 class="hero-title" style="margin-top: -50px; margin-bottom: 20px; color:#000;">Sign in Below</h2>
<div class="contact-form w-form">
<form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="post">
<div class="fields-row w-row">
<div class="field-column w-col w-col-6"><label for="First-name" class="field-label">Staff Email:</label><input type="email" required class="field w-input" name="username"  placeholder="Staff Email" id="username"/></div>
</div>
<div class="fields-row w-row">
<div class="field-column w-col w-col-6"><label for="Last-Name-3" class="field-label">Password:</label><input type="password" required class="field w-input"  name="password"  placeholder="Password" id="password"/>
<input type="hidden" required class="field w-input"  name="action"  value="login" id="action"/></div></div>
<input type="submit" value="Log in"  class="button submit-button w-button"/>
<!--<div class="submit-button-text"><strong>Need a quick answer?</strong> <a href="/404">Your answer might be in our FAQs</a>.</div>-->

</form>

<div class="success-bg w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="error-bg w-form-fail"><div>Oops! Something went wrong while submitting the form</div></div></div></div></div></div><div class="footer wf-section"><div class="container w-container"><div class="footer-text">Copyright © Helpdesk - Template design by <a target="_blank" href="http://studiocorvus.com/" class="footer-text-link">Studio Corvus</a><a target="_blank" href="https://webflow.com/templates/designers/rowan-hartsuiker" class="footer-text-link"></a></div><div class="footer-text">Powered by <a target="_blank" href="http://www.webflow.com/" class="footer-text-link">Webflow</a><a target="_blank" href="https://webflow.com/templates/designers/rowan-hartsuiker" class="footer-text-link"></a></div><div class="footer-text right">More about <a href="/template/licensing" class="footer-text-link">Image Licenses</a></div></div></div><script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=56d16d1f7353db7850333cf5" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<script>
$('#wf-form-Contact-Form').on('submit', function (e){
	e.preventDefault();
	var form = $('#wf-form-Contact-Form')[0];
	// Create an FormData object 
     var data = new FormData(form);
	swal({
                title: "Loading...",
                text: "Please wait",
                imageUrl: 'loader4.gif',

                showConfirmButton: false,
                allowOutsideClick: false
            });
			  $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url:'api.php',
        data:data,
        processData: false,  // Important!
        contentType: false,
        cache: false,
        success:function(data) {
		alert(data)	
		var valData= data;
		var valNew=valData.split(']');
	    var des=valNew[1];
	    var rid=valNew[5];
		if(des=="1" && rid == "1"){
		window.location.href="Departmental_Request";
	} 
		if(des=="1" && rid == "2"){
		window.location.href="index2.php";
	} 
		if(des=="1" && rid == ""){
		window.location.href="./";
	} 
        }
      });
})

</script></body></html>

