<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthTamu implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (session()->has('email_dosen')) {
            // return redirect()->to("/");

            return redirect()->to(base_url('/dashboard')) ;
        }
        //return redirect()->to(base_url('/'));
        // Do something here
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
      
        // Do something here
    }
}
