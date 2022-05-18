<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Css bootstrap files -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Banking System</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Banking System</h1>
        <a href="transction.php" style="background-color:black; float:right; color:white; text-declaration:none; padding:10px; border-radius:10px;">View All Transction</a>
    
        <h3 class="mb-5">Select Customer To Send Money</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Country</th>
                    <th>Mobile No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php

            include "conn.php";
            $sql="SELECT * FROM  customerrecord";
            $result=$conn->query($sql);
            while($row=mysqli_fetch_assoc($result)){

            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['cnic'];?></td>
                    <td><?php echo $row['country'];?></td>
                    <td><?php echo $row['mobileNo'];?></td>
                    <td><a href="customers.php?id=<?php echo $row['id'];?>" class="btn btn-success">Send Money</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Js bootstrap files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>