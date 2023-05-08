<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('productlist.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<header class="header">
    <img src="image jumia2/BAck-to-school-to-strip.gif" class="center">
</header>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1><b>JUMIA|ONLINE</b></h1>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2" style="margin-top: 10px">
                <a href="{{ asset('myCART') }}"><h4><span class="glyphicon glyphicon-shopping-cart">CART</span>
                </h4></a>
            </div>
        </div>
    </div>


    <div class="container">

        <h2>Product List</h2>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>List of Available Products on Jumia</h3>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal3">
                    <span class="glyphicon glyphicon-plus" style="color: white; margin-right: 2px;"></span>Add
                    Product
                </button>
            </div>

            <!-- add modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="width: 900px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b> Add Product</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container" style="width: 60%;">
                                <form class="form-horizontal" action="{{ route('Store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="item">Item:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="item" name="item">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Price">Price: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="price" name="price">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="qty">QTY:</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="qty" name="qty">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Price">Description: </label>
                                        <div class="col-sm-10">
                                            <textarea id="" rows="4" cols="40" name="desc"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-2" for="Category">Category:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" required name="cat">
                                                <option value="" disabled>Select an option</option>
                                                <option value="beauty">beauty and hair</option>
                                                <option value="food">food and drinks</option>
                                                <option value="fashion">fashion</option>
                                                <option value="device">device</option>
                                                <option value="gadgets">gadgets</option>
                                                <option value="automobile">Automobile</option>
                                                <option value="Home Appliances">Home App</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="image">
                                            Image:</label>
                                        <div class="col-sm-10">
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                    name="myimage">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-info">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>



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
                @foreach ($get as $key => $gt)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img style="width: 40px; height:40px;" src="{{ asset('storage/' . $gt->myimage) }}"
                                alt=""></td>
                        <td>{{ $gt->item }}</td>
                        <td>{{ $gt->price }}</td>
                        <td>{{ $gt->qty }}</td>
                        <td>{{ $gt->desc }}</td>
                        <td>{{ $gt->cat }}</td>

                        <td>
                            <span class="glyphicon glyphicon-th-list" style="color: green; margin-right: 15px;"
                                data-toggle="modal" data-target="#exampleModal{{ $gt->id }}"></span>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $gt->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="width: 55%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <b> Update Product</b>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="container" style="width: 50%;">
                                                <form class="form-horizontal" action="{{ route('update', $gt->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2"
                                                            for="item">Item:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="item"
                                                                name="item" value="{{ $gt->item }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="Price">Price:
                                                        </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="price"
                                                                name="price" value="{{ $gt->price }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2"
                                                            for="qty">QTY:</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" id="qty"
                                                                name="qty" value="{{ $gt->qty }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2"
                                                            for="Price">Description: </label>
                                                        <div class="col-sm-10">
                                                            <textarea id="" rows="4" cols="40" name="desc" value="">{{ $gt->desc }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">

                                                        <label class="control-label col-sm-2"
                                                            for="Category">Category:</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" required name="cat">
                                                                <option value="{{ $gt->cat }}">
                                                                    {{ $gt->cat }}</option>
                                                                <option value="beauty">beauty and hair</option>
                                                                <option value="food">food and drinks</option>
                                                                <option value="fashion">fashion</option>
                                                                <option value="device">device</option>
                                                                <option value="gadgets">gadgets</option>
                                                                <option value="automobile">Automobile</option>
                                                                <option value="Home Appliances">Home Appliances
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="image">
                                                            Image:</label>
                                                        <div class="col-sm-10">
                                                            <div class="custom-file mb-3">
                                                                <input type="file" class="custom-file-input"
                                                                    id="customFile" name="myimage"
                                                                    value="">
                                                                 <input type="" name="myimage" class value="{{ $gt->myimage }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-info">Update</button>
                                                    </div>
                                                </form>
                                            </div>




                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- end of modal -->

                            <span data-toggle="modal" data-target="#exampleModal2{{ $gt->id }}"
                                class="glyphicon glyphicon-trash" style="color: red;"></span>

                            <!-- 2nd modal -->
                            <div class="modal fade" id="exampleModal2{{ $gt->id }}" role="dialog">

                                <div class="modal-dialog" role="document" style="width: 35%;">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <p>Are you sure you want to delete?</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">NO</button>
                                            <a href="{{ route('delete', $gt->id) }}"><button type="button"
                                                    class="btn btn-info">Yes</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>









    <footer>
        <div class="container-fluid" style="background-color: black;">

            <div class="row">
                <div class="col-sm-3">
                    <h1 style="color:white ;"><b>JUMIA|ONLINE</b></h1>
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
            <div class="row">
                <div class="col-sm-3" style="margin-left: 20PX;">
                    <p style="color:white ; margin-top: 3em; margin-left:3px">LET US HELP YOU</p>
                    <p style="color:white ; margin-left:3px">Help center <br> How to shop on Jumia? <br> Delivery
                        options and
                        timelines?<br> How to return product on
                        Jumia?<br> Coperate and bulk purchases? <br>Report a product?<br> Ship your package
                        anywhere in Nigeria </p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">ABOUT JUMIA</p>
                    <p style="color:white ;"> <a href="About.html" style="color: white;">About us</a><br> Jumia
                        careers<br> Jumia express<br> Terms and conditions<br> Privacy policy<br> Jumia
                        prime<br> Jumia global<br> Flash sales</p>
                </div>
                <div class="col-sm-2">
                    <p style="color:white ; margin-top: 3em ;">MAKE MONEY WITH JUMIA</p>
                    <p style="color:white ;"> Sell on jumia<br> Become a sales consultant<br> Become a jumia
                        vendor service provider<br>Become a
                        logistics service partner <br> Join the Jumia DA academy <br> Join jumia KOL Nigeria</p>
                </div>
                <div class="col-sm-3">
                    <p style="color:white ; margin-top: 3em ;">JUMIA INTERNATIONAL</p>
                    <p style="color:white">Algeria<br> Egypt<br> Ghana<br> Kenya<br> Senegal<br> Uganda<br>
                        South Africa</p>
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
            <center>
                <p style="color: white;">Nancy©2022</p>
            </center>
        </div>
        </div>

    </footer>



</body>

</html>
