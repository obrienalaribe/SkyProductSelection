<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="customer product selection page">
    <meta name="author" content="">

    <title>Sky- Product Confirmation</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-static-top">
    <a class="navbar-brand" href="{{route('home')}}">BSKYB</a>
</nav>


<div class="container">
    <!-- row -->
    <div class="row">

        <div class="">
            <header><h1 class="text-center">Product Confirmation Page</h1></header>
        </div>
        <hr>

        <h4 class="text-center">Thank you for selecting the products below:)</h4>
        <ul class="list-group">
            @foreach($selectedProducts as $product)
                <li id="{{snake_case($product)}}" class="list-group-item">{{$product}}</li>
            @endforeach
        </ul>

    </div>
    <!--row end -->

    <hr>
</div> <!-- /container -->

</body>
</html>
