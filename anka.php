<?php
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbName = "anka";

    // create connection
    $dbConnect = new mysqli($hostname, $username, $password, $dbName);
    // check connection
    if ($dbConnect->connect_error) {
    die("Connection failed: " . $dbConnect->connect_error);
    }

    // echo "Connected successfully"."\n";

    
    $myfile = fopen("D:\ANKACron\ankarequests.txt", "r+") or die("Unable to open file!");
    while(!feof($myfile)) {
        $command = fgets($myfile);
        $arr = explode(' ', trim($command));

        // Prerequisites
        if($arr[0]=="register"){
            $productname = $arr[3];
        //     echo($productname);
        }
               

        //Sorting commands from participant's Command Line Interface
        if($arr[0]=="register"){
            $sql = "INSERT INTO participants (parname, parpassword, dateOfBirth)
                    VALUES ('$arr[1]', '$arr[2]', '$arr[4]')";

            if (mysqli_query($dbConnect, $sql)) {
                // echo "Record updated successfully";
            } else {
                // echo "Error updating record: " . mysqli_error($conn);
            }

            $sql = "INSERT INTO products (proname)
            VALUES ('$productname')";

            if (mysqli_query($dbConnect, $sql)) {
                // echo "Record updated successfully";
              } else {
                // echo "Error updating record: " . mysqli_error($conn);
              }
        }
        
        else if($arr[0]=="post_product"){
            $sql = "UPDATE products SET prodescription = '$arr[1]', 
                    prorate = '$arr[2]', stocksize = '$arr[3]' WHERE proname = '$productname'";

            if (mysqli_query($dbConnect, $sql)) {
                // echo "Record updated successfully";
            } else {
                // echo "Error updating record: " . mysqli_error($conn);
            }
        }
        
        else if($arr[0]=="performance"){

            //picking participant's points
            $sql = "SELECT points FROM participants WHERE parname = '$arr[1]'";

            $resultset1 = $dbConnect->query($sql);

            if ($resultset1->num_rows > 0) {
            // output points of participant
            while($row = $resultset1->fetch_assoc()) {
                echo "points: " .$row["points"];
            }
            } else {
            echo "No details for points found ";
            }

            //picking details of participants product (stock size and sales made)
            $sql = "SELECT stocksize, prosales FROM products WHERE proname = '$arr[2]'";

            $resultset2 = $dbConnect->query($sql);

            if ($resultset2->num_rows > 0) {
            while($row = $resultset2->fetch_assoc()) {
                echo "stock size: " .$row["stocksize"]."product sales: ".$row["prosales"];
            }
            } else {
            echo "No product details found";
            }
        }
      }
    ftruncate($myfile, 0);
    fclose($myfile);

    $dbConnect->close();
?>