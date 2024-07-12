<?php
$inserted = false;
if(isset($_POST['full_name'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // $dbname = "registration_db";

    // Create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Set parameters and execute
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $id_type = $_POST['id_type'];
    $id_number = $_POST['id_number'];
    $issue_authority = $_POST['issue_authority'];
    $issue_date = $_POST['issue_date'];
    $issue_state = $_POST['issue_state'];
    $expiry_date = $_POST['expiry_date'];

    $sql = "INSERT INTO `task1` . `registration_form` (`full_name`, `date_of_birth`, `email`, `phone_number`, `gender`, `occupation`, `id_type`,
    `id_number`, `issue_authority`, `issue_date`, `issue_state`, `expiry_date`, `dt`) VALUES ('$full_name', '$date_of_birth',
    '$email', '$phone_number', '$gender', '$occupation', '$id_type', '$id_number', '$issue_authority', '$issue_date', '$issue_state',
    '$expiry_date', current_timestamp());";

    if($con->query($sql) == true){
        $inserted = true;
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/22d4d96c30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Task1</title>
</head>
<body>
    <div class="form">
    <?php
     if(!$inserted){
        echo '
        <h2>Registration</h2>
        
        <form id="registrationForm" action="index.php" method="POST" onsubmit="return handleForm()">
            <div>
                <h3>Personal Details</h3>
                <div class="inputs">
                    <div class="row">
                        
                        <div class="input">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="full_name" placeholder="Enter your name">
                            <span id="nameError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="dateofbirth">Date of Birth</label>
                            <input type="text" id="dateofbirth" name="date_of_birth" placeholder="Enter birth date">
                            <span id="dobError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter your email">
                            <span id="emailError" class="error"></span><br>
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="input">
                            <label for="number">Mobile number</label>
                            <input type="text" id="number" name="phone_number" placeholder="Enter mobile number">
                            <span id="numberError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="gender">Gender</label>
                            <input type="text" id="gender" name="gender" placeholder="Enter your gender">
                            <span id="genderError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="occupation">Occupation</label>
                            <input type="text" id="occupation" name="occupation" placeholder="Enter occupation">
                            <span id="occupationError" class="error"></span><br>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <h3>Identity Details</h3>
                <div class="inputs">
                    <div class="row">
                        
                        <div class="input">
                            <label for="idtype">ID Type</label>
                            <input type="text" id="idtype" name="id_type" placeholder="Enter your ID type">
                            <span id="idtypeError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="idnumber">ID Number</label>
                            <input type="text" id="idnumber" name="id_number" placeholder="Enter ID number">
                            <span id="idnumberError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="issueauthority">Issue Authority</label>
                            <input type="text" id="issueauthority" name="issue_authority" placeholder="Enter issue authority">
                            <span id="issueauthorityError" class="error"></span><br>
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="input">
                            <label for="issuedate">Issue Date</label>
                            <input type="text" id="issuedate" name="issue_date" placeholder="Enter issue date">
                            <span id="issuedateError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="issuestate">Issue State</label>
                            <input type="text" id="issuestate" name="issue_state" placeholder="Enter issue state">
                            <span id="issuestateError" class="error"></span><br>
                        </div>
                        
                        <div class="input">
                            <label for="expirydate">Expiry Date</label>
                            <input type="text" id="expirydate" name="expiry_date" placeholder="Enter expiry date">
                            <span id="expirydateError" class="error"></span><br>
                        </div>

                    </div>
                </div>
            </div>

            <button type="submit">Next<i class="fa-solid fa-arrow-right-long"></i></button>
        </form>';}
        else{
            echo '<div class="submitted" style="width:100%; text-align:center; margin-bottom: 2.5em;">
                <h1>Form Submitted!</h1>
                <a 
                style="color: white;
                        padding: .8rem 6rem;
                        background-color: rgb(84, 84, 250);
                        border: none;
                        border-radius: 5px;
                        text-decoration: none;" 
                href="http://localhost/Task1/index.php">Go back</a>
    </div>';
        }   
    ?>
    
    </div>
    
    <script src="index.js"></script>
</body>
</html>