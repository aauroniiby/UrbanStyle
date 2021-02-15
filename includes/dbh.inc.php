<?

$dbHost = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "urbanstyle";

try{
    $conn = new PDO("mysql:host=$dbHost;dbname=$dBName", $dBUsername, $dBPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

}catch(PDOException $e){
    echo "Connected failed" . $e->getMessage();
}

?>

