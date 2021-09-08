<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>MEREK</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABEL DATA MEREK
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Merek</th>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_merek as $dm => $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $dm + 1; ?></th>
                                        <td><?= $value['namaMerek']; ?></td>
                                        <td align="right">
                                            <a href="<?php echo base_url('index.php/merek/ubah/' . $value['idMerek']) ?>" class="btn btn-xs btn-info waves-effect">
                                                <i class="material-icons">create</i>
                                            </a>
                                            <a href="<?php echo base_url('index.php/merek/delete/' . $value['idMerek']) ?>" class="btn btn-xs btn-danger waves-effect">
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