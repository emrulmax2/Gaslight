@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col mt-4 gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Slide Over
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Elevate your web design with slideover components, versatile dialogs
                    for custom content, sizing options, and more!
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Blank Slide Over
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
                                    The "Blank Slide Over" component is a versatile tool
                                    that allows you to create customizable slide-over
                                    dialogs for various purposes on your website. It
                                    provides a clean and simple canvas for you to add your
                                    own content, making it suitable for a wide range of use
                                    cases.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Slide Over Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#basic-slide-over-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Slide Over
                                                </x-base.button>
                                            </div>
                                            <!-- END: Slide Over Toggle -->
                                            <!-- BEGIN: Slide Over Content -->
                                            <x-base.slideover id="basic-slide-over-preview">
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Blank Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description>

                                                        This is totally awesome blank slide over!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Slide Over Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Slide Over Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#basic-slide-over-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Slide Over
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Slide Over Toggle -->
                                                <!-- BEGIN: Slide Over Content -->
                                                <x-base.slideover id="basic-slide-over-preview">
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Blank Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description>

                                                            This is totally awesome blank slide over!
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Slide Over Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Whether you want to display additional information,
                                    gather user input, or present important updates, the
                                    "Blank Slideover" is a flexible solution that ensures
                                    your content remains accessible and engaging. Explore
                                    the possibilities and unlock new ways to interact with
                                    your audience using the "Blank Slideover" component.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Slide Over Size
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
                                    The "Slideover Size" component allows you to control the
                                    dimensions of your slide-over dialogs, ensuring that
                                    they are visually appealing and perfectly tailored to
                                    your content. With multiple size options available, you
                                    can choose the one that best suits your specific use
                                    case.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Small Slide Over Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#small-slide-over-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Small Slide Over
                                                </x-base.button>
                                                <!-- END: Small Slide Over Toggle -->
                                                <!-- BEGIN: Medium Slide Over Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#medium-slide-over-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Medium Slide Over
                                                </x-base.button>
                                                <!-- END: Medium Slide Over Toggle -->
                                                <!-- BEGIN: Large Slide Over Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#large-slide-over-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Large Slide Over
                                                </x-base.button>
                                                <!-- END: Large Slide Over Toggle -->
                                                <!-- BEGIN: Super Large Slide Over Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#superlarge-slide-over-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Superlarge Slide Over
                                                </x-base.button>
                                                <!-- END: Super Large Slide Over Toggle -->
                                            </div>
                                            <!-- BEGIN: Small Slide Over Content -->
                                            <x-base.slideover
                                                id="small-slide-over-size-preview"
                                                size="sm"
                                            >
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Small Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description>
                                                        This is totally awesome small slide over!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Small Slide Over Content -->
                                            <!-- BEGIN: Medium Slide Over Content -->
                                            <x-base.slideover id="medium-slide-over-size-preview">
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Medium Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description>
                                                        This is totally awesome medium slide over!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Medium Slide Over Content -->
                                            <!-- BEGIN: Large Slide Over Content -->
                                            <x-base.slideover
                                                id="large-slide-over-size-preview"
                                                size="lg"
                                            >
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Large Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description>
                                                        This is totally awesome large slide over!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Large Slide Over Content -->
                                            <!-- BEGIN: Super Large Slide Over Content -->
                                            <x-base.slideover
                                                id="superlarge-slide-over-size-preview"
                                                size="xl"
                                            >
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Superlarge Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description>
                                                        This is totally awesome superlarge slide over!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Super Large Slide Over Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Small Slide Over Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#small-slide-over-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Small Slide Over
                                                    </x-base.button>
                                                    <!-- END: Small Slide Over Toggle -->
                                                    <!-- BEGIN: Medium Slide Over Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#medium-slide-over-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Medium Slide Over
                                                    </x-base.button>
                                                    <!-- END: Medium Slide Over Toggle -->
                                                    <!-- BEGIN: Large Slide Over Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#large-slide-over-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Large Slide Over
                                                    </x-base.button>
                                                    <!-- END: Large Slide Over Toggle -->
                                                    <!-- BEGIN: Super Large Slide Over Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#superlarge-slide-over-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Superlarge Slide Over
                                                    </x-base.button>
                                                    <!-- END: Super Large Slide Over Toggle -->
                                                </div>
                                                <!-- BEGIN: Small Slide Over Content -->
                                                <x-base.slideover
                                                    id="small-slide-over-size-preview"
                                                    size="sm"
                                                >
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Small Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description>
                                                            This is totally awesome small slide over!
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Small Slide Over Content -->
                                                <!-- BEGIN: Medium Slide Over Content -->
                                                <x-base.slideover id="medium-slide-over-size-preview">
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Medium Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description>
                                                            This is totally awesome medium slide over!
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Medium Slide Over Content -->
                                                <!-- BEGIN: Large Slide Over Content -->
                                                <x-base.slideover
                                                    id="large-slide-over-size-preview"
                                                    size="lg"
                                                >
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Large Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description>
                                                            This is totally awesome large slide over!
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Large Slide Over Content -->
                                                <!-- BEGIN: Super Large Slide Over Content -->
                                                <x-base.slideover
                                                    id="superlarge-slide-over-size-preview"
                                                    size="xl"
                                                >
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Superlarge Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description>
                                                            This is totally awesome superlarge slide over!
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Super Large Slide Over Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Tailor the size of your slideover to create a
                                    user-friendly and visually engaging experience. Whether
                                    you need a compact notification or a spacious form, the
                                    "Slideover Size" component gives you the flexibility to
                                    achieve your desired layout. Explore the different size
                                    options and elevate your website's user experience with
                                    the "Slideover Size" component.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Slide Over with Close Button
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
                                    The "Slide Over with Close Button" component adds an
                                    extra layer of user convenience to your slide-over
                                    dialogs. This feature allows users to easily dismiss the
                                    slide-over by clicking a close button, enhancing the
                                    overall user experience.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#button-slide-over-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Slide Over
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.slideover
                                                id="button-slide-over-preview"
                                                staticBackdrop
                                            >
                                                <x-base.slideover.panel>
                                                    <a
                                                        class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                                        data-tw-dismiss="modal"
                                                        href="#"
                                                    >
                                                        <x-base.lucide
                                                            class="w-8 h-8 text-slate-400"
                                                            icon="X"
                                                        />
                                                    </a>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Slide Over With Close Button
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description>
                                                        This is totally awesome slide over with close button!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#button-slide-over-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Slide Over
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.slideover
                                                    id="button-slide-over-preview"
                                                    staticBackdrop
                                                >
                                                    <x-base.slideover.panel>
                                                        <a
                                                            class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                                            data-tw-dismiss="modal"
                                                            href="#"
                                                        >
                                                            <x-base.lucide
                                                                class="w-8 h-8 text-slate-400"
                                                                icon="X"
                                                            />
                                                        </a>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Slide Over With Close Button
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description>
                                                            This is totally awesome slide over with close button!
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Slide Over with Close Button" component enhances
                                    user interaction by offering a clear and intuitive
                                    method for closing the slide-over. It's particularly
                                    useful for scenarios where users may want to quickly
                                    exit or minimize the dialog without navigating away from
                                    the current page.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Overlapping Slide Over
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
                                    The "Overlapping Slide Over" is a versatile feature that
                                    allows you to create layered slide-over dialogs within
                                    your web application. This feature is perfect for
                                    scenarios where you need to present information or
                                    actions in a sequential manner while keeping the user
                                    focused.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Slide Over Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#overlapping-slide-over-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Slide Over
                                                </x-base.button>
                                            </div>
                                            <!-- END: Slide Over Toggle -->
                                            <!-- BEGIN: Slide Over Content -->
                                            <x-base.slideover id="overlapping-slide-over-preview">
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Overlapping Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description class="px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">
                                                                Click button bellow to show overlapping slide
                                                                over!
                                                            </div>
                                                            <!-- BEGIN: Overlapping Slide Over Toggle -->
                                                            <x-base.button
                                                                data-tw-toggle="modal"
                                                                data-tw-target="#next-overlapping-slide-over-preview"
                                                                href="#"
                                                                as="a"
                                                                variant="primary"
                                                            >
                                                                Show Overlapping Slide Over
                                                            </x-base.button>
                                                            <!-- END: Overlapping Slide Over Toggle -->
                                                            <!-- BEGIN: Overlapping Slide Over Content -->
                                                            <x-base.slideover id="next-overlapping-slide-over-preview">
                                                                <x-base.slideover.panel>
                                                                    <x-base.slideover.title class="p-5">
                                                                        <h2 class="mr-auto text-base font-medium">
                                                                            Overlapping Slide Over
                                                                        </h2>
                                                                    </x-base.slideover.title>
                                                                    <x-base.slideover.description class="text-center">
                                                                        This is totally awesome overlapping slide
                                                                        over!
                                                                    </x-base.slideover.description>
                                                                </x-base.slideover.panel>
                                                            </x-base.slideover>
                                                            <!-- END: Overlapping Slide Over Content -->
                                                        </div>
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Slide Over Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Slide Over Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#overlapping-slide-over-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Slide Over
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Slide Over Toggle -->
                                                <!-- BEGIN: Slide Over Content -->
                                                <x-base.slideover id="overlapping-slide-over-preview">
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Overlapping Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description class="px-5 py-10">
                                                            <div class="text-center">
                                                                <div class="mb-5">
                                                                    Click button bellow to show overlapping slide
                                                                    over!
                                                                </div>
                                                                <!-- BEGIN: Overlapping Slide Over Toggle -->
                                                                <x-base.button
                                                                    data-tw-toggle="modal"
                                                                    data-tw-target="#next-overlapping-slide-over-preview"
                                                                    href="#"
                                                                    as="a"
                                                                    variant="primary"
                                                                >
                                                                    Show Overlapping Slide Over
                                                                </x-base.button>
                                                                <!-- END: Overlapping Slide Over Toggle -->
                                                                <!-- BEGIN: Overlapping Slide Over Content -->
                                                                <x-base.slideover id="next-overlapping-slide-over-preview">
                                                                    <x-base.slideover.panel>
                                                                        <x-base.slideover.title class="p-5">
                                                                            <h2 class="mr-auto text-base font-medium">
                                                                                Overlapping Slide Over
                                                                            </h2>
                                                                        </x-base.slideover.title>
                                                                        <x-base.slideover.description class="text-center">
                                                                            This is totally awesome overlapping slide
                                                                            over!
                                                                        </x-base.slideover.description>
                                                                    </x-base.slideover.panel>
                                                                </x-base.slideover>
                                                                <!-- END: Overlapping Slide Over Content -->
                                                            </div>
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Slide Over Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Overlapping Slide Over" feature provides a
                                    user-friendly way to present information or actions
                                    progressively, ensuring that users can focus on one
                                    piece of content at a time. It's a valuable tool for
                                    creating engaging user experiences and guiding users
                                    through complex workflows. Explore the possibilities of
                                    this feature to enhance your web application's usability
                                    and interactivity.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Header & Footer Slide Over
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
                                    The "Header & Footer Slide Over" component is a powerful
                                    tool to create slide-over dialogs with customized
                                    headers and footers. This feature enables you to present
                                    content to your users while maintaining a consistent
                                    user interface and providing additional functionality in
                                    the header and footer sections.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Slide Over Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#header-footer-slide-over-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Slide Over
                                                </x-base.button>
                                            </div>
                                            <!-- END: Slide Over Toggle -->
                                            <!-- BEGIN: Slide Over Content -->
                                            <x-base.slideover
                                                id="header-footer-slide-over-preview"
                                                staticBackdrop
                                            >
                                                <!-- BEGIN: Slide Over Header -->
                                                <x-base.slideover.panel>
                                                    <a
                                                        class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                                        data-tw-dismiss="modal"
                                                        href="#"
                                                    >
                                                        <x-base.lucide
                                                            class="w-8 h-8 text-slate-400"
                                                            icon="X"
                                                        />
                                                    </a>
                                                    <x-base.slideover.title>
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Broadcast Message
                                                        </h2>
                                                        <x-base.button
                                                            class="hidden sm:flex"
                                                            variant="outline-secondary"
                                                        >
                                                            <x-base.lucide
                                                                class="w-4 h-4 mr-2"
                                                                icon="File"
                                                            />
                                                            Download Docs
                                                        </x-base.button>
                                                        <x-base.menu class="sm:hidden">
                                                            <x-base.menu.button
                                                                class="block w-5 h-5"
                                                                href="#"
                                                                as="a"
                                                            >
                                                                <x-base.lucide
                                                                    class="w-5 h-5 text-slate-500"
                                                                    icon="MoreHorizontal"
                                                                />
                                                            </x-base.menu.button>
                                                            <x-base.menu.items class="w-40">
                                                                <x-base.menu.item>
                                                                    <x-base.lucide
                                                                        class="w-4 h-4 mr-2"
                                                                        icon="File"
                                                                    />
                                                                    Download Docs
                                                                </x-base.menu.item>
                                                            </x-base.menu.items>
                                                        </x-base.menu>
                                                    </x-base.slideover.title>
                                                    <!-- END: Slide Over Header -->
                                                    <!-- BEGIN: Slide Over Body -->
                                                    <x-base.slideover.description>
                                                        <div>
                                                            <x-base.form-label for="modal-form-1">From</x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-1"
                                                                type="text"
                                                                placeholder="example@gmail.com"
                                                            />
                                                        </div>
                                                        <div class="mt-3">
                                                            <x-base.form-label for="modal-form-2">To</x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-2"
                                                                type="text"
                                                                placeholder="example@gmail.com"
                                                            />
                                                        </div>
                                                        <div class="mt-3">
                                                            <x-base.form-label for="modal-form-3">
                                                                Subject
                                                            </x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-3"
                                                                type="text"
                                                                placeholder="Important Meeting"
                                                            />
                                                        </div>
                                                        <div class="mt-3">
                                                            <x-base.form-label for="modal-form-4">
                                                                Has the Words
                                                            </x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-4"
                                                                type="text"
                                                                placeholder="Job, Work, Documentation"
                                                            />
                                                        </div>
                                                        <div class="mt-3">
                                                            <x-base.form-label for="modal-form-5">
                                                                Doesn't Have
                                                            </x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-5"
                                                                type="text"
                                                                placeholder="Job, Work, Documentation"
                                                            />
                                                        </div>
                                                        <div class="mt-3">
                                                            <x-base.form-label for="modal-form-6">Size</x-base.form-label>
                                                            <x-base.form-select id="modal-form-6">
                                                                <option>10</option>
                                                                <option>25</option>
                                                                <option>35</option>
                                                                <option>50</option>
                                                            </x-base.form-select>
                                                        </div>
                                                    </x-base.slideover.description>
                                                    <!-- END: Slide Over Body -->
                                                    <!-- BEGIN: Slide Over Footer -->
                                                    <x-base.slideover.footer>
                                                        <x-base.button
                                                            class="w-20 mr-1"
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
                                                            Send
                                                        </x-base.button>
                                                    </x-base.slideover.footer>
                                                </x-base.slideover.panel>
                                                <!-- END: Slide Over Footer -->
                                            </x-base.slideover>
                                            <!-- END: Slide Over Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Slide Over Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#header-footer-slide-over-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Slide Over
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Slide Over Toggle -->
                                                <!-- BEGIN: Slide Over Content -->
                                                <x-base.slideover
                                                    id="header-footer-slide-over-preview"
                                                    staticBackdrop
                                                >
                                                    <!-- BEGIN: Slide Over Header -->
                                                    <x-base.slideover.panel>
                                                        <a
                                                            class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                                            data-tw-dismiss="modal"
                                                            href="#"
                                                        >
                                                            <x-base.lucide
                                                                class="w-8 h-8 text-slate-400"
                                                                icon="X"
                                                            />
                                                        </a>
                                                        <x-base.slideover.title>
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Broadcast Message
                                                            </h2>
                                                            <x-base.button
                                                                class="hidden sm:flex"
                                                                variant="outline-secondary"
                                                            >
                                                                <x-base.lucide
                                                                    class="w-4 h-4 mr-2"
                                                                    icon="File"
                                                                />
                                                                Download Docs
                                                            </x-base.button>
                                                            <x-base.menu class="sm:hidden">
                                                                <x-base.menu.button
                                                                    class="block w-5 h-5"
                                                                    href="#"
                                                                    as="a"
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-5 h-5 text-slate-500"
                                                                        icon="MoreHorizontal"
                                                                    />
                                                                </x-base.menu.button>
                                                                <x-base.menu.items class="w-40">
                                                                    <x-base.menu.item>
                                                                        <x-base.lucide
                                                                            class="w-4 h-4 mr-2"
                                                                            icon="File"
                                                                        />
                                                                        Download Docs
                                                                    </x-base.menu.item>
                                                                </x-base.menu.items>
                                                            </x-base.menu>
                                                        </x-base.slideover.title>
                                                        <!-- END: Slide Over Header -->
                                                        <!-- BEGIN: Slide Over Body -->
                                                        <x-base.slideover.description>
                                                            <div>
                                                                <x-base.form-label for="modal-form-1">
                                                                    From
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-1"
                                                                    type="text"
                                                                    placeholder="example@gmail.com"
                                                                />
                                                            </div>
                                                            <div class="mt-3">
                                                                <x-base.form-label for="modal-form-2">
                                                                    To
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-2"
                                                                    type="text"
                                                                    placeholder="example@gmail.com"
                                                                />
                                                            </div>
                                                            <div class="mt-3">
                                                                <x-base.form-label for="modal-form-3">
                                                                    Subject
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-3"
                                                                    type="text"
                                                                    placeholder="Important Meeting"
                                                                />
                                                            </div>
                                                            <div class="mt-3">
                                                                <x-base.form-label for="modal-form-4">
                                                                    Has the Words
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-4"
                                                                    type="text"
                                                                    placeholder="Job, Work, Documentation"
                                                                />
                                                            </div>
                                                            <div class="mt-3">
                                                                <x-base.form-label for="modal-form-5">
                                                                    Doesn't Have
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-5"
                                                                    type="text"
                                                                    placeholder="Job, Work, Documentation"
                                                                />
                                                            </div>
                                                            <div class="mt-3">
                                                                <x-base.form-label for="modal-form-6">
                                                                    Size
                                                                </x-base.form-label>
                                                                <x-base.form-select id="modal-form-6">
                                                                    <option>10</option>
                                                                    <option>25</option>
                                                                    <option>35</option>
                                                                    <option>50</option>
                                                                </x-base.form-select>
                                                            </div>
                                                        </x-base.slideover.description>
                                                        <!-- END: Slide Over Body -->
                                                        <!-- BEGIN: Slide Over Footer -->
                                                        <x-base.slideover.footer>
                                                            <x-base.button
                                                                class="w-20 mr-1"
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
                                                                Send
                                                            </x-base.button>
                                                        </x-base.slideover.footer>
                                                    </x-base.slideover.panel>
                                                    <!-- END: Slide Over Footer -->
                                                </x-base.slideover>
                                                <!-- END: Slide Over Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Header & Footer Slide Over" component empowers you
                                    to create dynamic slide-over dialogs that are both
                                    informative and interactive. You can easily tailor the
                                    header and footer sections to suit your application's
                                    needs, making it a versatile solution for a wide range
                                    of use cases. Enhance your user experience by presenting
                                    content with clarity and providing users with intuitive
                                    actions through this feature.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Programmatically Show/Hide Slide Over
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
                                    The "Programmatically Show/Hide Slide Over" feature
                                    provides you with the capability to control the
                                    visibility of the slide-over dialog through your code.
                                    This functionality allows you to trigger the opening,
                                    closing, or toggling of the slide-over programmatically,
                                    providing a seamless and interactive user experience.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Show Slide Over Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    id="programmatically-show-slideover"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Slide Over
                                                </x-base.button>
                                            </div>
                                            <!-- END: Show Slide Over Toggle -->
                                            <!-- BEGIN: Slide Over Content -->
                                            <x-base.slideover id="programmatically-slideover">
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Programmatically Show/Hide Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description class="p-10 text-center">
                                                        <!-- BEGIN: Hide Slide Over Toggle -->
                                                        <x-base.button
                                                            class="mr-1"
                                                            id="programmatically-hide-slideover"
                                                            href="#"
                                                            as="a"
                                                            variant="primary"
                                                        >
                                                            Hide Slide Over
                                                        </x-base.button>
                                                        <!-- END: Hide Slide Over Toggle -->
                                                        <!-- BEGIN: Toggle Slide Over Toggle -->
                                                        <x-base.button
                                                            class="mt-2 mr-1 sm:mt-0"
                                                            id="programmatically-toggle-slideover"
                                                            href="#"
                                                            as="a"
                                                            variant="primary"
                                                        >
                                                            Toggle Slide Over
                                                        </x-base.button>
                                                        <!-- END: Toggle Slide Over Toggle -->
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Slide Over Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Show Slide Over Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        id="programmatically-show-slideover"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Slide Over
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Show Slide Over Toggle -->
                                                <!-- BEGIN: Slide Over Content -->
                                                <x-base.slideover id="programmatically-slideover">
                                                    <x-base.slideover.panel>
                                                        <x-base.slideover.title class="p-5">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Programmatically Show/Hide Slide Over
                                                            </h2>
                                                        </x-base.slideover.title>
                                                        <x-base.slideover.description class="p-10 text-center">
                                                            <!-- BEGIN: Hide Slide Over Toggle -->
                                                            <x-base.button
                                                                class="mr-1"
                                                                id="programmatically-hide-slideover"
                                                                href="#"
                                                                as="a"
                                                                variant="primary"
                                                            >
                                                                Hide Slide Over
                                                            </x-base.button>
                                                            <!-- END: Hide Slide Over Toggle -->
                                                            <!-- BEGIN: Toggle Slide Over Toggle -->
                                                            <x-base.button
                                                                class="mt-2 mr-1 sm:mt-0"
                                                                id="programmatically-toggle-slideover"
                                                                href="#"
                                                                as="a"
                                                                variant="primary"
                                                            >
                                                                Toggle Slide Over
                                                            </x-base.button>
                                                            <!-- END: Toggle Slide Over Toggle -->
                                                        </x-base.slideover.description>
                                                    </x-base.slideover.panel>
                                                </x-base.slideover>
                                                <!-- END: Slide Over Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Programmatically Show/Hide Slide Over"
                                    functionality enhances your control over the slide-over
                                    dialog, making it a dynamic and responsive element in
                                    your user interface. By using these programmatic
                                    methods, you can create engaging user experiences and
                                    tailor the slide-over's visibility to suit your
                                    application's needs. Whether it's showing additional
                                    information, capturing user input, or providing
                                    context-based interactions, this feature empowers you to
                                    take full control of your slide-over dialogs.
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
                                    <div class="-mt-px">Slideover</div>
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
                                                    The HTML element type to be used for the Slideover
                                                    (default is "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`open`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Indicates whether the Slideover is open or closed
                                                    (default is false).
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onClose`</x-base.table.td>
                                                <x-base.table.td>`function`</x-base.table.td>
                                                <x-base.table.td>
                                                    A function to be called when the Slideover is
                                                    closed.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`staticBackdrop`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    If true, the Slideover backdrop remains static when
                                                    the Slideover is closed (default is false).
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`size`</x-base.table.td>
                                                <x-base.table.td>`Size`</x-base.table.td>
                                                <x-base.table.td>
                                                    The size of the Slideover, which can be "sm," "md,"
                                                    "lg," or "xl" (default is "md").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Slideover.Panel</div>
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
                                                    The HTML element type to be used for the Slideover
                                                    panel (default is "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Slideover.Title</div>
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
                                                    The HTML element type to be used for the Slideover
                                                    title (default is "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Slideover.Description</div>
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
                                                    The HTML element type to be used for the Slideover
                                                    description (default is "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Slideover.Footer</div>
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
                                                    The HTML element type to be used for the Slideover
                                                    footer (default is "div").
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
                                    Blank Slide Over
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
                                    Slide Over Size
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
                                    Slide Over with Close Button
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
                                    Overlapping Slide Over
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
                                    Header & Footer Slide Over
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
                                    Programmatically Show/Hide Slide Over
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

@pushOnce('scripts')
    @vite('resources/js/pages/slideover.js')
@endPushOnce
