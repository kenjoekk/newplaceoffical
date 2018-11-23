<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class venueListModel extends CI_Model{

    function get_venue_page(){


        $this->load->database();
        $m_res=$this->db->get('venue_category')->result_array();

        // echo "<pre>";
        // var_dump($m_res); 

        return $m_res;
    }
}
?>