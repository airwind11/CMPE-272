<?php
$servername = "localhost";
$username = "aravinda";
$password = "Welcome01@";
//$username = "root";
//$password = "";
$dbname = "aravinda";

try
{
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT product_id , product_name ,product_cost,product_image,product_type FROM  product where 1");

    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_ASSOC);

$result = $stmt->fetchAll();

echo json_encode($result);

}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;



?>
