<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'combodo.current_user' shared autowired service.

include_once $this->targetDirs[4].'/core/dbobject.class.php';
include_once $this->targetDirs[4].'/core/cmdbobject.class.inc.php';
include_once $this->targetDirs[4].'/application/cmdbabstract.class.inc.php';
include_once $this->targetDirs[4].'/core/userrights.class.inc.php';
include_once $this->targetDirs[4].'/env-production/authent-local/model.authent-local.php';

return $this->services['combodo.current_user'] = new \UserLocal();
