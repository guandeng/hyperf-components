<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/3.x/README.md
 * @contact  huangdijia@gmail.com
 */
namespace FriendsOfHyperf\AccessLog;

use FriendsOfHyperf\AccessLog\Listener\RequestTerminatedListener;

class ConfigProvider
{
    public function __invoke(): array
    {
        defined('BASE_PATH') or define('BASE_PATH', '');

        return [
            // 'annotations' => [
            //     'scan' => [
            //         'paths' => [
            //             __DIR__,
            //         ],
            //     ],
            // ],
            'dependencies' => [
                Handler::class => HandlerFactory::class,
            ],
            'listeners' => [
                RequestTerminatedListener::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'config file of package.',
                    'source' => __DIR__ . '/../publish/access_log.php',
                    'destination' => BASE_PATH . '/config/autoload/access_log.php',
                ],
            ],
        ];
    }
}
