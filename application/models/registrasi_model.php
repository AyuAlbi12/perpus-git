<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi_model extends CI_Model {
    public function __construct()
    {   
        parent::__construct();    
    }
    
    public function registrasi($nama, $email, $pass, $notelp, $status, $level,$foto) {
        //$this->db->where('id_user', $id_user);
        $this->db->where('nama', $nama);
        $this->db->where('email',  $email);
        $this->db->where('pass', $pass);
        $this->db->where('notelp', $notelp);
        $this->db->where('status', $status);
        $this->db->where('level',$level);
        $this->db->where('foto', $foto);
        $query = $this->db->insert('pengguna',$data);
        //return $query->row();
    }

    function create_data($nama,$email,$pass,$notelp,$status,$level,$foto)
	{									
		$data = array(
            //'id_user'=>$id_user,
			'nama'=>$nama,
			'email'=>$email,
            'pass'=>$pass,
            'notelp'=>$notelp,
			'status'=>$status,
            'level'=>$level,
            'foto'=>$foto
		);
		$this->db->insert('pengguna',$data);
	}

}
