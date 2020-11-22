<?php

class JoinDropModel extends CI_model{

  
  public function tambahalamat($table2,$data){
    $insert = $this->db->insert($table2, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}