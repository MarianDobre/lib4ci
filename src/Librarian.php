<?php namespace MarianDobre\Lib4CI;

class Librarian
{
    private $CI;

    public function __construct($CI)
    {
        $this->CI = $CI;

        $this->CI->load->library('orm');
        $this->CI->load->library('form_validation');
        $this->CI->load->helper('url');
    }

    public function getAge()
    {
        return 44;
    }

    public function getURL()
    {
        return current_url();
    }
}