<?php

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    include 'db.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO memberInfo (first_name, last_name, email, birth, phone, gender)
            VALUES (?, ?, ?, ?, ?, ?)";


    $stmt = $conn->prepare($sql);


    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    // 绑定所有参数
    $stmt->bind_param("ssssss", $fname, $lname, $email, $birth, $phone, $gender);

    // 执行语句
    if ($stmt->execute()) {
        echo "Your data was recorded successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // 关闭语句
    $stmt->close();

    // 关闭数据库连接
    $conn->close();
}
?>


