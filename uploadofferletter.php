<?php
//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

if (isset($_POST)) {
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
    $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
	$regno = mysqli_real_escape_string($conn, $_POST['regno']);
    $companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);

	if ($result->num_rows == 0) {

		$uploadOk = true;
		$folder_dir ="uploads/offerletter/";
		$base = basename($_FILES['offerletter']['name']);
		$offerletterFileType = pathinfo($base, PATHINFO_EXTENSION);
		$file = uniqid() . "." . $offerletterFileType;
		$filename = $folder_dir . $file;

		if (file_exists($_FILES['offerletter']['tmp_name'])) {

			//Next we need to check if file type is of our allowed extention or not. I have only allowed pdf. You can allow doc, jpg etc. 
			if ($offerletterFileType == "pdf") {

				//Next we need to check file size with our limit size. I have set the limit size to 5MB. Note if you set higher than 2MB then you must change your php.ini configuration and change upload_max_filesize and restart your server
				if ($_FILES['offerletter']['size'] < 500000) { // File size is less than 5MB

					//If all above condition are met then copy file from server temp location to uploads folder.
					move_uploaded_file($_FILES["offerletter"]['tmp_name'], $filename);
				} else {
					//Size Error
					$_SESSION['uploadError'] = "Wrong Size. Max Size Allowed : 5MB";
					$uploadOk = false;
				}
			} else {
				//Format Error
				$_SESSION['uploadError'] = "Wrong Format. Only PDF Allowed";
				$uploadOk = false;
			}
		} else {
			//File not copied to temp location error.
			$_SESSION['uploadError'] = "Something Went Wrong. File Not Uploaded. Try Again.";
			$uploadOk = false;
		}

	$sql = "INSERT INTO offer_letter(firstname, lastname, email, contactno, rollno, regno, companyname, address, city, state, offerletter) VALUES ('$firstname', '$lastname','$email','$contactno','$rollno','$regno','$companyname','$address', '$city', '$state','$file')";
	
	if ($conn->query($sql) === TRUE) {
		$_SESSION['uploadcompleted'] = true;
		header("Location: index.php");
		exit();
		} else {
			echo "Error " . $sql . "<br>" . $conn->error;
		}
	}else {
		$_SESSION['uploaderror'] = true;
		header("Location: offerletter.php");
		exit();
	}
	$conn->close();
}else {
	header("Location: offerletter.php");
	exit();
}