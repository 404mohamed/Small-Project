<?php
$Student_Name =$_post['Student_Name'];
$Student_Id =$_post['Student_Id'];
$Student_Email =$_post['Student_Email'];
$Student_Address=$_post['Student_Address'];
$Student_level =$_post['Student_Level'];
$Student_gender =$_post['Student_gender'];
$Doctor_Name = $_post['Doctor_Name'];
$Departement_Name = $_post['Departement_Name'];



// Database Connection
$conn = new mysqli('localhost','root','','form');
if($conn->error){
	die("connection Failed :" .$conn-> connect_error);
	else{
		$stmt = $conn->prepare("insert into registration(Student_Name, Student_Id,Student_Email,Student_Address ,Student_level ,Student_gender,Doctor_Name ,Departement_Name) values
		 (?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssi",$Student_Id ,$Student_Id,$Student_Email,$Student_Address,$Student_level, $Student_gender,$Doctor_Name,$Departement_Name );
		$stmt->execute();
		echo "Successfully...";
		$stmt->close();
		$conn->close();
	}
}
?>