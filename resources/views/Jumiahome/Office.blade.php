<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jumia Office</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="office.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<header class="header">
  <img src="image jumia2/BAck-to-school-to-strip.gif" class="center">
</header>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: white;"><b>JUMIA|ONLINE</b></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ asset('HomeP') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="mailto:sunshineokoye6@gmail.com">Contact us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><span class="glyphicon glyphicon-shopping-cart" style="color: orange; margin-top: 1em; " data-toggle="modal"
          data-target="#exampleModal"><b style="color: white; margin-right: 2em;"> Cart</b></span></li>
      </ul>
    </div>
  </nav>

  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 1187px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-shopping-cart"
              style="color: orange;"></span><b> CART</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Item</th>
                    <th>Qauntity</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Vintage Shirt</td>
                    <td>2</td>
                    <td>$60.00</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Fingeprint Touch Bluetooth</td>
                    <td>4</td>
                    <td>$20.00</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Smart Phone Watch water resistance</td>
                    <td>3</td>
                    <td>$3,000.00</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>NIVEA Perfect and Radiant</td>
                    <td>5</td>
                    <td>$25.00</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Jameson Irish Whisky</td>
                    <td>1</td>
                    <td>$9.00</td>
                  </tr>

                </tbody>
                <tfoot>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Total= $3,114.00</td>
                </tfoot>
              </table>

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info"><a href="My Cart.html">CHECK OUT</a></button>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- end of modal -->


  <div class="container">
    <center>
      <img src="image jumia2/home.jpg">
    </center>
  </div>
  <center>
    <div class="containers">
      <p class="text-left" style="margin-left: 5px">Limited Stock Deals</p>
    </div>
  </center>
  <div class="container">
    <div class="row">
        @foreach ($off as $off )


      <div class="col-sm-2">
        <img src="{{ asset('storage/'. $off->myimage ) }}" style="height: 190px; width: 185px; object-fit:cover">
        <p>{{ $off->item }}<br>{{ $off->price }}</p>
      </div>
      @endforeach
      {{-- <div class="col-sm-2">
        <img src="image jumia2/h2.jpg" style="height: 190px; width: 185px; object-fit:cover">
        <p>Skyrun Four Burners<br> ₦63,490</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/h3.jpg" style="height: 190px; width: 185px; object-fit:cover">
        <p>Scanfrost SFL 450 ECO <br>₦171,470</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/h4.jpg" style="height: 190px; width: 185px; object-fit:cover">
        <p>Quinix 5000watts German Blender<br>₦17,600</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/h5.jpg" style="height: 190px; width: 185px; object-fit:cover">
        <p>Nexus Portable Air Cooler<br>₦4,992</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/h6.jpg" style="height: 190px; width: 185px; object-fit:cover">
        <p>SmartC 18inches Velocity<br>₦10,400</p>
      </div> --}}
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img src="image jumia2/h7.png" style="border-radius: 0.5em;">
      </div>
      <div class="col-sm-4">
        <img src="image jumia2/h8.png" style="border-radius: 0.5em;">
      </div>
      <div class="col-sm-4">
        <img src="image jumia2/h9.png" style="border-radius: 0.5em;">
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <center><img src="image jumia2/hh11.jpg" style="border-radius: 0.5em;"></center>
  </div>
  <center>
    <div class="containers">
      <p class="text-left" style="margin-left: 5px">Warranty Guaranteed</p>
    </div>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <img src="image jumia2/hh12.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Hisense 6KG Washing Machine <br>₦197,800</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh13.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Jumia Medium Jumia<br> ₦3,450</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh14.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p> Silver Crest 5000watts ₦18,655</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh15.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Toothpaste Dispenser and Tooth Brush<br>₦2,900</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh16.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Silver crest German Industrial Blender<br>₦15,160</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh17.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Power Deluxe 1.5L<br>₦9,510</p>
      </div>
    </div>
  </div>
  <center>
    <div class="containers">
      <p class="text-left" style="margin-left: 5px">For Your Home</p>
    </div>
  </center>
  <div class="container" style="margin-bottom: 40px;">
    <div class="row">
      <div class="col-sm-2">
        <img src="image jumia2/hh18.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Surveillance Camera- WIFI<br>₦16,900</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh19.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>64 LED Light 3 Colors<br>₦8,500</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh20.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>6 Speed Massage Gun<br>₦10,000</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh21.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>7 Mini Digital Automated Egg Incubator<br>₦8,700</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh22.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>46pcs Crochet Hooks<br>₦2,800</p>
      </div>
      <div class="col-sm-2">
        <img src="image jumia2/hh23.jpg" style="height: 190px; width: 185px; object-fit:cover; margin-top: 5px">
        <p>Mosquito Net<br>₦3,000</p>
      </div>
    </div>
  </div>

<!-- footerstart -->

  <footer>
    <div class="container-fluid" style="background-color: black;">

      <div class="row">
        <div class="col-sm-3">
          <h1 style="color:orange ;"><b>JUMIA|ONLINE</b></h1>
        </div>


        <div class="col-sm-6">
          <p style="color:white; margin-top: 3em ;">New to Jumia?<br>
            Subscribe to our newsletter to get updates on our latest offers!</b></p>
          <input type="text" class="form-control" id="usr" placeholder="Enter E-mail Address" style="width: 50%;">
          <label class="radio-inline" style="color:white; margin-top: 1em ; margin-bottom: 1em ;"><input type="radio"
              name="male-female" checked>Male</label>
          <label class="radio-inline" style="color:white; margin-top: 1em; margin-bottom: 1em ;"><input type="radio"
              name="male-female">Female</label>
        </div>
        <div class="col-sm-3">
          <p style="color:white; margin-top: 3em ;"><span class="glyphicon glyphicon-download"></span> DOWNLOAD JUMIA
            FREE APP<br>
            Get access to exclusive offers!</li>
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background-color: #343434;">
      <div class="row" style="margin: 10px;">
        <div class="col-sm-3">
          <p style="color:white ; margin-top: 3em ;">LET US HELP YOU</p>
          <p style="color:white ;">Help center <br> How to shop on Jumia? <br> Delivery options and timelines?<br> How to
            return product on
            Jumia?<br> Coperate and bulk purchases? <br>Report a product?<br> Ship your package anywhere in Nigeria </p>
        </div>
        <div class="col-sm-3">
          <p style="color:white ; margin-top: 3em ;">ABOUT JUMIA</p>
          <p style="color:white ;"> <a href="About.html">About us</a><br> Jumia careers<br> Jumia express<br> Terms and
            conditions<br> Privacy policy<br> Jumia
            prime<br> Jumia global<br> Flash sales</p>
        </div>
        <div class="col-sm-3">
          <p style="color:white ; margin-top: 3em ;">MAKE MONEY WITH JUMIA</p>
          <p style="color:white ;"> Sell on jumia<br> Become a sales consultant<br> Become a jumia vendor service
            provider<br>Become a
            logistics service partner <br> Join the Jumia DA academy <br> Join jumia KOL Nigeria</p>
        </div>
        <div class="col-sm-3">
          <p style="color:white ; margin-top: 3em ;">JUMIA INTERNATIONAL</p>
          <p style="color:white">Algeria<br> Egypt<br> Ghana<br> Kenya<br> Senegal<br> Uganda<br> South Africa</p>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background-color: #343434;">
      <div class="row">
        <center>
          <!-- Add font awesome icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="google.com" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
          <a href="#" class="fa fa-instagram"></a>

        </center>

      </div>
    </div>
  </footer>

</body>




</html>
