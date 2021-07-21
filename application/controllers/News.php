<?php 
class News extends CI_controller{


     public function index()
     {
         $data['title']= "news index";
         $this->load->view("news/index",$data);
     }








}