<?php

class Post_model extends CI_Model {

    protected $table = 'posts';
    protected $type = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function set_type($type)
    {
        $this->type = $type;
    }

    public function get_post($id)
    {
        $this->db->reconnect();
        $this->db->select('p.*, u.name AS userName');
        $this->db->from('posts p');
        $this->db->join('users u', 'u.id = p.userId');

        if (is_numeric($id)) $this->db->where('p.id', $id);
        else $this->db->where('p.slug', $id);

        $this->db->limit(1);

        $query = $this->db->get();
        $results = $query->row_array();
        if ($results) $this->_parse_metadata($results);

        return $results;
    }

    public function list_posts($limit, $offset, $tags = '')
    {
        $this->db->reconnect();
        if ($offset < 0) $offset = 0;

        $this->db->select('p.id, p.slug, p.title, p.userId, p.metadata, p.tags, p.createdAt, u.name AS userName');
        $this->db->from('posts p');
        $this->db->join('users u', 'u.id = p.userId');
        $this->db->where('p.type', $this->type);

        if (!empty($tags))
        {
            foreach (explode(',', $tags) as $tag)
            {
                $tag = trim($tag);
                // $this->db->like('tags', ',' . $tag . ',');
                // $this->db->where('t.tag', $tag);
                $this->db->where("FIND_IN_SET('" . $tag . "', tags) > 0");
            }
        }

        $this->db->order_by('createdAt', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        $results = $query->result_array();

        foreach ($results as &$post)
        {
            $this->_parse_metadata($post);
        }

        return $results;
    }

    public function count_posts($tags = '')
    {
        $this->db->reconnect();
        $this->db->from('posts p');

        if (!empty($tags))
        {
            foreach (explode(',', $tags) as $tag)
            {
                $tag = trim($tag);
                // $this->db->where('t.tag', $tag);
                $this->db->where("FIND_IN_SET('" . $tag . "', tags) > 0");
            }
        }

        return $this->db->count_all_results();
    }

    protected function _parse_metadata(&$post)
    {
        $metadata = json_decode($post['metadata'], TRUE);

        foreach ($metadata as $key => $value)
        {
            $post[$key] = $value;
        }
    }

}