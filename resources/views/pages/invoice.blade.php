@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Invoice
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        My Profile
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5 sm:p-14">
                        <div
                            class="flex flex-col gap-y-7 rounded-lg border border-primary/5 bg-primary/[0.03] px-8 py-12 sm:-mx-10 sm:-mt-10 sm:px-10 sm:py-16 md:flex-row">
                            <div class="flex flex-col justify-center">
                                <div
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] border border-primary/50">
                                    <div
                                        class="flex h-[45px] w-[45px] items-center justify-center rounded-lg bg-gradient-to-r from-theme-1/90 to-theme-2/90 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:-rotate-180">
                                        <div class="relative h-[23px] w-[23px] -rotate-45 [&_div]:bg-white">
                                            <div
                                                class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                            </div>
                                            <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                            <div
                                                class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3.5 text-lg font-medium text-slate-600/90">
                                    Tailwise Pty Ltd.
                                </div>
                            </div>
                            <div class="md:ml-auto md:text-right">
                                <div class="-mt-1 text-lg font-medium text-primary">
                                    # INVOICE
                                </div>
                                <div class="mt-1">
                                    {{ $transactions[0]['orderId'] }}
                                </div>
                                <div class="mt-7 flex flex-col gap-1">
                                    <div>{{ $users[0]['addressLine1'] }}</div>
                                    <div>{{ $users[0]['addressLine2'] }}</div>
                                    <div>{{ $users[0]['location'] }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-col px-8 pt-4 sm:flex-row sm:px-0">
                            <div>
                                <div class="text-slate-500">Bill to :</div>
                                <div class="mt-1.5 text-base font-medium text-primary">
                                    {{ $transactions[1]['user']['name'] }}
                                </div>
                                <div class="mt-1.5 flex flex-col gap-1">
                                    <div>{{ $users[1]['addressLine1'] }}</div>
                                    <div>{{ $users[1]['addressLine2'] }}</div>
                                    <div>{{ $users[1]['location'] }}</div>
                                </div>
                            </div>
                            <div class="mt-7 flex flex-col gap-4 sm:ml-auto sm:mt-0 sm:text-right">
                                <div>
                                    <div class="text-slate-500">Invoice date :</div>
                                    <div class="mt-1.5 font-medium text-slate-600">
                                        {{ $transactions[0]['orderDate'] }}
                                    </div>
                                </div>
                                <div>
                                    <div class="text-slate-500">Due date :</div>
                                    <div class="mt-1.5 font-medium text-slate-600">
                                        {{ $transactions[0]['orderDate'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 rounded-[0.6rem] border border-slate-200/80">
                            <div class="overflow-auto xl:overflow-visible">
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                            >
                                                Item
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                            >
                                                Quantity
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                            >
                                                Rate
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                            >
                                                Amount
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        @foreach ($transactions[0]['products']->take(5) as $fakerKey => $faker)
                                            <x-base.table.tr class="[&_td]:last:border-b-0">
                                                <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="image-fit zoom-in box mr-2.5 h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img
                                                                src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                        <div class="whitespace-nowrap">
                                                            {{ $faker['name'] }}
                                                        </div>
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        {{ mt_rand(1, 5) }}
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        ${{ formatCurrency(floor($faker['price'])) }}
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap font-medium">
                                                        ${{ formatCurrency(floor($faker['price'] * mt_rand(2, 3))) }}
                                                    </div>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        @endforeach
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </div>
                        <div class="my-10 ml-auto flex flex-col gap-3.5 pr-5 text-right">
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Subtotal:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    ${{ formatCurrency(floor(mt_rand(1300, 1600))) }}
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Total:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    ${{ formatCurrency(floor(mt_rand(1300, 1600))) }}
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Tax:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    ${{ formatCurrency(floor(mt_rand(20, 50))) }}
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Amount paid:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    ${{ formatCurrency(floor(mt_rand(1300, 1600))) }}
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Due balance:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    ${{ formatCurrency(floor(mt_rand(10, 30))) }}
                                </div>
                            </div>
                        </div>
                        <div class="-mx-8 border-t border-dashed border-slate-200/80 px-10 pt-6">
                            <div class="text-base font-medium">
                                Have questions about your invoice?
                            </div>
                            <div class="mt-1 text-slate-500">
                                Get in touch with us for assistance on any billing matters.
                            </div>
                            <div class="mt-5 text-slate-500">© 2046 Left4code.</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-4">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                            History
                        </div>
                        <div>
                            <div class="flex">
                                <div>
                                    <span class="text-lg font-medium">
                                        {{ formatCurrency(mt_rand(2000, 4000)) }}
                                    </span>
                                    <span>Invoices</span>
                                </div>
                            </div>
                            <div class="mt-3.5 flex h-2">
                                <div
                                    class="h-full w-[35%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                </div>
                                <div class="h-full w-[20%] border border-info/50 bg-info/50 first:rounded-l last:rounded-r">
                                </div>
                                <div
                                    class="h-full w-[45%] border border-success/50 bg-success/50 first:rounded-l last:rounded-r">
                                </div>
                            </div>
                            <x-base.tab.group class="mt-8">
                                <x-base.tab.list
                                    class="rounded-[0.6rem] border-slate-200 bg-white shadow-sm"
                                    variant="boxed-tabs"
                                >
                                    <x-base.tab
                                        class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                        id="example-1-tab"
                                        selected
                                    >
                                        <x-base.tab.button
                                            class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                            as="button"
                                        >
                                            <span
                                                class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60"></span>
                                            Pending ({{ mt_rand(100, 300) }})
                                        </x-base.tab.button>
                                    </x-base.tab>
                                    <x-base.tab
                                        class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                        id="example-2-tab"
                                    >
                                        <x-base.tab.button
                                            class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                            as="button"
                                        >
                                            <span
                                                class="mr-2 h-2 w-2 rounded-full border border-danger/60 bg-danger/60"></span>
                                            Canceled ({{ mt_rand(100, 300) }})
                                        </x-base.tab.button>
                                    </x-base.tab>
                                </x-base.tab.list>
                                <x-base.tab.panels class="mt-3">
                                    <x-base.tab.panel
                                        id="example-1"
                                        selected
                                    >
                                        <div class="rounded-[0.6rem] border border-dashed border-slate-300/80">
                                            @foreach ($transactions->take(5) as $fakerKey => $faker)
                                                <div
                                                    class="flex cursor-pointer items-center border-b border-dashed border-slate-300/80 px-5 py-4 last:border-0 last:border-b-0 hover:bg-slate-50">
                                                    <div>
                                                        <div class="max-w-[12rem] truncate font-medium text-primary">
                                                            {{ $faker['user']['name'] }}
                                                        </div>
                                                        <div class="mt-0.5 whitespace-nowrap text-slate-500">
                                                            {{ $faker['category']['name'] }}
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            {{ $faker['orderDate'] }}
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto whitespace-nowrap font-medium">
                                                        ${{ $faker['amount'] }} USD
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <x-base.button
                                            class="mt-3 w-full border-primary/[0.15] bg-white text-primary hover:bg-primary/20"
                                            variant="primary"
                                        >
                                            View all invoices
                                            <x-base.lucide
                                                class="ml-2 h-4 w-4 stroke-[1.3]"
                                                icon="ArrowRight"
                                            />
                                        </x-base.button>
                                    </x-base.tab.panel>
                                    <x-base.tab.panel id="example-2">
                                        <div class="rounded-[0.6rem] border border-dashed border-slate-300/80">
                                            @foreach ($transactions->take(5) as $fakerKey => $faker)
                                                <div
                                                    class="flex cursor-pointer items-center border-b border-dashed border-slate-300/80 px-5 py-4 last:border-0 last:border-b-0 hover:bg-slate-50">
                                                    <div>
                                                        <div class="max-w-[12rem] truncate font-medium text-primary">
                                                            {{ $faker['user']['name'] }}
                                                        </div>
                                                        <div class="mt-0.5 whitespace-nowrap text-slate-500">
                                                            {{ $faker['category']['name'] }}
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            {{ $faker['orderDate'] }}
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto whitespace-nowrap font-medium">
                                                        ${{ $faker['amount'] }} USD
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <x-base.button
                                            class="mt-3 w-full border-primary/[0.15] bg-white text-primary hover:bg-primary/20"
                                            variant="primary"
                                        >
                                            View all invoices
                                            <x-base.lucide
                                                class="ml-2 h-4 w-4 stroke-[1.3]"
                                                icon="ArrowRight"
                                            />
                                        </x-base.button>
                                    </x-base.tab.panel>
                                </x-base.tab.panels>
                            </x-base.tab.group>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
