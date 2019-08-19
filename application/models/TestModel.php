<?

class TestModel extends CI_Model {

public function getTestTypeData(){
	// $this->load->database();  

	$queryStr = $this->db->get("test_type");
	return $queryStr->result();

}

}
?>