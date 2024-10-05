<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<style>
.side {
    min-height: 95vh;
}
</style>

<body>
    <!--Start: Sidebar-->
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php 
            include($_SERVER['DOCUMENT_ROOT'].'/pinjaman/src/layout/sidebar.php');
            ?>
            <div class="col-10 p-0 ">
                <div class="row g-0">
                    <div class="col-12 p-3 bg-primary text-white">
                        <div class="row">
                            <div class="col-11"></div>
                            <div class="col-1"><i class="bi bi-person-circle"></i></div>
                        </div>
                    </div>
                </div>
                <div class="container mt-2">
                    <h3 class="m-3 border-bottom">Dashboard</h3>
                    <div class="row">
                        <div class="container d-flex ms-0 justify-content-center">
                            <div class="col-4 m-2">
                                <div class="card text-center">
                                    <div class="card-header">
                                        Surat
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">jumlah surat adalah <b>5</b>.</p>
                                        <a href="../component/surat/data_surat.php" class="btn btn-primary">Data</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 m-2">
                                <div class="card text-center">
                                    <div class="card-header">
                                        Dokumen
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">jumlah Dokumen adalah <b>5</b>.</p>
                                        <a href="../component/dokumen/data_dokumen.php" class="btn btn-primary">Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    include($_SERVER['DOCUMENT_ROOT'].'/pinjaman/src/layout/footer.html');
    ?>