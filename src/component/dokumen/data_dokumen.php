<?php
include($_SERVER['DOCUMENT_ROOT'].'/pinjaman/src/layout/header.php');

$query = mysqli_query($koneksi, "SELECT * FROM dokumen");
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
                <h3 class="m-3 border-bottom">Data Dokumen</h3>
                <div class="row">
                    <div class="col">
                        <a href="#" type="button" class="btn btn-primary ms-3" data-bs-toggle="modal"
                            data-bs-target="#ModalDokumen">Tambah Data</a>
                    </div>
                    <!--Start: Modal-->
                    <div class="modal fade" id="ModalDokumen" tabindex="-1" aria-labelledby="ModalDokumenLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="ModalDokumenLabel">Tambah Dokumen</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="tambah_dokumen.php">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="pemohon" class="form-label">Pemohon</label>
                                                <input type="text" class="form-control" placeholder="Pemohon"
                                                    name="pemohon">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                                                <input type="text" class="form-control" placeholder="Jenis Dokumen"
                                                    name="jenis_dokumen">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
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
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        while ($inidatanya = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $inidatanya['pemohon'];?></td>
                                            <td><?php echo $inidatanya['jenis_dokumen'];?></td>
                                            <td>
                                                <a href="#" class="btn btn-outline-success me-2"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
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