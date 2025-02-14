@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Dynamic
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div
                            class="image-fit h-48 overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/60 before:to-theme-2/5">
                            <img
                                class="rounded-md saturate-150"
                                src="{{ Vite::asset('resources/images/miscellaneous/robot.jpg') }}"
                                alt="Tailwise - Admin Dashboard Template"
                            >
                        </div>
                        <div class="mt-5 text-base font-medium">
                            {{ $events[0]['title'] }}
                        </div>
                        <div class="mt-1.5 flex items-center gap-1">
                            <div class="flex items-center gap-1.5">
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                    icon="MapPin"
                                />
                                <div class="max-w-[7rem] truncate text-slate-500 md:max-w-[9rem]">
                                    {{ $events[0]['location'] }}
                                </div>
                            </div>
                            <div class="mx-1.5 h-1 w-1 rounded-full bg-slate-300"></div>
                            <div class="flex items-center gap-1.5">
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                    icon="Users"
                                />
                                <div class="max-w-[7rem] truncate text-slate-500 md:max-w-[9rem]">
                                    By {{ $events[0]['organizer'] }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 ml-auto mt-4 flex gap-2">
                            <x-base.tippy
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.35]"
                                as="a"
                                content="{{ mt_rand(50, 100) . ' Attendees' }}"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 text-primary"
                                    icon="Users"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.35]"
                                as="a"
                                content="{{ mt_rand(100, 150) . ' Available Seats' }}"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 text-primary"
                                    icon="RockingChair"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.35]"
                                as="a"
                                content="{{ $events[0]['date'] . ', ' . $events[0]['time'] }}"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 text-primary"
                                    icon="Clock10"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.35]"
                                as="a"
                                content="Call Support"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 text-primary"
                                    icon="Phone"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.35]"
                                as="a"
                                content="Send a Message"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 text-primary"
                                    icon="Mail"
                                />
                            </x-base.tippy>
                        </div>
                        <div class="flex items-center border-t border-dashed pt-5">
                            <a
                                class="flex items-center gap-2"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                    icon="MessageSquare"
                                />
                                <div class="text-primary">
                                    {{ mt_rand(210, 250) }} Comments
                                </div>
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3] text-primary"
                                    icon="ChevronDown"
                                />
                            </a>
                            <a
                                class="ml-auto"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-pending/30 stroke-[1] text-pending"
                                    icon="Heart"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center">
                            <div class="relative h-40 w-40">
                                <div
                                    class="image-fit h-40 w-40 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <x-base.lucide
                                    class="box absolute left-0 top-0 -ml-2.5 mt-7 h-9 w-9 rounded-full bg-white/[0.95] fill-primary/10 stroke-[1.3] p-2 text-primary"
                                    icon="CheckCheck"
                                />
                                <x-base.lucide
                                    class="box absolute bottom-0 right-0 -mr-2.5 mb-7 h-9 w-9 rounded-full bg-white/[0.95] fill-primary/10 stroke-[1.3] p-2 text-primary"
                                    icon="Zap"
                                />
                            </div>
                            <div class="mt-3.5 text-slate-500">Welcome Back</div>
                            <div class="mt-0.5 text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <x-base.button
                                class="mt-5 w-full"
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
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="text-base font-medium">
                                    {{ $messages[0]['sender']['name'] }}
                                </div>
                                <div class="mt-0.5 text-slate-500">
                                    {{ $messages[0]['content'] }}
                                </div>
                            </div>
                            <a
                                class="ml-auto"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-5 w-5 stroke-[1.3] text-slate-500"
                                    icon="ChevronDown"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center">
                            <div class="flex items-center gap-3.5">
                                <div>
                                    <div
                                        class="image-fit h-9 w-9 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($users[0]['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                </div>
                                <div>
                                    Event by
                                    <a
                                        class="text-primary"
                                        href=""
                                    >
                                        {{ $events[0]['organizer'] }}
                                    </a>
                                </div>
                            </div>
                            <a
                                class="ml-auto"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3] text-slate-500"
                                    icon="Maximize2"
                                />
                            </a>
                        </div>
                        <div class="mt-3 flex flex-col items-center gap-5 border-t border-dashed pt-5">
                            <div
                                class="image-fit h-48 w-full overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/60 before:to-theme-2/5">
                                <img
                                    class="rounded-md saturate-150"
                                    src="{{ Vite::asset('resources/images/miscellaneous/robot.jpg') }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                            <div class="w-full">
                                <div class="text-base font-medium">
                                    Cyber Rush Spectacular
                                </div>
                                <div class="mt-2 text-slate-500">
                                    Experience the sensational 12.12 Cyber Rush! Discover
                                    remarkable discounts and exclusive offers across a variety
                                    of products. Elevate your lifestyle without overspending.
                                </div>
                            </div>
                        </div>
                        <div class="box mt-7 flex flex-col overflow-hidden rounded-xl">
                            <div class="flex items-center bg-slate-50 p-5">
                                <div class="font-medium text-slate-500">04:30 PM</div>
                                <a
                                    class="ml-auto flex items-center gap-1.5 text-primary"
                                    href=""
                                >
                                    <x-base.lucide
                                        class="h-3.5 w-3.5 stroke-[1.3]"
                                        icon="Pencil"
                                    />
                                    Update Event
                                </a>
                            </div>
                            <div class="w-full border-t border-dashed"></div>
                            <div class="flex items-center p-5">
                                <div class="font-medium">04:25:40</div>
                                <div
                                    class="ml-2.5 flex items-center rounded-md border border-primary/10 bg-primary/10 px-1.5 py-px text-xs font-medium text-primary">
                                    <span class="-mt-px">Event Started</span>
                                </div>
                                <x-base.tippy
                                    class="box ml-auto flex h-7 w-7 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/5"
                                    as="a"
                                    content="Pause"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 stroke-[0.8] text-primary"
                                        icon="Pause"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="text-base font-medium">
                                    {{ $messages[0]['sender']['name'] }}
                                </div>
                                <div class="mt-1 flex items-center gap-2 leading-relaxed text-slate-500">
                                    Are you open for a project?
                                    <br>
                                    Can I get the price list, please.
                                </div>
                            </div>
                            <div class="ml-auto truncate text-xs text-slate-500/90">
                                {{ $messages[0]['time'] }}
                            </div>
                        </div>
                        <div class="mt-3 flex items-center justify-end gap-3 border-t border-dashed pt-3">
                            <a
                                class="text-slate-500"
                                href=""
                            >
                                Close
                            </a>
                            <a
                                class="text-primary"
                                href=""
                            >
                                Reply
                            </a>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="text-base font-medium">Color</div>
                        <div class="mt-0.5 text-slate-500">
                            Select your preferred color
                        </div>
                        <div class="flex gap-2">
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                    checked
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-blue-800 bg-blue-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-blue-800/50 bg-blue-800/40 text-blue-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-blue-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-red-800 bg-red-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-red-800/50 bg-red-800/40 text-red-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-green-800 bg-green-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-green-800/50 bg-green-800/40 text-green-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-green-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-yellow-800 bg-yellow-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-yellow-800/50 bg-yellow-800/40 text-yellow-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-yellow-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-orange-800 bg-orange-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-orange-800/50 bg-orange-800/40 text-orange-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-orange-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-amber-800 bg-amber-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-amber-800/50 bg-amber-800/40 text-amber-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-amber-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-cyan-800 bg-cyan-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-cyan-800/50 bg-cyan-800/40 text-cyan-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-cyan-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-teal-800 bg-teal-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-teal-800/50 bg-teal-800/40 text-teal-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-teal-800/10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div class="my-1 flex flex-col items-center">
                            <div>
                                <div
                                    class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div class="mt-3.5 text-base font-medium">Cancer</div>
                            <div class="mt-0.5 text-slate-500">My Chemical Romance</div>
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
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="text-base font-medium">
                                    Waiting confirmation...
                                </div>
                                <div class="mt-1 flex items-center gap-2 text-slate-500">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3]"
                                        icon="FileText"
                                    />
                                    <div>Annual_Report_2023.pdf</div>
                                </div>
                            </div>
                            <a
                                class="ml-auto"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-5 w-5 stroke-[1.3] text-slate-500"
                                    icon="ChevronDown"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="box box--stacked">
                        <div
                            class="box image-fit h-48 overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/60 before:to-theme-2/5">
                            <img
                                class="rounded-md saturate-150"
                                src="{{ Vite::asset('resources/images/miscellaneous/robot.jpg') }}"
                                alt="Tailwise - Admin Dashboard Template"
                            >
                        </div>
                        <div class="p-5">
                            <div class="text-base font-medium">
                                {{ $events[0]['title'] }}
                            </div>
                            <div class="mt-2 flex items-center gap-2 text-slate-500">
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3]"
                                    icon="Clock"
                                />
                                {{ $events[0]['date'] }}, {{ $events[0]['time'] }}
                            </div>
                            <div class="mt-1.5 flex items-center gap-2 text-slate-500">
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3]"
                                    icon="MapPin"
                                />
                                {{ $events[0]['location'] }}
                            </div>
                            <x-base.button
                                class="mt-5 w-full"
                                type="button"
                                variant="primary"
                                rounded
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="CreditCard"
                                />
                                Book Ticket
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
                            <div class="mt-0.5 text-slate-500">
                                {{ $users[0]['position'] }}
                            </div>
                            <div class="mt-5 flex gap-3.5">
                                <x-base.tippy
                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="{{ $users[0]['email'] }}"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="Mail"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="{{ $users[0]['name'] }}"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="MessageSquare"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="flex h-11 w-11 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="{{ $users[0]['phone'] }}"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center justify-center gap-10">
                            <x-base.tippy
                                class="box flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/5"
                                as="a"
                                content="Prev"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 stroke-[1.3] text-primary"
                                    icon="ChevronLeft"
                                />
                            </x-base.tippy>
                            <div class="flex flex-col items-center">
                                <div class="image-fit h-32 w-32 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div class="mt-3.5 text-base font-medium">
                                    {{ $users[0]['name'] }}
                                </div>
                                <div class="mt-0.5 text-slate-500">
                                    {{ $users[0]['department'] }}
                                </div>
                            </div>
                            <x-base.tippy
                                class="box flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/5"
                                as="a"
                                content="Next"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 fill-primary/5 stroke-[1.3] text-primary"
                                    icon="ChevronRight"
                                />
                            </x-base.tippy>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="mb-5 flex items-center border-b border-dashed pb-5">
                            <div class="text-[0.94rem] font-medium">Check Plan</div>
                            <a
                                class="ml-auto text-primary"
                                href=""
                            >
                                See All
                            </a>
                        </div>
                        <div class="mt-3.5 flex flex-col gap-2">
                            @foreach ($activities->take(5) as $fakerKey => $faker)
                                <div
                                    class="-mx-2 flex cursor-pointer items-center gap-3.5 rounded-lg px-2 py-1.5 transition-all hover:bg-slate-50">
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
                                            {{ $faker['activity'] }}
                                        </div>
                                        <div class="mt-1 text-xs text-slate-500">
                                            {{ $faker['activityDetails'] }}
                                        </div>
                                    </div>
                                    <div class="relative ml-auto h-7 w-7">
                                        <x-base.form-check.input
                                            class="peer absolute z-10 h-full w-full opacity-0"
                                            type="checkbox"
                                            value="checked"
                                        />
                                        <div
                                            class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                            <x-base.lucide
                                                class="h-3 w-3 stroke-[1.5]"
                                                icon="Check"
                                            />
                                        </div>
                                        <div
                                            class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-theme-1/10">
                                            <x-base.lucide
                                                class="h-3 w-3 stroke-[1.5]"
                                                icon="Plus"
                                            />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
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
                                                src="{{ Vite::asset($users[0]['photo']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="image-fit absolute left-0 -ml-2.5 h-6 w-6 overflow-hidden rounded-full border border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($users[0]['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                    <div
                                        class="image-fit absolute bottom-0 left-0 mb-2.5 ml-2.5 h-8 w-8 overflow-hidden rounded-full border border-slate-200/70">
                                        <img
                                            src="{{ Vite::asset($users[0]['photo']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
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
                                The gift that keeps on grooving. Subscribe to Music Box for
                                curated music surprises.
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
                        <div class="flex flex-wrap gap-2.5">
                            @foreach ($categories->take(5) as $fakerKey => $faker)
                                <a
                                    href=""
                                    @class([
                                        'px-3 py-1 border rounded-full bg-primary/5 border-primary/10 text-primary [&.active]:bg-primary/90 [&.active]:text-white',
                                        'active' => !$fakerKey,
                                    ])
                                >
                                    {{ $faker['name'] }}
                                </a>
                            @endforeach
                        </div>
                        <div class="mt-5 flex gap-1">
                            <div class="flex w-[66%] flex-col gap-1">
                                <div class="flex gap-1">
                                    <div
                                        class="image-fit relative flex h-24 w-1/2 cursor-pointer overflow-hidden rounded-md bg-slate-100 before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/30 before:via-theme-2/30 before:to-transparent">
                                        <img
                                            src="{{ Vite::asset($projectDetails[0]['image']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                    <div
                                        class="image-fit relative flex h-24 w-1/2 cursor-pointer overflow-hidden rounded-md bg-slate-100 before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/30 before:via-theme-2/30 before:to-transparent">
                                        <img
                                            src="{{ Vite::asset($projectDetails[1]['image']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                </div>
                                <div class="flex gap-1">
                                    <div
                                        class="image-fit relative flex w-1/2 cursor-pointer overflow-hidden rounded-md bg-slate-100 before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/30 before:via-theme-2/30 before:to-transparent">
                                        <img
                                            src="{{ Vite::asset($projectDetails[2]['image']) }}"
                                            alt="Tailwise - Admin Dashboard Template"
                                        >
                                    </div>
                                    <div class="flex w-1/2 flex-col gap-1">
                                        <div
                                            class="image-fit relative flex h-24 w-full cursor-pointer overflow-hidden rounded-md bg-slate-100 before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/30 before:via-theme-2/30 before:to-transparent">
                                            <img
                                                src="{{ Vite::asset($projectDetails[3]['image']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div
                                            class="image-fit relative flex h-24 w-full cursor-pointer overflow-hidden rounded-md bg-slate-100 before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/30 before:via-theme-2/30 before:to-transparent">
                                            <img
                                                src="{{ Vite::asset($projectDetails[4]['image']) }}"
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="image-fit relative flex w-[33%] cursor-pointer overflow-hidden rounded-md bg-slate-100 before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/30 before:via-theme-2/30 before:to-transparent">
                                <img
                                    src="{{ Vite::asset($projectDetails[5]['image']) }}"
                                    alt="Tailwise - Admin Dashboard Template"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="max-w-[9rem] truncate text-base font-medium md:max-w-none">
                                    Welcome!
                                </div>
                                <div class="mt-0.5 max-w-[9rem] truncate text-slate-500 md:max-w-none">
                                    {{ explode(' ', $users[0]['name'])[0] }}
                                </div>
                            </div>
                            <a
                                class="ml-auto flex items-center rounded-full border border-primary/20 bg-primary/5 px-3.5 py-1.5 font-medium text-primary"
                                href=""
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.5]"
                                    icon="CreditCard"
                                />
                                ${{ formatCurrency(mt_rand(4000, 5000)) }}
                            </a>
                        </div>
                        <div class="mt-4 border-t border-dashed pt-4">
                            <div class="relative">
                                <x-base.form-input
                                    class="pr-11"
                                    type="text"
                                    rounded
                                    placeholder="Where are you going?"
                                />
                                <div class="absolute inset-y-0 right-0 flex w-11 items-center justify-center">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3] text-slate-400"
                                        icon="Search"
                                    />
                                </div>
                            </div>
                            <x-leaflet-map class="mt-3 h-48 rounded-lg bg-slate-100" />
                            <x-base.button
                                class="mt-3 w-full"
                                type="button"
                                variant="primary"
                                rounded
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Goal"
                                />
                                Pin Location
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div>
                                <div class="max-w-[8rem] truncate text-base font-medium md:max-w-none">
                                    {{ $users[0]['name'] }}
                                </div>
                                <div class="mt-0.5 text-slate-500">Available</div>
                            </div>
                            <div class="ml-auto flex items-center gap-2.5">
                                <x-base.tippy
                                    class="ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="Make a phone call"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="ml-auto flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.25] bg-primary/[0.03]"
                                    as="a"
                                    content="Make a phone call"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/5 text-primary"
                                        icon="Settings"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                        <div class="my-5 flex flex-col gap-2.5 border-y border-dashed py-5">
                            @foreach ($messages->take(4) as $fakerKey => $faker)
                                <div @class([
                                    'mr-auto border px-4 py-3 rounded-r-xl rounded-bl-xl bg-slate-50 [&.right]:text-right [&.right]:mr-0 [&.right]:ml-auto [&.right]:rounded-l-xl [&.right]:rounded-tr-none',
                                    'right' => [0, 0, 1, 1, 1][mt_rand(0, 4)],
                                ])>
                                    <div>{{ $faker['content'] }}</div>
                                    <div class="mt-1 text-xs text-slate-500/70">
                                        {{ $faker['time'] }}
                                    </div>
                                </div>
                            @endforeach
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
