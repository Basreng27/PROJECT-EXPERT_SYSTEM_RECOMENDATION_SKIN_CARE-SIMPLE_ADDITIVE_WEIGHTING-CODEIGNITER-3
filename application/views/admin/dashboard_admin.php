<!-- Start Status area -->
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <?php $akun = $this->M_admin->get_all_akun()->num_rows(); ?>
                        <h2><span class="counter"><?= $akun ?></span></h2>
                        <p>Total akun admin</p>
                    </div>
                    <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <?php $product = $this->M_admin->get_all_product()->num_rows(); ?>
                        <h2><span class="counter"><?= $product ?></span></h2>
                        <p>Product Dewasa</p>
                    </div>
                    <div class="sparkline-bar-stats2">1,4,8,3,5,2,4,5,1,3,8,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <?php $product_r = $this->M_admin->get_all_product_remaja()->num_rows(); ?>
                        <h2><span class="counter"><?= $product_r ?></span></h2>
                        <p>Product</p>
                    </div>
                    <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <?php $kriteria = $this->M_admin->get_all_kriteria()->num_rows(); ?>
                        <?php $kriteria_r = $this->M_admin->get_all_kriteria_remaja()->num_rows(); ?>
                        <?php $kriteria_h = $kriteria + $kriteria_r ?>
                        <h2><span class="counter"><?= $kriteria_h ?></span></h2>
                        <p>Kriteria Dewasa & Remaja</p>
                    </div>
                    <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Status area-->