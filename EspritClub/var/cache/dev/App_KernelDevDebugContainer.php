<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGxB6Vli\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGxB6Vli/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGxB6Vli.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGxB6Vli\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGxB6Vli\App_KernelDevDebugContainer([
    'container.build_hash' => 'GxB6Vli',
    'container.build_id' => '7c5a6d34',
    'container.build_time' => 1678392389,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGxB6Vli');