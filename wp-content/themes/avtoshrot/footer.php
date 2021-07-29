</div>
          <!-- START BRAND-LOGO-AREA -->
      <div class="brand-logo-area carosel-navigation">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="area-title">
                <h3 class="title-group border-red gfont-1">Робочі Бренди</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="active-brand-logo">
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/1.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/2.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/3.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/1.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/2.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/3.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/1.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/2.png" alt=""></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="single-brand-logo">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/brand/3.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END BRAND-LOGO-AREA -->
    <footer class="footer-area">
      <!-- Footer Start -->
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="logo">
                <?php $custom_logo_url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
                <a href="<?php echo get_home_url(); ?>" title="Автошрот"><img src="<?php echo $custom_logo_url[0]; ?>" alt="Автошрот"></a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="footer-title">
                <h5>Меню</h5>
              </div>
              <nav>
                <ul class="footer-content">
                  <li><a href="contact.html">Контакти</a></li>
                  <li><a href="about.html">Про нас</a></li>
                  <li><a href="#">Додаткова інформація</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-xs-12 hidden-sm col-md-3">
              <div class="footer-title">
                <h5>Категорії товарів</h5>
              </div>
              <nav>
                <ul class="footer-content">
                  <li><a href="#">Категорія 1 </a></li>
                  <li><a href="#"> Категорія 1 </a></li>
                  <li><a href="#">Категорія 1 </a></li>
                  <li><a href="#">Категорія 1 </a></li>
                  <li><a href="#">Категорія 1 </a></li>
                </ul>
              </nav>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
              <div class="footer-title">
                <h5>Контактні дані</h5>
              </div>
              <nav>
                <ul class="footer-content box-information">
                  <li>
                    <i class="fa fa-home"></i><span>Адреса</span>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@bootexperts.com</a></p>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i>
                    <span>063 00 00 00</span> <br> <span> 084 00 00 00</span>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>        
      </div>
      <!-- Footer End -->
      <!-- Copyright-area Start -->
      <div class="copyright-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright">
                <p>© 2021 Розроблено Івасюком Михайлом для  <a href="#" target="_blank"> дипломної роботи</a> All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright-area End -->
    </footer>
    <!-- FOOTER-AREA END -->        

  <?php wp_footer(); ?>

    </body>
</html>
