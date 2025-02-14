@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Tom Select
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the power of our Tom Select component for creating
                    versatile and user-friendly select inputs in your web applications.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Select
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
                                    The "Basic Select" component provides a simple dropdown
                                    menu for selecting options from a list. It's a
                                    fundamental UI element for collecting user input in the
                                    form of a single choice from multiple options.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <!-- BEGIN: Basic Select -->
                                            <div>
                                                <label>Basic</label>
                                                <div class="mt-2">
                                                    <x-base.tom-select
                                                        class="w-full"
                                                        data-placeholder="Select your favorite actors"
                                                    >
                                                        <option value="1">Leonardo DiCaprio</option>
                                                        <option value="2">Johnny Deep</option>
                                                        <option value="3">Robert Downey, Jr</option>
                                                        <option value="4">Samuel L. Jackson</option>
                                                        <option value="5">Morgan Freeman</option>
                                                    </x-base.tom-select>
                                                </div>
                                            </div>
                                            <!-- END: Basic Select -->
                                            <!-- BEGIN: Nested Select -->
                                            <div class="mt-3">
                                                <label>Nested</label>
                                                <div class="mt-2">
                                                    <x-base.tom-select
                                                        class="w-full"
                                                        data-placeholder="Select your favorite actors"
                                                    >
                                                        <optgroup label="American Actors">
                                                            <option value="1">Leonardo DiCaprio</option>
                                                            <option value="2">Johnny Deep</option>
                                                            <option value="3">Robert Downey, Jr</option>
                                                            <option value="4">Samuel L. Jackson</option>
                                                            <option value="5">Morgan Freeman</option>
                                                        </optgroup>
                                                        <optgroup label="American Actresses">
                                                            <option value="6">Scarlett Johansson</option>
                                                            <option value="7">Jessica Alba</option>
                                                            <option value="8">Jennifer Lawrence</option>
                                                            <option value="9">Emma Stone</option>
                                                            <option value="10">Angelina Jolie</option>
                                                        </optgroup>
                                                    </x-base.tom-select>
                                                </div>
                                            </div>
                                            <!-- END: Nested Select -->
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <!-- BEGIN: Basic Select -->
                                                <div>
                                                    <label>Basic</label>
                                                    <div class="mt-2">
                                                        <x-base.tom-select
                                                            class="w-full"
                                                            data-placeholder="Select your favorite actors"
                                                        >
                                                            <option value="1">Leonardo DiCaprio</option>
                                                            <option value="2">Johnny Deep</option>
                                                            <option value="3">Robert Downey, Jr</option>
                                                            <option value="4">Samuel L. Jackson</option>
                                                            <option value="5">Morgan Freeman</option>
                                                        </x-base.tom-select>
                                                    </div>
                                                </div>
                                                <!-- END: Basic Select -->
                                                <!-- BEGIN: Nested Select -->
                                                <div class="mt-3">
                                                    <label>Nested</label>
                                                    <div class="mt-2">
                                                        <x-base.tom-select
                                                            class="w-full"
                                                            data-placeholder="Select your favorite actors"
                                                        >
                                                            <optgroup label="American Actors">
                                                                <option value="1">Leonardo DiCaprio</option>
                                                                <option value="2">Johnny Deep</option>
                                                                <option value="3">Robert Downey, Jr</option>
                                                                <option value="4">Samuel L. Jackson</option>
                                                                <option value="5">Morgan Freeman</option>
                                                            </optgroup>
                                                            <optgroup label="American Actresses">
                                                                <option value="6">Scarlett Johansson</option>
                                                                <option value="7">Jessica Alba</option>
                                                                <option value="8">Jennifer Lawrence</option>
                                                                <option value="9">Emma Stone</option>
                                                                <option value="10">Angelina Jolie</option>
                                                            </optgroup>
                                                        </x-base.tom-select>
                                                    </div>
                                                </div>
                                                <!-- END: Nested Select -->
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Basic Select" component provides a straightforward
                                    way to incorporate dropdown menus into your web
                                    application. By following the steps outlined above, you
                                    can easily create and customize dropdowns to collect
                                    user input or make selections from a list of options.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Multiple Select
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
                                    The "Multiple Select" component allows users to select
                                    multiple options from a list. It's a versatile UI
                                    element often used in scenarios where users need to make
                                    multiple selections, such as choosing multiple items
                                    from a list of available options.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tom-select
                                                class="w-full"
                                                data-placeholder="Select your favorite actors"
                                                multiple
                                            >
                                                <option
                                                    value="1"
                                                    selected
                                                >Leonardo DiCaprio</option>
                                                <option value="2">Johnny Deep</option>
                                                <option
                                                    value="3"
                                                    selected
                                                >Robert Downey, Jr</option>
                                                <option value="4">Samuel L. Jackson</option>
                                                <option value="5">Morgan Freeman</option>
                                            </x-base.tom-select>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tom-select
                                                    class="w-full"
                                                    data-placeholder="Select your favorite actors"
                                                    multiple
                                                >
                                                    <option
                                                        value="1"
                                                        selected
                                                    >Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option
                                                        value="3"
                                                        selected
                                                    >Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </x-base.tom-select>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Multiple Select" component using TomSelect provides
                                    an easy and user-friendly way for users to make multiple
                                    selections from a list of options. It's highly
                                    customizable and can be adapted to various use cases in
                                    your web application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Header</div>
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
                                    The "TomSelect" component is a versatile select input
                                    library that allows you to create customized dropdowns
                                    and multi-select inputs. In this section, we'll explore
                                    how to enhance your "TomSelect" component by adding a
                                    header to the dropdown. This can be particularly useful
                                    when you want to provide context or group items within
                                    the dropdown.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tom-select
                                                class="w-full"
                                                data-placeholder="Select your favorite actors"
                                                data-header="Actors"
                                                multiple
                                            >
                                                <option value="1">Leonardo DiCaprio</option>
                                                <option
                                                    value="2"
                                                    selected
                                                >Johnny Deep</option>
                                                <option
                                                    value="3"
                                                    selected
                                                >Robert Downey, Jr</option>
                                                <option value="4">Samuel L. Jackson</option>
                                                <option
                                                    value="5"
                                                    selected
                                                >Morgan Freeman</option>
                                            </x-base.tom-select>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tom-select
                                                    class="w-full"
                                                    data-placeholder="Select your favorite actors"
                                                    data-header="Actors"
                                                    multiple
                                                >
                                                    <option value="1">Leonardo DiCaprio</option>
                                                    <option
                                                        value="2"
                                                        selected
                                                    >Johnny Deep</option>
                                                    <option
                                                        value="3"
                                                        selected
                                                    >Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option
                                                        value="5"
                                                        selected
                                                    >Morgan Freeman</option>
                                                </x-base.tom-select>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    By adding a header to your "TomSelect" component, you
                                    can provide valuable context and grouping for the
                                    options within the dropdown. This enhances the user
                                    experience and helps users make informed selections.
                                    Customize the header title to match your application's
                                    requirements and design. The "TomSelect" library offers
                                    various plugins to further extend the functionality of
                                    your select inputs.
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
                                    The "TomSelect" component, combined with an input group,
                                    allows you to create a stylish and functional select
                                    input with a custom icon or character preceding it. This
                                    is useful when you want to provide additional context to
                                    the select input.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex">
                                                <div
                                                    class="z-30 -mr-1 flex w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-600 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                                    @
                                                </div>
                                                <x-base.tom-select class="w-full">
                                                    <option value="1">Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option value="3">Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </x-base.tom-select>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex">
                                                    <div class="flex">
                                                        <div
                                                            class="z-30 -mr-1 flex w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-600 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                                            @
                                                        </div>
                                                        <x-base.tom-select class="w-full">
                                                            <option value="1">Leonardo DiCaprio</option>
                                                            <option value="2">Johnny Deep</option>
                                                            <option value="3">Robert Downey, Jr</option>
                                                            <option value="4">Samuel L. Jackson</option>
                                                            <option value="5">Morgan Freeman</option>
                                                        </x-base.tom-select>
                                                    </div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Combining the "TomSelect" component with an input group
                                    allows you to create a select input with a personalized
                                    icon or character preceding it. This feature enhances
                                    the user interface and provides a unique visual
                                    representation for your select input, making it more
                                    user-friendly and visually appealing.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Disabled</div>
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
                                    The "TomSelect" component can be easily configured to be
                                    disabled, preventing users from interacting with it.
                                    This feature is useful when you want to display a select
                                    input that should not be altered or selected by the
                                    user.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tom-select
                                                class="w-full"
                                                disabled
                                            >
                                                <option value="1">Leonardo DiCaprio</option>
                                                <option value="2">Johnny Deep</option>
                                                <option value="3">Robert Downey, Jr</option>
                                                <option value="4">Samuel L. Jackson</option>
                                                <option value="5">Morgan Freeman</option>
                                            </x-base.tom-select>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tom-select
                                                    class="w-full"
                                                    disabled
                                                >
                                                    <option value="1">Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option value="3">Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </x-base.tom-select>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "TomSelect" component can be easily disabled by
                                    setting the disabled attribute to true, making it
                                    unselectable and preventing user interaction. This
                                    feature is particularly useful when you want to display
                                    a select input that is for informational purposes only
                                    and should not be altered by users. You can customize
                                    the appearance and content of the disabled "TomSelect"
                                    to fit your application's style and layout. Incorporate
                                    it into your application as needed to create a
                                    user-friendly and accessible interface.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Disabled Option
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
                                    The "TomSelect" component allows you to create select
                                    inputs with disabled options. Disabled options are
                                    elements within the dropdown menu that cannot be
                                    selected by users. This can be helpful for providing
                                    additional context or indicating unavailable choices
                                    within a select input.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.tom-select class="w-full">
                                                <option
                                                    value="1"
                                                    disabled
                                                >
                                                    Leonardo DiCaprio
                                                </option>
                                                <option value="2">Johnny Deep</option>
                                                <option value="3">Robert Downey, Jr</option>
                                                <option
                                                    value="4"
                                                    disabled
                                                >
                                                    Samuel L. Jackson
                                                </option>
                                                <option value="5">Morgan Freeman</option>
                                            </x-base.tom-select>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.tom-select class="w-full">
                                                    <option
                                                        value="1"
                                                        disabled
                                                    >Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option value="3">Robert Downey, Jr</option>
                                                    <option
                                                        value="4"
                                                        disabled
                                                    >Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </x-base.tom-select>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "TomSelect" component allows you to include disabled
                                    options within a select input. These disabled options
                                    are displayed in the dropdown menu but cannot be
                                    selected by users. You can use disabled options to
                                    provide additional information or indicate choices that
                                    are currently unavailable.
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
                                    <div class="-mt-px">TomSelect</div>
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
                                                <x-base.table.td>`value`</x-base.table.td>
                                                <x-base.table.td>`string` or `string[]`</x-base.table.td>
                                                <x-base.table.td>
                                                    The selected value(s) in the TomSelect component.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onOptionAdd`</x-base.table.td>
                                                <x-base.table.td>`(value: string) =&gt; void`</x-base.table.td>
                                                <x-base.table.td>
                                                    A callback function that is called when an option is
                                                    added.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`onChange`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(value: `string` or `string[]`) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A callback function that is called when the selected
                                                    value(s) change.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`options`</x-base.table.td>
                                                <x-base.table.td>`TomSettings`</x-base.table.td>
                                                <x-base.table.td>TomSelect configuration options.</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: TomSelectElement) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A function that receives a reference to the
                                                    TomSelect input element.
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
                                    Basic Select
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
                                    Multiple Select
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
                                    Header
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
                                    Disabled
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
                                    Disabled Option
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
