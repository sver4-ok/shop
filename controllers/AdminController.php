<?php

class AdminController extends AdminBase
{
  public function actionIndex()
  {
    // Проверка доступа
    self::checkAdmin();

    require_once(ROOT . '/view/admin/index.php');
  }
}
