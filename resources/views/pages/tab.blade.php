@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Tab
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover tab component, elevate navigation with versatile tabs –
                    from classic to boxed styles!
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Tab
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-11"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-11"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    The "Basic Tab" component provides a simple and
                                    intuitive way to create tabbed content for your web
                                    applications. Easily organize and display information in
                                    a clean tabbed interface.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tab.group>
                                                <x-base.tab.list variant="tabs">
                                                    <x-base.tab
                                                        id="example-1-tab"
                                                        selected
                                                    >
                                                        <x-base.tab.button
                                                            class="w-full py-2"
                                                            as="button"
                                                        >
                                                            Example Tab 1
                                                        </x-base.tab.button>
                                                    </x-base.tab>
                                                    <x-base.tab id="example-2-tab">
                                                        <x-base.tab.button
                                                            class="w-full py-2"
                                                            as="button"
                                                        >
                                                            Example Tab 2
                                                        </x-base.tab.button>
                                                    </x-base.tab>
                                                </x-base.tab.list>
                                                <x-base.tab.panels class="border-b border-l border-r">
                                                    <x-base.tab.panel
                                                        class="p-5 leading-relaxed"
                                                        id="example-1"
                                                        selected
                                                    >
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer
                                                        took a galley of type and scrambled it to make
                                                        a type specimen book. It has survived not only
                                                        five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially
                                                        unchanged. It was popularised in the 1960s
                                                        with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with
                                                        desktop publishing software like Aldus
                                                        PageMaker including versions of Lorem Ipsum.
                                                    </x-base.tab.panel>
                                                    <x-base.tab.panel
                                                        class="p-5 leading-relaxed"
                                                        id="example-2"
                                                    >
                                                        It is a long established fact that a reader
                                                        will be distracted by the readable content of
                                                        a page when looking at its layout. The point
                                                        of using Lorem Ipsum is that it has a
                                                        more-or-less normal distribution of letters,
                                                        as opposed to using 'Content here, content
                                                        here', making it look like readable English.
                                                        Many desktop publishing packages and web page
                                                        editors now use Lorem Ipsum as their default
                                                        model text, and a search for 'lorem ipsum'
                                                        will uncover many web sites still in their
                                                        infancy. Various versions have evolved over
                                                        the years, sometimes by accident, sometimes on
                                                        purpose (injected humour and the like).
                                                    </x-base.tab.panel>
                                                </x-base.tab.panels>
                                            </x-base.tab.group>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tab.group>
                                                    <x-base.tab.list variant="tabs">
                                                        <x-base.tab
                                                            id="example-1-tab"
                                                            selected
                                                        >
                                                            <x-base.tab.button
                                                                class="w-full py-2"
                                                                as="button"
                                                            >
                                                                Example Tab 1
                                                            </x-base.tab.button>
                                                        </x-base.tab>
                                                        <x-base.tab id="example-2-tab">
                                                            <x-base.tab.button
                                                                class="w-full py-2"
                                                                as="button"
                                                            >
                                                                Example Tab 2
                                                            </x-base.tab.button>
                                                        </x-base.tab>
                                                    </x-base.tab.list>
                                                    <x-base.tab.panels class="border-b border-l border-r">
                                                        <x-base.tab.panel
                                                            class="p-5 leading-relaxed"
                                                            id="example-1"
                                                            selected
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged. It was popularised in the 1960s with the
                                                            release of Letraset sheets containing Lorem Ipsum
                                                            passages, and more recently with desktop publishing
                                                            software like Aldus PageMaker including versions of
                                                            Lorem Ipsum.
                                                        </x-base.tab.panel>
                                                        <x-base.tab.panel
                                                            class="p-5 leading-relaxed"
                                                            id="example-2"
                                                        >
                                                            It is a long established fact that a reader will be
                                                            distracted by the readable content of a page when
                                                            looking at its layout. The point of using Lorem Ipsum
                                                            is that it has a more-or-less normal distribution of
                                                            letters, as opposed to using 'Content here, content
                                                            here', making it look like readable English. Many
                                                            desktop publishing packages and web page editors now
                                                            use Lorem Ipsum as their default model text, and a
                                                            search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved
                                                            over the years, sometimes by accident, sometimes on
                                                            purpose (injected humour and the like).
                                                        </x-base.tab.panel>
                                                    </x-base.tab.panels>
                                                </x-base.tab.group>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Boxed Tab
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-12"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-12"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    The "Boxed Tab" component offers a unique tabbed
                                    interface with a boxed appearance. It's an excellent
                                    choice when you want to display tabbed content in a
                                    distinct style.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tab.group>
                                                <x-base.tab.list variant="boxed-tabs">
                                                    <x-base.tab
                                                        id="example-3-tab"
                                                        selected
                                                    >
                                                        <x-base.tab.button
                                                            class="w-full py-2"
                                                            as="button"
                                                        >
                                                            Example Tab 1
                                                        </x-base.tab.button>
                                                    </x-base.tab>
                                                    <x-base.tab id="example-4-tab">
                                                        <x-base.tab.button
                                                            class="w-full py-2"
                                                            as="button"
                                                        >
                                                            Example Tab 2
                                                        </x-base.tab.button>
                                                    </x-base.tab>
                                                </x-base.tab.list>
                                                <x-base.tab.panels class="mt-5">
                                                    <x-base.tab.panel
                                                        class="leading-relaxed"
                                                        id="example-3"
                                                        selected
                                                    >
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer
                                                        took a galley of type and scrambled it to make
                                                        a type specimen book. It has survived not only
                                                        five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially
                                                        unchanged. It was popularised in the 1960s
                                                        with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with
                                                        desktop publishing software like Aldus
                                                        PageMaker including versions of Lorem Ipsum.
                                                    </x-base.tab.panel>
                                                    <x-base.tab.panel
                                                        class="leading-relaxed"
                                                        id="example-4"
                                                    >
                                                        It is a long established fact that a reader
                                                        will be distracted by the readable content of
                                                        a page when looking at its layout. The point
                                                        of using Lorem Ipsum is that it has a
                                                        more-or-less normal distribution of letters,
                                                        as opposed to using 'Content here, content
                                                        here', making it look like readable English.
                                                        Many desktop publishing packages and web page
                                                        editors now use Lorem Ipsum as their default
                                                        model text, and a search for 'lorem ipsum'
                                                        will uncover many web sites still in their
                                                        infancy. Various versions have evolved over
                                                        the years, sometimes by accident, sometimes on
                                                        purpose (injected humour and the like).
                                                    </x-base.tab.panel>
                                                </x-base.tab.panels>
                                            </x-base.tab.group>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tab.group>
                                                    <x-base.tab.list variant="boxed-tabs">
                                                        <x-base.tab
                                                            id="example-5-tab"
                                                            selected
                                                        >
                                                            <x-base.tab.button
                                                                class="w-full py-2"
                                                                as="button"
                                                            >
                                                                Example Tab 1
                                                            </x-base.tab.button>
                                                        </x-base.tab>
                                                        <x-base.tab id="example-6-tab">
                                                            <x-base.tab.button
                                                                class="w-full py-2"
                                                                as="button"
                                                            >
                                                                Example Tab 2
                                                            </x-base.tab.button>
                                                        </x-base.tab>
                                                    </x-base.tab.list>
                                                    <x-base.tab.panels class="mt-5">
                                                        <x-base.tab.panel
                                                            class="leading-relaxed"
                                                            id="example-5"
                                                            selected
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged. It was popularised in the 1960s with the
                                                            release of Letraset sheets containing Lorem Ipsum
                                                            passages, and more recently with desktop publishing
                                                            software like Aldus PageMaker including versions of
                                                            Lorem Ipsum.
                                                        </x-base.tab.panel>
                                                        <x-base.tab.panel
                                                            class="leading-relaxed"
                                                            id="example-6"
                                                        >
                                                            It is a long established fact that a reader will be
                                                            distracted by the readable content of a page when
                                                            looking at its layout. The point of using Lorem Ipsum
                                                            is that it has a more-or-less normal distribution of
                                                            letters, as opposed to using 'Content here, content
                                                            here', making it look like readable English. Many
                                                            desktop publishing packages and web page editors now
                                                            use Lorem Ipsum as their default model text, and a
                                                            search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved
                                                            over the years, sometimes by accident, sometimes on
                                                            purpose (injected humour and the like).
                                                        </x-base.tab.panel>
                                                    </x-base.tab.panels>
                                                </x-base.tab.group>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Link Tab</div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-13"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-13"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    The "Link Tab" component provides a clean and simple
                                    tabbed interface with link-like buttons. It's a great
                                    choice when you want to present tabbed content with a
                                    minimalist design.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tab.group>
                                                <x-base.tab.list variant="link-tabs">
                                                    <x-base.tab
                                                        id="example-7-tab"
                                                        selected
                                                    >
                                                        <x-base.tab.button
                                                            class="w-full py-2"
                                                            as="button"
                                                        >
                                                            Example Tab 1
                                                        </x-base.tab.button>
                                                    </x-base.tab>
                                                    <x-base.tab id="example-8-tab">
                                                        <x-base.tab.button
                                                            class="w-full py-2"
                                                            as="button"
                                                        >
                                                            Example Tab 2
                                                        </x-base.tab.button>
                                                    </x-base.tab>
                                                </x-base.tab.list>
                                                <x-base.tab.panels class="mt-5">
                                                    <x-base.tab.panel
                                                        class="leading-relaxed"
                                                        id="example-7"
                                                        selected
                                                    >
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer
                                                        took a galley of type and scrambled it to make
                                                        a type specimen book. It has survived not only
                                                        five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially
                                                        unchanged. It was popularised in the 1960s
                                                        with the release of Letraset sheets containing
                                                        Lorem Ipsum passages, and more recently with
                                                        desktop publishing software like Aldus
                                                        PageMaker including versions of Lorem Ipsum.
                                                    </x-base.tab.panel>
                                                    <x-base.tab.panel
                                                        class="leading-relaxed"
                                                        id="example-8"
                                                    >
                                                        It is a long established fact that a reader
                                                        will be distracted by the readable content of
                                                        a page when looking at its layout. The point
                                                        of using Lorem Ipsum is that it has a
                                                        more-or-less normal distribution of letters,
                                                        as opposed to using 'Content here, content
                                                        here', making it look like readable English.
                                                        Many desktop publishing packages and web page
                                                        editors now use Lorem Ipsum as their default
                                                        model text, and a search for 'lorem ipsum'
                                                        will uncover many web sites still in their
                                                        infancy. Various versions have evolved over
                                                        the years, sometimes by accident, sometimes on
                                                        purpose (injected humour and the like).
                                                    </x-base.tab.panel>
                                                </x-base.tab.panels>
                                            </x-base.tab.group>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tab.group>
                                                    <x-base.tab.list variant="link-tabs">
                                                        <x-base.tab
                                                            id="example-9-tab"
                                                            selected
                                                        >
                                                            <x-base.tab.button
                                                                class="w-full py-2"
                                                                as="button"
                                                            >
                                                                Example Tab 1
                                                            </x-base.tab.button>
                                                        </x-base.tab>
                                                        <x-base.tab id="example-1-tab0">
                                                            <x-base.tab.button
                                                                class="w-full py-2"
                                                                as="button"
                                                            >
                                                                Example Tab 2
                                                            </x-base.tab.button>
                                                        </x-base.tab>
                                                    </x-base.tab.list>
                                                    <x-base.tab.panels class="mt-5">
                                                        <x-base.tab.panel
                                                            class="leading-relaxed"
                                                            id="example-9"
                                                            selected
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged. It was popularised in the 1960s with the
                                                            release of Letraset sheets containing Lorem Ipsum
                                                            passages, and more recently with desktop publishing
                                                            software like Aldus PageMaker including versions of
                                                            Lorem Ipsum.
                                                        </x-base.tab.panel>
                                                        <x-base.tab.panel
                                                            class="leading-relaxed"
                                                            id="example-10"
                                                        >
                                                            It is a long established fact that a reader will be
                                                            distracted by the readable content of a page when
                                                            looking at its layout. The point of using Lorem Ipsum
                                                            is that it has a more-or-less normal distribution of
                                                            letters, as opposed to using 'Content here, content
                                                            here', making it look like readable English. Many
                                                            desktop publishing packages and web page editors now
                                                            use Lorem Ipsum as their default model text, and a
                                                            search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved
                                                            over the years, sometimes by accident, sometimes on
                                                            purpose (injected humour and the like).
                                                        </x-base.tab.panel>
                                                    </x-base.tab.panels>
                                                </x-base.tab.group>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
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
                                    <div class="-mt-px">Tab</div>
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
                                                <x-base.table.td>`fullWidth`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Whether the tab should span full width.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Tab.Button</div>
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
                                                    Element type (e.g., "a", "button") for the tab
                                                    button.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Tab.Group</div>
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
                                    <div class="-mt-px">Tab.List</div>
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
                                                <x-base.table.td>`variant`</x-base.table.td>
                                                <x-base.table.td>
                                                    `tabs`, `pills`, `boxed-tabs`, `link-tabs`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    Sets the variant style for the table head (default
                                                    is "tabs").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Tab.Panels</div>
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
                                    <div class="-mt-px">Tab.Panel</div>
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
                                    Basic Tab
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
                                    Boxed Tab
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
                                    Link Tab
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
