@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 2xl:col-span-3">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 lg:col-span-4 2xl:col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Current Balance
                        </div>
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
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                            <x-base.lucide
                                class="h-6 w-6 fill-info/10 text-info"
                                icon="Box"
                            />
                        </div>
                        <div class="mb-6 mt-8 lg:mb-7 lg:mt-16 2xl:mb-5 2xl:mt-7">
                            <div class="text-base text-slate-500">Available</div>
                            <div class="mt-1 flex items-center text-2xl font-medium">
                                <span class="text-[1.3rem]">$</span>
                                <span class="ml-px mr-1.5">435,220,00</span>
                                <span class="mt-0.5 text-base">USD</span>
                            </div>
                        </div>
                        <a
                            class="flex items-center font-medium text-primary"
                            href=""
                        >
                            Setup auto transfers
                            <x-base.lucide
                                class="ml-1.5 h-4 w-4"
                                icon="MoveRight"
                            />
                        </a>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div
                            class="text-base font-medium lg:group-[.mode--light]:text-white 2xl:group-[.mode--light]:text-current">
                            Money In
                        </div>
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
                        <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                            <div class="text-base text-slate-500">Total received</div>
                            <div class="mt-1 flex items-center">
                                <div class="flex items-center text-xl font-medium">
                                    <span class="mr-px">$</span>2,176,221
                                    <span class="ml-1.5 text-sm">USD</span>
                                </div>
                            </div>
                        </div>
                        <x-report-bar-chart-3
                            class="relative z-10 -ml-1"
                            height="h-[80px]"
                        />
                        <a
                            class="mt-6 flex items-center font-medium text-primary"
                            href=""
                        >
                            Request Money
                            <x-base.lucide
                                class="ml-1.5 h-4 w-4"
                                icon="MoveRight"
                            />
                        </a>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div
                            class="text-base font-medium lg:group-[.mode--light]:text-white 2xl:group-[.mode--light]:text-current">
                            Money Out
                        </div>
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
                        <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                            <div class="text-base text-slate-500">
                                Total sent or spent
                            </div>
                            <div class="mt-1 flex items-center">
                                <div class="flex items-center text-xl font-medium">
                                    <span class="mr-px">$</span>4,176,132
                                    <span class="ml-1.5 text-sm">USD</span>
                                </div>
                            </div>
                        </div>
                        <x-report-bar-chart-4
                            class="relative z-10 -ml-1"
                            height="h-[80px]"
                        />
                        <a
                            class="mt-6 flex items-center font-medium text-primary"
                            href=""
                        >
                            Send Money
                            <x-base.lucide
                                class="ml-1.5 h-4 w-4"
                                icon="MoveRight"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-9">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                        Quick Links
                    </div>
                </div>
                <div class="box box--stacked mt-3.5">
                    <div class="grid grid-cols-2 gap-y-5 border-b px-5 py-10 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7">
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-primary/10 text-primary"
                                    icon="CreditCard"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Business Tools</div>
                        </a>
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-info/10 text-info"
                                    icon="WalletCards"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Invoicing</div>
                        </a>
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-info/10 text-info"
                                    icon="Airplay"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Request Money</div>
                        </a>
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-success/10 bg-success/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-success/10 text-success"
                                    icon="Banknote"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Send Money</div>
                        </a>
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-pending/10 bg-pending/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-pending/10 text-pending"
                                    icon="Users"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Share Profile</div>
                        </a>
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-primary/10 text-primary"
                                    icon="ShoppingBag"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Checkout</div>
                        </a>
                        <a
                            class="flex flex-col items-center"
                            href=""
                        >
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full border border-warning/10 bg-warning/10">
                                <x-base.lucide
                                    class="h-6 w-6 fill-warning/10 text-warning"
                                    icon="CircleDollarSign"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">Accept Payments</div>
                        </a>
                    </div>
                    <div class="flex flex-col items-center gap-5 rounded-b-lg bg-slate-50 px-6 pb-6 pt-5 md:flex-row">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                            <x-base.lucide
                                class="h-6 w-6 fill-info/10 text-info"
                                icon="Box"
                            />
                        </div>
                        <div class="text-center md:text-left">
                            <div class="mt-1 text-lg font-medium">Invoicing</div>
                            <div class="mt-1 leading-relaxed text-slate-600">
                                Send an invoice or estimate in minutes. Customers can pay with
                                cards or Tailwise.
                            </div>
                        </div>
                        <div class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row md:ml-auto">
                            <x-base.button
                                class="w-full sm:w-36"
                                href=""
                                as="a"
                                rounded
                            >
                                Not Now
                            </x-base.button>
                            <x-base.button
                                class="w-full border-primary/50 sm:w-36"
                                href=""
                                as="a"
                                variant="outline-primary"
                                rounded
                            >
                                Learn More
                            </x-base.button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2">
                <div class="flex flex-col gap-y-10">
                    <div>
                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium">Send Payments</div>
                        </div>
                        <div class="box box--stacked mt-3.5 p-5">
                            <x-base.form-input
                                class="py-3"
                                type="text"
                                placeholder="Add an email or name"
                            />
                            <x-base.button
                                class="mt-6 border-primary/50 px-10"
                                variant="outline-primary"
                                rounded
                            >
                                Next
                            </x-base.button>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium">Request Money</div>
                        </div>
                        <div class="box box--stacked mt-3.5 p-5">
                            <div class="flex">
                                <div class="flex items-center text-2xl">
                                    <span class="-mt-1 mr-1.5 text-base font-medium">
                                        $
                                    </span>
                                    <span
                                        class="outline-none"
                                        contenteditable="true"
                                    >
                                        0,00
                                    </span>
                                    <div class="relative ml-2 flex items-center text-primary">
                                        <x-base.form-select
                                            class="border-0 bg-none p-0 pr-4 text-sm shadow-none focus:ring-0"
                                        >
                                            <option value="USD">USD</option>
                                            <option value="AUD">AUD</option>
                                            <option value="BRL">BRL</option>
                                            <option value="CAD">CAD</option>
                                            <option value="CHF">CHF</option>
                                            <option value="CZK">CZK</option>
                                            <option value="DKK">DKK</option>
                                            <option value="EUR">EUR</option>
                                            <option value="GBP">GBP</option>
                                            <option value="HKD">HKD</option>
                                            <option value="HUF">HUF</option>
                                            <option value="ILS">ILS</option>
                                            <option value="JPY">JPY</option>
                                            <option value="MXN">MXN</option>
                                            <option value="NOK">NOK</option>
                                            <option value="NZD">NZD</option>
                                            <option value="PHP">PHP</option>
                                            <option value="PLN">PLN</option>
                                            <option value="RUB">RUB</option>
                                            <option value="SEK">SEK</option>
                                            <option value="SGD">SGD</option>
                                            <option value="THB">THB</option>
                                            <option value="TWD">TWD</option>
                                        </x-base.form-select>
                                        <x-base.lucide
                                            class="absolute inset-y-0 right-0 my-auto ml-1 h-4 w-4 stroke-[1.3]"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                </div>
                            </div>
                            <x-base.form-input
                                class="mt-5 py-3"
                                type="text"
                                placeholder="Add an email or name"
                            />
                            <x-base.button
                                class="mt-6 border-primary/50 px-10"
                                variant="outline-primary"
                                rounded
                            >
                                Next
                            </x-base.button>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium">Issue a Refund</div>
                        </div>
                        <div class="box box--stacked mt-3.5 p-5">
                            <div class="relative">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 my-auto ml-3 h-6 w-6 text-slate-400"
                                    icon="Search"
                                />
                                <x-base.form-input
                                    class="py-3 pl-11"
                                    type="text"
                                    placeholder="Transaction id, invoice id or email"
                                />
                            </div>
                            <div class="mt-3 text-slate-500">
                                Find any payment that’s refundable and not related to any open
                                cases. Enter the refund amount and send.
                            </div>
                            <div class="mt-5 text-slate-500">
                                <a
                                    class="font-medium text-primary"
                                    href=""
                                >
                                    Learn more
                                </a>
                                about refunds
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-y-10">
                    <div>
                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium">
                                Create a Subscription
                            </div>
                        </div>
                        <div class="box box--stacked mt-3.5 p-5">
                            <x-base.form-input
                                class="py-3"
                                type="text"
                                placeholder="Enter product name"
                            />
                            <x-base.form-input
                                class="mt-3 py-3"
                                type="text"
                                placeholder="Enter plan name"
                            />
                            <div class="mt-3 flex gap-3">
                                <x-base.form-select class="py-3">
                                    <option value="USD">USD</option>
                                    <option value="AUD">AUD</option>
                                    <option value="BRL">BRL</option>
                                    <option value="CAD">CAD</option>
                                    <option value="CHF">CHF</option>
                                    <option value="CZK">CZK</option>
                                    <option value="DKK">DKK</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                    <option value="HKD">HKD</option>
                                    <option value="HUF">HUF</option>
                                    <option value="ILS">ILS</option>
                                    <option value="JPY">JPY</option>
                                    <option value="MXN">MXN</option>
                                    <option value="NOK">NOK</option>
                                    <option value="NZD">NZD</option>
                                    <option value="PHP">PHP</option>
                                    <option value="PLN">PLN</option>
                                    <option value="RUB">RUB</option>
                                    <option value="SEK">SEK</option>
                                    <option value="SGD">SGD</option>
                                    <option value="THB">THB</option>
                                    <option value="TWD">TWD</option>
                                </x-base.form-select>
                                <x-base.form-input
                                    class="py-3"
                                    type="text"
                                    placeholder="0,00"
                                />
                                <x-base.form-select class="py-3">
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="daily">Daily</option>
                                </x-base.form-select>
                            </div>
                            <div class="mt-6 flex gap-3">
                                <x-base.button
                                    class="border-primary/50 px-7"
                                    rounded
                                    variant="primary"
                                >
                                    Create Now
                                </x-base.button>
                                <x-base.button
                                    class="border-primary/50 px-7"
                                    rounded
                                    variant="outline-primary"
                                >
                                    More Options
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium">Create an Invoice</div>
                        </div>
                        <div class="box box--stacked mt-3.5 p-5">
                            <x-base.form-input
                                class="py-3"
                                type="text"
                                placeholder="Customers email's"
                            />
                            <x-base.form-input
                                class="mt-3 py-3"
                                type="text"
                                placeholder="Item name"
                            />
                            <div class="mt-3 flex gap-3">
                                <x-base.form-input
                                    class="py-3"
                                    type="text"
                                    placeholder="Item amount"
                                />
                                <x-base.form-select class="py-3">
                                    <option value="USD">USD</option>
                                    <option value="AUD">AUD</option>
                                    <option value="BRL">BRL</option>
                                    <option value="CAD">CAD</option>
                                    <option value="CHF">CHF</option>
                                    <option value="CZK">CZK</option>
                                    <option value="DKK">DKK</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                    <option value="HKD">HKD</option>
                                    <option value="HUF">HUF</option>
                                    <option value="ILS">ILS</option>
                                    <option value="JPY">JPY</option>
                                    <option value="MXN">MXN</option>
                                    <option value="NOK">NOK</option>
                                    <option value="NZD">NZD</option>
                                    <option value="PHP">PHP</option>
                                    <option value="PLN">PLN</option>
                                    <option value="RUB">RUB</option>
                                    <option value="SEK">SEK</option>
                                    <option value="SGD">SGD</option>
                                    <option value="THB">THB</option>
                                    <option value="TWD">TWD</option>
                                </x-base.form-select>
                            </div>
                            <div class="mt-6 flex gap-3">
                                <x-base.button
                                    class="border-primary/50 px-7"
                                    rounded
                                    variant="primary"
                                >
                                    Send
                                </x-base.button>
                                <x-base.button
                                    class="ml-2.5 border-transparent px-0 text-primary shadow-none"
                                    href=""
                                    as="a"
                                    rounded
                                >
                                    Add more details
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
