<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFbrrf5h\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFbrrf5h/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerFbrrf5h.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerFbrrf5h\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerFbrrf5h\appProdProjectContainer([
    'container.build_hash' => 'Fbrrf5h',
    'container.build_id' => '0eeea0cf',
    'container.build_time' => 1731953231,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFbrrf5h');
