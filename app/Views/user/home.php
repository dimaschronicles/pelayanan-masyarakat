<?= $this->extend('layout/templates_homepage'); ?>
<?= $this->section('content_homepage'); ?>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container px-5">
        <a class="navbar-brand" href="/">Pelayanan Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Present your business in a whole new way</h1>
                    <p class="lead text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Pricing section-->
<section class="bg-light py-5 border-bottom">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Pay as you grow</h2>
            <p class="lead mb-0">With our no hassle pricing plans</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Free</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$0</span>
                            <span class="text-muted">/ mo.</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>1 users</strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                5GB storage
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Unlimited public projects
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Community access
                            </li>
                            <li class="mb-2 text-muted">
                                <i class="bi bi-x"></i>
                                Unlimited private projects
                            </li>
                            <li class="mb-2 text-muted">
                                <i class="bi bi-x"></i>
                                Dedicated support
                            </li>
                            <li class="mb-2 text-muted">
                                <i class="bi bi-x"></i>
                                Free linked domain
                            </li>
                            <li class="text-muted">
                                <i class="bi bi-x"></i>
                                Monthly status reports
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card pro-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold">
                            <i class="bi bi-star-fill text-warning"></i>
                            Pro
                        </div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$9</span>
                            <span class="text-muted">/ mo.</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>5 users</strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                5GB storage
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Unlimited public projects
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Community access
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Unlimited private projects
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Dedicated support
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Free linked domain
                            </li>
                            <li class="text-muted">
                                <i class="bi bi-x"></i>
                                Monthly status reports
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card enterprise-->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">$49</span>
                            <span class="text-muted">/ mo.</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>Unlimited users</strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                5GB storage
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Unlimited public projects
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Community access
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Unlimited private projects
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Dedicated support
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>Unlimited</strong>
                                linked domains
                            </li>
                            <li class="text-muted">
                                <i class="bi bi-check text-primary"></i>
                                Monthly status reports
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tentang section-->
<section class="py-5 border-bottom">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Customer testimonials</h2>
            <p class="lead mb-0">Our customers love working with us</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- Testimonial 1-->
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                <div class="small text-muted">- Client Name, Location</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2-->
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                <div class="small text-muted">- Client Name, Location</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact section-->
<section class="bg-light py-5" id="login">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-circle"></i></i></div>
            <h2 class="fw-bolder">Login</h2>
            <p class="lead mb-0">Selamat Datang di Website Pelayanan Desa</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">

                <form>
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="nik" id="nik" type="text" placeholder="Masukan NIK..." />
                        <label for="nik">NIK</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" name="password" id="password" type="text" placeholder="Masukan kata sandi..." />
                        <label for="password">Password</label>
                    </div>

                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Sign In</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-4 bg-dark">
    <div class="container px-5">
        <p class="m-0 text-center text-white">&copy; <?= date("Y"); ?> Pelayanan Masyarakat by. <a href="https://www.instagram.com/dimaschronicles" style="text-decoration: none; color: white;">@dimaschronicles</a></p>
    </div>
</footer>
<?= $this->endSection(); ?>