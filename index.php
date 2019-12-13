<!-- Host -->
<?php
$status =  GetServerStatus('yourwebsite.com',yourwebsiteports);
function GetServerStatus($site, $port)
{
$status = array("OFFLINE", "ONLINE");
$fp = @fsockopen($site, $port, $errno, $errstr, 2);
if (!$fp) {
    // echo "HOST ".$status[0]."<br>"; 
     $webhookurl = "discordwebhookurlofchannel";
// $msg = "HOST ".$status[0]."";
     $msg = "```diff
- HOST ".$status[0]." at ".date("l").", ".date("d F 20y")."```";
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
    
} else 
  { 
   //   echo "HOST ".$status[1]."<br>"; 
     $webhookurl = "discordwebhookurlofchannel";
     // $msg = "Host ".$status[1]."";
      $msg = "```diff
+ Host ".$status[1]." at ".date("l").", ".date("d F 20y")."```";
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
  }
}

?>
