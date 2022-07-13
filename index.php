<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="parent">
        <!-- side bar Start -->
        <div class="side-nav">
            <!-- user name -->
            <div class="heading center">
                <h5 class="nav-user-name">Ogundimu Olumide</h5>
            </div>

            <!-- profile pics -->
            <div class="img-div center py-2">
                <img src="img/lekan.jpeg" alt="" class="rounded-circles profile-img">
            </div>
            <!-- description -->
            <p class="center white-text py-2 side-nav-p">Hi, my name is Ogundimu Olumide and I'm a senior software engineer. Welcome to my personal website!</p>

            <!-- social icons start -->
            <div class="social-icons center container">
                <div class="icon center">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="icon center">
                    <i class="fa fa-camera-retro"></i>
                </div>
                <div class="icon center">
                    dd
                </div>
                <div class="icon center">
                    dd
                </div>
                <div class="icon center">
                    <i class="fa fa-camera-retro"></i>
                </div>
                <div class="icon center">
                    <i class="fa fa-camera-retro"></i>
                </div>
            </div>
            <!-- social icons start -->
            <hr class="hr">

            <div class="list">
                <ul>

                    <li class="d-flex"><a class="active-link link"><i class="fa-solid fa-user nav-icon"></i>About me </a></li>
                    <li class="d-flex"><a class="link"><i class="fa-solid fa-desktop nav-icon"></i>Portfolio </a></li>
                    <li class="d-flex"><a class="active-link link"><i class="fa-solid fa-file-invoice-dollar nav-icon"></i>Services and Pricing </a></li>
                    <li class="d-flex"><a class="link"><i class="fa-solid fa-file nav-icon"></i>Resume </a></li>
                    <li class="d-flex"><a class="active-link link"><i class="fa-solid fa-envelope-circle-check nav-icon"></i>Contact</a></li>
                    <li class="d-flex"><a class="link"><i class="fa-solid fa-rss nav-icon"></i>Blog </a></li>


                </ul>
            </div>
        </div>
        <!-- side bar end -->
        <div class="content container">
            <div class="section1  row p-3">
                <div class="text-div col-md-6">
                    <h2 class="py-4 content-username">Ogundimu Olumide</h2>
                    <h4 class="sub-title">Senior Software Engineer</h4>
                    <p class=''>I'm a software engineer specialised in frontend and backend development for complex scalable web apps. I talk about software development on <a href="" style="color:blueviolet">my youtube channel</a>. Want to know how I may help your project? Check out my project <a href="" style="color:blueviolet">Portfolio</a> and <a href="" style="color:blueviolet">online resume.</a></p>

                    <div class="cta-btn-div">
                        <button class="btn text-white cta-btn " style="background-color:blueviolet"> View Portfolio </button>
                        <button class="btn btn-secondary cta-btn "> View Resume </button>
                    </div>
                </div>
                <div class="hero-img-div col-md-6 p-3">
                    <img src="img/lekan.jpeg" alt="" class="" height="300" width="100%">
                </div>
            </div>


            <div class="section2 p-4">
                <h3 class="section-title">What I do</h3>
                <p>I have more than 10 years' experience building software for clients all over the world. Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my online resume and project portfolio.</p>
            </div>

            <div class="section3 p-2">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-white mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <div class="item-icon">
                                    <img src="img/javascript.svg" alt="">
                                </div>
                                <h5 class="skill-title">Vanilla JavaScript</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <div class="item-icon">
                                    <img class="skil-svg" src="img/react.svg" alt="">
                                    <img class="skil-svg" src="img/javascript.svg" alt="">
                                    <img class="skil-svg" src="img/javascript.svg" alt="">
                                </div>
                                <h5 class="skill-title">React js</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>