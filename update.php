<?php
include "connection.php";



        //..............................
        //UPDATE t_students set phone='0811609' where student_id='0000000000001111'
        
        $result2 = mysqli_query($connect,
        "
        UPDATE t_students set phone='$_POST[phone]' where student_id='$_POST[student_id]'
        ");
        echo json_encode('success');
        //..............................
?>
