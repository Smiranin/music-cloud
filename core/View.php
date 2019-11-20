<?php
//put full path to Smarty.class.php
require('../lib/Smarty/libs/Smarty.class.php');

//>Используемый шаблон
$template = 'default';

//Пути к файлам шаблонов(*.tmp)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");
//<

class CSmarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir(TemplatePrefix);
        $this->setCompileDir('../tmp/smarty/templates_c');
        $this->setCacheDir('../tmp/smarty/cache');
        $this->setConfigDir('../lib/Smarty/configs');

        $this->assign('TemplateWebPath', TemplateWebPath);
    }
}