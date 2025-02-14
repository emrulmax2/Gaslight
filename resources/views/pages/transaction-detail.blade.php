@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 lg:h-10 lg:flex-row lg:items-center">
                <div class="flex items-center text-lg font-medium group-[.mode--light]:text-white">
                    Orders
                    <x-base.lucide
                        class="mx-1 h-3.5 w-3.5 stroke-[1.3] sm:mx-2 sm:h-5 sm:w-5"
                        icon="ArrowRight"
                    />
                    <div class="text-sm sm:text-lg">
                        #{{ $transactions[0]['orderId'] }}
                    </div>
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row lg:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="ArrowLeft"
                        />
                        Prev Order
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="ArrowRight"
                        />
                        Next Order
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="Printer"
                        />
                        Print Order
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-10 gap-5">
                <div class="col-span-12 xl:col-span-3">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="flex flex-col gap-5">
                            <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                    <div class="-mt-px">Transaction Details</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Purchase Date:</div>
                                            {{ $transactions[0]['orderDate'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">
                                                Transaction Status:
                                            </div>
                                            <div
                                                class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success sm:mr-0">
                                                <span class="-mt-px">
                                                    {{ $transactions[0]['orderStatus']['name'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Payment Method:</div>
                                            Direct bank transfer
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
                                    <div class="-mt-px">Shipping Details</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Calendar"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">
                                                Total Price ({{ mt_rand(2, 20) }} items):
                                            </div>
                                            ${{ $transactions[0]['amount'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clock"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">
                                                Total Shipping Cost:
                                            </div>
                                            ${{ mt_rand(30, 100) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Map"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">
                                                Shipping Insurance:
                                            </div>
                                            ${{ mt_rand(100, 300) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Banknote"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Grand Total:</div>$
                                            {{ $transactions[0]['amount'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                    <div class="-mt-px">Buyer Details</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Name:</div>
                                            <a
                                                class="underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                href=""
                                            >
                                                {{ $transactions[0]['user']['name'] }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Calendar"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Phone Number:</div>
                                            {{ $transactions[0]['user']['phone'] }}
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
                                </div>
                            </div>
                            <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                    <div class="-mt-px">Shipping Information</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-5 p-5">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Clipboard"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Courier:</div>
                                            Left4code Express
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"
                                            icon="Calendar"
                                        />
                                        <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                            <div class="w-54 sm:mr-auto">Tracking Number:</div>
                                            {{ mt_rand(1000000, 5000000) }}
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-7 xl:col-span-7">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                            <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                <div class="-mt-px">Product Details</div>
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
                                                        Item
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                        Quantity
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                    class="border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r"
                                                >
                                                    <div
                                                        class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                        Rate
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
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            @foreach ($transactions[0]['products']->take(5) as $fakerKey => $faker)
                                                <x-base.table.tr
                                                    class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5"
                                                >
                                                    <x-base.table.td class="border-dashed py-3.5 dark:bg-darkmode-600">
                                                        <div class="flex items-center">
                                                            <div class="image-fit zoom-in h-11 w-11">
                                                                <x-base.tippy
                                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                    src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                                    alt="Tailwise - Admin Dashboard Template"
                                                                    as="img"
                                                                    content="{{ $faker['images'][0]['uploadDate'] }}"
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
                                                                    class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                    {{ ['Size', 'Gender', 'Color'][mt_rand(0, 2)] }}
                                                                    : {{ ['XL', 'Men', 'Red'][mt_rand(0, 2)] }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-right dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            {{ mt_rand(2, 5) }}
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-right dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            ${{ formatCurrency(floor($faker['price'] * 2)) }}
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed py-4 text-right dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap font-medium">
                                                            ${{ formatCurrency(floor($faker['price'] * 3)) }}
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            @endforeach
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                                <div class="mb-5 ml-auto mt-3 flex flex-col gap-3.5 pr-5 text-right">
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Subtotal:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-48">
                                            ${{ $transactions[0]['amount'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Total:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-48">
                                            ${{ $transactions[0]['amount'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Tax:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-48">
                                            ${{ mt_rand(30, 100) }}
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Amount paid:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-48">
                                            ${{ $transactions[0]['amount'] }}
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Due balance:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-48">
                                            ${{ mt_rand(30, 100) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                            <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                <div class="-mt-px">Tracking Info</div>
                            </div>
                            <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                <div
                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                    <div @class([
                                        'mb-3 last:mb-0 relative',
                                        "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                        "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                                    ])>
                                        <div @class([
                                            'px-4 py-3 ml-8',
                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                        ])>
                                            <a
                                                class="font-medium text-primary"
                                                href=""
                                            >
                                                Transaction Completed.
                                            </a>
                                            <div
                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                Funds will be forwarded to the seller.
                                            </div>
                                            <div class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                <div
                                                    class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-3">
                                                    <div
                                                        class="image-fit h-20 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                        <x-base.image-zoom
                                                            src="{{ Vite::asset($transactions[0]['products'][0]['images'][0]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                    <div
                                                        class="image-fit h-20 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                        <x-base.image-zoom
                                                            src="{{ Vite::asset($transactions[0]['products'][0]['images'][1]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                    <div
                                                        class="image-fit h-20 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                        <x-base.image-zoom
                                                            src="{{ Vite::asset($transactions[0]['products'][0]['images'][2]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs text-slate-500">
                                                25 Mar 2046, 10:28 AM
                                            </div>
                                        </div>
                                    </div>
                                    <div @class([
                                        'mb-3 last:mb-0 relative',
                                        "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                        "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                                    ])>
                                        <div @class([
                                            'px-4 py-3 ml-8',
                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                        ])>
                                            <a
                                                class="font-medium text-primary"
                                                href=""
                                            >
                                                The order has arrived.
                                            </a>
                                            <div
                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                Received by Calvin.
                                            </div>
                                            <div class="mt-1.5 text-xs text-slate-500">
                                                23 Mar 2023, 08:28 AM
                                            </div>
                                        </div>
                                    </div>
                                    <div @class([
                                        'mb-3 last:mb-0 relative',
                                        "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                        "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                                    ])>
                                        <div @class([
                                            'px-4 py-3 ml-8',
                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                        ])>
                                            <a
                                                class="font-medium text-primary"
                                                href=""
                                            >
                                                The order has been sent.
                                            </a>
                                            <div
                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                The order is being shipped by courier.
                                            </div>
                                            <div class="mt-1.5 text-xs text-slate-500">
                                                23 Mar 2023, 12:21 AM
                                            </div>
                                        </div>
                                    </div>
                                    <div @class([
                                        'mb-3 last:mb-0 relative',
                                        "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                        "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                                    ])>
                                        <div @class([
                                            'px-4 py-3 ml-8',
                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                        ])>
                                            <a
                                                class="font-medium text-primary"
                                                href=""
                                            >
                                                Payment Verified.
                                            </a>
                                            <div
                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                Payment has been received.
                                            </div>
                                            <div class="mt-1.5 text-xs text-slate-500">
                                                23 Mar 2023, 12:21 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
