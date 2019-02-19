<?php
/*$servername = "localhost";
$username = "drparija_myemplo";
$password = "employment@2";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn,"formdetails");*/
$servername = "localhost";
$username = "drparija_myemplo";
$password = "employment@2";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
   // echo "Connected successfully";
    $dbname="drparija_myemployment";
    $db = mysqli_select_db($conn,$dbname);
    if(!db)
    {
        die("Database could not be selected: " . mysqli_connect_error());
    }
    else
    {
      //  echo "Database Sdfmkdmfldkfs;ffk";
    }
}
if(isset($_POST['Title'])){
    $title = $_POST['Title23'];

}
if(isset($_POST['Name'])){
    $name=$_POST['Name'];

}
if(isset($_POST['Email'])){
    $email=$_POST['Email'];

}

if(isset($_POST['Phone'])){
    $phone=$_POST['Phone'];

}
if(isset($_POST['Address'])){
    $address=$_POST['Address'];

}

if(isset($_POST['PassYear'])){
    $passyear=$_POST['PassYear'];

}
if(isset($_POST['Stream'])){
    $stream=$_POST['Stream'];

}

if(isset($_POST['WorkAt'])){
    $workat=$_POST['WorkAt'];

}

if(isset($_POST['CollegeName'])){
    $college=$_POST['CollegeName'];

}

if(isset($_POST['board'])){
    $board=$_POST['board'];

}

if(isset($_FILES['upload'])){

    $target_dir = "files/";
    $file_name = preg_replace('/\s+/', '_', basename($_FILES["upload"]["name"]));
    $target_file = $target_dir . $file_name ;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["upload"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }
    }

// Check file size
    if ($_FILES["upload"]["size"] > 500000) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
            $type = pathinfo($target_file, PATHINFO_EXTENSION);
            $data = file_get_contents($target_file);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        } else {
            //echo "Sorry, there was an error uploading your file.";
        }
    }

}

if(isset($_POST['submit'])){
    $sql="INSERT INTO alumni (Title, Name, Email, Phone, Address, PassYear, Stream, WorkAt, CollegeName, upload, Board) VALUES ('$title', '$name', '$email', '$phone', '$address', '$passyear', '$stream', '$workat','$college','$target_file','$board')";

//var_dump(mysqli_query($conn, $sql));
    if (mysqli_query($conn, $sql)) {
        //echo "New records created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        die('--');
    }
}

$message = '<html><body>';
$message .= '<h1 style="color:#f40;">New Record Submited!</h1>';
$message .= '<img src="http://myemploymentindia.com/'.$target_file.'" alt="profile" height="200" width="200">';
$message .= '<p style="color:#080;font-size:18px;">Name: '. $title .'&nbsp;'. $name .'</p>';
$message .= '<p style="color:#080;font-size:18px;">Email: '. $email .'</p>';
$message .= '<p style="color:#080;font-size:18px;">Phone: ' . $phone . '<br/>' . 'Address: '. $address. '<br/>' . 'Board: '. $board.'</p>';
$message .= '<p style="color:#080;font-size:18px;">Passing Year: '. $passyear. '<br/>' . 'Stream: '. $stream. '</p>';
$message .= '<p style="color:#080;font-size:18px;">Working At: '.$workat. '<br/>College Name:'. $college.'<br/></p>';
$message .= '</body></html>';

$to= 'docparijat@gmail.com';
//$to= 'maildoctori8@gmail.com';
$subject = 'My Employment';
$from = 'alumni@doctori8.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message,$headers);

?>

<html>
<head>
    <title>My Employment</title>
</head>
<body><center>
    <img src='images/success_page.png'/>
</center>
</body>
</html>

