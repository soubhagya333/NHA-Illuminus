<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'context_manipulator' shared autowired service.

include_once $this->targetDirs[4].'/env-production/itop-portal-base/portal/src/Helper/ContextManipulatorHelper.php';

return $this->services['context_manipulator'] = new \Combodo\iTop\Portal\Helper\ContextManipulatorHelper(${($_ = isset($this->services['ModuleDesign']) ? $this->services['ModuleDesign'] : ($this->services['ModuleDesign'] = new \ModuleDesign($this->getEnv('string:PORTAL_ID')))) && false ?: '_'}, ${($_ = isset($this->services['url_generator']) ? $this->services['url_generator'] : $this->getUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['brick_collection']) ? $this->services['brick_collection'] : $this->load('getBrickCollectionService.php')) && false ?: '_'}, ${($_ = isset($this->services['scope_validator']) ? $this->services['scope_validator'] : $this->load('getScopeValidatorService.php')) && false ?: '_'});
