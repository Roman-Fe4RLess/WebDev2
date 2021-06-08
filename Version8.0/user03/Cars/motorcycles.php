<!DOCTYPE html>
<html lang="en">

<head>
    <title>Motorcycles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
                <li><a href="bestcars.php">Best Cars</a></li>
                <li><a href="trucks.php">Buy Truck</a></li>
                <li><a href="boostrap.php">Buy Cars</a></li>
                <li><a href="motorcycles.php">Buy Motorcycle</a></li>
            </ul>
        </div>
    </nav>

    <body>
        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-6">

            <!-- Footer Elements -->
            <div class="container">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-sm-6 offset-sm-6">

                        <!-- Form -->
                        <form class="form-group">
                            <input class="form-control form-control-sm mr-6 w-6" type="text"
                                placeholder="Car/Brand Name" aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>

                        </form>
                    </div>

                    <!--Grid column-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            </div>
            <!-- Footer Elements -->

        </footer>
        <!-- Footer -->


        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(255, 0, 0, 0);
                transition: 0.3s;
                width: 40%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgb(255, 0, 0);
            }

            .container {
                padding: 2px 16px;
            }

            h1 {
                color: rgb(0, 0, 0);
            }

            h2 {
                color: rgb(0, 0, 0);
            }

            h3 {
                color: rgb(0, 0, 0);
            }
        </style>

        <div class="card">
            <img src="images/bike1.jpeg" alt="Motorcycle" style="width: 50%">
            <div class="container">
                <h2>Bike #1</h2>
                <h3>$15,700</h3>
            </div>
        </div>

        <div class="card">
            <img src="images/bike.jpeg" alt="Motorcycle" style="width: 50%">
            <div class="container">
                <h2>Bike #2</h2>
                <h3>$10,300</h3>
            </div>
        </div>

        <div class="card">
            <img src="images/bmwbike.jpeg" alt="Motorcycle" style="width: 50%">
            <div class="container">
                <h2>BMW</h2>
                <h3>$20,000</h3>
            </div>
        </div>

        <div class="card">
            <img src="images/yamahabike.jpeg" alt="Motorcycle" style="width: 50%">
            <div class="container">
                <h2>Yamaha</h2>
                <h3>$13,500</h3>
            </div>
        </div>
    </body>

</html>