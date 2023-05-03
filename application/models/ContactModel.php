<?php

class ContactModel extends CI_Model
{

    public function getContacts()
    {
        $query = $this->db->get('contacts');
        return $query->result();
    }

    public function insertContact($data)
    {
       return $this->db->insert('contacts', $data);
    }

    public function editContact($id)
    {
        $query = $this->db->get_where('contacts', ['contact_id' => $id]);
        return $query->row();
    }

    public function updateContact($data, $id)
    {
        return $this->db->where('contact_id', $id)->update('contacts', $data);
    }
}

?>