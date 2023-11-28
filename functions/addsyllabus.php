<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
        include_once("../dbConnections/mysqlconfig_conn.php");

        if(isset($_POST['Submit'])){
            $code = $_POST['code'];
            $author = $_POST['author'];
            $Subject_ID = $_POST['Subject_ID'];

            if(empty($code) || empty($author)){
                if(empty($code)){
                    echo "<font color='red'>Syllabus Code field is empty</font><br/>";
                }
                if(empty($author)){
                    echo "<font color='red'>Syllabus Author field is empty</font><br/>";
                }
                if(empty($Subject_ID)){
                    echo "<font color='red'>Subject Id field is empty</font><br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }
            else{
                $query = "INSERT INTO tblsyllabus(syllabus_code, syllabus_author, Subject_ID) VALUES ('$code', '$author', '$Subject_ID')";
    
                $result = mysqli_query($dbc, $query);
    
                if ($result) {
                    echo "Syllabus added successfully. <br/>";
                    echo "<a href='../index.php'>View Syllabus</a>";
                } else {
                    die("Query failed: " . mysqli_error($dbc));
                }
            }
        }
        ?>
    </body>
</html>
