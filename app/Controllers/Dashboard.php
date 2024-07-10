<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'url_machine_app' => getenv('URL_MACHINE_APP'),
            'url_cutting_app' => getenv('URL_CUTTING_APP'),
            'url_sewing_app' => getenv('URL_SEWING_APP'),
            'url_packing_app' => getenv('URL_PACKING_APP'),
            'url_compliance_app' => getenv('URL_COMPLIANCE_APP'),
            'url_warehouse_app' => getenv('URL_WAREHOUSE_APP'),
        ];
        
        return view('ghimli-dashboard', $data);
    }
}
