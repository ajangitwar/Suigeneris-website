<?php

include("connect.php");




function delete_member($conn,$id){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['dalete'])){
			$delete = mysqli_query($conn,"DELETE FROM members WHERE id = $id");
			if(!$delete){
				echo 'Failed to delete:'.mysqli_error($conn);
			}else{
				echo "<script>alert('Deleted Successfully!!');</script>";
			}
		}
	}
}


function select_members($conn){

	$name = $_POST['name'];
	$post = $_POST['post'];

	$sql = "SELECT * FROM members where name = '$name' and post = '$post'";
	$select = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($select)){
		$arraydata[] = $row;
	}

}

function select_all_members($conn){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){ 
			$name = $_POST['name'];
			$category = $_POST['category1'];
			if($category=="--select--"){
				echo "<script>alert('Please Select Catgory');</script>";
			}else{
				$truncate = mysqli_query($conn,"DELETE from $category where name='$name'");
				if($truncate){
					echo '<script>alert("Deleted Successfully");</script>';
				}
			}
		}
	}
}

function register_members($conn){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$category = $_POST['category'];
			$name = $_POST['name'];
			$post = $_POST['post'];
			$year = $_POST['year'];
			$img = $_FILES['image']['name'];
			$target = "img/".basename($_FILES['image']['name']);
			if(!isset($img)){
				echo "<script>alert('Please select a file');</script>";
			}
			else{
				if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
				echo "<script>alert('Not an Image');</script>";
				}
				else{
					$insert = mysqli_query($conn,"INSERT INTO $category( `image`, `name`, `post`, `year`) VALUES ('$img','$name', '$post', '$year')");
					if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
						echo "<script>alert('Registered Successfully!!')</script>";
					}else{
						echo "<script>alert('Failed to add Member');</script>";
					}
				}
			}	
		}
	}
}
function insert_image($conn){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$category = $_POST['category'];
			$img = $_FILES['image']['name'];
			$target = "img/".basename($_FILES['image']['name']);
			if(!isset($img)){
				echo "<script>alert('Please select a file');</script>";
			}
			else{
				if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
				echo "<script>alert('Not an Image');</script>";
				}
				else{
					$insert = mysqli_query($conn,"INSERT INTO $category( `image`) VALUES ('$img')");
					if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
						echo "<script>alert('Registered Successfully!!')</script>";
					}else{
						echo "<script>alert('Failed to add Member');</script>";
					}
				}
			}	
		}
	}
}


function register_admin($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$username = $_POST['username'];
			$mobile = $_POST['mobile'];
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$cpass = $_POST['cpassword'];

			if($pass != $cpass){
				echo "<script>alert('Passwords do not Match');</script>";
			}
			else{	
				$register = mysqli_query($connect,"INSERT INTO `login` (`name`, `email`, `userid`, `mobile`, `pass`) VALUES ('$name', '$email', '$username', '$mobile', '$pass');");
				if($register){
					echo "<script>alert('Registration Successful!!');</script>";
				}else{
					echo "Registration Failed:".mysqli_error($connect);
				}
			}
		}
	}
}

function delete_images($conn){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){ 
			$category = $_POST['category'];
			if($category=="--select--"){
				echo "<script>alert('Please Select Catgory');</script>";
			}else{
				$truncate = mysqli_query($conn,"TRUNCATE table $category");
				if($truncate){
					echo '<script>alert("Deleted Successfully");</script>';
				}
			}
		}
	}
}

function add_updates($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$discription = $_POST['discription'];
			$insert = mysqli_query($connect,"INSERT INTO updates( `title`, `discription`) VALUES ('$title', '$discription')");
			if($insert){
				echo "<script>alert('Added Successfully!!')</script>";
			}else{
			echo "Failed to Add: ".mysqli_error($conn) ;
			}
		}
	}
}
function delete_notifications($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$truncate = mysqli_query($connect,"DELETE from notification where title='$title'");
			if($truncate){
				echo '<script>alert("Deleted Successfully");</script>';
			}
			else{
				echo "Failed to Delete: ".mysqli_error($connect);
			}
		}
	}
}

function delete_updates($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$category = $_POST['category'];
			$title = $_POST['title'];
			$truncate = mysqli_query($connect,"DELETE from $category where title='$title'");
			if($truncate){
				echo '<script>alert("Deleted Successfully");</script>';
			}
			else{
				echo "Failed to Delete: ".mysqli_error($connect);
			}
		}
	}
}

function add_notifications($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$discription = $_POST['discription'];
			$insert = mysqli_query($connect,"INSERT INTO `notification` ( `title`, `discription`) VALUES ( '$title', '$discription');");
			if($insert){
				echo "<script>alert('Added Successfully!!')</script>";
			}else{
				echo "Failed to Add: ".mysqli_error($connect) ;
			}
		}
	}
}

function verify_admin($connect){
	if(isset($_POST['submit'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$row = mysqli_query($connect,"SELECT * from login where userid='$user' and pass='$pass'");
		$data = mysqli_fetch_array($row);
		if(($data['userid']==$user)&&($data['pass']==$pass))
		{
			$_SESSION['login'] = 1;
			$_SESSION['username'] = $user;
			$set = mysqli_query($connect, "INSERT INTO logs(loginid,login_time) values('$user',NOW())");
			header("location:security/main.php");
		}
		else
		{
			$_SESSION['login'] = 0;
			echo "<script type='text/javascript'>alert('Incorrect Username and Password');</script>";
		}
	}

}

function add_faq($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$discription = $_POST['discription'];
			$insert = mysqli_query($connect,"INSERT INTO `faq` ( `title`, `discription`) VALUES ( '$title', '$discription');");
			if($insert){
				echo "<script>alert('Added Successfully!!')</script>";
			}else{
				echo "Failed to Add: ".mysqli_error($connect) ;
			}
		}
	}
}
function add_projects($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$discription = $_POST['discription'];
			$insert = mysqli_query($connect,"INSERT INTO `projects` ( `title`, `discription`) VALUES ( '$title', '$discription');");
			if($insert){
				echo "<script>alert('Added Successfully!!')</script>";
			}else{
				echo "Failed to Add: ".mysqli_error($connect) ;
			}
		}
	}
}

function delete_projects($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$delete = mysqli_query($connect,"DELETE from projects where title='$title'");
			if($delete){
				echo '<script>alert("Deleted Successfully");</script>';
			}
			else{
				echo "Failed to Delete: ".mysqli_error($connect);
			}
		}
	}	
}
function delete_faq($connect){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$delete = mysqli_query($connect,"DELETE from faq where title='$title'");
			if($delete){
				echo '<script>alert("Deleted Successfully");</script>';
			}
			else{
				echo "Failed to Delete: ".mysqli_error($connect);
			}
		}
	}	
}

function add_events($conn){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$category = $_POST['category'];
			$title = $_POST['title'];
			$discription = $_POST['discription'];
			$phone = $_POST['phone'];
			$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			if(!isset($img)){
				echo "<script>alert('Please select a file');</script>";
			}
			else{
				if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
				echo "<script>alert('Not an Image');</script>";
				}
				else{
						$insert = mysqli_query($conn,"INSERT INTO $category( `title`, `image`, `discription`, `number`) VALUES ('$title','$img', '$discription', '$phone')");
					if($insert){
						echo "<script>alert('Registered Successfully!!')</script>";
					}else{
					echo "Registration Failed: ".mysqli_error($conn) ;
					}
				}	
			}	
		}
	}
}

function add_social($conn){
	if($_SESSION['login'] == 0){
		header('location: ../verify_login.php');
	}else{
		if(isset($_POST['submit'])){
			$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			if(!isset($img)){
				echo "<script>alert('Please select a file');</script>";
			}
			else{
				if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
				echo "<script>alert('Not an Image');</script>";
				}
				else{
						$insert = mysqli_query($conn,"INSERT INTO social(`image`) VALUES ('$img')");
					if($insert){
						echo "<script>alert('Registered Successfully!!')</script>";
					}else{
					echo "Registration Failed: ".mysqli_error($conn) ;
					}
				}	
			}	
		}
	}
}