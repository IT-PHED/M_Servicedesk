<?php
session_start();

$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "Login";
if (!((isset($_SESSION['user'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['user'], $_SESSION['MM_UserGroup1'])))) {   
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['user'] = NULL;
  $_SESSION['MM_UserGroup1'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['user']);
  unset($_SESSION['MM_UserGroup1']);
  unset($_SESSION['PrevUrl1']);
  unset($_SESSION['name']);
	
  $logoutGoTo = "Login";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?><!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Fri Jan 31 2020 06:58:33 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="template-helpdesk.webflow.io" data-wf-page="56d16d1f7353db7850333cf6" data-wf-site="56d16d1f7353db7850333cf5"><head><meta charset="utf-8"/><title>ServiceDesk |PHED</title><meta content="Template Helpdesk - Webflow Responsive Website Template" property="og:title"/><meta content="Template Helpdesk - Webflow Responsive Website Template" property="og:description"/><meta content="Template Helpdesk - Webflow Responsive Website Template" property="twitter:title"/><meta content="Template Helpdesk - Webflow Responsive Website Template" property="twitter:description"/><meta property="og:type" content="website"/><meta content="summary_large_image" name="twitter:card"/><meta content="width=device-width, initial-scale=1" name="viewport"/><meta content="Webflow" name="generator"/>

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
<body class="side-nav-body">
<div data-collapse="small" data-animation="over-left" data-duration="400" data-doc-height="1" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
<div class="w-container"><a href="/variations/home-side-nav" aria-current="page" class="logo-block w-nav-brand w--current"><img src="logo.png" srcset="logo.png 500w, logo.png 784w" sizes="(max-width: 479px) 125px, (max-width: 767px) 150px, 185px" alt="" class="logo"/></a>

<?php include 'sidebar.php';?>

<div class="menu-button w-nav-button"><div class="w-icon-nav-menu"></div></div></div>

</div><div class="hero-section wf-section"><div class="hero-overlay-section">
<div class="container w-container"><div class="hero-content-block"><h1 class="hero-title">Welcome to our Service Desk</h1><h2 class="hero-title _2">Report your issues to the appropriate quaters.</h2></div><div class="hero-cta-block"><div class="hero-cta-content-block">

<div class="block-title">My Request</div></div>
<div class="w-dyn-list">
<div role="list" class="w-dyn-items">

<div role="listitem" class="w-dyn-item">
<a href="javascript:void(0)" onclick = "existing('all','Total Tickets','<?php echo $_SESSION['rid']; ?>')" class="hero-quick-link-block w-inline-block">
<div class="hero-quick-link-title" id = "tot">Total Ticket (0)</div></a></div>

<div role="listitem" class="w-dyn-item"><a href="javascript:void(0)" class="hero-quick-link-block w-inline-block"  onclick = "existing('Opened','Opened Tickets','<?php echo $_SESSION['rid']; ?>')"  id = "opt" ><div class="hero-quick-link-title">Opened Ticket (0)</div></a></div>

<div role="listitem" class="w-dyn-item"><a href="javascript:void(0)" class="hero-quick-link-block w-inline-block" onclick = "existing('closed','Closed Tickets','<?php echo $_SESSION['rid']; ?>')"  id = "clt"><div class="hero-quick-link-title">Closed Ticket (0)</div></a></div>

</div></div></div></div><br/>
<div class="container w-container">

<div class="hero-content-block"><div class="hero-cta-content-block">

<div class="block-title">Departmental Request</div></div>
<div class="w-dyn-list">
<div role="list" class="w-dyn-items">

<div role="listitem" class="w-dyn-item">
<a href="javascript:void(0)" onclick = "existing('alld','Departmental Total Tickets','<?php echo $_SESSION['rid']; ?>')" class="hero-quick-link-block w-inline-block">
<div class="hero-quick-link-title" id = "totd">Total Ticket (0)</div></a></div>

<div role="listitem" class="w-dyn-item"><a href="javascript:void(0)" class="hero-quick-link-block w-inline-block"  onclick = "existing('Openedd','Departmental Opened Tickets','<?php echo $_SESSION['rid']; ?>')"  id = "optd" ><div class="hero-quick-link-title">Assigned Ticket (0)</div></a></div>

<div role="listitem" class="w-dyn-item"><a href="javascript:void(0)" class="hero-quick-link-block w-inline-block" onclick = "existing('closedd','Departmental Closed Tickets','<?php echo $_SESSION['rid']; ?>')"  id = "cltd"><div class="hero-quick-link-title">Unassigned Ticket (0)</div></a></div>

</div></div>

</div><div class="hero-cta-block"><div class="hero-cta-content-block">

<div class="block-title">Assigned Roles</div></div>
<div class="w-dyn-list">
<div role="list" class="w-dyn-items">

<div role="listitem" class="w-dyn-item">
<a href="javascript:void(0)" onclick = "existing('all','Total Tickets')" class="hero-quick-link-block w-inline-block">
<div class="hero-quick-link-title" id = "tota">Total Ticket (0)</div></a></div>

<div role="listitem" class="w-dyn-item"><a href="javascript:void(0)" class="hero-quick-link-block w-inline-block"  onclick = "existing('Opened','Opened Tickets','<?php echo $_SESSION['rid']; ?>')"  id = "opta" ><div class="hero-quick-link-title">Opened Ticket (0)</div></a></div>

<div role="listitem" class="w-dyn-item"><a href="javascript:void(0)" class="hero-quick-link-block w-inline-block" onclick = "existing('closed','Closed Tickets','<?php echo $_SESSION['rid']; ?>')"  id = "clta"><div class="hero-quick-link-title">Closed Ticket (0)</div></a></div>

</div></div></div></div>

</div></div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title block-titlen" style="color:#fff;" id="exampleModalLongTitle">Please submit your complain below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="post">
	   <div class="fields-row w-row">
	   <div class="field-column w-col w-col-12">
	   <select class="field w-input" name = "route_id">
	   <option value="">Select Department</option>
	   <option value="1">Information Technology</option>
	   </select></div>
	   </div>
	   <div class="fields-row w-row">
	   <div class="field-column w-col w-col-12">
	   <input type="text" class="field w-input" name="title" data-name="First name" placeholder="Title" id="title"></div>
	   </div>
	   	   
	   <textarea id="Message" name="Message" maxlength="5000" data-name="Message" required="" placeholder="Your Message" class="field area w-input"></textarea>
	   
	   <input type="hidden" class="field w-input" name="reportedby" id="reportedby" value="<?php echo $_SESSION['staffid'];?>">
	   <input type="hidden" class="field w-input" name="reportername" id="reportername" value="<?php echo $_SESSION['staffname'];?>">
	   <input type="hidden" class="field w-input" name="route_id" id="route_id" value="1">
	   <input type="hidden" class="field w-input" name="srid" id="srid" value="1.1">
	   <input type="hidden" class="field w-input" name="status" id="status" value="Pending"> 
	   <input type="hidden" class="field w-input" name="action" id="action" value="complain">
	   <input type="hidden" class="field w-input" name="recipients" id="recipients" value="michael.uko@phed.com.ng">
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div></form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCentern" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitlen" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width:80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title block-titlen" style="color:#fff;" id="req"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>TICKET ID</th>
                <th>TITLE</th>
                <th>STATUS</th>
                <th>DATE</th>
                <th>REPORT BY</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>TICKET ID</th>
                <th>TITLE</th>
                <th>STATUS</th>
                <th>DATE</th>
                <th>REPORT BY</th>
            </tr>
        </tfoot>
    </table>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenterni" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleni" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width:80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title block-titlen" style="color:#fff;" id="req"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<table id="examplei" class="display" style="width:100%">
        <thead>
            <tr>
                <th>TICKET ID</th>
                <th>TITLE</th>
                <th>STATUS</th>
                <th>DATE</th>
                <th>REPORT BY</th>
                <th>View</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>TICKET ID</th>
                <th>TITLE</th>
                <th>STATUS</th>
                <th>DATE</th>
                <th>REPORT BY</th>
                <th>View</th>
            </tr>
        </tfoot>
    </table>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="mainaction" tabindex="-1" role="dialog" aria-labelledby="mainaction" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width:80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title block-titlen" style="color:#fff;" id="req"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="section article-section wf-section" style="padding-top: 40px;">
<div class="container w-container"><div class="article-block-left">
<div class="breadcrumb-block">
</div>
<h1 data-ix="show-fixed-top-bar" id="article-title" class="article-title">Can't verify second user account</h1>
<div class="article-info-wrapper"><div class="article-info-block date"><div class="article-info-title"><strong>Created on</strong>:</div><div class="article-info-title dynamic" id="daten">Feb 27, 2016</div></div>
</div>
<div class="article-note-block w-condition-invisible"><div class="note-icon"></div><div class="rich-text-block w-dyn-bind-empty w-richtext"></div>
</div>
<div class="video-wrapper-block w-condition-invisible"><div style="padding-top:56.27659574468085%" class="article-video w-dyn-bind-empty w-video w-embed"></div></div>

<div class="rich-text-block w-richtext" id="msg"><p>Fusce at massa dignissim nibh consectetur sodales. In risus lacus, pellentesque ac accumsan non, pellentesque in odio. Proin enim arcu, consequat non mi sed, ultrices pulvinar velit. Nam vitae purus elementum, feugiat eros tristique, ultrices mi.&nbsp;</p><p>Pellentesque dapibus est et nunc ultrices, quis faucibus nulla volutpat. Integer ornare, dui a ultrices aliquam, sapien orci pharetra mauris, vitae lobortis lacus massa id dui. Nunc a eros blandit sapien egestas fermentum at nec odio. Nullam et leo eu nisl semper vulputate sit amet eu purus. Integer nec sem eu purus aliquam lobortis posuere sed lectus.</p>

</div>


</div>

<div class="article-block-right"><div class="sidebar-block-wrapper"><div class="sidebar-block">
<div class="sidebar-content-block w-clearfix" id="rp1" style="display:none">
<div class="sidebar-content-title author-title">Status</div><a href="#" id="mstatusn" class="article-author-link"></a>
<div class="sidebar-content-title author-title">Reported by</div><a href="#" id="reportedy" class="article-author-link"></a>
</div>
<div class="sidebar-content-block w-clearfix" id="rp2" style="display:none">
<div class="sidebar-content-title author-title">Status</div><a href="#" id="mstatus" class="article-author-link"></a>
<div class="sidebar-content-title author-title">Reported by</div><a href="#" id="reportedyn" class="article-author-link"></a>
<div class="sidebar-content-title author-title">Assigned To</div><a href="#" id="routedto" class="article-author-link"></a>
<div class="sidebar-content-title author-title">Date Assigned</div><a href="#" id="assignedto" class="article-author-link"></a>
<div class="sidebar-content-title author-title">Assigned By</div><a href="#" id="assignedby" class="article-author-link"></a>
</div>

</div>
<div class="sidebar-block-wrapper" id="mroute">
<div class="sidebar-title">Request Routing</div>
<div class="category-list-wrapper w-dyn-list">
<div role="list" class="category-list w-clearfix w-dyn-items">
<div role="listitem" class="category-item w-dyn-item">
<a href="javascript:void(0)" onclick="shwunit()" data-ix="block-hover" class="article-link-block category-block small w-inline-block">
<div style="background-color:#d54c4c" class="block-color-line">
</div>
<div class="article-block-title small">Route to Units</div></a>

<div class="sidebar-block-wrapper"><div class="sidebar-block" id="unitroute" style="display:none"><div class="sidebar-content-block">
<div class="sidebar-content-title">Select Unit</div>
<select id="dunits" class = "form-control">
<option></option>
</select>
<input type="hidden" value="" id="gentid"/>
<input type="button" onclick="saveunit()" value="Submit" class="button submit-button w-button">
</div></div></div>

</div>

<div role="listitem" class="category-item w-dyn-item"><a href="javascript:void(0);" onclick="shwindv()" data-ix="block-hover" class="article-link-block category-block small w-inline-block"><div style="background-color:#2b78be" class="block-color-line"></div><div class="article-block-title small">Route to Individuals</div></a>

<div class="sidebar-block-wrapper" id="indvroute"  style="display:none"><div class="sidebar-block"><div class="sidebar-content-block">
<div class="sidebar-content-title">Select Individuals</div>
<select id="indv" class = "form-control">
<option></option>
</select>
<input type="button" value="Submit" class="button submit-button w-button">
</div></div></div>
</div>
<div role="listitem" class="category-item w-dyn-item"><a href="javascript:void(0);" onclick="shwindvn()" data-ix="block-hover" class="article-link-block category-block small w-inline-block"><div style="background-color:#24bd85" class="block-color-line"></div><div class="article-block-title small">Return Request</div></a>

<div class="sidebar-block-wrapper" id ="returned" style="display:none"><div class="sidebar-block"><div class="sidebar-content-block">
<div class="sidebar-content-title">Select Action</div>
<select class = "form-control">
<option value="bts">Back To Sender</option>
<option value="cr">Cancel Request</option>
</select>
<input type="button" value="Submit" class="button submit-button w-button">
</div></div></div>
</div>
</div></div></div>
</div>


</div>

</div></div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--
<div class="cta-section wf-section"><div class="container w-container"><h3 class="cta-tittle">Contact our Support Helpdesk</h3><h3 class="cta-tittle _3">You can contact us Monday - Saturday from 9:00 AM to 6:00 PM</h3><div class="contact-cta-row w-row"><div class="contact-cta-column w-col w-col-4"><a href="#" class="contact-cta-block w-inline-block"><div class="contact-cta-title">General question?</div><div class="contact-cta-title _2">View FAQs</div></a></div><div class="contact-cta-column w-col w-col-4"><a href="#" class="contact-cta-block w-inline-block"><div class="contact-cta-title">Contact by Phone</div><div class="contact-cta-title _2">+32 20 4304 320</div></a></div><div class="contact-cta-column last w-col w-col-4"><a href="#" class="contact-cta-block w-inline-block"><div class="contact-cta-title">Contact by mail</div><div class="contact-cta-title _2">Send us an Email</div></a></div></div></div></div>--

<div class="footer wf-section"><div class="container w-container">

</div></div>-->
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=56d16d1f7353db7850333cf5" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
$rid = $_SESSION['rid'];
$srid = $_SESSION['srid'];
$dept_id = $_SESSION['dept_id'];
?>
<script>
function mainaction (n,o){

	 $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url:'api.php',
        data:{
		action:"getaction",
		id :n,
		sort:o		
		},
        success:function(data) {
		
		var valData= data;
		var valNew=valData.split(']');
	    var des=valNew[1];
	    var topic=valNew[2];
	    var msg=valNew[3];
	    var daten=valNew[4];
	    var reportedby=valNew[5];
	    var rdate=valNew[6];
	    var assigned=valNew[7];
	    var status=valNew[8];
		if(assigned ==""){
		$('#rp1').css('display','block');	
		} else {
		$('#rp2').css('display','block');	
		$('#mroute').css('display','none');
		}
		if(des=="1"){mstatusn
$('#article-title').empty();
$('#article-title').append(topic);
$('#daten').empty();
$('#daten').append(daten);
$('#msg').empty();
$('#msg').append(msg);
$('#reportedy').empty();
$('#reportedy').append(reportedby);
$('#reportedyn').empty();
$('#reportedyn').append(reportedby);
$('#assignedto').empty();
$('#assignedto').append(rdate);
$('#routedto').empty();
$('#routedto').append(assigned);
$('#mstatus').empty();
$('#mstatus').append(status);
$('#gentid').val(n);
	} 
        }
      });
$('#mainaction').modal('show');
	
}

function existing(n,m,o) {
if(n=="all" || n=="Opened" || n=="closed" ) { 
	var table = $('#example').DataTable();
	table.destroy();
	//var elmnt = document.getElementById("contain1");
	//elmnt.scrollIntoView();
	   table = $('#example').DataTable({
        "processing" : true,
     "ajax" : {
            "url" : "a.php?rb=<?php echo $_SESSION['staffname']; ?>&sort="+n+"&route_id="+o,
            dataSrc : ''
        },
        "columns" : [ {
            "data" : "tid"
        },  {
            "data" : "title"
        },{
            "data" : "status"
        }, {
            "data" : "date"
        },  {
            "data" : "reportername"
        }]
		
    });
	$('#req').empty();
	$('#req').append('List of '+m);
$('#exampleModalCentern').modal('show');
} else if(n=="alld" || n=="Openedd" || n=="closedd" ) { 
	var table = $('#examplei').DataTable();
	table.destroy();
	//var elmnt = document.getElementById("contain1");
	//elmnt.scrollIntoView();
	   table = $('#examplei').DataTable({
        "processing" : true,
     "ajax" : {
            "url" : "a.php?rb=<?php echo $_SESSION['staffname']; ?>&sort="+n+"&route_id="+o,
            dataSrc : ''
        },
        "columns" : [ {
            "data" : "tid"
        },  {
            "data" : "title"
        },{
            "data" : "status"
        }, {
            "data" : "date"
        },  {
            "data" : "reportername"
        },  {
            "data" : "ltn"
        }]
		
    });
	$('#req').empty();
	$('#req').append('List of '+m);
$('#exampleModalCenterni').modal('show');
}
}
$('#wf-form-Contact-Form').on('submit', function (e) {
	e.preventDefault();
	
	var form = $('#wf-form-Contact-Form')[0];
	// Create an FormData object 
     var data = new FormData(form);
	  swal({
                title: "Loading...",
                text: "Please wait",
                imageUrl: 'http://phedpayments.nepamsonline.com/images/loader4.gif',

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
			
		var valData= data;
		var valNew=valData.split(']');
	    var des=valNew[1];
		if(des=="1"){
			 swal({title: "Success", text: "Request recieved successfully", type: "success"},
   function(){ 
       location.reload();
   }
);
	} 
        }
      });
})
	 $('#sk-circlen').css('display','block');
			 swal({
                title: "Loading...",
                text: "Please wait",
                imageUrl: 'loader4.gif',

                showConfirmButton: false,
                allowOutsideClick: false
            });	
	$.ajax({
        type:'post',
        url:'api.php',
         data: {
action:"getNumnet",
reportedby:"<?php echo $_SESSION['staffname']; ?>",
route_id:'<?php echo $rid; ?>',
srid:'<?php echo $srid; ?>'
                },
        success:function(data) {
var valData= data;
		var valNew=valData.split(']');	
	  var cnt = valNew[1]; 
	  var cnt1 = valNew[2];
	  var cnt2 = valNew[3];
	  var cnt4 = valNew[4]; 
	  var cnt5 = valNew[5];
	  var cnt6 = valNew[6];
	  var cnt7 = valNew[7];
	$('#tot').empty();
	$('#tot').append('Total Ticket ('+cnt+')');
	$('#opt').empty();
	$('#opt').append('Opened Ticket ('+cnt1+')');
	$('#clp').empty();
	$('#clp').append('Closed Ticket ('+cnt2+')');
	$('#totd').empty();
	$('#totd').append('Total Ticket ('+cnt4+')');
	$('#optd').empty();
	$('#optd').append('Assigned Ticket ('+cnt5+')');
	$('#cltd').empty();
	$('#cltd').append('Unassigned Ticket ('+cnt6+')');
	$('#tota').empty();
	$('#tota').append('Total Ticket ('+cnt7+')');
	swal.close();
            $('#sk-circlen').css('display','none');	
        
        }
      });
  function shwunit(){
	  $('#unitroute').toggle();
	  	$.ajax({
        type:'post',
        url:'api.php',
         data: {
action:"getunit",
dept_id:'<?php echo $dept_id; ?>'
                },
        success:function(data) {
	
var valData= data;
		var valNew=valData.split('&]');	
	  var cnt = valNew[1]; 
$('#dunits').empty();
$('#dunits').append(cnt);
        
        }
      });
      }
  function shwindv() {
	  $('#indvroute').toggle(); 	$.ajax({
        type:'post',
        url:'api.php',
         data: {
action:"getindividual",
dept_id:'<?php echo $dept_id; ?>'
                },
        success:function(data) {
		
var valData= data;
		var valNew=valData.split('&]');	
	  var cnt = valNew[1]; 
$('#indv').empty();
$('#indv').append(cnt);
        
        }
      });
     }
	 
  function shwindvn() {
	  $('#returned').toggle(); 
     }
	 
	 function saveunit() {
	var tid = $('#gentid').val();
	var assigned = $('#dunits').val();
	var assignedname = $('#dunits option:selected').text();
	alert(assignedname)
	var rid = '<?php echo $rid; ?>';
	var sid = '<?php echo $srid; ?>';
	 swal({
                title: "Loading...",
                text: "Please wait",
                imageUrl: 'loader4.gif',

                showConfirmButton: false,
                allowOutsideClick: false
            });	
		  	$.ajax({
        type:'post',
        url:'api.php',
         data: {
action:"saveunit",
tid:tid,
rid:rid,
sid:sid,
assigned:assigned,
assignedname:assignedname
                },
        success:function(data) {
	
var valData= data;
		var valNew=valData.split(']');	
	  var cnt = valNew[1]; 
       	if(cnt=="1"){
			 swal({title: "Success", text: "Request sent successfully", type: "success"},
   function(){ 
       location.reload();
   }
);
		} }
      });
	 }

</script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]--></body></html>

