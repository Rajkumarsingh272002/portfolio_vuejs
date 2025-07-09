
<?php
/*
$databaseconfig=new mysqli("localhost",'root','','signup');
if($databaseconfig->connect_error){
    die("connection_failed:".$databaseconfig->connect_error);
}else{
    ?>
    <?php
      // If connection is successful, show JavaScript alert
      //echo "<script>alert('Database connection successful');</script>"; ......kewal database check karne ke liye
    ?>
<?php
}
?>


<?php


$databaseconfig = new mysqli("localhost", 'root', '', 'signup');

if ($databaseconfig->connect_error) {
    // Production way: Send error response, log it (optional)
    http_response_code(500); // Internal Server Error
    echo json_encode([
        "success" => false,
        "message" => "Database connection failed"
    ]);
    exit;
}
    */
?>


<?php
$server="localhost";
$user="root";
$password="";
$dbName="portfolio";
//make connection
$databaseconfig= new mysqli($server,$user,$password,$dbName);
if($databaseconfig->connect_error){
    http_response_code(500);//internal server error
    //echo "connection_failed:".$databaseconfig->connect_error;
    /* important this used for check so we do in comment of json_encode
    echo json_encode([
        'error'=>false,
        'message'=>'database connection failed'
    ]);
exit;
}else{
   // echo "connection successfull";
    echo json_encode([
        'success'=>true,
        'message'=>'database connection successfull'
    ]);
*/
}
?>