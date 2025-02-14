<x-base.dialog id="switch-account">
    <x-base.dialog.panel>
        <x-base.dialog.title class="h-14 justify-center">
            <h2 class="text-base font-medium">Switch Account</h2>
        </x-base.dialog.title>
        <x-base.dialog.description class="px-2.5 pb-4 pt-3.5">
            <div class="flex flex-col gap-1.5">
                @foreach ($users->take(5) as $fakerKey => $faker)
                    <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                            <img
                                src="{{ Vite::asset($faker['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                            >
                        </div>
                        <div class="ml-3.5">
                            <div class="font-medium">{{ $faker['name'] }}</div>
                            <div class="mt-0.5 text-xs text-slate-500">
                                {{ $faker['email'] }}
                            </div>
                        </div>
                        <div class="relative ml-auto h-7 w-7">
                            <x-base.form-check.input
                                class="peer absolute z-10 h-full w-full opacity-0"
                                id="{{ 'switch-account-' . $fakerKey }}"
                                type="checkbox"
                                value="switch-account"
                                checked="{{ !$fakerKey }}"
                            />
                            <div
                                class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                <x-base.lucide
                                    class="h-3 w-3 stroke-[1.5]"
                                    icon="Check"
                                />
                            </div>
                            <div
                                class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-base.dialog.description>
        <x-base.dialog.footer class="flex h-14 items-center justify-center text-center">
            <a
                class="-mt-1 block text-primary"
                href=""
            >
                Login into an Existing Account
            </a>
        </x-base.dialog.footer>
    </x-base.dialog.panel>
</x-base.dialog>
