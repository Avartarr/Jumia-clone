<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jumia Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<header class="header">
    <img src="image jumia2/BAck-to-school-to-strip.gif" class="center">
</header>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand"  style="color: white;">JUMIA ONLINE</a>
            </div>




            <!-- <i class="fas fa-cart-plus"></i> -->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="{{ asset('About') }}">About</a></li>
                <li><a href="mailto:sunshineokoye6@gmail.com">Contact us </a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><span class="glyphicon glyphicon-shopping-cart" style="color: orange; margin-top: 1em; "
                        data-toggle="modal" data-target="#exampleModal"><b style="color: white; margin-right: 2em;">
                            Cart</b></span></li>
            </ul>
        </div>
    </nav>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        {{-- <th>Category</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($car as $car)


                                    <tr>
                                        <td>{{ $car->item }}</td>
                                        <td>
                                            <form action="{{ route('update2', $car->id) }}" class="form-horizontal" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <input type="number" style="width: 50px" name="qty" value="{{ $car->qty }}">
                                                <button class="btn btn-sm"><span class="glyphicon glyphicon-ok"></span></button>
                                            </form>
                                        </td>
                                        <td>{{ $car->price }}</td>
                                        {{-- <td>{{ $car->cat }}</td> --}}
                                        <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="text" hidden name="item" value="{{ $car->item }}">
                                <input type="text" hidden name="qty" value="{{ $car->qty }}">
                                <input type="text" hidden name="price" value="{{ $car->price }}">
                                <input type="text" hidden name="cat" value="{{ $car->cat }}">


                            </form>
                            <td><span class="glyphicon glyphicon-trash" data-toggle="modal"
                                    data-target="#mymodal{{ $car->id }}"></span></td>
                            <div class="modal fade" id="mymodal{{ $car->id }}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4>Are you sure you want to delete this order?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default" data-dismiss="modal">Cancle</button>
                                            <a href="{{ route('delete2', $car->id) }}"> <button class="btn btn-danger"
                                                    type="submit">Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info"><a href="{{ route("myCART") }}">CHECK OUT</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->


    <!-- side nav start from here -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <li><a href="{{ asset('Supermarket') }}">Supermarket</a></li>
                    <li><a href="{{ asset('Beauty') }}">Health and Beauty</a></li>
                    <li><a href="{{ asset('Office') }}">Home and Office</a></li>
                    <li>Devices</li>
                    <li>Computing</li>
                    <li>Electronics</li>
                    <li>Fashion</li>
                    <li>Baby items</li>
                    <li>Gaming</li>
                    <li>sport goods</li>
                    <li>Automobile</li>
                    <li>Gadgets</li>
                    <li>Skin care</li>

                </div>
            </div>
            <!-- side nar start from here -->


            <div class="col-sm-6 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/slide 1.jpg" style="width:100%; height: 365px; object-fit: cover;">
                        </div>

                        <div class="item">

                            <img src="image jumia2/slide 2.jpg" style="width:100%; height: 365px; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="image jumia2/slide4.png" alt="New york"
                                style="width:100%; height: 365px; object-fit: cover;">
                        </div>
                        <div class="item">

                            <img src="image jumia2/slide5.jpg" style="width:100%; height: 365px; object-fit: cover;">
                        </div>
                        <div class="item">

                            <img src="image jumia2/slide6.gif" style="width:100%; height: 365px; object-fit: cover;">
                        </div>
                        <div class="item">

                            <img src="image jumia2/TH_S-tease345.gif"
                                style="width:100%; height: 365px; object-fit: cover;">
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-sm-3">

                <img src="image jumia2/jumpotron 1.png" style="width:100%; height: 173px; border-radius: 0.5em; "
                    alt="">

                <br>
                <br>

                <img src="image jumia2/jumbotron 2.gif" style="width:100%; height: 173px; border-radius: 0.5em;"
                    alt="">

            </div>
        </div>
    </div>
    <div class="container">
        <h2>TOP SELLING ITEMS</h2>
        <div class="row">
            @foreach ($cat as $cat)

            <div class=col-sm-2>

                 {{-- <a href=""><img src="{{ asset('storage/' . $cat->myimage) }}" style="width: 150px; height: 150px;"></a> {{ $cat->item }}<br>
                {{ $cat->price }}<br><s style="font-size: 12px">$8.00</s> --}}


                <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="image" src="{{ asset('storage/' . $cat->myimage) }}" style="width: 150px; height: 150px"
                    alt="Submit" />
                <p>{{ $cat->item }}<br>
                    {{ $cat->price }}</p>
                <input type="text" hidden name="item" value="{{ $cat->item }}">
                <input type="number" hidden name="qty" value="1">
                <input type="number" hidden name="sqty" value="{{ $cat->qty }}">
                <input type="text" hidden name="price" value="{{ $cat->price }}">
                <input type="text" hidden name="cat" value="{{  $cat->cat }}">

            </form>

            </div>


            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-2 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/clearance-sale.png" style="width: 140px; height: 140px">
                        </div>
                        <div class="item">
                            <img src="image jumia2/computing_220x220.png" style="width: 140px; height: 140px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/computing_220x220.png" style="width: 140px; height: 140px">
                        </div>
                        <div class="item">
                            <img src="image jumia2/halfprice-store_220x220v2.png" style="width: 140px; height: 140px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/halfprice-store_220x220v2.png" style="width: 140px; height: 140px">
                        </div>
                        <div class="item">
                            <img src="image jumia2/health-beauty_220x220.png" style="width: 140px; height: 140px">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-2 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/health-beauty_220x220.png" style="width: 140px; height: 140px">
                        </div>
                        <div class="item">
                            <img src="image jumia2/jumia-cake_220x220.png" style="width: 140px; height: 140px">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-2 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/jumia-cake_220x220.png" style="width: 140px; height: 140px">
                        </div>
                        <div class="item">
                            <img src="image jumia2/phones-tablets_220x220.png" style="width: 140px; height: 140px">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-2 container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="image jumia2/phones-tablets_220x220.png" style="width: 140px; height: 140px">
                        </div>
                        <div class="item">
                            <img src="image jumia2/computing_220x220.png" style="width: 140px; height: 140px">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <center>
        <div class="container">
            <h4 class="time"><b>FLASH SALES</b> <b> <span class="right" id="demo"> </span></b></h4>
        </div>
    </center>

    <!-- countdown start -->

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("dec 5, 2022 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>


    <!-- countdown end -->

    <div class="container">
        <div class="row">
            @foreach ($bea as $bea)


            <div class="col-sm-2">
                <img src="{{ asset('storage/'. $bea->myimage) }}" style="width: 150px; height: 150px"> {{ $bea->item }}<br> {{ $bea->price }}
                <br><s style="font-size: 12px">$15.00</s>
            </div>

            @endforeach
        </div>
    </div>
    <center>
        <div class="containers">
            <p><b>Don't Miss Out On These!!!</b></p>
        </div>
    </center>
    <div class="container">
        <div class="row container" style="margin-bottom: 2rem">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-4">
                            <img src="image jumia2/23.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/20.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/21.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <img src="image jumia2/24.png" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/25.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/23.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-4">
                            <img src="image jumia2/24.png" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/25.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/23.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <img src="image jumia2/23.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/20.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                        <div class="col-sm-4">
                            <img src="image jumia2/21.jpg" style="border-radius:0.5em; width: 360px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center"
        style="border: solid 1.5px #ffEbf7; background-color: #ffEbf7; margin-top: 20px;">

        <h1 style="color:red ;"><b> Top Deals | Free Delivery</b></h1>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="image jumia2/30.jpg" style="width: 150px; height: 150px"> NIVEA Perfect and Radiant<br>
                $5.00<br><s style="font-size: 12px">$7.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/31.jpg" style="width: 150px; height: 150px"> UMIDIGI A11 (3GB,64GB)<br>
                $700.00<br><s style="font-size: 12px">$950.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/32.jpg" style="width: 150px; height: 150px">Infinix Smart Phone, 64GB
                <br>$600<br><s style="font-size: 12px">$800.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/33.jpg" style="width: 150px; height: 150px">Nestle Milo Milo Hot Chocolate
                <br>$15.00<br><s style="font-size: 12px">$20.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/34.jpg" style="width: 150px; height: 150px">Latest Men Sneakers
                -Black<br>$30.00<br><s style="font-size: 12px">$35.00</s>
            </div>
            <div class="col-sm-2" style="margin-bottom: 5em;">
                <img src="image jumia2/35.jpg" style="width: 150px; height: 150px">T&G Wireless Bluetooth Speaker
                <br>$20.00<br><s style="font-size: 12px">$23.00</s>
            </div>
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
                    <input type="text" class="form-control" id="usr" placeholder="Enter E-mail Address"
                        style="width: 50%;">
                    <label class="radio-inline" style="color:white; margin-top: 1em ; margin-bottom: 1em ;"><input
                            type="radio" name="male-female" checked>Male</label>
                    <label class="radio-inline" style="color:white; margin-top: 1em; margin-bottom: 1em ;"><input
                            type="radio" name="male-female">Female</label>
                </div>
                <div class="col-sm-3">
                    <p style="color:white; margin-top: 3em ;"><span class="glyphicon glyphicon-download"></span>
                        DOWNLOAD JUMIA
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
                    <p style="color:white ;">Help center <br> How to shop on Jumia? <br> Delivery options and
                        timelines?<br> How
                        to return product on
                        Jumia?<br> Coperate and bulk purchases? <br>Report a product?<br> Ship your package anywhere in
                        Nigeria </p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">ABOUT JUMIA</p>
                    <p style="color:white ;"> <a href="About.html" style="color: white;">About us</a><br> Jumia
                        careers<br> Jumia
                        express<br> Terms and conditions<br> Privacy policy<br> Jumia
                        prime<br> Jumia global<br> Flash sales</p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">MAKE MONEY WITH JUMIA</p>
                    <p style="color:white ;"> Sell on jumia<br> Become a sales consultant<br> Become a jumia vendor
                        service
                        provider<br>Become a
                        logistics service partner <br> Join the Jumia DA academy <br> Join jumia KOL Nigeria</p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">JUMIA INTERNATIONAL</p>
                    <p style="color:white">Algeria<br> Egypt<br> Ghana<br> Kenya<br> Senegal<br> Uganda<br> South
                        Africa</p>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #343434;">
            <div class="row">

                <!-- Add font awesome icons -->
                <center>
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
