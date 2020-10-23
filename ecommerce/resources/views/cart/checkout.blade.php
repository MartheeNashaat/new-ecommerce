<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo url('/'); ?>/css/
fashion.css">
        <title> Egypt Hut </title>
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?php echo url('/'); ?>/css/
font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

    <body>
        <!--navbar-->
        <div class="header">
            @extends('layouts.search')

            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="<?php echo url('/'); ?>/images/logo.png" alt="logo" width="200px">
                        </a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="{{route('home')}}"> Home </a></li>
                            <li><a href="{{route('product.index')}}">Products</a></li>
                            <li><a href="{{route('aboutus')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                            <li>@if (Route::has('login'))
                                <div>
                                    @auth
                                    <a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 underline">profile</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                    @endif
                                </div>
                                @endif</li>
                        </ul>
                    </nav>
                    <a href="{{ route('cart.index') }}">
                        <img src="<?php echo url('/'); ?>/images/cartlogo1.png" alt=""/ width="30px" height="30px">
                    </a>
                    <a href="{{ route('wishlist') }}">
                        <img src="<?php echo url('/'); ?>/images/wishlist.png" alt=""/ width="40px" height="40px">
                    </a>
                    </ul>
                    </nav>
                </div>
                @section('content')

            </div>
        </div>
        <!--end navbar-->

        <form action="{{route('orders.store')}}" method="post">
            @csrf



            <h2 class="row">Checkout Form</h2>
            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <form action="action_page.php">
                            <div class="row">
                                <div class="col-58">
                                    <h3> Billing Information</h3>
                                    <br><br><br>
                                    <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                                    <input type="text" id="fname" name="fullname">
                                    <br><br><br>

                                    <label for="address"><i class="fa fa-institution"></i>Address</label>
                                    <input type="text" id="address" name="Address">
                                    <br><br><br>

                                    <label for="City"><i class="fa fa-city"></i>City</label>
                                    <input type="text" id="city" name="City">
                                    <br><br><br>

                                    <label for="Phone Number"><i class="fa fa-mobile"></i>Phone Number</label>
                                    <input type="text" id="Phone Number" name="Phone Number">
                                    <br><br><br>

                                </div>
                            </div>
                    </div class="col-50">
                    <h3>Payment Method</h3>
                    <br><br><br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                            Cash on delivery

                        </label>
                        <br><br><br>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                            Paypal

                        </label>
                        <br><br><br> <label for="cname">Name on card</label>
                        <input type="text" id="cname" name="cardNumber">
                        <br><br><br> <label for="cnum">credit Card Number </label>
                        <input type="text" id="cnum" name="cardNumber">




                        <div>


                        </div>



                        <!--  <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <br/>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>
    <br/>



    <div class="form-group">
        <label for="">Full Address</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>
    <br/>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>
    
<br/> -->

                        <div>

                            <br>
                            <a  class="btn btn-primary" href="{{route ('cart.done')}}" role="button">Place Order</a>
                        </div>

        </form>
        </div>




        @endsection
    </body>

    </html>
</DOCTYPE>