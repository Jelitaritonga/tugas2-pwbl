<?php

namespace App\Controllers;

use App\Core\Controller;

class Kategori extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\Kategori();
      }

      public function index()
      {
            $data['rows'] = $this->model->all();
            $this->home('kategori/index', $data);
      }

      public function input()
      {
      }

      public function edit($id)
      {
      }

      public function update($id)
      {
      }

      public function detail($id)
      {
      }

      public function delete($id)
      {
      }
}
