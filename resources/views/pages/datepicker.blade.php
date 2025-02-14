@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Datepicker
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the power of our Datepicker component for simplified date
                    selection and input in your web applications.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Datepicker
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
                                    The "Basic Datepicker" component allows users to select
                                    dates from a calendar. It is a fundamental input element
                                    in many web applications, especially in forms that
                                    require users to input or select dates.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.litepicker
                                                class="mx-auto block w-56"
                                                data-single-mode="true"
                                            />
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.litepicker
                                                    class="mx-auto block w-56"
                                                    data-single-mode="true"
                                                />
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Basic Datepicker" component using Litepicker
                                    provides a user-friendly way to select dates for your
                                    web application. It's highly configurable and easy to
                                    integrate into your projects.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Input Group
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
                                    The "Input Group" component combines an input field with
                                    a calendar icon and a datepicker to facilitate date
                                    selection in your web application. This component is
                                    useful for improving the user experience when inputting
                                    dates in forms.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="relative mx-auto w-56">
                                                <div
                                                    class="absolute flex h-full w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-500 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="Calendar"
                                                    />
                                                </div>
                                                <x-base.litepicker
                                                    class="pl-12"
                                                    data-single-mode="true"
                                                />
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="relative mx-auto w-56">
                                                    <div
                                                        class="absolute flex h-full w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-500 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="Calendar"
                                                        />
                                                    </div>
                                                    <x-base.litepicker
                                                        class="pl-12"
                                                        data-single-mode="true"
                                                    />
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Input Group Datepicker" component provides an
                                    elegant and user-friendly way to select dates in your
                                    web application. By combining an input field with a
                                    calendar icon and Litepicker, users can easily input
                                    dates, making your forms more intuitive and accessible.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Date Range Picker
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
                                    The "Date Range Picker" component allows users to select
                                    a date range in your web application. This component is
                                    useful for scenarios where you need to collect date
                                    ranges, such as booking systems or date-based filtering.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.litepicker class="mx-auto block w-56" />
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.litepicker class="mx-auto block w-56" />
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Date Range Picker" component enhances your web
                                    application by providing an easy and intuitive way for
                                    users to select date ranges. Whether you're building a
                                    booking system or implementing date-based filtering,
                                    this component streamlines the process of collecting
                                    date ranges, making your application more user-friendly
                                    and efficient.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Modal Datepicker
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
                                    The "Modal Datepicker" component combines the
                                    functionality of a datepicker with a modal window,
                                    allowing users to select dates within a modal interface.
                                    This component is useful for scenarios where you want to
                                    provide a focused and distraction-free date selection
                                    experience.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Show Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#datepicker-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Show Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="datepicker-modal-preview">
                                                <x-base.dialog.panel>
                                                    <!-- BEGIN: Modal Header -->
                                                    <x-base.dialog.title>
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Filter by Date
                                                        </h2>
                                                        <x-base.button
                                                            class="hidden sm:flex"
                                                            variant="outline-secondary"
                                                        >
                                                            <x-base.lucide
                                                                class="mr-2 h-4 w-4"
                                                                icon="File"
                                                            />
                                                            Download Docs
                                                        </x-base.button>
                                                        <x-base.menu class="sm:hidden">
                                                            <x-base.menu.button
                                                                class="block h-5 w-5"
                                                                href="#"
                                                                as="a"
                                                            >
                                                                <x-base.lucide
                                                                    class="h-5 w-5 text-slate-500"
                                                                    icon="MoreHorizontal"
                                                                />
                                                            </x-base.menu.button>
                                                            <x-base.menu.items class="w-40">
                                                                <x-base.menu.item>
                                                                    <x-base.lucide
                                                                        class="mr-2 h-4 w-4"
                                                                        icon="File"
                                                                    />
                                                                    Download Docs
                                                                </x-base.menu.item>
                                                            </x-base.menu.items>
                                                        </x-base.menu>
                                                    </x-base.dialog.title>
                                                    <!-- END: Modal Header -->
                                                    <!-- BEGIN: Modal Body -->
                                                    <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-datepicker-1">
                                                                From
                                                            </x-base.form-label>
                                                            <x-base.litepicker
                                                                id="modal-datepicker-1"
                                                                data-single-mode="true"
                                                            />
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-datepicker-2">
                                                                To
                                                            </x-base.form-label>
                                                            <x-base.litepicker
                                                                id="modal-datepicker-2"
                                                                data-single-mode="true"
                                                            />
                                                        </div>
                                                    </x-base.dialog.description>
                                                    <!-- END: Modal Body -->
                                                    <!-- BEGIN: Modal Footer -->
                                                    <x-base.dialog.footer class="text-right">
                                                        <x-base.button
                                                            class="mr-1 w-20"
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            variant="outline-secondary"
                                                        >
                                                            Cancel
                                                        </x-base.button>
                                                        <x-base.button
                                                            class="w-20"
                                                            type="button"
                                                            variant="primary"
                                                        >
                                                            Submit
                                                        </x-base.button>
                                                    </x-base.dialog.footer>
                                                    <!-- END: Modal Footer -->
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Show Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#datepicker-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Show Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="datepicker-modal-preview">
                                                    <x-base.dialog.panel>
                                                        <!-- BEGIN: Modal Header -->
                                                        <x-base.dialog.title>
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Filter by Date
                                                            </h2>
                                                            <x-base.button
                                                                class="hidden sm:flex"
                                                                variant="outline-secondary"
                                                            >
                                                                <x-base.lucide
                                                                    class="mr-2 h-4 w-4"
                                                                    icon="File"
                                                                />
                                                                Download Docs
                                                            </x-base.button>
                                                            <x-base.menu class="sm:hidden">
                                                                <x-base.menu.button
                                                                    class="block h-5 w-5"
                                                                    href="#"
                                                                    as="a"
                                                                >
                                                                    <x-base.lucide
                                                                        class="h-5 w-5 text-slate-500"
                                                                        icon="MoreHorizontal"
                                                                    />
                                                                </x-base.menu.button>
                                                                <x-base.menu.items class="w-40">
                                                                    <x-base.menu.item>
                                                                        <x-base.lucide
                                                                            class="mr-2 h-4 w-4"
                                                                            icon="File"
                                                                        />
                                                                        Download Docs
                                                                    </x-base.menu.item>
                                                                </x-base.menu.items>
                                                            </x-base.menu>
                                                        </x-base.dialog.title>
                                                        <!-- END: Modal Header -->
                                                        <!-- BEGIN: Modal Body -->
                                                        <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-datepicker-1">
                                                                    From
                                                                </x-base.form-label>
                                                                <x-base.litepicker
                                                                    id="modal-datepicker-1"
                                                                    data-single-mode="true"
                                                                />
                                                            </div>
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-datepicker-2">
                                                                    To
                                                                </x-base.form-label>
                                                                <x-base.litepicker
                                                                    id="modal-datepicker-2"
                                                                    data-single-mode="true"
                                                                />
                                                            </div>
                                                        </x-base.dialog.description>
                                                        <!-- END: Modal Body -->
                                                        <!-- BEGIN: Modal Footer -->
                                                        <x-base.dialog.footer class="text-right">
                                                            <x-base.button
                                                                class="mr-1 w-20"
                                                                data-tw-dismiss="modal"
                                                                type="button"
                                                                variant="outline-secondary"
                                                            >
                                                                Cancel
                                                            </x-base.button>
                                                            <x-base.button
                                                                class="w-20"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Submit
                                                            </x-base.button>
                                                        </x-base.dialog.footer>
                                                        <!-- END: Modal Footer -->
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Modal Datepicker" component combines the
                                    convenience of a datepicker with the user-friendly
                                    experience of a modal window. This integration provides
                                    a clean and organized way for users to select dates in
                                    your web application, making it ideal for date-based
                                    filtering or any scenario where date selection is
                                    required.
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
                                    <div class="-mt-px">Litepicker</div>
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
                                                <x-base.table.td>`options`</x-base.table.td>
                                                <x-base.table.td>`LitepickerConfig`</x-base.table.td>
                                                <x-base.table.td>Litepicker configuration options.</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`value`</x-base.table.td>
                                                <x-base.table.td>`string`</x-base.table.td>
                                                <x-base.table.td>
                                                    The value of the Litepicker input.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onChange`</x-base.table.td>
                                                <x-base.table.td>`(date: string) =&gt; void`</x-base.table.td>
                                                <x-base.table.td>
                                                    A callback function that is called when the
                                                    Litepicker input value changes.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: LitepickerElement) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A function that receives a reference to the
                                                    Litepicker input element.
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
                                    Basic Datepicker
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
                                    Input Group
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
                                    Date Range Picker
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
                                    Modal Datepicker
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
