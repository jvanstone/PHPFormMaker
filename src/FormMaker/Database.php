<?php 
/***
 *  Insert data into database
 *  
 *  This function will be added later
 */

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO ImmigrationAssesment (first_name, last_name, email, newsletter)
            VALUES ('$fnameSend', '$lnameSend', '$emailSend', '$newsletter')";
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $last_id = $conn->lastInsertId();
        $conn = null;
