<div
    id="quick-search"
    aria-hidden="true"
    tabindex="-1"
    @class([
        'modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60]',
        '[&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0',
        '[&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]',
    ])
>
    <div
        class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex w-12 items-center justify-center">
                <x-base.lucide
                    class="-mr-1.5 h-5 w-5 stroke-[1] text-slate-500"
                    icon="Search"
                />
            </div>
            <x-base.form-input
                class="rounded-lg border-0 py-3.5 pl-12 pr-14 text-base shadow-lg focus:ring-0"
                type="text"
                placeholder="Quick search..."
            />
            <div class="absolute inset-y-0 right-0 flex w-14 items-center">
                <div class="mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                    ESC
                </div>
            </div>
        </div>
        <div
            class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
            <div
                class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                <x-base.lucide
                    class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"
                    icon="SearchX"
                />
                <div class="mt-5 text-xl font-medium">
                    No result found
                </div>
                <div class="mt-3 w-2/3 text-center leading-relaxed text-slate-500">
                    No results found for
                    <span class="global-search__keyword font-medium italic"></span>
                    . Please try a different search term or check your
                    spelling.
                </div>
            </div>
            <div class="hidden group-[.global-search--show-result]:block">
                <div class="px-5 py-4">
                    <div class="flex items-center">
                        <div class="text-xs uppercase text-slate-500">
                            Start your search here...
                        </div>
                    </div>
                    <div class="mt-3.5 flex flex-wrap gap-2">
                        <a
                            class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 stroke-[1.3]"
                                icon="Users2"
                            />
                            Users
                        </a>
                        <a
                            class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 stroke-[1.3]"
                                icon="Building2"
                            />
                            Departments
                        </a>
                        <a
                            class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 stroke-[1.3]"
                                icon="KanbanSquare"
                            />
                            Products
                        </a>
                        <a
                            class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 stroke-[1.3]"
                                icon="MailCheck"
                            />
                            Mails
                        </a>
                        <x-base.menu>
                            <x-base.menu.button
                                class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                as="a"
                            >
                                More
                                <x-base.lucide
                                    class="-ml-0.5 h-4 w-4 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Map"
                                    />
                                    Locations
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="FileCheck"
                                    />
                                    Projects
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Printer"
                                    />
                                    Devices
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                    </div>
                </div>
                <div class="border-t border-dashed px-5 py-4">
                    <div class="flex items-center">
                        <div class="text-xs uppercase text-slate-500">
                            Users
                        </div>
                        <a
                            class="ml-auto text-xs text-slate-500"
                            href=""
                        >
                            See All
                        </a>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-1">
                        @foreach ($users->take(3) as $fakerKey => $faker)
                            <a
                                class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                href=""
                            >
                                <div
                                    class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($faker['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="truncate font-medium">
                                    {{ $faker['name'] }}
                                </div>
                                <div class="hidden text-slate-500 sm:block">
                                    {{ $faker['location'] }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="border-t border-dashed px-5 py-4">
                    <div class="flex items-center">
                        <div class="text-xs uppercase text-slate-500">
                            Departments
                        </div>
                        <a
                            class="ml-auto text-xs text-slate-500"
                            href=""
                        >
                            See All
                        </a>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-1">
                        @foreach ($departments->take(3) as $fakerKey => $faker)
                            <a
                                class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                href=""
                            >
                                <div
                                    class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                    @if (mt_rand(0, 1))
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"
                                            icon="Store"
                                        />
                                    @else
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"
                                            icon="Hotel"
                                        />
                                    @endif
                                </div>
                                <div class="truncate font-medium">
                                    {{ $faker['name'] }}
                                </div>
                                <div class="hidden text-slate-500 sm:block">
                                    {{ $faker['location']['name'] }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="border-t border-dashed px-5 py-4">
                    <div class="flex items-center">
                        <div class="text-xs uppercase text-slate-500">
                            Products
                        </div>
                        <a
                            class="ml-auto text-xs text-slate-500"
                            href=""
                        >
                            See All
                        </a>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-1">
                        @foreach ($products->take(3) as $fakerKey => $faker)
                            <a
                                class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                href=""
                            >
                                <div
                                    class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="truncate font-medium">
                                    {{ $faker['name'] }}
                                </div>
                                <div class="hidden text-slate-500 sm:block">
                                    {{ $faker['category']['name'] }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@pushOnce('vendors')
    @vite('resources/js/vendors/modal.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/quick-search.js')
@endPushOnce
