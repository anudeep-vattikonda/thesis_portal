<?php
class User_model extends CI_Model{
	public function login_user($username,$password){
        //Secure password
        // $data = array(
        //     'id'  => '2'
        //     'parameter_id'  => '1',
        //     'parameter_value_id' => $this->input->post('gender')

        // );
        // $new_member_insert = array(
        // 	'examiner_id' => '12345678',
        // 	'username' => 'examiner_3',
        // 	'password' => '123456',
        // 	'examiner_name' => 'Anudeep',
        // 	'student_ref' => '18JE0909'
        // );
        
        // $insert = $this->db->insert('login', $new_member_insert);
        //$enc_password = md5($passowrd);
        
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('credentials');
        if($result->num_rows() == 1){
            $login_data = array(
                    'examiner_id'  => $result->row(0)->examiner_id,
                    'student_id'   => $result->row(0)->student_id
                );
            return $login_data;
        } else {
            return false;
        }
    }

    /* Check user authorization */
    public function authorized() {
        $user = $this->session->userdata('user');
        if(!empty($user)){
            return true;
        } else {
            return false;
        }
    }
}