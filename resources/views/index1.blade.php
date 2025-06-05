<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Ejji Coffee</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="css/contactform.css">
            
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
            function validasi() {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;


                if (nama.length == 0) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }

                if (nama.length < 2) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama minimal 2 huruf",
                        icon: "error"
                    });
                    return false;
                }

                var regex = /\d/;
                if (regex.test(nama)) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama harus semua huruf",
                        icon: "error"
                    });
                    return false;
                }

                if (nrp.length == 0) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nomor hp tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }

                if (!/^\d+$/.test(nrp)) {
                    Swal.fire({
                    title: "Kesalahan Input",
                    text: "Nomor hp harus berupa angka semua",
                    icon: "error"
                    });
                    return false;
                }

                if (nrp.length < 11) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nomor hp minimal 11 angka",
                        icon: "error"
                    });
                    return false;
                }

                if (nrp.length > 13) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nomor hp maksimal 13 angka",
                        icon: "error"
                    });
                    return false;
                }

                return true;

            }
        </script>
    </head>
    <body id="page-top">

        <!-- Masthead-->
        <header class="masthead">
            <div
                class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </header>

        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <h1 class="text-black mb-5" style="font-weight: bold;">OUR SIGNATURE MENU</h1>
                        <div class="column">
                                <img src="assets/img/Ejji-Coffe.png" alt="ejji"
                                    width="250" />
                                <p class="text-black" style="font-size: 24px;">
                                    Ejji Coffee
                                </p>
                            </div>
                            <div class="column">
                                <img src="assets/img/Chokoreto-Superstar.png" alt="chokoreto"
                                    width="250" />
                                <p class="text-black" style="font-size: 24px;">
                                    Chokoreto Superstar
                                </p>
                            </div>

                            <div class="column">
                                <img src="assets/img/Biscoff-Latte.png" alt="biscoff"
                                    width="250" />
                                <p class="text-black" style="font-size: 24px;">
                                    Biscoff Latte
                                </p>
                            </div>

                            <div class="column">
                                <img src="assets/img/Ginger-Lime.png" alt="ginger"
                                    width="250" />
                                <p class="text-black" style="font-size: 24px;">
                                    Ginger
                                </p>
                            </div>
                            
                        </div>

                </div>
            </div>
        </section>

        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-4 col-lg-5">
                        <div class=" text-left ">
                            <h1 class = "mb-5" style="font-weight: bold;">Gebrakan Budaya Ngopi di Indonesia!</h1>
                            <p class="text-black mb-0" style="font-size: 22px;">Ejji Coffee Corner menghadirkan konsep dan style kedai kopi ala Jepang. Kami ingin mengajak semua orang mulai dari penikmat kopi, mereka yang suka nongkrong dan ingin terlihat suka kopi, hingga yang bukan penggemar kopi untuk menikmati budaya baru ngopi yang asyik.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" width="400" style="margin-left: 300px;" src="assets/img/img-home-breaking.jpg" alt="..." /></div>
                </div>
            </div>
        </section>

        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col mx-auto text-center">
                        <h1 class="text-white mb-5" style="font-weight: bold; font-size: 100px;">Discover the process</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="form-container">
                    <div class="form-title">Love to hear from you, Get in touch
                        👋</div>
                    <form action="https://google.co.id" method="get"
                        onsubmit="return validasi();">
                        <div class="form-group">
                            <label for="nama">Your Name</label>
                            <input type="text" name="nama" id="nama"
                                class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nomor Hp</label>
                            <input type="text" name="nrp" id="nrp"
                                class="form-control"
                                placeholder="Enter your handphone nomor">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject"
                                class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message"
                                class="form-control"
                                placeholder="Let us know your project about"
                                rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Just
                            Send</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script
            src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
