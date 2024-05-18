<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="personal website  ahmad zaki alawi" />
        <meta name="keywords" content="resume, personal, portfolio, cv, ahmad zaki alawi" />


        <title><?= $data["title"] ?></title>

        <!-- Favicon -->
        <link rel="shortcut icon" href=" {{ asset("/assets/img/favicon.png") }}" type="image/x-icon" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset("/assets/css/me/style.css") }}">

    </head>


    <body>
        <!-- PRELOADER -->
        @include("components.me.preloader")

        <!-- header section starts  -->
        @include("components.me.header")
        <!-- header section ends -->

        <!-- dark Mode Toggle -->
        <div class="darkModeToggle" id="darkModeToggle">
            <i class="fas fa-moon D1"></i>
            <i class="fas fa-sun D2"></i>
        </div>
        <!-- /darkModeToggle -->

        <!-- CONTENT -->
        @yield("content")
        <!-- CONTENT -->

        <!-- scroll top  -->

        <a href="#home" class="scroll-top">
            <i class="fas fa-arrow-up"></i>
        </a>




        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!-- Typeit -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>

        <!-- jquery cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Tilt js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
        <script src="{{ asset("/assets/js/me/vanilla-tilt.min.js") }}"></script>
        <script type="text/javascript">
            VanillaTilt.init(document.querySelector(".gambarTilt"), {
                reverse: true,
                max: 15,
                speed: 200,
                transition: true, // Set a transition on enter/exit.
                easing: "cubic-bezier(.03,.98,.52,.99)", // Easing on enter/exit.
                reset: true, // If the tilt effect has to be reset on exit.
                glare: true,
                "max-glare": 0.5, // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                "glare-prerender": false, // false = VanillaTilt creates the glare elements for you, otherwise
            });

            //It also supports NodeList
            VanillaTilt.init(document.querySelectorAll(".gambarTilt"));
        </script>
        <!-- custom js file link  -->
        <script src="{{ asset("/assets/js/me/script.js") }}"></script>
        <script src="{{ asset("/assets/js/me/Gallery.js") }}"></script>
        <script src="{{ asset("/assets/js/me/quotes.js") }}"></script>
        <script src="https://kit.fontawesome.com/68577d40c9.js" crossorigin="anonymous"></script>

        @stack("javascript")

    </body>

</html>
