

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
    $domain=preg_replace('/www\./', "", request::getHost());
    if ($domain=='dukafy.co.tz' || $domain=='dukafy.local') {
        return 1;
    }
    if (strpos($domain, 'dukafy')!==false) {
        $domain_array=explode('.', $domain);
        $subdomain=$domain_array[0];
        return App\Account::where('subdomain', $subdomain)->first()->id;
    } else {
        return App\Account::where('domain', $domain)->where('status', 1)->first()->id;
    }
}



function send_notification($account_id, $title='Order Completed', $body='300', $data)
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

function get_domain_from_subdomain($subdomain)
{
    $domain=preg_replace('/www\./', "", $subdomain);
    preg_match('/\.([a-z\.]+)/', $domain, $matches);
    return $matches[1];
}


function extract_domain_name($domain, $subdomain=false)
{
    if ($subdomain) {
        $domain = get_domain_from_subdomain($domain);
        return explode('.', $domain)[0];
    }
    return explode('.', $domain)[0];
}

function get_domain_efficient($domain)
{
    $domain = preg_replace('/www\./', "", $domain);
    $domain = preg_replace('/\.co\.tz/', "", $domain);
    $domain = preg_replace('/\.com/', "", $domain);
    $domain_array=explode('.', $domain);
    if (count($domain_array)==1) {
        return $domain_array[0];
    } elseif (count($domain_array)==2) {
        return $domain_array[1];
    }
}

function get_subdomain_from_domain(Type $var = null)
{
    $domain_name=get_domain_efficient($domain);
}

function delete_domain($domain)
{
    $deleteurl="https://api.digitalocean.com/v2/domains/$domains";
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $deleteurl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer 38d7b5a763808e70f9d50c9f5848b877fec1eb60bc3e70c3f94d21adf7d55c1c'
    ));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
}


