# Cache

## 简介

`friendsofhyperf/cache` 是一个基于 `hyperf/cache` 的组件。 提供更多简洁性的扩展方法

## 安装

```shell
composer require friendsofhyperf/cache
```

## 用法

### 注解

```php
namespace App\Controller;

use FriendsOfHyperf\Cache\CacheInterface;
use Hyperf\Di\Annotation\Inject;

class IndexController
{
   
    #[Inject]
    private CacheInterface $cache;

    public function index()
    {
        return $this->cache->remember($key, $ttl=60, function() {
            // return sth
        });
    }
}
```

### 门面

```php
use FriendsOfHyperf\Cache\Facade\Cache;

Cache::remember($key, $ttl=60, function() {
    // return sth
});
```

### 切换驱动

```php
use FriendsOfHyperf\Cache\Facade\Cache;
use FriendsOfHyperf\Cache\CacheManager;

Cache::driver('co')->remember($key, $ttl=60, function() {
    // return sth
});

CacheManager::get('co')->remember($key, $ttl=60, function() {
    // return sth
});
```

## 参考

Likes [Laravel-Cache](https://laravel.com/docs/8.x/cache)
