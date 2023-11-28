<?php
    $query = "SELECT * FROM tblsubjects
    LEFT JOIN tblsyllabus ON tblsyllabus.Subject_ID = tblsubjects.Subject_ID";
    $result = mysqli_query($dbc, $query);
?>