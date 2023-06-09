<?php
namespace Utilisateur\Form;

use Laminas\Form\Form;

class UserForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('utilisateur');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'nom',
            'type' => 'text',
            'options' => [
                'label' => 'Nom',
            ],
            'attributes'=>[
                'class'    => 'form-control',
            ]
        ]);
        $this->add([
            'name' => 'prenom',
            'type' => 'text',
            'options' => [
                'label' => 'Prenom',
            ],
            'attributes'=>[
                'class'    => 'form-control',
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id'    => 'submitbutton',
                'class'    => 'btn btn-primary',
            ],
        ]);
    }
}