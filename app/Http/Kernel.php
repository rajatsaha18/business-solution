<?php

namespace App\Http;

use App\Http\Middleware\UNOAdminMiddleware;
use App\Http\Middleware\SuperAdminMiddleware;
use App\Http\Middleware\UnionAdminMiddleware;
use App\Http\Middleware\BuySellUserMiddelware;
use App\Http\Middleware\BusinessUserMiddleware;
use App\Http\Middleware\BuySellUserRedirectMiddleware;
use App\Http\Middleware\VGDOfficerAdminMiddleware;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\HalalInvestmentSeekerMiddleware;
use App\Http\Middleware\HalalInvestmentInvestorMiddleware;
use App\Http\Middleware\InvestmentSeekerRedirectMiddleware;
use App\Http\Middleware\InvestorRedirectMiddleware;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Laravel\Jetstream\Http\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'admin' => SuperAdminMiddleware::class,
        'user' => BusinessUserMiddleware::class,
        'buyselluser' => BuySellUserMiddelware::class,
        'halalinvestmentseeker' => HalalInvestmentSeekerMiddleware::class,
        'halalinvestmentinvestor'=>HalalInvestmentInvestorMiddleware::class,
        'investor.redirect'=>InvestorRedirectMiddleware::class,
        'investmentseeker.redirect'=>InvestmentSeekerRedirectMiddleware::class,
        'buyselluser.redirect'=>BuySellUserRedirectMiddleware::class,

    ];
}
