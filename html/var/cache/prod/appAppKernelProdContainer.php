<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCEwE2kW\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCEwE2kW/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerCEwE2kW.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerCEwE2kW\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerCEwE2kW\appAppKernelProdContainer([
    'container.build_hash' => 'CEwE2kW',
    'container.build_id' => 'f5df6089',
    'container.build_time' => 1707760438,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCEwE2kW');
