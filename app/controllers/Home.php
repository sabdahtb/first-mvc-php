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
      Flasher::setFlash('success', 'Data berhasil ditambahkan :D');
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      Flasher::setFlash('danger', 'Gagal menambah data :(');
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }

  public function delete($Id)
  {
    if ($this->model('Clover_model')->delClo($Id) > 0) {
      Flasher::setFlash('success', 'Data berhasil dihapus :D');
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      Flasher::setFlash('danger', 'Gagal menghapus data :(');
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
      Flasher::setFlash('success', 'Data berhasil diupdate :D');
      header('Location: ' . BASEURL . '/Home');
      exit;
    } else {
      Flasher::setFlash('danger', 'Gagal update data :(');
      header('Location: ' . BASEURL . '/Home');
      exit;
    }
  }
}
