<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGJUwpFS\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGJUwpFS/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerGJUwpFS.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerGJUwpFS\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerGJUwpFS\appAppKernelProdContainer([
    'container.build_hash' => 'GJUwpFS',
    'container.build_id' => '148fac3a',
    'container.build_time' => 1720539938,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGJUwpFS');
