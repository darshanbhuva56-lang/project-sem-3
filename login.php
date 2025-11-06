<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="login";

$connect=mysqli_connect($hostname,$username,$password,$dbname);
if($connect){
    print("database connected");

}
else{
    print("not connected please check syntax of connection");
}

if(isset($_POST['lbtn'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO login_details(`username`,`password`)
        VALUES('$username','$password')";
    $res=mysqli_query($connect,$query);
    if($res){
    print('<h1>data inserted</h1>');
    print('<p>username : ' . $username . '<br><br>');
    print('<p>password :' .$password . '<br><br>');
    }
    else{
        print("data not inserted");
    }
}
else{
    print("you not clicked on login button");
}
?>