<!-- stockprice, feed area start-->
<div class="login-form-area">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="sparkline7-list stock-price-section shadow-reset nt-mg-b-30">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Laporan</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="<?= base_url() ?>admin/riwayat/cetak/" target="_blank">Print Out</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- stockprice, feed area end-->
    <!-- Static Table Start -->
    <div class="static-table-area mg-b-40">
        <div class="container">
            <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        if( $this->session->flashdata('sukses') ) {
                            echo '<div class="alert-wrap2 shadow-reset wrap-alert-b">';
                            echo    '<div class="alert alert-success">';
                            echo        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            echo        "<strong>Berhasil! </strong>".$this->session->flashdata('sukses')."</div></div>";
                        }
                        if( $this->session->flashdata('gagal') ) {
                            echo '<div class="alert-wrap2 shadow-reset wrap-alert-b">';
                            echo    '<div class="alert alert-danger">';
                            echo        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            echo        "<strong>Gagal! </strong>".$this->session->flashdata('gagal')."</div></div>";
                        }
                    ?>
                    <div class="sparkline10-list shadow-reset mg-t-30">
                        <div class="sparkline10-hd">
                            <div class="main-sparkline10-hd">
                                <h1>Data Riwayat</h1>
                                <div class="sparkline10-outline-icon">
                                    <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline10-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline10-graph">
                            <div class="static-table-list">
                                <table class="table border-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="600px">Nama</th>
                                            <th>Tanggal Konsultasi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1; foreach ($riwayat as $row) { ?>
                                            <tr>
                                                <td><?= $x++; ?></td>
                                                <td><?= $row['nama']; ?></td>
                                                <td><?= date('d / m / Y', $row['tanggal_konsul']); ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>admin/riwayat/unduh?id_riwayat=<?= $row['id_riwayat'] ?>" type="button" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->                        
