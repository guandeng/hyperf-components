<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */

namespace FriendsOfHyperf\Cache;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                Contract\CacheInterface::class => RepositoryFactory::class,
                CacheInterface::class => fn ($container) => $container->get(Contract\CacheInterface::class), // Will removed in v3.2
            ],
        ];
    }
}
