<?php
    class Upmodel extends CI_Model
    {
        
        public function insertdata($data)
        {
            $sql = $this->db->insert('text_post', $data);
            return $sql;
        }

        public function showdata()
        {
            $sql = $this->db->get('text_post');
            return $sql;
        }

        public function delete($id){
            $this->db->where('id',$id);
            $sql = $this->db->delete('text_post');
            return $sql;
        }

        public function login_val($u)
        {
            $this->db->where('auth_username', $u);
            $sql = $this->db->get('auth');
            return $sql->result();
        }

        public function singlenews($id)
        {
            $this->db->where("id", $id);
            $sql = $this->db->get('text_post');
            return $sql;
            
        }
    }
