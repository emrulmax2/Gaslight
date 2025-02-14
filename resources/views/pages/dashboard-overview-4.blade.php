@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 lg:col-span-8 2xl:col-span-6">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Production Insights
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                        <div class="sm:mr-auto">
                            <div class="text-base text-slate-500">
                                Total Production Units
                            </div>
                            <div class="flex items-center mt-1">
                                <div class="text-xl font-medium">24,176,221</div>
                                <div class="flex items-center ml-2 -mr-1 text-xs text-success">
                                    11%
                                    <x-base.lucide
                                        class="w-4 h-4 ml-px"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <x-base.lucide
                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                icon="Calendar"
                            />
                            <x-base.litepicker class="rounded-[0.5rem] pl-9 sm:w-64" />
                        </div>
                    </div>
                    <div class="mt-3">
                        <x-report-line-chart-2 height="h-[317px]" />
                    </div>
                    <div class="flex flex-col items-center gap-3 mt-5 sm:flex-row">
                        <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                            <div class="flex items-center text-slate-500">
                                <div class="w-2 h-2 mr-2 border rounded-full border-primary/60 bg-primary/60"></div>
                                Machine Performance
                            </div>
                            <div class="flex items-center text-slate-500">
                                <div class="w-2 h-2 mr-2 border rounded-full border-slate-500/60 bg-slate-500/60"></div>
                                Defect Rate
                            </div>
                        </div>
                        <a
                            class="flex items-center text-primary sm:ml-auto"
                            href=""
                        >
                            <x-base.lucide
                                class="h-3.5 w-3.5 stroke-[1.7]"
                                icon="ExternalLink"
                            />
                            <div
                                class="ml-1.5 whitespace-nowrap underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                Show full report
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium lg:group-[.mode--light]:text-white">
                        Production Efficiency
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="box box--stacked col-span-2 mt-3.5 p-5 md:col-span-1 lg:col-span-2">
                        <div class="relative h-1/2">
                            <div class="text-base text-slate-500">Raw Materials</div>
                            <div class="flex items-center mt-1">
                                <div class="text-xl font-medium">3,700,121</div>
                                <div class="flex items-center ml-2 -mr-1 text-xs text-danger">
                                    4%
                                    <x-base.lucide
                                        class="w-4 h-4 ml-px"
                                        icon="ChevronDown"
                                    />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-report-line-chart-3
                                    class="-mb-3 -ml-1.5"
                                    height="h-[101px]"
                                />
                            </div>
                            <x-base.menu class="absolute top-0 right-0">
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
                        </div>
                    </div>
                    <div class="box box--stacked col-span-2 mt-3.5 p-5 md:col-span-1 lg:col-span-2">
                        <div class="relative h-1/2">
                            <div class="text-base text-slate-500">Product Stock</div>
                            <div class="flex items-center mt-1">
                                <div class="text-xl font-medium">1,246,221</div>
                                <div class="flex items-center ml-2 -mr-1 text-xs text-success">
                                    8%
                                    <x-base.lucide
                                        class="w-4 h-4 ml-px"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-report-line-chart-1
                                    class="-mb-3 -ml-1.5"
                                    height="h-[101px]"
                                />
                            </div>
                            <x-base.menu class="absolute top-0 right-0">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                        Demographic Summary
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
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
                    <div class="pb-5 mb-6 border-b border-dashed border-slate-300/70">
                        <div class="text-base text-slate-500">Total Customers</div>
                        <div class="flex items-center mt-1">
                            <div class="text-xl font-medium">301,081,421</div>
                            <div class="flex items-center ml-2 -mr-1 text-xs text-danger">
                                4%
                                <x-base.lucide
                                    class="w-4 h-4 ml-px"
                                    icon="ChevronDown"
                                />
                            </div>
                        </div>
                    </div>
                    <div>
                        @foreach ($countries->take(7) as $fakerKey => $faker)
                            <div
                                class="mb-[18px] flex items-center [&:nth-of-type(n+5)]:hidden [&:nth-of-type(n+5)]:2xl:flex">
                                <div
                                    class="image-fit box h-[22px] w-[22px] overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($faker['image']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="ml-2.5 truncate pr-8">{{ $faker['name'] }}</div>
                                <div class="ml-auto">
                                    {{ mt_rand(1, 20) * (7 - $fakerKey) }},{{ mt_rand(1, 9) }}M
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <x-base.button class="mt-1.5 w-full border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        See Full Report
                    </x-base.button>
                </div>
            </div>
        </div>
        <div class="flex flex-col col-span-12 gap-y-10 md:col-span-6 2xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Targets and Delays</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="pb-5 border-b border-dashed mb-7 border-slate-300/70">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                            <div>
                                <div class="text-base text-slate-500">
                                    Total Target Units
                                </div>
                                <div class="flex items-center mt-1">
                                    <div class="text-xl font-medium">24,081,421</div>
                                    <div class="flex items-center ml-2 -mr-1 text-xs text-danger">
                                        4%
                                        <x-base.lucide
                                            class="w-4 h-4 ml-px"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="relative sm:ml-auto">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                    icon="CalendarCheck2"
                                />
                                <x-base.form-select class="pl-9 sm:w-32">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </x-base.form-select>
                            </div>
                        </div>
                    </div>
                    <x-report-donut-chart-4
                        class="relative z-10"
                        height="h-[100px]"
                    />
                    <div class="flex flex-wrap items-center justify-center mt-5 gap-x-5 gap-y-3">
                        <div class="flex items-center text-slate-500">
                            <div class="w-2 h-2 mr-2 border rounded-full border-primary/60 bg-primary/60"></div>
                            Production Targets
                        </div>
                        <div class="flex items-center text-slate-500">
                            <div class="w-2 h-2 mr-2 border rounded-full border-info/60 bg-info/60"></div>
                            Operational Delays
                        </div>
                    </div>
                    <x-base.button class="w-full mt-6 border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        See Full Report
                    </x-base.button>
                </div>
            </div>
        </div>
        <div class="flex flex-col col-span-12 gap-y-10 md:col-span-6 2xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">
                        Production Delay Notification
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
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
                        <x-base.lucide
                            class="mr-2.5 h-6 w-6 fill-warning/10 text-warning"
                            icon="Zap"
                        />
                        <div class="text-base">
                            <span class="font-medium">10+ Units</span> delayed in
                            manufacturing line.
                        </div>
                    </div>
                    <div class="flex justify-center mt-6">
                        <div class="flex">
                            @foreach ($products->take(5) as $fakerKey => $faker)
                                <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                    <x-base.tippy
                                        class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                        src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                        as="img"
                                        content="{{ $faker['name'] }}"
                                    />
                                </div>
                            @endforeach
                        </div>
                        <div
                            class="inset-y-0 z-10 my-auto -ml-3 flex h-[22px] items-center rounded-full border border-slate-200/80 bg-white px-2.5 text-xs font-medium text-primary shadow">
                            24+
                        </div>
                    </div>
                    <div class="mt-5 leading-relaxed text-center text-slate-600">
                        We have identified a delay in the production line that has
                        affected over 10 units. Our team is actively working to resolve
                        the issue and get production back on track.
                    </div>
                    <x-base.button class="w-full mt-7 border-primary/20 text-primary/80 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        View Details
                    </x-base.button>
                    <x-base.button
                        class="mt-2.5 w-full border-slate-300/60 hover:bg-slate-50"
                        variant="outline-secondary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ChevronRightSquare"
                        />
                        Acknowledge
                    </x-base.button>
                </div>
            </div>
        </div>
        <div class="flex flex-col col-span-12 gap-y-10 md:col-span-6 2xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">
                        Real-Time Production Output
                    </div>
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
                                    Monthly
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
                                    Yearly
                                </x-base.tab.button>
                            </x-base.tab>
                        </x-base.tab.list>
                        <x-base.tab.panels class="mt-10">
                            <x-base.tab.panel
                                id="example-1"
                                selected
                            >
                                <div class="w-4/5 mx-auto">
                                    <x-report-bar-chart
                                        class="relative z-10"
                                        height="h-[121px]"
                                    />
                                </div>
                                <div class="flex flex-wrap items-center justify-center mt-4 gap-x-5 gap-y-3">
                                    <div class="flex items-center text-slate-500">
                                        <div class="w-2 h-2 mr-2 border rounded-full border-primary/60 bg-primary/60">
                                        </div>
                                        Production Rate
                                    </div>
                                    <div class="flex items-center text-slate-500">
                                        <div class="w-2 h-2 mr-2 border rounded-full border-info/60 bg-info/60"></div>
                                        Output Speed
                                    </div>
                                </div>
                                <x-base.button class="w-full mt-6 border-dashed border-slate-300 hover:bg-slate-50">
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
