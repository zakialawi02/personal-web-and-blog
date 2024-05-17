<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="personal website  ahmad zaki alawi" />
        <meta name="keywords" content="resume, personal, portfolio, cv, ahmad zaki alawi" />


        <title>SUS Questionnaire</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href=" {{ asset("/img/favicon.png") }}" type="image/x-icon" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- custom css file link  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <link rel="stylesheet" href="{{ asset("/assets/css/me/sus.css") }}">

    </head>


    <body>
        <!-- PRELOADER -->
        @include("components.me.preloader")


        <!-- header section starts  -->

        <header>

            <a href="/" class="logo">>_<span class="C1">"</span><span class="C2">
                    < </a>
                </span>
                <div id="menu" class="fas fa-bars">
                </div>

                <nav class="navbar">
                    <a class="active" href="#home">home</a>
                    <a href="/" target="_blank">About</a>
                    <!-- <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
                <a class="btn-Gal" href="https://gallery.zakialawi.my.id/" target="_blank">Gallery</a> -->



                </nav>

        </header>

        <!-- header section ends -->

        <!-- dark Mode Toggle -->
        <div class="darkModeToggle" id="darkModeToggle">
            <i class="fas fa-moon D1"></i>
            <i class="fas fa-sun D2"></i>
        </div>
        <!-- /darkModeToggle -->

        <!-- HOME  -->

        <section class="home" id="home">

            <div class="p-4 mt-10 container-fluid">

                <div class="p-5 pt-5" style="display: none;">
                    <center>
                        <h2>The questionnaire has been closed</h2>
                        <h3>But you can still access the webgis</h3>
                        <a href="/a" class="m-4 btn" target="_blank" data-aos="fade-down" delay="0.8">link <span class="fas fa-external-link-alt"></span>
                        </a>
                    </center>
                </div>

                <div style="display: block;">
                    <h2>System Usability Scale (SUS) Questionnaire</h2>
                    <p>System Usability Scale (SUS) adalah salah satu metode uji pengguna yang menyediakan alat ukur yang “quick and dirty” dan dapat diandalkan. Diaplikasikan dengan menggunakan 10 pernyataan berbentuk kuisoner yang diikuti dengan 5 opsi jawaban untuk setiap pernyataan, mulai dari
                        Sangat Setuju hingga Sangat Tidak Setuju. Metode uji pengguna ini diperkenalkan oleh John Brooke di tahun 1986 yang dapat digunakan untuk mengevaluasi berbagai jenis produk maupun servis, termasuk di dalamnya hardware, software, perangakat mobile, website dan aplikasi.</p>
                    <p>Dalam pengujian ini anda diminta untuk menggunakan dan menjalankan situs WebGIS dan diminta untuk mengikuti task yang telah diberikan. Untuk penjelasan lebih detail baca point dibawah berikut</p>

                    <ol>
                        <li>Anda dapat mengakses dengan perangkat apapun, bisa menggunakan laptop/PC/tablet/ipad/smatrphone</li>
                        <li>Lakukan tugas berikut</li>
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 8rem;">no.</th>
                                        <th scope="col">Task</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row">1</td>
                                        <td>R1C2</td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">2</td>
                                        <td>Item</td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">3</td>
                                        <td>Item*</td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">4</td>
                                        <td>Item</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <li>Silakan akses situs WebGIS berikut dan jelajahi sesuai taks yang telah diberikan terlebih dahulu. Selebihnya dibebaskan <a href="/a" class="btn" target="_blank" data-aos="fade-down" delay="0.8">click here <span class="fas fa-external-link-alt"></span>
                            </a></li>
                        <li> Data Sampel jika perlu*
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" id="coptek1" value="Contoh Teks" disabled>
                                <button type="button" class="btn" onclick="copyText1()">Salin <span class="fa-solid fa-copy"></span></button>
                            </div>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" id="coptek2" value="Contoh Teks ini dapat disalin" disabled>
                                <button type="button" class="btn" onclick="copyText2()">Salin <span class="fa-solid fa-copy"></span></button>
                            </div>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" id="coptek3" value="Contoh Teks ini dapat disalin" disabled>
                                <button type="button" class="btn" onclick="copyText3()">Salin <span class="fa-solid fa-copy"></span></button>
                            </div>
                            <div class="row gx-2">
                                <div class="m-3 col col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <img src="/img/Portfolio/20190803_054047-scaled.jpg" class="card-img-top" alt="...">
                                        <a href="#" class="m-1 btn">Download <span class="fa-solid fa-download"></span></a>
                                    </div>
                                </div>
                                <div class="m-3 col col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <img src="/img/Portfolio/20190803_054047-scaled.jpg" class="card-img-top" alt="...">
                                        <a href="#" class="m-1 btn">Download <span class="fa-solid fa-download"></span></a>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <li>Jika anda telah mencoba menggunakan dan melakukan beberapa task mohon ketersediaannya untuk mengisi form kuisoner dibawah ini 👇👇👇
                        </li>
                        <li>Tidak nyaman dengan tampilan form dibawah?! <a href="https://forms.gle/EpQKzeYW5YUGEvAZA" class="btn" target="_blank" data-aos="fade-down" delay="0.8">Buka terpisah <span class="fas fa-external-link-alt"></span>
                            </a>
                        </li>
                    </ol>

                    <div class="pt-4"></div>
                    <div class="p-3"></div>
                    <iframe src="https://forms.gle/EpQKzeYW5YUGEvAZA" frameborder="0" style="width: 100%; height: 95vh;"></iframe>

                    <div class="p-2 pt-5 pb-4">
                        <h4>Jika menemukan error/keanehan dan mau berpartisipasi dalam memperbaiki dapat kirimkan status/tampilan error dibawah ini!!</h4>
                        <form class="p-1" action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <p>Deskripsi</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3 input-group">
                                <input type="file" name="foto[]" class="form-control" id="foto" accept="image/*" multiple>
                            </div>
                            <div id="FileHelp" class="pb-2 h5">.jpg/.png</div>
                            <div id="imgPreview"></div>
                            <button type="submit" class="a btn" style="width: 100%;">Submit</button>
                        </form>
                    </div>

                </div>



            </div>

        </section>

        <!-- HOME end -->


        <!-- CONTACT  -->
        <section class="contact" id="contact" style="display: none;">

            <div class="title-contact">
                <h1 class="heading-title">CONTACT ME</h1>

                <div class="contact-center">
                    <div class="left">
                        <h2>Get in Touch</h2>
                        <p>
                            Fill out the form to get in touch with me. <br> You don't like using forms? contact me by email
                            or scan the
                            following qrcode.
                        </p>

                        <img src="/img/qrcontact.jpeg" alt="" class="qrcontact">

                        <div>
                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                            <span class="content">
                                <h3>Address</h3>
                                <span style="color: #ffffff;">Indonesia</span>
                            </span>
                        </div>

                        <div>
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            <span class="content">
                                <h3>Email</h3>
                                <span style="color: #ffffff;">hallo@zakialawi.my.id</span>
                            </span>
                        </div>

                    </div>

                    <div class="right">
                        <h2>Message me</h2>

                        <!-- versi 2 -->
                        <form action="mail.php" method="POST" autocomplete="off" class="form" id="myForm" name="myform">
                            <div>
                                <input type="text" placeholder="Your Name" name="name" id="name" required />
                                <input type="email" placeholder="Your Email" name="email" id="email" required />
                            </div>
                            <input type="text" placeholder="Subject" name="judul" id="judul" required />
                            <textarea cols="10" rows="10" placeholder="Your Message" name="message" id="message" required></textarea>

                            <?php if (!empty($terkirim)) : ?>
                            <div class="terkirim">
                                <strong><?= $terkirim ?></strong>
                            </div>
                            <?php endif ?>
                            <input class="btn-contact" type="submit" value="Submit" name="sendMail">

                        </form>

                    </div>
                </div>
            </div>

        </section>

        <!-- CONTACT ends -->

        <!-- footer starts  -->

        <div class="footer">

            <h1 class="credit">Made with 💖 by <a href="https://www.instagram.com/a.zaki.alawi/">Zaki</a>. </h1>

        </div>

        <!-- footer ends -->

        <!-- scroll top  -->

        <a href="#home" class="scroll-top">
            <i class="fas fa-arrow-up"></i>
        </a>

        <!-- custom js file link  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset("/assets/js/me/sus.js") }}"></script>
        <script src="https://kit.fontawesome.com/68577d40c9.js" crossorigin="anonymous"></script>

        <script>
            function copyText1() {
                var copyText = document.getElementById("coptek1");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                navigator.clipboard.writeText(copyText.value);
            }

            function copyText2() {
                var copyText = document.getElementById("coptek2");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                navigator.clipboard.writeText(copyText.value);
            }

            function copyText3() {
                var copyText = document.getElementById("coptek3");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                navigator.clipboard.writeText(copyText.value);
            }
        </script>
        <script>
            function readURL(input) {
                if (input.files) {
                    $('#imgPreview').html(''); // mengosongkan preview
                    for (var i = 0; i < input.files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imgPreview').append('<div><img src="' + e.target.result + '" class="img-kafe"></div>');
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
            $("#foto").change(function() {
                readURL(this);
            });
        </script>
        <script>
            $(document).ready(function() {
                $("th").css("pointer-events", "none");
                $(".no-sort").css("pointer-events", "none");
            });
        </script>

    </body>

</html>
