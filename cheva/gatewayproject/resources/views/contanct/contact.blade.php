<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>1202210350</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="Style.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        </----navbar>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <a class="navbar-brand ps-lg-3" href="#">GATEWAY</a>
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="Dashboard.html">Home Page</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Income">Income</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#About">About</a>
                  </li>
                </ul>
                <div class="loginsingup">
                    <a class="nav-link" href="login.html" >login</a>
                    <button type="submit" class="btn-singup btn-primary" >
                        <a class="nav-link" href="singup.html" style="color: #ffff;">Sign Up</a>
                    </button>
              </div>
            </div>
        </nav>

        
    <!---information--->
        <section id="profile" class="profile space-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 ps-lg-5">
                        <div class="main-profile">
                            <i class="bi bi-person-circle"></i>
                            <h3>Shakilah Pratama</h3>
                            <p class="pb-3">shakilapratam@gmail.com</p>
                        </div>
                        <div class="row sub-detail">
                            <a class="nav-link ps-lg-2 pb-2" href="profileDetail.html"><i class="bi bi-person-circle" ></i> Profile Details</a>
                            <a class="nav-link ps-lg-2 pb-2" href="history.html"><i class="bi bi-folder" ></i> History</a>
                            <a class="nav-link ps-lg-2 pb-2" href="resume.html"><i class="bi bi-bar-chart" ></i> Resume</a>
                            <a class="nav-link ps-lg-2 pb-2" style="color: #037CF1;" href="contact.html"><i class="bi bi-phone" ></i> Contact</a>
                            <a class="nav-link ps-lg-2 pb-2 text-danger" href="MainPage.html"><ion-icon name="log-out-outline"></ion-icon> Log Out</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <h3>Profile details </h3>
                        <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore et magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                        <div class="row profile-detail pb-4">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="card contact-card pb-2" style="width: 335px; height: 163px;">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <ion-icon name="mail-outline"></ion-icon>
                                            <p class="text-lowercase ms-2">Email</p>
                                        </div>
                                        <p>shakilapratam@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12 ps-5">
                                <div class="col-lg-4 col-md-12 col-12">
                                    <div class="card contact-card pb-2" style="width: 335px; height: 163px;">
                                        <div class="card-body">                                    
                                            <div class="d-flex">
                                                <ion-icon name="call-outline"></ion-icon>
                                                <p class="text-lowercase ms-2">Phone</p>
                                            </div>
                                            <p>08xxxxxxxxx</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row profile-detail">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="card contact-card pb-2" style="width: 335px; height: 163px;">
                                    <div class="card-body">                                    
                                        <div class="d-flex">
                                            <ion-icon name="home-outline"></ion-icon>
                                            <p class="text-lowercase ms-2">Address</p>
                                        </div>
                                        <p>Address</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!---information--->
    

    </body>
</html>