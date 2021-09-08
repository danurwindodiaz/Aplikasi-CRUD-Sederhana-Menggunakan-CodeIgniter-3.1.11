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
                            TAMBAH MEREK
                        </h2>
                    </div>
                    <div class="body row">
                        <form action="<?php echo base_url('index.php/merek/insert') ?>" method="post">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="namaMerek" class="form-control" placeholder="Nama Merek" />
                                    </div>
                                    <div style="margin-top: 20px;">
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