<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileModel extends CI_Model
{
    protected $table = "tbl_company_profile";

    function getCompanyProfile()
    {
        return $this->db->select('*')
            ->from($this->table)
            ->where('id', 1)
            ->get()
            ->row();
    }
    function getCompanyProfileById($id)
    {
        return $this->db->select('*')
            ->from($this->table)
            ->where('id', $id)
            ->get()
            ->row();
    }
    function updateCompanyProfile($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }
}
