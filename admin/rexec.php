<?php
include('../connect.php');
$idnumber= $_POST['idnumber'];
$lname= $_POST['lname'];
$fname= $_POST['fname'];
$mname= $_POST['mname'];
$mental= '';
$cause= '';
$assess= '';
$address= $_POST['address'];
$type= $_POST['type'];
$telephone= $_POST['telephone'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$bday= $_POST['bday'];
$age= $_POST['age'];
$sex= $_POST['sex'];
$civil= $_POST['civil'];
$religion= $_POST['religion'];
$education= $_POST['education'];
$employment= $_POST['employment'];
$temployment= $_POST['temployment'];
$status = 'Approved';
$municipality = '';
$description = '';


$pic='';
// upload


if(isset($_FILES['file'])){
    $name_array = $_FILES['file']['name'];
    $tmp_name_array = $_FILES['file']['tmp_name'];
    $type_array = $_FILES['file']['type'];
    $size_array = $_FILES['file']['size'];
    $error_array = $_FILES['file']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "../f1/".$name_array[$i])){
		}
		   else {
        }
		$files="../f1/" .$name_array;
		$filename = $name_array;
		}
		} else {
		}
$target_dir = "../f1/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) ;

}

// end upload

$i = 0;
$password = '';

	$save1=mysql_query("INSERT INTO member (idnumber, lname, fname,mname,address,type,telephone,mobile,email,bday,age,sex,civil,religion,education,employment,temployment,status,municipal,description1,pics,password,image) VALUES ('$idnumber','$lname','$fname','$mname','$address','$type','$telephone','$mobile','$email','$bday','$age','$sex','$civil','$religion','$education','$employment','$temployment','$status','$municipality','$description','$pic','$password','$filename')");

	foreach ($_POST['name'] as $key => $name) {
		$lname = $_POST['lname1'];
		$mname = $_POST['mname1'];
		$relationship = $_POST['relationship'];
    $save1=mysql_query("INSERT INTO familymember (name,mname,lname,relationship, username) VALUES ('$name','$lname[$i]','$mname[$i]','$relationship[$i]','$idnumber')");
	
$i ++;
}

echo "<script type=\"text/javascript\">window.alert('Resident has been successfully registered. ');window.location.href = 'index.php';</script>"; 
?>