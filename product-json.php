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

    $stmt = $conn->prepare("SELECT product_id , product_name ,quantity,product_image,product_cost,product_type   FROM  product where 1");

    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_ASSOC);

$result = $stmt->fetchAll();

$result = array_map(function($result) {
    return array(
        'id' => $result['product_id'],
        'name' => $result['product_name'],
        'quantity' => $result['quantity'],
        'image_url' => $result['product_image'],
                'price' => $result['product_cost'],
        'description' => $result['product_type'],
    );
}, $result);

echo json_encode($result);

}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;



?>
