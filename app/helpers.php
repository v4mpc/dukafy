

<?php

function getAccountId($request)
{
    return App\Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->first()->id;
}



function send_notification($account='all', $title='Order Completed', $body='300 TZS', $data)
{
    $posturl="https://fcm.googleapis.com/fcm/send";

    $data = array(
        "notification" =>array(
            "title"=>'Dukafy',
            "body"=>$body,
            "sound"=>"default",
            "click_action"=>"FCM_PLUGIN_ACTIVITY",
            "icon"=>"fcm_push_icon"
        ),
       
        "data"=>$data,
        "to"=>"/topics/".$account,
        "priority"=>"high",
        "restricted_package_name"=>""
    );

    $data_string = json_encode($data);


    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $posturl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Key=AIzaSyDrya05Qo-VkbsIBQe5mo1F5OvC_UsZ-G0'
        ));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    return $result;
}
