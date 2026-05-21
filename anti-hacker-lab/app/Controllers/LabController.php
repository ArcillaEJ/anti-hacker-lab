<?php

namespace App\Controllers;

class LabController extends BaseController
{
    public function index()
    {
        return view('lab/form');
    }

    public function submit()
    {
        $data = [
            'user_input' => $this->request->getPost('user_input')
        ];

        return view('lab/form', $data);
    }
}