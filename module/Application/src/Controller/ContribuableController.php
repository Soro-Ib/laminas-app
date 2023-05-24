<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class ContribuableController extends AbstractActionController
{
    public function ajoutAction()
    {
        $test = 'contribuable test';
        $this->layout('layout/testlayout');
        return new ViewModel(['test'=> $test]);
    }
}
