<?php

if(isset($_POST['dbtn']))
{
    include("db.php");
    $studentname=$_POST['sname'];
    $std=$_POST['ustd'];
    $pname=$_POST['pname'];
    $contact=$_POST['contact'];
    

    $delete="DELETE FROM inq WHERE `studentName` = '$studentname' OR `std` = '$std' AND `parentsname` = 'pname' OR `contact` = '$contact'";

    if(mysqli_query($connect,$delete))
    {
        print('<h1 style="color: red; text-align: center;">PRINCESS FASHION</h1>');
        print("Dear  ," . $studentname . "Your booking was canceled");
    }
    else{
        print("not deleted");
    }
}
else{
    print("not clicked on delete button");
}

?>
