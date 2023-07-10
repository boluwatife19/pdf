<?php

include './connect.php';

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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Vehicle</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        $select = "SELECT * FROM needemployee";

        $query = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['vehicle'] ?></td>
                <td><?php echo $row['location'] ?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    <form action="pdf.php" target="_blank" method="POST">
        <input type="submit" value="View PDF" name="pdf_creator" class="btn btn-danger m-3">
    </form>
    <button class="btn btn-primary m-3"><a class="text-light" href="./index.php">Add Another</a></button>

</body>

</html>