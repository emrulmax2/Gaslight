@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Notification
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Explore notification component, elevate user experience with simple
                    and celebratory notifications!
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Notification
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
                                    Notifications provide a way to communicate important
                                    messages or updates to your users. This section covers
                                    two types of basic notifications: non-sticky and sticky
                                    notifications.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Notification Content -->
                                                <x-base.notification
                                                    class="flex flex-col sm:flex-row"
                                                    id="basic-non-sticky-notification-content"
                                                >
                                                    <div class="font-medium">
                                                        Yay! Updates Published!
                                                    </div>
                                                    <a
                                                        class="mt-1 font-medium text-primary dark:text-slate-400 sm:ml-40 sm:mt-0"
                                                        href=""
                                                    >
                                                        Review Changes
                                                    </a>
                                                </x-base.notification>
                                                <!-- END: Notification Content -->
                                                <!-- BEGIN: Notification Toggle -->
                                                <x-base.button
                                                    class="mr-1"
                                                    id="basic-non-sticky-notification-toggle"
                                                    variant="primary"
                                                >
                                                    Show Non Sticky Notification
                                                </x-base.button>
                                                <x-base.button
                                                    class="mt-2 sm:mt-0"
                                                    id="basic-sticky-notification-toggle"
                                                    variant="primary"
                                                >
                                                    Show Sticky Notification
                                                </x-base.button>
                                                <!-- END: Notification Toggle -->
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Notification Content -->
                                                    <x-base.notification
                                                        class="flex flex-col sm:flex-row"
                                                        id="basic-non-sticky-notification-content"
                                                    >
                                                        <div class="font-medium">
                                                            Yay! Updates Published!
                                                        </div>
                                                        <a
                                                            class="mt-1 font-medium text-primary dark:text-slate-400 sm:ml-40 sm:mt-0"
                                                            href=""
                                                        >
                                                            Review Changes
                                                        </a>
                                                    </x-base.notification>
                                                    <!-- END: Notification Content -->
                                                    <!-- BEGIN: Notification Toggle -->
                                                    <x-base.button
                                                        class="mr-1"
                                                        id="basic-non-sticky-notification-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Non Sticky Notification
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="mt-2 sm:mt-0"
                                                        id="basic-sticky-notification-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Sticky Notification
                                                    </x-base.button>
                                                    <!-- END: Notification Toggle -->
                                                </div>
                                            </x-base.highlight>
                                            <x-base.highlight
                                                class="mt-5"
                                                type="javascript"
                                            >
                                                // Basic non sticky notification
                                                $("#basic-non-sticky-notification-toggle").on("click", function () {
                                                Toastify({
                                                node: $("#basic-non-sticky-notification-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: 3000,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                backgroundColor: "white",
                                                stopOnFocus: true,
                                                }).showToast();
                                                });

                                                // Basic sticky notification
                                                $("#basic-sticky-notification-toggle").on("click", function () {
                                                Toastify({
                                                node: $("#basic-non-sticky-notification-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                backgroundColor: "white",
                                                stopOnFocus: true,
                                                }).showToast();
                                                });
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Basic notifications are a simple yet effective way to
                                    inform users about important updates or actions they
                                    need to take. Whether you choose non-sticky or sticky
                                    notifications depends on the urgency and user experience
                                    you want to provide. Experiment with different styles
                                    and messages to create notifications that enhance your
                                    application's usability.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Success Notification
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
                                    Success notifications are a way to provide positive
                                    feedback to users when they perform actions
                                    successfully. This section demonstrates how to create
                                    and use success notifications.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Notification Content -->
                                                <x-base.notification
                                                    class="flex"
                                                    id="success-notification-content"
                                                >
                                                    <x-base.lucide
                                                        class="text-success"
                                                        icon="CheckCircle"
                                                    />
                                                    <div class="ml-4 mr-4">
                                                        <div class="font-medium">Message Saved!</div>
                                                        <div class="mt-1 text-slate-500">
                                                            The message will be sent in 5 minutes.
                                                        </div>
                                                    </div>
                                                </x-base.notification>
                                                <!-- END: Notification Content -->
                                                <!-- BEGIN: Notification Toggle -->
                                                <x-base.button
                                                    id="success-notification-toggle"
                                                    variant="primary"
                                                >
                                                    Show Notification
                                                </x-base.button>
                                                <!-- END: Notification Toggle -->
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Notification Content -->
                                                    <x-base.notification
                                                        class="flex"
                                                        id="success-notification-content"
                                                    >
                                                        <x-base.lucide
                                                            class="text-success"
                                                            icon="CheckCircle"
                                                        />
                                                        <div class="ml-4 mr-4">
                                                            <div class="font-medium">Message Saved!</div>
                                                            <div class="mt-1 text-slate-500">
                                                                The message will be sent in 5 minutes.
                                                            </div>
                                                        </div>
                                                    </x-base.notification>
                                                    <!-- END: Notification Content -->
                                                    <!-- BEGIN: Notification Toggle -->
                                                    <x-base.button
                                                        id="success-notification-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Notification
                                                    </x-base.button>
                                                    <!-- END: Notification Toggle -->
                                                </div>
                                            </x-base.highlight>
                                            <x-base.highlight
                                                class="mt-5"
                                                type="javascript"
                                            >
                                                // Success notification
                                                $("#success-notification-toggle").on("click", function () {
                                                Toastify({
                                                node: $("#success-notification-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                                }).showToast();
                                                });
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Success notifications play a vital role in enhancing the
                                    user experience by providing immediate feedback on
                                    successful actions. They help users understand that
                                    their actions were completed successfully, increasing
                                    their confidence in your application. Consider using
                                    success notifications for actions like saving data,
                                    completing tasks, or successful submissions. Customize
                                    the message and style to align with your application's
                                    branding and user expectations.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Notification with Actions
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
                                    Notifications with actions allow you to provide users
                                    with clear options to take after receiving a
                                    notification. This section demonstrates how to create
                                    and use notifications with actions.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Notification Content -->
                                                <x-base.notification
                                                    class="flex"
                                                    id="notification-with-actions-content"
                                                >
                                                    <x-base.lucide icon="HardDrive" />
                                                    <div class="ml-4 mr-4">
                                                        <div class="font-medium">Storage Removed!</div>
                                                        <div class="mt-1 text-slate-500">
                                                            The server will restart in 30 seconds, don't make
                                                            <br>
                                                            changes during the update process!
                                                        </div>
                                                        <div class="mt-1.5 flex font-medium">
                                                            <a
                                                                class="text-primary dark:text-slate-400"
                                                                href=""
                                                            >
                                                                Restart Now
                                                            </a>
                                                            <a
                                                                class="ml-3 text-slate-500"
                                                                href=""
                                                            >
                                                                Cancel
                                                            </a>
                                                        </div>
                                                    </div>
                                                </x-base.notification>
                                                <!-- END: Notification Content -->
                                                <!-- BEGIN: Notification Toggle -->
                                                <x-base.button
                                                    id="notification-with-actions-toggle"
                                                    variant="primary"
                                                >
                                                    Show Notification
                                                </x-base.button>
                                                <!-- END: Notification Toggle -->
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Notification Content -->
                                                    <x-base.notification
                                                        class="flex"
                                                        id="notification-with-actions-content"
                                                    >
                                                        <x-base.lucide icon="HardDrive" />
                                                        <div class="ml-4 mr-4">
                                                            <div class="font-medium">Storage Removed!</div>
                                                            <div class="mt-1 text-slate-500">
                                                                The server will restart in 30 seconds, don't make
                                                                <br>
                                                                changes during the update process!
                                                            </div>
                                                            <div class="mt-1.5 flex font-medium">
                                                                <a
                                                                    class="text-primary dark:text-slate-400"
                                                                    href=""
                                                                >
                                                                    Restart Now
                                                                </a>
                                                                <a
                                                                    class="ml-3 text-slate-500"
                                                                    href=""
                                                                >
                                                                    Cancel
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </x-base.notification>
                                                    <!-- END: Notification Content -->
                                                    <!-- BEGIN: Notification Toggle -->
                                                    <x-base.button
                                                        id="notification-with-actions-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Notification
                                                    </x-base.button>
                                                    <!-- END: Notification Toggle -->
                                                </div>
                                            </x-base.highlight>
                                            <x-base.highlight
                                                class="mt-5"
                                                type="javascript"
                                            >
                                                // Notification with actions
                                                $("#notification-with-actions-toggle").on("click", function () {
                                                Toastify({
                                                node: $("#notification-with-actions-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                                }).showToast();
                                                });
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Notifications with actions are a powerful way to engage
                                    users and guide them on the next steps they can take.
                                    These notifications are particularly useful for critical
                                    alerts or situations where user interaction is required.
                                    By providing clear and relevant action buttons, you can
                                    help users make informed decisions and take appropriate
                                    actions. Customize the message, icons, and actions to
                                    match your application's requirements and user needs.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Notification with Avatar
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
                                    Notifications with avatars allow you to personalize
                                    notifications by including user avatars or profile
                                    pictures. This section demonstrates how to create and
                                    use notifications with avatars.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Notification Content -->
                                                <x-base.notification
                                                    class="flex"
                                                    id="notification-with-avatar-content"
                                                >
                                                    <div
                                                        class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                        <img
                                                            src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        >
                                                    </div>
                                                    <div class="ml-4 sm:mr-28">
                                                        <div class="font-medium">
                                                            {{ $users[0]['name'] }}
                                                        </div>
                                                        <div class="mt-1 text-slate-500">
                                                            See you later! 😃😃😃
                                                        </div>
                                                    </div>
                                                    <a
                                                        class="absolute bottom-0 right-0 top-0 flex items-center border-l border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                                        data-dismiss="notification"
                                                        href="#"
                                                    >
                                                        Reply
                                                    </a>
                                                </x-base.notification>
                                                <!-- END: Notification Content -->
                                                <!-- BEGIN: Notification Toggle -->
                                                <x-base.button
                                                    id="notification-with-avatar-toggle"
                                                    variant="primary"
                                                >
                                                    Show Notification
                                                </x-base.button>
                                                <!-- END: Notification Toggle -->
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Notification Content -->
                                                    <x-base.notification
                                                        class="flex"
                                                        id="notification-with-avatar-content"
                                                    >
                                                        <div
                                                            class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                                            <img
                                                                src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                        <div class="ml-4 sm:mr-28">
                                                            <div class="font-medium">
                                                                {{ $users[0]['name'] }}
                                                            </div>
                                                            <div class="mt-1 text-slate-500">
                                                                See you later! 😃😃😃
                                                            </div>
                                                        </div>
                                                        <a
                                                            class="absolute bottom-0 right-0 top-0 flex items-center border-l border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                                            data-dismiss="notification"
                                                            href="#"
                                                        >
                                                            Reply
                                                        </a>
                                                    </x-base.notification>
                                                    <!-- END: Notification Content -->
                                                    <!-- BEGIN: Notification Toggle -->
                                                    <x-base.button
                                                        id="notification-with-avatar-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Notification
                                                    </x-base.button>
                                                    <!-- END: Notification Toggle -->
                                                </div>
                                            </x-base.highlight>
                                            <x-base.highlight
                                                class="mt-5"
                                                type="javascript"
                                            >
                                                // Notification with avatar
                                                $("#notification-with-avatar-toggle").on("click", function () {
                                                // Init toastify
                                                let avatarNotification = Toastify({
                                                node: $("#notification-with-avatar-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: false,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                                }).showToast();

                                                // Close notification event
                                                $(avatarNotification.toastElement)
                                                .find(\'[data-dismiss="notification"]\')
                                                .on("click", function () {
                                                avatarNotification.hideToast();
                                                });
                                                });
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Notifications with avatars add a personal touch to your
                                    notifications, making them more engaging and relatable
                                    to users. You can use avatars to identify the sender or
                                    source of the notification, creating a more
                                    user-friendly and interactive experience. Customize the
                                    avatar, user information, and message to match your
                                    application's context and user interactions.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Notification with Split Buttons
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
                                    Notifications with split buttons allow you to provide
                                    multiple action options within a single notification.
                                    This section demonstrates how to create and use
                                    notifications with split buttons.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Notification Content -->
                                                <x-base.notification
                                                    class="flex"
                                                    id="notification-with-split-buttons-content"
                                                >
                                                    <div class="sm:mr-40">
                                                        <div class="font-medium">
                                                            Introducing new theme
                                                        </div>
                                                        <div class="mt-1 text-slate-500">
                                                            Release version 2.3.3
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="absolute bottom-0 right-0 top-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                                        <a
                                                            class="flex flex-1 items-center justify-center border-b border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                                            href="#"
                                                        >
                                                            View Details
                                                        </a>
                                                        <a
                                                            class="flex flex-1 items-center justify-center px-6 font-medium text-slate-500"
                                                            data-dismiss="notification"
                                                            href="#"
                                                        >
                                                            Dismiss
                                                        </a>
                                                    </div>
                                                </x-base.notification>
                                                <!-- END: Notification Content -->
                                                <!-- BEGIN: Notification Toggle -->
                                                <x-base.button
                                                    id="notification-with-split-buttons-toggle"
                                                    variant="primary"
                                                >
                                                    Show Notification
                                                </x-base.button>
                                                <!-- END: Notification Toggle -->
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Notification Content -->
                                                    <x-base.notification
                                                        class="flex"
                                                        id="notification-with-split-buttons-content"
                                                    >
                                                        <div class="sm:mr-40">
                                                            <div class="font-medium">
                                                                Introducing new theme
                                                            </div>
                                                            <div class="mt-1 text-slate-500">
                                                                Release version 2.3.3
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 top-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                                            <a
                                                                class="flex flex-1 items-center justify-center border-b border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                                                href="#"
                                                            >
                                                                View Details
                                                            </a>
                                                            <a
                                                                class="flex flex-1 items-center justify-center px-6 font-medium text-slate-500"
                                                                data-dismiss="notification"
                                                                href="#"
                                                            >
                                                                Dismiss
                                                            </a>
                                                        </div>
                                                    </x-base.notification>
                                                    <!-- END: Notification Content -->
                                                    <!-- BEGIN: Notification Toggle -->
                                                    <x-base.button
                                                        id="notification-with-split-buttons-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Notification
                                                    </x-base.button>
                                                    <!-- END: Notification Toggle -->
                                                </div>
                                            </x-base.highlight>
                                            <x-base.highlight
                                                class="mt-5"
                                                type="javascript"
                                            >
                                                // Notification with split buttons
                                                $("#notification-with-split-buttons-toggle").on("click", function () {
                                                // Init toastify
                                                let splitButtonsNotification = Toastify({
                                                node: $("#notification-with-split-buttons-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: false,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                                }).showToast();

                                                // Close notification event
                                                $(splitButtonsNotification.toastElement)
                                                .find(\'[data-dismiss="notification"]\')
                                                .on("click", function () {
                                                splitButtonsNotification.hideToast();
                                                });
                                                });
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Notifications with split buttons enhance user
                                    interaction by offering multiple actions within a single
                                    notification. This feature is useful for providing users
                                    with choices or quick access to relevant actions without
                                    cluttering the notification interface. Customize the
                                    buttons and actions to suit your application's needs and
                                    provide a seamless user experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Notification with Buttons Below
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
                                    Notifications with buttons below allow you to include
                                    action buttons directly beneath the notification
                                    content. This section demonstrates how to create and use
                                    notifications with buttons below.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="text-center">
                                                <!-- BEGIN: Notification Content -->
                                                <x-base.notification
                                                    class="flex"
                                                    id="notification-with-buttons-below-content"
                                                >
                                                    <x-base.lucide icon="FileText" />
                                                    <div class="ml-4 mr-5 sm:mr-20">
                                                        <div class="font-medium">
                                                            {{ $users[0]['name'] }}
                                                        </div>
                                                        <div class="mt-1 text-slate-500">
                                                            Sent you new documents.
                                                        </div>
                                                        <div class="mt-2.5">
                                                            <x-base.button
                                                                class="mr-2 px-2 py-1"
                                                                href=""
                                                                variant="primary"
                                                                as="a"
                                                            >
                                                                Preview
                                                            </x-base.button>
                                                            <x-base.button
                                                                class="px-2 py-1"
                                                                href=""
                                                                variant="outline-secondary"
                                                                as="a"
                                                            >
                                                                Download
                                                            </x-base.button>
                                                        </div>
                                                    </div>
                                                </x-base.notification>
                                                <!-- END: Notification Content -->
                                                <!-- BEGIN: Notification Toggle -->
                                                <x-base.button
                                                    id="notification-with-buttons-below-toggle"
                                                    variant="primary"
                                                >
                                                    Show Notification
                                                </x-base.button>
                                                <!-- END: Notification Toggle -->
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="text-center">
                                                    <!-- BEGIN: Notification Content -->
                                                    <x-base.notification
                                                        class="flex"
                                                        id="notification-with-buttons-below-content"
                                                    >
                                                        <x-base.lucide icon="FileText" />
                                                        <div class="ml-4 mr-5 sm:mr-20">
                                                            <div class="font-medium">
                                                                {{ $users[0]['name'] }}
                                                            </div>
                                                            <div class="mt-1 text-slate-500">
                                                                Sent you new documents.
                                                            </div>
                                                            <div class="mt-2.5">
                                                                <x-base.button
                                                                    class="mr-2 px-2 py-1"
                                                                    href=""
                                                                    variant="primary"
                                                                    as="a"
                                                                >
                                                                    Preview
                                                                </x-base.button>
                                                                <x-base.button
                                                                    class="px-2 py-1"
                                                                    href=""
                                                                    variant="outline-secondary"
                                                                    as="a"
                                                                >
                                                                    Download
                                                                </x-base.button>
                                                            </div>
                                                        </div>
                                                    </x-base.notification>
                                                    <!-- END: Notification Content -->
                                                    <!-- BEGIN: Notification Toggle -->
                                                    <x-base.button
                                                        id="notification-with-buttons-below-toggle"
                                                        variant="primary"
                                                    >
                                                        Show Notification
                                                    </x-base.button>
                                                    <!-- END: Notification Toggle -->
                                                </div>
                                            </x-base.highlight>
                                            <x-base.highlight
                                                class="mt-5"
                                                type="javascript"
                                            >
                                                // Notification with buttons below
                                                $("#notification-with-buttons-below-toggle").on("click", function () {
                                                // Init toastify
                                                Toastify({
                                                node: $("#notification-with-buttons-below-content")
                                                .clone()
                                                .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                                }).showToast();
                                                });
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Notifications with buttons below enhance user engagement
                                    by placing actionable buttons directly beneath the
                                    notification message. This design allows users to
                                    quickly respond or take specific actions related to the
                                    notification's content. Customize the buttons and
                                    content to suit your application's needs and provide a
                                    seamless user experience.
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
                                                <x-base.table.td>`options`</x-base.table.td>
                                                <x-base.table.td>`Options`</x-base.table.td>
                                                <x-base.table.td>
                                                    An object containing options for configuring the
                                                    notification behavior. Explore all the available
                                                    APIs through the following helpful documentation
                                                    links
                                                    <a
                                                        class="ml-1 text-primary"
                                                        href="https://apvarun.github.io/toastify-js/"
                                                        target="blank"
                                                    >
                                                        https://apvarun.github.io/toastify-js/
                                                    </a>
                                                    .
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: NotificationElement) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A callback function to receive a reference to the
                                                    NotificationElement.
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
                                    Basic Notification
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
                                    Success Notification
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
                                    Notification with Actions
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
                                    Notification with Avatar
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
                                    Notification with Split Buttons
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
                                    Notification with Buttons Below
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
    @vite('resources/js/pages/notification.js')
@endPushOnce
