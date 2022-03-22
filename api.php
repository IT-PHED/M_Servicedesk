<?php
session_start();
//CHECK ACCOUNT NUMBER AGAINST EXISTENCE IN API
if(isset($_POST['action']) && ($_POST['action']=="complain")) {

     $title=$_POST['title'];
	 $Message=$_POST['Message'];
	 $rid=$_POST['route_id'];
	 $reportedby=$_POST['reportedby'];
	 $reportername=$_POST['reportername'];
	 $status=$_POST['status'];
	 $recipients=$_POST['recipients'];
	 $tid=rand(1,999999);
	 
$ch = curl_init();
$certificate_location = 'cacert.pem';

//curl_setopt($ch, CURLOPT_URL,"https://insight.phed.com.ng/api/PHEDConnectAPI/GetKYCDataByAccountNo");
curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/Complain");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "tid=".$tid."&complain=".$Message."&tile=".$title."&reportername=".$reportername."&reportedby=".$reportedby."&status=".$status."&route_id=".$rid."&recipients=".$recipients);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true); //decode the JSON response
echo '&]1';
	
}

if(isset($_POST['action']) && ($_POST['action']=="getNumnet")) {
$ch = curl_init();
$certificate_location = 'cacert.pem';
$reportedby = $_POST['reportedby'];
$srid = $_POST['srid'];
$route_id = $_POST['route_id'];

curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/GetNumber");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "reportedby=".$reportedby."&srid=".$srid."&route_id=".$route_id);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 echo $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true);
 
  if(isset($array['cnt'])){
echo ']'.$array['cnt'].']'.$array['cnt1'].']'.$array['cnt2'].']'.$array['cnt4'].']'.$array['cnt5'].']'.$array['cnt6'].']'.$array['cnt7'].']'.$array['cnt8'].']'.$array['cnt9'];
  }

}

if(isset($_POST['action']) && ($_POST['action']=="login")) {
$ch = curl_init();
$certificate_location = 'cacert.pem';
$username = $_POST['username'];
$password = $_POST['password'];

curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/ADLogin");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "username=".$username."&password=".$password);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true);
 
  if(isset($array['status']) &&($array['status'] == true)){
	  $_SESSION['staffid'] = $array['userinfo']['staffid'];
	  $_SESSION['staffname'] = $array['userinfo']['name'];
	  $_SESSION['user'] = $array['userinfo']['staffid'];
	  $_SESSION['srid'] = $array['groupinfo'][0]['srid'];
	  $_SESSION['dept_id'] = $array['groupinfo'][0]['dept_id'];
	  $_SESSION['MM_UserGroup1'] ="";
	  $_SESSION['rid'] = $array['groupinfo'][0]['rid'];
echo ']1]'.$array['userinfo']['name'].']'.$array['userinfo']['email'].']'.$array['userinfo']['staffid'].']'.$array['groupinfo'][0]['rid'].']'.$array['userinfo']['name'];
  }

}

if(isset($_POST['action']) && ($_POST['action']=="getaction")) {
$ch = curl_init();
$certificate_location = 'cacert.pem';
$tid = $_POST['id'];
echo $sort = $_POST['sort'];

curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/getMessage");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "tid=".$tid."&sort=".$sort);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true);

  if(isset($array[0]['message'])){
	  $date = date_create($array[0]['daten']);
	 $daten = date_format($date, 'l jS F Y');
echo ']1]'.$array[0]['title'].']'.$array[0]['message'].']'.$daten.']'.$array[0]['reportename'].']'.$array[0]['rdate'].']'.$array[0]['rby'].']'.$array[0]['status'];
  }

}

if(isset($_POST['action']) && ($_POST['action']=="getunit")) {
$ch = curl_init();
$certificate_location = 'cacert.pem';
echo $dept_id = $_POST['dept_id'];

curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/getUnit");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "sort=unit&dept_id=".$dept_id);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $nnu="<option value=''>Select a Unit</option>";
  $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true);

 for($i=0;$i<=count($array)-1; $i++) { 
 //$nnu .= $array[$i]['ZONE'].' - '.$array[$i]['DTRID'].']';	
$nnu .="<option value=".$array[$i]['id'].">".$array[$i]['unit_name']."</option>";
 }
echo '&]'.$nnu;

}

if(isset($_POST['action']) && ($_POST['action']=="getindividual")) {
$ch = curl_init();
$certificate_location = 'cacert.pem';
echo $dept_id = $_POST['dept_id'];

curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/getUnit");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "sort=individual&dept_id=".$dept_id);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $nnu="<option value=''>Select a Individual</option>";
  $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true);
 for($i=0;$i<=count($array)-1; $i++) { 
 //$nnu .= $array[$i]['ZONE'].' - '.$array[$i]['DTRID'].']';	
$nnu .="<option value=".$array[$i]['id'].">".$array[$i]['name']."</option>";
 }
echo '&]'.$nnu;

}


if(isset($_POST['action']) && ($_POST['action']=="saveunit")) {
$ch = curl_init();
$certificate_location = 'cacert.pem';
 $tid = $_POST['tid'];
 $rid = $_POST['rid'];
 $sid = $_POST['sid'];
 $assigned = $_POST['assigned'];
 $assignedname = $_POST['assignedname'];

curl_setopt($ch, CURLOPT_URL,"https://localhost:44330/api/getUnit");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $certificate_location);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $certificate_location);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "sort=saveunit&assigned=".$assigned."&assignedname=".$assignedname."&status=Assigned&tid=".$tid."&route_id=".$rid."&srid=".$sid);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $nnu="<option value=''>Select a Individual</option>";
 echo $server_output = curl_exec ($ch);
curl_close ($ch);
 $array = json_decode($server_output, true);
 if(isset($array['Status'])){
echo '&]1]'.$nnu;
 }

}
?>