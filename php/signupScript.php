 <?php 

            $output = NULL;

            if(isset($_POST[submit])){
                //connect to db
                $mysqli = NEW MySQLi('localhost','root','2211217','test');

                $firstName = $mysqli->real_escape_string($_POST['firstName']);
                $lastName = $mysqli->real_escape_string($_POST['lastName']);
                $username = $mysqli->real_escape_string($_POST['username']);
                $email = $mysqli->real_escape_string($_POST['email']);
                $phoneNo = $mysqli->real_escape_string($_POST['phoneNo']);
                $password = $mysqli->real_escape_string($_POST['password']);
                $repass = $mysqli->real_escape_string($_POST['repass']);


                $query = $mysqli->query("SELECT * FROM signuptb WHERE usename = '$username'")
                

                if(empty($firstName) OR empty($lastName) OR empty($username) OR empty($email) OR empty($phoneNo) OR empty($password) OR empty($repass)){
                    $output = "Kindly fill in all fields";
                }

                elseif ($query->num_rows != 0) {
                    # code...
                    $output = "Username is taken";
                }
                elseif ($repass != $password){
                    $output = "Password missmatch";
                }
                elseif (strlen($password) < 6) {
                    # code...
                $output = "Password length is less than 6";
                }
                else{
                    //encrypt password
                    $password = md5($password);
                    //insert record
                    $insert = $mysqli->query("INSERT INTO signuptb(firstName,lastName,username,email,phoneNo,password) VALUES('$firstName','$lastName','$username','$email','$phoneNo','$password')");

                    if ($insert != TRUE) {
                        # code...
                        $output = "there was a problem <br/>";
                        $output .= $mysqli->error;
                    }else{
                        $output = "You have been registered";
                    }

                }
        }

        ?> 
































<!-- <?php 

$firstName = $_POST['fname'];
$lastName= $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['phoneNo'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ($_POST['password1'] == $_POST['password2']) {

			include_once 'dbcon.php';




// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 		if ($_POST['password'] == $_POST['repassword']) {

#include_once 'dbcon.php';

		
		$query = "INSERT INTO signuptb (fname, lname, email, phoneNo, password) VALUES ('$firstName', '$lastName', '$email', '$mobile', '$repassword')";

		$result = mysqli_query($link, $query);
		
		if ($db -> query($sql) === TRUE) {
			# code...
			echo "Signed up successfully. You can login now";

		}else{
			echo "Error: ".$sql."br" .$conn->error;
		}

	}
		$conn->close();
 ?> -->