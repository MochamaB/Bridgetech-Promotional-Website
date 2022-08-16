<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($page = 'home')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('Template/carousel', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
    }
}
