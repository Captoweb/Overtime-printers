<?php get_header(); ?>

<div class="d-none d-sm-block"> 
<?php echo do_shortcode('[metaslider id="343"]'); ?>
</div>


<div class="d-block d-sm-none">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/bg1-mobile2-min.jpg" alt="banner" title="" class="img-fluid" />
    
</div>


   <section class="services">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 plus text-center">
                  <a href="http://faceto.space/printers/%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8/%d0%b7%d0%b0%d0%bf%d1%80%d0%b0%d0%b2%d0%ba%d0%b0/">
                <div class="card">
                 <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/zapravka.jpg" alt="Card image cap">
                 <div class="card-body">
                     <p class="card-text">Заправка картриджей</p>
                 </div>         
                </div>
                 </a>
                </div>
              
              <div class="col-sm-6 col-md-3  plus text-center">
                <a href="http://faceto.space/printers/%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8/%d1%80%d0%b5%d0%bc%d0%be%d0%bd%d1%82-%d0%bf%d1%80%d0%b8%d0%bd%d1%82%d0%b5%d1%80%d0%be%d0%b2/">
                <div class="card">
                    <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/Repair3.jpg" alt="Card image cap">
                <div class="card-body">
               <p class="card-text">Ремонт принтеров</p>
                    </div>
                  </div>
                 </a>
              </div>
              
              <div class="col-sm-6 col-md-3  plus text-center">
                  <a href="http://faceto.space/printers/%d1%80%d0%b5%d0%bc%d0%be%d0%bd%d1%82-%d0%ba%d0%b0%d1%80%d1%82%d1%80%d0%b8%d0%b4%d0%b6%d0%b5%d0%b9/">
                <div class="card">
                    <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/kartr.jpg" alt="Card image cap">
                <div class="card-body">
               <p class="card-text">Ремонт картриджей</p>
                    </div>
                  </div>
                  </a>
              </div>
              
              <div class="col-sm-6 col-md-3  plus text-center">
                  <a href="http://faceto.space/printers/%d1%82%d0%be%d0%b2%d0%b0%d1%80%d1%8b/%d0%ba%d0%b0%d1%80%d1%82%d1%80%d0%b8%d0%b4%d0%b6%d0%b8/">
                <div class="card">
                    <img class="card-img-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/toner2.jpg" alt="Card image cap">
                <div class="card-body">
               <p class="card-text">Купить картридж</p>
                    </div>
                  </div>
                  </a>
              </div>
              
            </div>
        </div>
   </section>
   
   <section class="ourplus">
       <div class="container">
          <h3>Наши преимущества</h3>
           <div class="row">
             
              <div class="col-md  text-center">
               <div class="card2"> 
               <i class="far fa-clock icons"></i>
                <h5>Быстро</h5>
                <p>Заправка картриджа 5-10минут</p>
                </div>
              </div>
              
               <div class="col-md  text-center">
               <div class="card2"> 
               <i class="fas fa-shield-alt icons"></i>
                   <h5>Надежно</h5>
                   <p>Гарантия на все
                    произведенные работы</p>
                </div>
              </div>
             
              <div class="col-md  text-center">
               <div class="card2 right"> 
               <i class="fas fa-award icons">icon</i> 
               
                <h5>Качественно</h5>
                <p>У нас только опытные мастера</p>
                </div>
              </div>
           </div>
       </div>
   </section>
   
   <section class="aboutus">
      
            <div class="container">
           <div class="row">
           <div class="col-es-12 col-md-6 col-lg-5 col-el-4 "><!--form-->
          <?php  echo do_shortcode('[ninja_form id=2]'); ?>
          </div>
          

           <div class="col-es-12 col-md-6 col-lg-7 col-el-8">
           <?php  while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                      
                       the_content(); // выводим контент
                    endwhile; ?>
           </div>
           </div>
       </div>
   </section>



<?php get_footer(); ?>
