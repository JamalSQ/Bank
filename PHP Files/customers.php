<?php
include "conn.php";
if(isset($_POST['submit'])){

    $amount = $_POST['amount'];
    $sendto=$_GET['id'];

    $sql="INSERT INTO  transection(sendby,sendto,amount) VALUES(1,'$sendto','$amount')";
    $result=$conn->query($sql);
    // header("Location: AllCustomer.php");

    $msg = "<div class='alert alert-success' role='alert'>Transaction send successfully</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Css bootstrap files -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Banking System</title>

    <style>
        form{
            
            text-align: justify;
            margin-left: 200px;
            margin-right: 200px;
        }
        #select{
            width: 100%;
        }
        label{
            font: bold;
        }
    </style>
    
</head>
<body>
        

    <div class="container p-5 mt-5 text-center bg-light">
    <a href="AllCustomer.php" class="float-start btn btn-info">Back To Home</a>

        <h1 class="text-center my-5">Banking System</h1>
        <h3>Send Money</h3>

        <div class="form">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Amount</label>
                    <br>
                    <input type="text" name="amount" class="form-control">
                </div>
                <br>
                <label for="">Send To</label>
                <br>
              <div class="form-group">
                 
                <?php 
                  include "conn.php";
                  if(isset($_GET['id'])){
                      $id=$_GET['id'];
                  }
                  $sql="SELECT * FROM customerrecord where id=$id";
                        $result=$conn->query($sql);
                        $rows=mysqli_fetch_assoc($result);   
  
                    ?>
                 <input type="text" name="sendto" class="form-control" value="<?php echo $rows['name'];?>" disabled>
              </div>
              <br>
              <button class="btn btn-success" name="submit" value="submit" type="submit">Send Money </button>
           <?php
              if(isset($msg)){
        echo $msg;
    }
    ?>
            </form>
        </div>
       
    </div>



    <!-- Js bootstrap files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>