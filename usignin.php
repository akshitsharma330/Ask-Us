<?php include("header.php"); ?>

<head>
    <title>Sign In</title>
    <script>
        function validation() {
            var p = document.getElementById("p").value;
            var e = document.getElementById("e").value;
            var patt = /^[a-zA-Z0-9\.\_\-]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
            if (e == "" && p == "") {
                alert("Please fill the email and password");
                return false;
            } else if (!patt.test(e)) {
                alert("Emaill is not correct");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>
    <span id=""></span>
    <div class="row" style="background:#9DC88D; font-family:Mochiy Pop One , sans-serif">  
        <div class="col-md-4 col-md-offset-4">
            <br><br>
            <h2>
                <!--  <?php
                        $x = $_REQUEST['msg'];
                        echo $x;
                        ?>   -->
            </h2>
            <br>
            <h1 style="font-size:40px; font-family:Mochiy Pop One , sans-serif;"><br>User Sign in:</h1><br><i>Don't have account?</i><a href="usignup.php"> Sign up Now</a>
            <br><br><br>
            <?php
            if (isset($_REQUEST['msg'])) {
                echo "<div class='alert alert-danger'>" . $_REQUEST['msg'] . "</div>";
            }
            ?>
            <form action="ucheck.php" method="get">
                <table class="table table-responsive">
                    <tr>
                        
                        <td style="color:black">Email Address <i class="fa fa-graduation-cap" aria-hidden="true"></i></td>
                        <td><input type="text" name="email" id="e" class="form-control" style="border-radius:10px; " placeholder="Enter Email Address"></td>
                    </tr>
                    <tr>
                        <td style="color:black">Password</td>
                        <td><input type="password" name="password" id="p" required="" class="form-control" style="border-radius:10px;" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" onclick="return validation();" class="form-control"></td>
                        <td><input type="reset" name="reset" value="Reset " class="form-control"></td>
                    </tr>
                </table>
            </form>
            <br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    </div>
</body>
<?php include("footer.php"); ?>