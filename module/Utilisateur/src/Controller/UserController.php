<?php
namespace Utilisateur\Controller;


use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Utilisateur\Form\UserForm;
use Utilisateur\Model\Utilisateur;
use Utilisateur\Model\UtilisateurTable;

class UserController extends AbstractActionController
{
    private $table;

    // Add this constructor:
    public function __construct(UtilisateurTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        $users = $this->table->fetchAll();
        return new ViewModel([
            'users'=>$users
        ]);
    }

    public function addAction()
    {
        $form = new UserForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $user = new Utilisateur();
        $form->setInputFilter($user->getInputFilter());
        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $user->exchangeArray($form->getData());
        $this->table->saveUtilisateur($user);
        return $this->redirect()->toRoute('user');
    }

    public function detailAction()
    {
    }

    public function deleteAction()
    {
    }
}
