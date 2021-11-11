

<?php
class Thesis_portal extends CI_Controller{
    
    public function login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]|xss_clean');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]|xss_clean'); 
        
        if ($this->form_validation->run() == true) {
            // No error
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login_data = $this->User_model->login_user($username,$password);
            if($login_data){
               //Create array of user data
               $examiner_id = $login_data['examiner_id'];
               $student_id = $login_data['student_id'];
               // $this->db->where('examiner_id', $examiner_id);
               // $result = $this->db->get('login');
               //$this->db->where('examiner_id', $examiner_id)
               $this->db->select('*');
               $this->db->from('credentials');
               $this->db->where('credentials.examiner_id', $examiner_id);
               $this->db->join('examiner', 'examiner.id = credentials.examiner_id');
               $result1 = $this->db->get();
               $this->db->select('*');
               $this->db->from('credentials');
               $this->db->where('credentials.student_id', $student_id);
               $this->db->join('student', 'student.student_id = credentials.student_id');
               $result2 = $this->db->get();
               $user_data = array(
                       'examiner_id'   => $examiner_id,
                       'student_id'    => $student_id,
                       'examiner_name' => $result1->row(0)->name,
                       'student_name' => $result2->row(0)->name,
                       'thesis_name' => $result2->row(0)->thesis_name,
                       'department' => $result2->row(0)->department,
                       'desgination' => $result1->row(0)->designation,
                       'organisation' =>$result1->row(0)->organization,
                       'email'  => $result1->row(0)->email,
                 );
                //Set session userdata
               $this->session->set_userdata('user',$user_data);
                                  
               redirect('/index.php/thesis_portal/home');
            } else {
                //Set error
                $this->session->set_flashdata('login_failed', 'Sorry, the login info that you entered is invalid');
                redirect('/index.php/thesis_portal/login');
            }
            
        } else {
            $this->load->view('login');
        }
    }
    
    public function home() {
        if ($this->User_model->authorized() == false){
            $this->session->set_flashdata('msg','You are not authorized to access this section.');
            redirect(base_url().'index.php/thesis_portal/login');
        }
        $user = $this->session->userdata('user');
        $data['user'] = $user;
        $this->load->view('home',$data);
    }
    public function evaluation_form() {
        if ($this->User_model->authorized() == false){
            $this->session->set_flashdata('msg','You are not authorized to access this section.');
            redirect(base_url().'index.php/thesis_portal/login');
        }
        
        $user = $this->session->userdata('user');
        $data['user'] = $user;
        $this->load->view('evaluation_form',$data);
    }
    public function honararium_form() {
        if ($this->User_model->authorized() == false){
            $this->session->set_flashdata('msg','You are not authorized to access this section.');
            redirect(base_url().'index.php/thesis_portal/login');
        }
        $user = $this->session->userdata('user');
        $data['user'] = $user;
        $this->load->view('remuneration_form',$data);
    }
    public function download() {
        $this->load->view('download');
    }
    public function display_thesis(){
        $this->load->view('display_thesis');
    }
    function logout() {
        $this->session->unset_userdata('user');
        redirect(base_url().'index.php/thesis_portal/login');
    }
}
