@extends('../themes/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div @class([
        'exort',
        "before:content-[''] before:bg-gradient-to-b before:from-slate-100 before:to-slate-50 before:h-screen before:w-full before:fixed before:top-0",
    ])>
        <div @class([
            '[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide',
            "[&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60]",
            "[&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]",
        ])>
            <div @class([
                'fixed top-0 left-0 z-50 h-screen side-menu group',
                'side-menu--collapsed',
            ])>
                <div
                    class="box fixed inset-x-0 top-0 z-10 flex h-[65px] rounded-none border-x-0 border-t-0 border-transparent bg-gradient-to-r from-theme-1 to-theme-2 shadow-lg">
                    <div @class([
                        'side-menu__content',
                        'bg-white flex-none flex items-center z-10 px-5 h-full xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000001f]',
                        "before:content-[''] before:hidden before:xl:block before:absolute before:right-0 before:border-r before:border-dashed before:border-white/[0.15] before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:hidden",
                        "after:content-[''] after:left-[-1.25rem] after:bg-[1.25rem_top] after:absolute after:w-screen after:h-full after:bg-[length:100vw_65px] after:z-[-1] after:bg-gradient-to-r after:from-theme-1 after:to-theme-2",
                    ])>
                        <a
                            class="hidden items-center transition-[margin] xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2"
                            href=""
                        >
                            <div
                                class="flex h-[34px] w-[34px] items-center justify-center rounded-lg bg-white/10 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                                <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                                    <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                    </div>
                                    <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                    <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                EXORT
                            </div>
                        </a>
                        <a
                            class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
                            href=""
                        >
                            <x-base.lucide
                                class="h-3.5 w-3.5 stroke-[1.3]"
                                icon="ArrowLeft"
                            />
                        </a>
                        <div class="flex items-center gap-1 xl:hidden">
                            <a
                                class="open-mobile-menu rounded-full p-2 hover:bg-white/5"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-[18px] w-[18px] text-white"
                                    icon="AlignJustify"
                                />
                            </a>
                            <a
                                class="rounded-full p-2 hover:bg-white/5"
                                data-tw-toggle="modal"
                                data-tw-target="#quick-search"
                                href="javascript:;"
                            >
                                <x-base.lucide
                                    class="h-[18px] w-[18px] text-white"
                                    icon="Search"
                                />
                            </a>
                        </div>
                    </div>
                    <div
                        class="absolute inset-x-0 h-full transition-[padding] duration-100 xl:pl-[275px] group-[.side-menu--collapsed]:xl:pl-[91px]">
                        <div class="flex h-full w-full items-center px-5">
                            <!-- BEGIN: Breadcrumb -->
                            <x-base.breadcrumb
                                class="hidden flex-1 xl:block"
                                light
                            >
                                <x-base.breadcrumb.link :index="0">App</x-base.breadcrumb.link>
                                <x-base.breadcrumb.link :index="1">Dashboards</x-base.breadcrumb.link>
                                <x-base.breadcrumb.link
                                    :index="2"
                                    :active="true"
                                >
                                    Analytics
                                </x-base.breadcrumb.link>
                            </x-base.breadcrumb>
                            <!-- END: Breadcrumb -->
                            <!-- BEGIN: Search -->
                            <div
                                class="relative hidden flex-1 justify-center xl:flex"
                                data-tw-toggle="modal"
                                data-tw-target="#quick-search"
                            >
                                <div
                                    class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] bg-white/[0.12] px-3.5 py-2 text-white/60 transition-colors hover:bg-white/20">
                                    <x-base.lucide
                                        class="h-[18px] w-[18px]"
                                        icon="Search"
                                    />
                                    <div class="ml-2.5 mr-auto">Quick search...</div>
                                    <div>⌘K</div>
                                </div>
                            </div>
                            <x-quick-search />
                            <!-- END: Search -->
                            <!-- BEGIN: Notification & User Menu -->
                            <div class="flex flex-1 items-center">
                                <div class="ml-auto flex items-center gap-1">
                                    <a
                                        class="rounded-full p-2 hover:bg-white/5"
                                        data-tw-toggle="modal"
                                        data-tw-target="#activities-panel"
                                        href="javascript:;"
                                    >
                                        <x-base.lucide
                                            class="h-[18px] w-[18px] text-white"
                                            icon="LayoutGrid"
                                        />
                                    </a>
                                    <a
                                        class="request-full-screen rounded-full p-2 hover:bg-white/5"
                                        href="javascript:;"
                                    >
                                        <x-base.lucide
                                            class="h-[18px] w-[18px] text-white"
                                            icon="Expand"
                                        />
                                    </a>
                                    <a
                                        class="rounded-full p-2 hover:bg-white/5"
                                        data-tw-toggle="modal"
                                        data-tw-target="#notifications-panel"
                                        href="javascript:;"
                                    >
                                        <x-base.lucide
                                            class="h-[18px] w-[18px] text-white"
                                            icon="Bell"
                                        />
                                    </a>
                                </div>
                                <x-base.menu class="ml-5">
                                    <x-base.menu.button
                                        class="image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]"
                                    >
                                        <img
                                            src="{{ Vite::asset($users[0]['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </x-base.menu.button>
                                    <x-base.menu.items class="mt-1 w-56">
                                        <x-base.menu.item
                                            data-tw-toggle="modal"
                                            data-tw-target="#switch-account"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="ToggleLeft"
                                            />
                                            Switch Account
                                        </x-base.menu.item>
                                        <x-base.menu.divider />
                                        <x-base.menu.item href="{{ route('settings', ['page' => 'connected-services']) }}">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Settings"
                                            />
                                            Connected Services
                                        </x-base.menu.item>
                                        <x-base.menu.item href="{{ route('settings', ['page' => 'email-settings']) }}">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Inbox"
                                            />
                                            Email Settings
                                        </x-base.menu.item>
                                        <x-base.menu.item href="{{ route('settings', ['page' => 'security']) }}">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Lock"
                                            />
                                            Reset Password
                                        </x-base.menu.item>
                                        <x-base.menu.divider />
                                        <x-base.menu.item href="{{ route('settings') }}">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Users"
                                            />
                                            Profile Info
                                        </x-base.menu.item>
                                        <x-base.menu.item href="{{ route('login') }}">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Power"
                                            />
                                            Logout
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                            <x-activities-panel />
                            <x-notifications-panel />
                            <x-switch-account />
                            <!-- END: Notification & User Menu -->
                        </div>
                    </div>
                </div>
                <div class="side-menu__content absolute inset-y-0 z-10 xl:top-[65px] xl:z-0">
                    <div @class([
                        'xl:ml-0 bg-gradient-to-b from-slate-100 to-slate-50 border-r border-slate-300/70 border-dashed rounded-none w-[275px] duration-300 transition-[width,margin] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:border-solid relative overflow-hidden h-full flex flex-col',
                        "after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:z-[-1] after:xl:hidden",
                        'group-[.side-menu--mobile-menu-open]:ml-0 group-[.side-menu--mobile-menu-open]:after:block',
                        '-ml-[275px] after:hidden',
                    ])>
                        <div @class([
                            'close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden',
                            '[&.close-mobile-menu--mobile-menu-open]:flex',
                            'hidden',
                        ])>
                            <a
                                class="ml-5 mt-5"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-8 w-8 text-white"
                                    icon="X"
                                />
                            </a>
                        </div>
                        <div @class([
                            'scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent',
                            '[&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30',
                        ])>
                            <ul class="scrollable">
                                <!-- BEGIN: First Child -->
                                @foreach ($sideMenu as $menuKey => $menu)
                                    @if (is_string($menu))
                                        <li class="side-menu__divider">
                                            {{ $menu }}
                                        </li>
                                    @else
                                        <li>
                                            <a
                                                href="{{ isset($menu['route_name']) && Route::has($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                                                @class([
                                                    'side-menu__link',
                                                    $firstLevelActiveIndex == $menuKey ? 'side-menu__link--active' : '',
                                                    $firstLevelActiveIndex == $menuKey && isset($menu['sub_menu'])
                                                        ? 'side-menu__link--active-dropdown'
                                                        : '',
                                                ])
                                            >
                                                <x-base.lucide
                                                    class="side-menu__link__icon"
                                                    :icon="$menu['icon']"
                                                />
                                                <div class="side-menu__link__title">{{ $menu['title'] }}</div>
                                                @if (isset($menu['badge']))
                                                    <div class="side-menu__link__badge">
                                                        {{ $menu['badge'] }}
                                                    </div>
                                                @endif
                                                @if (isset($menu['sub_menu']))
                                                    <x-base.lucide
                                                        class="side-menu__link__chevron"
                                                        icon="ChevronDown"
                                                    />
                                                @endif
                                            </a>
                                            <!-- BEGIN: Second Child -->
                                            @if (isset($menu['sub_menu']))
                                                <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'block' : 'hidden' }}">
                                                    @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                                        <li>
                                                            <a
                                                                href="{{ isset($subMenu['route_name']) && Route::has($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                                                @class([
                                                                    'side-menu__link',
                                                                    $firstLevelActiveIndex == $menuKey && $secondLevelActiveIndex == $subMenuKey
                                                                        ? 'side-menu__link--active'
                                                                        : '',
                                                                    $secondLevelActiveIndex == $subMenuKey && isset($subMenu['sub_menu'])
                                                                        ? 'side-menu__link--active-dropdown'
                                                                        : '',
                                                                ])
                                                            >
                                                                <x-base.lucide
                                                                    class="side-menu__link__icon"
                                                                    :icon="$subMenu['icon']"
                                                                />
                                                                <div class="side-menu__link__title">
                                                                    {{ $subMenu['title'] }}
                                                                </div>
                                                                @if (isset($subMenu['badge']))
                                                                    <div class="side-menu__link__badge">
                                                                        {{ $subMenu['badge'] }}
                                                                    </div>
                                                                @endif
                                                                @if (isset($subMenu['sub_menu']))
                                                                    <x-base.lucide
                                                                        class="side-menu__link__chevron"
                                                                        icon="ChevronDown"
                                                                    />
                                                                @endif
                                                            </a>
                                                            <!-- BEGIN: Third Child -->
                                                            @if (isset($subMenu['sub_menu']))
                                                                <ul
                                                                    class="{{ $secondLevelActiveIndex == $subMenuKey ? 'block' : 'hidden' }}">
                                                                    >
                                                                    @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                                        <li>
                                                                            <a
                                                                                href="{{ isset($lastSubMenu['route_name']) && Route::has($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                                                @class([
                                                                                    'side-menu__link',
                                                                                    $firstLevelActiveIndex == $menuKey &&
                                                                                    $secondLevelActiveIndex == $subMenuKey &&
                                                                                    $thirdLevelActiveIndex == $lastSubMenuKey
                                                                                        ? 'side-menu__link--active'
                                                                                        : '',
                                                                                    $thirdLevelActiveIndex == $lastSubMenuKey && isset($lastSubMenu['sub_menu'])
                                                                                        ? 'side-menu__link--active-dropdown'
                                                                                        : '',
                                                                                ])
                                                                            >
                                                                                <x-base.lucide
                                                                                    class="side-menu__link__icon"
                                                                                    :icon="$lastSubMenu['icon']"
                                                                                />
                                                                                <div class="side-menu__link__title">
                                                                                    {{ $lastSubMenu['title'] }}
                                                                                </div>
                                                                                @if (isset($lastSubMenu['badge']))
                                                                                    <div class="side-menu__link__badge">
                                                                                        {{ $lastSubMenu['title'] }}
                                                                                    </div>
                                                                                @endif
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                            <!-- END: Third Child -->
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            <!-- END: Second Child -->
                                        </li>
                                    @endif
                                @endforeach
                                <!-- END: First Child -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div @class([
                'content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10',
                'content--compact',
                'xl:ml-[275px]',
                '[&.content--compact]:xl:ml-[91px]',
            ])>
                <div class="container">
                    @yield('subcontent')
                </div>
            </div>
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/vendors/simplebar.css')
    @vite('resources/css/themes/exort.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/simplebar.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/themes/exort.js')
@endPushOnce
