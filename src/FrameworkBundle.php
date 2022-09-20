<?php

namespace FullscreenPt\Savannah\Bundle\FrameworkBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class FrameworkBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
                ->arrayNode('twitter')
                    ->children()
                        ->integerNode('client_id')->end()
                        ->scalarNode('client_secret')->end()
                    ->end()
                ->end() // twitter
            ->end()
        ;
    }
}