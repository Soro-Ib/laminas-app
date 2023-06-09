<?php
namespace Teste\Model;

class Tuto
{
    public $id;
    public $nom;
    public $type;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->nom = !empty($data['nom']) ? $data['nom'] : null;
        $this->type  = !empty($data['type']) ? $data['type'] : null;
    }
}