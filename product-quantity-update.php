<?php

$servername = "localhost";
$username = "aravinda";
$password = "Welcome01@";
//$username = "root";
//$password = "";
$dbname = "aravinda";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = (array) json_decode(file_get_contents("php://input"));
            foreach ($data as $key => $value)

            {
        $stmt = $conn->prepare("UPDATE product SET quantity= quantity-:order WHERE product_id= :value" );
                $stmt->bindParam(':value', $key);
                $stmt->bindParam(':order', $value);
                $stmt->execute();
                }
            }

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>


