<?php
namespace Teste;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\TutoController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'tuto' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/teste[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\TutoController::class,
                        'action'     => 'app',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'teste' => __DIR__ . '/../view',
        ],
    ],
];