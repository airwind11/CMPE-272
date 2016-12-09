<?php
    $query = http_build_query([
        'client_id' =>7,
        'redirect_uri' => "http://localhost/callback.php",
        'response_type' => 'code',
        'scope' => '',
    ]);

    header("Location: https://merkato.herokuapp.com/oauth/authorize?$query");

    ?>

