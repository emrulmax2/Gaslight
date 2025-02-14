@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Products
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="PenLine"
                        />
                        Add New Product
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5">
                <div class="box box--stacked flex flex-col">
                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                        <div>
                            <div class="relative">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"
                                    icon="Search"
                                />
                                <x-base.form-input
                                    class="rounded-[0.5rem] pl-9 sm:w-64"
                                    type="text"
                                    placeholder="Search products..."
                                />
                            </div>
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                            <x-base.menu>
                                <x-base.menu.button
                                    class="w-full sm:w-auto"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Download"
                                    />
                                    Export
                                    <x-base.lucide
                                        class="ml-2 h-4 w-4 stroke-[1.3]"
                                        icon="ChevronDown"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileBarChart"
                                        />
                                        PDF
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileBarChart"
                                        />
                                        CSV
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
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
                    <div class="overflow-hidden">
                        <div class="-mx-5 grid grid-cols-12 border-y border-dashed px-5">
                            @foreach ($products->take(8) as $fakerKey => $faker)
                                <div
                                    class="col-span-12 flex flex-col border-b border-r border-dashed border-slate-300/80 px-5 py-5 sm:col-span-6 xl:col-span-3 [&:nth-child(4n)]:border-r-0 [&:nth-last-child(-n+4)]:border-b-0">
                                    <div
                                        class="image-fit h-52 overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-slate-900/90 before:to-black/20">
                                        <img
                                            class="rounded-md"
                                            src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                        @if ($faker['isActive'])
                                            <span
                                                class="absolute top-0 z-10 m-5 rounded-lg border border-white/20 bg-success/80 px-2.5 py-1 text-xs font-medium text-white"
                                            >
                                                Active
                                            </span>
                                        @else
                                            <span
                                                class="absolute top-0 z-10 m-5 rounded-lg border border-white/20 bg-pending/80 px-2.5 py-1 text-xs font-medium text-white"
                                            >
                                                Inactive
                                            </span>
                                        @endif
                                        <div class="absolute bottom-0 z-10 w-full px-5 pb-6 text-white">
                                            <a
                                                class="block truncate text-lg font-medium"
                                                href=""
                                            >
                                                {{ $faker['name'] }}
                                            </a>
                                            <span class="mt-3 text-xs text-white/80">
                                                {{ $faker['category']['name'] }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pt-5">
                                        <div
                                            class="mb-5 mt-auto flex flex-col gap-3.5 border-b border-dashed border-slate-300/70 pb-5">
                                            <div class="flex items-center">
                                                <div class="text-slate-500">Category:</div>
                                                <div class="ml-auto">
                                                    <div
                                                        class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                        <span class="-mt-px">
                                                            {{ $faker['category']['name'] }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="text-slate-500">Rated:</div>
                                                <div class="ml-auto">
                                                    <div class="flex items-center">
                                                        <div class="flex items-center">
                                                            <x-base.lucide
                                                                class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                                                icon="Star"
                                                            />
                                                            <x-base.lucide
                                                                class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                                                icon="Star"
                                                            />
                                                            <x-base.lucide
                                                                class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                                                icon="Star"
                                                            />
                                                            <x-base.lucide
                                                                class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                                                icon="Star"
                                                            />
                                                            <x-base.lucide
                                                                class="fill-slate/30 mr-1 h-4 w-4 text-slate-400"
                                                                icon="Star"
                                                            />
                                                        </div>
                                                        <div class="ml-1 text-xs text-slate-500">
                                                            (4.5+)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="text-slate-500">Reviews:</div>
                                                <div class="ml-auto">
                                                    <div class="flex justify-center">
                                                        <div class="image-fit zoom-in h-6 w-6">
                                                            <x-base.tippy
                                                                class="rounded-full border-2 border-white"
                                                                src="{{ Vite::asset($reviews[0]['user']['photo']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                                as="img"
                                                                content="{{ $reviews[0]['comment'] }}"
                                                            />
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                            <x-base.tippy
                                                                class="rounded-full border-2 border-white"
                                                                src="{{ Vite::asset($reviews[1]['user']['photo']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                                as="img"
                                                                content="{{ $reviews[1]['comment'] }}"
                                                            />
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                            <x-base.tippy
                                                                class="rounded-full border-2 border-white"
                                                                src="{{ Vite::asset($reviews[2]['user']['photo']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                                as="img"
                                                                content="{{ $reviews[2]['comment'] }}"
                                                            />
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                            <x-base.tippy
                                                                class="rounded-full border-2 border-white"
                                                                src="{{ Vite::asset($reviews[3]['user']['photo']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                                as="img"
                                                                content="{{ $reviews[3]['comment'] }}"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <a
                                                class="mr-auto flex items-center text-primary"
                                                href="#"
                                            >
                                                <x-base.lucide
                                                    class="mr-1.5 h-4 w-4 stroke-[1.3]"
                                                    icon="KanbanSquare"
                                                />
                                                Preview
                                            </a>
                                            <a
                                                class="mr-3 flex items-center"
                                                href="#"
                                            >
                                                <x-base.lucide
                                                    class="mr-1.5 h-4 w-4 stroke-[1.3]"
                                                    icon="CheckSquare"
                                                />
                                                Edit
                                            </a>
                                            <a
                                                class="flex items-center text-danger"
                                                href="#"
                                            >
                                                <x-base.lucide
                                                    class="mr-1.5 h-4 w-4 stroke-[1.3]"
                                                    icon="Trash2"
                                                />
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
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
    </div>
@endsection
