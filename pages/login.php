<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css">

    <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#but_submit").click(function() {

                var username = $("#txt_uname").val();
                var password = $("#txt_pwd").val();

                if (username != "" && password != "") {
                    $.ajax({

                        url: '../databases/checkUser.php',
                        type: 'post',
                        data: {
                            username: username,
                            password: password
                        },
                        success: function(response) {
                            var msg = "";
                            if (response == 1) {
                                window.location = "index.php";
                            } else {
                                msg = "Invalid username and password !";
                            }

                            console.log(msg);
                            $("#message").html(msg);
                        }
                    });
                } else {
                    $("#message").html(msg);
                }
            });

        });
    </script>



</head>

<body onload="erase()">
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(../images/bg-1.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" id='txt_uname' onfocus="this.value=''" required>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                                <div class="form-group" style="margin-top: 2em;">
                                    <input type="password" id='txt_pwd' class="form-control" onfocus="this.value=''" required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>

                                <center>
                                    <b>
                                        <div id="message" class="alert" style="color: red; margin: 0"></div>
                                    </b>
                                </center>

                                <div class="form-group">
                                    <button type="submit" id='but_submit' class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                            </form>



                            <p class="text-center"><a href="#">Forgot Password</a></p>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/main-login.js"></script>

    <script>
        function erase() {
            document.getElementById("txt_uname").value = " ";
            document.getElementById("txt_pwd").value = " ";
        }
    </script>

</body>

</html>