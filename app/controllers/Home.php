<?php

class Home extends Controller
{
  public function index()
  {
    $data["judul"] = "HomePage";
    $data["clover"] = $this->model('Clover_model')->getAllClo();

    $this->view("templates/header", $data);
    $this->view("Home/index", $data);
    $this->view("templates/footer");
  }

  public function detail($id)
  {
    $data["judul"] = "Clover Knights";
    $data["clover"] = $this->model('Clover_model')->getClo($id);

    $this->view("templates/header", $data);
    $this->view("Home/detail", $data);
    $this->view("templates/footer");
  }

  public function add()
  {
    if ($this->model('Clover_model')->addClo($_POST) > 0) {
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }

  public function delete($Id)
  {
    if ($this->model('Clover_model')->delClo($Id) > 0) {
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }

  public function getUpdate()
  {
    echo json_encode($this->model('Clover_model')->getClo($_POST["id"]));
  }

  public function update()
  {
    if ($this->model('Clover_model')->upClo($_POST) > 0) {
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }
}
