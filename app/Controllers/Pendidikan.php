<?php

namespace App\Controllers;

class Pendidikan extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Pendidikan',
            'mainMenu' => 'Pendidikan',
            'parentMenu' => 'rekognisiPendidikan'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/rekognisi',$data);
        echo view('section/foot'),$data;
    }
}
