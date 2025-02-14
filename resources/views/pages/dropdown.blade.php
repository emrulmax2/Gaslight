@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Dropdown
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Explore the flexibility of our Dropdown component for creating
                    interactive menus and selection options in your web applications.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Dropdown
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-1"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-1"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Dropdown menus are a fundamental user interface
                                    component that allows users to choose from a list of
                                    options in a collapsible format. This section covers the
                                    creation and usage of basic dropdowns in your web
                                    applications using the `Menu` component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex justify-center">
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Experiment with the provided code and customize it to
                                    suit your specific needs. Dropdowns can improve user
                                    experience by simplifying navigation and interaction
                                    within your application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Header & Footer Dropdown
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-2"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-2"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Dropdown menus often require additional elements such as
                                    headers and footers to provide context or additional
                                    information. This section covers how to create dropdowns
                                    with both headers and footers using the `Menu`
                                    component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex justify-center">
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-56">
                                                        <x-base.menu.header>Export Options</x-base.menu.header>
                                                        <x-base.menu.divider />
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Activity"
                                                            />
                                                            English
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Box"
                                                            />
                                                            Indonesia
                                                            <div
                                                                class="px-1 ml-auto text-xs text-white rounded-full bg-danger">
                                                                10
                                                            </div>
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Layout"
                                                            />
                                                            English
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="PanelRight"
                                                            />
                                                            Indonesia
                                                        </x-base.menu.item>
                                                        <x-base.menu.divider />
                                                        <x-base.menu.footer>
                                                            <x-base.button
                                                                class="px-2 py-1"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Settings
                                                            </x-base.button>
                                                            <x-base.button
                                                                class="px-2 py-1 ml-auto"
                                                                type="button"
                                                                variant="secondary"
                                                            >
                                                                View Profile
                                                            </x-base.button>
                                                        </x-base.menu.footer>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-56">
                                                        <x-base.menu.header>Export Options</x-base.menu.header>
                                                        <x-base.menu.divider />
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Activity"
                                                            />
                                                            English
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Box"
                                                            />
                                                            Indonesia
                                                            <div
                                                                class="px-1 ml-auto text-xs text-white rounded-full bg-danger">
                                                                10
                                                            </div>
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Layout"
                                                            />
                                                            English
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Sidebar"
                                                            />
                                                            Indonesia
                                                        </x-base.menu.item>
                                                        <x-base.menu.divider />
                                                        <x-base.menu.footer>
                                                            <x-base.button
                                                                class="px-2 py-1"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Settings
                                                            </x-base.button>
                                                            <x-base.button
                                                                class="px-2 py-1 ml-auto"
                                                                type="button"
                                                                variant="secondary"
                                                            >
                                                                View Profile
                                                            </x-base.button>
                                                        </x-base.menu.footer>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Dropdowns with headers and footers provide a structured
                                    way to present options and information to users. They
                                    can be particularly useful in situations where you need
                                    to group related items or provide additional context.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Icon Dropdown
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-3"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-3"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Icon dropdowns can add visual cues and improve user
                                    experience when selecting options. This section covers
                                    how to create dropdowns with icons using the `Menu`
                                    component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex justify-center">
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-48">
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="FileEdit"
                                                            />
                                                            New Dropdown
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Trash"
                                                            />
                                                            Delete Dropdown
                                                        </x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-48">
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Edit2"
                                                            /> New
                                                            Dropdown
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Trash"
                                                            />
                                                            Delete Dropdown
                                                        </x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Icon dropdowns provide a visual aid to users when
                                    selecting options, making the interface more intuitive
                                    and user-friendly. Experiment with different icons and
                                    styles to create dropdowns that best suit your
                                    application's design and user needs.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Dropdown with Close Button
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-4"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-4"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Dropdowns with close buttons are a user-friendly way to
                                    provide options while allowing users to dismiss the
                                    dropdown when needed. This section covers how to create
                                    dropdowns with a close button using the `Menu`
                                    component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <x-base.popover
                                                    class="inline-block"
                                                    placement="bottom-start"
                                                >
                                                    <x-base.popover.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Filter Dropdown
                                                        <x-base.lucide
                                                            class="w-4 h-4 ml-2"
                                                            icon="ChevronDown"
                                                        />
                                                    </x-base.popover.button>
                                                    <x-base.popover.panel>
                                                        <div class="p-2">
                                                            <div>
                                                                <div class="text-xs text-left">From</div>
                                                                <x-base.form-input
                                                                    class="flex-1 mt-2"
                                                                    type="text"
                                                                    placeholder="example@gmail.com"
                                                                />
                                                            </div>
                                                            <div class="mt-3">
                                                                <div class="text-xs text-left">To</div>
                                                                <x-base.form-input
                                                                    class="flex-1 mt-2"
                                                                    type="text"
                                                                    placeholder="example@gmail.com"
                                                                />
                                                            </div>
                                                            <div class="flex items-center mt-3">
                                                                <x-base.button
                                                                    class="w-32 ml-auto"
                                                                    data-dismiss="dropdown"
                                                                    variant="secondary"
                                                                >
                                                                    Close
                                                                </x-base.button>
                                                                <x-base.button
                                                                    class="w-32 ml-2"
                                                                    variant="primary"
                                                                >
                                                                    Search
                                                                </x-base.button>
                                                            </div>
                                                        </div>
                                                    </x-base.popover.panel>
                                                </x-base.popover>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <x-base.popover
                                                        class="inline-block"
                                                        placement="bottom-start"
                                                    >
                                                        <x-base.popover.button
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Filter Dropdown
                                                            <x-base.lucide
                                                                class="w-4 h-4 ml-2"
                                                                icon="ChevronDown"
                                                            />
                                                        </x-base.popover.button>
                                                        <x-base.popover.panel>
                                                            <div class="p-2">
                                                                <div>
                                                                    <div class="text-xs text-left">From</div>
                                                                    <x-base.form-input
                                                                        class="flex-1 mt-2"
                                                                        type="text"
                                                                        placeholder="example@gmail.com"
                                                                    />
                                                                </div>
                                                                <div class="mt-3">
                                                                    <div class="text-xs text-left">To</div>
                                                                    <x-base.form-input
                                                                        class="flex-1 mt-2"
                                                                        type="text"
                                                                        placeholder="example@gmail.com"
                                                                    />
                                                                </div>
                                                                <div class="flex items-center mt-3">
                                                                    <x-base.button
                                                                        class="w-32 ml-auto"
                                                                        data-dismiss="dropdown"
                                                                        variant="secondary"
                                                                    >
                                                                        Close
                                                                    </x-base.button>
                                                                    <x-base.button
                                                                        class="w-32 ml-2"
                                                                        variant="primary"
                                                                    >
                                                                        Search
                                                                    </x-base.button>
                                                                </div>
                                                            </div>
                                                        </x-base.popover.panel>
                                                    </x-base.popover>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Dropdowns with close buttons offer improved user
                                    interaction, allowing users to easily dismiss the
                                    dropdown when it's no longer needed. Customize the
                                    appearance and behavior of the close button to fit your
                                    application's requirements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Scrolled Dropdown
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-5"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-5"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Scrolled dropdowns are useful when you have a long list
                                    of options to display in a dropdown menu. By limiting
                                    the height of the dropdown and enabling scrolling, you
                                    can provide a more compact and user-friendly interface.
                                    This section covers how to create scrolled dropdowns
                                    using the `Menu` component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex justify-center">
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40 h-32 overflow-y-auto">
                                                        <x-base.menu.item>January</x-base.menu.item>
                                                        <x-base.menu.item>February</x-base.menu.item>
                                                        <x-base.menu.item>March</x-base.menu.item>
                                                        <x-base.menu.item>June</x-base.menu.item>
                                                        <x-base.menu.item>July</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40 h-32 overflow-y-auto">
                                                        <x-base.menu.item>January</x-base.menu.item>
                                                        <x-base.menu.item>February</x-base.menu.item>
                                                        <x-base.menu.item>March</x-base.menu.item>
                                                        <x-base.menu.item>June</x-base.menu.item>
                                                        <x-base.menu.item>July</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Scrolled dropdowns are a practical solution when dealing
                                    with long lists of options in a limited space. By
                                    enabling scrolling, you can keep the dropdown compact
                                    and user-friendly. Customize the appearance and behavior
                                    of the scrollbar and dropdown to align with your
                                    application's style and requirements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Header & Icon Dropdown
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-6"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-6"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Header and icon dropdowns are a great way to categorize
                                    and visually enhance your dropdown menus. This section
                                    covers how to create dropdowns with headers and icons
                                    using the `Menu` component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex justify-center">
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.header>Export Tools</x-base.menu.header>
                                                        <x-base.menu.divider />
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Printer"
                                                            />
                                                            Print
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="ExternalLink"
                                                            />
                                                            Excel
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="FileText"
                                                            />
                                                            CSV
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Archive"
                                                            />
                                                            PDF
                                                        </x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.menu>
                                                    <x-base.menu.button
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Show Dropdown
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.header>Export Tools</x-base.menu.header>
                                                        <x-base.menu.divider />
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Printer"
                                                            />
                                                            Print
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="ExternalLink"
                                                            />
                                                            Excel
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="FileText"
                                                            />
                                                            CSV
                                                        </x-base.menu.item>
                                                        <x-base.menu.item>
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="Archive"
                                                            />
                                                            PDF
                                                        </x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Header and icon dropdowns provide a clear and visually
                                    appealing way to present grouped menu items. Customize
                                    the appearance and behavior of headers, icons, and
                                    dropdown items to align with your application's style
                                    and requirements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Dropdown Placement
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-7"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-7"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Dropdown placement allows you to control where the
                                    dropdown menu appears in relation to the triggering
                                    button or element. This section covers how to specify
                                    the placement of a dropdown menu using the `Menu`
                                    component.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="top-start"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Top Start
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="top"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Top
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="top-end"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Top End
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="right-start"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Right Start
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="right"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Right
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="right-end"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Right End
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="bottom-end"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Bottom End
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="bottom"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Bottom
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="bottom-start"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Bottom Start
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="left-start"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Left Start
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="left"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Left
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                                <x-base.menu
                                                    class="inline-block mb-2 mr-1"
                                                    placement="left-end"
                                                >
                                                    <x-base.menu.button
                                                        class="w-32"
                                                        as="x-base.button"
                                                        variant="primary"
                                                    >
                                                        Left End
                                                    </x-base.menu.button>
                                                    <x-base.menu.items class="w-40">
                                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                    </x-base.menu.items>
                                                </x-base.menu>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="top-start"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Top Start
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="top"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Top
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="top-end"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Top End
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="right-start"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Right Start
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="right"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Right
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="right-end"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Right End
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="bottom-end"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Bottom End
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="bottom"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Bottom
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="bottom-start"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Bottom Start
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="left-start"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Left Start
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="left"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Left
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                    <x-base.menu
                                                        class="inline-block mb-2 mr-1"
                                                        placement="left-end"
                                                    >
                                                        <x-base.menu.button
                                                            class="w-32"
                                                            as="x-base.button"
                                                            variant="primary"
                                                        >
                                                            Left End
                                                        </x-base.menu.button>
                                                        <x-base.menu.items class="w-40">
                                                            <x-base.menu.item>New Dropdown</x-base.menu.item>
                                                            <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                                        </x-base.menu.items>
                                                    </x-base.menu>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Dropdown placement is a crucial aspect of dropdown
                                    design. By controlling where the dropdown appears, you
                                    can ensure that it fits within your application's layout
                                    and provides a seamless user experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div
                            class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                            <div class="text-[0.94rem] font-medium">Component API</div>
                        </div>
                        <div>
                            <p class="leading-relaxed">
                                In this section, you will find detailed information about the
                                available props, classes, and options that can be used with
                                the component. Understanding these properties is essential for
                                customizing and configuring the component to suit your
                                specific requirements.
                            </p>
                            <p class="mt-2 leading-relaxed">
                                Below is a list of props that can be passed to the component:
                            </p>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="text-center"
                                                    colspan="3"
                                                >
                                                    No spesific props
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu.Button</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td>`as`</x-base.table.td>
                                                <x-base.table.td>`string`</x-base.table.td>
                                                <x-base.table.td>
                                                    The HTML element or React component type to render
                                                    as the button
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu.Items</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td>`placement`</x-base.table.td>
                                                <x-base.table.td>
                                                    `top-start`, `top`, `top-end`, `right-start`,
                                                    `right`, `right-end`, `bottom-end`, `bottom`,
                                                    `bottom-start`, `left-start`, `left`, `left-end`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    Determines the positioning of the dropdown menu
                                                    relative to its trigger element. Choose from options
                                                    such as 'top', 'bottom', 'left', or 'right' to
                                                    control the direction in which the menu expands.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu.Item</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="text-center"
                                                    colspan="3"
                                                >
                                                    No spesific props
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu.Divider</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="text-center"
                                                    colspan="3"
                                                >
                                                    No spesific props
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu.Header</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="text-center"
                                                    colspan="3"
                                                >
                                                    No spesific props
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Menu.Footer</div>
                                </div>
                                <div class="mt-2.5 flex flex-col gap-3.5 overflow-x-auto px-5 pb-5 pt-2 leading-relaxed">
                                    <x-base.table sm>
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="w-44 whitespace-nowrap">
                                                    Prop
                                                </x-base.table.th>
                                                <x-base.table.th class="w-56 whitespace-nowrap">
                                                    Type
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap">
                                                    Description
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="text-center"
                                                    colspan="3"
                                                >
                                                    No spesific props
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative order-first col-span-12 lg:order-last lg:col-span-3 xl:col-span-2">
                    <div class="sticky top-[104px]">
                        <ul
                            class="relative flex flex-col rounded-[0.6rem] border border-primary/10 bg-primary/[0.03] py-2.5 text-slate-600/80 group-[.mode--light]:border-slate-300/20 group-[.mode--light]:bg-slate-300/10">
                            <li @class([
                                'relative pl-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white active',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Basic Dropdown
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Header & Footer Dropdown
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Icon Dropdown
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Dropdown with Close Button
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Scrolled Dropdown
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Header & Icon Dropdown
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Dropdown Placement
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Component API
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
