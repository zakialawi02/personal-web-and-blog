@extends("layouts.mePersonal.templateHome")

@section("content")
    <!-- HOME  -->

    <section class="home" id="home">

        <div class="home-container">
            <div class="row colom">
                <div class="home-text">
                    <h3>Hello, my name is</h3>
                    <h1>Ahmad Zaki Alawi</h1>
                    <h4>And I'm a &#160;<span id="type1"></span></h4>
                    <p>"Things turn out best for those who make the best of the way things turn out."</p>
                    <div class="sosial-media">
                        <a href="https://www.instagram.com/a.zaki.alawi/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/ahmad-zaki-alawi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/zakialawi02/personal-web" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div class="home-img">
                    <div class="img-box">
                        <img src="{{ asset("/assets/img/about.png") }}" alt="profile-pic">
                        <span class="welcome-thumb-1">
                            <img class="welcome-animation" src="{{ asset("/assets/img/follow.gif") }}" alt="">
                        </span>
                        <span class="welcome-thumb-2">
                            <img class="welcome-animation" src="{{ asset("/assets/img/ig_like.gif") }}" alt="">
                        </span>
                        <span class="welcome-thumb-3">
                            <img class="welcome-animation" src="{{ asset("/assets/img/cool.png") }}" alt="">
                        </span>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- HOME end -->

    <!-- ABOUT  -->

    <section class="about" id="about">

        <div class="about-center-1 container-1" data-aos="fade-down">
            <span class="biograp">Biography</span>
            <h3 class="biograp2">About Me</h3>
        </div>

        <div class="container about-center">
            <div class="left animate__animated animate__fadeInLeft" data-aos="fade-right">
                <img src="{{ asset("/assets/img/pasfoto.jpg") }}" alt="" class="gambarTilt" />
            </div>

            <div class="right animate__animated animate__fadeInRight" data-aos="fade-left">
                <h1>I'm Zaki, a <span id="type2"></span></h1>
                <p>
                    Hello, Resume section is not yet available!! &nbsp;>>Load dummy text> Lorem ipsum dolor sit amet
                    consectetur, adipisicing
                    elit. Quos recusandae praesentium delectus ad sed, facilis voluptates id doloremque architecto
                    consectetur excepturi quibusdam quia.
                    Explicabo ipsum, tempore esse facere vero molestiae! []
                </p>

                <div class="detail-data-container">
                    <div class="row colom">
                        <div class="detail-data-left">
                            <ul>
                                <li><i class="fas fa-birthday-cake"></i><span><label>&nbsp;&nbsp; Birthday: </label>
                                        2 December 2000</span>
                                </li>
                                <li><i class="fas fa-map-marker-alt"></i><span><label>&nbsp;&nbsp; Location: </label><a href="https://goo.gl/maps/tH8JhhDNjorMd7Ed9" target="_blank">
                                            Surabaya, Indonesia
                                        </a></span>
                                </li>
                                <li><i class="fas fa-school"></i><span><label>&nbsp;&nbsp; Study: </label>
                                        <a href="https://www.google.com/maps/place/Sepuluh+Nopember+Institute+of+Technology+(ITS)/@-7.2820793,112.7943996,854m/data=!3m1!1e3!4m5!3m4!1s0x2dd7fa1323221a93:0x306c3c99adedb258!8m2!3d-7.282356!4d112.7949253" target="_blank">
                                            ITS</a></span>
                                </li>
                                <li><i class="fas fa-graduation-cap"></i><span><label>&nbsp;&nbsp; Degree: </label>
                                        ********</span>
                                </li>
                            </ul>
                        </div>

                        <div class="detail-data-right">
                            <ul>
                                <li><i class="fas fa-gamepad"></i><span><label>&nbsp;&nbsp; Interest: </label>
                                        xxxxxxxxxxxxxxxx</span>
                                </li>
                                <li><i class="fas fa-envelope"></i><span><label>&nbsp;&nbsp; E-mail: </label><a href="mailto:hallo@zakialawi.my.id" target="_blank">hallo@zakialawi.my.id</a>
                                    </span>
                                </li>
                                <li><i class="fab fa-whatsapp"></i><span><label>&nbsp;&nbsp; Phone: </label><a href="https://wa.me/18105805304" target="_blank">+1 (810) 580-5304</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <a href="{{ asset("/assets/CV.pdf") }}" class="btn fas fa-download" target="_blank" data-aos="fade-down" delay="0.8">&nbsp;
                    Download CV</a>
                <a href="/Detail-Resume" class="btn fas fa-external-link-alt" target="_blank" data-aos="fade-down" delay="0.8">&nbsp; Detail
                </a>
            </div>
        </div>

    </section>

    <!-- ABOUT ends -->

    <!-- PORTFOLIO  -->
    <section class="portfolio" id="portfolio">

        <div class="title-porto">
            <h1 style="font-size: 3rem;">OUR WORKS</h1>
        </div>

        <div class="wrapper">
            <!-- filter Items -->
            <nav>
                <div class="items">
                    <span class="item active" data-name="all">All</span>
                    <span class="item" data-name="Photo">Photo</span>
                    <span class="item" data-name="Design">Design</span>
                    <span class="item" data-name="Web">Web</span>
                </div>
            </nav>
            <!-- filter Images -->
            <div class="gallery">
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/IMG_8576-7.jpg") }}" alt=""></span></div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/20190803_054047-scaled.jpg") }}" alt=""></span></div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/P_20180410_150823_SRES.jpg") }}" alt=""></span></div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/Copy-of-IMG_6743-2-scaled.jpg") }}" alt=""></span></div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/IMG20190624073359-scaled.jpg") }}" alt=""></span></div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/IMG_0087-1-rotated.jpg") }}" alt=""></span></div>
                <div class="image web-hover " data-name="Web"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/Personal-Web.png") }}" alt=""></span>
                    <p><span><a href="https://zakialawi.my.id/" target="_blank" class="btn-web">Visit Page</a></span>
                    </p>
                </div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/IMG_7621-1-scaled.jpg") }}" alt=""></span>
                </div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/IMG_7643-scaled.jpg") }}" alt=""></span>
                </div>
                <div class="image" data-name="Photo"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/IMG_9978-5-scaled.jpg") }}" alt=""></span>
                </div>
                <div class="image" data-name="Design"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/01.-Cover.png") }}" alt=""></span></div>
                <div class="image" data-name="Design"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/01-cloud.jpg") }}" alt=""></span></div>
                <div class="image" data-name="Design"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/01-Hari-ulang-tahun-ITS-(10-Nov).png") }}" alt=""></span></div>
                <div class="image web-hover" data-name="Web"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/zakiphoto.png") }}" alt=""></span>
                    <p><span><a href="http://gallery.zakialawi.my.id/" target="_blank" class="btn-web">Visit
                                Page</a></span></p>
                </div>
                <div class="image web-hover " data-name="Web"><span><img loading="lazy" src="{{ asset("/assets/img/me/Portfolio/himage.png") }}" alt=""></span>
                    <p><span><a href="https://arek.its.ac.id/himage" target="_blank" class="btn-web">Visit
                                Page</a></span></p>
                </div>
            </div>
        </div>
        </div>
        <!-- fullscreen img preview box -->
        <div class="preview-box">
            <div class="details">
                <span class="title">Category: <p></p></span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box"><img src="" alt=""></div>
        </div>
        <div class="shadow"></div>


    </section>

    <!-- PORTFOLIO ends -->

    <!-- QUOTES  -->
    <section class="QOFTD">

        <div class="quote-section" id="quote">
            <div class="quotes">
                <div class="QTD">Quote of the Day</div>
                <div class="content">
                    <div class="quote-area">
                        <i class="fas fa-quote-left"></i>
                        <p class="quote">The beginning is always today.</p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="author">
                        <span>__</span>
                        <span class="name">Mary Wollstonecraft</span>
                    </div>
                </div>
                <div class="buttons">
                    <div class="features">
                        <ul>
                            <li class="speech"><i class="fas fa-volume-up"></i></li>
                            <li class="copy"><i class="fas fa-copy"></i></li>
                            <li class="twitter"><i class="fab fa-twitter"></i></li>
                        </ul>
                        <button id="btn-new-quote">New Quote</button>
                    </div>
                </div>
            </div>
            <p class="credit-quote">Random Quote Generator, Credit by <a target="_blank" href="https://www.codingnepalweb.com/random-quote-generator-html-javascript/">&nbsp;
                    codingnepalweb</a></p>
            <p class="credit-quote">API by <a target="_blank" href="https://github.com/lukePeavey/quotable">&nbsp;
                    Quotable</a></p>
        </div>

    </section>

    <!-- Quote ends -->


    <!-- Anonymous Message -->

    <section class="pesan">

        <div class="title-pesan">
            <h1 style="font-size: 3rem;">ANONYMOUS MESSAGE</h1>
        </div>
        <div class="quote-section" id="quote">
            <div class="quotes">
                <div id="chat-box" class="card-chat scroll">

                    <center>
                        <?php foreach ($notes as $pesan) : ?>
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">~ <?= $pesan->pesan_dari ?></div>
                                <div class="msg-info-time"><?= date("d M Y h:i A", strtotime($pesan->created_at)) ?></div>
                            </div>

                            <div class="msg-text">
                                <?= $pesan->pesan ?>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </center>

                    <div class="garisbatasbawah"></div>
                </div>

                <?php if (session()->has('alert')) : ?>
                <div id="toastContainer" class="toastContainer">
                    <p><?= session()->has("alert") ?>
                        <span id="close">
                            <button id="closebtn" onclick="closetoast()">&times;</button>
                        </span>
                    </p>
                </div>
                <?php endif; ?>

                <div class="buttons">
                    <form action="#" method="POST" autocomplete="off" class="form" for="pesan">
                        <textarea style="margin-top: 0.8rem; margin-bottom: 0.3rem;" cols="5" rows="2" placeholder="Your Message" name="pesan" id="pesan" for="pesan" required></textarea>
                        <input type="text" placeholder="eg: seseorang/anonim" name="pesan_dari" id="pesan_dari" />

                        <h4 id="sent-notification" class="sent-notification"></h4>

                        <button class="btn-send" type="submit" value="">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!-- Anonymous Message end -->

    <!-- doctor section start  -->
    <!-- <section class="doctor" id="doctor">

                                                                                                                                                                                                                <h1 class="heading">consult to our doctors</h1>

                                                                                                                                                                                                                <div class="box-container">

                                                                                                                                                                                                                    <div class="box">
                                                                                                                                                                                                                        <img src="images/doc1.png" alt="">
                                                                                                                                                                                                                        <h3>john doe</h3>
                                                                                                                                                                                                                        <span>senior expert</span>
                                                                                                                                                                                                                        <div class="share">
                                                                                                                                                                                                                            <a href="#" class="fab fa-whatsapp"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-facebook-f"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-twitter"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-instagram"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-linkedin"></a>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                    <div class="box">
                                                                                                                                                                                                                        <img src="images/doc2.png" alt="">
                                                                                                                                                                                                                        <h3>john doe</h3>
                                                                                                                                                                                                                        <span>senior expert</span>
                                                                                                                                                                                                                        <div class="share">
                                                                                                                                                                                                                            <a href="#" class="fab fa-whatsapp"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-facebook-f"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-twitter"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-instagram"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-linkedin"></a>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                    <div class="box">
                                                                                                                                                                                                                        <img src="images/doc3.png" alt="">
                                                                                                                                                                                                                        <h3>john doe</h3>
                                                                                                                                                                                                                        <span>senior expert</span>
                                                                                                                                                                                                                        <div class="share">
                                                                                                                                                                                                                            <a href="#" class="fab fa-whatsapp"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-facebook-f"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-twitter"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-instagram"></a>
                                                                                                                                                                                                                            <a href="#" class="fab fa-linkedin"></a>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                </div>

                                                                                                                                                                                                            </section> -->
    <!-- doctor section ends -->

    <!-- CONTACT  -->

    <section class="contact" id="contact">

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

                    <img src="/assets/img/qrcontact.jpeg" alt="" class="qrcontact">

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
                    <form action="#" method="POST" autocomplete="off" class="form" id="myForm" name="myform">
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
                        <button class="btn-contact" type="submit">Submit</button>

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
@endsection

@push("javascript")
    <script>
        $(".btn-contact").click(function(e) {
            e.preventDefault();
            alert("Sorry, this service is not available yet. You can contact me by email or scan the QR code.");
        });
    </script>
    <script>
        function sendMessage() {
            const formData = {
                _token: "{{ csrf_token() }}",
                pesan: pesan.value,
                pesan_dari: pesan_dari.value
            }
            $.ajax({
                type: "post",
                url: "{{ route("storePesan") }}",
                data: formData,
                dataType: "json",
                beforeSend: function() {
                    $("#sent-notification").html(`<div class="text-center">sending...</div>`);
                },
                success: function(response) {
                    const html = `<div class="text-success" role="alert">${response.message}</div>`;
                    $("#sent-notification").html(html);
                    loadMessages();
                    pesan.value = "";
                    pesan_dari.value = "";
                    setTimeout(() => {
                        $("#sent-notification").html("");
                    }, 4000);
                },
                error: function(error) {
                    console.log(error);
                    const html = `<div class="text-danger" role="alert">${error.responseJSON.message}</div>`;
                    $("#sent-notification").html(html);
                }
            });
        }

        function loadMessages() {
            $.ajax({
                type: "get",
                url: "{{ route("showPesan") }}",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                dataType: "html",
                success: function(response) {
                    $("#chat-box").html(response);
                },
                error: function(error) {
                    console.error(error);
                    $("#chat-box").html("Load Messages (error)");
                }
            });
        }

        $('.btn-send').click(function(e) {
            e.preventDefault();
            sendMessage()
        });
    </script>
@endpush
