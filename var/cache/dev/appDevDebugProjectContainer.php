<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKsrhw9x\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKsrhw9x/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKsrhw9x.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKsrhw9x\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKsrhw9x\appDevDebugProjectContainer([
    'container.build_hash' => 'Ksrhw9x',
    'container.build_id' => '6cadb68b',
    'container.build_time' => 1731442776,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKsrhw9x');