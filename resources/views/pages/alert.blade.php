@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Alert
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the power of our Alerts component for delivering important
                    messages and notifications to your users.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Alerts
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
                                    Alerts are essential for communicating important
                                    messages, warnings, or updates to users. In this
                                    section, you'll learn how to use basic alerts
                                    effectively to provide information and enhance the user
                                    experience.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.alert variant="primary">
                                                    Awesome simple alert
                                                </x-base.alert>
                                                <x-base.alert variant="secondary">
                                                    Awesome simple alert
                                                </x-base.alert>
                                                <x-base.alert variant="success">
                                                    Awesome simple alert
                                                </x-base.alert>
                                                <x-base.alert variant="warning">
                                                    Awesome simple alert
                                                </x-base.alert>
                                                <x-base.alert variant="pending">
                                                    Awesome simple alert
                                                </x-base.alert>
                                                <x-base.alert variant="danger">
                                                    Awesome simple alert
                                                </x-base.alert>
                                                <x-base.alert variant="dark">Awesome simple alert</x-base.alert>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.alert variant="primary">
                                                        Awesome simple alert
                                                    </x-base.alert>
                                                    <x-base.alert variant="secondary">
                                                        Awesome simple alert
                                                    </x-base.alert>
                                                    <x-base.alert variant="success">
                                                        Awesome simple alert
                                                    </x-base.alert>
                                                    <x-base.alert variant="warning">
                                                        Awesome simple alert
                                                    </x-base.alert>
                                                    <x-base.alert variant="pending">
                                                        Awesome simple alert
                                                    </x-base.alert>
                                                    <x-base.alert variant="danger">
                                                        Awesome simple alert
                                                    </x-base.alert>
                                                    <x-base.alert variant="dark">Awesome simple alert</x-base.alert>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Basic alerts are a fundamental element of user interface
                                    design, serving as a means to communicate important
                                    messages clearly and effectively. Whether you're
                                    building a website or an application, incorporating
                                    basic alerts can greatly improve the user experience by
                                    providing timely information and feedback.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Icon Alerts
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
                                    Icon alerts combine informative messages with easily
                                    recognizable icons to convey important information to
                                    users effectively. This section will guide you on how to
                                    use icon alerts in your project.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="primary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="success"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="warning"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="pending"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="danger"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="dark"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="primary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertCircle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="secondary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertOctagon"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="success"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertTriangle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="warning"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertCircle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="pending"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertTriangle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="danger"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertOctagon"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="dark"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertTriangle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Icon alerts are a valuable tool for enhancing user
                                    interaction by providing clear and visually appealing
                                    messages. By following the steps above, you can easily
                                    integrate icon alerts into your project and effectively
                                    communicate important information to your users.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Additional Content Alerts
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
                                    Additional content alerts allow you to convey more
                                    information to users by including extra elements within
                                    the alert, such as icons, labels, or additional text.
                                    This section provides guidance on how to use additional
                                    content alerts effectively.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.alert variant="primary">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                                <x-base.alert variant="secondary">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                                <x-base.alert variant="success">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                                <x-base.alert variant="warning">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                                <x-base.alert variant="pending">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                                <x-base.alert variant="danger">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                                <x-base.alert variant="dark">
                                                    <div class="flex items-center">
                                                        <div class="text-lg font-medium">
                                                            Awesome alert with additional info
                                                        </div>
                                                        <div
                                                            class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                                            New
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum
                                                        has been the industry's standard dummy text
                                                        ever since the 1500s.
                                                    </div>
                                                </x-base.alert>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.alert variant="primary">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                    <x-base.alert variant="secondary">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                    <x-base.alert variant="success">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                    <x-base.alert variant="warning">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                    <x-base.alert variant="pending">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                    <x-base.alert variant="danger">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                    <x-base.alert variant="dark">
                                                        <div class="flex items-center">
                                                            <div class="text-lg font-medium">
                                                                Awesome alert with additional info
                                                            </div>
                                                            <div
                                                                class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                                                New
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting industry. Lorem Ipsum
                                                            has been the industry's standard dummy text
                                                            ever since the 1500s.
                                                        </div>
                                                    </x-base.alert>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Additional content alerts are a valuable tool for
                                    delivering richer information to users while maintaining
                                    a clean and organized design. By following the steps
                                    above, you can easily integrate additional content
                                    alerts into your project and enhance your communication
                                    with users.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Icon & Dismiss Alerts
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
                                    Icon & Dismiss Alerts combine icons with dismiss
                                    functionality, allowing you to display important
                                    messages to users and give them the option to close the
                                    alert when they've read it. This section provides
                                    guidance on how to use these alerts effectively.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertCircle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="text-white">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="secondary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertOctagon"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="success"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertTriangle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="warning"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertCircle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="pending"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertTriangle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="danger"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertOctagon"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="text-white">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="dark"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertTriangle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="text-white">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="primary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="text-white">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="success"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="warning"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="pending"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="danger"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="text-white">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="dark"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="text-white">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Icon & Dismiss Alerts are a user-friendly way to provide
                                    information and allow users to manage their
                                    notifications. By following the steps above, you can
                                    seamlessly integrate these alerts into your project and
                                    improve user interaction and communication.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Outline Alerts
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
                                    Outline Alerts provide a clean and minimalistic way to
                                    display important messages with outlined borders. This
                                    section provides guidance on how to use these alerts
                                    effectively to convey information to your users.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertCircle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-secondary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertOctagon"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-success"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertTriangle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-warning"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertCircle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-pending"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertCircle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-danger"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertOctagon"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                            <x-base.alert
                                                class="mb-2 flex items-center"
                                                variant="outline-dark"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-6 w-6"
                                                    icon="AlertTriangle"
                                                />
                                                Awesome alert with icon
                                                <x-base.alert.dismiss-button class="btn-close">
                                                    <x-base.lucide
                                                        class="h-4 w-4"
                                                        icon="X"
                                                    />
                                                </x-base.alert.dismiss-button>
                                            </x-base.alert>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-primary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-success"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-warning"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-pending"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-danger"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="mb-2 flex items-center"
                                                    variant="outline-dark"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                    <x-base.alert.dismiss-button class="btn-close">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.alert.dismiss-button>
                                                </x-base.alert>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Outline Alerts offer a sleek and effective way to
                                    communicate essential information to users while
                                    maintaining a clean design. By following the steps
                                    above, you can seamlessly integrate these alerts into
                                    your project and enhance the user experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Soft Color Alerts
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Soft Color Alerts provide a visually pleasing and gentle
                                    way to convey important messages with soft color tones.
                                    This section provides guidance on how to use these
                                    alerts effectively to enhance the user experience.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col gap-2">
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-primary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-success"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-warning"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertCircle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-pending"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-danger"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertOctagon"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                                <x-base.alert
                                                    class="flex items-center"
                                                    variant="soft-dark"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-6 w-6"
                                                        icon="AlertTriangle"
                                                    />
                                                    Awesome alert with icon
                                                </x-base.alert>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col gap-2">
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-primary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertCircle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-secondary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertOctagon"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-success"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertTriangle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-warning"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertCircle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-pending"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertTriangle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-danger"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertOctagon"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                    <x-base.alert
                                                        class="flex items-center"
                                                        variant="soft-dark"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-6 w-6"
                                                            icon="AlertTriangle"
                                                        />
                                                        Awesome alert with icon
                                                    </x-base.alert>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Soft Color Alerts offer a subtle and pleasing way to
                                    communicate essential information to users while
                                    maintaining a gentle aesthetic. By following the steps
                                    above, you can seamlessly integrate these alerts into
                                    your project and create a visually appealing user
                                    experience.
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
                                    <div class="-mt-px">Alert</div>
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
                                                <x-base.table.td>`dismissible`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Indicates if the alert can be dismissed
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`variant`</x-base.table.td>
                                                <x-base.table.td>`Variant`</x-base.table.td>
                                                <x-base.table.td>Variant of the alert style</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onShow`</x-base.table.td>
                                                <x-base.table.td>`() =&gt; {}`</x-base.table.td>
                                                <x-base.table.td>Callback when the alert is shown</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onShown`</x-base.table.td>
                                                <x-base.table.td>`() =&gt; {}`</x-base.table.td>
                                                <x-base.table.td>Callback after the alert is shown</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onHide`</x-base.table.td>
                                                <x-base.table.td>`() =&gt; {}`</x-base.table.td>
                                                <x-base.table.td>
                                                    Callback when the alert is about to hide
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onHidden`</x-base.table.td>
                                                <x-base.table.td>`() =&gt; {}`</x-base.table.td>
                                                <x-base.table.td>
                                                    Callback after the alert is hidden
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Alert.DismissButton</div>
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
                                                    HTML element type for the dismiss button (default is
                                                    "button" or "a")
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
                                    Basic Alerts
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
                                    Icon Alerts
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
                                    Additional Content Alerts
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
                                    Icon & Dismiss Alerts
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
                                    Outline Alerts
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
                                    Soft Color Alerts
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
