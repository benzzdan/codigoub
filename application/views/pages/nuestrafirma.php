<?php 
    
        
    if($this->uri->segment(1) == 'es'){
        $lang = 'es';
    }elseif($this->uri->segment(1) == 'en') {
        $lang = 'en';
    }else {
        $lang = false;
    }

?>

<div class="wrapper2">
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
             <div class="img-holder">
                <img src="<?php echo base_url('assets/images/nuestra_firma/Pano2.png');?>" class="img-fluid" alt="Responsive image">
                <div class="caption">
                    <h1 class="white bold text-center"><?php echo $this->lang->line('menu_links_firma')?></h1>
                    <p class="white text-center">| CÓDIGO UB |</p>
                </div>
             </div>
</div>

<div class="container-fluid" style="padding: 3% 15% 3% 15%">
    <h1 class="bold red text-center"><?php echo $this->lang->line('menu_links_firma')?></h1>
    <div class="push"></div>
    <p class="gray" style="text-align: justify">
    <?php echo $this->lang->line('footer_links_firma')?> <strong class="red"><?php echo $this->lang->line('codigoub_sa_cv')?></strong><?php echo $this->lang->line('nuestra_firma_page_parr1')?> 
    </p>
    <p class="gray" style="text-align: justify">
        <strong class="red">UBC</strong> (Uniform Building Code) <?php echo $this->lang->line('nuestra_firma_page_parr2')?> 
    </p>
</div>
 
                    <div class="row no-gutters" style="max-height: 790px">
                        <div class="col-6 bigimg-container">
                            <!-- <img class="img-fluid h-100" src="<?php echo base_url('assets/images/nuestra_firma/grua1.png')?>" alt=""> -->
                            <div class="firma1"></div>
                        </div>
                        <div class="col-6 mosaico2">
                            <div class="row no-gutters" >
                                <div class="col mosaico-container" >
                                    <!-- <img class="img-fluid w-100 h-100"   src="<?php echo base_url('assets/images/nuestra_firma/mosaico1.png')?>" alt="" > -->
                                    <div class="firma2"></div>

                                </div>
                                <div class="col mosaico-container">
                                    <!-- <img class="img-fluid w-100 h-100" src="<?php echo base_url('assets/images/nuestra_firma/mosaico2.png')?>" alt="" > -->
                                    <div class="firma3"></div>

                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col mosaico-container" >
                                    <!-- <img class="img-fluid w-100 h-100"  src="<?php echo base_url('assets/images/nuestra_firma/mosaico3.png')?>" alt="" > -->
                                    <div class="firma4"></div>

                                </div>
                                <div class="col mosaico-container" >
                                    <!-- <img class="img-fluid w-100 h-100"  src="<?php echo base_url('assets/images/nuestra_firma/mosaico4.png')?>" alt="" > -->
                                    <div class="firma5"></div> 

                                </div>
                            </div>
                        </div>
                    </div> 


                    <!-- Photo Grid -->





