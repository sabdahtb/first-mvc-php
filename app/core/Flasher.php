<?php

class Flasher
{
  public static function setFlash($type, $pesan)
  {
    $_SESSION["flash"] = [
      'type' => $type,
      'pesan' => $pesan,
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION["flash"])) {
      echo '<div class="alert alert-' . $_SESSION["flash"]["type"] . ' alert-dismissible fade show" role="alert">' . $_SESSION["flash"]["pesan"] .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      unset($_SESSION["flash"]);
    }
  }
}
