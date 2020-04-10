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

    <!--beg of heros-->
         
            <center>
             <h1 style="overflow-y: hidden;">Available Flights</h1>
                 <hr width="15%" color="red">
                </center>    
         

         <div class="row row1">
             <div class="col-sm-4 mt-4">
                 <center>
                    <div class="card" style="width: 18rem;">
                            <img src="./images/airindia.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Air India</h5>
                              <p class="card-text">Welcome to Air India. ... Share flights including all Alliance Air (AI 9000 series) flights.Check-in · Flight Status · Schedule. Promo Code Currently web check-in is ...All the passengers planning to fly with Air India can check the Air India flight schedule online by submitting the place of the origin of the flight...</p>
                              <a href="./booking.php" class="btn btn-primary">Book</a>
                              
                              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Details</a>
                              <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>
                                                Welcome to Air India. ... Share flights including all Alliance Air (AI 9000 series) flights.Check-in · Flight Status · Schedule. Promo Code Currently web check-in is ...All the passengers planning to fly with Air India can check the Air India flight schedule online by submitting the place of the origin of the flight... 
                                          </p>
                                          <h3 style="overflow-y: hidden;">
                                              Prices
                                          </h3><br>
        
                                          <h5 class="float-left">Economy Class:</h5><br><p>4000/- - 5000/-</p><br>
                                          <h5 class="float-left">Bussiness Class:</h5><br><p>10,000/- - 18,000/-</p><br> 
                                          <h5 class="float-left">First Class:</h5><br><p>30,000/- - 40,000/-</p><br>
                                          <h5 class="float-left">Premium Bussiness Class:</h5><br><p>10,000/- - 25,000/-</p><br>

                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </center>      
             </div>
             <div class="col-sm-4 mt-4">
                  <center>

                    <div class="card" style="width: 18rem;">
                            <img src="./images/indigo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Indigo</h5>
                              <p class="card-text">India's No.1 Airline. Best On-Time Performance, Over 1000 Daily Flights. Hurry and Book Now! Hassle Free Booking. Lounge Services. Seat Selection. Excess Baggage. Amenities: 6E Upgrade, Fast forward Service, Travel Assistance, Pre Book IndiCombo.</p>
                              <a href="./booking.php" class="btn btn-primary">Book</a>
                              
                              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#model1">Details</a>
                              <!-- Modal -->
                            <div class="modal fade" id="model1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                                <p>
                                                        India's No.1 Airline. Best On-Time Performance, Over 1000 Daily Flights. Hurry and Book Now! Hassle Free Booking. Lounge Services. Seat Selection. Excess Baggage. Amenities: 6E Upgrade, Fast forward Service, Travel Assistance, Pre Book IndiCombo.
                                                  </p>
                                                  <h3 style="overflow-y: hidden;">
                                                      Prices
                                                  </h3><br>
                
                                                  <h5 class="float-left">Economy Class:</h5><br><p>4000/- - 5000/-</p><br>
                                                  <h5 class="float-left">Bussiness Class:</h5><br><p>10,000/- - 18,000/-</p><br> 
                                                  <h5 class="float-left">First Class:</h5><br><p>30,000/- - 40,000/-</p><br>
                                                  <h5 class="float-left">Premium Bussiness Class:</h5><br><p>10,000/- - 25,000/-</p><br>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </center>     
             </div>
             <div class="col-sm-4 mt-4 ">
                 <center>
                    <div class="card" style="width: 18rem;">
                            <img src="./images/spicejet.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Spicejet</h5>
                              <p class="card-text">Enjoy extra legroom, complimentary meal & beverage, priority checkin & much more. with SpiceMax. Hurry, Book now! Cheap flights. Online Check In. Extra legroom on-board. Luggage Flexibility. cheap flight tickets. Add on services. Priority baggage handling. Loyalty Program.</p>
                              <a href="#" class="btn btn-primary">Book</a>
                             
                              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">Details</a>
                              <!-- Modal -->
                            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                                <p>
                                                        Enjoy extra legroom, complimentary meal & beverage, priority checkin & much more. with SpiceMax. Hurry, Book now! Cheap flights. Online Check In. Extra legroom on-board. Luggage Flexibility. cheap flight tickets. Add on services. Priority baggage handling. Loyalty Program.
                                                  </p>
                                                  <h3 style="overflow-y: hidden;">
                                                      Prices
                                                  </h3><br>
                
                                                  <h5 class="float-left">Economy Class:</h5><br><p>4000/- - 5000/-</p><br>
                                                  <h5 class="float-left">Bussiness Class:</h5><br><p>10,000/- - 18,000/-</p><br> 
                                                  <h5 class="float-left">First Class:</h5><br><p>30,000/- - 40,000/-</p><br>
                                                  <h5 class="float-left">Premium Bussiness Class:</h5><br><p>10,000/- - 25,000/-</p><br>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </center>
             </div>
         </div>

    <!--second card-->
         <div class="row row1">
                <div class="col-sm-4 mt-4">
                    <center>
                       <div class="card" style="width: 18rem;">
                               <img src="./images/vis.jpg" class="card-img-top" alt="...">
                               <div class="card-body">
                                 <h5 class="card-title">Vistara</h5>
                                 <p class="card-text">Select From Multiple Airlines, Cards & Offers to Book Domestic Flights. Hurry. Lowest Prices Guaranteed. Fare Alerts & Best Deals. Limited Time Offer. Goibibo Best Offers. Bank Offers & Cashbacks. Book Today To Pay Less. Cancellation Protection. Best Offers & Discounts.</p>
                                 <a href="./booking.php" class="btn btn-primary">Book</a>
                                 
                                 <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Modal3">Details</a>
                                 <!-- Modal -->
                               <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           </div>
                                           <div class="modal-body">
                                                <p>
                                                        Select From Multiple Airlines, Cards & Offers to Book Domestic Flights. Hurry. Lowest Prices Guaranteed. Fare Alerts & Best Deals. Limited Time Offer. Goibibo Best Offers. Bank Offers & Cashbacks. Book Today To Pay Less. Cancellation Protection. Best Offers & Discounts.
                                                  </p>
                                                  <h3 style="overflow-y: hidden;">
                                                      Prices
                                                  </h3><br>
                
                                                  <h5 class="float-left">Economy Class:</h5><br><p>4000/- - 5000/-</p><br>
                                                  <h5 class="float-left">Bussiness Class:</h5><br><p>10,000/- - 18,000/-</p><br> 
                                                  <h5 class="float-left">First Class:</h5><br><p>30,000/- - 40,000/-</p><br>
                                                  <h5 class="float-left">Premium Bussiness Class:</h5><br><p>10,000/- - 25,000/-</p><br>
                                           </div>
                                           <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                           
                                           </div>
                                       </div>
                                       </div>
                                   </div>
                               </div>
                             </div>
                           </center>      
                </div>
                <div class="col-sm-4 mt-4">
                     <center>
   
                       <div class="card" style="width: 18rem;">
                               <img src="./images/go.jpg" class="card-img-top" alt="...">
                               <div class="card-body">
                                 <h5 class="card-title">Go Air</h5>
                                 <p class="card-text">Book your flight at fares as low as ₹1223*. Additional 10% Off on Mobile App. Fly at Best Prices. Direct Flight. Destinations: Ahmedabad, Bagdogra, Bengaluru, Bhubaneshwar, Chandigarh, Chennai, Delhi, Goa, Guwahati, Hyderabad.</p>
                                 <a href="./booking.php" class="btn btn-primary">Book</a>
                                 
                                 <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Modal4">Details</a>
                                 <!-- Modal -->
                               <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           </div>
                                           <div class="modal-body">
                                                <p>
                                                        Book your flight at fares as low as ₹1223*. Additional 10% Off on Mobile App. Fly at Best Prices. Direct Flight. Destinations: Ahmedabad, Bagdogra, Bengaluru, Bhubaneshwar, Chandigarh, Chennai, Delhi, Goa, Guwahati, Hyderabad.
                                                  </p>
                                                  <h3 style="overflow-y: hidden;">
                                                      Prices
                                                  </h3><br>
                
                                                  <h5 class="float-left">Economy Class:</h5><br><p>4000/- - 5000/-</p><br>
                                                  <h5 class="float-left">Bussiness Class:</h5><br><p>10,000/- - 18,000/-</p><br> 
                                                  <h5 class="float-left">First Class:</h5><br><p>30,000/- - 40,000/-</p><br>
                                                  <h5 class="float-left">Premium Bussiness Class:</h5><br><p>10,000/- - 25,000/-</p><br>
                                           </div>
                                           <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                           
                                           </div>
                                       </div>
                                       </div>
                                   </div>
                               </div>
                             </div>
                           </center>     
                </div>
                <div class="col-sm-4 mt-4 ">
                    <center>
                       <div class="card" style="width: 18rem;">
                               <img src="./images/airasia.jpg" class="card-img-top" alt="...">
                               <div class="card-body">
                                 <h5 class="card-title">AirAsia India</h5>
                                 <p class="card-text">Travel To Awesome Destinations. Book Online & Fly Now! Easy Check-in. Over 150 Destinations. Fly-Thru Service. Inflight Entertainment. AirAsia Official Website. Connecting Flights. No Fuel Surcharge. Destinations: New Delhi, Kuala Lumpur, Bengaluru, Goa, Bangkok.</p>
                                 <a href="./booking.php" class="btn btn-primary">Book</a>
                                
                                 <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Modal5">Details</a>
                                 <!-- Modal -->
                               <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           </div>
                                           <div class="modal-body">
                                                <p>
                                                        Travel To Awesome Destinations. Book Online & Fly Now! Easy Check-in. Over 150 Destinations. Fly-Thru Service. Inflight Entertainment. AirAsia Official Website. Connecting Flights. No Fuel Surcharge. Destinations: New Delhi, Kuala Lumpur, Bengaluru, Goa, Bangkok.
                                                  </p>
                                                  <h3 style="overflow-y: hidden;">
                                                      Prices
                                                  </h3><br>
                
                                                  <h5 class="float-left">Economy Class:</h5><br><p>4000/- - 5000/-</p><br>
                                                  <h5 class="float-left">Bussiness Class:</h5><br><p>10,000/- - 18,000/-</p><br> 
                                                  <h5 class="float-left">First Class:</h5><br><p>30,000/- - 40,000/-</p><br>
                                                  <h5 class="float-left">Premium Bussiness Class:</h5><br><p>10,000/- - 25,000/-</p><br>
                                           </div>
                                           <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                           
                                           </div>
                                       </div>
                                       </div>
                                   </div>
                               </div>
                             </div>
                           </center>
                </div>
            </div>
    <!--end of heros-->
   <br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>