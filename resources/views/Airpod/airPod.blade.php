<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jumia|Airpod</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Mycart.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”> --}}

</head>
<header class="header">
    <img src="image jumia2/BAck-to-school-to-strip.gif" class="center">
</header>

<body style="background-color: whitesmoke">
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

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="jumbotron" style="background-color: white; padding: 10px;">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="image jumia2/1.jpg" style="width: 230px; height: 230px; border-radius: 1em" >
                            <br> <hr>
                            <p style="font-size: 14px">SHARE THIS PRODUCT</p>

                        </div>
                        <div class="col-sm-8">
                            <button style="background-color: rgb(44, 44, 92); font-size: 10px; color:white; margin-right: 37em">Official Store</button> <span class="glyphicon glyphicon-heart-empty"></span>
                            <h4>Qcy T20 Bluetooth Headsets BT 5.3 13mm Driver
                                Brand: Qcy | Similar products from Qcy</h4> <hr>
                                <br> <s><p style="font-size: 14px">$7.00</p></s>
                                <p> <b>$5.00</b></p> <br>
                                <p>In stock</p>
                                <p style="font-size: 14px">Free shipping</p>
                                <hr>
                                <p>Variations Available</p>
                                <button class="btn btn-sm btn-default" style="background-color: black; color: white;">Black</button>
                                <button class="btn btn-sm btn-default" style="background-color: white; color: black;">White</button>
                                <button class="btn btn-sm btn-default" style="background-color: pink; color: white;">Pink</button>
                                <button class="btn btn-sm btn-default" style="background-color: purple; color: white;">Purple</button><br><br>

                                <form action="{{ route('my_cart') }}" class="form-horizontal" method="post"
                                enctype="multipart/form-data">
                                 @csrf
                                <input type="text" hidden name="item" value="Qcy T20 Bluetooth Headsets BT 5.3 13mm Driver Brand">
                                <input type="number" hidden name="qty" value="1">
                                <input type="number" hidden name="sqty" value="120">
                                 <input type="text" hidden name="price" value=" $50.00">
                                 <input type="text" hidden name="cat" value="device">

                                <button class="btn btn-block" style="background-color: orange; color: white">
                                     <span class="glyphicon glyphicon-shopping-cart" style="color: white"></span> Add To Cart</button>
                                    </form>

                                    </div>

                    </div>
                </div>

                <div class="jumbotron" style="background-color: white; padding: 10px">
                    <h4><b>Product Details</b></h4> <hr>
                    <p style="font-size: 13px">Dear Friends, <br>
                        Welcome to QCY Official Store-COD! <br>
                        The whole store sells QCY brand products. QCY is a famous brand in China and mainly sells electronic products  including headets, smart watches, power banks and other products.
                        Please follow our store, we will continue to update the latest products, please look forward to it! <br>
                        Features:</p>
                        <ol>
                            <li> <b> STEREO SOUND:</b> Powered by a tiny 6mm dynamic driver, these wireless earbuds provide crystal clear audio, making them perfect to use at the office or in your car.</li>
                            <li> <b> ERGONOMIC DESIGN:</b> Each individual earphone weighs just 4.8g and is carefully designed to adjust to your ear. The silicone ear tips help to reduce outside noise while improving comfort and stability for the best wearing experience.</li>
                            <li> <b> AUTO PAIRING TECHNOLOGY:</b> Just simply take out 2 earbuds from the charging case, and they will automatically connect with each other.</li>
                            <li> <b> MONO OR STEREO MODE:</b> With true wireless design, either earbuds can be used alone to meet the needs of different scenes such as listening to music, driving and talking. Monaural mode, binaural mode, sharing mode, all are perfect.</li>
                            <li> <b> EXCLUSIVE APP:</b> Just build T1C in your style. With QCY APP, you can customize controls, find earbuds, Set EQ, OTA update, and more interesting functions. (Need Android 6/ iOS 11 or Above) </li>
                        </ol>
                        <h5>Note: <br> After the earphone is normally connected to the mobile phone, if it cannot connect to the QCY APP, this is because the mobile phone system language is not English. Please switch the mobile phone system language to English, and then reconnect to the QCY APP.</h5>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="jumbotron" style="background-color: white; padding: 10px">
                   <h5> DELIVERY & RETURNS</h5><hr>
                  <p style="font-size: 12px"><b>JUMIA <span class="glyphicon glyphicon-send" style="color: orange">EXPRESS</span></b></p>
                  <p style="font-size: 12px">Free delivery on thousands of products in Lagos, Ibadan & Abuja</p><hr>
                  <h5> <b>Choose Location</b> </h5>
                  <select name="" id="" class="form-control">
                    <option value="LAGOS">LAGOS</option>
                    <option value="ABUJA">ABUJA</option>
                    <option value="ANAMBRA">ANAMBRA</option>
                    <option value="DELTA">DELTA</option>
                    <option value="RIVERS">RIVERS</option>
                  </select> <hr>
                  <h5> <span class="glyphicon glyphicon-share"></span> <b>Return Policy</b></h5>
                  <h5>Free return within 15 days for Official Store items and 7 days for other eligible items.</h5> <hr>
                  <h5><i class="glyphicon glyphicon-certificate"></i> <b>Warranty</b> </h5>
                  <h5>1 Year Warranty</h5>
                </div>
                <div class="jumbotron" style="background-color: white; padding: 10px">
                    <h5><b>SELLER INFORMATION</b></h5> <hr>
                    <h5>QCY Official Store- COD</h5>
                    <h5>75% Seller Score</h5>
                    <h5>245 Followers <button class="btn btn-sm" style="background-color: orange; color: white; margin-left: 10em">FOLLOW</button></h5> <hr>
                    <h5> <b>SELLER PERFORMANCE <span class="glyphicon glyphicon-info-sign"></span></b> </h5>
                    <h5><span class="glyphicon glyphicon-star-empty" style="color:green"></span> Order Fulfillment Rate: Excellent</h5>
                    <h5><span class="glyphicon glyphicon-remove-sign" style="color:red"></span> Quality Score: Poor</h5>
                    <h5><span class="glyphicon glyphicon-star-empty" style="color:green"></span> Customer Rating: Good</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron" style="padding: 15px">
            <div class="row">
                <h3>SIMILAR PRODUCTS</h3>
                <div class="col-sm-3">
                    <img src="image jumia2/3.jpg" style="width: 200px; height: 200px">
                </div>
                <div class="col-sm-3">
                    <img src="image jumia2/13.jpg" style="width: 200px; height: 200px"><br> Techno Sonic 1 Fireboy<br> $700.00
                <br><s style="font-size: 12px">$900.00</s>
                </div>
                <div class="col-sm-3">
                    <img src="image jumia2/17.jpg" style="width: 200px; height: 200px"><br> Fingeprint Touch Blootooth<br>
                $200.00
                <br><s style="font-size: 12px">$250.00</s>
                </div>
                <div class="col-sm-3">
                    <img src="image jumia2/35.jpg" style="width: 200px; height: 200px"><br> T&G Wireless Bluetooth Speaker
                    <br>$20.00<br><s style="font-size: 12px">$23.00</s>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
