<?php
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    }

    public function index()
    {
        //模擬團主是否有付費
        $data['news'] = $this->News_model->get_items(true);
        $data['sumpeople'] = $this->News_model->get_sumpeople();
        $data['title'] = '';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug)
    {
        $data['news_item'] = $this->News_model->get_group($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '我愛人人，人人愛我';

        $this->form_validation->set_rules('title', '標題', 'required');
        $this->form_validation->set_rules('text', '內文', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->News_model->set_items();
            $this->load->view('news/success');
        }
    }

    public function orders()
    {
        $this->load->helper('form');
        $this->News_model->set_orders();

        $data['itemname']=array(
            //'itemid'=> $this->News_model->get_itemid($orderemail),
            'title' => $this->input->post('title'),
            'price' => $this->input->post('price')
        );
        $orderemail = $this->input->post('orderemail');
        $data['item'] = $this->News_model->get_itemid($orderemail);

        $this->load->view('news/done',$data);
    }
}