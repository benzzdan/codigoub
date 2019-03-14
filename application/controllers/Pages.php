<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    
  

    class Pages extends MY_Controller {

        public function index(){


            $data['title'] = ucfirst('Inicio');
            $data['categorias'] = $this->post_model->get_cats();
            // //todos los proyectos
            $data['posts'] = $this->post_model->get_posts_by_limit();

            $data['caruselImages'] = $this->image_model->getCaruselImages();
            $data['firmaPhoto'] = $this->image_model->getFirmaImage();


            $this->load->view('templates/header');
            // $this->load->view('templates/test');
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer');

        }
        public function view($page='home'){

            // if(!file_exists(APPPATH . 'views/pages/' . $page. '.php')){
            //     show_404();
            // }
            
       

            if($this->uri->segment(2) == '') {
                $page = 'home';
            }else {
                $page = $this->uri->segment(2);
            }

            $data['title'] = ucfirst($page);
            $data['categorias'] = $this->post_model->get_cats();
            // //todos los proyectos
            $data['posts'] = $this->post_model->get_posts_by_limit();

            $data['caruselImages'] = $this->image_model->getCaruselImages();
            $data['firmaPhoto'] = $this->image_model->getFirmaImage();



            $this->load->view('templates/header');
            // $this->load->view('templates/test');
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer');

        }



        public function proyectos_by_cat_limit($cat_id){
                  
                    
            $data['posts'] = $this->post_model->get_proyectos_by_cat_limit($cat_id);
            $data['categorias'] = $this->post_model->get_cats();
            $this->load->view('templates/proyectos_even', $data);
        }

        public function proyectos_all(){
        
            $data['posts'] = $this->post_model->get_posts_by_limit();
            $data['categorias'] = $this->post_model->get_cats();
            $this->load->view('templates/proyectos_even', $data);
        }


        public function firma(){
            
            $this->load->view('templates/header');
            $this->load->view('pages/nuestrafirma');
            $this->load->view('templates/footer');
            
        }
        public function servicios(){
            
            $this->load->view('templates/header');
            $this->load->view('pages/servicios');
            $this->load->view('templates/footer');
            
        }

        public function contacto(){
            $this->load->view('templates/header');
            $this->load->view('pages/contacto');
            $this->load->view('templates/footer');
        }

        public function contacto_email(){

            require 'vendor/PHPMailer/src/Exception.php';
            require 'vendor/PHPMailer/src/PHPMailer.php';
            require 'vendor/PHPMailer/src/SMTP.php';

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->isHTML();
            $mail->Username = 'benzzlab@gmail.com';
            $mail->Password = 'bd948155';
            $mail->SetFrom('no-reply@codigoub.com.mx');
            $mail->Subject = 'INFO Contacto - CodigoUB';
            $mail->AddAddress('bensondaniel664@gmail.com');

            $data['nombre'] = $this->input->post('nombre');
            $data['email'] = $this->input->post('email');
            $data['mensaje'] = $this->input->post('mensaje');
            $data['tel'] = $this->input->post('tel');
            $body = $this->load->view('templates/email_contacto',$data ,TRUE);
            $mail->Body = $body;


            try {

                $mail->Send();
                $this->load->view('templates/header');
                $this->load->view('templates/email_success');
                $this->load->view('templates/footer');
            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
            }



  



            // include_once('vendor/sendgrid/credentials_sendgrid.php');

            // $this->load->library('email');

            // $config['mailtype'] = 'html';
            // $config['charset']  = 'utf-8';
            // $config['wordwrap'] = TRUE;
            // $config['protocol'] = 'sendmail';
            // $config['mailpath'] = '/usr/sbin/sendmail';

            // $this->email->initialize($config);
            // $this->email->set_newline("\r\n");
            // $this->email->from('no-reply@codigoub.com');
            // $this->email->to(
            //     array('bensondaniel664@gmail.com', 'ventas@codigoub.com.mx'));
            // $this->email->subject('this is a test');

  

            // $body = $this->load->view('templates/email_contacto',$data ,TRUE);

            // $this->email->message($body);

            // if($this->email->send()) {
            //     $this->load->view('templates/header');
            //     $this->load->view('templates/email_success');
            //     $this->load->view('templates/footer');
            // }else {
            //     show_error($this->email->print_debugger());
            // }



            //SENDGRID

            // $email = new \SendGrid\Mail\Mail(); 
            // $email->setFrom("no-reply@codigoub.com.mx", "CodigoUB");
            // $email->setSubject("Info - Contacto CODIGO UB");
            // $email->addTo("benzzlab@gmail.com", "Daniel Benson");
            // $email->addTo("ventas@codigoub.com.mx", "CODIGO UB Administration");
            // $email->addContent(
            //     "text/html", $body
            // );
            // $sendgrid = new \SendGrid($API_KEY);
            // try {

            //     $response = $sendgrid->send($email);
            //     $this->load->view('templates/header');
            //     $this->load->view('templates/email_success');
            //     $this->load->view('templates/footer');
            // } catch (Exception $e) {
            //     echo 'Caught exception: '. $e->getMessage() ."\n";
            // }



            // $config = array(
            //     'protocol' => 'smtp',
            //     'smtp_host' => 'smtp.sendgrid.net',
            //     'smtp_user' => 'benzzdan2',
            //     'smtp_port' => 587,
            //     'smtp_pass' => 'Bd948155_59'
            // );

            // $config['mailtype'] = 'html';
            // $config['mailpath'] = "/usr/lib/sm.bin/sendmail"; 
            // $config['mailtype'] = 'html';
            // $config['charset']  = 'utf-8';
            // $config['wordwrap'] = TRUE;

            // $this->email->initialize($config);


        }

      



    }
