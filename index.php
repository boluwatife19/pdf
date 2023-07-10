
<?php  
    include './connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $vehicle = $_POST['vehicle'];
        $location = $_POST['location'];

        $sql = "insert into `needemployee` (name, vehicle, location) values ('$name', '$vehicle', '$location')";
        $result = mysqli_query($conn, $sql);
    if($result){
        header('location:main.php');
    }else{
        die(mysqli_error($conn));
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <!-- <form method="post">
    <input type="text" placeholder="Enter Your Name" name = 'name'>
    <input type="text" placeholder="Enter Your Vehicle Name" name = 'vehicle'>
    <input type="text" placeholder="Enter Your Current Location" name = 'location'>
    <button type="submit" name="submit">Submit</button>
    </form> -->
    <form method="post" class="p-3">
  <div class="mb-3">
    <label class="form-label">Legal Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Name</label>
    <input type="text" class="form-control" name="vehicle" >
  </div>
  <div class="mb-3">
    <label class="form-label">Current Location</label>
    <input type="text" class="form-control" name="location" >
  </div>
  <button type="submit" class="btn btn-primary" name='submit' >Submit</button>
</form>
</body>
</html>