@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    File Manager
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="MailPlus"
                        />
                        Upload New Files
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="Cog"
                        /> File
                        Manager Settings
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">
                <div class="relative">
                    <div class="sticky top-[104px]">
                        <div
                            class="box box--stacked grid grid-cols-3 gap-3.5 px-3.5 py-4 before:z-[-1] before:content-[''] sm:w-[102px] sm:grid-cols-1">
                            <x-base.tippy
                                class="active relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Inbox"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="AppWindow"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        12+
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Starred"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="MailCheck"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Snoozed"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="KeyRound"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        3
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Important"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="PackageCheck"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Sent"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="ShieldCheck"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        41
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Drafts"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Smartphone"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Categories"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="BellDot"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        21
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Chats"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Workflow"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="Scheduled"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Podcast"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                href=""
                                as="a"
                                content="All Mail"
                                placement="right"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Trash2"
                                />
                            </x-base.tippy>
                        </div>
                    </div>
                </div>
                <div class="box box--stacked flex w-full flex-col">
                    <div class="mb-1 flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                        <div>
                            <div class="relative">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"
                                    icon="Search"
                                />
                                <x-base.form-input
                                    class="rounded-[0.5rem] pl-9 sm:w-64"
                                    type="text"
                                    placeholder="Search mails..."
                                />
                            </div>
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                            <x-base.menu>
                                <x-base.menu.button
                                    class="w-full sm:w-auto"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Download"
                                    />
                                    Export
                                    <x-base.lucide
                                        class="ml-2 h-4 w-4 stroke-[1.3]"
                                        icon="ChevronDown"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileBarChart"
                                        />
                                        PDF
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileBarChart"
                                        />
                                        CSV
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.popover class="inline-block">
                                <x-base.popover.button
                                    class="w-full sm:w-auto"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="ArrowDownWideNarrow"
                                    />
                                    Filter
                                    <span
                                        class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium"
                                    >
                                        3
                                    </span>
                                </x-base.popover.button>
                                <x-base.popover.panel>
                                    <div class="p-2">
                                        <div>
                                            <div class="text-left text-slate-500">
                                                Uploader
                                            </div>
                                            <x-base.tom-select
                                                class="mt-2 flex-1"
                                                data-placeholder="Search user"
                                            >
                                                @foreach ($users as $fakerKey => $faker)
                                                    <option value="{{ $fakerKey }}">
                                                        {{ $faker['name'] }}
                                                    </option>
                                                @endforeach
                                            </x-base.tom-select>
                                        </div>
                                        <div class="mt-3">
                                            <div class="text-left text-slate-500">
                                                File Type
                                            </div>
                                            <x-base.form-select class="mt-2 flex-1">
                                                <option value="Document">Document</option>
                                                <option value="Music">Music</option>
                                                <option value="Video">Video</option>
                                            </x-base.form-select>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <x-base.button
                                                class="ml-auto w-32"
                                                variant="secondary"
                                            >
                                                Close
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-2 w-32"
                                                variant="primary"
                                            >
                                                Apply
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.popover.panel>
                            </x-base.popover>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 px-5">
                        <div>
                            <div
                                class="relative mb-5 mt-1 h-4 text-xs uppercase text-slate-500/60 before:absolute before:inset-y-0 before:my-auto before:h-px before:w-full before:bg-slate-200/70 before:content-['']">
                                <span class="absolute ml-4 flex items-center bg-white px-2.5">
                                    <x-base.lucide
                                        class="mr-1.5 h-[15px] w-[15px] stroke-slate-400/70 stroke-[1.7]"
                                        icon="Clock"
                                    />
                                    Recently Updated Files
                                </span>
                            </div>
                            <div class="grid grid-cols-1 gap-x-4 gap-y-3.5 md:grid-cols-2">
                                @foreach ($files->take(3) as $fakerKey => $faker)
                                    <div>
                                        <div
                                            class="relative flex cursor-pointer items-center rounded-[0.6rem] border border-slate-200/80 px-3 py-2.5 shadow-sm transition hover:bg-slate-50 sm:px-5">
                                            <div class="">
                                                <x-base.form-check.input
                                                    class="-mt-1 border"
                                                    type="checkbox"
                                                    checked="{{ mt_rand(0, 1) ? true : false }}"
                                                />
                                            </div>
                                            <div class="ml-5">
                                                @if ($faker['type'] == 'Empty Folder')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        variant="empty-directory"
                                                    />
                                                @elseif ($faker['type'] == 'Folder')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        variant="directory"
                                                    />
                                                @elseif ($faker['type'] == 'Image')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        src="{{ Vite::asset(strtolower($faker['fileName'])) }}"
                                                        variant="image"
                                                    />
                                                @else
                                                    <x-base.file-icon
                                                        class="h-11 w-11 text-[0.6rem]"
                                                        type="{{ $faker['type'] }}"
                                                        variant="file"
                                                    />
                                                @endif
                                            </div>
                                            <div class="ml-3 flex w-full flex-col gap-y-1 lg:flex-row lg:items-center">
                                                <a
                                                    class="block truncate font-medium capitalize lg:text-center"
                                                    href=""
                                                >
                                                    {{ explode('/', $faker['fileName'])[count(explode('/', $faker['fileName'])) - 1] }}
                                                </a>
                                                <div class="mr-4 text-xs text-slate-500/80 lg:ml-auto lg:text-center">
                                                    File size: {{ $faker['size'] }}
                                                </div>
                                            </div>
                                            <x-base.menu>
                                                <x-base.menu.button
                                                    class="block h-5 w-5"
                                                    href="#"
                                                    as="a"
                                                >
                                                    <x-base.lucide
                                                        class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70 stroke-[1]"
                                                        icon="MoreVertical"
                                                    />
                                                </x-base.menu.button>
                                                <x-base.menu.items class="w-40">
                                                    <x-base.menu.item>
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Users"
                                                        />
                                                        Share File
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
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div
                                class="relative mb-5 mt-1 h-4 text-xs uppercase text-slate-500/60 before:absolute before:inset-y-0 before:my-auto before:h-px before:w-full before:bg-slate-200/70 before:content-['']">
                                <span class="absolute ml-4 flex items-center bg-white px-2.5">
                                    <x-base.lucide
                                        class="mr-1.5 h-[15px] w-[15px] stroke-slate-400/70 stroke-[1.7]"
                                        icon="Pin"
                                    />
                                    Pinned Files
                                </span>
                            </div>
                            <div class="grid grid-cols-1 gap-x-4 gap-y-3.5 md:grid-cols-2">
                                @foreach ($files->take(10) as $fakerKey => $faker)
                                    <div>
                                        <div
                                            class="relative flex cursor-pointer items-center rounded-[0.6rem] border border-slate-200/80 px-3 py-2.5 shadow-sm transition hover:bg-slate-50 sm:px-5">
                                            <div class="">
                                                <x-base.form-check.input
                                                    class="-mt-1 border"
                                                    type="checkbox"
                                                    checked="{{ mt_rand(0, 1) ? true : false }}"
                                                />
                                            </div>
                                            <div class="ml-5">
                                                @if ($faker['type'] == 'Empty Folder')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        variant="empty-directory"
                                                    />
                                                @elseif ($faker['type'] == 'Folder')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        variant="directory"
                                                    />
                                                @elseif ($faker['type'] == 'Image')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        src="{{ Vite::asset(strtolower($faker['fileName'])) }}"
                                                        variant="image"
                                                    />
                                                @else
                                                    <x-base.file-icon
                                                        class="h-11 w-11 text-[0.6rem]"
                                                        type="{{ $faker['type'] }}"
                                                        variant="file"
                                                    />
                                                @endif
                                            </div>
                                            <div class="ml-3 flex w-full flex-col gap-y-1 lg:flex-row lg:items-center">
                                                <a
                                                    class="block truncate font-medium capitalize lg:text-center"
                                                    href=""
                                                >
                                                    {{ explode('/', $faker['fileName'])[count(explode('/', $faker['fileName'])) - 1] }}
                                                </a>
                                                <div class="mr-4 text-xs text-slate-500/80 lg:ml-auto lg:text-center">
                                                    File size: {{ $faker['size'] }}
                                                </div>
                                            </div>
                                            <x-base.menu>
                                                <x-base.menu.button
                                                    class="block h-5 w-5"
                                                    href="#"
                                                    as="a"
                                                >
                                                    <x-base.lucide
                                                        class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70 stroke-[1]"
                                                        icon="MoreVertical"
                                                    />
                                                </x-base.menu.button>
                                                <x-base.menu.items class="w-40">
                                                    <x-base.menu.item>
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Users"
                                                        />
                                                        Share File
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
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div
                                class="relative mb-5 mt-1 h-4 text-xs uppercase text-slate-500/60 before:absolute before:inset-y-0 before:my-auto before:h-px before:w-full before:bg-slate-200/70 before:content-['']">
                                <span class="absolute ml-4 flex items-center bg-white px-2.5">
                                    <x-base.lucide
                                        class="mr-1.5 h-[15px] w-[15px] stroke-slate-400/70 stroke-[1.7]"
                                        icon="Trash2"
                                    />
                                    Deleted Files
                                </span>
                            </div>
                            <div class="grid grid-cols-1 gap-x-4 gap-y-3.5 md:grid-cols-2">
                                @foreach ($files->take(5) as $fakerKey => $faker)
                                    <div>
                                        <div
                                            class="relative flex cursor-pointer items-center rounded-[0.6rem] border border-slate-200/80 px-3 py-2.5 shadow-sm transition hover:bg-slate-50 sm:px-5">
                                            <div class="">
                                                <x-base.form-check.input
                                                    class="-mt-1 border"
                                                    type="checkbox"
                                                    checked="{{ mt_rand(0, 1) ? true : false }}"
                                                />
                                            </div>
                                            <div class="ml-5">
                                                @if ($faker['type'] == 'Empty Folder')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        variant="empty-directory"
                                                    />
                                                @elseif ($faker['type'] == 'Folder')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        variant="directory"
                                                    />
                                                @elseif ($faker['type'] == 'Image')
                                                    <x-base.file-icon
                                                        class="h-11 w-11"
                                                        src="{{ Vite::asset(strtolower($faker['fileName'])) }}"
                                                        variant="image"
                                                    />
                                                @else
                                                    <x-base.file-icon
                                                        class="h-11 w-11 text-[0.6rem]"
                                                        type="{{ $faker['type'] }}"
                                                        variant="file"
                                                    />
                                                @endif
                                            </div>
                                            <div class="ml-3 flex w-full flex-col gap-y-1 lg:flex-row lg:items-center">
                                                <a
                                                    class="block truncate font-medium capitalize lg:text-center"
                                                    href=""
                                                >
                                                    {{ explode('/', $faker['fileName'])[count(explode('/', $faker['fileName'])) - 1] }}
                                                </a>
                                                <div class="mr-4 text-xs text-slate-500/80 lg:ml-auto lg:text-center">
                                                    File size: {{ $faker['size'] }}
                                                </div>
                                            </div>
                                            <x-base.menu>
                                                <x-base.menu.button
                                                    class="block h-5 w-5"
                                                    href="#"
                                                    as="a"
                                                >
                                                    <x-base.lucide
                                                        class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70 stroke-[1]"
                                                        icon="MoreVertical"
                                                    />
                                                </x-base.menu.button>
                                                <x-base.menu.items class="w-40">
                                                    <x-base.menu.item>
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Users"
                                                        />
                                                        Share File
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div
                        class="my-1 flex flex-col items-center p-5 text-center text-slate-500/80 sm:flex-row sm:text-left">
                        <div>4.41 GB (25%) of 17 GB used Manage</div>
                        <div class="mt-2 sm:ml-auto sm:mt-0">
                            Last account activity: 36 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
