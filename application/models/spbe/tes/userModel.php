<?php
defined('BASEPATH') or exit('No direct script access allowed');

class userModel extends CI_Model
{

    public $variable;

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function AmbilData()
    {
        return $this->db->get('USER');
    }


}

/* End of file ModelName.php */
