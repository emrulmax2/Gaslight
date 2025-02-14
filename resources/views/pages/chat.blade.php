@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Chat
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="MessagesSquare"
                        />
                        Start a New Chat
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="Cog"
                        /> Chat
                        Settings
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-x-6 gap-y-10 lg:flex-row">
                <div class="w-full flex-none lg:w-[23rem]">
                    <x-base.tab.group class="flex flex-col gap-y-7">
                        <div class="box box--stacked flex flex-col p-2">
                            <x-base.tab.list
                                class="border-transparent bg-transparent"
                                variant="boxed-tabs"
                            >
                                <x-base.tab
                                    class="first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:border-primary/[0.15] [&[aria-selected='true']_button]:bg-primary/[0.04] [&[aria-selected='true']_button]:font-medium [&[aria-selected='true']_button]:text-current [&[aria-selected='true']_button]:text-primary [&[aria-selected='true']_button]:shadow-sm"
                                    id="example-1-tab"
                                    selected
                                >
                                    <x-base.tab.button
                                        class="flex w-full items-center justify-center gap-2 whitespace-nowrap rounded-[0.6rem] py-3 text-slate-500"
                                        as="button"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 stroke-[1.4]"
                                            icon="MessagesSquare"
                                        />
                                        Chats
                                        <span
                                            class="flex min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs"
                                        >
                                            <span
                                                class="block h-full w-full rounded-full bg-theme-1/[0.75] px-1.5 py-0.5 leading-none text-white"
                                            >
                                                {{ mt_rand(5, 15) }}
                                            </span>
                                        </span>
                                    </x-base.tab.button>
                                </x-base.tab>
                                <x-base.tab
                                    class="first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:border-primary/[0.15] [&[aria-selected='true']_button]:bg-primary/[0.04] [&[aria-selected='true']_button]:font-medium [&[aria-selected='true']_button]:text-current [&[aria-selected='true']_button]:text-primary [&[aria-selected='true']_button]:shadow-sm"
                                    id="example-2-tab"
                                >
                                    <x-base.tab.button
                                        class="flex w-full items-center justify-center gap-2 whitespace-nowrap rounded-[0.6rem] py-3 text-slate-500"
                                        as="button"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 stroke-[1.4]"
                                            icon="UserPlus"
                                        />
                                        Contacts
                                    </x-base.tab.button>
                                </x-base.tab>
                            </x-base.tab.list>
                        </div>
                        <div class="box box--stacked flex flex-col p-5">
                            <x-base.tab.panels>
                                <x-base.tab.panel
                                    id="example-1"
                                    selected
                                >
                                    <div class="">
                                        <div class="relative">
                                            <x-base.lucide
                                                class="absolute inset-y-0 left-0 z-10 my-auto ml-4 h-4 w-4 stroke-[1.3] text-slate-500/90"
                                                icon="Search"
                                            />
                                            <x-base.form-input
                                                class="py-2.5 pl-10"
                                                type="text"
                                                rounded
                                                placeholder="Search for messages..."
                                            />
                                        </div>
                                        <div class="mt-4 flex flex-col gap-1">
                                            @foreach ($messages as $fakerKey => $faker)
                                                <div
                                                    class="-mx-2 flex cursor-pointer items-center gap-4 rounded-lg px-2 py-2.5 hover:bg-slate-50">
                                                    <div class="relative">
                                                        <div
                                                            class="image-fit h-12 w-12 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img
                                                                src="{{ Vite::asset($faker['sender']['photo']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                        @if (mt_rand(0, 1) == 0)
                                                            <div
                                                                class="absolute left-0 top-0 ml-0.5 mt-0.5 h-2.5 w-2.5 rounded-full border border-white bg-success/80">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="w-full">
                                                        <div class="flex w-full items-center">
                                                            <div class="max-w-[7rem] truncate font-medium md:max-w-[8rem]">
                                                                {{ $faker['sender']['name'] }}
                                                            </div>
                                                            <div class="ml-auto flex items-center gap-2">
                                                                @if (mt_rand(0, 1) == 0)
                                                                    <x-base.lucide
                                                                        class="h-3.5 w-3.5 stroke-[1.4] text-slate-500/90"
                                                                        icon="CheckCheck"
                                                                    />
                                                                @endif
                                                                <div class="text-xs text-slate-500/90">
                                                                    {{ $faker['time'] }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div
                                                                class="max-w-[7rem] truncate text-slate-500/90 md:max-w-[10rem]">
                                                                {{ $faker['content'] }}
                                                            </div>
                                                            <div class="ml-auto flex items-center gap-2">
                                                                @if (mt_rand(0, 2) == 0)
                                                                    <div
                                                                        class="flex min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs">
                                                                        <div
                                                                            class="h-full w-full rounded-full bg-theme-1/[0.75] px-1.5 py-0.5 leading-none text-white">
                                                                            {{ mt_rand(1, 5) }}
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if (mt_rand(0, 1) == 0)
                                                                    <x-base.lucide
                                                                        class="h-3.5 w-3.5 rotate-45 fill-slate-500/10 stroke-[1] text-slate-500"
                                                                        icon="Pin"
                                                                    />
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </x-base.tab.panel>
                            </x-base.tab.panels>
                        </div>
                    </x-base.tab.group>
                </div>
                <div class="flex w-full flex-col gap-y-7">
                    <div class="box box--stacked flex flex-col p-5">
                        <div class="flex items-center gap-3.5 border-b border-dashed pb-5">
                            <div>
                                <div
                                    class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="max-w-[9rem] truncate font-medium md:max-w-none">
                                    {{ $users[0]['name'] }}
                                </div>
                                <div class="mt-0.5 max-w-[9rem] truncate text-slate-500 md:max-w-none">
                                    {{ $users[0]['position'] }}
                                </div>
                            </div>
                            <div class="ml-auto flex gap-2">
                                <x-base.tippy
                                    class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/30 bg-primary/5"
                                    as="a"
                                    content="Call"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 text-primary"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/30 bg-primary/5"
                                    as="a"
                                    content="Send a message"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 text-primary"
                                        icon="Mail"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                        <div @class([
                            'scrollable-ref h-[46.6rem] -mx-3 overflow-y-auto [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent',
                            '[&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/20',
                        ])>
                            <div class="flex flex-col gap-3.5 px-3 py-5">
                                @foreach ($messages->take(9) as $fakerKey => $faker)
                                    <div @class([
                                        'max-w-[85%] sm:max-w-none relative mr-auto group [&.right]:mr-0 [&.right]:ml-auto flex items-end gap-3 [&.right]:flex-row-reverse',
                                        'right' => [0, 0, 1, 1, 1][mt_rand(0, 4)],
                                    ])>
                                        <div class="hidden sm:block">
                                            <div
                                                class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                <img
                                                    src="{{ Vite::asset($users[0]['photo']) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="rounded-r-xl rounded-tl-xl border border-slate-200/80 bg-slate-50/80 px-4 pb-4 pt-3 group-[.right]:rounded-l-xl group-[.right]:rounded-br-none group-[.right]:text-right">
                                            <div>{{ $faker['content'] }}</div>
                                            @if (mt_rand(0, 1) == 0)
                                                @if (mt_rand(0, 1))
                                                    <div
                                                        class="mb-3 mt-3.5 flex items-center gap-3 group-[.right]:justify-end">
                                                        <x-base.tippy
                                                            class="flex h-6 w-6 items-center justify-center rounded-full bg-primary/80"
                                                            as="a"
                                                            content="Play"
                                                        >
                                                            <x-base.lucide
                                                                class="-mr-0.5 h-3 w-3 fill-white/80"
                                                                icon="Play"
                                                            />
                                                        </x-base.tippy>
                                                        <div class="flex h-6 items-center gap-0.5">
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
                                                        <x-base.tippy
                                                            class="flex items-center justify-center gap-1 rounded-md border border-theme-1/30 bg-theme-1/5 py-px pl-1 pr-1.5 text-xs text-primary/90"
                                                            as="a"
                                                            content="Call"
                                                        >
                                                            <x-base.lucide
                                                                class="h-3.5 w-3.5 fill-white/80 stroke-[1.3]"
                                                                icon="MoveRight"
                                                            />
                                                            A
                                                        </x-base.tippy>
                                                    </div>
                                                @else
                                                    <div
                                                        class="image-fit mb-4 mt-3 h-32 w-64 overflow-hidden rounded-lg group-[.right]:ml-auto">
                                                        <x-base.image-zoom
                                                            class="rounded-lg border p-0.5 saturate-150"
                                                            src="{{ Vite::asset($projectDetails[0]['image']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                @endif
                                            @endif
                                            <div class="mt-4 flex items-center gap-10 group-[.right]:flex-row-reverse">
                                                <div
                                                    class="mr-auto flex items-center gap-2 group-[.right]:ml-auto group-[.right]:mr-0 group-[.right]:flex-row-reverse">
                                                    <div class="text-xs text-slate-500/70">
                                                        {{ $faker['time'] }}
                                                    </div>
                                                    <div class="flex items-center gap-1">
                                                        <x-base.lucide
                                                            class="h-3.5 w-3.5 fill-slate-100 stroke-[1] text-slate-500/80"
                                                            icon="Eye"
                                                        />
                                                        <div class="text-xs text-slate-500/70">
                                                            {{ mt_rand(1, 7) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="image-fit zoom-in h-5 w-5">
                                                        <x-base.tippy
                                                            class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                            src="{{ Vite::asset($users[0]['photo']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            content="{{ $users[0]['name'] }}"
                                                            as="img"
                                                        />
                                                    </div>
                                                    <div class="image-fit zoom-in -ml-0.5 h-5 w-5">
                                                        <x-base.tippy
                                                            class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                            src="{{ Vite::asset($users[1]['photo']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            content="{{ $users[1]['name'] }}"
                                                            as="img"
                                                        />
                                                    </div>
                                                    <div class="image-fit zoom-in -ml-0.5 h-5 w-5">
                                                        <x-base.tippy
                                                            class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                            src="{{ Vite::asset($users[2]['photo']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            content="{{ $users[2]['name'] }}"
                                                            as="img"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <x-base.menu
                                            class="absolute inset-y-0 right-0 my-auto -mr-8 h-5 w-5 group-[.right]:left-0 group-[.right]:-ml-8"
                                        >
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
                                @endforeach
                            </div>
                        </div>
                        <div class="relative">
                            <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Type a message..."
                            />
                            <div class="absolute inset-y-0 right-0 flex w-[3.8rem] items-center justify-center">
                                <a
                                    class="box flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border-transparent bg-gradient-to-b from-theme-1/90 to-theme-2/90"
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
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/vendors/simplebar.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/simplebar.js')
@endPushOnce
