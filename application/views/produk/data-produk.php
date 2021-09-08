<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PRODUK</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABEL DATA PRODUK
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Merek</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Foto</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_produk as $dm => $value) : ?>
                                    <td><?= $dm + 1; ?></td>
                                    <td><?= $value['namaProduk']; ?></td>
                                    <td>
                                        <?php foreach ($kategori as $k) :
                                            echo ($value['idKategori'] == $k['idKategori']) ? $k['namaKategori'] : '';
                                        endforeach; ?>
                                    </td>
                                    <td>
                                        <?php foreach ($merek as $m) :
                                            echo ($value['idMerek'] == $m['idMerek']) ? $m['namaMerek'] : '';
                                        endforeach; ?>
                                    </td>
                                    <td><?= $value['harga']; ?></td>
                                    <td><?= $value['stok']; ?></td>
                                    <td><img src="<?php echo base_url() ?>assets/images/produk/<?= $value['foto']; ?>" alt="" width="100"></td>
                                    <td><?= $value['deskripsi']; ?></td>
                                    <td><?= $value['status']; ?></td>
                                    <td align="right">
                                        <a href="<?php echo base_url('index.php/produk/ubah/' . $value['idProduk']) ?>" class="btn btn-xs btn-info waves-effect">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="<?php echo base_url('index.php/produk/delete/' . $value['idProduk'] . '/' . $value['foto']) ?>" class="btn btn-xs btn-danger waves-effect">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
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