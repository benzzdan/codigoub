<?php 
    class Image_model extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function getid($name) {
            $this->db->get_where('nombre', $name);
            $img = $this->db->get('img_proyectos');
            return $img;
        }

        public function getImages($id) {
            // $this->db->join('img_proyectos', 'img_proyectos.id_proyecto = proyectos.id');
            // $query = $this->db->get('img_proyectos');
            // return $query->result_array();

            $query = $this->db->get_where('img_proyectos', array('id_proyecto' => $id, 'portada' => false));
            return $query->result_array();
            
        }
        public function getImagesPortada($id) {
            // $this->db->join('img_proyectos', 'img_proyectos.id_proyecto = proyectos.id');
            // $query = $this->db->get('img_proyectos');
            // return $query->result_array();

            $query = $this->db->get_where('img_proyectos', array('id_proyecto' => $id, 'portada' => true));
            return $query->result_array();
            
        }
        public function getCaruselImages() {

            $query = $this->db->get('img_carusel');
            return $query->result_array();
            
        }


        public function getImagePortada($id) {
            $query = $this->db->get_where('img_proyectos', array('id_proyecto' => $id, 'portada' => true ));
            return $query->result_array();
        }


        

        public function getCaruselImage($id) {
            $query = $this->db->get_where('img_carusel', array('id' => $id));
            return $query->result_array();
        }

        public function getFirmaImage() {
            $query = $this->db->get('nuestra_firma_photo');
            return $query->result_array();
        }

        public function del_img($file_name){
            $this->db->where('nombre', $file_name);
            $this->db->delete('img_proyectos');
            return true;
        }

        public function del_img_carusel($file_name){
            $data = array("nombre" => '');
            $this->db->where('nombre', $file_name)->update('img_carusel', $data); //will leave the name blank
            // $this->db->delete('img_carusel');
            return true;
        }

        public function del_img_firma($file_name) {
            $data = array("nombre" => '');
            $this->db->where('nombre', $file_name)->update('nuestra_firma_photo', $data); //will leave the name blank
            // $this->db->delete('img_carusel');
            return true;
        }


        //updates nuestra firma image path
        public function updateFirmaPhotoPath($data, $id) {
            $updatedData['nombre'] =  $data['file_name'];
            $updatedData['size'] =  $data['file_size'];
    
            $this->db->where('id', $id);
            return $this->db->update('nuestra_firma_photo', $updatedData);
    
        }
    
    }