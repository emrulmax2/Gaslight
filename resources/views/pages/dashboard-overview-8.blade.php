@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 2xl:col-span-9">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Hotel Performance Insights
                    </div>
                </div>
                <div class="mt-3.5">
                    <div class="box box--stacked flex flex-col gap-3 p-3 xl:flex-row">
                        <div>
                            <div
                                class="relative z-10 flex flex-1 flex-col items-center gap-5 overflow-hidden rounded-[0.6rem] bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] px-10 py-12 before:absolute before:left-0 before:top-0 before:-ml-[35%] before:hidden before:h-[130%] before:w-full before:-rotate-[38deg] before:bg-gradient-to-b before:from-black/[0.08] before:to-transparent before:content-[''] lg:flex-row xl:w-[300px] xl:flex-col xl:items-start xl:gap-14 xl:py-9 before:xl:block">
                                <div>
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-white/10 text-white"
                                            icon="CreditCard"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="text-center text-base text-white lg:text-left">
                                        Total Revenue
                                    </div>
                                    <div class="mt-2 flex items-center justify-center lg:justify-start">
                                        <div class="text-2xl font-medium text-white">
                                            $92,464.00
                                        </div>
                                        <div
                                            class="ml-2.5 flex items-center rounded-full border border-success/50 bg-success/50 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            12%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4 stroke-[1.5]"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                    <div class="mt-3 text-center leading-normal text-white/70 xl:text-left">
                                        The total revenue generated from room bookings and hotel
                                        services.
                                    </div>
                                </div>
                                <div class="w-52 lg:ml-auto xl:ml-0 xl:w-full">
                                    <x-base.button
                                        class="relative w-full justify-start border-white/20 bg-white/10 px-4 py-2.5 text-white hover:bg-white/[0.15]"
                                        href=""
                                        as="a"
                                        rounded
                                    >
                                        Show full reports
                                        <div
                                            class="absolute right-0 mr-0.5 flex h-9 w-9 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                            <x-base.lucide
                                                class="h-4 w-4"
                                                icon="ArrowRight"
                                            />
                                        </div>
                                    </x-base.button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full flex-col rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 sm:px-8 sm:py-7">
                            <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row sm:items-center">
                                <div class="relative">
                                    <x-base.lucide
                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                        icon="CalendarCheck2"
                                    />
                                    <x-base.form-select class="pl-9 sm:w-44">
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
                                    <x-base.litepicker class="rounded-[0.3rem] pl-9 sm:w-64" />
                                </div>
                            </div>
                            <div class="mt-6 flex flex-1 flex-col gap-y-5 sm:mb-4 sm:mt-8 md:flex-row lg:mt-6 xl:mb-0">
                                <div class="grid grid-cols-2 gap-5 md:-mb-4 md:-mt-2 xl:gap-0">
                                    @foreach ($hotel['performanceInsight']->take(4) as $fakerKey => $faker)
                                        <div
                                            class="col-span-2 flex flex-1 flex-col justify-center sm:col-span-1 md:col-span-2">
                                            <div class="mb-1.5 flex items-center">
                                                <div class="text-base">{{ $faker['value'] }}</div>
                                                <div @class([
                                                    'flex items-center ml-2 -mr-1 text-xs',
                                                    'text-danger' => $faker['percentageChange'] < 0,
                                                    'text-success' => $faker['percentageChange'] > 0,
                                                ])>
                                                    {{ $faker['percentageChange'] }}%
                                                    <x-base.lucide
                                                        class="ml-px h-4 w-4 stroke-[1]"
                                                        icon="{{ $faker['percentageChange'] > 0 ? 'ChevronUp' : 'ChevronDown' }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <span class="truncate sm:max-w-[9rem]">
                                                    {{ $faker['title'] }}
                                                </span>
                                                <x-base.tippy
                                                    as="a"
                                                    content="{{ $faker['description'] }}"
                                                >
                                                    <x-base.lucide
                                                        class="ml-1.5 h-3.5 w-3.5 stroke-[1.3] text-slate-400"
                                                        icon="Info"
                                                    />
                                                </x-base.tippy>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="grid grid-cols-2 gap-5 md:mx-auto md:-mb-4 md:-mt-2 xl:gap-0">
                                    @foreach ($hotel['performanceInsight']->take(4) as $fakerKey => $faker)
                                        <div
                                            class="col-span-2 flex flex-1 flex-col justify-center sm:col-span-1 md:col-span-2">
                                            <div class="mb-1.5 flex items-center">
                                                <div class="text-base">{{ $faker['value'] }}</div>
                                                <div @class([
                                                    'flex items-center ml-2 -mr-1 text-xs',
                                                    'text-danger' => $faker['percentageChange'] < 0,
                                                ])>
                                                    {{ $faker['percentageChange'] }}%
                                                    <x-base.lucide
                                                        class="ml-px h-4 w-4 stroke-[1]"
                                                        icon="{{ $faker['percentageChange'] > 0 ? 'ChevronUp' : 'ChevronDown' }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <span class="truncate sm:max-w-[9rem]">
                                                    {{ $faker['title'] }}
                                                </span>
                                                <x-base.tippy
                                                    as="a"
                                                    content="{{ $faker['description'] }}"
                                                >
                                                    <x-base.lucide
                                                        class="ml-1.5 h-3.5 w-3.5 stroke-[1.3] text-slate-400"
                                                        icon="Info"
                                                    />
                                                </x-base.tippy>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="grid grid-cols-2 gap-5 md:-mb-4 md:-mt-2 xl:gap-0">
                                    @foreach ($hotel['performanceInsight']->take(4) as $fakerKey => $faker)
                                        <div
                                            class="col-span-2 flex flex-1 flex-col justify-center sm:col-span-1 md:col-span-2">
                                            <div class="mb-1.5 flex items-center">
                                                <div class="text-base">{{ $faker['value'] }}</div>
                                                <div @class([
                                                    'flex items-center ml-2 -mr-1 text-xs',
                                                    'text-success' => $faker['percentageChange'] > 0,
                                                ])>
                                                    {{ $faker['percentageChange'] }}%
                                                    <x-base.lucide
                                                        class="ml-px h-4 w-4 stroke-[1]"
                                                        icon="{{ $faker['percentageChange'] > 0 ? 'ChevronUp' : 'ChevronDown' }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <span class="truncate sm:max-w-[9rem]">
                                                    {{ $faker['title'] }}
                                                </span>
                                                <x-base.tippy
                                                    as="a"
                                                    content="{{ $faker['description'] }}"
                                                >
                                                    <x-base.lucide
                                                        class="ml-1.5 h-3.5 w-3.5 stroke-[1.3] text-slate-400"
                                                        icon="Info"
                                                    />
                                                </x-base.tippy>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                        Occupancy vs. Revenue
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="box box--stacked col-span-2 mt-3.5 p-5 sm:col-span-1 2xl:col-span-2">
                        <div class="relative h-1/2">
                            <div class="text-base text-slate-500">
                                Occupancy Rate Over Time
                            </div>
                            <div class="mt-1 flex items-center">
                                <div class="text-xl font-medium">78.5%</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                    4%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-report-line-chart-3
                                    class="-mb-3 -ml-1.5"
                                    height="h-[87px]"
                                />
                            </div>
                            <x-base.menu class="absolute right-0 top-0">
                                <x-base.menu.button class="h-5 w-5 text-slate-500">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                        icon="MoreVertical"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Copy"
                                        /> Copy Link
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Trash"
                                        />
                                        Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                    <div class="box box--stacked col-span-2 mt-3.5 p-5 sm:col-span-1 2xl:col-span-2">
                        <div class="relative h-1/2">
                            <div class="text-base text-slate-500">Revenue Trends</div>
                            <div class="mt-1 flex items-center">
                                <div class="text-xl font-medium">$452,300</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    8%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-report-line-chart-4
                                    class="-mb-3 -ml-1.5"
                                    height="h-[87px]"
                                />
                            </div>
                            <x-base.menu class="absolute right-0 top-0">
                                <x-base.menu.button class="h-5 w-5 text-slate-500">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                        icon="MoreVertical"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Copy"
                                        /> Copy Link
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Trash"
                                        />
                                        Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Activity Stream</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                            <div>
                                <div class="flex items-center">
                                    <div class="text-xl font-medium">481,421</div>
                                    <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                        4%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-slate-500">
                                    Recent Hotel Activities.
                                </div>
                            </div>
                            <div class="sm:ml-auto">
                                <x-base.form-select>
                                    <option value="daily">24 Hours</option>
                                    <option value="weekly">48 Hours</option>
                                    <option value="monthly">64 Hours</option>
                                </x-base.form-select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        @foreach ($hotel['activityStream']->take(5) as $fakerKey => $faker)
                            <div class="flex items-center">
                                <div>
                                    <div @class([
                                        'group flex items-center justify-center w-[2.5rem] h-[2.5rem] border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            icon="{{ $faker['icon'] }}"
                                            @class([
                                                'w-[1.15rem] h-[1.15rem]',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                </div>
                                <div class="ml-3.5 flex w-full flex-col gap-y-2 sm:flex-row sm:items-center">
                                    <div>
                                        <a
                                            class="whitespace-nowrap font-medium"
                                            href=""
                                        >
                                            Room {{ $faker['roomNumber'] }}
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            {{ $faker['activity'] }}
                                        </div>
                                    </div>
                                    <div @class([
                                        'sm:ml-auto mr-auto sm:mr-0 group flex items-center text-xs font-medium rounded-lg border px-2.5 py-1',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10 [&.success]:text-success',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.primary]:text-primary',
                                        '[&.pending]:border-pending/10 [&.pending]:bg-pending/10 [&.pending]:text-pending',
                                        ['primary', 'success', 'pending'][mt_rand(0, 2)],
                                    ])>
                                        <div @class([
                                            'w-1 h-1 mr-1.5 rounded-full border ',
                                            'group-[.success]:border-success/50 group-[.success]:bg-success/50',
                                            'group-[.primary]:border-primary/50 group-[.primary]:bg-primary/50',
                                            'group-[.pending]:border-pending/50 group-[.pending]:bg-pending/50',
                                        ])></div>
                                        <span class="-mt-px">{{ $faker['roomType'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Occupancy Overview</div>
                </div>
                <div class="box box--stacked mt-3.5">
                    <div @class([
                        'relative flex flex-col pt-[94px] m-2.5 border-dashed rounded-[0.6rem] border box shadow-sm bg-gradient-to-b from-transparent to-theme-1/[0.03]',
                        "before:content-[''] before:opacity-90 before:inset-0 before:absolute before:bg-texture-black before:bg-[center_1rem] before:bg-cover before:bg-no-repeat",
                    ])>
                        <div
                            class="z-10 mx-auto -mb-6 mt-auto h-14 w-14 rounded-full border border-theme-1/20 bg-white/80 p-1">
                            <div
                                class="relative z-10 flex h-full w-full items-center justify-center rounded-full border border-primary/[0.15] bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] shadow-sm">
                                <x-base.lucide
                                    class="h-5 w-5 fill-white/10 text-white"
                                    icon="MailPlus"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="mb-12 mt-9 text-center">
                            <div class="flex items-center justify-center">
                                <div class="text-xl font-medium">7,971,421</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    2%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                            <div class="mt-1.5 text-slate-500">
                                Current guest status.
                            </div>
                            <div class="mt-4 flex justify-center gap-3">
                                <span
                                    class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs text-primary"
                                >
                                    <x-base.tippy
                                        class="-mt-px"
                                        as="span"
                                        content="4,353"
                                    >
                                        Checked-In
                                    </x-base.tippy>
                                </span>
                                <span
                                    class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs text-primary"
                                >
                                    <x-base.tippy
                                        class="-mt-px"
                                        as="span"
                                        content="1,929"
                                    >
                                        Checked-Out
                                    </x-base.tippy>
                                </span>
                                <span
                                    class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs text-primary"
                                >
                                    <x-base.tippy
                                        class="-mt-px"
                                        as="span"
                                        content="3,124"
                                    >
                                        Pending
                                    </x-base.tippy>
                                </span>
                            </div>
                        </div>
                        <x-base.button class="mt-2 w-full border-dashed border-slate-300 hover:bg-slate-50">
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="ExternalLink"
                            />
                            Check-In Guest
                        </x-base.button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Booking Distribution</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <x-base.tab.group class="mt-1">
                        <x-base.tab.list
                            class="mx-auto w-3/4 rounded-[0.6rem] border-slate-200 bg-white shadow-sm"
                            variant="boxed-tabs"
                        >
                            <x-base.tab
                                class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                id="example-1-tab"
                                selected
                            >
                                <x-base.tab.button
                                    class="w-full whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                    as="button"
                                >
                                    Daily
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                id="example-2-tab"
                            >
                                <x-base.tab.button
                                    class="w-full whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                    as="button"
                                >
                                    Weekly
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                id="example-3-tab"
                            >
                                <x-base.tab.button
                                    class="w-full whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                    as="button"
                                >
                                    Monthly
                                </x-base.tab.button>
                            </x-base.tab>
                        </x-base.tab.list>
                        <x-base.tab.panels class="mt-8">
                            <x-base.tab.panel
                                id="example-1"
                                selected
                            >
                                <div class="relative mx-auto w-4/5">
                                    <x-report-donut-chart-6
                                        class="relative z-10"
                                        height="h-[190px]"
                                    />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="text-center">
                                            <div class="text-lg font-medium text-slate-600/90">
                                                781,224
                                            </div>
                                            <div class="mt-1 text-slate-500">
                                                Total Bookings
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 flex justify-center gap-5">
                                    <div class="flex items-center text-slate-500">
                                        <div class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60">
                                        </div>
                                        Standard Room
                                    </div>
                                    <div class="flex items-center text-slate-500">
                                        <div class="mr-2 h-2 w-2 rounded-full border border-info/60 bg-info/60"></div>
                                        Suite Room
                                    </div>
                                </div>
                                <x-base.button class="mt-6 w-full border-dashed border-slate-300 hover:bg-slate-50">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="ExternalLink"
                                    />
                                    See Full Report
                                </x-base.button>
                            </x-base.tab.panel>
                        </x-base.tab.panels>
                    </x-base.tab.group>
                </div>
            </div>
        </div>
    </div>
@endsection
