@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    General Report
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <div class="relative">
                        <x-base.lucide
                            class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] group-[.mode--light]:!text-slate-200"
                            icon="CalendarCheck2"
                        />
                        <x-base.form-select
                            class="rounded-[0.5rem] pl-9 group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:bg-chevron-white group-[.mode--light]:!text-slate-200 sm:w-44"
                        >
                            <option value="custom-date">Custom Date</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </x-base.form-select>
                    </div>
                    <div class="relative">
                        <x-base.lucide
                            class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] group-[.mode--light]:!text-slate-200"
                            icon="Calendar"
                        />
                        <x-base.litepicker
                            class="rounded-[0.5rem] pl-9 group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200 sm:w-64"
                        />
                    </div>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-5">
                <div class="col-span-12 p-1 box box--stacked md:col-span-6 2xl:col-span-3">
                    <div
                        class="-mx-1 h-[244px] overflow-hidden [&_.tns-nav]:bottom-auto [&_.tns-nav]:ml-5 [&_.tns-nav]:mt-5 [&_.tns-nav]:w-auto [&_.tns-nav_button.tns-nav-active]:w-5 [&_.tns-nav_button.tns-nav-active]:bg-white/70 [&_.tns-nav_button]:mx-0.5 [&_.tns-nav_button]:h-2 [&_.tns-nav_button]:w-2 [&_.tns-nav_button]:bg-white/40">
                        <x-base.tiny-slider config="fade">
                            <div class="px-1">
                                <div
                                    class="relative flex h-full w-full flex-col overflow-hidden rounded-[0.5rem] bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5">
                                    <x-base.lucide
                                        class="absolute right-0 top-0 -mr-5 -mt-5 h-36 w-36 rotate-[-10deg] transform fill-white/[0.03] stroke-[0.3] text-white/20"
                                        icon="Medal"
                                    />
                                    <div class="mt-12 mb-9">
                                        <div class="text-2xl font-medium leading-snug text-white">
                                            New feature
                                            <br>
                                            unlocked!
                                        </div>
                                        <div class="mt-1.5 text-lg text-white/70">
                                            Boost your performance!
                                        </div>
                                    </div>
                                    <a
                                        class="flex items-center font-medium text-white"
                                        href=""
                                    >
                                        Upgrade now
                                        <x-base.lucide
                                            class="ml-1.5 h-4 w-4"
                                            icon="MoveRight"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class="px-1">
                                <div
                                    class="relative flex h-full w-full flex-col overflow-hidden rounded-[0.5rem] bg-gradient-to-b from-theme-2/90 to-theme-1/90 p-5">
                                    <x-base.lucide
                                        class="absolute right-0 top-0 -mr-5 -mt-5 h-36 w-36 rotate-[-10deg] transform fill-white/[0.03] stroke-[0.3] text-white/20"
                                        icon="Database"
                                    />
                                    <div class="mt-12 mb-9">
                                        <div class="text-2xl font-medium leading-snug text-white">
                                            Stay ahead
                                            <br>
                                            with upgrades
                                        </div>
                                        <div class="mt-1.5 text-lg text-white/70">
                                            New features and updates!
                                        </div>
                                    </div>
                                    <a
                                        class="flex items-center font-medium text-white"
                                        href=""
                                    >
                                        Discover now
                                        <x-base.lucide
                                            class="ml-1.5 h-4 w-4"
                                            icon="ArrowRight"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class="px-1">
                                <div
                                    class="relative flex h-full w-full flex-col overflow-hidden rounded-[0.5rem] bg-gradient-to-b from-theme-2/90 to-theme-1/90 p-5">
                                    <x-base.lucide
                                        class="absolute right-0 top-0 -mr-5 -mt-5 h-36 w-36 rotate-[-10deg] transform fill-white/[0.03] stroke-[0.3] text-white/20"
                                        icon="Gauge"
                                    />
                                    <div class="mt-12 mb-9">
                                        <div class="text-2xl font-medium leading-snug text-white">
                                            Supercharge
                                            <br>
                                            your workflow
                                        </div>
                                        <div class="mt-1.5 text-lg text-white/70">
                                            Boost performance!
                                        </div>
                                    </div>
                                    <a
                                        class="flex items-center font-medium text-white"
                                        href=""
                                    >
                                        Get started
                                        <x-base.lucide
                                            class="ml-1.5 h-4 w-4"
                                            icon="ArrowRight"
                                        />
                                    </a>
                                </div>
                            </div>
                        </x-base.tiny-slider>
                    </div>
                </div>
                <div class="flex flex-col col-span-12 p-5 box box--stacked md:col-span-6 2xl:col-span-3">
                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                            <x-base.lucide
                                class="w-6 h-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-12 h-12 border rounded-full border-primary/10 bg-primary/10">
                            <x-base.lucide
                                class="w-6 h-6 fill-primary/10 text-primary"
                                icon="Database"
                            />
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium">41k Products Sold</div>
                            <div class="mt-0.5 text-slate-500">Across 21 stores</div>
                        </div>
                    </div>
                    <div class="relative mt-5 mb-6 overflow-hidden">
                        <div
                            class="absolute inset-0 my-auto h-px whitespace-nowrap text-xs leading-[0] tracking-widest text-slate-400/60">
                            .......................................................................
                        </div>
                        <x-report-line-chart
                            class="relative z-10 -ml-1.5"
                            data-index="2"
                            data-border-color="primary"
                            data-background-color="primary/0.3"
                            height="h-[100px]"
                        />
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-primary/70"></div>
                            <div class="ml-2.5">Products Sold</div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-slate-400"></div>
                            <div class="ml-2.5">Store Locations</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col col-span-12 p-5 box box--stacked md:col-span-6 2xl:col-span-3">
                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                            <x-base.lucide
                                class="w-6 h-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-12 h-12 border rounded-full border-success/10 bg-success/10">
                            <x-base.lucide
                                class="w-6 h-6 fill-success/10 text-success"
                                icon="Files"
                            />
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium">
                                36k Products Shipped
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                Across 14 warehouses
                            </div>
                        </div>
                    </div>
                    <div class="relative mt-5 mb-6 overflow-hidden">
                        <div
                            class="absolute inset-0 my-auto h-px whitespace-nowrap text-xs leading-[0] tracking-widest text-slate-400/60">
                            .......................................................................
                        </div>
                        <x-report-line-chart
                            class="relative z-10 -ml-1.5"
                            data-index="0"
                            data-border-color="success"
                            data-background-color="success/0.3"
                            height="h-[100px]"
                        />
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-success/70"></div>
                            <div class="ml-2.5">Total Shipped</div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-slate-400"></div>
                            <div class="ml-2.5">Warehouses</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col col-span-12 p-5 box box--stacked md:col-span-6 2xl:col-span-3">
                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                            <x-base.lucide
                                class="w-6 h-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-12 h-12 border rounded-full border-primary/10 bg-primary/10">
                            <x-base.lucide
                                class="w-6 h-6 fill-primary/10 text-primary"
                                icon="Zap"
                            />
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium">
                                3.7k Orders Processed
                            </div>
                            <div class="mt-0.5 text-slate-500">Across 9 regions</div>
                        </div>
                    </div>
                    <div class="relative mt-5 mb-6">
                        <x-report-donut-chart-3
                            class="relative z-10"
                            height="h-[100px]"
                        />
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-primary/70"></div>
                            <div class="ml-2.5">Order Volume</div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-danger/70"></div>
                            <div class="ml-2.5">Coverage Area</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Performance Insights</div>
                <div class="flex gap-x-3 gap-y-2 md:ml-auto">
                    <x-base.button
                        class="rounded-[0.5rem] bg-white text-slate-600 dark:text-slate-300"
                        data-carousel="important-notes"
                        data-target="prev"
                    >
                        <span class="flex h-5 w-3.5 items-center justify-center">
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="ChevronLeft"
                            />
                        </span>
                    </x-base.button>
                    <x-base.button
                        class="rounded-[0.5rem] bg-white text-slate-600 dark:text-slate-300"
                        data-carousel="important-notes"
                        data-target="next"
                    >
                        <span class="flex h-5 w-3.5 items-center justify-center">
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="ChevronRight"
                            />
                        </span>
                    </x-base.button>
                </div>
            </div>
            <div class="-mx-2.5 mt-3.5">
                <x-base.tiny-slider config="performance-insight-slider-config">
                    @foreach ($ecommerce as $fakerKey => $faker)
                        <div class="px-2.5 pb-3">
                            <div class="relative p-5 box box--stacked">
                                <div class="flex items-center">
                                    <div @class([
                                        'group flex items-center justify-center w-10 h-10 border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            :icon="$faker['icon']"
                                            @class([
                                                'w-5 h-5',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                    <div class="flex ml-auto">
                                        <div class="w-8 h-8 image-fit zoom-in">
                                            <img
                                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div class="w-8 h-8 -ml-3 image-fit zoom-in">
                                            <img
                                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                src="{{ Vite::asset($faker['images'][1]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div class="w-8 h-8 -ml-3 image-fit zoom-in">
                                            <img
                                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                src="{{ Vite::asset($faker['images'][2]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <div class="text-base font-medium">{{ $faker['title'] }}</div>
                                    <div class="mt-0.5 text-slate-500">
                                        {{ $faker['subtitle'] }}
                                    </div>
                                </div>
                                <a
                                    class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                    href=""
                                >
                                    {{ $faker['link'] }}
                                    <x-base.lucide
                                        class="ml-1.5 h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </x-base.tiny-slider>
            </div>
        </div>
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Recent Orders</div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <div class="relative">
                        <x-base.lucide
                            class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                            icon="CalendarCheck2"
                        />
                        <x-base.form-select class="rounded-[0.5rem] pl-9 sm:w-44">
                            <option value="custom-date">Custom Date</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </x-base.form-select>
                    </div>
                    <div class="relative">
                        <x-base.lucide
                            class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                            icon="Calendar"
                        />
                        <x-base.litepicker class="rounded-[0.5rem] pl-9 sm:w-64" />
                    </div>
                </div>
            </div>
            <div class="mt-2 overflow-auto lg:overflow-visible">
                <x-base.table class="border-separate border-spacing-y-[10px]">
                    <x-base.table.tbody>
                        @foreach ($transactions->take(5) as $fakerKey => $faker)
                            <x-base.table.tr>
                                <x-base.table.td
                                    class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                >
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"
                                            icon="{{ $faker['category']['icon'] }}"
                                        />
                                        <div class="ml-3.5">
                                            <a
                                                class="font-medium whitespace-nowrap"
                                                href=""
                                            >
                                                {{ $faker['orderId'] }}
                                            </a>
                                            <div class="mt-1 text-xs whitespace-nowrap text-slate-500">
                                                {{ $faker['category']['name'] }}
                                            </div>
                                        </div>
                                    </div>
                                </x-base.table.td>
                                <x-base.table.td
                                    class="box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                >
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        Customer Name
                                    </div>
                                    <a
                                        class="flex items-center text-primary"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 stroke-[1.7]"
                                            icon="ExternalLink"
                                        />
                                        <div class="ml-1.5 whitespace-nowrap">
                                            {{ $faker['user']['name'] }}
                                        </div>
                                    </a>
                                </x-base.table.td>
                                <x-base.table.td
                                    class="box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                >
                                    <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                        Purchased Items
                                    </div>
                                    <div class="flex mb-1">
                                        <div class="w-5 h-5 image-fit zoom-in">
                                            <x-base.tippy
                                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                src="{{ Vite::asset($faker['products'][0]['images'][0]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                                as="img"
                                                content="{{ $faker['products'][0]['name'] }}"
                                            />
                                        </div>
                                        <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                            <x-base.tippy
                                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                src="{{ Vite::asset($faker['products'][1]['images'][0]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                                as="img"
                                                content="{{ $faker['products'][1]['name'] }}"
                                            />
                                        </div>
                                        <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                            <x-base.tippy
                                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                src="{{ Vite::asset($faker['products'][2]['images'][0]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                                as="img"
                                                content="{{ $faker['products'][2]['name'] }}"
                                            />
                                        </div>
                                    </div>
                                </x-base.table.td>
                                <x-base.table.td
                                    class="box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                >
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        Status
                                    </div>
                                    <div @class(['flex items-center', $faker['orderStatus']['textColor']])>
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 stroke-[1.7]"
                                            icon="{{ $faker['orderStatus']['icon'] }}"
                                        />
                                        <div class="ml-1.5 whitespace-nowrap">
                                            {{ $faker['orderStatus']['name'] }}
                                        </div>
                                    </div>
                                </x-base.table.td>
                                <x-base.table.td
                                    class="box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                >
                                    <div class="mb-1 text-xs whitespace-nowrap text-slate-500">
                                        Date
                                    </div>
                                    <div class="whitespace-nowrap">{{ $faker['orderDate'] }}</div>
                                </x-base.table.td>
                                <x-base.table.td
                                    class="box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                >
                                    <div class="flex items-center justify-center">
                                        <x-base.menu class="h-5">
                                            <x-base.menu.button class="w-5 h-5 text-slate-500">
                                                <x-base.lucide
                                                    class="w-5 h-5 fill-slate-400/70 stroke-slate-400/70"
                                                    icon="MoreVertical"
                                                />
                                            </x-base.menu.button>
                                            <x-base.menu.items class="w-40">
                                                <x-base.menu.item>
                                                    <x-base.lucide
                                                        class="w-4 h-4 mr-2"
                                                        icon="WalletCards"
                                                    />
                                                    View Details
                                                </x-base.menu.item>
                                                <x-base.menu.item>
                                                    <x-base.lucide
                                                        class="w-4 h-4 mr-2"
                                                        icon="FileSignature"
                                                    />
                                                    Edit Order
                                                </x-base.menu.item>
                                                <x-base.menu.item>
                                                    <x-base.lucide
                                                        class="w-4 h-4 mr-2"
                                                        icon="Printer"
                                                    />
                                                    Print Invoice
                                                </x-base.menu.item>
                                            </x-base.menu.items>
                                        </x-base.menu>
                                    </div>
                                </x-base.table.td>
                            </x-base.table.tr>
                        @endforeach
                    </x-base.table.tbody>
                </x-base.table>
            </div>
            <div class="flex flex-col-reverse flex-wrap items-center mt-3 flex-reverse gap-y-2 sm:flex-row">
                <x-base.pagination class="flex-1 w-full mr-auto sm:w-auto">
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronsLeft"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronLeft"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>1</x-base.pagination.link>
                    <x-base.pagination.link active>2</x-base.pagination.link>
                    <x-base.pagination.link>3</x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronRight"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronsRight"
                        />
                    </x-base.pagination.link>
                </x-base.pagination>
                <x-base.form-select class="rounded-[0.5rem] sm:w-20">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </x-base.form-select>
            </div>
        </div>
    </div>
@endsection
