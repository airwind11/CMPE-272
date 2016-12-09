<?php

if (isset($_GET['code']))
{
    $code = $_GET['code'];
    $url = 'https://merkato.herokuapp.com/oauth/token';
    $fields = array(
                'grant_type' => 'authorization_code',
                'client_id' => 6,
                'client_secret' => "lHtUtcsfIU95x76aZajpf6MmfO392c616n0GeTz8",
                'redirect_uri' => "http://airwind.me/callback.php",
                'code' => urlencode($code),
    );

    $fields_string = "";
    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute post
    $result_json = curl_exec($ch);
    //close connection
    curl_close($ch);

    $result = json_decode($result_json, true);

    if (isset($result['access_token'])) {
        $accessToken = $result['access_token'];
        $url = 'https://merkato.herokuapp.com/api/user';
        $headers = [
            "Accept: application/json",
            "Authorization: Bearer $accessToken",
        ];

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result_json = curl_exec($ch);
        curl_close($ch);

           // $arrayresult= (array) json_decode($result_json);
             //   print_r($arrayresult);

              echo( "<title>Thank You </title></head>
                <body style = \"font-family: arial;
                font-size: 1em; color: blue\">

                <strong>Permission has been
                granted, .
                 This is Secure Area.<br />
                  </strong><br />

                 ");

                echo"<h1>User Details</h1><br />";
                $handle = fopen("User-Details.txt", "r");
                while (($line = fgets($handle)) !== false) {
                    echo "$line<br>";
                }
                fclose($handle);


    } else {
        echo("$result_json");
    }
}
else
{
    print_r($_GET);
}
?>