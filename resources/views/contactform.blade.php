<html>
    <head>
        <title>contact form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet"
            href="css/contactform.css">
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
    <body>
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
    </body>
</html>
