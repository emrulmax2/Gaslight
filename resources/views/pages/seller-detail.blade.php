@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 lg:h-10 lg:flex-row lg:items-center">
                <div class="flex items-center text-lg font-medium group-[.mode--light]:text-white">
                    Sellers
                    <x-base.lucide
                        class="mx-1 h-3.5 w-3.5 stroke-[1.3] sm:mx-2 sm:h-5 sm:w-5"
                        icon="ArrowRight"
                    />
                    <div class="text-sm sm:text-lg">
                        {{ $users[0]['name'] }} - #{{ mt_rand(1000000000, 9000000000) }}
                    </div>
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row lg:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2.5 h-4 w-4 stroke-[1.3]"
                            icon="MailCheck"
                        />
                        Send Message
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2.5 h-4 w-4 stroke-[1.3]"
                            icon="XCircle"
                        />
                        Block User
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-10 gap-5">
                <div class="col-span-12 xl:col-span-3">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="flex flex-col gap-5">
                            <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                    <div class="-mt-px">User Details</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Name:</div>
                                            <a
                                                class="underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                href=""
                                            >
                                                {{ $users[0]['name'] }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Phone Number:</div>
                                            {{ $users[0]['phone'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Inbox"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Email:</div>
                                            <div class="w-52 truncate text-right">
                                                {{ $users[0]['email'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Map"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Location:</div>
                                            {{ $users[0]['location'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Address:</div>
                                            <a
                                                class="flex items-center underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                href=""
                                            >
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5"
                                                    icon="MapPin"
                                                />
                                                View Address
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-1.5">
                                        <x-base.button class="w-full border-primary/20 text-primary/80 hover:bg-slate-50">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="PenSquare"
                                            />
                                            Change Status
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                    <div class="-mt-px">Store Details</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Unique ID:</div>
                                            STR-{{ mt_rand(1000000000, 9000000000) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Calendar"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Name:</div>
                                            Themeforest
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Phone Number:</div>
                                            {{ $users[0]['phone'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Address:</div>
                                            <a
                                                class="flex items-center underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                href=""
                                            >
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5"
                                                    icon="MapPin"
                                                />
                                                View Address
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Status:</div>
                                            <div
                                                class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success sm:mr-0">
                                                <span class="-mt-px">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5">
                                        <x-base.button class="w-full border-primary/20 text-primary/80 hover:bg-slate-50">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="PenSquare"
                                            />
                                            Change Status
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                    <div class="-mt-px">Transaction Reports</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Daily Average:</div>$
                                            {{ formatCurrency(mt_rand(10000000, 90000000)) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Calendar"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Monthly Average:</div>$
                                            {{ formatCurrency(mt_rand(10000000, 90000000)) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Annually Average:</div>
                                            ${{ formatCurrency(mt_rand(10000000, 90000000)) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Rating Average:</div>(
                                            {{ mt_rand(3, 4) }}.{{ mt_rand(1, 5) }}+)
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Calendar"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Total Products:</div>
                                            {{ mt_rand(1000, 10000) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">
                                                Total Transactions:
                                            </div>
                                            {{ formatCurrency(mt_rand(10000000, 90000000)) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Active Disputes:</div>
                                            {{ mt_rand(20, 100) }}
                                        </div>
                                    </div>
                                    <div class="mt-1.5">
                                        <x-base.button class="w-full border-primary/20 text-primary/80 hover:bg-slate-50">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="PenSquare"
                                            />
                                            More Details
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-7 xl:col-span-7">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                            <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                <div class="-mt-px">Products</div>
                            </div>
                            <div class="mt-2.5 flex flex-col gap-5 p-5">
                                <div class="flex flex-col gap-y-2 sm:flex-row sm:items-center">
                                    <div>
                                        <div class="relative">
                                            <x-base.lucide
                                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"
                                                icon="Search"
                                            />
                                            <x-base.form-input
                                                class="rounded-[0.5rem] pl-9 shadow-none sm:w-64"
                                                type="text"
                                                placeholder="Search products..."
                                            />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                        <div class="relative">
                                            <x-base.lucide
                                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                                icon="PieChart"
                                            />
                                            <x-base.form-select class="rounded-[0.5rem] pl-9 shadow-none">
                                                <option value="custom-date">Active</option>
                                                <option value="daily">Inactive</option>
                                            </x-base.form-select>
                                        </div>
                                        <x-base.popover class="inline-block">
                                            <x-base.popover.button
                                                class="w-full sm:w-auto"
                                                as="x-base.button"
                                                variant="outline-secondary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="ArrowDownWideNarrow"
                                                />
                                                Filter
                                                <span
                                                    class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium"
                                                >
                                                    3
                                                </span>
                                            </x-base.popover.button>
                                            <x-base.popover.panel>
                                                <div class="p-2">
                                                    <div>
                                                        <div class="text-left text-slate-500">
                                                            Status
                                                        </div>
                                                        <x-base.form-select class="mt-2 flex-1">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </x-base.form-select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="text-left text-slate-500">
                                                            Stock
                                                        </div>
                                                        <x-base.form-select class="mt-2 flex-1">
                                                            <option value="1 - 50">1 - 50</option>
                                                            <option value="51 - 100">50 - 100</option>
                                                            <option value="> 100">&gt; 100</option>
                                                        </x-base.form-select>
                                                    </div>
                                                    <div class="mt-4 flex items-center">
                                                        <x-base.button
                                                            class="ml-auto w-32"
                                                            variant="secondary"
                                                        >
                                                            Close
                                                        </x-base.button>
                                                        <x-base.button
                                                            class="ml-2 w-32"
                                                            variant="primary"
                                                        >
                                                            Apply
                                                        </x-base.button>
                                                    </div>
                                                </div>
                                            </x-base.popover.panel>
                                        </x-base.popover>
                                    </div>
                                </div>
                                <div class="overflow-auto xl:overflow-visible">
                                    <x-base.table class="border-b border-dashed border-slate-200/80">
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 font-medium text-slate-500">
                                                        Item
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                        Price
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-center font-medium text-slate-500">
                                                        Status
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-center font-medium text-slate-500">
                                                        Action
                                                    </div>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            @foreach ($products->take(10) as $fakerKey => $faker)
                                                <x-base.table.tr class="[&_td]:first:pt-5 [&_td]:last:border-b-0">
                                                    <x-base.table.td class="border-dashed py-3.5 dark:bg-darkmode-600">
                                                        <div class="flex items-center">
                                                            <div class="image-fit zoom-in h-10 w-10">
                                                                <x-base.tippy
                                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                    src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                                    alt="Tailwise - Admin Dashboard Template"
                                                                    as="img"
                                                                    content="{{ 'Uploaded at' . $faker['images'][0]['uploadDate'] }}"
                                                                />
                                                            </div>
                                                            <div class="ml-5">
                                                                <a
                                                                    class="whitespace-nowrap font-medium"
                                                                    href=""
                                                                >
                                                                    {{ $faker['name'] }}
                                                                </a>
                                                                <div
                                                                    class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                    Tags: {{ implode(', ', $faker['category']['tags']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-right dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            ${{ formatCurrency(floor($faker['price'])) }}
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-right dark:bg-darkmode-600"
                                                    >
                                                        <div @class([
                                                            'flex items-center justify-center',
                                                            'text-success' => $faker['isActive'],
                                                            'text-danger' => !$faker['isActive'],
                                                        ])>
                                                            <x-base.lucide
                                                                class="h-3.5 w-3.5 stroke-[1.7]"
                                                                icon="Database"
                                                            />
                                                            <div class="ml-1.5 whitespace-nowrap">
                                                                {{ $faker['isActive'] ? 'Active' : 'Inactive' }}
                                                            </div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-center dark:bg-darkmode-600"
                                                    >
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
                                                                        icon="CheckSquare"
                                                                    />
                                                                    Edit
                                                                </x-base.menu.item>
                                                                <x-base.menu.item class="text-danger">
                                                                    <x-base.lucide
                                                                        class="mr-2 h-4 w-4"
                                                                        icon="Trash2"
                                                                    />
                                                                    Delete
                                                                </x-base.menu.item>
                                                            </x-base.menu.items>
                                                        </x-base.menu>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            @endforeach
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                                <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 sm:flex-row">
                                    <x-base.pagination class="mr-auto w-full flex-1 sm:w-auto [&_a]:shadow-none">
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
                                    <x-base.form-select class="rounded-[0.5rem] shadow-none sm:w-20">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                            <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                <div class="-mt-px">Latest Transactions</div>
                            </div>
                            <div class="mt-2.5 flex flex-col gap-5 p-5">
                                <div class="overflow-auto xl:overflow-visible">
                                    <x-base.table class="border-b border-dashed border-slate-200/80">
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 font-medium text-slate-500">
                                                        Reference
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 font-medium text-slate-500">
                                                        Status
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                        Amount
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-center font-medium text-slate-500">
                                                        Action
                                                    </div>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            @foreach ($transactions->take(5) as $fakerKey => $faker)
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                        <div class="whitespace-nowrap">
                                                            {{ $faker['orderId'] }}
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
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
                                                        class="border-dashed py-4 text-right dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            ${{ $faker['amount'] }}
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-center dark:bg-darkmode-600"
                                                    >
                                                        <a
                                                            class="flex items-center justify-center whitespace-nowrap text-primary"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="mr-1.5 h-4 w-4 stroke-[1.3]"
                                                                icon="Eye"
                                                            />
                                                            Quick View
                                                        </a>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            @endforeach
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                                <div class="mt-2">
                                    <x-base.button
                                        class="w-full border-primary/20 bg-white text-primary hover:bg-primary/20"
                                        variant="primary"
                                    >
                                        View all transactions
                                        <x-base.lucide
                                            class="ml-2 h-4 w-4 stroke-[1.3]"
                                            icon="ArrowRight"
                                        />
                                    </x-base.button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
