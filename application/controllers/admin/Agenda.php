<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_agenda');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_agenda->get_all_agenda();
		$this->load->view('admin/v_agenda',$x);
	}

	function simpan_agenda(){
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/images/'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 710;
				$config['height']= 460;
				$config['new_image']= './assets/images/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$nama_agenda=strip_tags($this->input->post('xnama_agenda'));
				$deskripsi=$this->input->post('xdeskripsi');
				$mulai=$this->input->post('xmulai');
				$selesai=$this->input->post('xselesai');
				$tempat=$this->input->post('xtempat');
				$waktu=$this->input->post('xwaktu');
				$keterangan=$this->input->post('xketerangan');
				$gambar = $gbr['file_name'];
				$this->m_agenda->simpan_agenda($nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan,$gambar);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/agenda');
			} else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/agenda');
			}
		} else {
			redirect('admin/agenda');
		}
	}

	function update_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$nama_agenda=strip_tags($this->input->post('xnama_agenda'));
		$deskripsi=$this->input->post('xdeskripsi');
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->update_agenda($kode,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/agenda');
	}
	function hapus_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_agenda->hapus_agenda($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/agenda');
	}

}