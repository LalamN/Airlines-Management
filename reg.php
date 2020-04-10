<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Airlines</title>
    <style>
        *{
            box-sizing: border-box;

        }
        body{
            background-image: url("./images/f2.jpg");
             background-repeat: no-repeat;
             background-size: cover;
        }
        .size{
            font-size:35pt;
        }
        .size1{
            font-size:20pt;
            margin-top:20px; 
        }
        .bor{
            background-color: black;
             border-top-left-radius:20px;
             border-top-right-radius:10px;
             border-bottom-right-radius: 20px;
             border-bottom-left-radius: 10px;
             color: black;
             margin: 50px;
             width: 40%;
             margin: 0px auto;
             height: 100%;
            
             margin-top: 200px;
        }
        .form1{
            border-radius: 10px;
        }
        @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(./images/flight1.jpg) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}

    
    </style>
</head>
<body>
       
    
    <!--login from-->
    <div class="" style="height: 500px;">
                
        <center>
        <form action="">
            <br><br><br>
            <div class="login-box mt-5">
             <h1 style="color: white">Login</h1>
             <div class="textbox">
               <i class="fas fa-user"></i>
               <input type="text"  style="color:white;" name="username" placeholder="Username" required>
              
             </div>
             <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="email"style="color:white;"  name="email" placeholder="Email" required>
               
              </div>
             <div class="textbox">
               <i class="fas fa-lock"></i>
               <input type="password"style="color:white;"  placeholder="Password" required>
             </div>
             <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" style="color:white;" placeholder="Re-Password" required>
              </div>
          
            <a href="./book.php">
             <input type="button" style="color:white;" class="btn"  value="Registor">
            </a>
           </div>
         <br>
        
        </form>
     </center>
    </div>
    <!--end of login form-->
    <br><br><br>
   <script>
      function f2(){
          alert("Welcome to Airlines...\n\nWe are happy to share our resources with you!!!");
      }
   
   </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>