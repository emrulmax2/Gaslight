@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Buttons
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Explore the versatility of our Buttons component for enhancing user
                    interactions on your application.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Buttons
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
                                    Buttons are fundamental elements in web and app design,
                                    allowing users to interact with your content and perform
                                    actions. The Basic Buttons component provides a range of
                                    button styles that you can easily incorporate into your
                                    project. These buttons come in various color variants to
                                    suit your design needs.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                >
                                                    Primary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                >
                                                    Secondary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="success"
                                                >
                                                    Success
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="warning"
                                                >
                                                    Warning
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="pending"
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="danger"
                                                >
                                                    Danger
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="dark"
                                                >
                                                    Dark
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                    >
                                                        Primary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                    >
                                                        Secondary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="success"
                                                    >
                                                        Success
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="warning"
                                                    >
                                                        Warning
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="pending"
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="danger"
                                                    >
                                                        Danger
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="dark"
                                                    >
                                                        Dark
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Buttons are essential for user interaction in your web
                                    or app project. The Basic Buttons component provides a
                                    wide range of styles and customization options to ensure
                                    your buttons are not only functional but also visually
                                    appealing.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Button Sizes
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
                                    The Button Sizes component allows you to adjust the size
                                    of buttons to match your design requirements. Whether
                                    you need small, medium, or large buttons, this feature
                                    ensures that your buttons fit seamlessly within your
                                    user interface.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                    size="sm"
                                                >
                                                    Small
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                >
                                                    Medium
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                    size="lg"
                                                >
                                                    Large
                                                </x-base.button>
                                            </div>
                                            <div class="mt-5 flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                    size="sm"
                                                >
                                                    Small
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                >
                                                    Medium
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                    size="lg"
                                                >
                                                    Large
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                        size="sm"
                                                    >
                                                        Small
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                    >
                                                        Medium
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                        size="lg"
                                                    >
                                                        Large
                                                    </x-base.button>
                                                </div>
                                                <div class="mt-5 flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                        size="sm"
                                                    >
                                                        Small
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                    >
                                                        Medium
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                        size="lg"
                                                    >
                                                        Large
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Button Sizes provide the flexibility you need to create
                                    buttons that seamlessly integrate with your project's
                                    design. Whether you want small, medium, or large
                                    buttons, you can easily achieve the desired button size
                                    with this component.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Working with Links
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
                                    The Button Link component allows you to create buttons
                                    that function as links. These buttons are versatile and
                                    can be used to navigate to different sections of your
                                    website or external URLs.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Link
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="secondary"
                                                >
                                                    Button
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="success"
                                                >
                                                    Input
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="warning"
                                                >
                                                    Submit
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="pending"
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="danger"
                                                >
                                                    Reset
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    href=""
                                                    as="a"
                                                    variant="dark"
                                                >
                                                    Metal
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Link
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="secondary"
                                                    >
                                                        Button
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="success"
                                                    >
                                                        Input
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="warning"
                                                    >
                                                        Submit
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="pending"
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="danger"
                                                    >
                                                        Reset
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        href=""
                                                        as="a"
                                                        variant="dark"
                                                    >
                                                        Metal
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Button Link components offer a seamless way to
                                    incorporate interactive links into your web project. Use
                                    them to create buttons that guide users to different
                                    sections of your website or external URLs, enhancing
                                    user experience and navigation.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Elevated Buttons
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
                                    Elevated buttons are designed to stand out and provide
                                    visual depth. They add a sense of interactivity to your
                                    user interface, making it clear that these are clickable
                                    elements. This section covers elevated buttons in
                                    various styles.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                    elevated
                                                >
                                                    Primary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                    elevated
                                                >
                                                    Secondary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="success"
                                                    elevated
                                                >
                                                    Success
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="warning"
                                                    elevated
                                                >
                                                    Warning
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="pending"
                                                    elevated
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="danger"
                                                    elevated
                                                >
                                                    Danger
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="dark"
                                                    elevated
                                                >
                                                    Dark
                                                </x-base.button>
                                            </div>
                                            <div class="mt-5 flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                    elevated
                                                    rounded
                                                >
                                                    Primary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                    elevated
                                                    rounded
                                                >
                                                    Secondary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="success"
                                                    elevated
                                                    rounded
                                                >
                                                    Success
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="warning"
                                                    elevated
                                                    rounded
                                                >
                                                    Warning
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="pending"
                                                    elevated
                                                    rounded
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="danger"
                                                    elevated
                                                    rounded
                                                >
                                                    Danger
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="dark"
                                                    elevated
                                                    rounded
                                                >
                                                    Dark
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                        elevated
                                                    >
                                                        Primary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                        elevated
                                                    >
                                                        Secondary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="success"
                                                        elevated
                                                    >
                                                        Success
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="warning"
                                                        elevated
                                                    >
                                                        Warning
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="pending"
                                                        elevated
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="danger"
                                                        elevated
                                                    >
                                                        Danger
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="dark"
                                                        elevated
                                                    >
                                                        Dark
                                                    </x-base.button>
                                                </div>
                                                <div class="mt-5 flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                        elevated
                                                        rounded
                                                    >
                                                        Primary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                        elevated
                                                        rounded
                                                    >
                                                        Secondary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="success"
                                                        elevated
                                                        rounded
                                                    >
                                                        Success
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="warning"
                                                        elevated
                                                        rounded
                                                    >
                                                        Warning
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="pending"
                                                        elevated
                                                        rounded
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="danger"
                                                        elevated
                                                        rounded
                                                    >
                                                        Danger
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="dark"
                                                        elevated
                                                        rounded
                                                    >
                                                        Dark
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Elevated buttons are an effective way to enhance the
                                    interactivity and visual appeal of your user interface.
                                    They offer a clear indication of clickable elements and
                                    can be customized to match your design preferences.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Social Media Buttons
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
                                    Social media buttons are essential for connecting with
                                    your audience and promoting your content across various
                                    platforms. This section covers social media buttons with
                                    different icons and styles.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="mt-5 flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-32"
                                                    variant="facebook"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Facebook"
                                                    />
                                                    Facebook
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="twitter"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Twitter"
                                                    />
                                                    Twitter
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="instagram"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Instagram"
                                                    />
                                                    Instagram
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="linkedin"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Linkedin"
                                                    />
                                                    Linkedin
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="mt-5 flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="facebook"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Facebook"
                                                        />
                                                        Facebook
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="twitter"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Twitter"
                                                        />
                                                        Twitter
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="instagram"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Instagram"
                                                        />
                                                        Instagram
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="linkedin"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Linkedin"
                                                        />
                                                        Linkedin
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Use these social media buttons strategically to promote
                                    your content and connect with your users on their
                                    preferred platforms, ultimately driving engagement and
                                    growth.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Outline Buttons
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
                                    Outline buttons provide a subtle and stylish way to
                                    present actions or choices to your users. They maintain
                                    a clean and minimalist appearance while offering clear
                                    interaction points.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-primary"
                                                >
                                                    Primary
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-secondary"
                                                >
                                                    Secondary
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-success"
                                                >
                                                    Success
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-warning"
                                                >
                                                    Warning
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-pending"
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-danger"
                                                >
                                                    Danger
                                                </x-base.button>
                                                <x-base.button
                                                    class="inline-block w-24"
                                                    variant="outline-dark"
                                                >
                                                    Dark
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-primary"
                                                    >
                                                        Primary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-secondary"
                                                    >
                                                        Secondary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-success"
                                                    >
                                                        Success
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-warning"
                                                    >
                                                        Warning
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-pending"
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-danger"
                                                    >
                                                        Danger
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="inline-block w-24"
                                                        variant="outline-dark"
                                                    >
                                                        Dark
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Use outline buttons for actions like form submissions,
                                    navigation, or as alternatives to regular buttons to
                                    enhance your website or application's overall user
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
                                    Loading State Buttons
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Loading state buttons are an essential part of a
                                    user-friendly interface. They indicate ongoing actions,
                                    such as saving, adding, loading, or deleting, and
                                    provide feedback to users while they wait for a process
                                    to complete.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button variant="primary">
                                                    Saving
                                                    <x-base.loading-icon
                                                        class="ml-2 h-4 w-4"
                                                        icon="oval"
                                                        color="white"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="success">
                                                    Adding
                                                    <x-base.loading-icon
                                                        class="ml-2 h-4 w-4"
                                                        icon="spinning-circles"
                                                        color="white"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="warning">
                                                    Loading
                                                    <x-base.loading-icon
                                                        class="ml-2 h-4 w-4"
                                                        icon="three-dots"
                                                        color="1a202c"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="danger">
                                                    Deleting
                                                    <x-base.loading-icon
                                                        class="ml-2 h-4 w-4"
                                                        icon="puff"
                                                        color="white"
                                                    />
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button variant="primary">
                                                        Saving
                                                        <x-base.loading-icon
                                                            class="ml-2 h-4 w-4"
                                                            icon="oval"
                                                            color="white"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="success">
                                                        Adding
                                                        <x-base.loading-icon
                                                            class="ml-2 h-4 w-4"
                                                            icon="spinning-circles"
                                                            color="white"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="warning">
                                                        Loading
                                                        <x-base.loading-icon
                                                            class="ml-2 h-4 w-4"
                                                            icon="three-dots"
                                                            color="1a202c"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="danger">
                                                        Deleting
                                                        <x-base.loading-icon
                                                            class="ml-2 h-4 w-4"
                                                            icon="puff"
                                                            color="white"
                                                        />
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Consider using loading state buttons for actions like
                                    saving, adding, loading data, or deleting items to
                                    improve the overall usability of your website or
                                    application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Rounded Buttons
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-8"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-8"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Rounded buttons provide a visually pleasing and modern
                                    touch to your user interface. They soften the edges of
                                    traditional buttons, making them appear more inviting
                                    and user-friendly. This section explores how to use
                                    rounded buttons effectively in your project.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="primary"
                                                    rounded
                                                >
                                                    Primary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="secondary"
                                                    rounded
                                                >
                                                    Secondary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="success"
                                                    rounded
                                                >
                                                    Success
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="warning"
                                                    rounded
                                                >
                                                    Warning
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="pending"
                                                    rounded
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="danger"
                                                    rounded
                                                >
                                                    Danger
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="dark"
                                                    rounded
                                                >
                                                    Dark
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="primary"
                                                        rounded
                                                    >
                                                        Primary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="secondary"
                                                        rounded
                                                    >
                                                        Secondary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="success"
                                                        rounded
                                                    >
                                                        Success
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="warning"
                                                        rounded
                                                    >
                                                        Warning
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="pending"
                                                        rounded
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="danger"
                                                        rounded
                                                    >
                                                        Danger
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="dark"
                                                        rounded
                                                    >
                                                        Dark
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Consider using rounded buttons for various actions, such
                                    as primary actions, secondary actions, success
                                    notifications, and more, to make your UI elements more
                                    aesthetically pleasing and approachable.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Soft Color Buttons
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-9"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-9"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Soft color buttons add a touch of elegance and subtlety
                                    to your user interface. These buttons use gentle, muted
                                    colors that are visually appealing without being too
                                    overpowering. In this section, you'll learn how to use
                                    soft color buttons effectively in your project.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-primary"
                                                    rounded
                                                >
                                                    Primary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-secondary"
                                                    rounded
                                                >
                                                    Secondary
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-success"
                                                    rounded
                                                >
                                                    Success
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-warning"
                                                    rounded
                                                >
                                                    Warning
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-pending"
                                                    rounded
                                                >
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-danger"
                                                    rounded
                                                >
                                                    Danger
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-24"
                                                    variant="soft-dark"
                                                    rounded
                                                >
                                                    Dark
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-primary"
                                                        rounded
                                                    >
                                                        Primary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-secondary"
                                                        rounded
                                                    >
                                                        Secondary
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-success"
                                                        rounded
                                                    >
                                                        Success
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-warning"
                                                        rounded
                                                    >
                                                        Warning
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-pending"
                                                        rounded
                                                    >
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-danger"
                                                        rounded
                                                    >
                                                        Danger
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-24"
                                                        variant="soft-dark"
                                                        rounded
                                                    >
                                                        Dark
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Soft color buttons provide a subtle yet visually
                                    appealing option for your UI elements. Their gentle
                                    colors can enhance the aesthetics of your user interface
                                    without overwhelming the user.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Icon Buttons
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-10"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-10"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    Icon buttons allow you to incorporate meaningful icons
                                    into your user interface for various actions or
                                    functions. In this section, you'll discover how to use
                                    icon buttons effectively and enhance your user
                                    experience.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button
                                                    class="w-32"
                                                    variant="primary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Activity"
                                                    />
                                                    Activity
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="secondary"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="HardDrive"
                                                    />
                                                    Hard Drive
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="success"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Calendar"
                                                    />
                                                    Calendar
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="warning"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Share2"
                                                    />
                                                    Share
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="pending"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Download"
                                                    />
                                                    Pending
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="danger"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Trash"
                                                    />
                                                    Trash
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32"
                                                    variant="dark"
                                                >
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="Image"
                                                    />
                                                    Image
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="primary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Activity"
                                                        />
                                                        Activity
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="secondary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="HardDrive"
                                                        />
                                                        Hard Drive
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="success"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Calendar"
                                                        />
                                                        Calendar
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="warning"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Share2"
                                                        />
                                                        Share
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="pending"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Download"
                                                        />
                                                        Pending
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="danger"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Trash"
                                                        />
                                                        Trash
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="w-32"
                                                        variant="dark"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4"
                                                            icon="Image"
                                                        />
                                                        Image
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Consider using icon buttons to streamline user
                                    interactions, convey meaning at a glance, and create a
                                    more intuitive interface for your audience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Icon Only Buttons
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Icon-only buttons are a powerful tool for creating
                                    minimalist and intuitive user interfaces. In this
                                    section, you'll learn how to use icon-only buttons
                                    effectively to enhance the usability and aesthetics of
                                    your web or app project.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <x-base.button variant="primary">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="Activity"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="secondary">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="HardDrive"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="success">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="Calendar"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="warning">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="Share2"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="pending">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="Download"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="danger">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="Trash"
                                                    />
                                                </x-base.button>
                                                <x-base.button variant="dark">
                                                    <x-base.lucide
                                                        class="h-5 w-5"
                                                        icon="Image"
                                                    />
                                                </x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <x-base.button variant="primary">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="Activity"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="secondary">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="HardDrive"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="success">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="Calendar"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="warning">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="Share2"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="pending">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="Download"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="danger">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="Trash"
                                                        />
                                                    </x-base.button>
                                                    <x-base.button variant="dark">
                                                        <x-base.lucide
                                                            class="h-5 w-5"
                                                            icon="Image"
                                                        />
                                                    </x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Icon-only buttons are an excellent choice for modern
                                    user interfaces, offering simplicity, clarity, and a
                                    sleek design. Whether you're designing a mobile app or a
                                    web application, consider using icon-only buttons to
                                    create a user-friendly and visually appealing interface
                                    that keeps users engaged and informed.
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
                                    <div class="-mt-px">Button</div>
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
                                                    HTML element type for the button (default is
                                                    "button" or "a")
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`size`</x-base.table.td>
                                                <x-base.table.td>`Size`</x-base.table.td>
                                                <x-base.table.td>Size of the button ("sm" or "lg")</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`variant`</x-base.table.td>
                                                <x-base.table.td>`Variant`</x-base.table.td>
                                                <x-base.table.td>Variant of the button style</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`elevated`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Indicates if the button has an elevated shadow
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`rounded`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Indicates if the button is rounded
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
                                    Basic Buttons
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
                                    Button Sizes
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
                                    Workign with Links
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
                                    Elevated Buttons
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
                                    Social Media Buttons
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
                                    Outline Buttons
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
                                    Loading State Buttons
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
                                    Rounded Buttons
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
                                    Soft Color Buttons
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
                                    Icon Buttons
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
                                    Icon Only Buttons
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
