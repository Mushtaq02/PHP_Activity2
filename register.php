<?php
    require("database_connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $FullName = test_input($_POST["FullName"]);
        $UserName = test_input($_POST["UserName"]);
        $Password = test_input($_POST["Password"]);
        $Email = test_input($_POST["Email"]);
        $Country =test_input($_POST["Country"]);
        $Phone = test_input($_POST["Phone"]);

        $sql="INSERT INTO users (FullName, UserName, Password, Email, Country, Phone) VALUES ('$FullName', '$UserName', '$Password', '$Email', '$Country', '$Phone')";
        if(mysqli_query($show_users_data,$sql)){
            echo "";
        }
        else{
            die ("Error In Storaged".mysqli_error($show_users_data));
        }
    }
    else {
        echo "error";
    }


    //clear inputs after submit data
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    //close connection with database
    mysqli_close($show_users_data);
    
?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-left">Register</h2>
                        </div>
                    </div>
                    <form action="register.php" method="POST">
                        <div class="row">
                            <label for="" class="label col-md-2 control-label">FullName</label>
                            <div class="col-md-10">
                                <input type="text" id="FullName" class="form-control" name="FullName" placeholder="FullName">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="label col-md-2 control-label">UserName</label>
                            <div class="col-md-10">
                                <input type="text" id="UserName" class="form-control" name="UserName" placeholder="UserName">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="label col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" id="Password" class="form-control" name="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="label col-md-2 control-label">E-mail</label>
                            <div class="col-md-10">
                                <input type="Email" id="Email" class="form-control" name="Email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="label col-md-2 control-label">Country</label>
                            <div class="col-md-10">
                                <select class="form-select" name="Country" id="Country" class="form-control">
                                    <option id="a01" name="Yemen">Yemen</option>
                                    <option id="a02" name="Kuwait">Kuwait</option>
                                    <option id="a03" name="Turkey">Turkey</option>
                                    <option id="a04" name="Egypt">Egypt</option>
                                    <option id="a05" name="Saudi Arabia">Saudi Arabia</option>
                                    <option id="a06" name="UAE">UAE</option>
                                    <option id="a07" name="Qatar">Qatar</option>
                                    <option id="a08" name="Oman">Oman</option>
                                    <option id="a09" name="Syria">Syria</option>
                                    <option id="a10" name="Palestine">Palestine</option>
                                    <option id="a11" name="Iraq">Iraq</option>
                                    <option id="a12" name="Jordan">Jordan</option>
                                    <option id="a13" name="Bahrain">Bahrain</option>
                                    <option id="a14" name="Lebanon">Lebanon</option>
                                    <option id="a15" name="Yemen">Algeria</option>
                                    <option id="a16" name="Libya">Libya</option>
                                    <option id="a17" name="Sudan">Sudan</option>
                                    <option id="a18" name="Morocco">Morocco</option>
                                    <option id="a19" name="Tunisia">Tunisia</option>
                                    <option id="a20" name="Mauritania">Mauritania</option>
                                    <option id="a21" name="Somalia">Somalia</option>
                                    <option id="a22" name="Djibouti">Djibouti</option>
                                    <option id="a23" name="Ethiopia">Ethiopia</option>
                                    <option id="a24" name="Comoros">Comoros</option>
                                    <option id="a25" name="Pakistan">Pakistan</option>
                                    <option id="a26" name="Afghanistan">Afghanistan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="label col-md-2 control-label">Phone</label>
                            <div class="col-md-10">
                                <input type="text" id="Phone" class="form-control" name="Phone" placeholder="Phone">
                                <input type="checkbox" id="remember"><label for="remember"> <small> Remember Me</small></label>
                            </div>
                        </div>
                        <input type="submit" value="SUBMIT" name="submit" class="btn btn-info">
                        <input type="reset"  value="RESET" name="reset" class="btn btn-warning">
                        <a href="users_data.php" >Go To Users</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>