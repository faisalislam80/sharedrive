<?php

class Tasks extends CI_Model{

    public $tableName = 'tasks';

    public function __construct()
    {
        parent::__construct();
    }

    public function save($data,$id = null)
    {
        if(!$id)
        {
            return $this->db->insert($this->tableName,$data) ? true : false;
        }
        else
        {
            $this->db->where('id',$id);
            return $this->db->update($this->tableName,$data) ? true : false ;
        }
    }

    public function task_list_by_priority($priority_type)
    {
        $query = $this->db->get_where($this->tableName,array('priority'=>$priority_type));
        return $query->result();
    }

    public function task_list_by_type($type)
    {
        $query = $this->db->get_where($this->tableName,array('status'=>$type));
        return $query->result();
    }

    public function task_by_id($id)
    {
        $query = $this->db->get_where($this->tableName,array('id'=>$id),1);
        return $query->result();
    }

}