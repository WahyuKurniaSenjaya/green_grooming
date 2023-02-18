<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model("CategoryModel");
        $this->load->model("SecondCategoryModel");
        $this->load->model("SubCategoryModel");
        $this->load->model("ProductModel");
        $this->load->model("ProfileModel");
    }

    // public function index()
    // {
    //     $jumlah_data = $this->ProductModel->jumlah_data();
    //     $this->load->library('pagination');
    //     $config['base_url'] = base_url() . 'product';
    //     $config['total_rows'] = $jumlah_data;
    //     $config['per_page'] = 1;
    //     $choice = $config["total_rows"] / $config["per_page"];
    //     $from = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    //     $config["num_links"] = floor($choice);

    //     // var_dump($this->uri->segment(2));
    //     // die();
    //     // Membuat Style pagination untuk BootStrap v4
    //     $config['first_link']       = 'First';
    //     $config['last_link']        = 'Last';
    //     $config['next_link']        = 'Next';
    //     $config['prev_link']        = 'Prev';
    //     $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    //     $config['full_tag_close']   = '</ul></nav></div>';
    //     $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    //     $config['num_tag_close']    = '</span></li>';
    //     $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    //     $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    //     $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    //     $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    //     $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    //     $config['prev_tagl_close']  = '</span>Next</li>';
    //     $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    //     $config['first_tagl_close'] = '</span></li>';
    //     $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    //     $config['last_tagl_close']  = '</span></li>';

    //     $this->pagination->initialize($config);

    //     $data = [
    //         "title" => "Maxwell",
    //         'pages' => 'product',
    //         'category' => $this->CategoryModel->getAllCategory(),
    //         'product' => $this->ProductModel->data($config['per_page'], $from),
    //         'company' => $this->ProfileModel->getCompanyProfile(),
    //         'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
    //         'sub_category' => $this->SubCategoryModel->getAllCategory(),
    //         'page' => ($this->uri->segment(2)) ? $this->uri->segment(2) : 0,
    //         'pagination' => $this->pagination->create_links()
    //     ];
    //     $this->load->view('user/layout/header', $data);
    //     $this->load->view('user/product/product');
    //     $this->load->view('user/layout/footer');
    // }
    public function filter()
    {
        $id_main_category  = $this->input->post('id_main_category');
        $id_second_category = $this->input->post('id_second_category');
        $id_sub_category  = $this->input->post('id_third_category');

        if ($id_main_category != "" && $id_second_category != "" && $id_sub_category != "") {

            $jumlah_data_filter = $this->ProductModel->jumlah_data_filter($id_main_category, $id_second_category, $id_sub_category);
            $this->load->library('pagination');
            $config['base_url'] = base_url() . 'product/filter';
            $config['total_rows'] = $jumlah_data_filter;
            $config['per_page'] = 2;
            $choice = $config["total_rows"] / $config["per_page"];
            $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $config["num_links"] = floor($choice);

            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data = [
                "title" => "Maxwell",
                'pages' => 'product',
                'category' => $this->CategoryModel->getAllCategory(),
                'product' => $this->ProductModel->filter($config['per_page'], $from, $id_main_category, $id_second_category, $id_sub_category),
                'company' => $this->ProfileModel->getCompanyProfile(),
                'category_single' => $this->SubCategoryModel->getRowSubCategoryByIdSubCategory($id_sub_category),
                'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
                'sub_category' => $this->SubCategoryModel->getAllCategory(),
                'page' => ($this->uri->segment(3)) ? $this->uri->segment(3) : 0,
                'pagination' => $this->pagination->create_links(),
                'id_main_category' => $id_main_category,
                'id_second_category' => $id_second_category,
                'id_sub_category' => $id_sub_category
            ];
            $this->load->view('user/layout/header', $data);
            $this->load->view('user/product/product_filter');
            $this->load->view('user/layout/footer');
        } elseif ($id_main_category != "" && $id_second_category != "") {

            $jumlah_data_filter = $this->ProductModel->jumlah_data_filter_2($id_main_category, $id_second_category);
            $this->load->library('pagination');
            $config['base_url'] = base_url() . 'product/filter';
            $config['total_rows'] = $jumlah_data_filter;
            $config['per_page'] = 2;
            $choice = $config["total_rows"] / $config["per_page"];
            $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $config["num_links"] = floor($choice);

            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data = [
                "title" => "Maxwell",
                'pages' => 'product',
                'category' => $this->CategoryModel->getAllCategory(),
                'product' => $this->ProductModel->filter2($config['per_page'], $from, $id_main_category, $id_second_category),
                'company' => $this->ProfileModel->getCompanyProfile(),
                'category_second' => $this->SecondCategoryModel->getRowSecondCategoryByIdSecondCategory($id_second_category),
                'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
                'sub_category' => $this->SubCategoryModel->getAllCategory(),
                'page' => ($this->uri->segment(3)) ? $this->uri->segment(3) : 0,
                'pagination' => $this->pagination->create_links(),
                'id_main_category' => $id_main_category,
                'id_second_category' => $id_second_category,
            ];
            $this->load->view('user/layout/header', $data);
            $this->load->view('user/product/product_filter');
            $this->load->view('user/layout/footer');
        } elseif ($id_main_category != "") {

            $jumlah_data_filter = $this->ProductModel->jumlah_data_filter_3($id_main_category);
            $this->load->library('pagination');
            $config['base_url'] = base_url() . 'product/filter';
            $config['total_rows'] = $jumlah_data_filter;
            $config['per_page'] = 2;
            $choice = $config["total_rows"] / $config["per_page"];
            $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $config["num_links"] = floor($choice);

            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data = [
                "title" => "Maxwell",
                'pages' => 'product',
                'category' => $this->CategoryModel->getAllCategory(),
                'product' => $this->ProductModel->filter3($config['per_page'], $from, $id_main_category),
                'company' => $this->ProfileModel->getCompanyProfile(),
                'category_main' => $this->CategoryModel->getCategoryById($id_main_category),
                'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
                'sub_category' => $this->SubCategoryModel->getAllCategory(),
                'page' => ($this->uri->segment(3)) ? $this->uri->segment(3) : 0,
                'pagination' => $this->pagination->create_links(),
                'id_main_category' => $id_main_category,
            ];
            $this->load->view('user/layout/header', $data);
            $this->load->view('user/product/product_filter');
            $this->load->view('user/layout/footer');
        } else {
            $url = base_url() . "product";
            redirect($url);
        }
    }
    public function detail($product_name)
    {
        $product = $this->ProductModel->getProductByNameProduct($product_name);
        $data = [
            "title" => "Maxwell",
            'pages' => 'product',
            'category' => $this->CategoryModel->getAllCategory(),
            'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
            'sub_category' => $this->SubCategoryModel->getAllCategory(),
            'product' => $product,
            'company' => $this->ProfileModel->getCompanyProfile(),
            'gallery_product' => $this->ProductModel->getProductGalleryByIdProduct($product->id_product)
        ];
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/product/detail_product');
        $this->load->view('user/layout/footer');
    }
    public function showByCategory($category_name)
    {
        $category_single = $this->CategoryModel->getCategoryByName($category_name);
        // var_dump($category_single->id_main_category);
        // die();
        $data = [
            "title" => "Maxwell",
            'pages' => 'product',
            'category' => $this->CategoryModel->getAllCategory(),
            'category_single' => $category_single,
            'group_product' => $this->ProductModel->getGroupBySecondCategoryProductByIdMainCategory($category_single->id_main_category),
            'product' => $this->ProductModel->getProductByIdCategory($category_single->id_main_category),
            'company' => $this->ProfileModel->getCompanyProfile(),
            'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
            'sub_category' => $this->SubCategoryModel->getAllCategory(),
            'id_main_category' => $category_single->id_main_category,
        ];
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/product/product_by_category');
        $this->load->view('user/layout/footer');
    }
    public function showBySecondCategory($second_category_name)
    {
        $category_single = $this->SecondCategoryModel->getRowSecondCategoryByNameSecondCategory($second_category_name);
        $data = [
            "title" => "Maxwell",
            'pages' => 'product',
            'category' => $this->CategoryModel->getAllCategory(),
            'category_single' => $category_single,
            'group_product' => $this->ProductModel->getGroupByThirdCategoryProductByIdSecondCategory($category_single->id_second_category),
            'product' => $this->ProductModel->getProductByIdSecondCategory($category_single->id_second_category),
            'company' => $this->ProfileModel->getCompanyProfile(),
            'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
            'sub_category' => $this->SubCategoryModel->getAllCategory(),
            'page' => ($this->uri->segment(4)) ? $this->uri->segment(4) : 0,
            'pagination' => $this->pagination->create_links(),
            'id_main_category' => $category_single->id_main_category,
            'id_second_category' => $category_single->id_second_category,
        ];
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/product/product_by_second_category');
        $this->load->view('user/layout/footer');
    }
    public function showByThirdCategory($sub_category_name)
    {
        $category_single = $this->SubCategoryModel->getRowSubCategoryByNameSubCategory($sub_category_name);
        $data = [
            "title" => "Maxwell",
            'pages' => 'product',
            'category' => $this->CategoryModel->getAllCategory(),
            'category_single' => $category_single,
            'product' => $this->ProductModel->getProductByIdThirdCategory($category_single->id_sub_category),
            'company' => $this->ProfileModel->getCompanyProfile(),
            'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
            'sub_category' => $this->SubCategoryModel->getAllCategory(),
            'page' => ($this->uri->segment(4)) ? $this->uri->segment(4) : 0,
            'pagination' => $this->pagination->create_links(),
            'id_main_category' => $category_single->id_main_category,
            'id_second_category' => $category_single->id_second_category,
        ];
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/product/product_by_third_category');
        $this->load->view('user/layout/footer');
    }

    public function search()
    {
        $search =  $this->input->Post('search');
        $data = [
            "title" => "Maxwell",
            'pages' => 'search',
            'category' => $this->CategoryModel->getAllCategory(),
            'product' => $this->ProductModel->getProductBySearch($search),
            'company' => $this->ProfileModel->getCompanyProfile(),
            'second_category' => $this->SecondCategoryModel->getResultAllSecondCategory(),
            'sub_category' => $this->SubCategoryModel->getAllCategory(),
            'page' => ($this->uri->segment(2)) ? $this->uri->segment(2) : 0,
            'pagination' => $this->pagination->create_links(),
            'search' => $search,
        ];
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/product/product_by_search');
        $this->load->view('user/layout/footer');
    }
    public function get_second_category()
    {
        $id_main_category = $this->input->post('id', TRUE);
        $data = $this->SecondCategoryModel->getResultAllSecondCategoryByIdMainCategory($id_main_category);
        echo json_encode($data);
    }
    public function get_sub_category()
    {
        $id_second_category = $this->input->post('idSub', TRUE);
        $data = $this->SubCategoryModel->getResultAllSubCategoryByIdSecondCategory($id_second_category);
        echo json_encode($data);
    }
    function sweet_alert_gagal($pesan)
    {
        $msg = $this->session->set_flashdata('pesan', '
            <script>
                Swal.fire(
                    "Oops!",
                    "' . $pesan . '",
                    "error"
                ).then(function() {
                
                });
            </script>
        ');
        return $msg;
    }
    function sweet_alert_berhasil($pesan)
    {
        $msg = $this->session->set_flashdata('pesan', '
            <script>
                Swal.fire(
                    "Done!",
                    "' . $pesan . '",
                    "success"
                ).then(function() {
                
                });
            </script>
        ');
        return $msg;
    }
}
