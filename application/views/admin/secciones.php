
<h1>Edición de Contendio para Carusel</h1>

<div class="row mt-5">
        <div class="col-4">
            <p>Carusel 1</p>
            <?php echo form_open('admin/uploadCaruselPhotos/1', array("class" => "dropzone", "id" => "myDropzoneCarusel" )); ?>
                <input id="carusel1" type="hidden" name="img_carusel_id" value="1">
                <div class="dz-message" data-dz-message><span>Vacia tu foto aqui</span></div>
            <?php echo form_close(); ?> 
            <?php echo form_open('admin/saveCaruselInfo/1', array("class" => "mt-5")); ?>
                <input id="carusel_img_id" type="hidden" name="img_carusel_id" value="1">
             
                <h4>Español <span><img src="<?php echo base_url('img/002-spain.png'); ?>" /></span></h4>

                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="seccion_titulo" value="<?php echo $imagesCarusel[0]['titulo'] ?>">            
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo" name="seccion_subtitulo" value="<?php echo $imagesCarusel[0]['subtitulo'] ?>">  
                </div>
              
                <h4>Inglés <img src="<?php echo base_url('img/001-united-states.png'); ?>" /></h4>
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo_en" name="titulo_en" value="<?php echo $imagesCarusel[0]['titulo_en'] ?>">            
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo_en" name="subtitulo_en" value="<?php echo $imagesCarusel[0]['subtitulo_en'] ?>">  
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            <?php echo form_close(); ?> 
        </div>
        <div class="col-4">
            <p>Carusel 2</p>
            <?php echo form_open('admin/uploadCaruselPhotos/2', array("class" => "dropzone", "id" => "myDropzoneCarusel2" )); ?>
                <input id="carusel1" type="hidden" name="img_carusel_id" value="2">
                <div class="dz-message" data-dz-message><span>Vacia tu foto aqui</span></div>
            <?php echo form_close(); ?> 
            <?php echo form_open('admin/saveCaruselInfo/2', array("class" => "mt-5")); ?>
                <input id="carusel_img_id" type="hidden" name="img_carusel_id" value="2">
                <h4>Español <span><img src="<?php echo base_url('img/002-spain.png'); ?>" /></span></h4>

                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="seccion_titulo" value="<?php echo $imagesCarusel[1]['titulo'] ?>">            
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo" name="seccion_subtitulo" value="<?php echo $imagesCarusel[1]['subtitulo'] ?>">
                </div>

                <h4>Inglés <img src="<?php echo base_url('img/001-united-states.png'); ?>" /></h4>
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo_en" name="titulo_en" value="<?php echo $imagesCarusel[1]['titulo_en'] ?>">            
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo_en" name="subtitulo_en" value="<?php echo $imagesCarusel[1]['subtitulo_en'] ?>">  
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            <?php echo form_close(); ?> 
        </div>
        <div class="col-4">
            <p>Carusel 3</p>
            <?php echo form_open('admin/uploadCaruselPhotos/3', array("class" => "dropzone", "id" => "myDropzoneCarusel3" )); ?>
                <input id="carusel1" type="hidden" name="img_carusel_id" value="3">
                <div class="dz-message" data-dz-message><span>Vacia tu foto aqui</span></div>
            <?php echo form_close(); ?> 
            <?php echo form_open('admin/saveCaruselInfo/3', array("class" => "mt-5")); ?>
                <input id="carusel_img_id" type="hidden" name="img_carusel_id" value="3">
                <h4>Español <span><img src="<?php echo base_url('img/002-spain.png'); ?>" /></span></h4>

                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="seccion_titulo" value="<?php echo $imagesCarusel[2]['titulo'] ?>">            
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo" name="seccion_subtitulo" value="<?php echo $imagesCarusel[2]['subtitulo'] ?>">
                </div>

                <h4>Inglés <img src="<?php echo base_url('img/001-united-states.png'); ?>" /></h4>
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo_en" name="titulo_en" value="<?php echo $imagesCarusel[2]['titulo_en'] ?>">            
                </div>
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo_en" name="subtitulo_en" value="<?php echo $imagesCarusel[2]['subtitulo_en'] ?>">  
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            <?php echo form_close(); ?> 
        </div>

</div>
<br/>
<br/>

<h1>Foto nuestra Firma</h1>

<div class="row mt-5">
    <div class="col-4">
        <?php echo form_open('admin/uploadFirmaPhoto/', array("class" => "dropzone", "id" => "nuestraFirmaDropZone" )); ?>
            <input id="nuestra_firma_photo" type="hidden" name="nuestra_firma_id" value="<?php echo $imageFirma[0]['id'] ?>">
            <div class="dz-message" data-dz-message><span>Vacia tu foto aqui</span></div>
        <?php echo form_close(); ?> 
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>




<script>

  //Carusel 1
    Dropzone.options.myDropzoneCarusel = {
        addRemoveLinks:true,
        dictRemoveFile: "Remover",
        acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp,.doc,.docx,.pdf",
        removedfile: function(file){
          var nombre = file.name;
          console.log('esto es:' + nombre);
          $.ajax({
            type: "post",
            url: "<?php echo site_url('admin/removeCaruselImage') ?>",
            data: {file: nombre},
            dataType: 'html'
          });

          //Remove thumbnail 
          var previewElement;
          return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
        },
        init: function(){
          this.on("addedfile", function() {
            console.log ('There is another file');
            if( this.files[1]!= null) {
             
              this.removeFile(this.files[1]);
            }
          });   
          var me = this;
          $.get("<?php echo base_url('admin/getCaruselImage/1' ) ?>", function (data){
            if (data.length > 0 ) {
              $.each(data, function(key, value){
                var mockFile = {name: value.nombre, size: value.size};
                me.emit("addedfile", mockFile);
                <?php if($imagesCarusel[0]['nombre'] != '') { ?>
                  me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/" ?>" + value.nombre); 
                  <?php
                } else { ?>
                me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/default/default-nopic.png" ?>"); 
              <?php } ?>
                me.emit("complete", mockFile);
              });
            }
          });
        }
    
    };
  //Carusel 2
    Dropzone.options.myDropzoneCarusel2 = {
        addRemoveLinks:true,
        dictRemoveFile: "Remover",
        acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp,.doc,.docx,.pdf",
        removedfile: function(file){
          var nombre = file.name;
          console.log('esto es:' + nombre);
          $.ajax({
            type: "post",
            url: "<?php echo site_url('admin/removeCaruselImage') ?>",
            data: {file: nombre},
            dataType: 'html'
          });

          //Remove thumbnail 
          var previewElement;
          return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
        },
        init: function(){
          var me = this;
          $.get("<?php echo base_url('admin/getCaruselImage/2' ) ?>", function (data){
            if (data.length > 0 ) {
              $.each(data, function(key, value){
                var mockFile = {name: value.nombre, size: value.size};
                me.emit("addedfile", mockFile);
                <?php if($imagesCarusel[1]['nombre'] != '') { ?>
                  me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/" ?>" + value.nombre); 
                  <?php
                } else { ?>
                me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/default/default-nopic.png" ?>"); 
              <?php } ?>
                me.emit("complete", mockFile);
              });
            }
          });
        }
    
    };
  //Carusel 3
    Dropzone.options.myDropzoneCarusel3 = {
        addRemoveLinks:true,
        dictRemoveFile: "Remover",
        acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp,.doc,.docx,.pdf",
        removedfile: function(file){
          var nombre = file.name;
          console.log('esto es:' + nombre);
          $.ajax({
            type: "post",
            url: "<?php echo site_url('admin/removeCaruselImage') ?>",
            data: {file: nombre},
            dataType: 'html'
          });

          //Remove thumbnail 
          var previewElement;
          return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
        },
        init: function(){
          var me = this;
          $.get("<?php echo base_url('admin/getCaruselImage/3' ) ?>", function (data){
            if (data.length > 0 ) {
              $.each(data, function(key, value){
                var mockFile = {name: value.nombre, size: value.size};
                me.emit("addedfile", mockFile);
                <?php if($imagesCarusel[2]['nombre'] != '') { ?>
                  me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/" ?>" + value.nombre); 
                  <?php
                } else { ?>
                me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/default/default-nopic.png" ?>"); 
              <?php } ?>                me.emit("complete", mockFile);
              });
            }
          });
        }
    
    };
    Dropzone.options.nuestraFirmaDropZone = {
        addRemoveLinks:true,
        dictRemoveFile: "Remover",
        acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp,.doc,.docx,.pdf",
        removedfile: function(file){
          var nombre = file.name;
          console.log('esto es:' + nombre);
          $.ajax({
            type: "post",
            url: "<?php echo site_url('admin/removeNuestraFirmaPhoto') ?>",
            data: {file: nombre},
            dataType: 'html'
          });

          //Remove thumbnail 
          var previewElement;
          return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
        },
        init: function(){

          this.on("addedfile", function() {
            console.log(this.files);
            if( this.files[1]!= null) {
              this.removeFile(this.files[1]);
            }
          });   

          var me = this;
          $.get("<?php echo base_url('admin/getFirmaImage' ) ?>", function (data){
            if (data.length > 0 ) {
              $.each(data, function(key, value){
                var mockFile = {name: value.nombre, size: value.size};
                me.emit("addedfile", mockFile);
                <?php if($imageFirma[0]['nombre'] != '') { ?>
                  me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/firma/" ?>" + value.nombre); 
                  <?php
                } else { ?>
                me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/carusel/default/default-nopic.png" ?>"); 
              <?php } ?>                me.emit("complete", mockFile);
              });
            }
          });
        }
    
    };
</script>




