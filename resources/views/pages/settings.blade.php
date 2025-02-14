@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Settings
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        Go to My Profile
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="relative col-span-12 xl:col-span-3">
                    <div class="sticky top-[104px]">
                        <div class="box box--stacked flex flex-col px-5 pb-6 pt-5">
                            <a
                                href="{{ route('settings') }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => is_null(request()->query('page')),
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="AppWindow"
                                />
                                Profile Info
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'email-settings']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'email-settings',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="MailCheck"
                                />
                                Email Settings
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'security']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'security',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="KeyRound"
                                />
                                Security
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'preferences']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'preferences',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="PackageCheck"
                                />
                                Preferences
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'two-factor-authentication']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'two-factor-authentication',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="ShieldCheck"
                                />
                                Two-factor Authentication
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'device-history']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'device-history',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="Smartphone"
                                />
                                Device History
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'notification-settings']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'notification-settings',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="BellDot"
                                />
                                Notification Settings
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'connected-services']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'connected-services',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="Workflow"
                                />
                                Connected Services
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'social-media-links']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'social-media-links',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="Podcast"
                                />
                                Social Media Links
                            </a>
                            <a
                                href="{{ route('settings', ['page' => 'account-deactivation']) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'account-deactivation',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="Trash2"
                                />
                                Account Deactivation
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-y-7 xl:col-span-9">
                    <div class="box box--stacked flex flex-col p-1.5">
                        <div class="relative h-60 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                            <div @class([
                                'w-full h-full relative overflow-hidden',
                                "before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem]",
                                "after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]",
                            ])></div>
                            <div class="absolute inset-x-0 top-0 mx-auto mt-36 h-32 w-32">
                                <div
                                    class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="Tailwise - Admin Dashboard Template"
                                    >
                                </div>
                                <div
                                    class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-3 rounded-[0.6rem] bg-slate-50 p-5 pt-12 sm:flex-row sm:items-end">
                            <div>
                                <x-base.form-label class="flex items-center text-slate-500">
                                    Who can see your profile photo?
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="span"
                                        content="Low"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 stroke-[1.3] text-slate-500"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </x-base.form-label>
                                <div class="relative mt-2.5">
                                    <x-base.lucide
                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                        icon="Globe"
                                    />
                                    <x-base.form-select class="mr-3 rounded-[0.5rem] pl-9 sm:w-44">
                                        <option value="custom-date">Anyone</option>
                                        <option value="daily">Only you</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                            <x-base.button
                                class="border-primary/50 sm:ml-auto"
                                variant="outline-primary"
                            >
                                <x-base.lucide
                                    class="mr-2.5 h-4 w-4 stroke-[1.3]"
                                    icon="Image"
                                />
                                Upload Cover
                            </x-base.button>
                        </div>
                    </div>
                    @if (is_null(request()->query('page')))
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Profile Info
                            </div>
                            <div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Full Name</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your full legal name as it appears on your
                                                official identification.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <x-base.form-input
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                                type="text"
                                                placeholder="{{ explode(' ', $users[0]['name'])[0] }}"
                                            />
                                            <x-base.form-input
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                                type="text"
                                                placeholder="{{ explode(' ', $users[0]['name'])[1] }}"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Date of Birth</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                This information is required to verify your age and
                                                provide age-appropriate services.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.litepicker />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Gender</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Select your gender from the options.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-1"
                                                        type="radio"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-1">
                                                        Male
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-2"
                                                        type="radio"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-2">
                                                        Female
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-3"
                                                        type="radio"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-3">
                                                        Prefer Not to Say
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Email</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please provide a valid email address that you have
                                                access to.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ $users[0]['email'] }}"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Phone Number</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please provide a valid phone number where we can reach
                                                you if needed.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <x-base.form-input
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                                type="text"
                                                placeholder="{{ $users[0]['phone'] }}"
                                            />
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 md:w-36 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            >
                                                <option value="office">Office</option>
                                                <option value="home">Home</option>
                                            </x-base.form-select>
                                        </div>
                                        <a
                                            class="-mb-1 mt-3.5 flex items-center font-medium text-primary"
                                            href=""
                                        >
                                            <x-base.lucide
                                                class="mr-1 h-4 w-4 stroke-[1.3]"
                                                icon="Plus"
                                            />
                                            Add phone
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Department</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Choose your department or division from the list of
                                                available options.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-select>
                                            @foreach ($users->take(5) as $fakerKey => $faker)
                                                <option value="{{ $faker['department'] }}">
                                                    {{ $faker['department'] }}
                                                </option>
                                            @endforeach
                                        </x-base.form-select>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Account Type</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Your account type determines the features and
                                                privileges you will have on this platform.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-4"
                                                        type="radio"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-4">
                                                        Individual
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-5"
                                                        type="radio"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-5">
                                                        Company
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Country</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please specify the country you are currently residing
                                                in.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.tom-select
                                            class="w-full"
                                            data-placeholder="Select your country"
                                        >
                                            @foreach ($countries as $fakerKey => $faker)
                                                <option value="{{ $fakerKey }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Address Line 1</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the primary line of your physical address,
                                                typically including your house or building number and
                                                street name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ $users[0]['location'] }}"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Address Line 2</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                This field is optional and can be used to provide any
                                                additional address details, such as apartment number,
                                                suite, floor, or any other relevant information.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ $users[0]['location'] }}"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">City</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the name of the city or locality where your
                                                address is located.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ $users[0]['location'] }}"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">State / Province</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please select your state or province from the provided
                                                list.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ $users[0]['location'] }}"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Zip / Postal Code</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the postal code or ZIP code associated with your
                                                address.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ mt_rand(5000, 9000) }}"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Exclusivity</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Check this box if you want to enable exclusive access
                                                to certain features or content on our platform.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-check>
                                            <x-base.form-check.input
                                                id="checkbox-switch-21"
                                                type="checkbox"
                                                value=""
                                            />
                                            <x-base.form-check.label
                                                class="ml-3.5 leading-relaxed text-slate-500"
                                                for="checkbox-switch-21"
                                            >
                                                Opting to maintain exclusivity for your portfolio of
                                                items on this platform can significantly boost your
                                                earnings.
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'email-settings')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Email Settings
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Your current email address is
                                    <span class="font-medium">
                                        {{ $users[1]['email'] }}
                                    </span>
                                    .
                                </div>
                                <div
                                    class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">New Email Address</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please provide a valid email address that you have
                                                access to.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="{{ $users[0]['email'] }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'security')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Security
                            </div>
                            <div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Current Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your current password to verify your identity.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="P**********d"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">New Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Create a new password for your account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="P**********d"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Confirm New Password
                                                </div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please re-enter the new password you've just chosen.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="P**********d"
                                        />
                                        <div class="mt-4 text-slate-500">
                                            <div class="font-medium">
                                                Password requirements:
                                            </div>
                                            <ul class="mt-2.5 flex list-disc flex-col gap-1 pl-3 text-slate-500">
                                                <li class="pl-0.5">
                                                    Passwords must be at least 8 characters long.
                                                </li>
                                                <li class="pl-0.5">
                                                    Include at least one numeric digit (0-9).
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'preferences')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Preferences
                            </div>
                            <div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Language</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Select your preferred language from the available
                                                options.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.tom-select
                                            class="w-full"
                                            data-placeholder="Select your language"
                                        >
                                            @foreach ($languages as $fakerKey => $faker)
                                                <option value="{{ $faker['code'] }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Time Zone</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Select your current time zone from the list of
                                                available options.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.tom-select
                                            class="w-full"
                                            data-placeholder="Select your timezone"
                                        >
                                            @foreach ($timezones as $fakerKey => $faker)
                                                <option value="{{ $faker['offset'] }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Item Support</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Check this box if you require additional support or
                                                assistance with your item.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-switch.input
                                            id="checkbox-switch-7"
                                            type="checkbox"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Featured Items</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Check this box if you want your items to be featured
                                                or highlighted on our
                                                <a
                                                    class="text-primary"
                                                    href=""
                                                >
                                                    platform
                                                </a>
                                                .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-switch.input
                                            id="checkbox-switch-8"
                                            type="checkbox"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'two-factor-authentication')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Two-Factor Authentication (2FA)
                                <div
                                    class="ml-3 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                    <span class="-mt-px">Enabled</span>
                                </div>
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Enhance your account security by enabling Two-Factor
                                    Authentication in the settings.
                                </div>
                                <div
                                    class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Account Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your current password to verify your identity.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="P**********d"
                                        />
                                        <x-base.form-help>
                                            This is the password you use to log in to your account.
                                        </x-base.form-help>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'device-history')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Device History
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Access and control your currently connected devices.
                                </div>
                                <div class="mt-5 rounded-lg border border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <x-base.table>
                                            <x-base.table.thead>
                                                <x-base.table.tr>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Browser
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Device
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Location
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Recent Activity
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.thead>
                                            <x-base.table.tbody>
                                                @foreach ($recentDevices as $fakerKey => $faker)
                                                    <x-base.table.tr class="[&_td]:last:border-b-0">
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="flex items-center whitespace-nowrap">
                                                                <div class="image-fit zoom-in h-4 w-4">
                                                                    <img
                                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                        src="{{ Vite::asset($faker['browser']['image']) }}"
                                                                        alt="Tailwise - Admin Dashboard Template"
                                                                    >
                                                                </div>
                                                                <div class="ml-3.5">
                                                                    {{ $faker['browser']['name'] }} on
                                                                    {{ $faker['operatingSystem'] }}
                                                                </div>
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="flex items-center whitespace-nowrap">
                                                                <x-base.lucide
                                                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                                                    icon="Smartphone"
                                                                />
                                                                {{ $faker['device'] }}
                                                                @if (!$fakerKey)
                                                                    <div
                                                                        class="ml-3 flex items-center rounded-md border border-primary/10 bg-primary/10 px-1.5 py-px text-xs font-medium text-primary">
                                                                        <span class="-mt-px">Current</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="whitespace-nowrap">
                                                                {{ $faker['location'] }}
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="whitespace-nowrap">
                                                                {{ $faker['activity'] }}
                                                            </div>
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                @endforeach
                                            </x-base.table.tbody>
                                        </x-base.table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'notification-settings')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Notification Settings
                            </div>
                            <div>
                                <x-base.alert
                                    class="mb-2 flex items-center border-primary/20 bg-primary/5 px-4"
                                    variant="outline-primary"
                                >
                                    <div>
                                        <x-base.lucide
                                            class="mr-3 h-4 w-4 stroke-[1.3] md:mr-2"
                                            icon="AlertCircle"
                                        />
                                    </div>
                                    <div class="mr-5 leading-relaxed">
                                        We'd like to request your browser's permission to
                                        display notifications.
                                        <a
                                            class="ml-1 font-medium underline decoration-warning/50 decoration-dotted underline-offset-[3px]"
                                            href=""
                                        >
                                            Request permission
                                        </a>
                                        <x-base.alert.dismiss-button class="btn-close inset-y-0">
                                            <x-base.lucide
                                                class="h-4 w-4"
                                                icon="X"
                                            />
                                        </x-base.alert.dismiss-button>
                                    </div>
                                </x-base.alert>
                                <div class="mt-5 rounded-lg border border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <x-base.table>
                                            <x-base.table.thead>
                                                <x-base.table.tr>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Type
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide
                                                                class="h-6 w-6"
                                                                icon="MailCheck"
                                                            />
                                                            <div class="mt-1.5">Email</div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide
                                                                class="h-6 w-6"
                                                                icon="Globe"
                                                            />
                                                            <div class="mt-1.5">Browser</div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide
                                                                class="h-6 w-6"
                                                                icon="Smartphone"
                                                            />
                                                            <div class="mt-1.5">App</div>
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.thead>
                                            <x-base.table.tbody>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            Unusual login activity detected
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-3"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-4"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-5"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="flex items-center whitespace-nowrap">
                                                            Password change request
                                                            <x-base.lucide
                                                                class="ml-1.5 h-4 w-4 stroke-[1.3] text-slate-400"
                                                                icon="Info"
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-6"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-7"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-8"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            New message received
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-9"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-10"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-11"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            Account activity summary
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-12"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-13"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-14"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="flex items-center whitespace-nowrap">
                                                            Security alert: Unrecognized device
                                                            <x-base.lucide
                                                                class="ml-1.5 h-4 w-4 stroke-[1.3] text-slate-400"
                                                                icon="Info"
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-15"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-16"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-17"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.tbody>
                                        </x-base.table>
                                    </div>
                                </div>
                                <div
                                    class="mt-3 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-1/2">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    When would you prefer to receive notifications?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-select>
                                            <option value="Immediately">Immediately</option>
                                            <option value="In the morning">In the morning</option>
                                            <option value="At noon">At noon</option>
                                            <option value="In the afternoon">
                                                In the afternoon
                                            </option>
                                            <option value="In the evening">In the evening</option>
                                            <option value="At night">At night</option>
                                            <option value="Once a day">Once a day</option>
                                            <option value="Twice a day">Twice a day</option>
                                            <option value="Custom schedule">Custom schedule</option>
                                            <option value="Don't send notifications">
                                                Don't send notifications
                                            </option>
                                        </x-base.form-select>
                                    </div>
                                </div>
                                <div
                                    class="mt-3 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-1/2">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Receive a daily overview ('Daily Digest') of your
                                                    task activity.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            >
                                                <option value="Every day">Every day</option>
                                                <option value="Once a day">Once a day</option>
                                                <option value="Twice a day">Twice a day</option>
                                                <option value="No daily overview (disable Daily Digest)">
                                                    No daily overview (disable Daily Digest)
                                                </option>
                                            </x-base.form-select>
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            >
                                                <option value="at 8:00 AM">at 8:00 AM</option>
                                                <option value="at 12:00 PM">at 12:00 PM</option>
                                                <option value="at 4:00 PM">at 4:00 PM</option>
                                                <option value="at 8:00 PM">at 8:00 PM</option>
                                            </x-base.form-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-7 text-slate-500">
                                    To reduce interruptions, email notifications are bundled and
                                    delivered when you're not actively using your device.
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'connected-services')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Connected Services
                            </div>
                            <div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Linkedin"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Linked In</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Professional network and career profile
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-71"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Dribbble"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Dribbble</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Design portfolio and creative work
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-8"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Facebook"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Facebook</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Social connections and personal updates
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-9"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Instagram"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Instagram</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Visual stories and photos
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-10"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Twitter</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Microblogging and real-time updates
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-11"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'social-media-links')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Social Media Links
                            </div>
                            <div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Linkedin"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Linked In</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Dribbble</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Facebook"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Facebook</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                <a
                                                    class="text-xs text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                    href=""
                                                >
                                                    www.facebook.com/
                                                    {{ str_replace(' ', '', strtolower($users[0]['name'])) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Instagram"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Instagram</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Twitter</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                <a
                                                    class="text-xs text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                    href=""
                                                >
                                                    www.twitter.com/
                                                    {{ str_replace(' ', '', strtolower($users[0]['name'])) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'account-deactivation')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Account Deactivation
                            </div>
                            <div>
                                <div class="leading-relaxed">
                                    When you initiate the account deletion process, you'll no
                                    longer have access to Front account services, and your
                                    personal data will be permanently removed. You have a 10-day
                                    window to cancel the deletion if needed.
                                </div>
                                <x-base.form-check class="mt-5">
                                    <x-base.form-check.input
                                        id="checkbox-switch-1"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-1">
                                        Confirm that I want to delete my account.
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            <div
                                class="mt-6 flex flex-col-reverse gap-3 border-t border-dashed border-slate-300/70 pt-5 md:flex-row md:justify-end">
                                <x-base.button
                                    class="w-full px-4 md:w-auto"
                                    variant="outline-secondary"
                                >
                                    Learn More
                                </x-base.button>
                                <x-base.button
                                    class="w-full border-danger/50 bg-danger/5 px-4 md:w-auto"
                                    variant="outline-danger"
                                >
                                    Delete
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
