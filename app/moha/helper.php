<?php

function sms($from,$to,$text){
  $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://rest.nexmo.com/sms/json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "from=".$from."&text=".$text."&to=".$to."&type=unicode&api_key=a30529bc&api_secret=sPDNkPwRFVyABc1w");

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
//  echo 'Error:' . curl_error($ch);
return false;
}else{
   return true;
}
curl_close($ch);
  
}

 function get_response($state,$msg,$data)
{
$response=[
"state"=>$state,
"msg"=>$msg,
"data"=>$data

];

return  response()->json($response);


}


 function btween($model,$min,$max)
    {


        $record = $model::whereBetween('created_at', [$min, $max])->get();
        return $record ;

    }



/////////////////////////////////////////////////////////////////

function notifyByFirebase($title, $body, $tokens, $data = [],$is_notification=true)
{

    $registrationIDs = $tokens;

    $fcmMsg = array(
        'body' => $body,
        'title' => $title,
        'sound' => "default",
        'color' => "#203E78"
    );
    $fcmFields = array(
        'registration_ids' => $registrationIDs,
        'priority' => 'high',
        'data' => $data
    );



    if ($is_notification)
    {
        $fcmFields['notification'] = $fcmMsg;
    }


    $headers = array(
        'Authorization: key=' . env('FIREBASE_API_ACCESS_KEY'),
        'Content-Type: application/json'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}



?>
