<!DOCTYPE html>
<html>
<head>
    <title>Contact Requests Management</title>
    <?php require_once 'adminheader.php'; ?>
    <style>
  body {
    font-family: Arial, sans-serif;
  }
  h2 {
    display: block;
    font-size: 50px;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: auto;  
    margin-inline-end: auto;    
    font-weight: bold;
    text-align: center;         
}

  
  #userTable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  
  #userTable thead {
    background-color: #4CAF50;
    color: white;
  }
  
  #userTable thead th {
    font-weight: bold;
    text-align: center;
    padding: 10px;
  }
  
  #userTable tbody td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }
  
  #userTable tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  #userTable tbody tr:hover {
    background-color: #ddd;
  }
  
  button {
    padding: 5px 10px;
    color: white;
    background-color: #f44336;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #d32f2f;
  }

  @media screen and (max-width: 600px) {
    #userTable {
      display: block;
      overflow-x: auto;
      white-space: nowrap;
    }
  }
</style>
</head>
<body>
    <h2>Contact Requests Management</h2>
    <table id="userTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
include 'connetdb.php'; 

$sql = "SELECT id, email, first_name, last_name, message FROM contact_messages"; // 根据您的数据库表结构调整
$result = $conn->query($sql);

if ($result === false) {
    die("SQL query failed: " . $conn->error); // 直接终止脚本并打印错误信息
}

if ($result->num_rows > 0) {
    // 输出每一行数据
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["first_name"] . " " . $row["last_name"] . "</td>
                <td>" . $row["message"] . "</td>
                <td>
                    <button onclick='editRequest(" . $row["id"] . ")'>Edit</button>
                    <button onclick='deleteRequest(" . $row["id"] . ")'>Delete</button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No requests found</td></tr>";
}
$conn->close();
?>
        </tbody>
    </table>
    <script>
    // 使用AJAX发送删除请求
    function deleteRequest(requestId) {
        if(confirm("Are you sure you want to delete this request?")) {
            fetch('deleteContactRequest.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'requestId=' + requestId
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                // 成功删除后刷新页面或从DOM中移除该行
                window.location.reload();
            })
            .catch(error => console.error('Error:', error));
        }
    }

    // 保持编辑请求的跳转逻辑不变
    function editRequest(requestId) {
        window.location.href = "editContactRequest.php?requestId=" + requestId;
    }
</script>
<?php require_once 'footer.php'; ?>
</body>
</html>