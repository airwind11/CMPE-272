<?php
extract($_POST);
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

     $stmt = $conn->prepare("SELECT * FROM product where 1
    and product_id= :value" );

    $stmt->bindParam(':value', $_POST['action']);

       $stmt->execute();
 $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetch();

$value = $result['product_name'];

if(isset($_COOKIE['cookie']))
{
    $last = $result['product_name']  .",". $_COOKIE["last_visited"];

    if(isset(($_COOKIE['cookie'])["$value"]))
    $count = ($_COOKIE['cookie'])["$value"] + 1;

  else
 $count = 1;


}
else
{
    $last = $result['product_name'];
    $count = 1;
}


    // print_r($_SERVER);


    setcookie("last_visited","$last",time()+3600, "/","$_SERVER['HTTP_HOST']", 0);

     setcookie("cookie[$value]","$count",time()+3600, "/","$_SERVER['HTTP_HOST']", 0);




}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

<html lang="en">
</head>
<body>


<link rel="stylesheet" href="desc.css">



    <h1>Details</h1> <h2><?php print($result['product_name']); ?></h2>
    <h2><?php print($result['product_desc']); ?></h2>

     <br><br><img src= <?php echo($result['product_image']); ?>>



</body>
</html>

