<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jumia|Supermarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="supermarket.css">

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
        <li class="active"><a href="{{ route('HomeP') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="mailto:sunshineokoye6@gmaail.com">Contact us </a></li>
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

    <center> <img src="image jumia2/spm.jpg">

    </center>

  </div>
  <center>
    <div class="containers">
      <p class="text-center"><b>GROCERY CATEGORIES</b></p>
    </div>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-sm-2"><img src="image jumia2/s1.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Food Cupboard</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s2.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Breakfast</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s3.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Drinks</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s4.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Household</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s5.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Snacks</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s6.png" style="height: 145px; width: 166px; object-fit: cover;">
        <p>Packaged Food</p>
      </div>
    </div>
  </div>

  <div class="container" style="padding-bottom:40px ;">
    <div class="row">
      <div class="col-sm-2"><img src="image jumia2/s7.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Paper and Plastic</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s8.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Cooking and Baking</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s9.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Spices</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s10.png" style="height: 145px; width: 170px; object-fit: cover;">
        <P>Grains and Pasta</P>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s11.png" style="height: 145px; width: 170px; object-fit: cover;">
        <p>Salad Dressing</p>
      </div>
      <div class="col-sm-2"><img src="image jumia2/s12.png" style="height: 145px; width: 166px; object-fit: cover;">
        <p>Diary and Spreads</p>
      </div>
    </div>
  </div>

  <center>
    <div class="containers">
      <p class="text-center"><b>FOOD AND DRINKS</b></p>
    </div>
  </center>

  <div class="container">
    <div class="row">
        @foreach ($food as $food)

        <div class="col-sm-2">
            <img src="{{ asset('storage/'. $food->myimage) }}" style="height: 145px; width: 166px; object-fit: cover;">
            <p>{{ $food->item }}</p><p>{{ $food->price }}</p>
        </div>

        @endforeach
    </div>
  </div>

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
          <p style="color:white ;">Help center <br> How to shop on Jumia? <br> Delivery options and timelines?<br> How
            to return product on
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
    </div>
  </footer>



</body>




</html>
