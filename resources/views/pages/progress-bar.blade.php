@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Progress Bar
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the power of our Progress Bar component for visualizing
                    progress and conveying information effectively.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Progress Bar
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
                                    The Basic Progress Bar component allows you to visually
                                    represent the progress of a task or process, providing
                                    users with real-time feedback on completion status. This
                                    section provides an introduction to the Basic Progress
                                    Bar and how to use it effectively.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-1/2"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-2/3"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-3/4"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-1/2"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-2/3"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-3/4"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The Basic Progress Bar is a fundamental component for
                                    enhancing user experience by providing clear feedback on
                                    task progress. By following the steps outlined above,
                                    you can easily integrate it into your project and tailor
                                    it to meet your specific requirements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>

                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Progress Bar with Label
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
                                    The Progress Bar with Label component combines a visual
                                    progress bar with a text label to provide users with a
                                    clear indication of progress. This section introduces
                                    the Progress Bar with Label and how to integrate it into
                                    your project effectively.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.progress class="h-4">
                                                    <x-base.progress.bar
                                                        class="w-1/2"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    >
                                                        50%
                                                    </x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress class="h-4">
                                                    <x-base.progress.bar
                                                        class="w-2/3"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    >
                                                        60%
                                                    </x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress class="h-4">
                                                    <x-base.progress.bar
                                                        class="w-3/4"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    >
                                                        70%
                                                    </x-base.progress.bar>
                                                </x-base.progress>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.progress class="h-4">
                                                        <x-base.progress.bar
                                                            class="w-1/2"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            50%
                                                        </x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress class="h-4">
                                                        <x-base.progress.bar
                                                            class="w-2/3"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            60%
                                                        </x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress class="h-4">
                                                        <x-base.progress.bar
                                                            class="w-3/4"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            70%
                                                        </x-base.progress.bar>
                                                    </x-base.progress>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The Progress Bar with Label component is a valuable
                                    addition to your user interface, offering both visual
                                    and textual progress updates. By following the steps
                                    outlined above, you can seamlessly integrate it into
                                    your project and tailor it to suit your specific
                                    requirements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Progress Bar Height
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
                                    The "Progress Bar Height" section explains how to
                                    control the height of progress bars to suit your
                                    project's design and layout. Customizing the height
                                    allows you to integrate progress bars seamlessly into
                                    your application's visual hierarchy.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.progress class="h-1">
                                                    <x-base.progress.bar
                                                        class="w-1/2"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-2/3"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress class="h-3">
                                                    <x-base.progress.bar
                                                        class="w-3/4"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.progress class="h-1">
                                                        <x-base.progress.bar
                                                            class="w-1/2"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-2/3"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress class="h-3">
                                                        <x-base.progress.bar
                                                            class="w-3/4"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Progress Bar Height" section has demonstrated how
                                    to control the height of progress bars in your project.
                                    By following these guidelines and maintaining
                                    consistency, you can create visually appealing and
                                    accessible progress bars that align with your
                                    application's design.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Progress Bar Color
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
                                    The "Progress Bar Color" section explains how to
                                    customize the colors of progress bars to enhance your
                                    application's visual appeal and convey information
                                    effectively. You can choose from a variety of colors to
                                    match your brand's identity or signify different stages
                                    of a process.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-1/2"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-2/3 bg-success"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-3/4 bg-warning"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                                <x-base.progress>
                                                    <x-base.progress.bar
                                                        class="w-3/4 bg-danger"
                                                        role="progressbar"
                                                        aria-valuenow="0"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></x-base.progress.bar>
                                                </x-base.progress>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-1/2"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-2/3 bg-success"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-3/4 bg-warning"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                    <x-base.progress>
                                                        <x-base.progress.bar
                                                            class="w-3/4 bg-danger"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></x-base.progress.bar>
                                                    </x-base.progress>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Progress Bar Color" section has shown you how to
                                    customize the colors of progress bars to align with your
                                    application's design and convey meaning effectively. By
                                    choosing the right colors and considering accessibility,
                                    you can enhance the user experience and make progress
                                    bars an integral part of your application's UI.
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
                                    <div class="-mt-px">Progress</div>
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
                                                    colSpan="3"
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
                                    <div class="-mt-px">Progress.Bar</div>
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
                                                    colSpan="3"
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
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    Basic Progress Bar
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
                                    Progress Bar with Label
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
                                    Progress Bar Height
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
                                    Progress Bar Color
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
