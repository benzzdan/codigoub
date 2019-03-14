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
                    <!-- <img src="<?php echo base_url('uploads/' . $images[0]['nombre']);?>" class="img-fluid fullw-image" alt="Responsive image"> -->
                    <div class="w-100 fullw-img" style="height: 450px;background-image: url('http://localhost/codigoub/uploads/<?php echo ($imagePortada ?  $imagePortada[0]['nombre'] : $images[0]['nombre'])?>')"></div>
                    <div class="caption">
                        <h1 class="white bold text-center" style="letter-spacing: 4px;"><?php echo ($this->uri->segment(1) == 'en' ?  $post['titulo_en'] :  $post['titulo'])?></h1>
                        <p class="white text-center" style="letter-spacing: 11px">| CODIGO UB |</p>
                    </div>
                </div> 
      

</div>

<div class="push"></div>

<div class="container">
    <?php 
        if ($this->uri->segment(1) == 'en')
            { 
                echo $post['descrip_en'];
            } 
                else 
            { 
                echo $post['descripcion'];
            }
    ?>
    <div class="row">
        <?php foreach($images as $image): ?>
            <div class="col-6 proyecto-view" style="height: 450px;background-image: url('http://localhost/codigoub/uploads/<?php echo $image['nombre'];?>')">
            </div>
        <?php endforeach; ?>
    </div>
    <hr> 
</div>
    
  