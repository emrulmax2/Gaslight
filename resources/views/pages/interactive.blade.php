@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Interactive
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center">
                            <div class="flex w-full items-center px-1">
                                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-success">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3] text-white"
                                        icon="Check"
                                    />
                                </div>
                                <x-base.menu class="ml-auto mr-1">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                            icon="MoreHorizontal"
                                        />
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>u.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Copy"
                                            /> Copy
                                            Link
                                        </x-base.menu.item>
                                        <x-base.menu.item>u.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                            <div class="mt-5">
                                <div
                                    class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div class="mt-3.5 text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                {{ $users[0]['department'] }}
                            </div>
                            <div class="mt-5 flex items-center gap-3">
                                <div
                                    class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                    <span class="-mt-px">
                                        {{ mt_rand(10, 120) }} Active Tasks
                                    </span>
                                </div>
                                <div
                                    class="ml-auto flex items-center rounded-md border border-success/10 bg-success/10 px-2 py-0.5 text-xs font-medium text-success">
                                    <span class="-mt-px">{{ mt_rand(10, 20) }} Completed</span>
                                </div>
                            </div>
                            <x-base.button
                                class="mt-10 w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Send"
                                />
                                Assign to Task
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <div class="max-w-[16rem] truncate text-base font-medium md:max-w-[17rem]">
                                {{ $projects[0]['projectName'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                By {{ $projects[0]['creativeDirector']['name'] }}
                            </div>
                            <x-base.menu class="absolute right-0 top-0 mr-1">
                                <x-base.menu.button class="h-5 w-5 text-slate-500">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                        icon="MoreHorizontal"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Copy"
                                        /> Copy Link
                                    </x-base.menu.item>
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Trash"
                                        />
                                        Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                        <div class="mt-8 flex items-center">
                            <div class="flex w-full items-center">
                                <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                    <img
                                        class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                    <img
                                        class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                    <img
                                        class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                    <img
                                        class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div
                                    class="inset-y-0 z-10 my-auto -ml-3 flex h-[22px] items-center rounded-full border border-slate-200/80 bg-white px-2.5 text-xs font-medium text-primary shadow">
                                    {{ mt_rand(10, 50) }}+
                                </div>
                                <div class="ml-auto">
                                    <x-base.button
                                        class="h-[40px] w-[40px] p-0"
                                        type="button"
                                        variant="primary"
                                        rounded
                                    >
                                        <x-base.lucide
                                            class="h-5 w-5 stroke-[1.3]"
                                            icon="Plus"
                                        />
                                    </x-base.button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <div class="flex flex-col items-center pb-5 pt-7">
                                <div class="text-[2.1rem] font-medium text-primary/90">
                                    09:20
                                </div>
                                <div class="mt-5 text-lg font-medium">Sunday</div>
                                <div class="mt-1 text-slate-500">02 June 2024</div>
                                <div class="mt-9 flex gap-3">
                                    <x-base.tippy
                                        class="relative flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                        as="a"
                                        content="{{ $users[0]['email'] }}"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 fill-primary/5 text-primary"
                                            icon="Mail"
                                        />
                                    </x-base.tippy>
                                    <x-base.tippy
                                        class="relative flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                        as="a"
                                        content="{{ $users[0]['name'] }}"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 fill-primary/5 text-primary"
                                            icon="MessageSquare"
                                        />
                                    </x-base.tippy>
                                    <x-base.tippy
                                        class="relative flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                        as="a"
                                        content="{{ $users[0]['phone'] }}"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 fill-primary/5 text-primary"
                                            icon="Bell"
                                        />
                                        <div
                                            class="absolute right-0 top-0 -mr-2 -mt-2 rounded-full bg-success px-2 py-0.5 text-xs font-medium text-white">
                                            5
                                        </div>
                                    </x-base.tippy>
                                </div>
                            </div>
                            <x-base.menu class="absolute right-0 top-0 mr-1">
                                <x-base.menu.button class="h-5 w-5 text-slate-500">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                        icon="MoreHorizontal"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Copy"
                                        /> Copy Link
                                    </x-base.menu.item>
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Trash"
                                        />
                                        Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <x-base.form-input
                                class="py-3 pr-11"
                                type="text"
                                rounded
                                placeholder="Search members..."
                            />
                            <div
                                class="absolute inset-y-0 right-0 my-1 mr-1 flex w-10 items-center justify-center rounded-full bg-primary">
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3] text-white"
                                    icon="Search"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-1">
                        <div
                            class="flex flex-col items-center rounded-lg bg-gradient-to-r from-theme-2/[0.85] to-theme-1/[0.85] p-4">
                            <div class="flex w-full">
                                <div class="mr-auto text-white">Day</div>
                                <x-base.menu class="mr-1">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-white/70 stroke-white/70"
                                            icon="MoreHorizontal"
                                        />
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>u.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Copy"
                                            /> Copy
                                            Link
                                        </x-base.menu.item>
                                        <x-base.menu.item>u.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                            <div class="mb-11 mt-10 flex items-center">
                                <div class="flex items-center gap-8">
                                    <div class="flex flex-col items-center">
                                        <div class="text-[2.1rem] font-medium text-white/90">
                                            17°C
                                        </div>
                                        <div class="mt-3.5 text-base text-white/80">
                                            Cloudy
                                        </div>
                                    </div>
                                    <div @class([
                                        'opacity-[0.95] relative bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full w-8 h-8 -mt-6 ml-10 mr-2',
                                        "before:content-[''] before:w-14 before:h-14 before:bg-white before:rounded-full before:absolute before:top-0 before:right-0 before:mr-4 before:-mt-1",
                                        "after:content-[''] after:w-8 after:h-8 after:bg-white after:rounded-full after:absolute after:top-0 after:right-0 after:mt-5 after:-mr-2",
                                    ])>
                                        <div class="absolute bottom-0 right-0 -mb-5 mr-1.5 h-5 w-10 bg-white"></div>
                                    </div>
                                </div>
                            </div>
                            <x-base.button
                                class="mb-5 border-white/50 bg-white/20 px-10"
                                rounded
                            >
                                <x-base.lucide
                                    class="h-5 w-5 stroke-[1.3] text-white"
                                    icon="ChevronDown"
                                />
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="my-3 flex flex-col items-center">
                            <div>
                                <div
                                    class="flex items-center justify-center rounded-full bg-gradient-to-b from-theme-1/20 to-theme-2/20 p-1.5">
                                    <div
                                        class="flex items-center justify-center rounded-full bg-gradient-to-b from-theme-1/40 to-theme-2/40 p-1.5">
                                        <div
                                            class="flex items-center justify-center rounded-full bg-gradient-to-b from-theme-1/60 to-theme-2/60 p-1.5">
                                            <div class="image-fit h-24 w-24 overflow-hidden rounded-full">
                                                <img
                                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3.5 text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">Incoming Call</div>
                            <div class="mt-6 flex gap-5">
                                <x-base.tippy
                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-danger/40 bg-danger/[0.15]"
                                    as="a"
                                    content="Hang Up"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 rotate-[135deg] fill-danger/10 text-danger"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-primary/40 bg-primary/[0.15]"
                                    as="a"
                                    content="Answer"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 text-primary"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-1">
                        <div @class([
                            'py-6 rounded-lg px-7 bg-gradient-to-r from-theme-2/[0.85] to-theme-1/[0.85] relative overflow-hidden',
                            "before:content-[''] before:w-64 before:h-64 before:border before:border-dashed before:rounded-full before:absolute before:border-white/[0.15] before:right-0 before:top-0 before:-mt-5 before:-mr-28",
                            "after:content-[''] after:w-80 after:h-80 after:border after:border-dashed after:rounded-full after:absolute after:border-white/[0.15] after:right-0 after:top-0 after:mt-20 after:-mr-20",
                        ])>
                            <x-base.lucide
                                class="absolute right-0 top-0 mr-14 mt-24 h-10 w-10 rotate-12 stroke-[0.8] text-white/10"
                                icon="Award"
                            />
                            <x-base.lucide
                                class="absolute left-0 top-0 ml-10 mt-80 h-10 w-10 -rotate-12 stroke-[0.7] text-white/10"
                                icon="Album"
                            />
                            <x-base.menu class="absolute right-0 top-0 mr-9 mt-5">
                                <x-base.menu.button class="h-5 w-5 text-white/60">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-white/60 stroke-white/60"
                                        icon="MoreHorizontal"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Copy"
                                        /> Copy Link
                                    </x-base.menu.item>
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Trash"
                                        />
                                        Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.lucide
                                class="h-16 w-16 fill-white/5 stroke-[0.5] text-white/50"
                                icon="Goal"
                            />
                            <div class="mt-7 text-2xl font-medium text-white">
                                Premium Membership
                            </div>
                            <div class="mt-2 leading-relaxed text-white/80">
                                Upgrade to Premium Membership Today! Unlock exclusive
                                features, unlimited access to premium content, and priority
                                customer support. Join now for a limited-time offer!
                            </div>
                            <x-base.button
                                class="mb-3 mt-11 w-full border-white/50 bg-white/20 text-white"
                                type="button"
                                rounded
                            >
                                Subscribe
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center gap-8">
                                <x-base.tippy
                                    class="relative flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="{{ $users[0]['email'] }}"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="SkipBack"
                                    />
                                </x-base.tippy>
                                <div
                                    class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <x-base.tippy
                                    class="relative flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="{{ $users[0]['name'] }}"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="SkipForward"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="mt-4 text-base font-medium">Cancer</div>
                            <div class="mt-0.5 text-slate-500">My Chemical Romance</div>
                            <div class="mt-5 flex w-full items-center gap-3">
                                <div class="text-xs text-slate-500">0:00</div>
                                <div class="flex h-2 w-full rounded border bg-slate-100">
                                    <x-base.tippy
                                        class="h-full w-[35%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r"
                                        as="div"
                                        content="Heart Disease"
                                    ></x-base.tippy>
                                </div>
                                <div class="text-xs text-slate-500">2:42</div>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <div class="max-w-[16rem] truncate text-base font-medium md:max-w-[17rem]">
                                Echoes of Eternity
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                Journey through Time and Space
                            </div>
                            <div class="mt-7 flex items-center">
                                <div class="flex items-center gap-2">
                                    <div class="text-xl font-medium text-primary">32.5</div>
                                    <div class="text-slate-500">USD</div>
                                </div>
                                <div class="ml-auto">
                                    <x-base.button
                                        class="h-[40px] w-[40px] p-0"
                                        type="button"
                                        variant="primary"
                                        rounded
                                    >
                                        <x-base.lucide
                                            class="h-5 w-5 stroke-[1.3]"
                                            icon="ShoppingCart"
                                        />
                                    </x-base.button>
                                </div>
                            </div>
                            <x-base.menu class="absolute right-0 top-0 mr-1">
                                <x-base.menu.button class="h-5 w-5 text-slate-500">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                        icon="MoreHorizontal"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Copy"
                                        /> Copy Link
                                    </x-base.menu.item>
                                    <x-base.menu.item>u.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="Trash"
                                        />
                                        Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="max-w-[9rem] truncate text-base font-medium md:max-w-none">
                                    {{ $users[0]['name'] }}
                                </div>
                                <div class="mt-0.5 text-slate-500">
                                    {{ $users[0]['position'] }}
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 flex w-full items-center gap-3">
                            <div class="flex h-2 w-full rounded border bg-slate-100">
                                <x-base.tippy
                                    class="h-full w-[35%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Heart Disease"
                                ></x-base.tippy>
                            </div>
                            <div class="text-xs text-slate-500">45%</div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <x-base.button
                                class="absolute right-0 top-0 border-0 p-0 text-slate-500 shadow-none"
                                type="button"
                            >
                                <x-base.lucide
                                    class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                    icon="MoreHorizontal"
                                />
                            </x-base.button>
                            <div class="max-w-[16rem] truncate text-base font-medium md:max-w-[17rem]">
                                Echoes of Eternity
                            </div>
                            <div class="mt-0.5 max-w-[16rem] truncate text-slate-500 md:max-w-[17rem]">
                                Journey through Time and Space
                            </div>
                            <div class="mt-5 grid grid-cols-4 gap-2.5">
                                <div class="image-fit h-28 overflow-hidden rounded-md">
                                    <img
                                        src="{{ Vite::asset($projectDetails[0]['image']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="image-fit h-28 overflow-hidden rounded-md">
                                    <img
                                        src="{{ Vite::asset($projectDetails[0]['image']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="image-fit h-28 overflow-hidden rounded-md">
                                    <img
                                        src="{{ Vite::asset($projectDetails[0]['image']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="image-fit h-28 overflow-hidden rounded-md">
                                    <img
                                        src="{{ Vite::asset($projectDetails[0]['image']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div class="mt-7 flex items-center gap-3">
                                <x-base.button
                                    class="w-full"
                                    type="button"
                                    rounded
                                    variant="outline-primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Eye"
                                    />
                                    View Detail
                                </x-base.button>
                                <x-base.button
                                    class="w-full"
                                    type="button"
                                    rounded
                                    variant="primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Plus"
                                    />
                                    Add Book
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-wrap gap-2.5">
                            @foreach ($categories as $fakerKey => $faker)
                                <a
                                    href=""
                                    @class([
                                        'flex gap-2.5 items-center px-3.5 py-1.5 border rounded-lg border-slate-300 bg-slate-50/70 [&.active]:bg-primary/5 [&.active]:border-primary/50 [&.active]:text-primary [&:not(.active)_a]:hidden',
                                        'active' => !mt_rand(0, 1),
                                    ])
                                >
                                    {{ $faker['name'] }}
                                    <x-base.lucide
                                        class="-mr-1 h-3.5 w-3.5"
                                        icon="X"
                                    />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div class="mb-5 flex flex-col items-center border-b border-dashed pb-8">
                            <div class="max-w-[17rem] truncate text-base font-medium">
                                Hi, {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                Your food is getting ready in
                            </div>
                            <div class="mt-8 flex items-center gap-4">
                                <div class="w-10">
                                    <x-report-donut-chart-7
                                        class="relative z-10"
                                        height="h-[35px]"
                                    />
                                </div>
                                <div class="text-[2.1rem] font-medium opacity-90">
                                    00:32
                                </div>
                            </div>
                        </div>
                        <div @class([
                            'flex flex-col gap-5 relative',
                            "before:content-[''] before:w-px before:h-full before:absolute before:bg-slate-200 before:ml-5",
                        ])>
                            <div class="z-5 relative flex items-center gap-3.5">
                                <div>
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-slate-200/70 bg-primary/90">
                                        <x-base.lucide
                                            class="h-4 w-4 fill-white/10 text-white"
                                            icon="Cookie"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="max-w-[15rem] truncate font-medium">
                                        Cooking Kitchen
                                    </div>
                                    <div class="mt-1 text-xs text-slate-500">
                                        Traditional Restaurant
                                    </div>
                                </div>
                                <x-base.tippy
                                    class="relative ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="Send Message"
                                >
                                    <x-base.lucide
                                        class="h-3.5 w-3.5 fill-primary/5 text-primary"
                                        icon="MessagesSquare"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="z-5 relative flex items-center gap-3.5">
                                <div>
                                    <div
                                        class="image-fit h-10 w-10 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($users[0]['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                </div>
                                <div>
                                    <div class="max-w-[15rem] truncate font-medium">
                                        {{ $users[0]['name'] }}
                                    </div>
                                    <div class="mt-1 text-xs text-slate-500">Driver</div>
                                </div>
                                <x-base.tippy
                                    class="relative ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="Send Message"
                                >
                                    <x-base.lucide
                                        class="h-3.5 w-3.5 fill-primary/5 text-primary"
                                        icon="MessagesSquare"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="z-5 relative flex items-center gap-3.5">
                                <div>
                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-slate-200/70 bg-slate-100">
                                        <x-base.lucide
                                            class="h-4 w-4 fill-primary/10 text-primary"
                                            icon="MapPin"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="max-w-[15rem] truncate font-medium">
                                        Delivery
                                    </div>
                                    <div class="mt-1 text-xs text-slate-500">
                                        Driver go to your location
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-7 flex items-center gap-3">
                            <x-base.button
                                class="w-full"
                                type="button"
                                rounded
                                variant="outline-primary"
                            >
                                Cancel Order
                            </x-base.button>
                            <x-base.button
                                class="w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                See Details
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center">
                            <div
                                class="flex items-center rounded-full border border-primary bg-primary px-3.5 py-1.5 font-medium text-white">
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.5]"
                                    icon="Clock"
                                />
                                1 Day Left
                            </div>
                            <x-base.button
                                class="ml-auto h-[40px] w-[40px] p-0"
                                type="button"
                                variant="outline-secondary"
                                rounded
                            >
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3]"
                                    icon="Maximize2"
                                />
                            </x-base.button>
                        </div>
                        <div class="mt-5 border-t border-dashed pt-4">
                            <div class="text-slate-500">Spring Sale</div>
                            <div class="mt-1.5 truncate text-base font-medium">
                                Get 25% Discount of Any Products!
                            </div>
                            <div
                                class="image-fit mt-4 h-48 w-full overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/60 before:to-theme-2/5">
                                <img
                                    class="rounded-md saturate-150"
                                    src="{{ Vite::asset('resources/images/miscellaneous/robot.jpg') }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center">
                            <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                <img
                                    class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                            <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                <img
                                    class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                            <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                <img
                                    class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                            <div class="image-fit zoom-in -ml-3.5 h-11 w-11 first:ml-0">
                                <img
                                    class="cursor-pointer rounded-full border-[3px] border-slate-50"
                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                            <div
                                class="inset-y-0 z-10 my-auto -ml-3 flex h-[22px] items-center rounded-full border border-slate-200/80 bg-white px-2.5 text-xs font-medium text-primary shadow">
                                {{ mt_rand(10, 50) }}+
                            </div>
                            <x-base.button
                                class="ml-auto h-[40px] w-[40px] p-0"
                                type="button"
                                variant="outline-secondary"
                                rounded
                            >
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3]"
                                    icon="Heart"
                                />
                            </x-base.button>
                        </div>
                        <div class="mt-5 border-t border-dashed pt-4">
                            <div class="max-w-[17rem] truncate text-base font-medium">
                                {{ $events[0]['title'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                {{ $events[0]['description'] }}
                            </div>
                        </div>
                        <div class="mt-7 flex items-center gap-3">
                            <x-base.button
                                class="w-full"
                                type="button"
                                rounded
                                variant="outline-primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Eye"
                                />
                                View
                            </x-base.button>
                            <x-base.button
                                class="w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Users"
                                />
                                Join
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center">
                            <div class="relative h-28 w-28">
                                <div
                                    class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <x-base.lucide
                                    class="box absolute bottom-0 right-0 -mr-1 mb-6 h-6 w-6 rounded-full bg-success/[0.95] fill-white/10 stroke-[1.3] p-1 text-white"
                                    icon="CheckCheck"
                                />
                            </div>
                            <div class="mt-3.5 text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                {{ $users[0]['department'] }}
                            </div>
                            <div class="mt-6 flex items-center px-2">
                                <div class="w-full text-center">
                                    <div class="font-medium">15</div>
                                    <div class="mt-0.5 text-slate-500">Projects</div>
                                </div>
                                <div class="mx-5 h-7 w-px border-l border-dashed border-slate-300/70 sm:mx-7"></div>
                                <div class="w-full text-center">
                                    <div class="font-medium">Full Time</div>
                                    <div class="mt-0.5 text-slate-500">Employment</div>
                                </div>
                                <div class="mx-5 h-7 w-px border-l border-dashed border-slate-300/70 sm:mx-7"></div>
                                <div class="w-full text-center">
                                    <div class="font-medium">4.5/5</div>
                                    <div class="mt-0.5 text-slate-500">Rating</div>
                                </div>
                            </div>
                            <x-base.button
                                class="mt-8 w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Send"
                                />
                                View Details
                            </x-base.button>
                            <x-base.button
                                class="mt-2 w-full"
                                type="button"
                                rounded
                                variant="outline-primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Mail"
                                />
                                Send Message
                            </x-base.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
