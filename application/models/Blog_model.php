<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function getBlog()
    {
        $query = "SELECT `blog`.*, `user`.`name`
        FROM `blog` JOIN `user`
        ON `blog`.`user_id` = `user`.`id`";

        return $this->db->query($query)->result_array();
    }
}
