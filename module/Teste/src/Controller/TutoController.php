<?php
namespace Teste\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Teste\Model\TutoTable;

class TutoController extends AbstractActionController
{
    private $table;

    // Add this constructor:
    public function __construct(TutoTable $table)
    {
        $this->table = $table;
    }
    public function indexAction()
    {
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
    public function download(){

    }
}