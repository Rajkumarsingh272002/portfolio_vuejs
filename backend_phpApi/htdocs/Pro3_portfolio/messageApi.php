

<?php
session_start(); 
require_once 'databaseconfig.php';  
?>
<?php 
//this is used for (cros) access permission
header("Access-Control-Allow-Origin: *");
header("Access-control-Allow-Methods: POST,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-type: application/json");
?>

<?php
//here we used prflied option we  used 
if($_SERVER['REQUEST_METHOD']==='OPTIONS'){
    http_response_code(200);
    exit;
}
?>


<?php
// सिर्फ POST requests allow करें
if($_SERVER['REQUEST_METHOD'] !=='POST'){
    if($_SERVER['REQUEST_METHOD'] ==='GET'){
        echo "this endpoint is for post request ";
        echo "<h3>This API only accepts POST requests. Please use a REST client or frontend form.</h3>";
        exit;
    }
    http_response_code(405);
    echo json_encode(['error'=>'Method is not Allowed']);//convert to json_object
    exit;
}
?>

<?php
// JSON data पढ़ें
$jsonData=file_get_contents('php://input');
$data=json_decode($jsonData,true);
if($data==null){
    http_response_code(400);
    echo json_encode(['error'=>"invalid json"]);
    exit;
}else{
    http_response_code(200);
}
?>



<?php
//for mail so we used at top 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

const bigError=[];
const response=[];
//$username='rajkumar'?? '';
$name=$data['name'] ?? '';
if (empty($name)) {
    $bigError[] = 'name empty so can not insert data  in database';
    echo json_encode([
        'success' => false,
        'errors' => $bigError
    ]);
    exit;
}else{
    //echo "email is not missing";
    $response[]="name is not missing";
}


$email=$data['email'] ?? '';
if (empty($email)) {
    $bigError[] = 'email empty so can not insert data  in database';
    echo json_encode([
        'success' => false,
        'errors' => $bigError
    ]);
    exit;
}else{
    $response[]="email is not missing";
}
//message;
$message=$data['message'] ?? '';
if (empty($email)) {
    $bigError[] = 'message empty so can not insert data  in database';
    echo json_encode([
        'success' => false,
        'errors' => $bigError
    ]);
    exit;
}else{
    $response[]="message is not missing";
}


$mobile=$data['mobile'] ?? '';
if (empty($mobile)) {
    $bigError[] = 'mobile empty so can not insert data  in database';
    echo json_encode([
        'success' => false,
        'errors' => $bigError
    ]);
    exit;    
}else{
    //echo "mobile is not missing";
    $response[]="mobile is not missing";
}



if($databaseconfig->connect_error){
$bigError[]='database connection failed';
    echo json_encode([
        'success' => false,
        'errors' => $bigError
    ]);
exit;
}else{
   
    $sqlInsert="INSERT INTO `contactmessage`( `name`, `email`, `message`, `mobile`)VALUES(?,?,?,?)";
    $stmt=$databaseconfig->prepare($sqlInsert);
     $stmt->bind_param('sssi',$name,$email,$message,$mobile,);
     $stmt->execute();
  
      $response[]= ' message send successfully';
      $response[]= $email;



require 'emailproject/PHPMailer/PHPMailer.php';
require 'emailproject/PHPMailer/SMTP.php';
require 'emailproject/PHPMailer/Exception.php';



$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yourmail@gmail.com'; // <-- Aapka Gmail ID
    $mail->Password   = 'your-app-password'; //// यहां Gmail का "App Password" देना होता है
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ✅ Required!
    $mail->Port       = 587;

    $mail->setFrom('yourmail@gmail.com', 'OTP System');
    $mail->addAddress($email);
    $mail->addReplyTo('yourmail@gmail.com', 'OTP System');

    $mail->isHTML(true);
    $mail->Subject = "contact message";
    $mail->Body    = "Hi,$name.($message).($mobile)";

    $mail->send();

   

} catch (Exception $e) {
    echo "email could not be sent problem into try()method-> Error are:- {$mail->ErrorInfo}";
}

if(count(bigError)==0){
     echo  json_encode(['response'=>$response]);
     
}else{
 echo json_encode(['sorryForResponse'=>'sorryforResponse']);
}

}
?>







