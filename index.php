<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Developer Bash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">About Us</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Prathmesh Kupade</h2>
                    <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium deserunt iusto
                        reiciendis nostrum nam iste vitae, omnis eum inventore cumque illum debitis quo ipsum corrupti.
                    </p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Services</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Gallary</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/2.jpg" alt="" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    
        </section>
        
        <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Form</h3>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email-id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">Prathmesh Productions</p>
    </footer>
</body>

</html>