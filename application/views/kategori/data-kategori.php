<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>KATEGORI</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABEL DATA KATEGORI
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Ketegori</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_kategori as $dk => $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $dk + 1; ?></th>
                                        <td><?= $value['namaKategori']; ?></td>
                                        <td align="right">
                                            <a href="<?php echo base_url('index.php/kategori/ubah/' . $value['idKategori']) ?>" class="btn btn-xs btn-info waves-effect">
                                                <i class="material-icons">create</i>
                                            </a>
                                            <a href="<?php echo base_url('index.php/kategori/delete/' . $value['idKategori']) ?>" class="btn btn-xs btn-danger waves-effect">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->
    </div>
</section>