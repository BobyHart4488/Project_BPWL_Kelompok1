<?php 

class Login_model extends CI_Model{
    function cek_login($table,$where)
    {
        return $this->db->get_where($table,$where);
    }

    function register()
    {
        $nama = $this->input->post('nama');
        $no_telepon = $this->input->post('no_telepon');
        $alamat = $this->input->post('alamat');
        $password = $this->input->post('password');
        $pembeli_baru = array(
            'nama' => $nama,
            'password' => $password,
            'no_telepon' => $no_telepon
        );
        $this->db->query("INSERT INTO pembeli VALUES (CONCAT('P_',LPAD(NEXTVAL(Pembeli_ID),3,0)),
        '$nama','$password','$no_telepon','$alamat')");
        $cek = $this->db->get_where('pembeli',$pembeli_baru)->result();

        foreach($cek as $data) {
            $data_session = array(
                'id' => $data->id_pembeli,
                'status' => "login",
                'user' => "user"
            );
        }

        $this->session->set_userdata($data_session);
    }
}
?>