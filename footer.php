<?php $juanjimeneztj = new core_gsweb(); ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="text-center">Copyright © <?=date('Y')?> <?php $juanjimeneztj->company_footer() ?>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-4 col-md-3 col-lg-3 col-xl-2">
                        <?php $juanjimeneztj->logo_footer() ?>
                        <div class="navigation-footer">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu',
                                    'menu_id' => 'footer-menu',
                                ));
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-10">
                        <?php $juanjimeneztj->footer_disclaimer() ?>
                    </div>
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); ?>

        <?php
            $juanjimeneztj->vendorBS('js');
            $juanjimeneztj->vendorFAW('js');

            
            if($juanjimeneztj->top_navbar_active()){
                $juanjimeneztj->jquery();
                $juanjimeneztj->top_navbar_script();
            }
        ?>
    </body>
</html>