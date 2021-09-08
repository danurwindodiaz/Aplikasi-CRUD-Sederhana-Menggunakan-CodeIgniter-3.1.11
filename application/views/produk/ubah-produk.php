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
                            UBAH PRODUK
                        </h2>
                    </div>
                    <div class="body row">
                        <form action="<?php echo base_url('index.php/produk/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="idProduk" id="" value="<?= $produk['idProduk']; ?>">
                            <input type="hidden" name="fotolama" id="" value="<?= $produk['foto']; ?>">
                            <div class="col-sm-6" style="margin-left: 15px;">
                                <div class="form-group row">
                                    <div class="form-line">
                                        <input type="text" name="namaProduk" class="form-control" placeholder="Nama Produk" value="<?= $produk['namaProduk']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-line">
                                        <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?= $produk['harga']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-line">
                                        <input type="text" name="stok" class="form-control" placeholder="Stok" value="<?= $produk['stok']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-line">
                                        <input name="status" type="radio" id="radio_1" value="Baru" <?= ($produk['status'] == 'Baru') ? 'checked' : ''; ?> />
                                        <label for="radio_1">Baru</label>
                                        <input name="status" type="radio" id="radio_2" value="Bekas" <?= ($produk['status'] == 'Bekas') ? 'checked' : ''; ?> />
                                        <label for="radio_2">Bekas</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <select class="form-control show-tick" name="kategori">
                                        <option value="">-- Kategori --</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['idKategori']; ?>" <?= ($produk['idKategori'] == $k['idKategori']) ? 'selected' : ''; ?>><?= $k['namaKategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <select class="form-control show-tick" name="merek">
                                        <option value="">-- Merek --</option>
                                        <?php foreach ($merek as $k) : ?>
                                            <option value="<?= $k['idMerek']; ?>" <?= ($produk['idMerek'] == $k['idMerek']) ? 'selected' : ''; ?>><?= $k['namaMerek']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Foto Produk</label>
                                    <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1" value="<?= $produk['foto']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="5" cols="7" style="border: 0.5px solid grey;"><?= $produk['deskripsi']; ?></textarea>
                                    <div class="" style="margin-top: 20px;">
                                        <button type="submit" class="btn btn-primary waves-effect">
                                            <i class="material-icons">save</i>
                                            <span>SAVE</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->
    </div>
</section>