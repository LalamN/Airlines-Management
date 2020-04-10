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
        .size{
            font-size:35pt;
        }
        .size1{
            font-size:20pt;
            margin-top:20px; 
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
            <li class="nav-item active">
              <a class="nav-link size1 "  href="./home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link  size1"  href="./login.php">Login</a>
            </li>
           
           
           
          </ul>
        </div>
      </nav>

    <!--end of nav-->

     <!--beg of cor-->
     <div>
     <div id="carouselExampleControls" class="carousel slide" style="position: relative; " data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/c1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/c2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/c3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
                  <button class="btn btn-primary btn-lg" style="position: absolute;margin-top: -200px;margin-left: 300px;">
                         <a href="./login.html" class="text-light" style="text-decoration: none;">Book</a>
                  </button>

          </div>
     <!--end of cor-->
      <!--beg of card-->
         <div class="row " style="margin-top: 70px;" >
             <div class="col-sm-6">
                 <center>
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-dark">BEST PRICE GUARANTEED</h5>
                              <p class="card-text">Find a lower price? we'll refund you 200% of the difference.</p>
                             
                            </div>
                          </div>
             </div>
            </center>
             <div class="col-sm-6">
                 <center>
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-dark">24*7 Support</h5>
                              <p class="card-text">We're always here for you - reach use 24 hours a day,7 days a week</p>
                             
                            </div>
                          </div>
             </div>
            </center>

         </div>
      <!--end of card-->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>