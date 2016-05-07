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
    <a class="navbar-brand" href="#">BSKYB</a>
</nav>


<div class="container">
    <!-- row -->
    <div class="row">

        <div class="">
            <header><h1 class="text-center">Product Selection Page</h1></header>
        </div>
        <hr>

        <div class="col-md-4">
            <section>
                <h2>Sports</h2>

                <form id="sports-form">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="sky-news"> Sky News
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="sky-sports"> Sky Sports
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="news"> News
                        </label>
                    </div>

                </form>
            </section>

        </div>


        <div class="col-md-4">
            <section>
                <form id="news-form">
                    <h2>News</h2>

                    <div class="checkbox">
                        <label>
                            <input id="news" type="checkbox" name="sky-news"> Sky News
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="sky-sports"> Sky Sports
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="news"> News
                        </label>
                    </div>

                </form>
            </section>


        </div>
        <div class="col-md-4">
            <h2>Basket</h2>
            <button type="submit" class="btn btn-default">Checkout</button>
        </div>
    </div>
    <!--row end -->

    <hr>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>
