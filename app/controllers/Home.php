<?php

class Home extends Controller
{
  public function index()
  {
    $data["judul"] = "HomePage";
    $this->view("templates/header", $data);
    $this->view("Home/index");
    $this->view("templates/footer");
  }
}
