<div>
    <x-base.slideover id="activities-panel">
        <x-base.slideover.panel class="w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
            <a
                class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                data-tw-dismiss="modal"
                href="javascript:;"
            >
                <x-base.lucide
                    class="h-8 w-8 stroke-[1]"
                    icon="X"
                />
            </a>
            <x-base.slideover.title class="px-6 py-5">
                <h2 class="mr-auto text-base font-medium">Latest Activities</h2>
            </x-base.slideover.title>
            <x-base.slideover.description class="p-0">
                <div class="flex flex-col gap-3.5 px-5 py-3">
                    <div
                        class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                        @foreach ($activities->take(5) as $fakerKey => $faker)
                            <div @class([
                                'mb-3 last:mb-0 relative',
                                "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                            ])>
                                <div @class([
                                    'px-4 py-3 ml-8',
                                    "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                    "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                ])>
                                    <a
                                        class="font-medium text-primary"
                                        href=""
                                    >
                                        {{ $faker['activity'] }}
                                    </a>
                                    <div
                                        class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                        {{ $faker['activityDetails'] }}
                                        <span @class([
                                            'group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0',
                                            '[&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10',
                                            '[&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10',
                                            '[&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10',
                                            '[&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10',
                                            ['primary', 'success', 'warning', 'info'][mt_rand(0, 3)],
                                        ])>
                                            <span
                                                class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"
                                            ></span>
                                            <span class="-mt-px">{{ $faker['statusBadge'] }}</span>
                                        </span>
                                    </div>
                                    @if (isset($faker['uploadedFiles']))
                                        <div class="my-3.5 grid grid-cols-1 gap-4">
                                            @foreach ($faker['uploadedFiles'] as $fakerKey => $fakerUploadedFiles)
                                                <div
                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                    <x-base.file-icon
                                                        class="hidden w-10 sm:block"
                                                        variant="directory"
                                                    />
                                                    <div class="mr-auto sm:ml-3.5">
                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                            {{ $fakerUploadedFiles['filename'] }}
                                                        </div>
                                                        <div class="mt-1 text-xs text-slate-500">
                                                            {{ $fakerUploadedFiles['size'] }}
                                                        </div>
                                                    </div>
                                                    <x-base.menu>
                                                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                                                            <x-base.lucide
                                                                class="h-4 w-4"
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
                                        </div>
                                    @endif
                                    @if (isset($faker['images']))
                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-[80%]">
                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                <div
                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                    <img
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    >
                                                </div>
                                                <div
                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                    <img
                                                        src="{{ Vite::asset($faker['images'][1]) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    >
                                                </div>
                                                <div
                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                    <img
                                                        src="{{ Vite::asset($faker['images'][2]) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        {{ $faker['date'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </x-base.slideover.description>
        </x-base.slideover.panel>
    </x-base.slideover>
</div>
