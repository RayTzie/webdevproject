<html>
    <head>
        <title>Add Syllabus</title>
    <head>
    <body>
        <?php

        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])){
            $code = $_POST['code'];
            $author = $_POST['author'];
            $Subject_ID = $_POST['Subject_ID'];

            if(empty($code) || empty($author)){
                if(empty($code)){
                    echo "<font color='red'>syllabus Code field is empty</font><br/>";
                }
                if(empty($author)){
                    echo "<font color='red'>syllabus Author field is empty</font><br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }
            else{
                // Assuming your tblsyllabus table has columns code, author, and subject_id
                $query = "INSERT INTO tblsyllabus (code, author, Subject_ID) VALUES ('$code', '$author', '$Subject_ID')";
    
                $result = mysqli_query($dbc, $query);
    
                
                if ($result) {
                    echo "Syllabus added successfully. <br/>";
                    echo "<a href='view_syllabus.php'>View Syllabus</a>";
                } else {
                    die("Query failed: " . mysqli_error($dbc));
                }
            }
        }
        ?>
    </body>