 <?php   
    include("connection.php");
    session_start();
    $hotel_name = $_GET["hotel_name"];
    $price = $_GET["price"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#FEECE9;"><br>
<div class="container">
    <div class="col-12 mt-4">
        <div class="card p-3">
            <p class="mb-0 fw-bold h4">Payment Methods</p>
        </div>
    </div>
    <div class="col-12">
    <div class="card p-3">
    <div class="card-body border p-0">
        <p> <a class="btn btn-primary d-flex " data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">UPI</span></a> </p>
    <div class="collapse show p-3 pt-0" id="collapseExample">
    <div class="row">
    <div class="col-lg-5 mb-lg-0 mb-3">
        <p class="h4 mb-0">Summary</p>
        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green"><?php $hotel_name?></span> </p>
        <p class="mb-0"> <span class="fw-bold">Price:</span> <span class="c-green"><?php $price?></span> </p>
    </div>
    <div class="col-lg-7">
        <form action="valid_payment.php" method="post" class="form">
        <div class="row">
        <div class="col-12">                                            
        <div class="form__div"> 
            <label for="" class="form__label">Enter UPI ID</label><br>
            <input type="text" name="upi" class="form-control"> <br>
            <input class="btn btn-primary" type="submit" value="Make Payment">
        </div>
        </div>                                        
        </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>