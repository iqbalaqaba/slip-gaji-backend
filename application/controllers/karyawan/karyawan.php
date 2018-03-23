
<?php
class Karyawan extends MY_Controller{

	public function __construct(){
		parent::__construct();

		//memanggil function dari controller MY_Controller
		$this->cekLogin();

		//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "manager") {
      redirect('manager/manager');
	}
    $this->load->model('m_data');
  }

  public function index()
  {
  	$id_user = $_SESSION['id_user'];
    $where = ['id_user'=>$id_user];
    $data['crud']=$this->m_data->tampil_session($id_user);
    $this->load->view('dash',$data);
  }
}