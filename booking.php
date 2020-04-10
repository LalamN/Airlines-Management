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
              margin: 0px;
              padding: 0px;
              overflow-x: hidden;
        }
        .size{
            font-size:35pt;
        }
        .size1{
            font-size:20pt;
            margin-top:20px; 
        }
        .row1{
            margin-left: 25px;
        }
        @import url('https://fonts.googleapis.com/css?family=Roboto');
 
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Roboto', sans-serif;
}
 
body{
  background: url(./images/flight1.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}
 
.wrapper{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;

  padding: 0 20px;
}
 
.contact-form{
  display: flex;
  max-width: 550px;
  margin: 0 auto;
  background: rgba(0,0,0,0.8);
  padding: 30px;

  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
 
.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}
 
.input-fields,
.msg{
  width: 48%;
}
 
.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #c5ecfd;
  padding: 10px;
  color: #c5ecfd;
  width: 100%;

}
 
.msg textarea{
  height: 212px;
}
 
::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
}
 
.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}
 
@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
}
      
    
    </style>
</head>
<body>
    <!--beg of nav-->
    <nav class="navbar navbar-expand-lg navbar-sticky-top navbar-light" style="color: white;">
        <a class="navbar-brand  mt-2 size "href="home.html">Airlines</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="color: white;"id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link size1 "  href="./home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  size1"  href="./book.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  size1" href="./cancel.php">Cancel</a>
           </li>
           <li class="nav-item">
                <a class="nav-link  size1" href="./home.php">Logout</a>
             </li>
           
          </ul>
        </div>
      </nav>

    <!--end of nav-->
        <!--beg of the form-->
              
       
            
        <div class="wrapper " style="height: auto;">
            <form action="">
          <div class="contact-form">
            <div class="input-fields">
              <input type="text" class="input" name="name"placeholder="Name">
              <input type="Email" class="input" name="email" placeholder="Email Address">
             <input type="tel" name="number" id="" class="input" placeholder="Phone No">
              <input type="text" class="input" name="from"placeholder="From">
              <input type="text" class="input" name="to"placeholder="To">
              <select name="class" class="input">
                    <option  class="input" type="button" id="one" value="Economy" onclick="f1();">Economy</option>
                    <option   class="input" type="button" id="two" value="Bussiness Class">Bussiness class</option>
                    <option  class="input" type="button" id="three"value="First class">First class</option>
                    <option  class="input" type="button" id="four" value="premium Bussiness class">premium Bussiness class</option>
                  </select>
                  
            </div>
            <div class=" input-fields">

                <select name="price" class="input" value="Price" placeholder="Prices">
                    <option  class="input" type="button" id="one" value="Economy">4000/- - 6000/-</option>
                    <option   class="input" type="button" id="two" value="Bussiness Class">10,000/- - 18,000/-</option>
                    <option  class="input" type="button" id="three"value="First class">30,00/- - 40,000/-</option>
                    <option  class="input" type="button" id="four" value="premium Bussiness class">10,000/- - 28,000/-</option>
                  </select>
                  <input type="text" class="input" name="name"placeholder="FlightName/FlightNo">
                  <input type="date" class="input" name="name"placeholder="Date">

                    <input type="number" class="input" id="adults"name="adults"placeholder="Adults">
                    <input type="number" class="input" id="child"name="child"placeholder="Childs">
                <a href="./payment.php">
                    <div class="btn">Make Payment</div>
                </a>
            </div>
          </div>
        </form>
        </div>	
        
           <script>
            
           
           
           </script>
      
        


        <!--end of the form-->
         <div>

         </div>
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>