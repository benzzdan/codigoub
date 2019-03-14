<?php 
    
        
    if($this->uri->segment(1) == 'es'){
        $lang = 'es';
    }elseif($this->uri->segment(1) == 'en') {
        $lang = 'en';
    }else {
        $lang = false;
    }

?>


<div class="ajax-container">
            <?php 
            $nPosts = count($posts);
        

            $flip = false;



            // empieza el mosaico, solo se mostraran 5 fotos, independiente del tipo de proyecto o categoria
            for($i=0; $i < $nPosts; $i ++){

              
               
                if($i % 5 == 0){ 
                    //se pone post[0]
                    ?>
                <div class="row">
                    <?php  if($flip){?>
                        <div class="col-6 col-sm-6 mosaico" >
                            <div class="row">
                                <?php 
                                //empezar desde el post[1]
                                for($b = $i+1; $b <= $i+4; $b++){
                                    if(empty($posts[$b])){
                                        break;
                                    }
                                    $image_name = $this->image_model->getImagesPortada($posts[$b]['id']);
                                  

                                    ?>

                                   
                                        <div class="col-6 col-sm-6">
                                                <div class="box">
                                                <div class="screen mx-auto text-center" style="width: 100%">
                                                <p class="caption"><?php echo ($this->uri->segment(1) == 'en' ?  $posts[$b]['titulo_en'] :  $posts[$b]['titulo'])?></p>
                                                <p class="small">| CÓDIGO UB |</p>
                                                <a class="btn btn-outline-secondary leer-mas" href="<?php echo base_url('proyectos/' . $posts[$b]['slug']);?>"><?php echo ($this->uri->segment(1) == 'en' ?  'Learn more' :  'Conoce más')?></a>
                                            </div>
                                                    <img class="item img-proyectos img-fluid" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                                                </div>
                                        </div>

                                <?php
                                    
                                }

                                ?>
                            </div>

                        </div>
                        <div class="col-6 col-sm-6 mosaico-grande" >
                            <?php $image_name = $this->image_model->getImagesPortada($posts[$i]['id']);
                                     if(empty($image_name)){
                                        $image_name[0]['nombre'] = 'default-nopic.png';
                                    }
                            ?>
                                    <div class="box">
                                        <div class="screen mx-auto text-center" style="width: 100%">
                                        <p class="caption"><?php echo ($this->uri->segment(1) == 'en' ?  $posts[$i]['titulo_en'] :  $posts[$i]['titulo'])?></p>

                                            <p class="small">| CÓDIGO UB |</p>
                                            <a class="btn btn-outline-secondary leer-mas" href="<?php if($lang == 'es') { echo base_url('es/proyectos/' . $posts[$i]['slug']); } elseif($lang == 'en') { echo base_url('en/proyectos/' . $posts[$i]['slug']); } else { echo base_url('proyectos/' . $posts[$i]['slug']);} ?>"><?php echo ($this->uri->segment(1) == 'en' ? 'Learn More' : 'Conoce más' )?></a>
                                        </div>
                                    <img class="item img-proyectos img-fluid w-100" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                                    </div>
                                </div>
                    <?php }else{?>

             

                        <div class="col-6 col-sm-6 mosaico-grande" >
                            <?php $image_name = $this->image_model->getImagesPortada($posts[$i]['id']); 
                                if(empty($image_name)){
                                    $image_name[0]['nombre'] = 'default-nopic.png';
                                }
                            
                            ?>


                            <div class="box">
                                <div class="screen mx-auto text-center" style="width: 100%">
                                <p class="caption"><?php echo ($this->uri->segment(1) == 'en' ?  $posts[$i]['titulo_en'] :  $posts[$i]['titulo'])?></p>

                                    <p class="small">| CÓDIGO UB |</p>
                                    <a class="btn btn-outline-secondary leer-mas" href="<?php if($lang == 'es') { echo base_url('es/proyectos/' . $posts[$i]['slug']); } elseif($lang == 'en') { echo base_url('en/proyectos/' . $posts[$i]['slug']); } else { echo base_url('proyectos/' . $posts[$i]['slug']);} ?>"><?php echo ($this->uri->segment(1) == 'en' ? 'Learn More' : 'Conoce más' )?></a>
                                </div>
                            <img class="item img-proyectos item img-fluid w-100" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                            </div>
                          
                        </div>

                        <div class="col-6 col-sm-6 mosaico" >
                            <div class="row">
                                <?php 
                                //empezar desde el post[1]
                                for($b = $i+1; $b <= $i+4; $b++){
                                    if(empty($posts[$b])){
                                        break;
    
                                    }
                                    $image_name = $this->image_model->getImagesPortada($posts[$b]['id']);
                                    if(empty($image_name)){
                                        $image_name[0]['nombre'] = 'default-nopic.png';
                                    }
                                    ?>
                                    <div class="col-6 col-sm-6">
                                      
                                        <div class="box">
                                            <div class="screen mx-auto text-center" style="width: 100%">
                                            <p class="caption"><?php echo ($this->uri->segment(1) == 'en' ?  $posts[$b]['titulo_en'] :  $posts[$b]['titulo'])?></p>

                                                <p class="small">| CÓDIGO UB |</p>
                                                <a class="btn btn-outline-secondary leer-mas" href="<?php if($lang == 'es') { echo base_url('es/proyectos/' . $posts[$b]['slug']); } elseif($lang == 'en') { echo base_url('en/proyectos/' . $posts[$b]['slug']); } else { echo base_url('proyectos/' . $posts[$b]['slug']);} ?>"><?php echo ($this->uri->segment(1) == 'en' ? 'Learn More' : 'Conoce más' )?></a>
                                            </div>
                                            <img class="item img-proyectos img-fluid" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                                        </div>
                                    </div>
                                <?php
                                }
    
                                ?>
                            </div>
    
                        </div>
                    <?php }?>
                </div>
            <?php
                }
                $flip = !$flip;
            }
            ?>
</div>



