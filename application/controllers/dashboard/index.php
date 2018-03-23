
<?php
class Index extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->cekLogin();
    $this->load->model('m_data');
  }

  public function index()
  {
  	$id_user = $_SESSION['id_user'];
    $where = ['id_user'=>$id_user];
    $data['crud']=$this->m_data->tampil_session($id_user);
    $this->load->view('dash',$data);
  }

  public function list(){
    $data['crud']=$this->m_data->tampil_data();
    $this->load->view('list',$data);
  }

  function tambah(){
    $this->load->view('v_input');
  }

  function proses_input(){

    $data_karyawan = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'nama' => $this->input->post('nama'),
      'jabatan' => $this->input->post('jabatan'),
      'nik' => $this->input->post('nik'),
      'departemen' => $this->input->post('departemen'),
      'level' => $this->input->post('level'),
      'active' => $this->input->post('active')
    );

    $id_user = $this->m_data->tambah_akun($data_karyawan);

    $data_gaji = array(
      'gaji_pokok' => $this->input->post('gaji_pokok'),
      'tunj_jabatan' => $this->input->post('tunj_jabatan'),
      'tunj_pulsa' => $this->input->post('tunj_pulsa'),
      'bpjs_kes' => $this->input->post('bpjs_kes'),
      'bpjs_kerja' => $this->input->post('bpjs_kerja'),
      'ganti_rugi' => $this->input->post('ganti_rugi'),
      'kelebihan_telf' => $this->input->post('kelebihan_telf'),
      'pinjaman' => $this->input->post('pinjaman'),
      'id_user' => $id_user
    );

    $proses = $this->m_data->tambah_gaji($data_gaji);
    redirect('manager/manager/index');
  }

  function edit_gaji($id_user){
    $where = array('id_user'=>$id_user);
    $data['crud'] = $this->m_data->edit_gaji($where, 'tbl_gaji')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id_user = $this->input->post('id_user');
    $gaji_pokok = $this->input->post('gaji_pokok');
    $tunj_jabatan = $this->input->post('tunj_jabatan');

    $data = array(
      'gaji_pokok' => $gaji_pokok,
      'tunj_jabatan' => $tunj_jabatan
    );

    $where = array(
      'id_user' => $id_user
    );

    $this->m_data->update_gaji($where, $data, 'tbl_gaji');
    redirect('dashboard/index/list');
  }

  function hapus_user($id_user){
    $where = array('id_user'=>$id_user);
    $this->m_data->hapus_user($where,'tbl_bio');
    redirect('dashboard/index/list');
  }

  /*
  function hapus($id_user){
    $where = array('id_user' => $id_user);
    $this->m_data->hapus($where,'tbl_bio');
    redirect('dashboard/index');
  }
  */

}