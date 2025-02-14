@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Tooltip
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the versatility of our Tooltip component for adding helpful
                    hints and additional information to your user interface.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Tooltip
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Tooltips are a helpful way to provide additional
                                    information or descriptions for elements on a web page.
                                    They typically appear when users hover over or interact
                                    with an element, offering context and clarification.
                                    This section explains how to implement basic tooltips in
                                    your web application.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <x-base.tippy
                                                    as="x-base.button"
                                                    variant="primary"
                                                    content="This is awesome tooltip example!"
                                                >
                                                    Show Tooltip
                                                </x-base.tippy>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <x-base.tippy
                                                        as="x-base.button"
                                                        variant="primary"
                                                        content="This is awesome tooltip example!"
                                                    >
                                                        Show Tooltip
                                                    </x-base.tippy>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Basic Tooltip" section has demonstrated how to use
                                    tooltips to provide additional information and hints to
                                    users when they interact with elements on your web page.
                                    By following these guidelines and best practices, you
                                    can enhance user experience and provide valuable context
                                    without overwhelming your UI.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>

                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    On Click Tooltip
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    An "On Click Tooltip" is a variation of the traditional
                                    tooltip that appears when the user clicks on an element
                                    rather than hovering over it. This section explains how
                                    to implement tooltips that appear on click events in
                                    your web application.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <x-base.tippy
                                                    data-trigger="click"
                                                    as="x-base.button"
                                                    variant="primary"
                                                    content="This is awesome tooltip example!"
                                                >
                                                    Show Tooltip
                                                </x-base.tippy>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <x-base.tippy
                                                        data-trigger="click"
                                                        as="x-base.button"
                                                        variant="primary"
                                                        content="This is awesome tooltip example!"
                                                    >
                                                        Show Tooltip
                                                    </x-base.tippy>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "On Click Tooltip" section has demonstrated how to
                                    use tooltips that appear when the user clicks on
                                    elements in your web application. By following these
                                    guidelines and best practices, you can provide
                                    additional information and context to your users when
                                    they need it, improving the overall user experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Light Tooltip
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    A "Light Tooltip" is a type of tooltip that provides
                                    additional information when the user hovers over an
                                    element. These tooltips are designed with a clean and
                                    minimalistic appearance. This section explains how to
                                    implement Light Tooltips in your web application.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <x-base.tippy
                                                    data-theme="light"
                                                    as="x-base.button"
                                                    variant="primary"
                                                    content="This is awesome tooltip example!"
                                                >
                                                    Show Tooltip
                                                </x-base.tippy>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <x-base.tippy
                                                        data-theme="light"
                                                        as="x-base.button"
                                                        variant="primary"
                                                        content="This is awesome tooltip example!"
                                                    >
                                                        Show Tooltip
                                                    </x-base.tippy>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Light Tooltip" section has demonstrated how to use
                                    tooltips that provide additional information when the
                                    user hovers over elements in your web application. By
                                    following these guidelines and best practices, you can
                                    enhance user understanding and improve the overall user
                                    experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Custom Tooltip Content
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Custom Tooltip Content allows you to create tooltips
                                    with personalized and dynamic information. Instead of
                                    using static text, you can populate tooltips with
                                    dynamic content such as images, icons, or even React
                                    components. This section explains how to implement
                                    Custom Tooltip Content in your web application.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Custom Tooltip Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tooltip="custom-tooltip-content"
                                                    variant="primary"
                                                >
                                                    Show Tooltip
                                                </x-base.button>
                                            </div>
                                            <!-- END: Custom Tooltip Toggle -->
                                            <!-- BEGIN: Custom Tooltip Content -->
                                            <div class="tooltip-content">
                                                <x-base.tippy-content to="custom-tooltip-content">
                                                    <div class="relative flex items-center py-1">
                                                        <div class="image-fit h-12 w-12">
                                                            <img
                                                                class="rounded-full"
                                                                src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                        <div class="ml-4 mr-auto">
                                                            <div
                                                                class="whitespace-nowrap font-medium leading-normal dark:text-slate-200">
                                                                {{ $users[0]['name'] }}
                                                            </div>
                                                            <div
                                                                class="mt-0.5 whitespace-nowrap text-xs text-slate-500 dark:text-slate-400">
                                                                TailwindCSS 3+ HTML Admin Template
                                                            </div>
                                                        </div>
                                                    </div>
                                                </x-base.tippy-content>
                                            </div>
                                            <!-- END: Custom Tooltip Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Custom Tooltip Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tooltip="custom-tooltip-content"
                                                        variant="primary"
                                                    >
                                                        Show Tooltip
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Custom Tooltip Toggle -->
                                                <!-- BEGIN: Custom Tooltip Content -->
                                                <div class="tooltip-content">
                                                    <x-base.tippy-content to="custom-tooltip-content">
                                                        <div class="relative flex items-center py-1">
                                                            <div class="image-fit h-12 w-12">
                                                                <img
                                                                    class="rounded-full"
                                                                    src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                    alt="Tailwise - Admin Dashboard Template"
                                                                >
                                                            </div>
                                                            <div class="ml-4 mr-auto">
                                                                <div
                                                                    class="whitespace-nowrap font-medium leading-normal dark:text-slate-200">
                                                                    {{ $users[0]['name'] }}
                                                                </div>
                                                                <div
                                                                    class="mt-0.5 whitespace-nowrap text-xs text-slate-500 dark:text-slate-400">
                                                                    TailwindCSS 3+ HTML Admin Template
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-base.tippy-content>
                                                </div>
                                                <!-- END: Custom Tooltip Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Custom Tooltip Content" section has demonstrated
                                    how to create tooltips with personalized and dynamic
                                    content, allowing you to provide users with richer and
                                    context-specific guidance. By leveraging this feature,
                                    you can enhance the overall user experience and
                                    usability of your web application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Chart Tooltip
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Chart tooltips are an essential component of data
                                    visualization, providing users with valuable insights
                                    when interacting with charts and graphs. This section
                                    explains how to implement and customize chart tooltips
                                    in your web application.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Custom Tooltip Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tooltip="chart-tooltip"
                                                    variant="primary"
                                                >
                                                    Show Tooltip
                                                </x-base.button>
                                            </div>
                                            <!-- END: Custom Tooltip Toggle -->
                                            <!-- BEGIN: Custom Tooltip Content -->
                                            <div class="tooltip-content">
                                                <x-base.tippy-content
                                                    class="py-1"
                                                    to="chart-tooltip"
                                                >
                                                    <div class="font-medium dark:text-slate-200">
                                                        Net Worth
                                                    </div>
                                                    <div class="mt-2 flex items-center sm:mt-0">
                                                        <div class="mr-2 flex w-20 dark:text-slate-400">
                                                            USP:
                                                            <span class="ml-auto font-medium text-success">
                                                                +23%
                                                            </span>
                                                        </div>
                                                        <div class="w-24 sm:w-32 lg:w-56">
                                                            <x-simple-line-chart-1 height="h-[30px]" />
                                                        </div>
                                                    </div>
                                                </x-base.tippy-content>
                                            </div>
                                            <!-- END: Custom Tooltip Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Custom Tooltip Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tooltip="chart-tooltip"
                                                        variant="primary"
                                                    >
                                                        Show Tooltip
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Custom Tooltip Toggle -->
                                                <!-- BEGIN: Custom Tooltip Content -->
                                                <div class="tooltip-content">
                                                    <x-base.tippy-content
                                                        class="py-1"
                                                        to="chart-tooltip"
                                                    >
                                                        <div class="font-medium dark:text-slate-200">
                                                            Net Worth
                                                        </div>
                                                        <div class="mt-2 flex items-center sm:mt-0">
                                                            <div class="mr-2 flex w-20 dark:text-slate-400">
                                                                USP:
                                                                <span class="ml-auto font-medium text-success">
                                                                    +23%
                                                                </span>
                                                            </div>
                                                            <div class="w-24 sm:w-32 lg:w-56">
                                                                <x-simple-line-chart-1 height="h-[30px]" />
                                                            </div>
                                                        </div>
                                                    </x-base.tippy-content>
                                                </div>
                                                <!-- END: Custom Tooltip Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Chart Tooltip" section has demonstrated how to
                                    create and customize tooltips for your charts and data
                                    visualizations. By implementing well-designed chart
                                    tooltips, you can provide users with valuable insights,
                                    enhance their understanding of the data, and improve
                                    overall user engagement.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <div
                            class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
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
                                    <div class="-mt-px">Tippy</div>
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
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: PopperElement | null) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A function to get a reference to the PopperElement
                                                    or null
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`content`</x-base.table.td>
                                                <x-base.table.td>`string`</x-base.table.td>
                                                <x-base.table.td>
                                                    The content to display in the tooltip
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`as`</x-base.table.td>
                                                <x-base.table.td>`string`</x-base.table.td>
                                                <x-base.table.td>
                                                    The HTML element type or React component to render
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`options`</x-base.table.td>
                                                <x-base.table.td>`Props`</x-base.table.td>
                                                <x-base.table.td>
                                                    Additional options for customizing the tooltip
                                                    appearance and behavior
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">TippyContent</div>
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
                                                <x-base.table.td>`to`</x-base.table.td>
                                                <x-base.table.td>`string`</x-base.table.td>
                                                <x-base.table.td>
                                                    The target element selector for which the tooltip
                                                    will be displayed (using the data-tooltip attribute)
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: HTMLElement | null) =&gt; HTMLElement`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A function to get a reference to the tooltip element
                                                    or null
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`options`</x-base.table.td>
                                                <x-base.table.td>`Props`</x-base.table.td>
                                                <x-base.table.td>
                                                    Additional options for customizing the tooltip
                                                    appearance and behavior
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
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    Basic Tooltip
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    On Click Tooltip
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    Light Tooltip
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    Custom Tooltip Content
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] group-[.mode--light]:text-white/90 [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70 [.group.mode--light_&.active]:text-white [.group.mode--light_&.active]:before:bg-white',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    Chart Tooltip
                                </a>
                            </li>
                            <li @class([
                                'relative px-5 py-[9.2px] [&.active]:text-primary [&.active]:font-medium [&.active]:before:bg-primary/70',
                                "before:content-[''] before:absolute before:h-[60%] before:w-0.5 before:left-0 before:inset-y-0 before:my-auto before:-ml-px",
                            ])>
                                <a
                                    class="-mt-px block truncate"
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
