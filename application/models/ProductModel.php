<?php

class ProductModel extends CI_model{
    public function getData() {
        $query = $this->db->query('SELECT * FROM product');
        $test = $query->num_rows();
        $data = $query->row_array();
        $wow = $data['nama'];

        // echo "<script type = 'text/javascript'>
        // alert($wow);
        // </script>";
        //echo $wow;

        return $data;
        

    }
}