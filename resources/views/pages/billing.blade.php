@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 flex flex-col gap-y-10 sm:col-span-10 sm:col-start-2">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Billing
                    </div>
                    <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                        <x-base.button
                            class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="File"
                            />
                            Download Excel
                        </x-base.button>
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div
                        class="flex flex-col gap-y-8 rounded-lg border border-dashed bg-slate-50/60 p-5 lg:flex-row lg:items-center">
                        <div class="relative flex flex-col gap-5 lg:gap-8">
                            <div>
                                <div class="text-xs uppercase text-slate-500">
                                    Annual billing for your plan:
                                </div>
                                <div class="mt-1.5 text-lg font-medium">
                                    Silver Plus Membership
                                </div>
                            </div>
                            <div>
                                <div class="text-xs uppercase text-slate-500">
                                    Total per year
                                </div>
                                <div class="mt-1.5 text-lg font-medium text-primary">
                                    $74,264.01 USD
                                </div>
                            </div>
                        </div>
                        <div class="lg:ml-auto">
                            <div class="flex flex-col gap-3 md:flex-row">
                                <x-base.button
                                    class="border-slate-300/80 bg-slate-100/70 px-4"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="ShieldX"
                                    />
                                    Cancel Subscription
                                </x-base.button>
                                <x-base.button
                                    class="border-primary/50 bg-primary/5 px-4"
                                    variant="outline-primary"
                                >
                                    <x-base.lucide
                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="AppWindow"
                                    />
                                    Update Plan
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex">
                        <div class="font-medium">Storage usage</div>
                        <div class="ml-auto">
                            <span class="font-medium">4.27 GB</span>
                            <span class="text-slate-500">used of 6 GB</span>
                        </div>
                    </div>
                    <div class="mt-3.5 flex h-2">
                        <div class="h-full w-[60%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                        </div>
                        <div class="h-full w-[40%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                        </div>
                    </div>
                    <div class="mt-3.5 flex flex-wrap items-center gap-x-5 gap-y-2">
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-primary/70"></div>
                            <div class="ml-2.5">Frontend Engineer</div>
                        </div>
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-slate-400"></div>
                            <div class="ml-2.5">Backend Engineer</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">My Address</div>
                    <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                        <x-base.button variant="primary">
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="MapPin"
                            />
                            Add New Address
                        </x-base.button>
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="rounded-[0.6rem] border border-dashed border-slate-300/80">
                        @foreach ($users->take(3) as $fakerKey => $faker)
                            <div
                                class="flex items-center border-b border-dashed border-slate-300/80 px-5 pb-4 pt-3 last:border-0 hover:bg-slate-50">
                                <x-base.form-check.input
                                    name="address"
                                    type="radio"
                                    value="billing-1"
                                    checked
                                />
                                <div class="ml-5 flex w-full flex-col gap-y-3 sm:flex-row sm:items-center">
                                    <div class="w-full cursor-pointer">
                                        <div class="text-base font-medium">
                                            Billing address #{{ $fakerKey + 1 }}
                                        </div>
                                        <div class="mt-1 flex flex-col gap-1 text-slate-500">
                                            <div class="">{{ $faker['addressLine1'] }}</div>
                                            <div class="">{{ $faker['addressLine2'] }}</div>
                                            <div class="">{{ $faker['location'] }}</div>
                                        </div>
                                    </div>
                                    <x-base.button
                                        class="whitespace-nowrap pl-3.5 pr-4 sm:ml-auto"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                            icon="PenSquare"
                                        />
                                        Edit Address
                                    </x-base.button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div
                        class="mt-5 flex flex-col gap-y-3 rounded-lg border border-slate-200/80 bg-slate-50/80 px-5 py-3.5 lg:flex-row lg:items-center">
                        <div>
                            <div class="text-base font-medium">Tax location</div>
                            <div class="mt-0.5 whitespace-nowrap text-slate-500">
                                UK - 20.00% SST
                            </div>
                            <a
                                class="mt-1 block text-primary"
                                href=""
                            >
                                More info
                            </a>
                        </div>
                        <div class="lg:ml-auto lg:text-right">
                            <div class="mt-0.5 leading-relaxed text-slate-500">
                                Your text location determines the taxes that are applied to
                                your bill.
                            </div>
                            <a
                                class="mt-0.5 block text-primary"
                                href=""
                            >
                                How do I correct my tax location?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Payment Method</div>
                    <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                        <x-base.button variant="primary">
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="AppWindow"
                            />
                            Add New Card
                        </x-base.button>
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="leading-relaxed text-slate-500">
                        Payments will be processed either at the conclusion of the month
                        or upon exceeding the designated usage threshold. We accept all
                        major credit and debit cards.
                    </div>
                    <div class="mt-5 rounded-[0.6rem] border border-dashed border-slate-300/80">
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-5 pb-4 pt-3 last:border-0 hover:bg-slate-50">
                            <x-base.form-check.input
                                name="credit-card"
                                type="radio"
                                value="credit-card-1"
                                checked
                            />
                            <div class="ml-5 flex w-full flex-col sm:flex-row sm:items-center">
                                <svg
                                    class="h-14 w-14"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="400"
                                    height="130"
                                    viewBox="0 0 400 130"
                                    fill="none"
                                >
                                    <g>
                                        <path
                                            d="M173.4 127.6H140.8L161.2 2.2H193.8L173.4 127.6ZM113.4 2.2L82.2 88.4L78.6 69.8L67.6 13.6C67.6 13.6 66.2 2.4 52.2 2.4H0.6L0 4.4C0 4.4 15.8 7.6 34.2 18.8L62.6 127.8H96.6L148.6 2.4L113.4 2.2ZM370 127.6H400L373.8 2.2H347.6C335.4 2.2 332.6 11.6 332.6 11.6L284 127.6H318L324.8 109H366.2L370 127.6ZM334.2 83.2L351.4 36.2L361 83.2H334.2ZM286.4 32.4L291 5.4C291 5.4 276.6 0 261.6 0C245.4 0 207 7 207 41.6C207 74 252.2 74.4 252.2 91.4C252.2 108.4 211.8 105.4 198.4 94.6L193.6 122.8C193.6 122.8 208.2 129.8 230.4 129.8C252.6 129.8 286.2 118.2 286.2 86.8C286.2 54.2 240.6 51.2 240.6 37C240.6 22.8 272.4 24.6 286.4 32.4Z"
                                            fill="#2566AF"
                                        />
                                        <path
                                            d="M78.6 70L67.6 13.6C67.6 13.6 66.2 2.39999 52.2 2.39999H0.6L0 4.39999C0 4.39999 24.8 9.59999 48.4 28.8C71.2 47 78.6 70 78.6 70Z"
                                            fill="#E6A540"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect
                                                width="400"
                                                height="129.8"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="flex w-full flex-col gap-y-3 sm:ml-5 md:flex-row md:items-center">
                                    <div class="w-full cursor-pointer">
                                        <div
                                            class="flex flex-col gap-y-2 text-base font-medium sm:flex-row sm:items-center">
                                            {{ $users[0]['name'] }}
                                            <div
                                                class="mr-auto flex items-center rounded-md border border-primary/10 bg-primary/10 px-1.5 py-px text-xs font-medium text-primary sm:ml-2.5 sm:mr-0">
                                                <span class="-mt-px">Primary</span>
                                            </div>
                                        </div>
                                        <div class="mt-1.5 flex flex-col gap-1">
                                            <div class="">MasterCard •••• 4242</div>
                                            <div class="text-slate-500">
                                                Checking - Expires 12/22
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-3 sm:flex-row md:ml-auto">
                                        <x-base.button
                                            class="whitespace-nowrap pl-3.5 pr-4"
                                            variant="outline-secondary"
                                        >
                                            <x-base.lucide
                                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                icon="PenSquare"
                                            />
                                            Edit
                                        </x-base.button>
                                        <x-base.button
                                            class="whitespace-nowrap pl-3.5 pr-4"
                                            variant="outline-secondary"
                                        >
                                            <x-base.lucide
                                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-5 pb-4 pt-3 last:border-0 hover:bg-slate-50">
                            <x-base.form-check.input
                                id="checkbox-switch-4"
                                name="credit-card"
                                type="radio"
                                value="credit-card-2"
                            />
                            <div class="ml-5 flex w-full flex-col sm:flex-row sm:items-center">
                                <svg
                                    class="h-14 w-14"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="400"
                                    height="248"
                                    viewBox="0 0 400 248"
                                    fill="none"
                                >
                                    <g>
                                        <path
                                            d="M254 220.8H146V26.4H254V220.8Z"
                                            fill="#FF5F00"
                                        />
                                        <path
                                            d="M152.8 123.6C152.8 84.2 171.2 49 200 26.4C178.2 9.2 151.4 0 123.6 0C55.4 0 0 55.4 0 123.6C0 191.8 55.4 247.2 123.6 247.2C151.4 247.2 178.2 238 200 220.8C171.2 198.2 152.8 163 152.8 123.6Z"
                                            fill="#EB001B"
                                        />
                                        <path
                                            d="M400 123.6C400 191.8 344.6 247.2 276.4 247.2C248.6 247.2 221.8 238 200 220.8C228.8 198.2 247.2 163 247.2 123.6C247.2 84.2 228.8 49 200 26.4C221.8 9.2 248.6 0 276.4 0C344.6 0 400 55.4 400 123.6Z"
                                            fill="#F79E1B"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect
                                                width="400"
                                                height="247.2"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="flex w-full flex-col gap-y-3 sm:ml-5 md:flex-row md:items-center">
                                    <div class="w-full cursor-pointer">
                                        <div
                                            class="flex flex-col gap-y-2 text-base font-medium sm:flex-row sm:items-center">
                                            {{ $users[0]['name'] }}
                                            <div
                                                class="mr-auto flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs font-medium text-danger sm:ml-2.5 sm:mr-0">
                                                <span class="-mt-px">Expired</span>
                                            </div>
                                        </div>
                                        <div class="mt-1.5 flex flex-col gap-1">
                                            <div class="">Visa •••• 9016</div>
                                            <div class="text-slate-500">
                                                Debit - Expires 04/20
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-3 sm:flex-row md:ml-auto">
                                        <x-base.button
                                            class="whitespace-nowrap pl-3.5 pr-4"
                                            variant="outline-secondary"
                                        >
                                            <x-base.lucide
                                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                icon="PenSquare"
                                            />
                                            Edit
                                        </x-base.button>
                                        <x-base.button
                                            class="whitespace-nowrap pl-3.5 pr-4"
                                            variant="outline-secondary"
                                        >
                                            <x-base.lucide
                                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Transaction History</div>
                </div>
                <div class="box box--stacked mt-3.5">
                    <div class="border-b border-dashed border-slate-200/80">
                        <div class="overflow-auto xl:overflow-visible">
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.td
                                            class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                        >
                                            Transaction ID
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                        >
                                            Status
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                        >
                                            Amount
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                        >
                                            Date
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-slate-200/80 bg-slate-50 py-4 text-center font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                        >
                                            Invoice
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-slate-200/80 bg-slate-50 py-4 text-center font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]"
                                        >
                                            Action
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    @foreach ($transactions->take(3) as $fakerKey => $faker)
                                        <x-base.table.tr class="[&_td]:last:border-b-0">
                                            <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                <a
                                                    class="flex items-center text-primary"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="h-3.5 w-3.5 stroke-[1.7]"
                                                        icon="ExternalLink"
                                                    />
                                                    <div
                                                        class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                        {{ $faker['orderId'] }}
                                                    </div>
                                                </a>
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
                                            <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ${{ $faker['amount'] }}
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{ $faker['orderDate'] }}
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td class="border-dashed py-4 text-center dark:bg-darkmode-600">
                                                <x-base.button
                                                    class="whitespace-nowrap pl-3.5 pr-4"
                                                    variant="outline-secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                        icon="File"
                                                    />
                                                    Download PDF
                                                </x-base.button>
                                            </x-base.table.td>
                                            <x-base.table.td class="border-dashed py-4 text-center dark:bg-darkmode-600">
                                                <x-base.button
                                                    class="whitespace-nowrap pl-3.5 pr-4"
                                                    variant="outline-secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                        icon="Eye"
                                                    />
                                                    Quick View
                                                </x-base.button>
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    @endforeach
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </div>
                    <div class="flex w-full justify-end p-5">
                        <x-base.button
                            class="w-full border-primary/30 bg-white px-6 text-primary hover:bg-primary/20 sm:w-auto"
                            variant="outline-primary"
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
@endsection
