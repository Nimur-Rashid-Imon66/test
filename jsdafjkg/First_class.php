<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello_php</title>
    <!-- <link rel="stylesheet" href="css/class2.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Ubuntu&display=swap" rel="stylesheet">
    
    
    <!-- <script src="js/jquery-3.6.0.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script> 

    <!-- <script>
        $(function () {
            $("#dob").datepicker();
            $("#lastDonate").datepicker();
        });
    </script> -->
    <script>
        $().ready(function () {
            $("#dob").datepicker();
            $("#frm").validate({
                rules: {
                    stuname: "required",
                    stuid:"required",
                    email: "required",
                    dob:"required",
                    gender:"required",
                    booldgrp:"required",
                    pass: {
                        required: true,
                        minlength: 5
                    },
                    address:"required",

                }, messages: {
                    stuname: "Please Enter Name ",
                    stuid: "Please Enter ID ",
                    email: "Please Enter Email ",
                    dob:"Please Enter Date of Birth ",
                    gender: "Please Enter gender ",
                    booldgrp:"Please Enter Boold Group",
                    password: {
                        required: "Please enter a password",
                        minlength: "Your password must be consist of at least 5 characters"
                    },
                    address:"Please Enter Address ",
                }
            });
        });
    </script>
</head>
<body>
    <!-- <form method="post" action="">
        <table>
            <tr>
                <td>Enter Name</td>
                <td><input type="text" id="stuname" name="stuname"></td>
            </tr>
            <tr>
                <td>Enter ID</td>
                <td><input type="text" id="stuid" name="stuid"></td>
            </tr>
            <tr>
                <td>Enter Phone Number</td>
                <td><input type="text" id="phone" name="phone"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input id="dob" name="dob"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender">
                        <option disabled selected value="Select Gender">Select Gender</option>
                        <option>male</option>
                        <option>female</option>
                        <option>other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Boold Group</td>
                <td>
                    <select name="booldgrp">
                        <option disabled selected value="Select Boold Group">Select Boold Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Enter Address</td>
                <td><input type="text" id="address" name="address"></td>
            </tr>
            <tr>
                <td>Enter New Password</td>
                <td><input type="password" id="pass" name="pass"></td>
            </tr>
            <tr align="center">
                <td></td>
                <td><input type="submit" id="submitbtn" name="submitbtn"></td>
            </tr>
        </table>
    </form> -->
        <div class="form-validation col-md-6" style="margin-left:15rem">
            <form method="post" action="" id="frm" >
                <div class="row mb-3">
                    <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Enter Name">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="stuid" name="stuid" placeholder="Enter ID">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Birth Date">
                </div>
                <div class="row mb-3">
                    <select name="gender">
                        <option disabled selected value="Select Gender">Select Gender</option>
                        <option>male</option>
                        <option>female</option>
                        <option>other</option>
                    </select>
                </div>
                <div class="row mb-3">
                     <select name="booldgrp">
                        <option disabled selected value="Select Boold Group">Select Boold Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                 </div>
                <div class="row mb-3">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                </div>
                <div class="row mb-3">
                    <input type="submit" class="btn btn-success" id="submitbtn" name ="submitbtn" action="">
                </div>
            </form>
        </div>
        
</body>
</html>
<?php 
  
    
    
    echo "<pre>" ;
    print_r($_POST);
    $submitbutton= $_POST['submitbtn'];
    echo $submitbutton,"Hello.." ;
    if($submitbutton)
    {
        $stuname       = $_POST['stuname'] ;
        $stuid         = $_POST['stuid'] ;
        $phone         = $_POST['phone'] ;
        $gender        = $_POST['gender'] ;
        $booldgrp      = $_POST['booldgrp'] ;
        $dob           = $_POST['dob'] ;
        $pass          = $_POST['pass'] ;
        $address       = $_POST['address'] ;

        // echo $stuname," ",$stuid;

        $user = "root";
        $pass = "";
        $db = "5bm_tools";
        $db =mysqli_connect("localhost",$user,$pass,$db);
        mysqli_query($db,"INSERT INTO studentinfo(stuname,stuid,phone,gender,booldgrp,dob,pass,address) values('$stuname','$stuid','$phone','$gender','$booldgrp','$dob','$pass','$address')");
    }
    else
    {
    //This statement to be executed
        echo "Error !!!";
    }
    

?>



























<!-- <?php

echo "Hello Nimur" ;
echo "<br>" ;

$first_variable_in_php = 1;
echo "My first variable in php is : $first_variable_in_php <br>";
$data = array(4,6,7,8,9);

echo "<br>For loop : <br>" ;
for ($x = 0; $x < 5; $x++) {
    echo "The $x number is: $data[$x] <br>";
}


$friend_name = array("Abul","Kabul","Babul","Tutul","Mukul");

echo "<br>Foreach loop : <br>" ;
foreach ($friend_name as $value) {
    echo "$value <br>";
}


// echo "<pre>";
// var_dump($data);
?> -->