<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Service\DeletedObjectsService' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService(($this->services['ps_eventbus.context'] ?? $this->load('getPsEventbus_ContextService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] ?? $this->load('getDeletedObjectsRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->load('getProxyServiceService.php')));
