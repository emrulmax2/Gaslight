<div>
    <x-base.slideover id="notifications-panel">
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
                <h2 class="mr-auto text-base font-medium">Notifications</h2>
                <x-base.button
                    class="hidden sm:flex"
                    variant="outline-secondary"
                >
                    <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="ShieldCheck"
                    /> Mark all as
                    read
                </x-base.button>
            </x-base.slideover.title>
            <x-base.slideover.description class="p-0">
                <div class="flex flex-col gap-0.5 p-3">
                    @foreach ($activities as $fakerKey => $faker)
                        <a
                            class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                            href=""
                        >
                            <div>
                                <div
                                    class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                            </div>
                            <div class="sm:ml-5">
                                <div class="font-medium">{{ $faker['activity'] }}</div>
                                <div class="mt-0.5 text-slate-500">
                                    {{ $faker['activityDetails'] }}
                                </div>
                                @if (isset($faker['images']))
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img
                                                    src="{{ Vite::asset($faker['images'][0]) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                >
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img
                                                    src="{{ Vite::asset($faker['images'][1]) }}"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                >
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
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
                            @if (mt_rand(0, 1) == 1)
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            @endif
                        </a>
                    @endforeach
                </div>
            </x-base.slideover.description>
        </x-base.slideover.panel>
    </x-base.slideover>
</div>
