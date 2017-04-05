<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Template {
    
    public function main_view($name,$data)
    {
    $CI =& get_instance();
    $CI->load->view('blocks/welcome_message');
    }
    
    public function admin_view($name,$data)
    {
    $CI =& get_instance();
    $CI->load->view('admin/header_view'); 
    $CI->load->view('admin/navbar_view'); 
    $CI->load->view('admin/'.$name.'_view',$data);
    //  $CI->load->view('blocks/social_view');
    $CI->load->view('admin/footer_view');
    }
    
    public function second_view($name,$data)
    {
    $CI =& get_instance();
        $CI->load->view('blocks/header_view'); 
        $CI->load->view('blocks/navbar_view'); 
     	$CI->load->view('blocks/'.$name.'_view',$data);
      //  $CI->load->view('blocks/social_view');
        $CI->load->view('blocks/footer_view');
    }
    

    public function max_view($data,$name)
    {
    $CI =& get_instance();
    $CI->load->helper('MY_recom');
    $data['rec'] = recom();
    $data['news'] = news();
    $data['advice'] = advices();

    $CI->load->view('a_blocks/header_view'); 
    $CI->load->view('a_blocks/navbar_view'); 
    $CI->load->view('a_blocks/slider_view', $data);
 	$CI->load->view('a_blocks/'.$name.'_view',$data);
   	$CI->load->view('a_blocks/right_menu_view');
    $CI->load->view('a_blocks/footer_view' , $data);

    }
    
    public function max_standart_view($data,$name)
    {
    $CI =& get_instance();
    $CI->load->helper('MY_recom');
    $data['rec'] = recom();
    $data['news'] = news();
    $data['advice'] = advices();

    $CI->load->view('a_blocks/header_view'); 
    $CI->load->view('a_blocks/navbar_view'); 
 	$CI->load->view('a_blocks/'.$name.'_view',$data);
   	$CI->load->view('a_blocks/right_menu_view');
    $CI->load->view('a_blocks/footer_view' , $data);

    }


    public function page_view($name,$data)
    {
    $CI =& get_instance();
    $CI->load->model('crud_model');
    $data['banners'] = $CI->crud_model->cabinet_banner_list();
    $CI->load->view('blocks/header_view');
    $CI->load->view('blocks/nav_view',$data);
    //$CI->load->view('blocks/right_menu_view');
    $CI->load->view('blocks/'.$name.'_view',$data);
    $CI->load->view('blocks/right_menu_view');
    $CI->load->view('blocks/footer_view');
    $CI->load->view('blocks/script_view');
    }
    
    public function detail_page_view($name,$data)
    {
    $CI =& get_instance();
    $CI->load->model('crud_model');
    $data['banners'] = $CI->crud_model->cabinet_banner_list();
    $CI->load->view('blocks/d_header_view',$data);
    $CI->load->view('blocks/d_nav_view',$data);
  //  $CI->load->view('blocks/left_view');
    $CI->load->view('blocks/'.$name.'_view',$data);
    //$CI->load->view('blocks/right_menu_view');
    $CI->load->view('blocks/footer_view');
    $CI->load->view('blocks/script_view');
    }
    
    public function hot_view($data,$name)
    {
    $CI =& get_instance();
    $CI->load->helper('MY_recom');
    $data['rec'] = recom();
    $CI->load->view('blocks/script_view');
    $CI->load->view('blocks/menu_view');
 	$CI->load->view('blocks/'.$name.'_view',$data);
 	$CI->load->view('blocks/right_menu_view');
    $CI->load->view('blocks/recommend_view');
   	$CI->load->view('blocks/footer_view');
    }
     
     public function standart_view($data,$name)
    {
    $CI =& get_instance();
    $CI->load->helper('MY_recom');
    $data['rec'] = recom();
    $CI->load->view('blocks/script_view');
    $CI->load->view('blocks/menu_view');
 	$CI->load->view($name.'_view',$data);
 	$CI->load->view('blocks/right_menu_view');
    $CI->load->view('blocks/recommend_view');
   	$CI->load->view('blocks/footer_view');
    }
    
    public function login_page()
{
    $CI =& get_instance ();

    $CI->load->view('admin/preheader_view');
    $CI->load->view('admin/header_view');
    $CI->load->view('admin/login_view');
    $CI->load->view('footer_view');
}

    public function cabinet_view($name,$data)
{
    $CI =& get_instance ();
    $CI->load->model('crud_model');
    $data['count_active'] = $CI->crud_model->count_active();
    $data['count_request'] = $CI->crud_model->count_request();
    $data['count_expected'] = $CI->crud_model->count_expected();
    $data['count_overdue'] = $CI->crud_model->count_overdue();
    $CI->load->view('cabinet/header_view',$data);
    $CI->load->view('cabinet/nav_view',$data);
   // $CI->load->view('cabinet/left_view');
    $CI->load->view('cabinet/'.$name.'_view',$data);
  //  $CI->load->view('cabinet/modal_view');
    $CI->load->view('cabinet/footer_view');
     
    
}
    

}