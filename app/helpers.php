

<?php


function getColorCode($settings)
{
    switch ($settings->colour) {
        case 'navy':
            $colour_code='#424378';
            break;
        
            case 'green':
            $colour_code='#7a9b08';
            break;


            case 'blue':
            $colour_code='#0088cc';
            break;

            case 'yellow':
            $colour_code='#fed700';
            break;

            case 'pink':
            $colour_code='#ce1d76';
            break;

            case 'black':
            $colour_code='#000';
            break;


            case 'red':
            $colour_code='#ff6c6c';
            break;

            case 'orange':
            $colour_code='#f39c12';
            break;

            case 'dark_green':
            $colour_code='#12cca7';
            break;
       
    }
    return $colour_code;
}

function getAccountId($request)
{
    return App\Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->first()->id;
}



function send_notification($account_id, $title='Order Completed', $body='300 TZS', $data)
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
        "to"=>"/topics/account-".$account_id,
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
