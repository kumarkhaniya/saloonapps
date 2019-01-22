<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class contact_model extends CI_Model
{

function __construct() 
{
    parent::__construct();
}

function insert_into_db($data)
{
    // Inserting into database table
    $this->db->insert('contact', $data);
} 

}

?>