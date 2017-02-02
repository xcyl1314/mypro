<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($article_id = null)
	{
	    if ($article_id === null)
	    {
	        $query = $this->db->get('article');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('article', array('article_id' => $article_id));
	    return $query->row_array();
	}

	public function set_news()
	{
	    $this->load->helper('url');

	    //$slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        'content' => $this->input->post('content')
	    );

	    return $this->db->insert('article', $data);
	}

}