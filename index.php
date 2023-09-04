<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="container bg-light col-lg-4 rounded">
        <form method="post">
            <h1 class="text-center">Register</h1>
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
            <p class="text-danger d-none" id="lnameV">Pls Enter Your Last name.</p>

            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
            <p class="text-danger d-none" id="fnameV">Pls Enter Your First name.</p>

            <label for="mname">Middle Name</label>
            <input type="text" class="form-control" id="mname" name="mname">
            <p class="text-danger d-none" id="mnameV">Pls Enter Your Middle name.</p>

            <label for="username">username</label>
            <input type="text" class="form-control" id="username" name="username">
            <p class="text-danger d-none" id="usernameV">Pls Enter Your username.</p>

            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password"><br>
            <p class="text-danger d-none" id="passwordV">Pls Enter Your password.</p>
            <input type="button" value="Register" class="form-control" id="submit"><br>
        </form>
    </div>
    <script>
        $("#submit").click(function(){
            if($("#lname").val() == ""){
                $("#lnameV").removeClass("d-none");
                
            }else{
                $("#lnameV").addClass("d-none");
            }

            if($("#fname").val() == ""){
                $("#fnameV").removeClass("d-none");
                
            }else{
                $("#nameV").addClass("d-none");
            }
            if($("#mname").val() == ""){
                $("#mnameV").removeClass("d-none");
                
            }else{
                $("#mnameV").addClass("d-none");
            }

            if($("#username").val() == ""){
                $("#usernameV").removeClass("d-none");
                
            }else{
                $("#usernameV").addClass("d-none");
            }
        })
    </script>
</body>
</html>