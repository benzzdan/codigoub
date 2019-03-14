    <?php 
    
        
        if($this->uri->segment(1) == 'es'){
            $lang = 'es';
        }elseif($this->uri->segment(1) == 'en') {
            $lang = 'en';
        }else {
            $lang = false;
        }

    ?>
    
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <div class="wrapper">
            <a  class="ninja-btn" title="menu"><span></span></a>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="<?php if($lang == 'es') { echo base_url('es'); } elseif($lang == 'en') { echo base_url('en'); } else { echo base_url('');} ?>">01 <?php echo $this->lang->line('menu_links_home')?>
                <span class="selector-menu"></span>
            </a>
            <a href="<?php if($lang == 'es') { echo base_url('es/firma'); } elseif($lang == 'en') { echo base_url('en/firma'); } else { echo base_url('firma');} ?>">02 <?php echo $this->lang->line('menu_links_firma')?>
                <span class="selector-menu"></span>
            </a>
            <a href="<?php if($lang == 'es') { echo base_url('es/servicios'); } elseif($lang == 'en') { echo base_url('en/servicios'); } else { echo base_url('servicios');} ?>">03 <?php echo $this->lang->line('menu_links_servicios')?>
                <span class="selector-menu"></span>
            </a>
            <a href="<?php if($lang == 'es') { echo base_url('es/proyectos'); } elseif($lang == 'en') { echo base_url('en/proyectos'); } else { echo base_url('proyectos');} ?>">04 <?php echo $this->lang->line('menu_links_proyectos')?>
                <span class="selector-menu"></span>
            </a>
            <a href="<?php if($lang == 'es') { echo base_url('es/contacto'); } elseif($lang == 'en') { echo base_url('en/contacto'); } else { echo base_url('contacto');} ?>">05 <?php echo $this->lang->line('menu_links_contacto')?>
                <span class="selector-menu"></span>
            </a>
         </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="#">
                     <picture>
                      <?php if($caruselImages[0]['nombre'] != '') { ?>
                        <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[0]['nombre']; ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[0]['nombre']; ?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[0]['nombre']; ?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[0]['nombre']; ?>" alt="responsive image" class="d-block img-fluid">
                    
                    <?php
                      } else { ?>
                      <source srcset="<?php echo base_url('assets/images/PH01.jpg'); ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('assets/images/PH01.jpg');?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('assets/images/PH01.jpg');?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('assets/images/PH01.jpg');?>" alt="responsive image" class="d-block img-fluid">
                      <?php } ?>
                    </picture>

                    <div class="carousel-caption">
                        <div>
                        <h2><?php echo ($this->uri->segment(1) == 'en' ?  $caruselImages[0]['titulo_en'] :  $caruselImages[0]['titulo'])?></h2>
                            <p><?php echo ($this->uri->segment(1) == 'en' ?  $caruselImages[0]['subtitulo_en'] :  $caruselImages[0]['subtitulo'])?></p>
                            <!-- TODO: fix this links buttons learn more.... -->
                            <span class="btn btn-sm btn-outline-secondary" style="display: none">Learn More</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">


                <a href="#">
                <picture>
                      <?php if($caruselImages[1]['nombre'] != '') { ?>
                        <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[1]['nombre']; ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[1]['nombre']; ?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[1]['nombre']; ?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[1]['nombre']; ?>" alt="responsive image" class="d-block img-fluid">
                    
                    <?php
                      } else { ?>
                      <source srcset="<?php echo base_url('assets/images/PH02.jpg'); ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('assets/images/PH02.jpg');?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('assets/images/PH02.jpg');?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('assets/images/PH02.jpg');?>" alt="responsive image" class="d-block img-fluid">
                      <?php } ?>
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                        <h2><?php echo ($this->uri->segment(1) == 'en' ?  $caruselImages[1]['titulo_en'] :  $caruselImages[1]['titulo'])?></h2>
                            <p><?php echo ($this->uri->segment(1) == 'en' ?  $caruselImages[1]['subtitulo_en'] :  $caruselImages[1]['subtitulo'])?></p>
                                <!-- TODO: fix this links buttons learn more.... -->
                            <span class="btn btn-sm btn-outline-secondary" style="display: none">Our Process</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="#">
                <picture>
                      <?php if($caruselImages[2]['nombre'] != '') { ?>
                        <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[2]['nombre']; ?>" media="(min-width: 1422px)">
                      <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[2]['nombre']; ?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[2]['nombre']; ?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('uploads/carusel/') . $caruselImages[2]['nombre']; ?>" alt="responsive image" class="d-block img-fluid">
                    
                    <?php
                      } else { ?>
                      <source srcset="<?php echo base_url('assets/images/PH03.jpg'); ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('assets/images/PH03.jpg');?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('assets/images/PH03.jpg');?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('assets/images/PH03.jpg');?>" alt="responsive image" class="d-block img-fluid">
                      <?php } ?>
                    </picture>
                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2><?php echo ($this->uri->segment(1) == 'en' ?  $caruselImages[2]['titulo_en'] :  $caruselImages[2]['titulo'])?></h2>
                            <p><?php echo ($this->uri->segment(1) == 'en' ?  $caruselImages[2]['subtitulo_en'] :  $caruselImages[2]['subtitulo'])?></p>
                                <!-- TODO: fix this links buttons learn more.... -->
                            <span class="btn btn-sm btn-secondary" style="display: none">Learn How</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



<!-- NUESTRA FIRMA -->

  <div class="row no-gutters">
    <div class="col-md-6" style="padding: 5% 5% 0% 14%">
        <h2 class="bold" style="color: red;"><?php echo $this->lang->line('menu_links_firma')?></h2>
        <p><?php echo $this->lang->line('nuestra_firma')?></p>
        <a class="btn btn-outline-dark" style="margin-right: 3vh" href="<?php echo base_url('firma'); ?>"><?php echo $this->lang->line('nuestra_firma_boton')?></a>
        <div class="push"></div>
    </div>
    <div class="col-md-6 firma_main">
        <img class="img-fluid" src="<?php echo base_url('uploads/firma/' . $firmaPhoto[0]['nombre'])?>" alt="" style="min-height: 462px;">
    </div>
  </div>
  <div class="w-100" style="background-color: #a8a9ab; min-height: 500px;">
        <div class="container-fluid text-center" style="padding-top: 5vh">
            <h1 class="white bold" style="margin-bottom: 3vh"><?php echo $this->lang->line('proyecto_titulo')?></h1>
            <div class="mx-auto" style="width: 920px">
                <p class="white-s">
                    <?php echo $this->lang->line('proyecto_parrafo')?>
                </p>
                <div class="push"></div>

                <div class="d-block text-center">
                    <button id="post-todos" type="submit" class="active btn btn-outline-gray spacingbtn"><?php echo $this->lang->line('proyecto_todo')?></button>
                    <?php foreach($categorias as $categoria):?>
                            <button  id="<?php echo $categoria['id'];?>" type="button" class="btn btn-outline-gray catbuttons spacingbtn"><?php echo $categoria['nombre']; ?></button>
                    <?php endforeach;?>
                    <script>
                $('.catbuttons').click(function(){
                $('.btn-outline-gray').removeClass('active');
                $(this).addClass('active');  
                });

                $(document).ready(function(){
                    $('.catbuttons').click(function(){
                        console.log($(this).attr('id'));
                        var catId = $(this).attr('id');
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('pages/categoria/')?>" + catId,
                           
                            success: function(data) 
                            {
                                $('.ajax-container').fadeIn().html(data);
                            }
                        });


                        $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '10px')});
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '10px')});

                    });
                });

                $(document).ready(function(){
                    ajax_posts_all();
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '10px')});
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '10px')});

                });

                function ajax_posts_all(){
                    $('#post-todos').click(function(){
                        
                        $('.btn-outline-gray').removeClass('active');
                        $(this).addClass('active');  
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('pages/proyectos_all')?>",
                           
                            success: function(data) 
                            {
                                $('.ajax-container').fadeIn().html(data);
                            }
                        });
                    });
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '10px')});
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '10px')});

                  

                }

        </script>
                </div>
            </div>
            <div class="push"></div>


                <div class="mx-auto proyectos" >
                    <!-- <div class="row no-gutters">
                        <div class="col-6"style="padding-right: 2vh">
                            <img class="img-fluid" src="<?php echo base_url('img/tunnelproject.jpg')?>" alt="" style="height: 388px">
                        </div>
                        <div class="col-6 mosaico">
                            <div class="row no-gutters" style="padding-bottom: 2vh">
                                <div class="col" style="padding-right: 1vh">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/proyect2.jpg')?>" alt="" >
                                </div>
                                <div class="col">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/project3.jpg')?>" alt="" >
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col" style="padding-right: 1vh">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/proyect4.jpg')?>" alt="" >
                                </div>
                                <div class="col">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/proyect4.jpg')?>" alt="" >
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php $this->load->view('templates/proyectos_even.php'); ?>
                </div>
            <div class="push"></div>
            <div class="push"></div>
        </div>
        <div class="container">
            <div class="row text-center" style="display: inherit">
                <a class="white" href="<?php if($lang == 'es') { echo base_url('es/proyectos'); } elseif($lang == 'en') { echo base_url('en/proyectos'); } else { echo base_url('proyectos');} ?>""><?php echo $this->lang->line('proyecto_vermas')?></a>
            </div>
        </div>
        <div class="push"></div>
  </div>


