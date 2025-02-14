@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Modal
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover our modal component's versatility for lightboxes, user
                    notifications, and more!
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Blank Modal
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-21"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-21"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    The "Blank Modal" component allows you to create simple
                                    and customizable modal dialogs that can be used to
                                    display various types of content or messages to your
                                    users. This modal type serves as a foundation for
                                    creating customized modal experiences.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#basic-modal-preview"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="basic-modal-preview">
                                                <x-base.dialog.panel class="p-10 text-center">
                                                    This is totally awesome blank modal!
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#basic-modal-preview"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="basic-modal-preview">
                                                    <x-base.dialog.panel class="p-10 text-center">
                                                        This is totally awesome blank modal!
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Blank Modal" component provides you with a starting
                                    point for creating modals with your own content and
                                    styling, making it a versatile tool for enhancing user
                                    interactions within your web application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Modal Size
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
                                    The "Modal Size" component allows you to create modals
                                    of different sizes to accommodate various content types
                                    or specific design requirements. You can choose from
                                    four different modal sizes: Small, Medium, Large, and
                                    Super Large, ensuring flexibility in displaying your
                                    content.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Small Modal Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#small-modal-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Small Modal
                                                </x-base.button>
                                                <!-- END: Small Modal Toggle -->
                                                <!-- BEGIN: Medium Modal Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#medium-modal-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Medium Modal
                                                </x-base.button>
                                                <!-- END: Medium Modal Toggle -->
                                                <!-- BEGIN: Large Modal Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#large-modal-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Large Modal
                                                </x-base.button>
                                                <!-- END: Large Modal Toggle -->
                                                <!-- BEGIN: Super Large Modal Toggle -->
                                                <x-base.button
                                                    class="mb-2 mr-1"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#superlarge-modal-size-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Superlarge Modal
                                                </x-base.button>
                                                <!-- END: Super Large Modal Toggle -->
                                            </div>
                                            <!-- BEGIN: Small Modal Content -->
                                            <x-base.dialog
                                                id="small-modal-size-preview"
                                                size="sm"
                                            >
                                                <x-base.dialog.panel class="p-10 text-center">
                                                    This is totally awesome small modal!
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Small Modal Content -->
                                            <!-- BEGIN: Medium Modal Content -->
                                            <x-base.dialog id="medium-modal-size-preview">
                                                <x-base.dialog.panel class="p-10 text-center">
                                                    This is totally awesome medium modal!
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Medium Modal Content -->
                                            <!-- BEGIN: Large Modal Content -->
                                            <x-base.dialog
                                                id="large-modal-size-preview"
                                                size="lg"
                                            >
                                                <x-base.dialog.panel class="p-10 text-center">
                                                    This is totally awesome large modal!
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Large Modal Content -->
                                            <!-- BEGIN: Super Large Modal Content -->
                                            <x-base.dialog
                                                id="superlarge-modal-size-preview"
                                                size="xl"
                                            >
                                                <x-base.dialog.panel class="p-10 text-center">
                                                    This is totally awesome superlarge modal!
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Super Large Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Small Modal Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#small-modal-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Small Modal
                                                    </x-base.button>
                                                    <!-- END: Small Modal Toggle -->
                                                    <!-- BEGIN: Medium Modal Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#medium-modal-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Medium Modal
                                                    </x-base.button>
                                                    <!-- END: Medium Modal Toggle -->
                                                    <!-- BEGIN: Large Modal Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#large-modal-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Large Modal
                                                    </x-base.button>
                                                    <!-- END: Large Modal Toggle -->
                                                    <!-- BEGIN: Super Large Modal Toggle -->
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#superlarge-modal-size-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Superlarge Modal
                                                    </x-base.button>
                                                    <!-- END: Super Large Modal Toggle -->
                                                </div>
                                                <!-- BEGIN: Small Modal Content -->
                                                <x-base.dialog
                                                    id="small-modal-size-preview"
                                                    size="sm"
                                                >
                                                    <x-base.dialog.panel class="p-10 text-center">
                                                        This is totally awesome small modal!
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Small Modal Content -->
                                                <!-- BEGIN: Medium Modal Content -->
                                                <x-base.dialog id="medium-modal-size-preview">
                                                    <x-base.dialog.panel class="p-10 text-center">
                                                        This is totally awesome medium modal!
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Medium Modal Content -->
                                                <!-- BEGIN: Large Modal Content -->
                                                <x-base.dialog
                                                    id="large-modal-size-preview"
                                                    size="lg"
                                                >
                                                    <x-base.dialog.panel class="p-10 text-center">
                                                        This is totally awesome large modal!
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Large Modal Content -->
                                                <!-- BEGIN: Super Large Modal Content -->
                                                <x-base.dialog
                                                    id="superlarge-modal-size-preview"
                                                    size="xl"
                                                >
                                                    <x-base.dialog.panel class="p-10 text-center">
                                                        This is totally awesome superlarge modal!
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Super Large Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Modal Size" component empowers you to maintain a
                                    consistent and visually appealing design while
                                    accommodating various content types and ensuring a
                                    seamless user experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Warning Modal
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-31"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-31"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    The "Warning Modal" component provides a user-friendly
                                    way to display warnings, errors, or important messages
                                    to your users. It features a visually appealing and
                                    attention-grabbing design, ensuring that critical
                                    information is communicated effectively.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#warning-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="warning-modal-preview">
                                                <x-base.dialog.panel>
                                                    <div class="p-5 text-center">
                                                        <x-base.lucide
                                                            class="mx-auto mt-3 h-16 w-16 text-warning"
                                                            icon="XCircle"
                                                        />
                                                        <div class="mt-5 text-3xl">Oops...</div>
                                                        <div class="mt-2 text-slate-500">
                                                            Something went wrong!
                                                        </div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <x-base.button
                                                            class="w-24"
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            variant="primary"
                                                        >
                                                            Ok
                                                        </x-base.button>
                                                    </div>
                                                    <div
                                                        class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400">
                                                        <a
                                                            class="text-primary"
                                                            href=""
                                                        >
                                                            Why do I have this issue?
                                                        </a>
                                                    </div>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#warning-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="warning-modal-preview">
                                                    <x-base.dialog.panel>
                                                        <div class="p-5 text-center">
                                                            <x-base.lucide
                                                                class="mx-auto mt-3 h-16 w-16 text-warning"
                                                                icon="XCircle"
                                                            />
                                                            <div class="mt-5 text-3xl">Oops...</div>
                                                            <div class="mt-2 text-slate-500">
                                                                Something went wrong!
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <x-base.button
                                                                class="w-24"
                                                                data-tw-dismiss="modal"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Ok
                                                            </x-base.button>
                                                        </div>
                                                        <div
                                                            class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400">
                                                            <a
                                                                class="text-primary"
                                                                href=""
                                                            >
                                                                Why do I have this issue?
                                                            </a>
                                                        </div>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Warning Modal" component ensures that important
                                    messages are presented clearly and attractively, helping
                                    users quickly grasp the nature of the warning and take
                                    appropriate actions. Customize it to suit your
                                    application's specific needs and design aesthetics.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Modal with Close Button
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
                                    The "Modal with Close Button" component provides an
                                    intuitive and user-friendly way to display content
                                    within a modal dialog while giving users the ability to
                                    easily close the modal when needed. This modal variation
                                    is useful for displaying messages, alerts, or additional
                                    information without the need for complex interactions.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#button-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="button-modal-preview">
                                                <x-base.dialog.panel>
                                                    <a
                                                        class="absolute right-0 top-0 mr-3 mt-3"
                                                        data-tw-dismiss="modal"
                                                        href="#"
                                                    >
                                                        <x-base.lucide
                                                            class="h-8 w-8 text-slate-400"
                                                            icon="X"
                                                        />
                                                    </a>
                                                    <div class="p-5 text-center">
                                                        <x-base.lucide
                                                            class="mx-auto mt-3 h-16 w-16 text-success"
                                                            icon="CheckCircle"
                                                        />
                                                        <div class="mt-5 text-3xl">Modal Example</div>
                                                        <div class="mt-2 text-slate-500">
                                                            Modal with close button
                                                        </div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <x-base.button
                                                            class="w-24"
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            variant="primary"
                                                        >
                                                            Ok
                                                        </x-base.button>
                                                    </div>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#button-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="button-modal-preview">
                                                    <x-base.dialog.panel>
                                                        <a
                                                            class="absolute right-0 top-0 mr-3 mt-3"
                                                            data-tw-dismiss="modal"
                                                            href="#"
                                                        >
                                                            <x-base.lucide
                                                                class="h-8 w-8 text-slate-400"
                                                                icon="X"
                                                            />
                                                        </a>
                                                        <div class="p-5 text-center">
                                                            <x-base.lucide
                                                                class="mx-auto mt-3 h-16 w-16 text-success"
                                                                icon="CheckCircle"
                                                            />
                                                            <div class="mt-5 text-3xl">Modal Example</div>
                                                            <div class="mt-2 text-slate-500">
                                                                Modal with close button
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <x-base.button
                                                                class="w-24"
                                                                data-tw-dismiss="modal"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Ok
                                                            </x-base.button>
                                                        </div>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Modal with Close Button" component simplifies the
                                    process of displaying information in a modal dialog
                                    while ensuring users can easily dismiss it when
                                    necessary. Customize it to match your application's
                                    style and content requirements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Static Backdrop Modal
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
                                    The "Static Backdrop Modal" is a user-friendly way to
                                    make sure your important messages get noticed. Unlike
                                    regular pop-up windows, this one won't disappear when
                                    you click outside or press escape. It's perfect for
                                    situations where you want your users to pay full
                                    attention, like sharing important updates or guiding
                                    them through steps. With the "Static Backdrop Modal,"
                                    your message stays in the spotlight until it's
                                    acknowledged.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#static-backdrop-modal-preview"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog
                                                id="static-backdrop-modal-preview"
                                                staticBackdrop
                                            >
                                                <x-base.dialog.panel class="px-5 py-10">
                                                    <div class="text-center">
                                                        <div class="mb-5">
                                                            I will not close if you click outside me. Don't even
                                                            try to press escape key.
                                                        </div>
                                                        <x-base.button
                                                            class="w-24"
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            variant="primary"
                                                        >
                                                            Ok
                                                        </x-base.button>
                                                    </div>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#static-backdrop-modal-preview"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog
                                                    id="static-backdrop-modal-preview"
                                                    staticBackdrop
                                                >
                                                    <x-base.dialog.panel class="px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">
                                                                I will not close if you click outside me. Don't even
                                                                try to press escape key.
                                                            </div>
                                                            <x-base.button
                                                                class="w-24"
                                                                data-tw-dismiss="modal"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Ok
                                                            </x-base.button>
                                                        </div>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Now, you're all set to use the "Static Backdrop Modal"
                                    and make sure your messages are seen and acknowledged
                                    with ease.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Overlapping Modal
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
                                    The "Overlapping Modal" is a nifty feature that allows
                                    you to display multiple modals on top of each other.
                                    It's a great way to present information progressively
                                    without overwhelming your users with too much content at
                                    once. This feature enables you to create guided
                                    experiences or step-by-step processes seamlessly.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#overlapping-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="overlapping-modal-preview">
                                                <x-base.dialog.panel class="px-5 py-10">
                                                    <div class="text-center">
                                                        <div class="mb-5">
                                                            Click button bellow to show overlapping modal!
                                                        </div>
                                                        <!-- BEGIN: Overlapping Modal Toggle -->
                                                        <x-base.button
                                                            data-tw-toggle="modal"
                                                            data-tw-target="#next-overlapping-modal-preview"
                                                            href="#"
                                                            as="a"
                                                            variant="primary"
                                                        >
                                                            Show Overlapping Modal
                                                        </x-base.button>
                                                        <!-- END: Overlapping Modal Toggle -->
                                                    </div>
                                                    <!-- BEGIN: Overlapping Modal Content -->
                                                    <x-base.dialog id="next-overlapping-modal-preview">
                                                        <x-base.dialog.panel class="p-5 text-center">
                                                            This is totally awesome overlapping modal!
                                                        </x-base.dialog.panel>
                                                    </x-base.dialog>
                                                    <!-- END: Overlapping Modal Content -->
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#overlapping-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="overlapping-modal-preview">
                                                    <x-base.dialog.panel class="px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">
                                                                Click button bellow to show overlapping modal!
                                                            </div>
                                                            <!-- BEGIN: Overlapping Modal Toggle -->
                                                            <x-base.button
                                                                data-tw-toggle="modal"
                                                                data-tw-target="#next-overlapping-modal-preview"
                                                                href="#"
                                                                as="a"
                                                                variant="primary"
                                                            >
                                                                Show Overlapping Modal
                                                            </x-base.button>
                                                            <!-- END: Overlapping Modal Toggle -->
                                                        </div>
                                                        <!-- BEGIN: Overlapping Modal Content -->
                                                        <x-base.dialog id="next-overlapping-modal-preview">
                                                            <x-base.dialog.panel class="p-5 text-center">
                                                                This is totally awesome overlapping modal!
                                                            </x-base.dialog.panel>
                                                        </x-base.dialog>
                                                        <!-- END: Overlapping Modal Content -->
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Now you have the power of the "Overlapping Modal" at
                                    your fingertips. Use it to create user-friendly and
                                    informative experiences that lead your users through
                                    your application seamlessly. This feature ensures that
                                    your content remains organized and accessible, making it
                                    easier for users to absorb information at their own
                                    pace.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Header & Footer Modal
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
                                    The "Header & Footer Modal" component offers a flexible
                                    way to create modals with distinctive headers and
                                    footers. These sections are perfect for adding titles,
                                    actions, and extra information to your modal dialogs.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#header-footer-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="header-footer-modal-preview">
                                                <x-base.dialog.panel>
                                                    <x-base.dialog.title>
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Broadcast Message
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
                                                    <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-form-1">From</x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-1"
                                                                type="text"
                                                                placeholder="example@gmail.com"
                                                            />
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-form-2">To</x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-2"
                                                                type="text"
                                                                placeholder="example@gmail.com"
                                                            />
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-form-3">
                                                                Subject
                                                            </x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-3"
                                                                type="text"
                                                                placeholder="Important Meeting"
                                                            />
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-form-4">
                                                                Has the Words
                                                            </x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-4"
                                                                type="text"
                                                                placeholder="Job, Work, Documentation"
                                                            />
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-form-5">
                                                                Doesn't Have
                                                            </x-base.form-label>
                                                            <x-base.form-input
                                                                id="modal-form-5"
                                                                type="text"
                                                                placeholder="Job, Work, Documentation"
                                                            />
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <x-base.form-label for="modal-form-6">Size</x-base.form-label>
                                                            <x-base.form-select id="modal-form-6">
                                                                <option>10</option>
                                                                <option>25</option>
                                                                <option>35</option>
                                                                <option>50</option>
                                                            </x-base.form-select>
                                                        </div>
                                                    </x-base.dialog.description>
                                                    <x-base.dialog.footer>
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
                                                            Send
                                                        </x-base.button>
                                                    </x-base.dialog.footer>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#header-footer-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="header-footer-modal-preview">
                                                    <x-base.dialog.panel>
                                                        <x-base.dialog.title>
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Broadcast Message
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
                                                        <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-form-1">
                                                                    From
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-1"
                                                                    type="text"
                                                                    placeholder="example@gmail.com"
                                                                />
                                                            </div>
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-form-2">
                                                                    To
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-2"
                                                                    type="text"
                                                                    placeholder="example@gmail.com"
                                                                />
                                                            </div>
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-form-3">
                                                                    Subject
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-3"
                                                                    type="text"
                                                                    placeholder="Important Meeting"
                                                                />
                                                            </div>
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-form-4">
                                                                    Has the Words
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-4"
                                                                    type="text"
                                                                    placeholder="Job, Work, Documentation"
                                                                />
                                                            </div>
                                                            <div class="col-span-12 sm:col-span-6">
                                                                <x-base.form-label for="modal-form-5">
                                                                    Doesn't Have
                                                                </x-base.form-label>
                                                                <x-base.form-input
                                                                    id="modal-form-5"
                                                                    type="text"
                                                                    placeholder="Job, Work, Documentation"
                                                                />
                                                            </div>
                                                            <div class="col-span-12 sm:col-span-6">
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
                                                        </x-base.dialog.description>
                                                        <x-base.dialog.footer>
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
                                                                Send
                                                            </x-base.button>
                                                        </x-base.dialog.footer>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Enhance your modals by adding titles, actions, and
                                    relevant form fields to engage your users effectively.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Delete Modal
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
                                    The "Delete Modal" component is a valuable tool for
                                    confirming critical actions that may have irreversible
                                    consequences, such as deleting records or data. This
                                    modal prompts users to make a deliberate decision before
                                    proceeding with an action.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#delete-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="delete-modal-preview">
                                                <x-base.dialog.panel>
                                                    <div class="p-5 text-center">
                                                        <x-base.lucide
                                                            class="mx-auto mt-3 h-16 w-16 text-danger"
                                                            icon="XCircle"
                                                        />
                                                        <div class="mt-5 text-3xl">Are you sure?</div>
                                                        <div class="mt-2 text-slate-500">
                                                            Do you really want to delete these records? <br>
                                                            This process cannot be undone.
                                                        </div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <x-base.button
                                                            class="mr-1 w-24"
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            variant="outline-secondary"
                                                        >
                                                            Cancel
                                                        </x-base.button>
                                                        <x-base.button
                                                            class="w-24"
                                                            type="button"
                                                            variant="danger"
                                                        >
                                                            Delete
                                                        </x-base.button>
                                                    </div>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#delete-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="delete-modal-preview">
                                                    <x-base.dialog.panel>
                                                        <div class="p-5 text-center">
                                                            <x-base.lucide
                                                                class="mx-auto mt-3 h-16 w-16 text-danger"
                                                                icon="XCircle"
                                                            />
                                                            <div class="mt-5 text-3xl">Are you sure?</div>
                                                            <div class="mt-2 text-slate-500">
                                                                Do you really want to delete these records? <br>
                                                                This process cannot be undone.
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <x-base.button
                                                                class="mr-1 w-24"
                                                                data-tw-dismiss="modal"
                                                                type="button"
                                                                variant="outline-secondary"
                                                            >
                                                                Cancel
                                                            </x-base.button>
                                                            <x-base.button
                                                                class="w-24"
                                                                type="button"
                                                                variant="danger"
                                                            >
                                                                Delete
                                                            </x-base.button>
                                                        </div>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Delete Modal" serves as a protective barrier
                                    against accidental deletions and provides users with an
                                    opportunity to confirm their intentions before
                                    proceeding. It helps prevent data loss and offers peace
                                    of mind when handling sensitive actions.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Success Modal
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
                                    The "Success Modal" component is a simple and effective
                                    way to provide users with positive feedback and
                                    acknowledge successful actions within your application.
                                    This modal conveys a sense of accomplishment and offers
                                    users confirmation that they've completed a task or
                                    action.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#success-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="success-modal-preview">
                                                <x-base.dialog.panel>
                                                    <div class="p-5 text-center">
                                                        <x-base.lucide
                                                            class="mx-auto mt-3 h-16 w-16 text-success"
                                                            icon="CheckCircle"
                                                        />
                                                        <div class="mt-5 text-3xl">Good job!</div>
                                                        <div class="mt-2 text-slate-500">
                                                            You clicked the button!
                                                        </div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <x-base.button
                                                            class="w-24"
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            variant="primary"
                                                        >
                                                            Ok
                                                        </x-base.button>
                                                    </div>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#success-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="success-modal-preview">
                                                    <x-base.dialog.panel>
                                                        <div class="p-5 text-center">
                                                            <x-base.lucide
                                                                class="mx-auto mt-3 h-16 w-16 text-success"
                                                                icon="CheckCircle"
                                                            />
                                                            <div class="mt-5 text-3xl">Good job!</div>
                                                            <div class="mt-2 text-slate-500">
                                                                You clicked the button!
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <x-base.button
                                                                class="w-24"
                                                                data-tw-dismiss="modal"
                                                                type="button"
                                                                variant="primary"
                                                            >
                                                                Ok
                                                            </x-base.button>
                                                        </div>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Success Modal" enhances the user experience by
                                    providing clear and encouraging feedback. It helps users
                                    feel accomplished and confident in their actions,
                                    contributing to a more positive overall user journey.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Tiny Slider Modal
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
                                    The "Tiny Slider Modal" component combines the elegance
                                    of modal dialogs with the dynamic functionality of a
                                    tiny slider. It allows you to present images or content
                                    in a visually appealing and interactive way within a
                                    modal.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Modal Toggle -->
                                            <div class="text-center">
                                                <x-base.button
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#tiny-slider-modal-preview"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="tiny-slider-modal-preview">
                                                <x-base.dialog.panel class="p-5">
                                                    <div class="mx-6">
                                                        <x-base.tiny-slider config="multiple-items">
                                                            <div class="h-56 px-2">
                                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                                    <img
                                                                        src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                        alt="Tailwise - Admin Dashboard Template"
                                                                    >
                                                                </div>
                                                            </div>
                                                            <div class="h-56 px-2">
                                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                                    <img
                                                                        src="{{ Vite::asset($products[1]['images'][0]['path']) }}"
                                                                        alt="Tailwise - Admin Dashboard Template"
                                                                    >
                                                                </div>
                                                            </div>
                                                            <div class="h-56 px-2">
                                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                                    <img
                                                                        src="{{ Vite::asset($products[2]['images'][0]['path']) }}"
                                                                        alt="Tailwise - Admin Dashboard Template"
                                                                    >
                                                                </div>
                                                            </div>
                                                            <div class="h-56 px-2">
                                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                                    <img
                                                                        src="{{ Vite::asset($products[3]['images'][0]['path']) }}"
                                                                        alt="Tailwise - Admin Dashboard Template"
                                                                    >
                                                                </div>
                                                            </div>
                                                        </x-base.tiny-slider>
                                                    </div>
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        data-tw-toggle="modal"
                                                        data-tw-target="#tiny-slider-modal-preview"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="tiny-slider-modal-preview">
                                                    <x-base.dialog.panel class="p-5">
                                                        <div class="mx-6">
                                                            <x-base.tiny-slider config="multiple-items">
                                                                <div class="h-56 px-2">
                                                                    <div
                                                                        class="image-fit h-full overflow-hidden rounded-md">
                                                                        <img
                                                                            src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                            alt="Tailwise - Admin Dashboard Template"
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="h-56 px-2">
                                                                    <div
                                                                        class="image-fit h-full overflow-hidden rounded-md">
                                                                        <img
                                                                            src="{{ Vite::asset($products[1]['images'][0]['path']) }}"
                                                                            alt="Tailwise - Admin Dashboard Template"
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="h-56 px-2">
                                                                    <div
                                                                        class="image-fit h-full overflow-hidden rounded-md">
                                                                        <img
                                                                            src="{{ Vite::asset($products[2]['images'][0]['path']) }}"
                                                                            alt="Tailwise - Admin Dashboard Template"
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="h-56 px-2">
                                                                    <div
                                                                        class="image-fit h-full overflow-hidden rounded-md">
                                                                        <img
                                                                            src="{{ Vite::asset($products[3]['images'][0]['path']) }}"
                                                                            alt="Tailwise - Admin Dashboard Template"
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </x-base.tiny-slider>
                                                        </div>
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Tiny Slider Modal" is an excellent choice for
                                    showcasing images or content in a compact and
                                    interactive way. It combines the convenience of modals
                                    with the engaging functionality of a slider, making it
                                    ideal for presenting product galleries, image
                                    portfolios, or any content that benefits from a dynamic
                                    presentation.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Programmatically Show/Hide Modal
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
                                    The "Programmatically Show/Hide Modal" feature empowers
                                    you to control modal visibility through code, allowing
                                    for dynamic interactions within your web application.
                                    This section explains how to programmatically manage the
                                    display of modals.
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
                                                    class="mb-2 mr-1"
                                                    id="programmatically-show-modal"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    Show Modal
                                                </x-base.button>
                                            </div>
                                            <!-- END: Show Modal Toggle -->
                                            <!-- BEGIN: Modal Content -->
                                            <x-base.dialog id="programmatically-modal">
                                                <x-base.dialog.panel class="p-10 text-center">
                                                    <!-- BEGIN: Hide Modal Toggle -->
                                                    <x-base.button
                                                        class="mr-1"
                                                        id="programmatically-hide-modal"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Hide Modal
                                                    </x-base.button>
                                                    <!-- END: Hide Modal Toggle -->
                                                    <!-- BEGIN: Toggle Modal Toggle -->
                                                    <x-base.button
                                                        class="mr-1"
                                                        id="programmatically-toggle-modal"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Toggle Modal
                                                    </x-base.button>
                                                    <!-- END: Toggle Modal Toggle -->
                                                </x-base.dialog.panel>
                                            </x-base.dialog>
                                            <!-- END: Modal Content -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Show Modal Toggle -->
                                                <div class="text-center">
                                                    <x-base.button
                                                        class="mb-2 mr-1"
                                                        id="programmatically-show-modal"
                                                        href="#"
                                                        as="a"
                                                        variant="primary"
                                                    >
                                                        Show Modal
                                                    </x-base.button>
                                                </div>
                                                <!-- END: Show Modal Toggle -->
                                                <!-- BEGIN: Modal Content -->
                                                <x-base.dialog id="programmatically-modal">
                                                    <x-base.dialog.panel class="p-10 text-center">
                                                        <!-- BEGIN: Hide Modal Toggle -->
                                                        <x-base.button
                                                            class="mr-1"
                                                            id="programmatically-hide-modal"
                                                            href="#"
                                                            as="a"
                                                            variant="primary"
                                                        >
                                                            Hide Modal
                                                        </x-base.button>
                                                        <!-- END: Hide Modal Toggle -->
                                                        <!-- BEGIN: Toggle Modal Toggle -->
                                                        <x-base.button
                                                            class="mr-1"
                                                            id="programmatically-toggle-modal"
                                                            href="#"
                                                            as="a"
                                                            variant="primary"
                                                        >
                                                            Toggle Modal
                                                        </x-base.button>
                                                        <!-- END: Toggle Modal Toggle -->
                                                    </x-base.dialog.panel>
                                                </x-base.dialog>
                                                <!-- END: Modal Content -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Programmatically Show/Hide Modal" feature enhances
                                    your web application's interactivity by providing
                                    precise control over modal visibility. Whether you need
                                    to trigger modals based on user actions, responses from
                                    API calls, or any dynamic event, this capability enables
                                    you to create engaging user experiences tailored to your
                                    application's requirements.
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
                                    <div class="-mt-px">Dialog</div>
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
                                                    HTML element type for the modal (default is "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`open`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Whether the modal is open or closed.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onClose`</x-base.table.td>
                                                <x-base.table.td>`function`</x-base.table.td>
                                                <x-base.table.td>
                                                    Callback function to be executed when the modal is
                                                    closed.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`staticBackdrop`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Whether the modal has a static backdrop (clicking
                                                    outside won't close it).
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`size`</x-base.table.td>
                                                <x-base.table.td>`Size`</x-base.table.td>
                                                <x-base.table.td>
                                                    Size of the modal, one of "sm," "md," "lg," or "xl"
                                                    (default is "md").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Dialog.Panel</div>
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
                                                    HTML element type for the modal panel (default is
                                                    "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Dialog.Title</div>
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
                                                    HTML element type for the modal title (default is
                                                    "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Dialog.Description</div>
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
                                                    HTML element type for the modal description (default
                                                    is "div").
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Dialog.Footer</div>
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
                                                    HTML element type for the modal footer (default is
                                                    "div").
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
                                    Blank Modal
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
                                    Modal Size
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
                                    Warning Modal
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
                                    Modal with Close Button
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
                                    Static Backdrop Modal
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
                                    Overlapping Modal
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
                                    Header & Footer Modal
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
                                    Delete Modal
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
                                    Success Modal
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
                                    Tiny Slider Modal
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
                                    Programmatically Show/Hide Modal
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

@pushOnce('scripts')
    @vite('resources/js/pages/modal.js')
@endPushOnce
