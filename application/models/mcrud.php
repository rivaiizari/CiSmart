<?php
/**
 * Description of mcrud
 * class ini digunakan untuk melakukan manipulasi  data sederhana
 * dengan parameter yang dikirim dari controller.
 * @author dian n. arif
 */
class mcrud extends CI_Model{
   
    // Menampilkan data dari sebuah tabel dengan pagination.
    public function getList($tables,$limit,$page,$by,$sort){
        $this->db->order_by($by,$sort);
        $this->db->limit($limit,$page);
        return $this->db->get($tables);
    }
    
    // menampilkan semua data dari sebuah tabel.
    public function getAll($tables){
    
        return $this->db->get($tables)->result();
    }
    
    // menghitun jumlah record dari sebuah tabel.
    public function countAll($tables){
        return $this->db->get($tables)->num_rows();
    }
    public function countAllby($tables,$where,$id){
        $this->db->where($where,$id);
        return $this->db->get($tables)->num_rows();
    }
    // menghitun jumlah record dari sebuah query.
    public function countQuery($query){
        return $this->db->get($query)->num_rows();
    }
    
    //enampilkan satu record brdasarkan parameter.
    public function kondisi($tables,$where)
    {
        $this->db->where($where);
        return $this->db->get($tables);
    }
    //menampilkan satu record brdasarkan parameter.
    public  function getByID($tables,$pk,$id){
        $this->db->where($pk,$id);
        return $this->db->get($tables);
    }
    
    // Menampilkan data dari sebuah query dengan pagination.
    public function queryList($query,$limit,$page){
       
        return $this->db->query($query." limit ".$page.",".$limit."");
    }
    
    public function queryBiasa($query){
       // $this->db->order_by($by,$sort);
        return $this->db->query($query);
    }
    // memasukan data ke database.
    public function insert($tables,$data){
       return $this->db->insert($tables,$data);
    }
    
    // update data kedalalam sebuah tabel
    public function update($tables,$data,$pk,$id){
        $this->db->where($pk,$id);
        return $this->db->update($tables,$data);
    }
    
    // menghapus data dari sebuah tabel
    public function delete($tables,$pk,$id){
        $this->db->where($pk,$id);
       return  $this->db->delete($tables);

    }
    
    function login($username,$password)
    {
       return $this->db->get_where('user',array('username'=>$username,'password'=>$password));        
    }

    function get_mahasiswa() {
        $sql = "SELECT m.*, beasiswa_nama FROM data_mahasiswa m
                LEFT JOIN beasiswa b ON m.mahasiswa_beasiswa = b.beasiswa_id ORDER BY mahasiswa_no_urut DESC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            $query->free_result();
            return $result;
        }else {
            return array();
        }
    }
    function get_mahasiswabyid($param) {
        $sql = "SELECT m.*, beasiswa_nama FROM data_mahasiswa m
                LEFT JOIN beasiswa b ON m.mahasiswa_beasiswa = b.beasiswa_id WHERE mahasiswa_no_urut='$param'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        }else {
            return array();
        }
    }
    function get_beasiswa_ppa() {
        $sql = "SELECT m.*,b.beasiswa_nama,j.jenjang_nama,p.pekerjaan_nama,e.epsbed_nama from data_mahasiswa m join beasiswa b on m.mahasiswa_beasiswa=b.beasiswa_id JOIN jenjang j ON m.mahasiswa_jenjang=j.jenjang_id JOIN pekerjaan_orang_tua p ON m.mahasiswa_pekerjaan=p.pekerjaan_id JOIN no_epsbed e ON m.mahasiswa_kode_prodi=e.epsbed_kode where b.beasiswa_nama='PPA' ORDER BY m.mahasiswa_ipk DESC,m.mahasiswa_sks DESC,m.mahasiswa_n_prestasi DESC,m.mahasiswa_penghasilan ASC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function get_beasiswa_ppa_limit($limit) {
        $sql = "SELECT m.*,b.beasiswa_nama,j.jenjang_nama,p.pekerjaan_nama,e.epsbed_nama from data_mahasiswa m join beasiswa b on m.mahasiswa_beasiswa=b.beasiswa_id JOIN jenjang j ON m.mahasiswa_jenjang=j.jenjang_id JOIN pekerjaan_orang_tua p ON m.mahasiswa_pekerjaan=p.pekerjaan_id JOIN no_epsbed e ON m.mahasiswa_kode_prodi=e.epsbed_kode where b.beasiswa_nama='PPA' ORDER BY m.mahasiswa_ipk DESC,m.mahasiswa_sks DESC,m.mahasiswa_n_prestasi DESC,m.mahasiswa_penghasilan ASC limit $limit";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function get_beasiswa_bbp() {
        $sql = "SELECT m.*,b.beasiswa_nama,j.jenjang_nama,p.pekerjaan_nama,e.epsbed_nama from data_mahasiswa m join beasiswa b on m.mahasiswa_beasiswa=b.beasiswa_id JOIN jenjang j ON m.mahasiswa_jenjang=j.jenjang_id JOIN pekerjaan_orang_tua p ON m.mahasiswa_pekerjaan=p.pekerjaan_id JOIN no_epsbed e ON m.mahasiswa_kode_prodi=e.epsbed_kode where b.beasiswa_nama='BBP-PPA' ORDER BY m.mahasiswa_penghasilan ASC,m.mahasiswa_n_prestasi DESC, m.mahasiswa_ipk DESC,m.mahasiswa_sks DESC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function get_beasiswa_bbp_limit($limit) {
        $sql = "SELECT m.*,b.beasiswa_nama,j.jenjang_nama,p.pekerjaan_nama,e.epsbed_nama from data_mahasiswa m join beasiswa b on m.mahasiswa_beasiswa=b.beasiswa_id JOIN jenjang j ON m.mahasiswa_jenjang=j.jenjang_id JOIN pekerjaan_orang_tua p ON m.mahasiswa_pekerjaan=p.pekerjaan_id JOIN no_epsbed e ON m.mahasiswa_kode_prodi=e.epsbed_kode where b.beasiswa_nama='BBP-PPA' ORDER BY m.mahasiswa_penghasilan ASC,m.mahasiswa_n_prestasi DESC, m.mahasiswa_ipk DESC,m.mahasiswa_sks DESC limit $limit";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    function get_npm_sama($param) {
        $sql = "SELECT * from data_mahasiswa where mahasiswa_npm = '$param'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    function update_mahasiswa($param) {
        $sql = "UPDATE data_mahasiswa SET mahasiswa_npm = ?, mahasiswa_kdpti = ?, mahasiswa_beasiswa = ?, mahasiswa_nama = ?, mahasiswa_jk = ?, mahasiswa_kode_prodi = ?, mahasiswa_jenjang = ?, mahasiswa_smt = ?, mahasiswa_ipk = ?, mahasiswa_pekerjaan = ?, mahasiswa_jml_tanggungan = ?, mahasiswa_penghasilan = ?, mahasiswa_prestasi = ?, mahasiswa_mulai_bulan = ?, mahasiswa_selesai_bulan = ?, mahasiswa_tahun = ?, mahasiswa_keterangan = ?, mahasiswa_alamat = ?, mahasiswa_telepon = ?, mahasiswa_nama_mhs_direkening = ?, mahasiswa_nama_bank = ?, mahasiswa_no_rekening = ?, mahasiswa_status = ?, mahasiswa_sks = ?, mdb = ?, mdd = NOW() 
                WHERE mahasiswa_no_urut = ?";
        return $this->db->query($sql,$param);
    }
}

?>
