<?php

class Model_event extends CI_Model{

    
    public function get()
    {
        return $this->db->get('event');
    }

    public function save($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('event_id', $id)
                            ->limit(1)
                            ->get('event');
        return $result;
    }

    public function trending(){
        $result = $this->db->where('event_waktu >', date("Y-m-d H:i:s"))
                            ->order_by('event_click', "DESC")
                            ->get('event');
        return $result;
    }

    public function closer(){
        $result = $this->db->where('event_waktu > ', date("Y-m-d H:i:s"))
                            ->order_by('event_waktu', "ASC")
                            ->get('event');
        return $result;
    }

}
