<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="customer product selection page">
    <meta name="author" content="">

    <title>Sky- Product Selection</title>

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
            <header><h1 class="text-center">Product Selection Page</h1></header>
        </div>
        <hr>

        <form id="product-form" method="post" action="{{route('confirm')}}">
            {{csrf_field()}}
            <div class="col-md-4">
                <section>
                    <h2>Sports</h2>

                    @foreach($sportsProducts as $product)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" data-product="{{snake_case($product['Product'])}}" name="products[]"
                                       value="{{$product['Product']}}"> {{$product['Product']}}
                            </label>
                        </div>

                    @endforeach
                </section>

            </div>

            <div class="col-md-4">
                <section>
                    <h2>News</h2>

                    @foreach($newsProducts as $product)
                        <div class="checkbox">
                            <label>
                                <input data-product="{{snake_case($product['Product'])}}" type="checkbox" name="products[]"
                                       value="{{$product['Product']}}"> {{$product['Product']}}
                            </label>
                        </div>

                    @endforeach
                </section>

            </div>
            <div class="col-md-4">
                <h3>Basket</h3>
                <ul id="basket" class="list-group"></ul>
                <button id="checkout" type="submit" class="btn btn-default disabled">
                    Checkout
                </button>
            </div>

        </form>

    </div>
    <!--row end -->

    <hr>
</div> <!-- /container -->
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script>
    $('input').click(function (event) {
        $('#checkout').removeClass('disabled');
        if (event.target.checked) {
            $('#basket').append('<li id="' + event.target.getAttribute('data-product') + '" class="list-group-item">' + event.target.value + '</li>');
        } else {
            $('#' + event.target.getAttribute('data-product')).remove();
        }
    });
</script>
</body>
</html>
