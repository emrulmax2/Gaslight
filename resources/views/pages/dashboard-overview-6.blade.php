@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-10 gap-x-6 gap-y-10">
        <div class="col-span-12 gap-y-10 2xl:col-span-3">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                    <div class="flex h-10 items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Current Balance
                        </div>
                    </div>
                    <div class="box box--stacked mt-3.5">
                        <div class="border-b border-dashed p-5">
                            <div class="flex flex-col gap-3 sm:flex-row">
                                <div>
                                    <div class="text-base text-slate-500">Total Orders</div>
                                    <div class="mt-1 flex items-center">
                                        <div class="text-xl font-medium">1,241,221</div>
                                        <div class="-mr-1 ml-2.5 flex items-center text-success">
                                            11%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:ml-auto">
                                    <x-base.form-select class="px-4 sm:w-28">
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="daily">Daily</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6 border-b border-dashed px-5 py-6">
                            <div>
                                <div class="flex items-center text-slate-500">
                                    <div class="mr-auto">Order Goal</div>
                                    <span class="ml-auto">201 / 410</span>
                                </div>
                                <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                    <div
                                        class="-m-px w-[75%] border border-theme-1/40 bg-theme-1/30 first:rounded-l last:rounded-r">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center text-slate-500">
                                    <div class="mr-auto">Revenue Progress</div>
                                    <span class="ml-auto">$8,500 / $10,000</span>
                                </div>
                                <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                    <div
                                        class="-m-px w-[45%] border border-theme-2/40 bg-theme-2/30 first:rounded-l last:rounded-r">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center text-slate-500">
                                    <div class="mr-auto">Completed Orders</div>
                                    <span class="ml-auto">395 / 450</span>
                                </div>
                                <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                    <div
                                        class="-m-px w-[75%] border border-primary/40 bg-primary/30 first:rounded-l last:rounded-r">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-6">
                            <x-base.button
                                class="relative w-full justify-start border-primary/20 px-4 py-2.5"
                                href=""
                                as="a"
                                variant="outline-primary"
                                rounded
                            >
                                Explore Details
                                <div
                                    class="absolute right-0 mr-0.5 flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/[0.15]">
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </div>
                            </x-base.button>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                    <div class="flex h-10 items-center">
                        <div
                            class="text-base font-medium md:group-[.mode--light]:text-white 2xl:group-[.mode--light]:text-current">
                            Sales Breakdown
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
                                    <div
                                        class="relative mx-auto w-4/5 [&>div]:!h-[200px] [&>div]:sm:!h-[160px] [&>div]:2xl:!h-[200px]">
                                        <x-report-donut-chart-5
                                            class="relative z-10"
                                            height="h-[200px]"
                                        />
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="text-center">
                                                <div class="text-lg font-medium text-slate-600/90">
                                                    781,224
                                                </div>
                                                <div class="mt-1 text-slate-500">Total Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-7 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                                        <div class="flex items-center text-slate-500">
                                            <div class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60">
                                            </div>
                                            Coffee
                                        </div>
                                        <div class="flex items-center text-slate-500">
                                            <div class="mr-2 h-2 w-2 rounded-full border border-success/60 bg-success/60">
                                            </div>
                                            Pastries
                                        </div>
                                        <div class="flex items-center text-slate-500">
                                            <div class="mr-2 h-2 w-2 rounded-full border border-warning/60 bg-warning/60">
                                            </div>
                                            Beverages
                                        </div>
                                    </div>
                                    <x-base.button class="mt-9 w-full border-dashed border-slate-300 hover:bg-slate-50">
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4 stroke-[1.3]"
                                            icon="ExternalLink"
                                        />
                                        Export Report
                                    </x-base.button>
                                </x-base.tab.panel>
                            </x-base.tab.panels>
                        </x-base.tab.group>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-7">
            <div>
                <div class="flex h-10 items-center">
                    <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                        Cafe Insight
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
                    <div class="mt-5 rounded-md border border-dashed border-slate-300/70 py-5">
                        <div class="flex flex-col md:flex-row">
                            <div
                                class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                <div @class([
                                    'group flex items-center justify-center w-10 h-10 border rounded-full mr-5',
                                    '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                    '[&.success]:border-success/10 [&.success]:bg-success/10',
                                    ['primary', 'success'][mt_rand(0, 1)],
                                ])>
                                    <x-base.lucide
                                        icon="KanbanSquare"
                                        @class([
                                            'w-5 h-5',
                                            'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                            'group-[.success]:text-success group-[.success]:fill-success/10',
                                        ])
                                    />
                                </div>
                                <div class="flex-start flex flex-col">
                                    <div class="text-slate-500">Total Orders</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">876,221</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            11%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                <div @class([
                                    'group flex items-center justify-center w-10 h-10 border rounded-full mr-5',
                                    '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                    '[&.success]:border-success/10 [&.success]:bg-success/10',
                                    ['primary', 'success'][mt_rand(0, 1)],
                                ])>
                                    <x-base.lucide
                                        icon="PersonStanding"
                                        @class([
                                            'w-5 h-5',
                                            'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                            'group-[.success]:text-success group-[.success]:fill-success/10',
                                        ])
                                    />
                                </div>
                                <div class="flex-start flex flex-col">
                                    <div class="text-slate-500">Customer Feedback</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">46,221</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            2%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                <div @class([
                                    'group flex items-center justify-center w-10 h-10 border rounded-full mr-5',
                                    '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                    '[&.success]:border-success/10 [&.success]:bg-success/10',
                                    ['primary', 'success'][mt_rand(0, 1)],
                                ])>
                                    <x-base.lucide
                                        icon="Banknote"
                                        @class([
                                            'w-5 h-5',
                                            'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                            'group-[.success]:text-success group-[.success]:fill-success/10',
                                        ])
                                    />
                                </div>
                                <div class="flex-start flex flex-col">
                                    <div class="text-slate-500">Coffee Orders</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">350</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                            4%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronDown"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-5 my-5 h-px border-t border-dashed border-slate-300/70"></div>
                        <div class="flex flex-col md:flex-row">
                            <div
                                class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                <div @class([
                                    'group flex items-center justify-center w-10 h-10 border rounded-full mr-5',
                                    '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                    '[&.success]:border-success/10 [&.success]:bg-success/10',
                                    ['primary', 'success'][mt_rand(0, 1)],
                                ])>
                                    <x-base.lucide
                                        icon="Coffee"
                                        @class([
                                            'w-5 h-5',
                                            'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                            'group-[.success]:text-success group-[.success]:fill-success/10',
                                        ])
                                    />
                                </div>
                                <div class="flex-start flex flex-col">
                                    <div class="text-slate-500">Total Supplier</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">1,523</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            11%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                <div @class([
                                    'group flex items-center justify-center w-10 h-10 border rounded-full mr-5',
                                    '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                    '[&.success]:border-success/10 [&.success]:bg-success/10',
                                    ['primary', 'success'][mt_rand(0, 1)],
                                ])>
                                    <x-base.lucide
                                        icon="CreditCard"
                                        @class([
                                            'w-5 h-5',
                                            'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                            'group-[.success]:text-success group-[.success]:fill-success/10',
                                        ])
                                    />
                                </div>
                                <div class="flex-start flex flex-col">
                                    <div class="text-slate-500">Expenses Analysis</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">261</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            2%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                <div @class([
                                    'group flex items-center justify-center w-10 h-10 border rounded-full mr-5',
                                    '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                    '[&.success]:border-success/10 [&.success]:bg-success/10',
                                    ['primary', 'success'][mt_rand(0, 1)],
                                ])>
                                    <x-base.lucide
                                        icon="PackageSearch"
                                        @class([
                                            'w-5 h-5',
                                            'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                            'group-[.success]:text-success group-[.success]:fill-success/10',
                                        ])
                                    />
                                </div>
                                <div class="flex-start flex flex-col">
                                    <div class="text-slate-500">Coffee Varieties</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">141</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                            4%
                                            <x-base.lucide
                                                class="ml-px h-4 w-4"
                                                icon="ChevronDown"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Revenue Analysis</div>
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
                    <div class="mb-1 mt-7">
                        <x-report-bar-chart-5 height="h-[220px]" />
                    </div>
                    <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60"></div>
                            Total Revenue
                        </div>
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-slate-500/60 bg-slate-500/60"></div>
                            Customer Visits
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Quick Links</div>
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
                <div class="box box--stacked mt-3.5">
                    <div class="overflow-auto xl:overflow-visible">
                        <x-base.table>
                            <x-base.table.thead>
                                <x-base.table.tr>
                                    <x-base.table.td
                                        class="border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                    >
                                        Date
                                    </x-base.table.td>
                                    <x-base.table.td
                                        class="w-56 border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                    >
                                        Menu Items Sold
                                    </x-base.table.td>
                                    <x-base.table.td
                                        class="truncate border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                    >
                                        Customer Feedback
                                    </x-base.table.td>
                                    <x-base.table.td
                                        class="w-32 truncate border-slate-200/80 bg-slate-50 py-5 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                    >
                                        Total Sales
                                    </x-base.table.td>
                                    <x-base.table.td
                                        class="w-32 border-slate-200/80 bg-slate-50 py-5 text-center font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                    >
                                        Action
                                    </x-base.table.td>
                                </x-base.table.tr>
                            </x-base.table.thead>
                            <x-base.table.tbody>
                                @foreach ($cafe->take(5) as $fakerKey => $faker)
                                    <x-base.table.tr class="[&_td]:last:border-b-0">
                                        <x-base.table.td
                                            class="rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600"
                                        >
                                            <a
                                                class="whitespace-nowrap"
                                                href=""
                                            >
                                                {{ $faker['date'] }}
                                            </a>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600"
                                        >
                                            <a
                                                class="flex items-center text-primary"
                                                href=""
                                            >
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[1.7]"
                                                    icon="ExternalLink"
                                                />
                                                <div class="ml-1.5 whitespace-nowrap">
                                                    {{ $faker['menuItemsSold'] }}
                                                </div>
                                            </a>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600"
                                        >
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <x-base.lucide
                                                        class="mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"
                                                        icon="Star"
                                                    />
                                                    <x-base.lucide
                                                        class="mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"
                                                        icon="Star"
                                                    />
                                                    <x-base.lucide
                                                        class="mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"
                                                        icon="Star"
                                                    />
                                                    <x-base.lucide
                                                        class="mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"
                                                        icon="Star"
                                                    />
                                                    <x-base.lucide
                                                        class="fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"
                                                        icon="Star"
                                                    />
                                                </div>
                                                <div class="ml-1 text-xs text-slate-500">
                                                    ({{ $faker['customerFeedback'] }})
                                                </div>
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600"
                                        >
                                            <a
                                                class="whitespace-nowrap font-medium"
                                                href=""
                                            >
                                                {{ $faker['totalSales'] }}
                                            </a>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600"
                                        >
                                            <div class="flex items-center justify-center">
                                                <x-base.menu class="h-5">
                                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                                        <x-base.lucide
                                                            class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70"
                                                            icon="MoreVertical"
                                                        />
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="mr-2 h-4 w-4"
                                                                icon="FileLineChart"
                                                            />
                                                            Sales Report
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="mr-2 h-4 w-4"
                                                                icon="FileCheck2"
                                                            />
                                                            Item Details
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
                </div>
                <div class="flex-reverse mt-8 flex flex-col-reverse flex-wrap items-center gap-y-2 sm:flex-row">
                    <x-base.pagination class="mr-auto w-full flex-1 sm:w-auto">
                        <x-base.pagination.link>
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronsLeft"
                            />
                        </x-base.pagination.link>
                        <x-base.pagination.link>
                            <x-base.lucide
                                class="h-4 w-4"
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
                                class="h-4 w-4"
                                icon="ChevronRight"
                            />
                        </x-base.pagination.link>
                        <x-base.pagination.link>
                            <x-base.lucide
                                class="h-4 w-4"
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
    </div>
@endsection
