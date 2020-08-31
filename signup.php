<?php

include_once 'db.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<title>SIGN UP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    

</head>
<body>

        <section id="cover2" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="title">SIGN UP</h1>
                            <div class="px-2 signupform">
                            <form action="signup_db.php" method="post" class="needs-validation" novalidate="">
                                    <div class="form-group usernameSi">
                                        <input class="form-control" type="text" name="firstName" placeholder="John" required>
                                    </div>
                                    <div class=" form-group usernameSi">
                                        <input class="form-control"type="text" name="lastName" placeholder="Doe" required>  
                                    </div>

                                    <div class="form-group passwordSi">
                                        <input class="form-control" type="text" name="user" placeholder="User name : JD123" required>
                                        
                                    </div>
                                <div class="form-group usernameSi">
                                    <input class="form-control" type="text" name="email" placeholder="jdoe@gmail.com" required>
                                    </div>
                                

                                <div class="form-group was-validated usernameSi">
                                    <input id="pw" class="form-control" type="password" name="pw" placeholder="Enter password" required pattern=".{8,}" required title="8 characters minimum">
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">Password should be minimum 8 characters</div>
                                </div>
                                   
                                    <div class="passwordSi form-group">
                                        <input id="confirm_pw" class="form-control" type="password" name="confirm_pw" placeholder="Confirm password" required oninput='confirm_pw.setCustomValidity(confirm_pw.value != pw.value ? "Passwords do not match." : "")'>
                                       
                                    </div>

                                <div class="usernameSi">              
                                    <p>Do you want to go premium ?</p>
                                </div>
                                <div class="radio">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="premium" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">
                                        Yes !
                                    </label>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-outline-light gobtn" id="submit"><b>GO ! <i class="fa fa-paw animate__animated animate__fadeIn" aria-hidden="true"></i></b></button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

        <!--SCRIPTS-->

        <script>

            function check_pass() {
                if (document.getElementById('pw').value ==
                        document.getElementById('confirm_pw').value) {
                    document.getElementById('submit').disabled = false;
                } else {
                    document.getElementById('submit').disabled = true;
                }
            }
        </script>
          
</body>

</html>

