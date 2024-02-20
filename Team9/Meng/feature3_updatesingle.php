<?php
include 'feature3_db.php';
include 'header.php';


$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM orderonline WHERE id = '$id'");
$row = mysqli_fetch_array($result);

if ($row) {
    $fname = $row['fname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $products = $row['products'];
    $paymentmethod = $row['paymentmethod'];
}
?>

<h2> Update order information below: </h2>
<form name="form1" method="post" action="">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $fname; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Email" name="email" required value="<?php echo $email; ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Phone" name="phone" required value="<?php echo $phone; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Address" name="address" required value="<?php echo $address; ?>">    
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Products" name="products" required value="<?php echo $products; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Payment Method" name="paymentmethod" required value="<?php echo $paymentmethod; ?>">    
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update Order Information</button></div>
        <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete Order Information</button></div>
    </div>
</form>

<?php 
  
    if (isset($_POST['submit'])){
       
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $products = $_POST['products'];
        $paymentmethod = $_POST['paymentmethod'];
        
        $query = mysqli_query($conn,"UPDATE orderonline SET fname='$fname', email='$email', phone='$phone', address='$address', products='$products', paymentmethod='$paymentmethod' WHERE id='$id'");
        
        
        if($query){
            echo "<h2>Your information is updated Successfully</h2>";
        } else {
            echo "Record Not modified";
        }
    }

   
    if (isset($_POST['delete'])){
        
        $query = mysqli_query($conn,"DELETE FROM orderonline WHERE id='$id'");
        
        
        if($query){
            echo "Record Deleted with id: $id <br>";
        } else {
            echo "Record Not Deleted";
        }
    }

    
    $conn->close();
    include 'footer.php';
?>
