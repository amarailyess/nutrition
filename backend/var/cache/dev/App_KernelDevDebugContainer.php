<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZBQku0i\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZBQku0i/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZBQku0i.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZBQku0i\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZBQku0i\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZBQku0i',
    'container.build_id' => '90d9fb64',
    'container.build_time' => 1648140117,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZBQku0i');
