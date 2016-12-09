<?php
    $query = http_build_query([
        'client_id' =>6,
        'redirect_uri' => "http://airwind.me/callback.php",
        'response_type' => 'code',
        'scope' => '',
    ]);

    header("Location: https://merkato.herokuapp.com/oauth/authorize?$query");

    ?>

