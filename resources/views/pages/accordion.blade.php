@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Accordion
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Explore our accordion component, effortless content organization and
                    presentation!
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Accordion
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
                                    The Basic Accordion component is a powerful and flexible
                                    way to organize and present information on your website
                                    or application. It allows you to create collapsible
                                    sections of content, making it easy for users to access
                                    information without overwhelming them with too much text
                                    or detail at once.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.disclosure.group>
                                                <x-base.disclosure
                                                    id="faq-accordion-1"
                                                    :index="0"
                                                >
                                                    <x-base.disclosure.button>
                                                        OpenSSL Essentials: Working with SSL Certificates,
                                                        Private Keys
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                                <x-base.disclosure
                                                    id="faq-accordion-2"
                                                    :index="1"
                                                >
                                                    <x-base.disclosure.button>
                                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                                <x-base.disclosure
                                                    id="faq-accordion-3"
                                                    :index="2"
                                                >
                                                    <x-base.disclosure.button>
                                                        How To Troubleshoot Common HTTP Error Codes
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                                <x-base.disclosure
                                                    id="faq-accordion-4"
                                                    :index="3"
                                                >
                                                    <x-base.disclosure.button>
                                                        An Introduction to Securing your Linux VPS
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                            </x-base.disclosure.group>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.disclosure.group>
                                                    <x-base.disclosure
                                                        id="faq-accordion-1"
                                                        :index="0"
                                                    >
                                                        <x-base.disclosure.button>
                                                            OpenSSL Essentials: Working with SSL Certificates,
                                                            Private Keys
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                    <x-base.disclosure
                                                        id="faq-accordion-2"
                                                        :index="1"
                                                    >
                                                        <x-base.disclosure.button>
                                                            Understanding IP Addresses, Subnets, and CIDR Notation
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                    <x-base.disclosure
                                                        id="faq-accordion-3"
                                                        :index="2"
                                                    >
                                                        <x-base.disclosure.button>
                                                            How To Troubleshoot Common HTTP Error Codes
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                    <x-base.disclosure
                                                        id="faq-accordion-4"
                                                        :index="3"
                                                    >
                                                        <x-base.disclosure.button>
                                                            An Introduction to Securing your Linux VPS
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                </x-base.disclosure.group>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Customize the appearance of your accordion sections and
                                    panels to match your brand's style and design
                                    preferences. Experiment with different content types and
                                    layouts to create engaging and user-friendly
                                    experiences.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Boxed Accordion
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
                                    The "Boxed Accordion" component provides a stylish and
                                    organized way to create collapsible content sections
                                    with a boxed appearance. This variation of the accordion
                                    is perfect for presenting information in a structured
                                    and visually appealing manner.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.disclosure.group variant="boxed">
                                                <x-base.disclosure
                                                    id="faq-accordion-5"
                                                    :index="0"
                                                >
                                                    <x-base.disclosure.button>
                                                        OpenSSL Essentials: Working with SSL Certificates,
                                                        Private Keys
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                                <x-base.disclosure
                                                    id="faq-accordion-6"
                                                    :index="1"
                                                >
                                                    <x-base.disclosure.button>
                                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                                <x-base.disclosure
                                                    id="faq-accordion-7"
                                                    :index="2"
                                                >
                                                    <x-base.disclosure.button>
                                                        How To Troubleshoot Common HTTP Error Codes
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                                <x-base.disclosure
                                                    id="faq-accordion-8"
                                                    :index="3"
                                                >
                                                    <x-base.disclosure.button>
                                                        An Introduction to Securing your Linux VPS
                                                    </x-base.disclosure.button>
                                                    <x-base.disclosure.panel
                                                        class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                    >
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap
                                                        into electronic typesetting, remaining essentially
                                                        unchanged.
                                                    </x-base.disclosure.panel>
                                                </x-base.disclosure>
                                            </x-base.disclosure.group>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.disclosure.group variant="boxed">
                                                    <x-base.disclosure
                                                        id="faq-accordion-5"
                                                        :index="0"
                                                    >
                                                        <x-base.disclosure.button>
                                                            OpenSSL Essentials: Working with SSL Certificates,
                                                            Private Keys
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                    <x-base.disclosure
                                                        id="faq-accordion-6"
                                                        :index="1"
                                                    >
                                                        <x-base.disclosure.button>
                                                            Understanding IP Addresses, Subnets, and CIDR Notation
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                    <x-base.disclosure
                                                        id="faq-accordion-7"
                                                        :index="2"
                                                    >
                                                        <x-base.disclosure.button>
                                                            How To Troubleshoot Common HTTP Error Codes
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                    <x-base.disclosure
                                                        id="faq-accordion-8"
                                                        :index="3"
                                                    >
                                                        <x-base.disclosure.button>
                                                            An Introduction to Securing your Linux VPS
                                                        </x-base.disclosure.button>
                                                        <x-base.disclosure.panel
                                                            class="leading-relaxed text-slate-600 dark:text-slate-500"
                                                        >
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.
                                                        </x-base.disclosure.panel>
                                                    </x-base.disclosure>
                                                </x-base.disclosure.group>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The Boxed Accordion component offers a visually pleasing
                                    way to structure and present content that users can
                                    expand and collapse. Customize it to suit your project's
                                    needs and enhance the user experience on your website or
                                    application. Enjoy using the Boxed Accordion!
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
                                    <div class="-mt-px">Disclosure</div>
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
                                    <div class="-mt-px">Disclosure.Group</div>
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
                                                    HTML element or React component type.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`selectedIndex`</x-base.table.td>
                                                <x-base.table.td>`number`</x-base.table.td>
                                                <x-base.table.td>
                                                    Currently selected index within the group.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`variant`</x-base.table.td>
                                                <x-base.table.td>Variant ('default' or 'boxed')</x-base.table.td>
                                                <x-base.table.td>Disclosure group style variant.</x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Disclosure.Button</div>
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
                                    <div class="-mt-px">Disclosure.Panel</div>
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
                                    class="-mt-px block truncate"
                                    href=""
                                >
                                    Basic Accordion
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
                                    Boxed Accordion
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
