<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class DgiController extends AbstractActionController
{
    public function dgiAction()
    {
        return new ViewModel();
    }
}
