<?php

require("details.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>FigyBook</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <h3>FigyBook</h3>
    <p>
        <a href="create.php" class="btn btn-success">Create</a>
    </p>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //Skapa uppkopplingen
        $dbh=new PDO($dsn,$username,$password);

        //Kör vår SQL sats
        $result=$dbh->query("SELECT * FROM customers");

        //Om det blir problem, skriv ut vad det var som blev fel
        if(!$result) {print_r($dbh->errorInfo());}
        else {
            //Annars så skriver vi ut info i en HTML tabell.
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["mobile"] . "</td>";
                echo "<td>" . "<a href='delete.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>" . "<a href='update.php' class='btn btn-primary'>Update</a>" . "</td>";
                echo "</tr>";
            }
        }
        //Stäng uppkopplingen
        $dbh=null;

        ?>
        </tbody>
    </table>




</div>
</body>
</html>
