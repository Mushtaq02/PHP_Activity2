<?php
    require("database_connection.php");
    $sql = "SELECT FullName, UserName, Password, Email, Country, Phone FROM users";
    $result = mysqli_query($show_users_data, $sql);
?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
        <link rel="stylesheet" type="text/css" href="css/users_table.css">
        <title>Users Data</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-left">Users Data</h2>
                        </div>
                    </div>
                    <table class="table">
                        <div class="row">
                            <tr class="label col-md-2 control-label">
                                <th class="header" scope="col">FullName</th>
                                <th class="header" scope="col">UserName</th>
                                <th class="header" scope="col">Password</th>
                                <th class="header" scope="col">Email</th>
                                <th class="header" scope="col">Country</th>
                                <th class="header" scope="col">Phone</th>
                            </tr>
                        </div>
                        <?php
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                        echo '<td class="size " scope="col">' . $row["FullName"] . '</td>';
                                        echo '<td class="size " scope="col">' . $row["UserName"] . '</td>';
                                        echo '<td class="size " scope="col">' . $row["Password"] . '</td>';
                                        echo '<td class="size " scope="col">' . $row["Email"] . '</td>';
                                        echo '<td class="size " scope="col">' .$row["Country"] . '</td>';
                                        echo '<td class="size " scope="col">' . $row["Phone"] . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo "There are not any data to show it";
                            }
                            mysqli_close($show_users_data);
                        ?>
                    </table>
                    <a href="register.php" >Go To Register</a>
                </div>
            </div>
        </div>
    </body>
</html>

