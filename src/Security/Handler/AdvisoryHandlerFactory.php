<?php

namespace GetLaminas\Security\Handler;

use GetLaminas\Security\Advisory;
use Psr\Container\ContainerInterface;
use Mezzio\Template\TemplateRendererInterface;

class AdvisoryHandlerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $advisory = $container->get(Advisory::class);
        $template = $container->get(TemplateRendererInterface::class);

        return new AdvisoryHandler($advisory, $template);
    }
}
