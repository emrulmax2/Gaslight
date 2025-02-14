@extends('../themes/base')

@section('head')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('content')
    <div @class([
        'landing-page relative',
        "before:content-[''] before:w-screen before:h-screen before:fixed before:bg-slate-100 before:z-[-1]",
    ])>
        <div @class([
            'background relative group overflow-x-hidden scroll-smooth',
            "before:content-[''] before:w-screen before:h-screen before:rounded-[0_0_50%] [&.background--hidden]:before:from-slate-100 [&.background--hidden]:before:to-transparent before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:absolute before:z-[-1] before:transition-colors before:ease-in-out before:duration-300",
            "after:content-[''] after:z-[-1] after:h-screen after:w-screen [&.background--hidden]:after:opacity-0 after:transition-[opacity,height] after:ease-in-out after:duration-300 after:top-0 after:fixed after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-25rem] after:bg-no-repeat",
        ])>
            <div class="container fixed inset-x-0 z-50 mx-auto">
                <div @class([
                    'relative flex items-center h-16 w-full mt-5 px-5',
                    "before:content-[''] before:inset-0 before:box before:absolute before:opacity-0 before:border-0 before:bg-gradient-to-r before:from-theme-1 before:to-theme-2 before:rounded-xl",
                    'group-[.background--hidden]:before:opacity-100',
                    "after:content-[''] after:z-[-1] after:inset-x-4 after:shadow-sm after:opacity-0 after:h-full after:bg-primary/5 after:border after:border-primary/10 after:absolute after:rounded-lg after:mx-auto after:top-0 after:mt-3 after:dark:bg-darkmode-600/70 after:dark:border-darkmode-500/60",
                    'group-[.background--hidden]:after:opacity-100',
                ])>
                    <a
                        class="relative mr-14 flex items-center"
                        href=""
                    >
                        <div
                            class="flex h-[34px] w-[34px] items-center justify-center rounded-lg border border-white/10 bg-white/10 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                            <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                                <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50"></div>
                                <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                </div>
                            </div>
                        </div>
                        <div class="ml-3.5 text-lg font-medium text-white">
                            Tailwise
                        </div>
                    </a>
                    <div class="relative mx-auto flex items-center gap-10 text-white">
                        <a
                            class="cursor-pointer"
                            href="#themes-variants"
                        >
                            Themes & Variants
                        </a>
                        <a
                            class="cursor-pointer"
                            href="#pages-layouts"
                        >
                            Pages & Layouts
                        </a>
                        <a
                            class="cursor-pointer"
                            href="#frameworks"
                        >
                            Frameworks
                        </a>
                        <a
                            class="cursor-pointer"
                            href="#pricing"
                        >
                            Pricing
                        </a>
                    </div>
                    <div class="relative flex gap-2.5">
                        <x-base.button
                            class="relative border-white/10 bg-white/10 px-2.5 text-white"
                            href="#colors"
                            as="a"
                            rounded
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="Palette"
                            />
                            <div
                                class="absolute inset-0"
                                href="#colors"
                            ></div>
                        </x-base.button>
                        <x-base.button
                            class="border-white/10 bg-white/10 px-5 text-white"
                            href="https://themeforest.net/item/tailwise-html-admin-dashboard-template/49921289"
                            as="a"
                            target="_blank"
                            rounded
                        >
                            Download Now
                        </x-base.button>
                    </div>
                </div>
            </div>
            <div class="container relative z-10 pt-40">
                <div class="mb-40 flex flex-col items-center gap-56">
                    <div class="flex flex-col items-center">
                        <div
                            class="text-center text-5xl font-medium leading-[1.2] text-white group-[.background--hidden]:text-slate-600">
                            Unleash Your Dashboard's <br>
                            Superpowers.
                        </div>
                        <div
                            class="mt-4 text-center text-lg leading-[1.75] text-white/70 group-[.background--hidden]:text-slate-600/70">
                            Tailwise redefines the way developers craft admin dashboards
                            <br>
                            unlocking endless possibilities with the fusion of Headless UI and
                            Tailwind CSS.
                        </div>
                        <a href="/">
                            <x-base.button
                                class="zoom-in mt-8 border-white/10 bg-white/10 px-7 py-3 text-[0.94rem] text-white group-[.background--hidden]:border-primary group-[.background--hidden]:bg-primary"
                                rounded
                            >
                                View Demo
                            </x-base.button>
                        </a>
                        <div class="landing-page__showcase grid w-full grid-cols-3 gap-5 px-20">
                            <div class="flex flex-col gap-7">
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
                                                />
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
                                        <div class="mt-0.5 text-slate-500">
                                            My Chemical Romance
                                        </div>
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
                                                    <x-base.menu.item>
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Copy"
                                                        /> Copy
                                                        Link
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
                                                    <div class="absolute bottom-0 right-0 -mb-5 mr-1.5 h-5 w-10 bg-white">
                                                    </div>
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
                                    <div class="relative">
                                        <x-base.form-input
                                            class="pr-11"
                                            type="text"
                                            rounded
                                            placeholder="Search members..."
                                        />
                                        <div class="absolute inset-y-0 right-0 flex w-11 items-center justify-center">
                                            <x-base.lucide
                                                class="h-4 w-4 stroke-[1.3] text-slate-400"
                                                icon="Search"
                                            />
                                        </div>
                                    </div>
                                    <div class="mt-3.5 flex flex-col gap-2">
                                        @foreach ($users->take(4) as $fakerKey => $faker)
                                            <div
                                                class="-mx-2 flex cursor-pointer items-center gap-3.5 rounded-lg px-2 py-1.5 transition-all hover:bg-slate-50">
                                                <div>
                                                    <div
                                                        class="image-fit h-10 w-10 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                        <img
                                                            src="{{ Vite::asset($faker['photo']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="font-medium">{{ $faker['name'] }}</div>
                                                    <div class="mt-1 text-xs text-slate-500">
                                                        {{ $faker['position'] }}
                                                    </div>
                                                </div>
                                                <div class="ml-auto flex gap-2.5">
                                                    <x-base.tippy
                                                        class="flex h-7 w-7 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                                        as="a"
                                                        content="Call"
                                                    >
                                                        <x-base.lucide
                                                            class="h-3 w-3 fill-primary/10 text-primary"
                                                            icon="Phone"
                                                        />
                                                    </x-base.tippy>
                                                    <x-base.tippy
                                                        class="flex h-7 w-7 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                                        as="a"
                                                        content="Send a message"
                                                    >
                                                        <x-base.lucide
                                                            class="h-3 w-3 fill-primary/10 text-primary"
                                                            icon="Mail"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="-mt-10 flex flex-col gap-7">
                                <div class="box box--stacked p-5">
                                    <div class="my-1 flex flex-col items-center">
                                        <div @class([
                                            'relative flex items-end rounded-full w-48 h-48 bg-gradient-to-r from-slate-100 via-theme-1 to-theme-2',
                                            "before:content-[''] before:w-1.5 before:h-2 before:absolute before:bg-white before:inset-y-0 before:my-auto before:right-0",
                                            "after:content-[''] after:w-2 after:h-1.5 after:absolute after:bg-white after:inset-x-0 after:mx-auto after:top-0",
                                        ])>
                                            <div
                                                class="mb-0.5 ml-0.5 flex h-[97%] w-[97%] items-center justify-center rounded-full bg-white">
                                                <div>
                                                    <div
                                                        class="image-fit -mr-1 -mt-1 h-32 w-32 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                        <img
                                                            src="{{ Vite::asset($users[3]['photo']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="image-fit absolute left-0 -ml-2.5 h-6 w-6 overflow-hidden rounded-full border border-slate-200/70">
                                                    <img
                                                        src="{{ Vite::asset($users[2]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                                <div
                                                    class="image-fit absolute bottom-0 left-0 mb-2.5 ml-2.5 h-8 w-8 overflow-hidden rounded-full border border-slate-200/70">
                                                    <img
                                                        src="{{ Vite::asset($users[1]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                                <x-base.tippy
                                                    class="box absolute bottom-0 -mb-5 flex h-12 w-12 items-center justify-center rounded-full border border-transparent bg-gradient-to-b from-theme-1/90 to-theme-2/90"
                                                    as="a"
                                                    content="Play"
                                                >
                                                    <x-base.lucide
                                                        class="-mr-1 h-5 w-5 fill-white/5 stroke-[0.9] text-white"
                                                        icon="Play"
                                                    />
                                                </x-base.tippy>
                                            </div>
                                        </div>
                                        <div class="mt-10 text-base font-medium">
                                            Subscription Box
                                        </div>
                                        <div class="mx-5 mt-1.5 text-center text-slate-500">
                                            The gift that keeps on grooving. Subscribe to Music Box
                                            for curated music surprises.
                                        </div>
                                        <x-base.button
                                            class="mt-5 w-full"
                                            type="button"
                                            variant="primary"
                                            rounded
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="Send"
                                            />
                                            Subscribe Now
                                        </x-base.button>
                                    </div>
                                </div>
                                <div class="box box--stacked p-5">
                                    <div class="flex items-center gap-3.5">
                                        <div>
                                            <div
                                                class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img
                                                    src="{{ Vite::asset($users[6]['photo']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                />
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
                                        <div class="relative z-10 flex items-center gap-3.5">
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
                                        <div class="relative z-10 flex items-center gap-3.5">
                                            <div>
                                                <div
                                                    class="image-fit h-10 w-10 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                    <img
                                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="max-w-[15rem] truncate font-medium">
                                                    {{ $users[0]['name'] }}
                                                </div>
                                                <div class="mt-1 text-xs text-slate-500">
                                                    Driver
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
                                        <div class="relative z-10 flex items-center gap-3.5">
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
                            </div>
                            <div class="flex flex-col gap-7">
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
                                                    <x-base.menu.item>
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Copy"
                                                        /> Copy
                                                        Link
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
                                        </div>
                                        <div class="mt-5">
                                            <div
                                                class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img
                                                    src="{{ Vite::asset($users[1]['photo']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                />
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
                                                <span class="-mt-px">
                                                    {{ mt_rand(10, 20) }} Completed
                                                </span>
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
                                <div class="box box--stacked p-1">
                                    <div
                                        class="flex items-center gap-3.5 rounded-lg bg-gradient-to-r from-theme-2/[0.85] to-theme-1/[0.85] p-4">
                                        <div>
                                            <div
                                                class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img
                                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-base font-medium text-white">
                                                {{ $users[0]['name'] }}
                                            </div>
                                            <div class="mt-0.5 text-slate-500 text-white/80">
                                                {{ $activities[0]['activity'] }}
                                            </div>
                                            <div class="mt-1 text-white/80">
                                                {{ $activities[0]['date'] }}
                                            </div>
                                        </div>
                                        <div class="ml-auto flex gap-2">
                                            <x-base.tippy
                                                class="flex h-9 w-9 items-center justify-center rounded-full border border-white/40 bg-white/5"
                                                as="a"
                                                content="Send a message"
                                            >
                                                <x-base.lucide
                                                    class="h-4 w-4 fill-white/10 text-white"
                                                    icon="ChevronRight"
                                                />
                                            </x-base.tippy>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box--stacked p-5">
                                    <div class="my-1 flex flex-col items-center">
                                        <div>
                                            <div
                                                class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img
                                                    src="{{ Vite::asset($users[5]['photo']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="mt-3.5 text-base font-medium">Cancer</div>
                                        <div class="mt-0.5 text-slate-500">
                                            My Chemical Romance
                                        </div>
                                        <div class="mt-4 flex h-10 items-center justify-center gap-1">
                                            <div
                                                class="active h-[15%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[25%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[35%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[45%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[40%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[30%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[20%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[25%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[35%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[45%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[40%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[30%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[40%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[50%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="active h-[70%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[100%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[90%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[70%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[50%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[40%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[30%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[40%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[45%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[35%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[25%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[15%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[15%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[25%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[35%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[45%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[40%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[30%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                            <div
                                                class="h-[20%] w-0.5 rounded-full bg-slate-300/80 [&.active]:bg-gradient-to-b [&.active]:from-theme-1/70 [&.active]:to-theme-2/70">
                                            </div>
                                        </div>
                                        <div class="mt-5 flex items-center gap-3.5">
                                            <x-base.tippy
                                                class="box flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/5"
                                                as="a"
                                                content="Skip Back"
                                            >
                                                <x-base.lucide
                                                    class="h-4 w-4 fill-primary/5 stroke-[1.3] text-primary"
                                                    icon="SkipBack"
                                                />
                                            </x-base.tippy>
                                            <x-base.tippy
                                                class="box flex h-12 w-12 items-center justify-center rounded-full border border-transparent bg-gradient-to-b from-theme-1/90 to-theme-2/90"
                                                as="a"
                                                content="Play"
                                            >
                                                <x-base.lucide
                                                    class="-mr-1 h-5 w-5 fill-white/5 stroke-[0.9] text-white"
                                                    icon="Play"
                                                />
                                            </x-base.tippy>
                                            <x-base.tippy
                                                class="box flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/5"
                                                as="a"
                                                content="Skip Forward"
                                            >
                                                <x-base.lucide
                                                    class="h-4 w-4 fill-primary/5 stroke-[1.3] text-primary"
                                                    icon="SkipForward"
                                                />
                                            </x-base.tippy>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full flex-col items-center"
                        id="themes-variants"
                    >
                        <div @class([
                            'text-3xl font-medium relative',
                            "before:content-[''] before:bg-gradient-to-b before:from-transparent before:via-slate-100/80 before:to-slate-100 before:inset-0 before:absolute before:h-[360%] before:w-[150%] before:-mt-[4.5rem] before:-ml-[25%]",
                        ])>
                            <div
                                class="absolute inset-x-0 z-[-1] mx-auto -mt-[5.5rem] flex h-36 w-36 items-center justify-center rounded-full border border-theme-1/[0.13]">
                                <div class="h-16 w-16 rounded-full border border-theme-1/20"></div>
                                <div
                                    class="absolute -ml-52 -mt-10 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -ml-36 -mt-40 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mt-[13rem] h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mr-36 -mt-40 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mr-52 -mt-10 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                            </div>
                            <div class="z-5 relative text-center text-theme-1">
                                Themes & Variants
                            </div>
                        </div>
                        <div class="z-5 relative mt-4 text-center text-base text-slate-500/80">
                            Discover a spectrum of styles, 11 captivating theme variants at
                            your fingertips!
                        </div>
                        <div class="mt-10 grid w-full grid-cols-3 gap-x-6 gap-y-9 px-20">
                            @foreach (['echo', 'hurricane', 'ravage', 'hook', 'razor', 'havoc', 'dagger', 'shuriken', 'raze', 'exort', 'viper'] as $themeKey => $theme)
                                <div class="box box--stacked [&_img]:hover:h-[150%] [&_img]:hover:w-[150%]">
                                    <a
                                        class="block cursor-pointer p-2.5"
                                        href="{{ route('theme-switcher', ['activeTheme' => $theme]) }}"
                                    >
                                        <div class="box h-56 cursor-zoom-in overflow-hidden rounded-lg">
                                            <img
                                                class="h-full w-full max-w-none transition-all duration-300 ease-in-out"
                                                src="{{ Vite::asset('resources/images/themes/' . $theme . '.png') }}"
                                            />
                                        </div>
                                        <div
                                            class="mt-2 flex items-center px-3 py-3 font-medium capitalize text-primary transition-all duration-300 ease-in-out">
                                            <div class="flex items-center">
                                                Theme {{ $themeKey + 1 }}
                                                <div class="mx-2 h-1 w-1 rounded-full bg-primary/40"></div>
                                                {{ $theme }}
                                            </div>
                                            <x-base.lucide
                                                class="ml-auto h-5 w-5 stroke-[1]"
                                                icon="ArrowRight"
                                            />
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div
                        class="flex w-full flex-col items-center"
                        id="colors"
                    >
                        <div @class([
                            'text-3xl font-medium relative',
                            "before:content-[''] before:bg-gradient-to-b before:from-transparent before:via-slate-100/80 before:to-slate-100 before:inset-0 before:absolute before:h-[360%] before:w-[150%] before:-mt-[4.5rem] before:-ml-[25%]",
                        ])>
                            <div class="absolute inset-x-0 z-[-1] mx-auto -mt-36 h-48 w-48 rounded-full">
                                <div
                                    class="absolute inset-y-0 my-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute inset-x-0 bottom-0 mx-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-0 my-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 mx-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                            </div>
                            <div class="z-5 relative text-center text-theme-1">
                                Color Schemes
                            </div>
                        </div>
                        <div class="z-5 relative mt-4 text-center text-base text-slate-500/80">
                            Dual-tone magic, enhance your design with two brilliant color
                            schemes!
                        </div>
                        <div class="mt-10 grid w-full grid-cols-3 gap-5 px-20">
                            <div class="mt-2">
                                <div class="box box--stacked border-theme-1/50 p-1">
                                    <div class="rounded-lg bg-gradient-to-b from-theme-1/90 to-theme-2/90 p-4">
                                        <div class="flex items-center gap-3.5">
                                            <div>
                                                <div
                                                    class="image-fit h-14 w-14 overflow-hidden rounded-full border-2 border-white/20">
                                                    <img
                                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="max-w-[8rem] truncate text-base font-medium text-white md:max-w-none">
                                                    {{ $users[0]['name'] }}
                                                </div>
                                                <div class="mt-0.5 text-white/80">Available</div>
                                            </div>
                                            <div class="ml-auto flex items-center gap-2.5">
                                                <x-base.tippy
                                                    class="ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-white/[0.13] bg-white/5"
                                                    as="a"
                                                    content="Make a phone call"
                                                >
                                                    <x-base.lucide
                                                        class="h-4 w-4 fill-white/5 text-white"
                                                        icon="Phone"
                                                    />
                                                </x-base.tippy>
                                                <x-base.tippy
                                                    class="ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-white/[0.13] bg-white/5"
                                                    as="a"
                                                    content="Make a phone call"
                                                >
                                                    <x-base.lucide
                                                        class="h-4 w-4 fill-white/5 text-white"
                                                        icon="Settings"
                                                    />
                                                </x-base.tippy>
                                            </div>
                                        </div>
                                        <div
                                            class="my-5 flex flex-col gap-2.5 border-y border-dashed border-white/20 py-5">
                                            @foreach ($messages->take(2) as $fakerKey => $faker)
                                                <div @class([
                                                    'mr-auto border px-4 py-3 rounded-r-xl rounded-bl-xl bg-white/5 border-white/[0.13] text-white [&.right]:text-right [&.right]:mr-0 [&.right]:ml-auto [&.right]:rounded-l-xl [&.right]:rounded-tr-none',
                                                    'right' => [0, 0, 1, 1, 1][mt_rand(0, 4)],
                                                ])>
                                                    <div>{{ $faker['content'] }}</div>
                                                    <div class="mt-1 text-xs text-white/60">
                                                        {{ $faker['time'] }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="relative">
                                            <x-base.form-textarea
                                                class="-mb-1.5 resize-none rounded-xl border-white/[0.13] bg-white/5 pr-16 text-white placeholder:text-white/50"
                                                placeholder="Type a message..."
                                            />
                                            <div
                                                class="absolute inset-y-0 right-0 flex w-[3.8rem] items-center justify-center">
                                                <a
                                                    class="box flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border-white/[0.13] bg-white/5"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="-ml-0.5 h-4 w-4 stroke-[1.3] text-white/70"
                                                        icon="Send"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="box box--stacked border-theme-1/60 bg-gradient-to-b from-slate-50 to-transparent px-5 py-6">
                                    <div class="grid grid-cols-3 gap-x-2 gap-y-2.5">
                                        @foreach (['default', 'theme-1', 'theme-2', 'theme-3', 'theme-4', 'theme-5', 'theme-6', 'theme-7', 'theme-8', 'theme-9', 'theme-10', 'theme-11', 'theme-12', 'theme-13', 'theme-14', 'theme-15', 'theme-16', 'theme-17'] as $colorKey => $colorScheme)
                                            <x-base.tippy
                                                data-theme-color="{{ $colorScheme }}"
                                                as="a"
                                                @class([
                                                    'p-1 rounded-full box border-2 cursor-pointer',
                                                    '[&.active]:border-theme-1/60',
                                                ])
                                                content="{{ 'Color Scheme ' . $colorKey + 1 }}"
                                            >
                                                <div class="h-8 overflow-hidden rounded-full">
                                                    <div class="-mx-2 flex h-full items-center gap-1">
                                                        <div @class(['w-1/2 h-[140%] bg-theme-1 rotate-12', $colorScheme])></div>
                                                        <div @class(['w-1/2 h-[140%] bg-theme-2 rotate-12', $colorScheme])></div>
                                                    </div>
                                                </div>
                                            </x-base.tippy>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="box box--stacked border-theme-1/50 p-1">
                                    <div class="rounded-lg bg-gradient-to-b from-theme-1/90 to-theme-2/90 p-4">
                                        <div class="flex flex-col items-center">
                                            <div class="relative mt-1.5 h-40 w-40">
                                                <div
                                                    class="image-fit h-40 w-40 overflow-hidden rounded-full border-[3px] border-white/20">
                                                    <img
                                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                                <x-base.lucide
                                                    class="box absolute left-0 top-0 -ml-2.5 mt-7 h-9 w-9 rounded-full border-2 border-white/20 bg-theme-1/70 fill-white/10 stroke-[1.3] p-2 text-white"
                                                    icon="CheckCheck"
                                                />
                                                <x-base.lucide
                                                    class="box absolute bottom-0 right-0 -mr-2.5 mb-7 h-9 w-9 rounded-full border-2 border-white/20 bg-theme-1/70 fill-white/10 stroke-[1.3] p-2 text-white"
                                                    icon="Zap"
                                                />
                                            </div>
                                            <div class="mt-4 text-white/80">Welcome Back</div>
                                            <div class="mt-0.5 text-base font-medium text-white">
                                                {{ $users[0]['name'] }}
                                            </div>
                                            <x-base.button
                                                class="mt-5 w-full border-white/[0.15] bg-white/5"
                                                type="button"
                                                rounded
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Send"
                                                />
                                                Continue
                                            </x-base.button>
                                            <x-base.button
                                                class="mt-2 w-full border-white/[0.15] text-white"
                                                type="button"
                                                rounded
                                                variant="outline-primary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full flex-col items-center"
                        id="pages-layouts"
                    >
                        <div @class([
                            'text-3xl font-medium relative',
                            "before:content-[''] before:bg-gradient-to-b before:from-transparent before:via-slate-100/80 before:to-slate-100 before:inset-0 before:absolute before:h-[360%] before:w-[150%] before:-mt-[4.5rem] before:-ml-[25%]",
                        ])>
                            <div
                                class="absolute inset-x-0 z-[-1] mx-auto -mt-[5.5rem] flex h-36 w-36 items-center justify-center rounded-full border border-theme-1/[0.13]">
                                <div class="h-16 w-16 rounded-full border border-theme-1/20"></div>
                                <div
                                    class="absolute -ml-52 -mt-10 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -ml-36 -mt-40 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mt-[13rem] h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mr-36 -mt-40 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mr-52 -mt-10 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                            </div>
                            <div class="z-5 relative text-center text-theme-1">
                                Pages & Layouts
                            </div>
                        </div>
                        <div class="z-5 relative mt-4 text-center text-base text-slate-500/80">
                            Discover a spectrum of styles, 11 captivating theme variants at
                            your fingertips!
                        </div>
                        <div class="mt-10 flex w-full gap-7 px-20">
                            <div class="w-[19rem] flex-none">
                                <div class="box box--stacked flex flex-col gap-5 px-5 py-6">
                                    @foreach ($groups as $groupKey => $group)
                                        <a
                                            data-link-group="{{ $groupKey }}"
                                            href=""
                                            @class([
                                                'flex items-center [&.active]:text-primary [&.active]:font-medium',
                                                'active' => !$groupKey,
                                            ])
                                        >
                                            <x-base.lucide
                                                class="mr-3 h-4 w-4 stroke-[1.3]"
                                                icon="{{ $group['icon'] }}"
                                            />
                                            {{ $group['group'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="w-full">
                                @foreach ($groups as $groupKey => $group)
                                    <div
                                        data-group="{{ $groupKey }}"
                                        @class([
                                            'hidden w-full grid-cols-2 gap-x-5 gap-y-8 [&.active]:grid',
                                            'active' => !$groupKey,
                                        ])
                                    >
                                        @foreach ($group['pages'] as $pageKey => $page)
                                            <div class="box box--stacked [&_img]:hover:h-[150%] [&_img]:hover:w-[150%]">
                                                <a
                                                    class="block cursor-pointer p-2.5"
                                                    href="{{ route($page['pathname']) }}"
                                                    target="_blank"
                                                >
                                                    <div class="box h-56 cursor-zoom-in overflow-hidden rounded-lg">
                                                        <img
                                                            class="h-full w-full max-w-none transition-all duration-300 ease-in-out"
                                                            src="{{ Vite::asset('resources/images/pages/' . $page['image'] . '.jpg') }}"
                                                        />
                                                    </div>
                                                    <div
                                                        class="mt-2 flex items-center px-3 py-3 font-medium capitalize text-primary transition-all duration-300 ease-in-out">
                                                        <div class="flex items-center">{{ $page['name'] }}</div>
                                                        <x-base.lucide
                                                            class="ml-auto h-5 w-5 stroke-[1]"
                                                            icon="ArrowRight"
                                                        />
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full flex-col items-center"
                        id="frameworks"
                    >
                        <div @class([
                            'text-3xl font-medium relative',
                            "before:content-[''] before:bg-gradient-to-b before:from-transparent before:via-slate-100/80 before:to-slate-100 before:inset-0 before:absolute before:h-[360%] before:w-[150%] before:-mt-[4.5rem] before:-ml-[25%]",
                        ])>
                            <div class="absolute inset-x-0 z-[-1] mx-auto -mt-36 h-48 w-48 rounded-full">
                                <div
                                    class="absolute inset-y-0 my-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute inset-x-0 bottom-0 mx-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-0 my-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 mx-auto h-1/2 w-1/2 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.05]">
                                </div>
                            </div>
                            <div class="z-5 relative text-center text-theme-1">
                                Tools & Frameworks
                            </div>
                        </div>
                        <div class="z-5 relative mt-4 text-center text-base text-slate-500/80">
                            Dual-tone magic, enhance your design with two brilliant color
                            schemes!
                        </div>
                        <div class="-mx-2.5 mt-10 px-20">
                            <div class="flex w-full flex-wrap justify-center gap-y-8">
                                <div class="w-1/3 px-2.5">
                                    <div class="box box--stacked flex flex-col items-center p-5">
                                        <div class="h-12 w-12">
                                            <img src="{{ Vite::asset('resources/images/frameworks/tailwindcss.png') }}" />
                                        </div>
                                        <div class="mt-4 text-base font-medium">TailwindCSS 3</div>
                                        <div class="mt-2 pb-2 text-center leading-relaxed text-slate-500">
                                            TailwindCSS 3 introduces the newest features and enhancements,
                                            further expanding the capabilities of the popular
                                            utility-first CSS framework.
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2.5">
                                    <div class="box box--stacked flex flex-col items-center p-5">
                                        <div class="h-12 w-12">
                                            <img src="{{ Vite::asset('resources/images/frameworks/vite.png') }}" />
                                        </div>
                                        <div class="mt-4 text-base font-medium">Vite 3</div>
                                        <div class="mt-2 pb-2 text-center leading-relaxed text-slate-500">
                                            Vite 3 is the latest iteration of the Vite JavaScript build
                                            tool, bringing a range of performance improvements and new
                                            features to accelerate your development process.
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2.5">
                                    <div class="box box--stacked flex flex-col items-center p-5">
                                        <div class="h-12 w-12">
                                            <img src="{{ Vite::asset('resources/images/frameworks/postcss.png') }}" />
                                        </div>
                                        <div class="mt-4 text-base font-medium">PostCSS</div>
                                        <div class="mt-2 pb-2 text-center leading-relaxed text-slate-500">
                                            PostCSS is a tool for transforming CSS with JavaScript
                                            plugins. These plugins can lint your CSS, support variables
                                            and mixins, transpile future CSS syntax, inline images, and
                                            more.
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2.5">
                                    <div class="box box--stacked flex flex-col items-center p-5">
                                        <div class="h-12 w-12">
                                            <img src="{{ Vite::asset('resources/images/frameworks/chartjs.png') }}" />
                                        </div>
                                        <div class="mt-4 text-base font-medium">ChartJs</div>
                                        <div class="mt-2 pb-2 text-center leading-relaxed text-slate-500">
                                            Chart.js is a JavaScript library that allows you to create
                                            various types of charts and graphs on web pages. It is an
                                            easy-to-use and flexible library that supports different chart
                                            types.
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2.5">
                                    <div class="box box--stacked flex flex-col items-center p-5">
                                        <div class="h-12 w-12">
                                            <img src="{{ Vite::asset('resources/images/frameworks/ckeditor.png') }}" />
                                        </div>
                                        <div class="mt-4 text-base font-medium">CKEditor</div>
                                        <div class="mt-2 pb-2 text-center leading-relaxed text-slate-500">
                                            CKEditor is a popular rich text editor for the web, known for
                                            its flexibility and feature-rich capabilities. It allows users
                                            to create and edit content with a wide range of formatting
                                            options.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mt-24 w-full px-20">
                        <div class="box box--stacked p-1">
                            <div @class([
                                'relative px-20 py-20 overflow-hidden bg-gradient-to-b from-theme-1 to-theme-2 rounded-[0.6rem]',
                                "after:content-[''] after:h-full after:w-full after:ease-in-out after:duration-300 after:top-0 after:absolute after:left-0 after:bg-texture-white after:bg-contain after:bg-[center_-5rem] after:bg-no-repeat",
                            ])>
                                <div class="relative z-10 w-96">
                                    <div class="text-xl font-medium text-white">
                                        Why Choose Tailwise
                                    </div>
                                    <div class="mt-4 text-base leading-relaxed text-white/70">
                                        Discover the power of Tailwise, the efficient and
                                        user-friendly admin template that elevates your project to
                                        new heights. With a perfect blend of innovation and
                                        functionality, Tailwise offers the ultimate solution for a
                                        seamless and delightful development experience.
                                    </div>
                                    <a href="/">
                                        <x-base.button
                                            class="mt-7 border-white/[0.15] bg-white/5 px-8 py-2.5"
                                            variant="primary"
                                            rounded
                                        >
                                            View Demo
                                        </x-base.button>
                                    </a>
                                </div>
                                <div
                                    class="box absolute right-0 top-0 -mr-[23%] -mt-10 h-[120%] w-3/4 -rotate-[9deg] overflow-hidden rounded-[0.6rem] p-1">
                                    <img
                                        class="h-full w-full rounded-[0.6rem]"
                                        src="{{ Vite::asset(
                                            'resources/images/themes/' .
                                                ['echo', 'hurricane', 'ravage', 'hook', 'razor', 'havoc', 'dagger', 'shuriken', 'raze', 'exort', 'viper'][
                                                    mt_rand(0, 10)
                                                ] .
                                                '.png',
                                        ) }}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full flex-col items-center"
                        id="pricing"
                    >
                        <div @class([
                            'text-3xl font-medium relative',
                            "before:content-[''] before:bg-gradient-to-b before:from-transparent before:via-slate-100/80 before:to-slate-100 before:inset-0 before:absolute before:h-[360%] before:w-[150%] before:-mt-[4.5rem] before:-ml-[25%]",
                        ])>
                            <div
                                class="absolute inset-x-0 z-[-1] mx-auto -mt-[5.5rem] flex h-36 w-36 items-center justify-center rounded-full border border-theme-1/[0.13]">
                                <div class="h-16 w-16 rounded-full border border-theme-1/20"></div>
                                <div
                                    class="absolute -ml-52 -mt-10 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -ml-36 -mt-40 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mt-[13rem] h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mr-36 -mt-40 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                                <div
                                    class="absolute -mr-52 -mt-10 h-10 w-10 rounded-full border border-theme-1/[0.13] bg-gradient-to-b from-transparent to-theme-1/[0.03]">
                                </div>
                            </div>
                            <div class="z-5 relative text-center text-theme-1">
                                Pricing Plans
                            </div>
                        </div>
                        <div class="z-5 relative mt-4 text-center text-base text-slate-500/80">
                            Discover a spectrum of styles, 11 captivating theme variants at
                            your fingertips!
                        </div>
                        <div class="mt-10 flex w-full gap-7 px-24">
                            <div class="box box--stacked flex w-full">
                                <div class="w-full pt-[137px]">
                                    <div class="px-5 py-5">
                                        <div class="flex items-center rounded-md bg-slate-100/60 px-5 py-4 font-medium">
                                            Number of end products
                                        </div>
                                        <div class="rounded-md px-5 py-4 font-medium">
                                            Use in a single end product
                                        </div>
                                        <div class="flex items-center rounded-md bg-slate-100/60 px-5 py-4 font-medium">
                                            Use in a free end product
                                            <x-base.tippy
                                                as="a"
                                                content="More than one end user allowed"
                                            >
                                                <x-base.lucide
                                                    class="ml-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Info"
                                                />
                                            </x-base.tippy>
                                        </div>
                                        <div class="rounded-md px-5 py-4 font-medium">
                                            Use in an end product that's sold
                                        </div>
                                        <div class="flex items-center rounded-md bg-slate-100/60 px-5 py-4 font-medium">
                                            On-demand products/services
                                            <x-base.tippy
                                                as="a"
                                                content="E.g. 'made to order' or 'create your own' apps and sites"
                                            >
                                                <x-base.lucide
                                                    class="ml-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Info"
                                                />
                                            </x-base.tippy>
                                        </div>
                                        <div class="rounded-md px-5 py-4 font-medium">
                                            Use in stock items/templates
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-72 flex-none flex-col border-l border-dashed p-5">
                                    <div class="flex flex-col items-center gap-4 border-b border-dashed pb-6 pt-3">
                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 text-primary"
                                                icon="Zap"
                                            />
                                        </div>
                                        <div class="text-base font-medium">Regular License</div>
                                    </div>
                                    <div class="mb-5 flex flex-col items-center border-b border-dashed py-5">
                                        <div class="flex w-full justify-center rounded-md bg-slate-100/60 py-3.5">
                                            <div
                                                class="flex h-6 items-center justify-center px-10 text-center text-xs font-medium">
                                                <div class="-mt-0.5">1</div>
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-primary bg-primary/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="Check"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md bg-slate-100/60 py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-primary bg-primary/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="Check"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-danger bg-danger/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="X"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md bg-slate-100/60 py-3.5">
                                            <div
                                                class="flex h-6 items-center justify-center px-10 text-center text-xs font-medium">
                                                <div class="-mt-0.5">
                                                    One license per each customized end product
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-danger bg-danger/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="X"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center text-2xl font-medium">$12</div>
                                    <x-base.button
                                        class="mt-5"
                                        href="https://themeforest.net/item/tailwise-html-admin-dashboard-template/49921289"
                                        as="a"
                                        target="_blank"
                                        rounded
                                        variant="primary"
                                    >
                                        Choose
                                    </x-base.button>
                                </div>
                                <div class="flex w-72 flex-none flex-col border-l border-dashed p-5">
                                    <div class="flex flex-col items-center gap-4 border-b border-dashed pb-6 pt-3">
                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 text-primary"
                                                icon="ShieldCheck"
                                            />
                                        </div>
                                        <div class="text-base font-medium">
                                            Extended License
                                        </div>
                                    </div>
                                    <div class="mb-5 flex flex-col items-center border-b border-dashed py-5">
                                        <div class="flex w-full justify-center rounded-md bg-slate-100/60 py-3.5">
                                            <div
                                                class="flex h-6 items-center justify-center px-10 text-center text-xs font-medium">
                                                <div class="-mt-0.5">1</div>
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-primary bg-primary/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="Check"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md bg-slate-100/60 py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-primary bg-primary/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="Check"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-primary bg-primary/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="Check"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md bg-slate-100/60 py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-danger bg-danger/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="X"
                                                />
                                            </div>
                                        </div>
                                        <div class="flex w-full justify-center rounded-md py-3.5">
                                            <div
                                                class="flex h-6 w-6 items-center justify-center rounded-full border border-danger bg-danger/80">
                                                <x-base.lucide
                                                    class="h-3.5 w-3.5 stroke-[2] text-white"
                                                    icon="X"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center text-2xl font-medium">$799</div>
                                    <x-base.button
                                        class="mt-5"
                                        href="https://themeforest.net/item/tailwise-intuitive-tailwind-dashboard-kit/48659596"
                                        as="a"
                                        target="_blank"
                                        rounded
                                        variant="primary"
                                    >
                                        Choose
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

@pushOnce('styles')
    @vite('resources/css/pages/landing-page.css')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/pages/landing-page.js')
@endPushOnce
