@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Point of Sale
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="MailPlus"
                        />
                        Upload New Files
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="Cog"
                        /> File
                        Manager Settings
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">
                <div class="relative">
                    <div class="sticky top-[104px]">
                        <div
                            class="box box--stacked grid grid-cols-3 gap-3.5 px-3.5 py-4 before:z-[-1] before:content-[''] sm:w-[102px] sm:grid-cols-1">
                            <x-base.tippy
                                class="active relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Inbox"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="AppWindow"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        12+
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Starred"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="MailCheck"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Snoozed"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="KeyRound"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        3
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Important"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="PackageCheck"
                                />
                            </x-base.tippy>
                        </div>
                    </div>
                </div>
                <div class="grid w-full grid-cols-11 gap-5 2xl:grid-cols-10">
                    <div class="col-span-12 flex flex-col gap-7 lg:col-span-7">
                        <div class="box box--stacked flex flex-col p-4">
                            <div class="flex items-center rounded-[0.6rem] border border-dashed px-6 py-5">
                                <div>
                                    <a
                                        class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-300/70"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 stroke-[1.3]"
                                            icon="ArrowLeft"
                                        />
                                    </a>
                                </div>
                                <div class="ml-5 flex items-center sm:ml-7">
                                    <div class="image-fit mx-auto hidden h-[54px] w-[54px] flex-none sm:block">
                                        <img
                                            class="rounded-full"
                                            src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                    <div class="sm:ml-4">
                                        <div class="-mt-0.5 text-lg font-medium">
                                            {{ $products[0]['name'] }}
                                        </div>
                                        <div class="mt-0.5 leading-relaxed text-slate-500">
                                            Savor simplicity: explore, customize, and order!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box--stacked flex flex-col p-5">
                            <nav
                                class="-mt-0.5 flex flex-1"
                                aria-label="breadcrumb"
                            >
                                <ol class="flex items-center text-theme-1 dark:text-slate-300">
                                    <li class="">
                                        <a href="/">Main Menu</a>
                                    </li>
                                    <li
                                        class="relative ml-5 pl-0.5 before:absolute before:inset-y-0 before:my-auto before:-ml-[1.125rem] before:h-[14px] before:w-[14px] before:rotate-[-90deg] before:transform before:bg-chevron-black before:bg-[length:100%] before:content-[''] dark:before:bg-chevron-black">
                                        <a href="/">Foods</a>
                                    </li>
                                    <li
                                        class="relative ml-5 cursor-text pl-0.5 text-slate-600 before:absolute before:inset-y-0 before:my-auto before:-ml-[1.125rem] before:h-[14px] before:w-[14px] before:rotate-[-90deg] before:transform before:bg-chevron-black before:bg-[length:100%] before:content-[''] dark:text-slate-400 dark:before:bg-chevron-black">
                                        <a href="/">{{ $categories[0]['name'] }}</a>
                                    </li>
                                </ol>
                            </nav>
                            <div
                                class="mt-4 grid grid-cols-12 overflow-hidden rounded-[0.6rem] border border-dashed shadow-sm">
                                @foreach ($products->take(16) as $fakerKey => $faker)
                                    <div
                                        class="col-span-6 -mb-px flex flex-col border-b border-r border-dashed px-5 pb-5 pt-6 text-center sm:col-span-4 2xl:col-span-3 [&:nth-child(4n)]:border-r-0">
                                        <div class="image-fit mx-auto h-20 w-20">
                                            <img
                                                class="rounded-md"
                                                src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div class="mt-5 truncate text-[0.94rem] font-medium">
                                            {{ $faker['name'] }}
                                        </div>
                                        <div class="mt-1.5 text-slate-500">
                                            ${{ formatCurrency($faker['price']) }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="relative col-span-12 lg:col-span-4 2xl:col-span-3">
                        <div class="sticky top-[104px]">
                            <div class="box box--stacked flex flex-col p-5">
                                <div>
                                    <div class="text-lg font-medium">My Orders</div>
                                    <div class="mt-1 text-slate-500">4 Selected Items</div>
                                </div>
                                <div class="my-6 flex flex-col gap-3">
                                    @foreach ($products->take(4) as $fakerKey => $faker)
                                        <div
                                            class="relative flex items-center rounded-lg border border-dashed border-slate-300/70 p-4">
                                            <div class="image-fit h-14 w-14 flex-none">
                                                <img
                                                    class="rounded-md"
                                                    src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                >
                                            </div>
                                            <div class="ml-5">
                                                <div class="w-36 truncate text-[0.94rem] font-medium">
                                                    {{ $faker['name'] }}
                                                </div>
                                                <div class="mt-1.5 font-medium text-slate-500">
                                                    {{ mt_rand(1, 10) }} x ${{ formatCurrency($faker['price']) }}
                                                </div>
                                            </div>
                                            <a
                                                class="absolute inset-y-0 right-0 my-auto mr-5 h-5 w-5 text-slate-400"
                                                href=""
                                            >
                                                <x-base.lucide
                                                    class="h-5 w-5 stroke-[1.3]"
                                                    icon="PencilLine"
                                                />
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center">
                                        <div class="mr-auto text-slate-500">Subtotal:</div>
                                        <div class="font-medium text-slate-600">
                                            ${{ formatCurrency(mt_rand(21000, 35000)) }}
                                        </div>
                                    </div>
                                    <div class="mt-3.5 flex items-center">
                                        <div class="mr-auto text-slate-500">Tax:</div>
                                        <div class="font-medium text-slate-600">
                                            ${{ formatCurrency(mt_rand(200, 500)) }}
                                        </div>
                                    </div>
                                    <div class="mt-3 flex items-center border-t border-dashed pt-3">
                                        <div class="mr-auto font-medium">Total:</div>
                                        <div class="font-medium">
                                            ${{ formatCurrency(mt_rand(41000, 55000)) }}
                                        </div>
                                    </div>
                                </div>
                                <x-base.button
                                    class="mt-8 h-10"
                                    variant="primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Printer"
                                    />
                                    Print Bills
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
