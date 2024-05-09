<?php 



class HomeController extends Controller
{
    public function index()
    {
        $data = ["name"=>"abdelhadi haddadi"];
        $this->view('home',$data);
    }
}
