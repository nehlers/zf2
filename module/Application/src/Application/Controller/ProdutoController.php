<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProdutoController extends AbstractActionController
{
    public function cadastrarAction()
    {
        return new ViewModel();
    }
}
