<?php

namespace App\Controllers;

use App\Models\DindaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function contact(): string
    {
        return view('contact');
    }

    public function works(): string
    {
        return view('works');
    }

    public function about(): string
    {
        $model = new DindaModel();
        $data['about'] = $model->first();
        return view('about', $data);
    }
}
