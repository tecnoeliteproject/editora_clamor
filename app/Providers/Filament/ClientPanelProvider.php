<?php

namespace App\Providers\Filament;

use App\Filament\Client\Pages\CompleteSignup;
use App\Filament\Client\Resources\ServiceRequestResource;
use App\Filament\Client\Resources\ServicoResource as ResourcesServicoResource;
use App\Filament\Client\Resources\TabelaPrecoResource;
use App\Filament\Client\Resources\PerfilClientResource;
use App\Filament\Resources\ServicoResource;
use App\Http\Responses\CustomLoginResponse;
use App\Http\Responses\CustomRegistrationResponse;
use App\Models\PerfilCliente;
use App\Models\User;
use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Http\Responses\Auth\LoginResponse;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class ClientPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $profile = null;
        if (Filament::auth()->check()) {
            $profile = PerfilCliente::where(['user_id', '=', Auth::user()->id])->first();
        }

        return $panel
            ->bootUsing(function () {
                app()->bind(LoginResponse::class, CustomLoginResponse::class);
                app()->bind(RegistrationResponse::class, CustomRegistrationResponse::class);
            })
            ->id('client')
            ->path('client')
            ->resources([
                \App\Filament\Client\Resources\PerfilClientResource::class,
            ])
            ->colors([
                'primary' => "#9C5B46",
            ])
            ->login()
            ->registration()            
            ->viteTheme('resources/css/filament/client/theme.css')
            ->discoverResources(in: app_path('Filament/Client/Resources'), for: 'App\\Filament\\Client\\Resources')
            ->discoverPages(in: app_path('Filament/Client/Pages'), for: 'App\\Filament\\Client\\Pages')
            ->pages([
                CompleteSignup::class,
                Pages\Dashboard::class,
            ])
            ->navigation(function (User $user, NavigationBuilder $builder) {

                $profile = PerfilCliente::where('user_id', Auth::user()->id)->first();

                if ($profile) {
                    return $builder
                        ->groups([
                            NavigationGroup::make()
                                ->label('Shop')
                                ->icon('heroicon-o-shopping-cart'),
                            NavigationGroup::make()
                                ->label('Blog')
                                ->icon('heroicon-o-pencil'),
                            NavigationGroup::make()
                                ->label(fn(): string => __('navigation.settings'))
                                ->icon('heroicon-o-cog-6-tooth')
                                ->collapsed(),
                        ])
                        ->items([
                            NavigationItem::make('Dashboard')
                                ->label('Dashboard')
                                ->icon('heroicon-o-home')
                                ->url('/client'),
                            
                            ...ServicoResource::getNavigationItems(),
                            ...ServiceRequestResource::getNavigationItems(),
                            ...TabelaPrecoResource::getNavigationItems(),
                            ...PerfilClientResource::getNavigationItems(),
                         
                        ])
                    ;
                } else {
                    return $builder;
                }
            })


            //     if (!$profile) {
            //         return false;
            //     }

            //     return true;
            // })
            ->discoverWidgets(in: app_path('Filament/Client/Resources/ServiceClientResource/Widgets'), for: 'App\\Filament\\Client\\Resources\\ServiceClientResource\\Widgets')
            ->widgets([
                Widgets\StatsOverviewWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
