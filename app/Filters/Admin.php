<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (session()->has('role_dosen') == 1) {
            // return redirect()->to("/");

            return redirect()->to(base_url('/admin/dashboard')) ;
        }
        //return redirect()->to(base_url('/'));
        // Do something here
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
      
        // Do something here
    }
}
