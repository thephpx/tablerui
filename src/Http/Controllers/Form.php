<?php

namespace Thephpx\Tablerui\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class Form extends AdminController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __invoke(Request $request)
    {
        $data = $this->data;

        return view('Tablerui::pages.form', compact('data'));
    }
}