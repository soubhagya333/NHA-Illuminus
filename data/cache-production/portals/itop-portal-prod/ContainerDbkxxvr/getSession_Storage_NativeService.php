<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'session.storage.native' shared service.

include_once $this->targetDirs[4].'/lib/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
include_once $this->targetDirs[4].'/lib/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
include_once $this->targetDirs[4].'/lib/symfony/http-foundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[4].'/lib/symfony/http-foundation/Session/Storage/MetadataBag.php';

return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : ($this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0'))) && false ?: '_'});
