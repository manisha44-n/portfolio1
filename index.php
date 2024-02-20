<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a474c91082.js" crossorigin="anonymous"></script>

<style>

<?php include 'style.css';?>

</style>



</head>

<body>

    <!--Navbar Large screen with small screen-->
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll dark ">
        <div class="container">
            <a class="navbar-brand port" href="#"><img class="logo" src="images/logo1.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"
                aria-controls="navbarSupporttedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="colapsibleNavbar ">
                <ul class="navbar-nav ms-auto  ">
                    <li class="nav-item active">
                        <a class="nav-link white" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--main banner-->
    <section class="bgimage" id="home">
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                    <h2 class="hero_title">Hi, it's Me Manisha</h2>
                    <p class="hero_desc">I am a Web Designer. </p>
                    <p class="hero_desc">Social Media Community Page</p>
                    
                </div>
            </div>
        </div> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner bg-size">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/bg 1.jpg" alt="First slide">

                </div>
                <div class="carousel-item bg-size">
                    <img class="d-block w-100" src="images/bgg2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item bg-size">
                    <img class="d-block w-100" src="images/bgg3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </section>

    <!--about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col-lg-4 ">
                    <img class="image" src="images/manisha.jpg" alt="Mani">
                </div>
                <div class="col-lg-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illum
                        esse voluptate dignissimos cupiditate, error eos veritatis recusandae qui
                        soluta quas quam velit voluptates enim et? Ullam quae praesentium dolore,
                        non nobis ea aperiam labore esse rerum corporis excepturi hic distinctio voluptates
                        dolores adipisci omnis sit, ad fugit nemo. Sequi enim a minus laudantium
                        rerum adipisci earum excepturi doloribus repellat, eaque est non ipsa amet,
                        nesciunt tempore officia. Deserunt fugiat dignissimos rem facilis est deleniti nostrum,
                        cupiditate quo cumque eius delectus magnam expedita. Quod laborum cum veniam incidunt voluptate
                        explicabo, sed distinctio quisquam ipsum modi, culpa magnam quasi. </p>


                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: Manisha Jhinkwan</li>

                                <li>Occupation: web Developer</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Name: Manisha Jhinkwan</li>

                                <li>Occupation: web Developer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Deleniti illum minima voluptatem similique, totam consectetur dolores amet.
                            Natus sunt facere nulla neque, vitae, aperiam suscipit enim earum blanditiis,
                            sint harum.
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!--Services section-->
    <section id="services">
        <div class="container ">
            <h1 class="text-center">Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock"></i>
                            <h4 class="card-title mt-3">Website Development</h4>
                            <p>Some quick example text to build on the card-card
                                and make up the bulk of the card's content. Some
                                quick example text to build on the card title
                                and make up the bulk of the card's content
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-layer-group"></i>
                            <h4 class="card-title mt-3">Website Design</h4>
                            <p class="card-text mt-3">Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                                some quick example text to build on the card's title and make of the bulk of
                                the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-check-circle"></i>
                            <h4 class="card-title mt-3">Website Deployment</h4>
                            <p class="card-text mt-3">Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                                some quick example text to build on the card's title and make of the bulk of
                                the card's content some of.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card slider -->
            <!-- <div class="slider-container">
                <div class="card-slider">
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-clock"></i>
                                <h4 class="card-title mt-3">Website Development</h4>
                                <p>Some quick example text to build on the card-card
                                    and make up the bulk of the card's content. Some
                                    quick example text to build on the card title
                                    and make up the bulk of the card's content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-layer-group"></i>
                                <h4 class="card-title mt-3">Website Design</h4>
                                <p class="card-text mt-3">Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                    some quick example text to build on the card's title and make of the bulk of
                                    the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-check-circle"></i>
                                <h4 class="card-title mt-3">Website Deployment</h4>
                                <p class="card-text mt-3">Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                    some quick example text to build on the card's title and make of the bulk of
                                    the card's content some of.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-clock"></i>
                                <h4 class="card-title mt-3">Website Development</h4>
                                <p>Some quick example text to build on the card-card
                                    and make up the bulk of the card's content. Some
                                    quick example text to build on the card title
                                    and make up the bulk of the card's content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-clock"></i>
                                <h4 class="card-title mt-3">Website Development</h4>
                                <p>Some quick example text to build on the card-card
                                    and make up the bulk of the card's content. Some
                                    quick example text to build on the card title
                                    and make up the bulk of the card's content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-clock"></i>
                                <h4 class="card-title mt-3">Website Development</h4>
                                <p>Some quick example text to build on the card-card
                                    and make up the bulk of the card's content. Some
                                    quick example text to build on the card title
                                    and make up the bulk of the card's content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-clock"></i>
                                <h4 class="card-title mt-3">Website Development</h4>
                                <p>Some quick example text to build on the card-card
                                    and make up the bulk of the card's content. Some
                                    quick example text to build on the card title
                                    and make up the bulk of the card's content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card servicesText">
                            <div class="card-body">
                                <i class="fas servicesIcon fa-clock"></i>
                                <h4 class="card-title mt-3">Website Development</h4>
                                <p>Some quick example text to build on the card-card
                                    and make up the bulk of the card's content. Some
                                    quick example text to build on the card title
                                    and make up the bulk of the card's content
                                </p>
                            </div>
                        </div>
                    </div> -->
<!-- card slider end -->
                    <!-- Add more cards as needed -->
                </div>
            </div>

    </section>
    <!--portfolio section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Portfolio</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="images/netflix.png" alt="Card image"
                            style="width:100%;height:250px;">
                        <div class="card-body">
                            <h4 class="card-title">Netflix Clone</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, magnam?
                            </p>
                            <div class="text-center">
                                <a href="images/netflix.png" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="class-img-top" src="images/login.png" alt="card image"
                            style="width: 100%;height:250px;">
                        <div class="card-body">
                            <h4 class="card-title">Login Form</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione,
                                deserunt!</p>
                            <div class="text-center">
                                <a href="images/login.png" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="class-img-top" src="images/youtube.png" alt="card image"
                            style="width: 100%;height:250px;">
                        <div class="card-body">
                            <h4 class="card-title">Youtube Clone</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione,
                                deserunt!</p>
                            <div class="text-center">
                                <a href="images/youtube.png" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact section-->
    <section id="contact">
        <div class="container mt-3 contactContact">
            <h1 class="text-center">Contact Me</h1>
            <div class="row mt-4">
                <div class="col-lg-12 center">
                    <!--form field-->
                    <form action="process.php" method="post">
                        <h1 style="margin-top: 8px;color:rgb(229, 221, 222);text-align: center;">Fill This Form</h1>
                        <input type="text" name='fname' class="form-control form-control-lg mt-3 sizeinput" placeholder="Name">
                        <input type="email" name='email' class="form-control mt-3 sizeinput" placeholder="Email">
                        <input type="text" name='subject' class="form-control mt-3 sizeinput" placeholder="Subject">
                        <div class="mb-3 mt-3 sizeinput">
                            <textarea name="text" id="comment" rows="5" class="form-control"
                                placeholder="Detail"></textarea>
                        </div>
                    <button style="color:rgb(158, 38, 38);"  class="btn mt-3 button" name="btn-send">Contact Me</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- footer section-->

    <footer id="footer">
        <div class="container-fluid foter">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>

            </div>
            <!-- Copyright -->
            <hr style="color:white;align-items: center;"> 
            <div class="text-center p-3">
                ©2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Built By : Manisha</a>
            </div>

        </div>
    </footer>
    <!-- <script src="script.js"></script> -->
   
    <script>
<?php include 'script.js';?>

    </script>
</body>

</html>