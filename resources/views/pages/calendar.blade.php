@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Calendar
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="CopyPlus"
                        />
                        Add New Schedule
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
                                            icon="Send"
                                        />
                                        Upcoming
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
                                        Invite
                                    </x-base.tab.button>
                                </x-base.tab>
                            </x-base.tab.list>
                        </div>
                        <x-base.tab.panels>
                            <x-base.tab.panel
                                id="example-1"
                                selected
                            >
                                <x-base.calendar.draggable
                                    class="flex flex-col gap-y-6"
                                    id="calendar-events"
                                >
                                    @foreach ($events->take(5) as $fakerKey => $faker)
                                        <div
                                            class="event box box--stacked relative flex cursor-move items-center gap-3.5 p-5">
                                            <div>
                                                <div
                                                    class="image-fit h-[4.5rem] w-[4.5rem] overflow-hidden rounded-2xl border-[3px] border-slate-200/70">
                                                    <img
                                                        src="{{ Vite::asset($faker['image']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    >
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="event__title max-w-[7rem] truncate font-medium text-primary md:max-w-[12rem]">
                                                    {{ $faker['title'] }}
                                                </div>
                                                <div
                                                    class="mt-1 max-w-[7rem] truncate leading-relaxed text-slate-500 md:max-w-[12rem]">
                                                    {{ $faker['description'] }}
                                                </div>
                                                <div class="mt-1 text-slate-500">
                                                    <span class="event__days">
                                                        {{ mt_rand(2, 5) }}
                                                    </span>
                                                    Days <span class="mx-1">•</span> 09:30 AM
                                                </div>
                                            </div>
                                            <x-base.menu
                                                class="absolute inset-y-0 right-0 my-auto mr-5 h-5 w-5 group-[.right]:left-0 group-[.right]:-ml-8"
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
                                                        />
                                                        Copy Link
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
                                    <div
                                        class="hidden p-3 text-center text-slate-500"
                                        id="calendar-no-events"
                                    >
                                        No events yet
                                    </div>
                                </x-base.calendar.draggable>
                            </x-base.tab.panel>
                        </x-base.tab.panels>
                    </x-base.tab.group>
                </div>
                <div class="flex w-full flex-col gap-y-7">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-calendar />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
