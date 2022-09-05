<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div id="ui">
                <form class="form-group text-center" action="modified.php" method="post">
                    <div class="row">

                        <div class="col-lg-4">
                         <label>Account Number</label>
                         <input type="text" placeholder="Enter your account number" name="accno" class="form-control">
                        </div>

                        <div class="col-lg-4">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your first name" name="fname" class="form-control">
                        </div>

                        <div class="col-lg-4">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your last name" name="lname" class="form-control">
                        </div>

                        <br>
                        <label>Email</label>
                        <input type="email" placeholder="Enter your email" name="email" class="form-control">
                        <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Phone Number</label>
                                <input type="tel" placeholder="Enter your phone number" name="phoneno" class="form-control">
                            </div>

                            <div class="col-lg-6">
                                <label for="">Address</label>
                                <input type="text" placeholder="Enter your address" name="address" class="form-control">
                            </div>

                        </div>
                    </div>
                    <br>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">
                    
                </form>
            </div>

        </div>

        <div class="col=lg-3"></div>

    </div>

   </div> 
</body>
</html>