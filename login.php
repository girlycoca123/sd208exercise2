<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    
</head>
<body class="main">
     <div class="container d-flex flex-column min-vh-100">
        <div class="row flex-grow-1 justify-content-center align-items-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                    <center>  <div class= "text white txt" >L O G I N ! </div></center>                    </div>
                    <div class="card-body">
                        <!-- <form action="/action_page.php" style="max-width:500px;margin:auto"> -->
                        <form class="laban" action="home.php">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputEAdd" placeholder="Enter Your Email*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPass" placeholder="Enter your Password*">
                            </div>
                             <button type="submit" class="btn btn-violet btn-block">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- optional to import bootstrap js -->
</body>
</html>