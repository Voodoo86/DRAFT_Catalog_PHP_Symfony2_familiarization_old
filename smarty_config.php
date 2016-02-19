<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 03.02.2016
 * Time: 19:02
 */

define('SMARTY_DIR', 'libs/');

require_once (SMARTY_DIR.'Smarty.class.php');


class MySmarty extends Smarty {

    public function __construct()
    {

        $this->setTemplateDir('templates/');
        $this->setCompileDir('templates_c');
        $this->setConfigDir('config/');
        $this->setCacheDir('cache/');

        parent::__construct();
    }
}

?>