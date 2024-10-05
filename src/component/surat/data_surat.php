<?php
include($_SERVER['DOCUMENT_ROOT'].'/pinjaman/src/layout/header.php');
?>
<!--Start: Sidebar-->
<div class="container-fluid p-0">
    <div class="row g-0">
        <?php
            include($_SERVER['DOCUMENT_ROOT'].'/pinjaman/src/layout/sidebar.php');
            ?>
        <div class="col-10">
            <div class="row g-0">
                <div class="col-12 p-3 bg-primary text-white">
                    <div class="row">
                        <div class="col-11"></div>
                        <div class="col-1"><i class="bi bi-person-circle"></i></div>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <h3 class="m-3 border-bottom">Data Surat</h3>
                <div class="row">
                    <div class="col">
                        <a href="#" type="button" class="btn btn-primary ms-3" data-bs-toggle="modal"
                            data-bs-target="#ModalSurat">Tambah Data</a>
                    </div>
                    <!--Start: Modal-->
                    <div class="modal fade" id="ModalSurat" tabindex="-1" aria-labelledby="ModalSuratLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="ModalSuratLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End: Modal-->
                    <div class="col-4 me-3">
                        <form action="#" class="form-inline d-flex">
                            <input type="text" class="form-control me-2">
                            <input type="submit" value="Cari" class="btn btn-outline-primary">
                        </form>
                    </div>
                </div>
                <div class="row m-2 mt-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Pemohon</th>
                                            <th scope="col">Jenis Surat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Abdul</td>
                                            <td>Permohonan</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-success me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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