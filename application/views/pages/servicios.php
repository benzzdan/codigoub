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
        <img src="<?php echo base_url('assets/images/servicios/CodigoUB_Servicios_02.png');?>" class="img-fluid" alt="Responsive image">
        <div class="caption">
            <h1 class="white bold text-center" style="letter-spacing: 4px;"><?php echo $this->lang->line('menu_links_servicios')?></h1>
            <p class="white text-center" style="letter-spacing: 11px">| CÓDIGO UB |</p>
        </div>
    </div>
</div>

<div class="row no-gutters">

    <div class="col-6 servicios">
        <h2 class="bold red"><?php echo $this->lang->line('servicios_h1_first')?></h2>

        <p class="gray"><?php echo $this->lang->line('servicios_p1')?>
        </p>
    </div>
    <div class="col-6 servicios1">
        <!-- <img src="<?php echo base_url('assets/images/servicios/CodigoUB_Servicios_04.png');?>" alt="" class="img-fluid"> -->
    </div>
</div>


<div class="row no-gutters">
    
    <div class="col-6 servicios2">
        <!-- <img src="<?php echo base_url('assets/images/servicios/CodigoUB_Servicios_05.png');?>" alt="" class="img-fluid"> -->
    </div>
    <div class="col-6 servicios">
        <h2 class="bold red"><?php echo $this->lang->line('servicios_h1_sec')?></h2>

        <p class="gray"><?php echo $this->lang->line('servicios_p2')?>
        </p>
    </div>
</div>
<div class="row no-gutters">

    <div class="col-6 servicios">
        <h2 class="bold red"><?php echo $this->lang->line('servicios_h1_third')?></h2>

        <p class="gray"><?php echo $this->lang->line('servicios_p3')?></p>
    </div>
    <div class="col-6 servicios3">
        <!-- <img src="<?php echo base_url('assets/images/servicios/CodigoUB_Servicios_07.png');?>" alt="" class="img-fluid"> -->
    </div>
</div>
<div class="row no-gutters">
    <div class="col-6 servicios4">
        <!-- <img src="<?php echo base_url('assets/images/servicios/CodigoUB_Servicios_07.png');?>" alt="" class="img-fluid"> -->
    </div>
    <div class="col-6 servicios">
        <h2 class="bold red"><?php echo $this->lang->line('servicios_h1_fourth')?></h2>

        <p class="gray"><?php echo $this->lang->line('servicios_p4')?></p>
    </div>
</div>