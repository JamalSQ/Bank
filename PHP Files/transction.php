<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Css bootstrap files -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Transction Page</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Banking System</h1>
        <a href="AllCustomer.php" style="background-color:blue; float:right; color:white; text-declaration:none; padding:10px; border-radius:10px;">Back</a>
    
        <h3 class="mb-5">All Transction Record</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Send By</th>
                    <th>Send To</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>

            <?php

            include "conn.php";
            $sql="SELECT customerrecord.name,transection.amount
            FROM customerrecord
            INNER JOIN transection ON customerrecord.id=transection.sendto";
            $result=$conn->query($sql);
            $i=1;
            while($row=mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $i++;?></td>
                    <td>Admin</td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['amount'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Js bootstrap files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>