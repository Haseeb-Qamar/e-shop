<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="bs/js/bootstrap.js">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="bgcontainer">
    <div class="container">
       
        <div class="row">
            <div class="col-sm-12">
                <div class="loginbox">
<!--                   <h1 class="text-center" id="title">E - SHOP</h1>-->
                    <div class="fields">
                        <h1 class="text-center">Login</h1>
                        <form action="">
                        <span class="headings">User Name</span>
                        <input type="text" required>
                        <span class="headings">Password</span>
                        <input type="password" required>
                        <input type="submit" class="btn btn-outline-success" value="Login" id="signupbtn">
                        </form>
                    <div class="text-center"><a id="btn-signup"  href="#">Create an account</a></div>  
                    </div>
                      
                </div>
                <div class="signupbox">
<!--                   <h1 class="text-center" id="title">E - SHOP</h1>-->
                    <div class="fields">
                        <h1 class="text-center">Sign-Up</h1>
                        <form action="">
                        <span class="headings" >First Name</span>
                        <input type="text" onfocusout="test(this.value)" required>
                        <span class="headings">Last Name</span>
                        <input type="text" onfocusout="test(this.value)" required>
                        <span class="headings">Email</span>
                        <input type="text" required>
                        <span class="headings">Password</span>
                        <input type="password" required>
                        <span class="headings">User Name</span>
                        <input type="text" disabled> <!-- DOM 7 -->
                        <input type="submit" class="btn btn-outline-success" value="Sign-Up" id="loginbtn">
                        </form>
                    <div class="text-center"><a id="btn-login"  href="#">Login</a></div> 
                    </div>
                      
                </div>
                
                
            </div>
        </div>
    </div>   
   </div>
    <script>
        function test(x){
            var query = document.querySelectorAll("input");
            var fn = query[3].value;
            var ln = query[4].value;
            if(fn === "" || ln === ""){
               return;
            }else{
                
                username = fn.concat(ln);
            query[7].value=username; 
            }
            
            
           
        }
        $("#btn-signup").on("click", function(){
            $(".loginbox").toggle(1000);
            $(".signupbox").toggle(1000);
            $("#btn-signup").toggle(1000);
            return false;
        });
        $("#btn-login").on("click", function(){
            $(".loginbox").toggle(1000);
            $(".signupbox").toggle(1000);
            $("#btn-signup").toggle(1000);
            return false;
        })
    </script>
</body>
</html>