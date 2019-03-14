<?php
class Carusel_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }


    public function update_carusel_info($img_id){
        //gets the data from the submitted form
        
        $title = $this->input->post('seccion_titulo');
        $sub_title = $this->input->post('seccion_subtitulo');
        $titulo_en = $this->input->post('titulo_en');
        $subtitulo_en = $this->input->post('subtitulo_en');

        $data = array(
            'titulo' => $title,
            'subtitulo' => $sub_title,
            'titulo_en' => $titulo_en,
            'subtitulo_en' => $subtitulo_en
        ); 

        $this->db->where('id', $img_id);
        return $this->db->update('img_carusel', $data);
    }

    public function updateCaruselImagePath($id, $data) {

        $updatedData['nombre'] =  $data['file_name'];
        $updatedData['size'] =  $data['file_size'];

        $this->db->where('id', $id);
        return $this->db->update('img_carusel', $updatedData);

    }

   

}

?>