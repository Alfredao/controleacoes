<?php

namespace Application\Controller;

use Laminas\ApiTools\Admin\Module as AdminModule;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

/**
 * Class IndexController
 *
 * @package Application\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * Index action
     *
     * @return \Laminas\Http\Response|\Laminas\View\Model\ViewModel
     */
    public function indexAction()
    {
        if (class_exists(AdminModule::class, false)) {
            return $this->redirect()->toRoute('api-tools/ui');
        }

        return new ViewModel();
    }
}
