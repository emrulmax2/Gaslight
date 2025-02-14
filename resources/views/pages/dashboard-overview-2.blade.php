@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <x-base.tab.group>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Project Statistic
                    </div>
                    <x-base.tab.list
                        class="box w-auto rounded-[0.6rem] border-slate-200 bg-white group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] md:ml-auto"
                        variant="boxed-tabs"
                    >
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]"
                            id="example-1-tab"
                            selected
                        >
                            <x-base.tab.button
                                class="w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24"
                                as="button"
                            >
                                Daily
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]"
                            id="example-2-tab"
                        >
                            <x-base.tab.button
                                class="w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24"
                                as="button"
                            >
                                Monthly
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]"
                            id="example-3-tab"
                        >
                            <x-base.tab.button
                                class="w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24"
                                as="button"
                            >
                                Yearly
                            </x-base.tab.button>
                        </x-base.tab>
                    </x-base.tab.list>
                </div>
                <x-base.tab.panels class="box box--stacked mt-3.5">
                    <x-base.tab.panel
                        class="flex flex-col gap-2 p-1.5 leading-relaxed xl:flex-row"
                        id="example-1"
                        selected
                    >
                        <div class="grid w-full grid-cols-4 gap-2">
                            <div
                                class="box relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border-0 border-slate-200/60 bg-slate-50 bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5 before:absolute before:right-0 before:top-0 before:-mr-[62%] before:h-[130%] before:w-full before:rotate-45 before:bg-gradient-to-b before:from-black/[0.15] before:to-transparent before:content-[''] sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-white/10 text-white"
                                        icon="Database"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium text-white">
                                        247,220
                                    </div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/50 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        12%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronUp"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-white/70">
                                    Customer Engagement
                                </div>
                                <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-white/70 stroke-white/70"
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
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-primary/10 text-primary"
                                        icon="AppWindow"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">124,625</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        3%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Lead Generation
                                </div>
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
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-info/10 text-info"
                                        icon="Box"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">749,220</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        4%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronUp"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Support Tickets
                                </div>
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
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-primary/10 text-primary"
                                        icon="Layout"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">273,235</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        9%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronUp"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Pipeline Management
                                </div>
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
                        </div>
                        <a
                            class="flex flex-col items-center justify-center rounded-[0.6rem] border border-dashed border-slate-300/80 bg-slate-50 p-5 text-slate-400/80 hover:bg-slate-50 xl:w-20 [&:hover_svg]:rotate-180"
                            href=""
                        >
                            <x-base.lucide
                                class="h-6 w-6 transform transition-transform"
                                icon="PlusSquare"
                            />
                        </a>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        class="p-5 leading-relaxed"
                        id="example-2"
                    ></x-base.tab.panel>
                    <x-base.tab.panel
                        class="p-5 leading-relaxed"
                        id="example-3"
                    ></x-base.tab.panel>
                </x-base.tab.panels>
            </x-base.tab.group>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Contact Details</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div
                        class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                        <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                            <img
                                src="{{ Vite::asset($users[0]['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                            >
                        </div>
                        <div class="text-center sm:ml-4 sm:text-left">
                            <div class="text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                {{ $users[0]['position'] }}
                            </div>
                        </div>
                        <div
                            class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                            <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50"></div>
                            High priority
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3 text-center sm:flex-row">
                        <div class="flex-1 border-dashed last:border-0 sm:border-r">
                            <div class="text-slate-500">Leads Generated</div>
                            <div class="mt-1 flex items-center justify-center">
                                <div class="text-base font-medium">2,176</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    11%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 border-dashed last:border-0 sm:border-r">
                            <div class="text-slate-500">Deals Closed</div>
                            <div class="mt-1 flex items-center justify-center">
                                <div class="text-base font-medium">2,027</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    2%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 border-dashed last:border-0 sm:border-r">
                            <div class="text-slate-500">Meetings Scheduled</div>
                            <div class="mt-1 flex items-center justify-center">
                                <div class="text-base font-medium">342</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                    4%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Invite Team Member</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                        <div>Everyone at project can access this file</div>
                        <div class="relative mt-3">
                            <x-base.form-input
                                class="sm:py-3"
                                type="text"
                                placeholder="everyone@gmail.com"
                            />
                            <x-base.button
                                class="inset-y-0 right-0 my-auto mr-2 mt-2 h-9 w-full border-primary/20 bg-primary/10 pl-3.5 pr-4 text-primary hover:bg-primary/20 sm:absolute sm:mt-auto sm:h-8 sm:w-auto"
                                variant="primary"
                                size="sm"
                            >
                                <x-base.lucide
                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                    icon="Send"
                                />
                                Send Invitation
                            </x-base.button>
                        </div>
                    </div>
                    <div class="mb-5 flex flex-col gap-5 border-b border-dashed border-slate-300/70 pb-5">
                        @foreach ($users->take(5) as $fakerKey => $faker)
                            <div class="flex items-center gap-3.5">
                                <div>
                                    <div
                                        class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($faker['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                </div>
                                <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                    <div>
                                        <div class="font-medium">{{ $faker['name'] }}</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            {{ $faker['email'] }}
                                        </div>
                                    </div>
                                    <div class="relative sm:ml-auto">
                                        <x-base.lucide
                                            class="absolute inset-y-0 my-auto ml-2.5 h-3.5 w-3.5 stroke-[1.2]"
                                            icon="Settings"
                                        />
                                        <x-base.form-select
                                            class="bg-[length:15px_auto] py-1.5 pl-8 pr-2.5 text-xs sm:w-48"
                                        >
                                            @foreach ($users->take(5) as $fakerKey => $faker)
                                                <option value="{{ $faker['position'] }}">
                                                    {{ $faker['position'] }}
                                                </option>
                                            @endforeach
                                        </x-base.form-select>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <div>Share invitation link</div>
                        <div class="mt-3 flex gap-3">
                            <x-base.form-input
                                class="text-slate-500"
                                type="text"
                                value="https://left4code.com/invitation?token=abcdefgh12345678"
                                placeholder="everyone@gmail.com"
                                disabled
                            />
                            <x-base.tippy
                                content="Copy link"
                                as="x-base.button"
                                variant="outline-secondary"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.5]"
                                    icon="Copy"
                                />
                            </x-base.tippy>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Team Collaboration</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                        <div>Collaboration progress report</div>
                        <div
                            class="mt-3 flex w-full items-center rounded-lg border border-success/10 bg-success/10 px-3 py-3 text-success">
                            <x-base.lucide
                                class="mr-2 h-5 w-5"
                                icon="Clock"
                            />
                            Project kick-off date:
                            <div class="ml-2">{{ $projects[0]['dueDate'] }}</div>
                        </div>
                        <div class="mt-5 flex flex-col gap-4">
                            <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                <div class="text-slate-500 sm:w-36">Project Name</div>
                                <div class="flex items-center font-medium sm:ml-5 sm:h-7">
                                    {{ $projects[0]['projectName'] }}
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                <div class="text-slate-500 sm:w-36">Project Manager</div>
                                <div class="flex h-5 items-center sm:ml-5">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($projects[0]['projectManager']['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                    <div
                                        class="ml-2.5 underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                        {{ $projects[0]['projectManager']['name'] }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                <div class="text-slate-500 sm:w-36">
                                    Creative Director
                                </div>
                                <div class="flex items-center sm:ml-5 sm:h-7">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($projects[1]['projectManager']['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                    <div
                                        class="ml-2.5 underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                        {{ $projects[1]['projectManager']['name'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="flex w-full items-center rounded-lg border bg-slate-50 px-3 py-3 font-medium text-slate-500">
                            <x-base.lucide
                                class="mr-2 h-5 w-5 stroke-[1.3]"
                                icon="KanbanSquare"
                            />
                            Project Details for Team Members
                            <x-base.menu class="ml-auto">
                                <x-base.menu.button as="a">
                                    <x-base.lucide
                                        class="h-5 w-5 fill-slate-500/70 stroke-slate-500/70"
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
                        </div>
                        <div class="mt-3 flex flex-col gap-3">
                            @foreach ($projectDetails->take(4) as $fakerKey => $faker)
                                <div
                                    class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">
                                    <div class="absolute right-0 top-0 mr-3 mt-3">
                                        <x-base.form-check.input
                                            class="border"
                                            type="checkbox"
                                            checked="{{ [true, false][mt_rand(0, 1)] }}"
                                        />
                                    </div>
                                    <div>
                                        <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                                            <img
                                                class="rounded-md saturate-[0.7]"
                                                src="{{ Vite::asset($faker['image']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                    </div>
                                    <div class="-mt-1">
                                        <a
                                            class="block text-center font-medium sm:text-left"
                                            href=""
                                        >
                                            {{ $faker['title'] }}
                                        </a>
                                        <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                            <x-base.lucide
                                                class="mr-1.5 h-2.5 w-2.5 stroke-[2]"
                                                icon="Link"
                                            />
                                            <a
                                                class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                                                href=""
                                            >
                                                {{ $faker['link'] }}
                                            </a>
                                        </div>
                                        <div class="mt-4 flex items-center justify-center sm:justify-start">
                                            <div class="flex">
                                                <div class="image-fit zoom-in h-6 w-6">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['contributors'][0]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                        as="img"
                                                        content="{{ $faker['contributors'][0]['name'] }}"
                                                    />
                                                </div>
                                                <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['contributors'][1]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                        as="img"
                                                        content="{{ $faker['contributors'][1]['name'] }}"
                                                    />
                                                </div>
                                                <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['contributors'][2]['photo']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                        as="img"
                                                        content="{{ $faker['contributors'][2]['name'] }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="ml-3 text-xs text-slate-500">
                                                4+ Members
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
