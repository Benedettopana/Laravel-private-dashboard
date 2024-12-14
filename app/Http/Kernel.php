'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],

protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\DisableCache::class,
    ],
];
