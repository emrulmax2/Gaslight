@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 xl:col-span-8">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        General Report
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="flex flex-col gap-y-5 lg:flex-row lg:items-center">
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
                        <div class="flex items-center gap-3.5 lg:ml-auto">
                            <a
                                class="flex items-center text-slate-500"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-3.5 w-3.5 stroke-[1.7]"
                                    icon="Printer"
                                />
                                <div
                                    class="ml-1.5 whitespace-nowrap underline decoration-slate-300 decoration-dotted underline-offset-[3px]">
                                    Export to PDF
                                </div>
                            </a>
                            <a
                                class="flex items-center text-primary"
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
                    <div class="mt-5">
                        <x-report-bar-chart-6 height="h-[280px]" />
                    </div>
                    <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60"></div>
                            Patient Admissions Over Time
                        </div>
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-slate-500/60 bg-slate-500/60"></div>
                            Bed Occupancy Rate Over Time
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium xl:group-[.mode--light]:text-white">
                        Patient Overview
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                        <div>
                            <div class="text-xl font-medium">24,782</div>
                            <div class="mt-1 text-base text-slate-500">
                                Total Patients
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
                    <div class="mb-9 mt-6">
                        <div class="border-t border-dashed border-slate-300/70 pt-6">
                            <div class="text-slate-500">
                                Medical condition distribution
                            </div>
                            <div class="mt-3 flex h-2.5">
                                <x-base.tippy
                                    class="h-full w-[35%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Heart Disease"
                                ></x-base.tippy>
                                <x-base.tippy
                                    class="h-full w-[20%] border border-info/50 bg-info/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Diabetes"
                                ></x-base.tippy>
                                <x-base.tippy
                                    class="h-full w-[5%] border border-pending/50 bg-pending/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Respiratory Issues"
                                ></x-base.tippy>
                                <x-base.tippy
                                    class="h-full w-[40%] border border-success/50 bg-success/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Other"
                                ></x-base.tippy>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-center">
                            <div>
                                <div class="flex flex-col items-end">
                                    <div class="w-28 truncate text-right text-slate-500">
                                        Heart Disease
                                    </div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">2,974</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            11%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col items-end">
                                    <div class="w-28 truncate text-right text-slate-500">
                                        Diabetes
                                    </div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">1,696</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            2%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-12 w-px border-r border-dashed"></div>
                            <div>
                                <div class="flex flex-col">
                                    <div class="w-28 truncate text-slate-500">
                                        Respiratory Issues
                                    </div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">2,556</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            11%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col">
                                    <div class="w-28 truncate text-slate-500">Other</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">1,278</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            2%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-base.button class="w-full border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        See Full Report
                    </x-base.button>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Patient Admissions</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="overflow-x-auto overflow-y-hidden">
                        <div class="min-w-[420px] xl:min-w-0">
                            <div class="flex gap-3.5">
                                <div class="-mr-[13%] w-full">
                                    <div class="h-5 text-xs text-slate-400"></div>
                                    <div class="mt-2 grid grid-cols-4 gap-[0.4rem] text-slate-500">
                                        <div>
                                            <div class="mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]"></div>
                                            <div class="relative mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]">
                                                <div class="absolute inset-y-0 my-auto -mt-0.5 text-xs text-slate-400">
                                                    Mon
                                                </div>
                                            </div>
                                            <div class="mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]"></div>
                                            <div class="relative mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]">
                                                <div class="absolute inset-y-0 my-auto -mt-0.5 text-xs text-slate-400">
                                                    Tue
                                                </div>
                                            </div>
                                            <div class="mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]"></div>
                                            <div class="relative mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]">
                                                <div class="absolute inset-y-0 my-auto -mt-0.5 text-xs text-slate-400">
                                                    Wed
                                                </div>
                                            </div>
                                            <div class="mb-[0.4rem] w-full rounded-[0.17rem] pt-[100%]"></div>
                                        </div>
                                    </div>
                                </div>
                                @foreach (['Sep', 'Oct', 'Nov', 'Dec'] as $month)
                                    <div class="w-full">
                                        <div class="h-5 text-xs text-slate-500">{{ $month }}</div>
                                        <div class="mt-2 grid grid-cols-4 gap-x-[0.4rem] gap-y-[0.4rem]">
                                            @foreach ([1, 2, 3, 4] as $week)
                                                <div>
                                                    @foreach (['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] as $day)
                                                        <x-base.tippy
                                                            as="div"
                                                            content="{{ mt_rand(1, 50) . ' sales on 2 Sep, 2021' }}"
                                                            @class([
                                                                'rounded w-full pt-[84%] mb-[0.4rem] cursor-pointer zoom-in bg-primary border border-primary/20',
                                                                [
                                                                    'bg-opacity-50',
                                                                    'bg-opacity-40',
                                                                    'bg-opacity-30',
                                                                    'bg-opacity-20',
                                                                    'bg-opacity-10',
                                                                ][mt_rand(0, 4)],
                                                            ])
                                                        />
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-2 flex w-full items-center xl:justify-end">
                                <div class="mr-2.5 text-xs text-slate-500">Less</div>
                                <x-base.tippy
                                    class="-mt-0.5 mr-1 h-3 w-3 rounded-[0.17rem] bg-primary/10"
                                    as="div"
                                    content="1 - 5 sales"
                                />
                                <x-base.tippy
                                    class="-mt-0.5 mr-1 h-3 w-3 rounded-[0.17rem] bg-primary/20"
                                    as="div"
                                    content="5 - 15 sales"
                                />
                                <x-base.tippy
                                    class="-mt-0.5 mr-1 h-3 w-3 rounded-[0.17rem] bg-primary/30"
                                    as="div"
                                    content="15 - 35 sales"
                                />
                                <x-base.tippy
                                    class="-mt-0.5 mr-1 h-3 w-3 rounded-[0.17rem] bg-primary/40"
                                    as="div"
                                    content="35 - 65 sales"
                                />
                                <x-base.tippy
                                    class="-mt-0.5 mr-1 h-3 w-3 rounded-[0.17rem] bg-primary/60"
                                    as="div"
                                    content="65+ sales"
                                />
                                <div class="ml-1.5 text-xs text-slate-500">More</div>
                            </div>
                        </div>
                    </div>
                    <x-base.button class="mt-6 w-full border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        See Full Report
                    </x-base.button>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Bed Occupancy Overview</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
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
                    <div class="mb-7 border-b border-dashed border-slate-300/70 pb-5">
                        <div class="text-base text-slate-500">Total Beds</div>
                        <div class="mt-1 flex items-center">
                            <div class="text-xl font-medium">476,221</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                11%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="mb-8 flex items-center">
                        <div class="flex-1">
                            <div
                                class="flex h-3.5 items-center truncate border-l-4 border-success/40 pl-2 font-medium text-slate-500">
                                Occupied Beds
                            </div>
                            <div class="mb-2 mt-3 text-lg font-medium">40%</div>
                            <div class="text-slate-500">190,488 Beds</div>
                        </div>
                        <div class="flex flex-1 justify-center">
                            <div class="box mx-auto flex h-10 w-10 items-center justify-center rounded-full font-medium">
                                vs
                            </div>
                        </div>
                        <div class="flex-1 text-right">
                            <div
                                class="flex h-3.5 items-center justify-end truncate border-r-4 border-danger/40 pr-2 font-medium text-slate-500">
                                Available Beds
                            </div>
                            <div class="mb-2 mt-3 text-lg font-medium">60%</div>
                            <div class="text-slate-500">285,733 Beds</div>
                        </div>
                    </div>
                    <div class="mt-2 flex h-2.5">
                        <x-base.tippy
                            class="h-full w-[60%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r"
                            as="div"
                            content="Occupied Beds"
                        ></x-base.tippy>
                        <x-base.tippy
                            class="h-full w-[40%] border border-info/50 bg-info/50 first:rounded-l last:rounded-r"
                            as="div"
                            content="Available Beds"
                        ></x-base.tippy>
                    </div>
                    <div class="mt-2.5 text-center text-slate-500">
                        +42 Bed Allocation
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Department Performance</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <x-report-radar-chart
                        class="relative z-10"
                        height="h-[216px]"
                    />
                    <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60"></div>
                            Cardiovascular Unit
                        </div>
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-info/60 bg-info/60"></div>
                            Radiology Department
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
