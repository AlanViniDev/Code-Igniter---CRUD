<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index ()
    {
        return view ('index');
    }

    //--------------------------------------------------------------------

    public function showme ($page = 'home')
    {
        if (!is_file(APPPATH. 'Views/pages/'.$page.'.php'))
        {
            throw new \CodeIngniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page);
        echo view('templates/header',$data);
        echo view('pages/'.$page,$data);
        echo view('templates/footer',$data);
    }
}