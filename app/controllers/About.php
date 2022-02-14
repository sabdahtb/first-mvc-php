<?php

class About extends Controller
{
  public function index($nama = "Sabda", $umur = 20)
  {
    $data["judul"] = "About Page";

    $data["nama"] = $nama;
    $data["umur"] = $umur;

    $this->view("templates/header", $data);
    $this->view("About/index", $data);
    $this->view("templates/footer");
  }
}
