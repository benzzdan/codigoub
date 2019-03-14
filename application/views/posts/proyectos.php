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
                <img src="<?php echo base_url('assets/images/proyectos/images/Web_Codigo-UB-Proyectos_02.png');?>" class="img-fluid" alt="Responsive image">
                <div class="caption">
                    <h1 class="white bold text-center" style="letter-spacing: 4px;"><?php echo $this->lang->line('menu_links_proyectos')?></h1>
                    <p class="white text-center" style="letter-spacing: 11px">| <?php echo $this->lang->line('proyectos_experiencia')?> |</p>
                </div>
             </div>
</div>

<div class="container-fluid" style="padding: 3% 15% 3% 15%">
    <h1 class="bold red text-center"><?php echo $this->lang->line('menu_links_proyectos')?></h1>
    <div class="push"></div>
    <p class="gray text-center">
    <?php echo $this->lang->line('proyectos_p1')?>
    </p>
</div>

<div class="container">
    <div class="d-block text-center">
            <button id="post-todos" type="submit" class="active btn btn-outline-redblack spacingbtn"><?php echo $this->lang->line('proyecto_todo')?></button>
        <?php foreach($categorias as $categoria):?>
                <button  id="<?php echo $categoria['id'];?>" type="button" class="btn btn-outline-redblack catbuttons spacingbtn"><?php echo $categoria['nombre']; ?></button>
        <?php endforeach;?>
        <script>
                $('.catbuttons').click(function(){
                $('.btn-outline-redblack').removeClass('active');
                $(this).addClass('active');  
                });

                $(document).ready(function(){
                    $('.catbuttons').click(function(){
                        console.log($(this).attr('id'));
                        var catId = $(this).attr('id');
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('proyectos/categoria/')?>" + catId,
                           
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
                        
                        $('.btn-outline-redblack').removeClass('active');
                        $(this).addClass('active');  
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('posts/proyectos_all')?>",
                           
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
    <div class="push"></div>
    <div class="push"></div>
    <?php 
        $this->load->view('templates/proyectos_even.php');
    ?>
</div>

<div class="push"></div>
<div class="push"></div>


    <!-- por cada post tengo que desplegar su imagen y cada cinco posts se cambio de row -->




