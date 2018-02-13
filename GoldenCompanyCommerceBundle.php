<?php

namespace GoldenCompany\CommerceBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;

class GoldenCompanyCommerceBundle extends Bundle
{
    public function build(ContainerBuilder $container)
   {
       parent::build($container);

       $modelDir = realpath(__DIR__.'/Resources/config/doctrine-mapping');
       $mappings = array($modelDir => 'GoldenCompany\CommerceBundle\Model');
       $directories = array(realpath(__DIR__.'/Model'));

       if (class_exists(DoctrineOrmMappingsPass::class)) {
           $container->addCompilerPass(
               DoctrineOrmMappingsPass::createAnnotationMappingDriver(
                   $mappings,
                   $directories
           ));
       }
   }
}
