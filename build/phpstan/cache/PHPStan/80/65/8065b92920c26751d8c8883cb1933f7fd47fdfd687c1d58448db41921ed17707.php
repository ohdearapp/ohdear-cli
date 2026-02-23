<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../illuminate/support/Facades/Cache.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Facades\Cache
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3c7c96d200e99bb497b5c6422c6bdd975e24529b46a3fa2a6c2d956b3c05b659-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Facades\\Cache',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../illuminate/support/Facades/Cache.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support\\Facades',
    'name' => 'Illuminate\\Support\\Facades\\Cache',
    'shortName' => 'Cache',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @method static \\Illuminate\\Contracts\\Cache\\Repository store(string|null $name = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Repository driver(string|null $driver = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Repository memo(string|null $driver = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Repository resolve(string $name)
 * @method static \\Illuminate\\Cache\\Repository build(array $config)
 * @method static \\Illuminate\\Cache\\Repository repository(\\Illuminate\\Contracts\\Cache\\Store $store, array $config = [])
 * @method static void refreshEventDispatcher()
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static \\Illuminate\\Cache\\CacheManager forgetDriver(array|string|null $name = null)
 * @method static void purge(string|null $name = null)
 * @method static \\Illuminate\\Cache\\CacheManager extend(string $driver, \\Closure $callback)
 * @method static \\Illuminate\\Cache\\CacheManager setApplication(\\Illuminate\\Contracts\\Foundation\\Application $app)
 * @method static bool has(\\UnitEnum|array|string $key)
 * @method static bool missing(\\UnitEnum|string $key)
 * @method static mixed get(\\UnitEnum|array|string $key, mixed $default = null)
 * @method static array many(array $keys)
 * @method static iterable getMultiple(iterable $keys, mixed $default = null)
 * @method static mixed pull(\\UnitEnum|array|string $key, mixed $default = null)
 * @method static string string(\\UnitEnum|string $key, \\Closure|string|null $default = null)
 * @method static int integer(\\UnitEnum|string $key, \\Closure|int|null $default = null)
 * @method static float float(\\UnitEnum|string $key, \\Closure|float|null $default = null)
 * @method static bool boolean(\\UnitEnum|string $key, \\Closure|bool|null $default = null)
 * @method static array array(\\UnitEnum|string $key, \\Closure|array|null $default = null)
 * @method static bool put(\\UnitEnum|array|string $key, mixed $value, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static bool set(\\UnitEnum|array|string $key, mixed $value, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static bool putMany(array $values, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static bool setMultiple(iterable $values, null|int|\\DateInterval $ttl = null)
 * @method static bool add(\\UnitEnum|array|string $key, mixed $value, \\DateTimeInterface|\\DateInterval|int|null $ttl = null)
 * @method static int|bool increment(\\UnitEnum|string $key, mixed $value = 1)
 * @method static int|bool decrement(\\UnitEnum|string $key, mixed $value = 1)
 * @method static bool forever(\\UnitEnum|string $key, mixed $value)
 * @method static mixed remember(\\UnitEnum|string $key, \\Closure|\\DateTimeInterface|\\DateInterval|int|null $ttl, \\Closure $callback)
 * @method static mixed sear(\\UnitEnum|string $key, \\Closure $callback)
 * @method static mixed rememberForever(\\UnitEnum|string $key, \\Closure $callback)
 * @method static mixed flexible(\\UnitEnum|string $key, array $ttl, callable $callback, array|null $lock = null, bool $alwaysDefer = false)
 * @method static mixed withoutOverlapping(\\UnitEnum|string $key, callable $callback, int $lockFor = 0, int $waitFor = 10, string|null $owner = null)
 * @method static bool forget(\\UnitEnum|array|string $key)
 * @method static bool delete(\\UnitEnum|array|string $key)
 * @method static bool deleteMultiple(iterable $keys)
 * @method static bool clear()
 * @method static \\Illuminate\\Cache\\TaggedCache tags(mixed $names)
 * @method static string|null getName()
 * @method static bool supportsTags()
 * @method static int|null getDefaultCacheTime()
 * @method static \\Illuminate\\Cache\\Repository setDefaultCacheTime(int|null $seconds)
 * @method static \\Illuminate\\Contracts\\Cache\\Store getStore()
 * @method static \\Illuminate\\Cache\\Repository setStore(\\Illuminate\\Contracts\\Cache\\Store $store)
 * @method static \\Illuminate\\Contracts\\Events\\Dispatcher|null getEventDispatcher()
 * @method static void setEventDispatcher(\\Illuminate\\Contracts\\Events\\Dispatcher $events)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static bool flush()
 * @method static string getPrefix()
 * @method static \\Illuminate\\Contracts\\Cache\\Lock lock(string $name, int $seconds = 0, string|null $owner = null)
 * @method static \\Illuminate\\Contracts\\Cache\\Lock restoreLock(string $name, string $owner)
 *
 * @see \\Illuminate\\Cache\\CacheManager
 * @see \\Illuminate\\Cache\\Repository
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 71,
    'endLine' => 105,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Facades\\Facade',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getFacadeAccessor' => 
      array (
        'name' => 'getFacadeAccessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the registered name of the component.
 *
 * @return string
 */',
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Support\\Facades',
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'currentClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'aliasName' => NULL,
      ),
      'spy' => 
      array (
        'name' => 'spy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the facade into a Mockery spy.
 *
 * @return \\Mockery\\MockInterface
 */',
        'startLine' => 88,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support\\Facades',
        'declaringClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'implementingClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'currentClassName' => 'Illuminate\\Support\\Facades\\Cache',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));