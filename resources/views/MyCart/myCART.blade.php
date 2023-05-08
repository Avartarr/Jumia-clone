<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jumia|Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Mycart.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<header class="header">
    <img src="image jumia2/BAck-to-school-to-strip.gif" class="center">
</header>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid" style="background-color: black">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: white;"><b>JUMIA|ONLINE</b></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('HomeP') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="mailto:sunshineokoye6@gmail.com">Contact us </a></li>
            </ul>
        </div>
    </nav>
    <center>
        <div class="container">
            <h1><span class="glyphicon glyphicon-shopping-cart" style="color: orange;"></span>
                <b>MY<span>CART</span></b>
            </h1>
        </div>
    </center>


    <div class="container">
        <div class="row">

            @if(Session::has('message'))
    <div class="alert alert-className">
       <h1 class="btn btn-primary">{{session('message')}}</h1>
    </div>
@endif


            <table class="table table-sm">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        {{-- <th>Store Qty</th> --}}
                        <th>Price</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($car as $key=>$car)
                        <tr>
                           <td> {{ $key + 1 }}</td>
                            <td>{{ $car->item }}</td>
                            <td>
                                <form action="{{ route('update2', $car->id) }}" class="form-horizontal" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" style="width: 50px" name="qty" value="{{ $car->qty }}">
                                    <button class="btn btn-sm"><span class="glyphicon glyphicon-ok"></span></button>
                                    <input type="number" style="width: 50px" hidden readonly name="sqty" value="{{ $car->sqty }}">

                                </form>
                            </td>


                            {{-- <td>{{ $car->sqty }}</td> --}}
                            <td>{{ $car->price }}</td>
                            <td>{{ $car->price * $car->qty }}</td>
                            <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="text" hidden name="item" value="{{ $car->item }}">
                                <input type="text" hidden name="qty" value="{{ $car->qty }}">
                                <input type="text" hidden name="price" value="{{ $car->price }}">
                                <input type="text" hidden name="cat" value="{{ $car->cat }}">
                                {{-- <input type="text" hidden name="userId" value="{{  }}"> --}}
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
                        <form action="{{ route("order") }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden name="item" value="{{ $car->item }}">
                                <input type="text" hidden name="qty" value="{{ $car->qty }}">
                                <input type="text" hidden name="price" value="{{ $car->price }}">
                                <input type="text" hidden name="cat" value="{{ $car->cat }}">
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>


    <div class="container" style="border: solid 1px orange; width: 600px">
            <div class="form-group" style="margin: 10px">
                <label for="name">Name:</label>

                <input type="text" class="form-control" id="name" style="width: 500px" name="name">
            </div>

            <div class="form-group" style="margin: 10px">
                <label for="name">Phone:</label>

                <input type="number" class="form-control" id="address" style="width: 500px" name="phone">
            </div>
            <div class="text-center" style="margin-bottom: 10px">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>

    </div>
</form>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Available Products</h4>
            </div>
        </div>
    </div>


    <div class="container">
        <table class="table table-striped table-hover">
            <thead>

                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Product Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Description</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($get as $key =>$gt )
                    <form action="{{ route('my_cart') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hide" hidden name="item" value="{{ $gt->item }}">
                        <input type="hide" hidden name="price" value="{{ $gt->price }}">
                        <input type="hide" hidden name="qty" value="1">
                        <input type="hide" hidden name="sqty" value="{{ $gt->qty }}">
                        <input type="hide" hidden name="cat" value="{{ $gt->cat }}">
                        <input type="hide" hidden name="proId" value="{{ $gt->id }}">
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> <img style="width: 40px; height:40px" src="{{ asset('storage/'. $gt->myimage) }}" alt=""> </td>
                            <td>{{ $gt->item }}</td>
                            <td>{{ $gt->price }}</td>
                            <td>{{ $gt->qty }}</td>
                            <td>{{ $gt->desc }}</td>
                            <td>{{ $gt->cat }}</td>
                            <td>
                                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-plus"
                                        style="color: white; margin-right: 15px;"></span>ADD</button>



                            </td>
                        </tr>
                    </form>
                @endforeach


            </tbody>
        </table>

    </div>




    <div class="container text-center"
        style="border: solid 1.5px #ffEbf7; background-color: #ffEbf7; margin-top: 20px;">

        <h1 style="color:red ;"><b> Top Deals | Free Delivery</b></h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                {{-- <img src="image jumia2/30.jpg" style="width: 150px; height: 150px" > --}}
                {{-- <p> NIVEA Perfect and Radiant<br> --}}
                        {{-- $5.00<br><s style="font-size: 12px">$7.00</s></p> --}}

                <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="image" src="image jumia2/30.jpg" style="width: 150px; height: 150px"
                        alt="Submit" />
                    <p> NIVEA Perfect and Radiant<br>
                        $5.00<br><s style="font-size: 12px">$7.00</s></p>
                    <input type="text" hidden name="item" value="NIVEA Perfect and Radiant">
                    <input type="number" hidden name="qty" value="1">
                    <input type="number" hidden name="sqty" value="100">
                    <input type="text" hidden name="price" value="700">
                    <input type="text" hidden name="cat" value="beauty">

                </form>

            </div>
            <div class="col-sm-2">
                {{-- <img src="image jumia2/31.jpg" style="width: 150px; height: 150px"> UMIDIGI A11 (3GB,64GB)<br>
                $700.00<br><s style="font-size: 12px">$950.00</s> --}}

                <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="image" src="image jumia2/31.jpg" style="width: 150px; height: 150px"
                        alt="Submit" />
                    <p>  UMIDIGI A11 (3GB,64GB)<br>
                        $700.00<br><s style="font-size: 12px">$950.00</s></p>
                    <input type="text" hidden name="item" value=" UMIDIGI A11 (3GB,64GB)">
                    <input type="number" hidden name="qty" value="1">
                    <input type="number" hidden name="sqty" value="120">
                    <input type="text" hidden name="price" value=" $700.00">
                    <input type="text" hidden name="cat" value="Device">
                </form>
            </div>
            <div class="col-sm-2">
                {{-- <img src="image jumia2/32.jpg" style="width: 150px; height: 150px">Infinix Smart Phone, 64GB
                <br>$600<br><s style="font-size: 12px">$800.00</s> --}}

                <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="image" src="image jumia2/32.jpg" style="width: 150px; height: 150px"
                    alt="Submit" />
                <p>  Infinix Smart Phone, 64GB
                    <br>$600<br><s style="font-size: 12px">$800.00</s></p>
                <input type="text" hidden name="item" value="Infinix Smart Phone, 64GB">
                <input type="number" hidden name="qty" value="1">
                <input type="text" hidden name="price" value=" $600.00">
                <input type="text" hidden name="cat" value="Device">
            </form>

            </div>
            <div class="col-sm-2">
                {{-- <img src="image jumia2/33.jpg" style="width: 150px; height: 150px">Nestle Milo Milo Hot Chocolate
                <br>$15.00<br><s style="font-size: 12px">$20.00</s> --}}

                <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="image" src="image jumia2/33.jpg" style="width: 150px; height: 150px"
                    alt="Submit" />
                <p> Nestle Milo Milo Hot Chocolate
                    <br>$15.00<br><s style="font-size: 12px">$20.00</s></p>
                <input type="text" hidden name="item" value="Nestle Milo Milo Hot Chocolate">
                <input type="number" hidden name="qty" value="1">
                <input type="text" hidden name="price" value=" $20.00">
                <input type="text" hidden name="cat" value="food">
            </form>
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

    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-sm-2">
                <img src="image jumia2/12.jpg" style="width: 150px; height: 150px">Jameson Irish Whisky<br> $9.00
                <br><s style="font-size: 12px">$15.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/13.jpg" style="width: 150px; height: 150px"> Techno Sonic 1 Fireboy<br> $700.00
                <br><s style="font-size: 12px">$900.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/14.jpg" style="width: 150px; height: 150px"> XIAOMI Poco C40, 4GB<br> $2000.00
                <br><s style="font-size: 12px">$3000.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/15.jpg" style="width: 150px; height: 150px"> Costa Sardin in Vegetable<br>
                $2.00
                <br><s style="font-size: 12px">$3.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/16.jpg" style="width: 150px; height: 150px"> Knoor Chicken Seasoning<br> $1.50
                <br><s style="font-size: 12px">$2.00</s>
            </div>
            <div class="col-sm-2">
                <img src="image jumia2/17.jpg" style="width: 150px; height: 150px"> Fingeprint Touch Blootooth<br>
                $200.00
                <br><s style="font-size: 12px">$250.00</s>
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
                        timelines?<br> How to return product on
                        Jumia?<br> Coperate and bulk purchases? <br>Report a product?<br> Ship your package anywhere in
                        Nigeria </p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">ABOUT JUMIA</p>
                    <p style="color:white ;"> <a href="About.html">About us</a><br> Jumia careers<br> Jumia
                        express<br>
                        Terms and conditions<br> Privacy policy<br> Jumia
                        prime<br> Jumia global<br> Flash sales</p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">MAKE MONEY WITH JUMIA</p>
                    <p style="color:white ;"> Sell on jumia<br> Become a sales consultant<br> Become a jumia vendor
                        service provider<br>Become a
                        logistics service partner <br> Join the Jumia DA academy <br> Join jumia KOL Nigeria</p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">JUMIA INTERNATIONAL</p>
                    <p style="color:white">Algeria<br> Egypt<br> Ghana<br> Kenya<br> Senegal<br> Uganda<br> South
                        Africa
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

</body>



</html>
