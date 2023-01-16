<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.router_match' shared service.

include_once $this->targetDirs[4].'/lib/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Command/RouterMatchCommand.php';

$this->services['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(${($_ = isset($this->services['url_generator']) ? $this->services['url_generator'] : $this->getUrlGeneratorService()) && false ?: '_'});

$instance->setName('router:match');

return $instance;