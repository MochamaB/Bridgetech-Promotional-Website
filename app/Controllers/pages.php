<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
     public function services($page = 'services')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }

     public function portfolio($page = 'portfolio')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }

      public function ecommerce($page = 'ecommerce')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }

        public function aboutus($page = 'aboutus')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }

        public function contactus($page = 'contactus')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }

        public function portfoliodetailone($page = 'portfoliodetailone')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }

        public function bridgetechstore($page = 'bridgetechstore')
        {
            if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('Template/header', $data);
        echo view('pages/'.$page, $data);
        echo view('Template/footer', $data);
        }


}