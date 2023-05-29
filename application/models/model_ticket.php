<?php

class Model_ticket extends CI_Model{

    
    public function get()
    {
        return $this->db->get('ticket');
    }

    public function filter($id)
    {
        return $this->db->where("event_id", $id)->get('ticket');
    }

    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function find($id)
    {
        $result = $this->db->where('ticket_id', $id)
                            ->limit(1)
                            ->get('ticket');
        return $result;
    }


}
