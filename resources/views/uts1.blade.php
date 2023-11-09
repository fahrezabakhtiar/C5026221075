<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rizky Fahreza Bakhtiar Website</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('img/uts/favicon.ico')}}">

    <!-- Custom Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top">
            <div class="container px-5">
                <a class="navbar-brand moving-text" href="http://127.0.0.1:8000/uts-aboutme"><span class="fw-bolder text-primary">Fahreza Bakhtiar</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/uts-aboutme">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/uts-professional">Professional</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/uts-course">Course</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/uts-volunteer">Volunteer & Achievement</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://zabakhtiar.wordpress.com/">Personal Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.goodreads.com/fahrezabakhtiar">Book</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/uts-contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content -->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Student &middot; Learner &middot; Dreamer</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About Section -->
        <div class="container px-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <img id="profile-image" class="profile-img" src="{{asset('img/uts/profile1.png')}}" alt="Foto Rizky Fahreza Bakhtiar"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-justify my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">Hi, there! It's me, Rizky Fahreza Bakhtiar.</p>
                                <p class="text-justify text-muted">Reza (19) is a driven and passionate undergraduate Information Systems student at Sepuluh Nopember Institute of Technology. Holding a diverse range of interests, he is enthusiastic about education, data, computer science, management, business, and social issues. With an unwavering commitment to learning and a constant desire to enhance his knowledge and skills, Reza is dedicated to carving out a successful path in his chosen field.</p>
                                <br>
                                <br>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://instagram.com/fahrezabakhtiar"><i class="bi bi-instagram"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/fahrezabakhtiar/"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/fahrezabakhtiar/"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">Copyright &copy; Rizky Fahreza Bakhtiar</div></div>
                <div class="col-auto">
                    <a class="small" href="https://www.bing.com/maps?osid=bbf5cdd2-61de-4f9a-af48-39297f4fbf37&cp=-7.243309~112.614072&lvl=11.42&pi=0&v=2&sV=2&form=S00027">Location</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="mailto:fahrezabakhtiar12@gmail.com">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var profileImages = ["{{asset('img/uts/profile1.png')}}", "{{asset('img/uts/profile2.png')}}"];
        var currentImageIndex = 0;
        var profileImageElement = document.getElementById("profile-image");
        // Function to change the profile image
        function changeProfileImage() {
            currentImageIndex = (currentImageIndex + 1) % profileImages.length;
            profileImageElement.src = profileImages[currentImageIndex];
        }
        // Set an interval to change the profile image every 5 seconds (5000 milliseconds)
        setInterval(changeProfileImage, 2000);
    </script>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
