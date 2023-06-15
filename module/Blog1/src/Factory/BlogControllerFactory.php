<?php
namespace Blog1\Factory;

use Blog1\Controller\BlogController;
use Blog1\Controller\WriteController;
use Blog1\Form\PostForm;
use Blog1\Model\PostCommandInterface;
use Blog1\Model\PostRepositoryInterface;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class BlogControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return BlogController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $formManager = $container->get('FormElementManager');
        return new BlogController(
            $container->get(PostCommandInterface::class),
            $formManager->get(PostForm::class),
            $container->get(PostRepositoryInterface::class));
    }
}