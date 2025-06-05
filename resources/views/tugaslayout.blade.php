<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="css/sidebar.css">
        <link rel="stylesheet"
            href="css/margin.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row d-flex d-md-block flex-nowrap wrapper">
                <div
                    class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show"
                    id="sidebar">
                    <div class="list-group border-0 text-center text-md-left">
                        <i class="fa fa-dashboard"></i> <span
                            class="d-none d-md-inline">
                            <div class="d-flex align-items-center mt-3 pl-3 text-white">
                                <img src="image/Frame627275.png" alt="Nagisa Natsumi" class="rounded-circle" style="width:60px; height:60px;">
                                <div class="ml-3">
                                    <h5 class="mb-0">Nagisa Natsumi</h5>
                                    <p class="mb-0">nagisanatsumi@gmail.com</p>
                                </div>
                            </div>
                        </span>
                        <a href="#"
                            class="list-group-item d-inline-block collapsed">
                            <i class="fa-solid fa-list-check"></i> <span
                                class="d-none d-md-inline">Helperlog</span></a>
                        <a href="#"
                            class="list-group-item d-inline-block collapsed">
                            <i class="fa-solid fa-magnifying-glass"></i> <span
                                class="d-none d-md-inline">Helperfind</span></a>
                        <a href="#"
                            class="list-group-item d-inline-block collapsed"
                            data-parent="#sidebar"><i class="fa-regular fa-message"></i>
                            <span class="d-none d-md-inline">Helperassist</span></a>

                    </div>
                </div>
                <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                    <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                            class="text-dark fa fa-list fa-lg py-2 p-1"></i></a>
                    <div class="page-header">
                        <h2><i class="fa-solid fa-arrow-left left-margin"></i> Pengajuan Kontrak</h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"> <img src="image/gambarlayout.png" class="mb-3 ml-3 rounded-lg">
                            <h4 class="ml-3">Nagisa Natsumi</h4>
                            <p class="ml-3">Perawat Lansia</p>
                            <div class="container">
                                <div class="card p-3 shadow-sm rounded">
                                    <div class="row text-center">
                                        <div class="col border-right">
                                            <h4 class="mb-0">4</h4>
                                            <p class="text-muted small">Tahun Pengalaman</p>
                                        </div>
                                        <div class="col">
                                            <h4 class="mb-0"><i class="fa fa-star text-warning"></i> 4.6</h4>
                                            <p class="text-muted small">Rating</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            </div>
                            <div class="col-md-6">
                                <div class="card p-4 shadow-sm rounded">
                                    <h4 class="text-center mb-3">Form Pengajuan Kontrak</h4>
                                    <form>
                                        <div class="form-group">
                                            <label>Nama Pengaju</label>
                                            <input type="text" class="form-control" placeholder="Masukkan nama pengaju">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Pengaju</label>
                                            <textarea class="form-control" placeholder="Masukkan alamat lengkap Anda" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Penempatan Kerja</label>
                                            <input type="text" class="form-control" value="Surabaya" disabled>
                                        </div>
                                        <div class="form-check mb-3">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" value="">Ajukan Penempatan di luar Domisili
                                            </label>
                                          </div>
                                        <div class="form-group">
                                            <label for="rencanaMasaKontrak">Rencana Masa Kontrak</label>
                                            <select class="form-control bottom-margin" id="rencanaMasaKontrak">
                                                <option>1 bulan</option>
                                                <option>3 bulan</option>
                                                <option>6 bulan</option>
                                                <option>1 tahun</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary btn-block">Ajukan Kontrak</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </main>
            </div>
        </div>
    </body>
</html>
