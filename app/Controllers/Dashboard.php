<?php namespace App\Controllers;

use CodeIgniter\Controller;

class dashboard extends Controller {
    public function index() {
        echo view('dashboard');
    }
}