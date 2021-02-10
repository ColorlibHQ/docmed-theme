    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <?php 
                                // Social profiles
                                $social_opt = docmed_opt('docmed_social_profile_toggle');
                                if ( $social_opt == true ) {
                                    $social_items = docmed_opt('docmed_social_profiles');
                                    if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                        echo '<div class="social_media_links">';
                                            foreach ($social_items as $value) {
                                                echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a>';
                                            }
                                        echo '</div>';
                                    }          
                                }  
                            ?>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <?php
                                    $docmed_header_top_email = docmed_opt('docmed_header_top_email');
                                    $docmed_header_top_phone = docmed_opt('docmed_header_top_phone');
                                ?>
                                <ul>
                                    <?php
                                        if($docmed_header_top_email != '') {
                                            echo '<li><a href="mailto:'.esc_attr($docmed_header_top_email).'"> <i class="fa fa-envelope"></i> '.$docmed_header_top_email.'</a></li>';
                                        }
                                        if($docmed_header_top_phone != '') {
                                            echo '<li><a href="tel:'.esc_attr($docmed_header_top_phone).'"> <i class="fa fa-phone"></i> '.$docmed_header_top_phone.'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <?php echo docmed_theme_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => 'navigation',
                                                'container_class' => false,
                                                'container_id'    => false,
                                                'menu_class'      => false,
                                                'depth'           => 3,
                                                'walker'          => new docmed_bootstrap_navwalker()
                                            ));
                                        }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <?php
                                if ( !empty( docmed_opt('docmed_header_btn_text') )) { 
                                    $header_btn_text = docmed_opt('docmed_header_btn_text');
                                    $header_btn_url  = docmed_opt('docmed_header_btn_url');
                                    ?>
                                    <div class="book_btn d-none d-lg-block">
                                        <a class="" href="<?=esc_url($header_btn_url)?>"><?=esc_html($header_btn_text)?></a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->