<?php
$con = mysqli_connect("localhost", "root", "", "insert");
if (!$con) {
    die("❌ Database not connected: " . mysqli_connect_error());
}
echo "✅ Database connected successfully<br><br>";


if (isset($_POST['btn'])) {
    
    $sname = $_POST['sname'];
    $lstd = $_POST['lstd'];
    $ustd = $_POST['ustd'];
    $pname = $_POST['pname'];
    $contact = $_POST['contact'];

    echo "<b>Received data:</b><br>";
    echo "Student Name: $sname<br>";
    echo "Last Std: $lstd<br>";
    echo "Updated Std: $ustd<br>";
    echo "Parent Name: $pname<br>";
    echo "Contact: $contact<br><br>";

    $sql = "UPDATE inq 
            SET std = '$ustd', parentsname = '$pname', contact = '$contact' 
            WHERE studentname = '$sname' AND std = '$lstd'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "🎉 Record Updated Successfully!";
    } else {
        echo "❌ Update Failed: " . mysqli_error($con);
    }
} else {
    echo "you not clicked on submit";
}

mysqli_close($con);
?>


