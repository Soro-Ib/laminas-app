<?php

declare(strict_types=1);

namespace Application\Controller;
use Application\Poo\TestPoo;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class PooController extends AbstractActionController
{
    public function pooAction()
    {
        $this->layout('layout/testlayout');
        $objet = new TestPoo('Soro', 'Brahima');
        var_dump($objet->getNom());
        var_dump($objet->setNomOrPrenoms());
        return new ViewModel();
    }
}