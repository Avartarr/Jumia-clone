<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jumia|Beauty</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Beauty.css') }}">
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
                <!-- <li><a href="#">Contact us </a></li> -->
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
        <div class="modal-dialog" role="document" style="width: 500px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                           <b> Add</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="{{ route('Bstore') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" style="width: 400px;">
                                    <label class="control-label col-sm-2" for="item">Item:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="item" name="item">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 400px;">
                                    <label class="control-label col-sm-2" for="item">Quantity:</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="qty" name="qty">
                                    </div>
                                </div>
                                <div class="form-group" style="width: 400px;">
                                    <label class="control-label col-sm-2" for="price">Price:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                </div>


                                <div class="form-group" style="width: 400px;">
                                    <label class="control-label col-sm-2" for="image">
                                        Image:</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile"
                                                name="image">

                                        </div>
                                    </div>
                                </div>

                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info">Add</button>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end of modal -->

    <center>
        <div class="container"><img src="image jumia2/beauty.jpg"></div>
    </center>
    <center>
        <div class="containers">
            <p class="text-left" style="margin-left: 5px">Limited Stock Deals</p>
        </div>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"><img src="image jumia2/b8.jpg"
                    style="height: 220px; width: 200px; object-fit:cover; margin-top: 5px">
                <p>NIVEA Perfect and Radiant<br> ₦3,410.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/b1.jpg"
                    style="height: 220px; width: 200px; object-fit:cover; margin-top: 5px">
                <p>NIVEA Perfect and Radiant<br> ₦8,000.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/b3.jpg"
                    style="height: 220px; width: 180px; object-fit:cover; margin-top: 5px">
                <p>MOLPED molped Ultra<br> ₦445.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/b4.jpg"
                    style="height: 220px; width: 190px; object-fit:cover; margin-top: 5px">
                <p>KIKI New Gain LED Display Clipper<br>₦7,499.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/b6.jpg"
                    style="height: 220px; width: 190px; object-fit:cover; margin-top: 5px">
                <p>HANDAIYAN 6pc<br>₦2,500</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/b1.jpg"
                    style="height: 220px; width: 180px; object-fit:cover; margin-top: 5px">
                <p>NIVEA Perfect and Radiant<br> ₦8,000.00</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"><img src="image jumia2/b12.png"></div>
            <div class="col-sm-4"><img src="image jumia2/b13.png"></div>
            <div class="col-sm-4"><img src="image jumia2/b14.png"></div>

        </div>
    </div>
    <center>
        <div class="containers">
            <p class="text-left" style="margin-left: 5px">Top Deals | Beauty Routine</p>
        </div>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"><img src="image jumia2/bb1.jpg"
                    style="height: 220px; width: 200px; object-fit:cover">
                <p>NOVA 3 in 1 Hair Straightner<br> ₦6,999.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb2.jpg"
                    style="height: 220px; width: 200px; object-fit:cover">
                <p>Elf Cover Everything Concealer<br> ₦2,100.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb3.jpg"
                    style="height: 220px; width: 180px; object-fit:cover">
                <p>Hair NOW NOW grow<br> ₦2,499.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/AAA.jpg"
                    style="height: 220px; width: 190px; object-fit:cover">
                <p>Hair Straightner<br>₦7,350.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb5.jpg"
                    style="height: 220px; width: 190px; object-fit:cover">
                <p>Elf Highlighter Glow<br>₦1,500</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb6.jpg"
                    style="height: 220px; width: 180px; object-fit:cover">
                <p>Simply Straight Hair Brusht<br> ₦8,000.00</p>
            </div>
        </div>
    </div>
    <center>
        <div class="containers">
            <p class="text-left" style="margin-left: 5px">Clearance Deals</p>
        </div>
    </center>
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-sm-2"><img src="image jumia2/bb7.jpg"
                    style="height: 200px; width: 200px; object-fit:cover">
                <p>NIVEA Perfect and Radiant<br> ₦3,410.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb12.jpg"
                    style="height: 200px; width: 200px; object-fit:cover">
                <p>NIVEA Perfect and Radiant<br> ₦8,000.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb11.jpg"
                    style="height: 200px; width: 180px; object-fit:cover">
                <p>MOLPED molped Ultra<br> ₦445.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb10.jpg"
                    style="height: 200px; width: 190px; object-fit:cover">
                <p>KIKI New Gain LED Display Clipper<br>₦7,499.00</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb9.jpg"
                    style="height: 200px; width: 190px; object-fit:cover">
                <p>HANDAIYAN 6pc<br>₦2,500</p>
            </div>
            <div class="col-sm-2"><img src="image jumia2/bb8.jpg"
                    style="height: 200px; width: 180px; object-fit:cover">
                <p>NIVEA Perfect and Radiant<br> ₦8,000.00</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($bea as $bea)


            <div class="col-sm-2">
                <img src="{{ asset('storage/'. $bea->myimage) }}" style="width: 200px; height: 200px"> {{ $bea->item }}<br> {{ $bea->price }}
                <br>
            </div>

            @endforeach
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-sm-2">

            </div>
        </div>
    </div> --}}

</body>

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
                <p style="color:white; margin-top: 3em ;"><span class="glyphicon glyphicon-download"></span> DOWNLOAD
                    JUMIA
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
                    timelines?<br> How to return product on
                    Jumia?<br> Coperate and bulk purchases? <br>Report a product?<br> Ship your package anywhere in
                    Nigeria </p>
            </div>
            <div class="col-sm-3">
                <p style="color:white ; margin-top: 3em ;">ABOUT JUMIA</p>
                <p style="color:white ;"> <a href="About.html">About us</a><br> Jumia careers<br> Jumia express<br>
                    Terms and conditions<br> Privacy policy<br> Jumia
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
                <p style="color:white">Algeria<br> Egypt<br> Ghana<br> Kenya<br> Senegal<br> Uganda<br> South Africa
                </p>
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


</html>
