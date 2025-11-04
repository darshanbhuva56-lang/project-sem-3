<?php

if(isset($_POST['submit'])){

    include("db.php");

    $studentname=$_POST['sname'];
    $std=$_POST['std'];
    $pname=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $messege=$_POST['messege'];

    $insert="INSERT INTO inq(`studentname`,`std`,`parentsname`,`contact`,`email`,`messege`)
        VALUES('$studentname','$std','$pname','$contact','$email','$messege')";

        $res=mysqli_query($connect,$insert);
        if($res){
             print('<h1 style="color: red; text-align: center;">Thank you for visiting</h1>');
                print("your Name is: " . $studentname . "<br><br>");
                print("std:" .$std . "<br><br>");
                 print("parentsname:" .$pname . "<br><br>");
                  print("contact:" .$contact . "<br><br>");
                print("Email: " . $email . "<br><br>");
                print("messege" . $messege . "<br><br>");
                
        }
        
           else { print("not inserted: " . mysqli_error($connect)); }
        
}
else{
    print("you not clicked on submit");
}

?>