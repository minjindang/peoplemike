<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_items($free)
    {
        if ($free)
        {
            $query = $this->db->query("select * from items limit 1");
        }else{
            $query = $this->db->get('items');
        }
        return $query->result_array();
    }

    public function get_itemid($orderemail){
        $query = $this->db->get_where('orders', array('orderemail' => $orderemail));
        return $query->row_array();
    }

    public function get_group($slug)
    {
        $query = $this->db->get_where('items', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_items()
    {
        $this->load->helper('url');

        $data = array(
            'title' => $this->input->post('title'),
            'text' => $this->input->post('text'),
            'price' => $this->input->post('price'),
            'slug' => rand()
        );

        return $this->db->insert('items', $data);
    }

    public function get_orders()
    {
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function set_orders()
    {
        $this->load->helper('url');

        $data = array(
            'orderid' => rand(),
            'itemid' => $this->input->post('itemid'),
            'ordername' => $this->input->post('ordername'),
            'orderphone' => $this->input->post('orderphone'),
            'orderemail' => $this->input->post('orderemail'),
            'orderaddress' => $this->input->post('orderaddress')
        );

        return $this->db->insert('orders', $data);
    }

    public function get_sumpeople()
    {
        $query = $this->db->query("select count(*) as count from orders");
        return $query->row_array();
    }
}
?>