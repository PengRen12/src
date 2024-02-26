<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
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
    <h2>Applicant management</h2>
    <table id="userTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Name</th>
                <th>Country_code</th>
                <th>Phone_number</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
       
        <?php
include 'db.php'; // Include your DB connection

$sql = "SELECT id, email, first_name, last_name, country_code, phone_number, country, gender FROM job_applications"; // Adjust based on your table
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
             
              echo "<tr>
              <td>" . $row["id"] . "</td>
              <td>" . $row["email"] . "</td>
              <td>" . $row["first_name"] . " " . $row["last_name"] . "</td>
              <td>" . $row["country"] . "</td>
              <td>" . $row["phone_number"] . "</td>
              <td>" . $row["country_code"] . "</td>
              <td>" . $row["gender"] . "</td>
              <td>
                  <button onclick='editUser(" . $row["id"] . ")'>Edit</button>
                  <button onclick='deleteUser(" . $row["id"] . ")'>Delete</button>
              </td>
            </tr>";
      

    }
} else {
    echo "0 results";
}
$conn->close();
?>
        </tbody>
    </table>
    <script>
        function deleteUser(userId) {
            if(confirm("Are you sure you want to delete this user?")) {
                
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       
                       console.log(this.responseText);
                       
                       window.location.reload();
                    }
                };
                xhttp.open("POST", "deleteUser.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("userId=" + userId);
              

            }
        }
    </script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    window.editUser = function(userId) {
        window.location.href = "editUser.php?userId=" + userId;
    };
});
</script>
    <?php require_once 'footer.php'; ?>
</body>
</html>