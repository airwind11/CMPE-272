<?php

$servername = "localhost";
$username = "aravinda";
$password = "Welcome01@";
//$username = "root";
//$password = "";
$dbname = "aravinda";

$secret = "d8928e193115b33bccf22b1c2ef19fc74ef2e7af";


if (isset(getallheaders()['nonce'])) {
    $nonce = getallheaders()['nonce'];
}

if (isset(getallheaders()['Authorization'])) {
    $digest = getallheaders()['Authorization'];
}


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$body = file_get_contents("php://input");
$signature = "POST+" . $nonce . "+" . $body;
$computed_digest = rawurlencode(base64_encode(hash_hmac('sha256', $signature, $secret, true)));


if ($digest === $computed_digest) {
    $data = json_decode($body, true);


        $data = (array) $data;
            foreach ($data as $key => $value)

            {
        $stmt = $conn->prepare("UPDATE product SET quantity= quantity-:order WHERE product_id= :value" );
                $stmt->bindParam(':value', $key);
                $stmt->bindParam(':order', $value);
                $stmt->execute();
                }
            }
        }

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>


