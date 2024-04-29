<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lantana</title>
    <link rel="stylesheet" href="Lantana.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="header">

    <div class="Title">
    <h1>LANTANA</h1>
    </div>

    <div class="SubTitle">
    <h4>Clothing Boutique just for you</h4>
    </div>

    <!-- Search Bar from BootStrap -->
    <div class="SearchBar" role="SearchBar">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </div>
</div>

<div class="topnav a"><p>
    <a href="HomePage.html" class="active">Home |</a>
    <a href="Clothing.html" class="active">Clothing |</a>
    <a href="Shoes.html" class="active">Shoes |</a>
    <a href="Accessories.html" class="active">Accessories |</a>
    <a href="Contact.html" class="active">Contact       |</a>

        <a href="Login.html" class="login">Login    |</a>
        <a href="Signup.html" class="signup">Sign up</a>

</p></div>

<!-- CONTENT -->

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/HOMEIMG1.jpg" alt="Dresses Cover Image1" style="width:100%;"/>
            </div>

            <div class="item">
                <img src="images/HOMEIMG2.jpg" alt="Dresses Cover Image2" style="width:100%;"/>
            </div>

            <div class="item">
                <img src="images/HOMEIMG3.jpg" alt="Dresses Cover Image3" style="width:100%;"/>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- END OF CONTENT -->



<div class="footer">
    <h5>© Copyright by Lantana 2024</h5>
    <img src="images/facebook.png" alt="Facebook" height="31" width="31"/>
    <img src="images/instagram.png" alt="Instagram" height="30" width="40"/>
    <img src="images/email.png" alt="Email" height="30" width="30"/>
</div>


</body>
</html>
