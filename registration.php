<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <!-- should be imported after bootstrap css-->
</head>

<body class="main">
    <!-- this is the main container -->
    <div class="container d-flex flex-column min-vh-100">
        <div class="row flex-grow-1 justify-content-center align-items-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <!-- <h2 class="text">Sign Up for more Info</h2> -->
                        <center> <b><div class= "text white txt" >S I G N  U P ! </div></center></b>
                    </div>
                    <div class="card-body">
                        <!-- <form action="/action_page.php" style="max-width:500px;margin:auto"> -->
                        <form class="laban" action="login.php">
                            <div class="form-row laban">
                                <div class="form-group col-md-6 ">
                                    <input type="text" class="form-control" id="inputfName" placeholder="First Name*">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputlName" placeholder="Last Name*">
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputEAdd" placeholder="Enter Your Email*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputEAdd1" placeholder="Confirm Email Adrress*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPass" placeholder="Enter your Password*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPass1" placeholder="Confrim Email Password*">
                            </div>
                            <button type="submit" class="btn  btn-block btn-violet">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- optional to import bootstrap js -->
</body>

</html>