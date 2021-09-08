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
                            UBAH KATEGORI
                        </h2>
                    </div>
                    <div class="body row">
                        <form action="<?php echo base_url('index.php/kategori/update') ?>" method="post">
                            <input type="hidden" name="idKategori" value="<?= $data_kategori['idKategori']; ?>" />
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="namaKategori" class="form-control" placeholder="Nama kategori" value="<?= $data_kategori['namaKategori']; ?>" />
                                    </div>
                                    <div style="margin-top: 20px;">
                                        <button type="submit" class="btn btn-primary waves-effect">
                                            <i class="material-icons">save</i>
                                            <span>SIMPAN</span>
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