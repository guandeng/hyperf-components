# Tinker

Hyperf's powerful REPL tool.

## Installation

```shell
composer require friendsofhyperf/tinker
```

## Publish Configuration

```shell
php bin/hyperf.php vendor:publish friendsofhyperf/tinker
```

## Usage

```shell
php bin/hyperf.php tinker
```

## Commands

- Run Commands

````shell
Psy Shell v0.10.4 (PHP 7.3.11 — cli)
>>> $a=1
=> 1
>>> $a
=> 1
>>> define('VERSION', 'v1.0.1')
=> true
>>> VERSION
=> "v1.0.1"
>>>
````

- View Command Help

```shell
>>> help
  help             Show a list of commands. Type `help [foo]` for information about [foo].      Aliases: ?
  ls               List local, instance or class variables, methods and constants.              Aliases: dir
  dump             Dump an object or primitive.
  doc              Read the documentation for an object, class, constant, method or property.   Aliases: rtfm, man
  show             Show the code for an object, class, constant, method or property.
  wtf              Show the backtrace of the most recent exception.                             Aliases: last-exception, wtf?
  whereami         Show where you are in the code.
  throw-up         Throw an exception or error out of the Psy Shell.
  timeit           Profiles with a timer.
  trace            Show the current call stack.
  buffer           Show (or clear) the contents of the code input buffer.                       Aliases: buf
  clear            Clear the Psy Shell screen.
  edit             Open an external editor. Afterwards, get produced code in input buffer.
  sudo             Evaluate PHP code, bypassing visibility restrictions.
  history          Show the Psy Shell history.                                                  Aliases: hist
  exit             End the current session and return to caller.                                Aliases: quit, q
  clear-compiled   Remove the compiled class file
  down             Put the application into maintenance mode
  env              Display the current framework environment
  optimize         Cache the framework bootstrap files
  up               Bring the application out of maintenance mode
  migrate          Run the database migrations
  inspire          Display an inspiring quote
```

- Get Environment Variables

```shell
Psy Shell v0.10.4 (PHP 7.2.34 — cli)
>>> env("APP_NAME")
=> "skeleton"
>>>
```

- Model Operations

```shell
➜  t.hyperf.com git:(master) ✗ php bin/hyperf.php tinker
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\Config\Listener\RegisterPropertyHandlerListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\Paginator\Listener\PageResolverListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\ExceptionHandler\Listener\ExceptionHandlerListener listener.
[DEBUG] Event Hyperf\Framework\Event\BootApplication handled by Hyperf\DbConnection\Listener\RegisterConnectionResolverListener listener.
Psy Shell v0.10.4 (PHP 7.2.34 — cli) by Justin Hileman
Unable to check for updates
>>> $user = App\Model\User::find(1)
[DEBUG] Event Hyperf\Database\Model\Events\Booting handled by Hyperf\ModelListener\Listener\ModelHookEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booting handled by Hyperf\ModelListener\Listener\ModelEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booted handled by Hyperf\ModelListener\Listener\ModelHookEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Booted handled by Hyperf\ModelListener\Listener\ModelEventListener listener.
[DEBUG] Event Hyperf\Database\Events\QueryExecuted handled by App\Listener\DbQueryExecutedListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Retrieved handled by Hyperf\ModelListener\Listener\ModelHookEventListener listener.
[DEBUG] Event Hyperf\Database\Model\Events\Retrieved handled by Hyperf\ModelListener\Listener\ModelEventListener listener.
=> App\Model\User {#81816
     +incrementing: true,
     +exists: true,
     +wasRecentlyCreated: false,
     +timestamps: true,
   }
>>> var_dump($user)
object(App\Model\User)#81816 (28) {
  ["table":protected]=>
  string(5) "users"
  ["fillable":protected]=>
  array(2) {
    [0]=>
    string(2) "id"
    [1]=>
    string(4) "name"
  }
  ["casts":protected]=>
  array(0) {
  }
  ["incrementing"]=>
  bool(true)
  ["exists"]=>
  bool(true)
 
  ["attributes":protected]=>
  array(4) {
    ["id"]=>
    int(1)
    ["name"]=>
    string(5) "arvin"
    ["created_at"]=>
    string(19) "2020-11-23 18:38:00"
    ["updated_at"]=>
    string(19) "2020-11-23 18:38:03"
  }
  ["original":protected]=>
  array(4) {
    ["id"]=>
    int(1)
    ["name"]=>
    string(5) "arvin"
    ["created_at"]=>
    string(19) "2020-11-23 18:38:00"
    ["updated_at"]=>
    string(19) "2020-11-23 18:38:03"
  }
  
}
=> null
```

- View Documentation

```shell
>>> doc md5
function md5($str, $raw_output = unknown)

PHP manual not found
    To document core PHP functionality, download the PHP reference manual:
    https://github.com/bobthecow/psysh/wiki/PHP-manual
>>>
```

- View Source Code

```shell
>>> show App\Model\User
 7: /**
 8:  */
 9: class User extends Model
10: {
11:     /**
12:      * The table associated with the model.
13:      *
14:      * @var string
15:      */
16:     protected $table = 'users';
17:     /**
18:      * The attributes that are mass assignable.
19:      *
20:      * @var array
21:      */
22:     protected $fillable = ['id','name'];
23:     /**
24:      * The attributes that should be cast to native types.
25:      *
26:      * @var array
27:      */
28:     protected $casts = [];
29: }

>>>
```