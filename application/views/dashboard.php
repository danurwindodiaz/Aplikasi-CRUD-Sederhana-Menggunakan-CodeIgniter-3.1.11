<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">swap_calls</i>
                    </div>
                    <div class="content">
                        <div class="text">KATEGORI</div>
                        <div class="number count-to" data-from="0" data-to="<?= count($kategori); ?>" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">pie_chart</i>
                    </div>
                    <div class="content">
                        <div class="text">MEREK</div>
                        <div class="number count-to" data-from="0" data-to="<?= count($merek); ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">widgets</i>
                    </div>
                    <div class="content">
                        <div class="text">PRODUK</div>
                        <div class="number count-to" data-from="0" data-to="<?= count($produk); ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
    </div>
</section>