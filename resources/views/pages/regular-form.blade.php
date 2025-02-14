@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Regular Form
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Unlock the potential of our Form component for creating
                    user-friendly and interactive web forms effortlessly.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Input</div>
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
                                    Input fields are a fundamental part of web forms and
                                    allow users to provide information or interact with your
                                    application. This section covers how to use input
                                    components in your web application and provides examples
                                    of different input styles.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <x-base.form-label for="regular-form-1">
                                                    Input Text
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-1"
                                                    type="text"
                                                    placeholder="Input text"
                                                />
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="regular-form-6">
                                                    Input File
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-6"
                                                    type="file"
                                                    placeholder="Input file"
                                                />
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="regular-form-2">
                                                    Rounded
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-2"
                                                    type="text"
                                                    rounded
                                                    placeholder="Rounded"
                                                />
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="regular-form-3">
                                                    With Help
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-3"
                                                    type="text"
                                                    placeholder="With help"
                                                />
                                                <x-base.form-help>
                                                    Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry.
                                                </x-base.form-help>
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="regular-form-4">
                                                    Password
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-4"
                                                    type="password"
                                                    placeholder="Password"
                                                />
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="regular-form-5">
                                                    Disabled
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-5"
                                                    type="text"
                                                    placeholder="Disabled"
                                                    disabled
                                                />
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <x-base.form-label for="regular-form-1">Input
                                                        Text</x-base.form-label>
                                                    <x-base.form-input
                                                        id="regular-form-1"
                                                        type="text"
                                                        placeholder="Input text"
                                                    />
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="regular-form-6">
                                                        Input File
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="regular-form-6"
                                                        type="file"
                                                        placeholder="Input file"
                                                    />
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="regular-form-2">Rounded</x-base.form-label>
                                                    <x-base.form-input
                                                        id="regular-form-2"
                                                        type="text"
                                                        rounded
                                                        placeholder="Rounded"
                                                    />
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="regular-form-3">With
                                                        Help</x-base.form-label>
                                                    <x-base.form-input
                                                        id="regular-form-3"
                                                        type="text"
                                                        placeholder="With help"
                                                    />
                                                    <x-base.form-help>
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry.
                                                    </x-base.form-help>
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="regular-form-4">Password</x-base.form-label>
                                                    <x-base.form-input
                                                        id="regular-form-4"
                                                        type="password"
                                                        placeholder="Password"
                                                    />
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="regular-form-5">Disabled</x-base.form-label>
                                                    <x-base.form-input
                                                        id="regular-form-5"
                                                        type="text"
                                                        placeholder="Disabled"
                                                        disabled
                                                    />
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    By using the `Input` component and customizing its
                                    attributes, you can create versatile input fields that
                                    meet your application's requirements and provide a
                                    seamless user experience. Be sure to choose the
                                    appropriate input type and validation rules based on
                                    your specific use case.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Input Sizing
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
                                    Input sizing is an important aspect of user interface
                                    design. It allows you to control the dimensions of input
                                    fields to ensure they fit well within your application's
                                    layout. This section covers how to adjust the size of
                                    input components and provides examples of different
                                    sizing options.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.form-input
                                                formInputSize="lg"
                                                type="text"
                                                aria-label=".form-control-lg example"
                                                placeholder=".form-control-lg"
                                            />
                                            <x-base.form-input
                                                class="mt-2"
                                                type="text"
                                                aria-label="default input example"
                                                placeholder="Default input"
                                            />
                                            <x-base.form-input
                                                class="mt-2"
                                                formInputSize="sm"
                                                type="text"
                                                aria-label=".form-control-sm example"
                                                placeholder=".form-control-sm"
                                            />
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.form-input
                                                    formInputSize="lg"
                                                    type="text"
                                                    aria-label=".form-control-lg example"
                                                    placeholder=".form-control-lg"
                                                />
                                                <x-base.form-input
                                                    class="mt-2"
                                                    type="text"
                                                    aria-label="default input example"
                                                    placeholder="Default input"
                                                />
                                                <x-base.form-input
                                                    class="mt-2"
                                                    formInputSize="sm"
                                                    type="text"
                                                    aria-label=".form-control-sm example"
                                                    placeholder=".form-control-sm"
                                                />
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Controlling the size of input components is essential
                                    for achieving a visually appealing and user-friendly
                                    design. By using the `Input` component and specifying
                                    the desired size, you can ensure that input fields match
                                    your application's layout and styling requirements.
                                    Experiment with different sizes to find the one that
                                    best fits your design goals and provides an optimal user
                                    experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Input Groups
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
                                    Input groups are a useful UI element for combining form
                                    inputs with additional text or icons. They are often
                                    used to create visually integrated and contextually
                                    relevant input fields. This section covers how to create
                                    input groups using the `InputGroup` component and
                                    provides examples of various input group configurations.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.input-group>
                                                <x-base.input-group.text id="input-group-email">
                                                    @
                                                </x-base.input-group.text>
                                                <x-base.form-input
                                                    type="text"
                                                    aria-label="Email"
                                                    aria-describedby="input-group-email"
                                                    placeholder="Email"
                                                />
                                            </x-base.input-group>
                                            <x-base.input-group class="mt-2">
                                                <x-base.form-input
                                                    type="text"
                                                    aria-label="Price"
                                                    aria-describedby="input-group-price"
                                                    placeholder="Price"
                                                />
                                                <x-base.input-group.text id="input-group-price">
                                                    .00
                                                </x-base.input-group.text>
                                            </x-base.input-group>
                                            <x-base.input-group class="mt-2">
                                                <x-base.input-group.text>@</x-base.input-group.text>
                                                <x-base.form-input
                                                    type="text"
                                                    aria-label="Amount (to the nearest dollar)"
                                                    placeholder="Price"
                                                />
                                                <x-base.input-group.text>.00</x-base.input-group.text>
                                            </x-base.input-group>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.input-group>
                                                    <x-base.input-group.text id="input-group-email">
                                                        @
                                                    </x-base.input-group.text>
                                                    <x-base.form-input
                                                        type="text"
                                                        aria-label="Email"
                                                        aria-describedby="input-group-email"
                                                        placeholder="Email"
                                                    />
                                                </x-base.input-group>
                                                <x-base.input-group class="mt-2">
                                                    <x-base.form-input
                                                        type="text"
                                                        aria-label="Price"
                                                        aria-describedby="input-group-price"
                                                        placeholder="Price"
                                                    />
                                                    <x-base.input-group.text id="input-group-price">
                                                        .00
                                                    </x-base.input-group.text>
                                                </x-base.input-group>
                                                <x-base.input-group class="mt-2">
                                                    <x-base.input-group.text>@</x-base.input-group.text>
                                                    <x-base.form-input
                                                        type="text"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        placeholder="Price"
                                                    />
                                                    <x-base.input-group.text>.00</x-base.input-group.text>
                                                </x-base.input-group>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Input groups are a versatile tool for enhancing the
                                    usability and visual appeal of your forms. Whether you
                                    need to add icons, labels, or supplementary text to your
                                    input fields, the `InputGroup` component allows you to
                                    create cohesive and informative input groups. Experiment
                                    with different configurations to find the best way to
                                    present your form elements and improve the user
                                    experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Input State
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
                                    Input states provide visual feedback to users about the
                                    status or validity of form inputs. This section covers
                                    how to apply different states to form inputs using CSS
                                    classes and provides examples of various input states.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <x-base.form-label for="input-state-1">
                                                    Input Success
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    class="border-success"
                                                    id="input-state-1"
                                                    type="text"
                                                    placeholder="Input text"
                                                />
                                                <div class="grid w-full h-1 grid-cols-12 gap-4 mt-3">
                                                    <div class="h-full col-span-3 rounded bg-success"></div>
                                                    <div class="h-full col-span-3 rounded bg-success"></div>
                                                    <div class="h-full col-span-3 rounded bg-success"></div>
                                                    <div
                                                        class="h-full col-span-3 rounded bg-slate-100 dark:bg-darkmode-800">
                                                    </div>
                                                </div>
                                                <div class="mt-2 text-success">
                                                    Strong password
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="input-state-2">
                                                    Input Warning
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    class="border-warning"
                                                    id="input-state-2"
                                                    type="text"
                                                    placeholder="Input text"
                                                />
                                                <div class="mt-2 text-warning">
                                                    Attempting to reconnect to server...
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="input-state-3">
                                                    Input Error
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    class="border-danger"
                                                    id="input-state-3"
                                                    type="text"
                                                    placeholder="Input text"
                                                />
                                                <div class="mt-2 text-danger">
                                                    This field is required
                                                </div>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <x-base.form-label for="input-state-1">
                                                        Input Success
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        class="border-success"
                                                        id="input-state-1"
                                                        type="text"
                                                        placeholder="Input text"
                                                    />
                                                    <div class="grid w-full h-1 grid-cols-12 gap-4 mt-3">
                                                        <div class="h-full col-span-3 rounded bg-success"></div>
                                                        <div class="h-full col-span-3 rounded bg-success"></div>
                                                        <div class="h-full col-span-3 rounded bg-success"></div>
                                                        <div
                                                            class="h-full col-span-3 rounded bg-slate-100 dark:bg-darkmode-800">
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 text-success">Strong password</div>
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="input-state-2">
                                                        Input Warning
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        class="border-warning"
                                                        id="input-state-2"
                                                        type="text"
                                                        placeholder="Input text"
                                                    />
                                                    <div class="mt-2 text-warning">
                                                        Attempting to reconnect to server...
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="input-state-3">Input
                                                        Error</x-base.form-label>
                                                    <x-base.form-input
                                                        class="border-danger"
                                                        id="input-state-3"
                                                        type="text"
                                                        placeholder="Input text"
                                                    />
                                                    <div class="mt-2 text-danger">
                                                        This field is required
                                                    </div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Input states are crucial for providing feedback to users
                                    and enhancing the user experience in your forms. By
                                    applying the appropriate state classes, you can visually
                                    communicate the status of each input field, making it
                                    easier for users to understand and interact with your
                                    forms. Experiment with different styles and states to
                                    match the design and functionality of your web
                                    application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Select Options
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
                                    The "Select Options" component allows you to create
                                    dropdown select elements with various options. This
                                    section covers how to use the component and provides
                                    examples of different select options.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="flex flex-col items-center sm:flex-row">
                                                <x-base.form-select
                                                    class="sm:mr-2 sm:mt-2"
                                                    formSelectSize="lg"
                                                    aria-label=".form-select-lg example"
                                                >
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </x-base.form-select>
                                                <x-base.form-select
                                                    class="mt-2 sm:mr-2"
                                                    aria-label="Default select example"
                                                >
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </x-base.form-select>
                                                <x-base.form-select
                                                    class="mt-2"
                                                    formSelectSize="sm"
                                                    aria-label=".form-select-sm example"
                                                >
                                                    <option>Chris Evans</option>
                                                    <option>Liam Neeson</option>
                                                    <option>Daniel Craig</option>
                                                </x-base.form-select>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="flex flex-col items-center sm:flex-row">
                                                    <x-base.form-select
                                                        class="sm:mr-2 sm:mt-2"
                                                        formSelectSize="lg"
                                                        aria-label=".form-select-lg example"
                                                    >
                                                        <option>Chris Evans</option>
                                                        <option>Liam Neeson</option>
                                                        <option>Daniel Craig</option>
                                                    </x-base.form-select>
                                                    <x-base.form-select
                                                        class="mt-2 sm:mr-2"
                                                        aria-label="Default select example"
                                                    >
                                                        <option>Chris Evans</option>
                                                        <option>Liam Neeson</option>
                                                        <option>Daniel Craig</option>
                                                    </x-base.form-select>
                                                    <x-base.form-select
                                                        class="mt-2"
                                                        formSelectSize="sm"
                                                        aria-label=".form-select-sm example"
                                                    >
                                                        <option>Chris Evans</option>
                                                        <option>Liam Neeson</option>
                                                        <option>Daniel Craig</option>
                                                    </x-base.form-select>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Select Options" component is a versatile tool for
                                    creating dropdown select elements with a wide range of
                                    options. You can use it to build various forms and user
                                    interfaces that require user selection from predefined
                                    choices. Customize the options and styles to match your
                                    project's requirements, and make the user experience
                                    smooth and efficient.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Vertical Form
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
                                    The "Vertical Form" component allows you to create forms
                                    with a vertical layout, where form fields and labels are
                                    stacked on top of each other. This section covers how to
                                    use the component and provides examples of vertical
                                    forms.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <x-base.form-label for="vertical-form-1">
                                                    Email
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="vertical-form-1"
                                                    type="text"
                                                    placeholder="example@gmail.com"
                                                />
                                            </div>
                                            <div class="mt-3">
                                                <x-base.form-label for="vertical-form-2">
                                                    Password
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="vertical-form-2"
                                                    type="text"
                                                    placeholder="secret"
                                                />
                                            </div>
                                            <x-base.form-check class="mt-5">
                                                <x-base.form-check.input
                                                    id="vertical-form-3"
                                                    type="checkbox"
                                                    value=""
                                                />
                                                <x-base.form-check.label for="vertical-form-3">
                                                    Remember me
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.button
                                                class="mt-5"
                                                variant="primary"
                                            >
                                                Login
                                            </x-base.button>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <x-base.form-label for="vertical-form-1">Email</x-base.form-label>
                                                    <x-base.form-input
                                                        id="vertical-form-1"
                                                        type="text"
                                                        placeholder="example@gmail.com"
                                                    />
                                                </div>
                                                <div class="mt-3">
                                                    <x-base.form-label for="vertical-form-2">Password</x-base.form-label>
                                                    <x-base.form-input
                                                        id="vertical-form-2"
                                                        type="text"
                                                        placeholder="secret"
                                                    />
                                                </div>
                                                <x-base.form-check class="mt-5">
                                                    <x-base.form-check.input
                                                        id="vertical-form-3"
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="vertical-form-3">
                                                        Remember me
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                                <x-base.button
                                                    class="mt-5"
                                                    variant="primary"
                                                >
                                                    Login
                                                </x-base.button>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Vertical Form" component is ideal for creating
                                    forms with a clean and straightforward layout, ensuring
                                    a seamless user experience. Customize it according to
                                    your project's needs, such as adding validation, error
                                    handling, and styling. This component simplifies the
                                    process of creating forms, making it easy to collect
                                    user input in a structured manner.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Horizontal Form
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    The "Horizontal Form" component allows you to create
                                    forms with a horizontal layout, where form labels are
                                    aligned to the left of the form fields. This section
                                    covers how to use the component and provides examples of
                                    horizontal forms.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.form-inline>
                                                <x-base.form-label
                                                    class="sm:w-20"
                                                    for="horizontal-form-1"
                                                >
                                                    Email
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="horizontal-form-1"
                                                    type="text"
                                                    placeholder="example@gmail.com"
                                                />
                                            </x-base.form-inline>
                                            <x-base.form-inline class="mt-5">
                                                <x-base.form-label
                                                    class="sm:w-20"
                                                    for="horizontal-form-2"
                                                >
                                                    Password
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="horizontal-form-2"
                                                    type="password"
                                                    placeholder="secret"
                                                />
                                            </x-base.form-inline>
                                            <x-base.form-check class="mt-5 sm:ml-20 sm:pl-5">
                                                <x-base.form-check.input
                                                    id="horizontal-form-3"
                                                    type="checkbox"
                                                    value=""
                                                />
                                                <x-base.form-check.label for="horizontal-form-3">
                                                    Remember me
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <div class="mt-5 sm:ml-20 sm:pl-5">
                                                <x-base.button variant="primary">Login</x-base.button>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.form-inline>
                                                    <x-base.form-label
                                                        class="sm:w-20"
                                                        for="horizontal-form-1"
                                                    >
                                                        Email
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="horizontal-form-1"
                                                        type="text"
                                                        placeholder="example@gmail.com"
                                                    />
                                                </x-base.form-inline>
                                                <x-base.form-inline class="mt-5">
                                                    <x-base.form-label
                                                        class="sm:w-20"
                                                        for="horizontal-form-2"
                                                    >
                                                        Password
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="horizontal-form-2"
                                                        type="password"
                                                        placeholder="secret"
                                                    />
                                                </x-base.form-inline>
                                                <x-base.form-check class="mt-5 sm:ml-20 sm:pl-5">
                                                    <x-base.form-check.input
                                                        id="horizontal-form-3"
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="horizontal-form-3">
                                                        Remember me
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                                <div class="mt-5 sm:ml-20 sm:pl-5">
                                                    <x-base.button variant="primary">Login</x-base.button>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Horizontal Form" component is useful for creating
                                    forms with a traditional horizontal layout, where labels
                                    are aligned to the left of input fields. Customize it
                                    according to your project's needs, such as adding
                                    validation, error handling, and styling. This component
                                    provides a clear and organized way to collect user input
                                    in a structured manner while maintaining a familiar form
                                    layout.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Inline Form
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    The "Inline Form" component allows you to create forms
                                    with inline elements, where form fields and labels
                                    appear horizontally on the same line. This section
                                    covers how to use the component and provides examples of
                                    inline forms.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="grid grid-cols-12 gap-2">
                                                <x-base.form-input
                                                    class="col-span-4"
                                                    type="text"
                                                    aria-label="default input inline 1"
                                                    placeholder="Input inline 1"
                                                />
                                                <x-base.form-input
                                                    class="col-span-4"
                                                    type="text"
                                                    aria-label="default input inline 2"
                                                    placeholder="Input inline 2"
                                                />
                                                <x-base.form-input
                                                    class="col-span-4"
                                                    type="text"
                                                    aria-label="default input inline 3"
                                                    placeholder="Input inline 3"
                                                />
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <x-base.form-input
                                                        class="col-span-4"
                                                        type="text"
                                                        aria-label="default input inline 1"
                                                        placeholder="Input inline 1"
                                                    />
                                                    <x-base.form-input
                                                        class="col-span-4"
                                                        type="text"
                                                        aria-label="default input inline 2"
                                                        placeholder="Input inline 2"
                                                    />
                                                    <x-base.form-input
                                                        class="col-span-4"
                                                        type="text"
                                                        aria-label="default input inline 3"
                                                        placeholder="Input inline 3"
                                                    />
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Inline Form" component is useful for creating
                                    compact and space-efficient forms where form fields and
                                    labels appear on the same line. Customize it according
                                    to your project's needs, such as adding validation,
                                    error handling, and styling. This component provides a
                                    clean and concise way to collect user input in an inline
                                    manner, ideal for search bars, filters, and other
                                    compact form elements.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Checkbox & Switch
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    The "Checkbox & Switch" components provide a way to
                                    create interactive checkboxes and switches that users
                                    can toggle on and off. This section covers how to use
                                    these components and provides examples of checkboxes and
                                    switches.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <label>Vertical Checkbox</label>
                                                <x-base.form-check class="mt-2">
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-1"
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-1">
                                                        Chris Evans
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                                <x-base.form-check class="mt-2">
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-2"
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-2">
                                                        Liam Neeson
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                                <x-base.form-check class="mt-2">
                                                    <x-base.form-check.input
                                                        id="checkbox-switch-3"
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <x-base.form-check.label for="checkbox-switch-3">
                                                        Daniel Craig
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div class="mt-3">
                                                <label>Horizontal Checkbox</label>
                                                <div class="flex flex-col mt-2 sm:flex-row">
                                                    <x-base.form-check class="mr-2">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-4"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-4">
                                                            Chris Evans
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-5"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-5">
                                                            Liam Neeson
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-6"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-6">
                                                            Daniel Craig
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <label>Switch</label>
                                                <div class="mt-2">
                                                    <x-base.form-switch>
                                                        <x-base.form-switch.input
                                                            id="checkbox-switch-7"
                                                            type="checkbox"
                                                        />
                                                        <x-base.form-switch.label for="checkbox-switch-7">
                                                            Default switch checkbox input
                                                        </x-base.form-switch.label>
                                                    </x-base.form-switch>
                                                </div>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <label>Vertical Checkbox</label>
                                                    <x-base.form-check class="mt-2">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-1"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-1">
                                                            Chris Evans
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-2"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-2">
                                                            Liam Neeson
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-3"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-3">
                                                            Daniel Craig
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div class="mt-3">
                                                    <label>Horizontal Checkbox</label>
                                                    <div class="flex flex-col mt-2 sm:flex-row">
                                                        <x-base.form-check class="mr-2">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-4"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                            <x-base.form-check.label for="checkbox-switch-4">
                                                                Chris Evans
                                                            </x-base.form-check.label>
                                                        </x-base.form-check>
                                                        <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-5"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                            <x-base.form-check.label for="checkbox-switch-5">
                                                                Liam Neeson
                                                            </x-base.form-check.label>
                                                        </x-base.form-check>
                                                        <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-6"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                            <x-base.form-check.label for="checkbox-switch-6">
                                                                Daniel Craig
                                                            </x-base.form-check.label>
                                                        </x-base.form-check>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <label>Switch</label>
                                                    <div class="mt-2">
                                                        <x-base.form-switch>
                                                            <x-base.form-switch.input
                                                                id="checkbox-switch-7"
                                                                type="checkbox"
                                                            />
                                                            <x-base.form-switch.label for="checkbox-switch-7">
                                                                Default switch checkbox input
                                                            </x-base.form-switch.label>
                                                        </x-base.form-switch>
                                                    </div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Checkbox & Switch" components provide an easy way
                                    to create interactive elements for user input. Customize
                                    them according to your project's needs, and use event
                                    handling to respond to user interactions. These
                                    components are commonly used for settings, preferences,
                                    and forms where users need to make binary choices.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Radio</div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    The "Radio" component is a fundamental input element
                                    that allows users to make a single selection from a list
                                    of options. It is commonly used in forms and
                                    questionnaires where users need to choose one option
                                    among several.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <label>Vertical Radio Button</label>
                                                <x-base.form-check class="mt-2">
                                                    <x-base.form-check.input
                                                        id="radio-switch-1"
                                                        name="vertical_radio_button"
                                                        type="radio"
                                                        value="vertical-radio-chris-evans"
                                                    />
                                                    <x-base.form-check.label for="radio-switch-1">
                                                        Chris Evans
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                                <x-base.form-check class="mt-2">
                                                    <x-base.form-check.input
                                                        id="radio-switch-2"
                                                        name="vertical_radio_button"
                                                        type="radio"
                                                        value="vertical-radio-liam-neeson"
                                                    />
                                                    <x-base.form-check.label for="radio-switch-2">
                                                        Liam Neeson
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                                <x-base.form-check class="mt-2">
                                                    <x-base.form-check.input
                                                        id="radio-switch-3"
                                                        name="vertical_radio_button"
                                                        type="radio"
                                                        value="vertical-radio-daniel-craig"
                                                    />
                                                    <x-base.form-check.label for="radio-switch-3">
                                                        Daniel Craig
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div class="mt-3">
                                                <label>Horizontal Radio Button</label>
                                                <div class="flex flex-col mt-2 sm:flex-row">
                                                    <x-base.form-check class="mr-2">
                                                        <x-base.form-check.input
                                                            id="radio-switch-4"
                                                            name="horizontal_radio_button"
                                                            type="radio"
                                                            value="horizontal-radio-chris-evans"
                                                        />
                                                        <x-base.form-check.label for="radio-switch-4">
                                                            Chris Evans
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="radio-switch-5"
                                                            name="horizontal_radio_button"
                                                            type="radio"
                                                            value="horizontal-radio-liam-neeson"
                                                        />
                                                        <x-base.form-check.label for="radio-switch-5">
                                                            Liam Neeson
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="radio-switch-6"
                                                            name="horizontal_radio_button"
                                                            type="radio"
                                                            value="horizontal-radio-daniel-craig"
                                                        />
                                                        <x-base.form-check.label for="radio-switch-6">
                                                            Daniel Craig
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <label>Vertical Radio Button</label>
                                                    <x-base.form-check class="mt-2">
                                                        <x-base.form-check.input
                                                            id="radio-switch-1"
                                                            name="vertical_radio_button"
                                                            type="radio"
                                                            value="vertical-radio-chris-evans"
                                                        />
                                                        <x-base.form-check.label for="radio-switch-1">
                                                            Chris Evans
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2">
                                                        <x-base.form-check.input
                                                            id="radio-switch-2"
                                                            name="vertical_radio_button"
                                                            type="radio"
                                                            value="vertical-radio-liam-neeson"
                                                        />
                                                        <x-base.form-check.label for="radio-switch-2">
                                                            Liam Neeson
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2">
                                                        <x-base.form-check.input
                                                            id="radio-switch-3"
                                                            name="vertical_radio_button"
                                                            type="radio"
                                                            value="vertical-radio-daniel-craig"
                                                        />
                                                        <x-base.form-check.label for="radio-switch-3">
                                                            Daniel Craig
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div class="mt-3">
                                                    <label>Horizontal Radio Button</label>
                                                    <div class="flex flex-col mt-2 sm:flex-row">
                                                        <x-base.form-check class="mr-2">
                                                            <x-base.form-check.input
                                                                id="radio-switch-4"
                                                                name="horizontal_radio_button"
                                                                type="radio"
                                                                value="horizontal-radio-chris-evans"
                                                            />
                                                            <x-base.form-check.label for="radio-switch-4">
                                                                Chris Evans
                                                            </x-base.form-check.label>
                                                        </x-base.form-check>
                                                        <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                            <x-base.form-check.input
                                                                id="radio-switch-5"
                                                                name="horizontal_radio_button"
                                                                type="radio"
                                                                value="horizontal-radio-liam-neeson"
                                                            />
                                                            <x-base.form-check.label for="radio-switch-5">
                                                                Liam Neeson
                                                            </x-base.form-check.label>
                                                        </x-base.form-check>
                                                        <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                            <x-base.form-check.input
                                                                id="radio-switch-6"
                                                                name="horizontal_radio_button"
                                                                type="radio"
                                                                value="horizontal-radio-daniel-craig"
                                                            />
                                                            <x-base.form-check.label for="radio-switch-6">
                                                                Daniel Craig
                                                            </x-base.form-check.label>
                                                        </x-base.form-check>
                                                    </div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Radio" component is versatile and can be used to
                                    create both vertical and horizontal radio button groups.
                                    These radio buttons are commonly used in forms, surveys,
                                    and any scenario where exclusive choices are required.
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
                                    <div class="-mt-px">FormCheck</div>
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
                                    <div class="-mt-px">FormCheck.Label</div>
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
                                    <div class="-mt-px">FormCheck.Input</div>
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
                                    <div class="-mt-px">FormInput</div>
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
                                                <x-base.table.td>`formInputSize`</x-base.table.td>
                                                <x-base.table.td>`sm`, `lg`</x-base.table.td>
                                                <x-base.table.td>
                                                    Specifies the size or dimensions of the input field
                                                    within a form. Use this prop to control the visual
                                                    appearance of the input, with options such as
                                                    'small', 'medium', or 'large' to suit your design
                                                    and layout needs."
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`rounded`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Whether to apply rounded corners to the textarea
                                                    element
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">FormTextarea</div>
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
                                                <x-base.table.td>`formTextareaSize`</x-base.table.td>
                                                <x-base.table.td>`sm`, `lg`</x-base.table.td>
                                                <x-base.table.td>
                                                    Specifies the size or dimensions of the input field
                                                    within a form. Use this prop to control the visual
                                                    appearance of the input, with options such as
                                                    'small', 'medium', or 'large' to suit your design
                                                    and layout needs
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`rounded`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Whether to apply rounded corners to the textarea
                                                    element
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">FormHelp</div>
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
                                    <div class="-mt-px">FormInline</div>
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
                                    <div class="-mt-px">FormLabel</div>
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
                                    <div class="-mt-px">FormSelect</div>
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
                                                <x-base.table.td>`formSelectSize`</x-base.table.td>
                                                <x-base.table.td>`sm`, `lg`</x-base.table.td>
                                                <x-base.table.td>
                                                    Defines the size or dimensions of the select
                                                    dropdown element within a form. Utilize this prop to
                                                    customize the visual presentation of the select
                                                    input, offering choices like 'small', 'medium', or
                                                    'large' to align with your design and layout
                                                    preferences
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">FormSwitch</div>
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
                                    <div class="-mt-px">FormSwitch.Label</div>
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
                                    <div class="-mt-px">FormSwitch.Input</div>
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
                                    <div class="-mt-px">InputGroup</div>
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
                                    <div class="-mt-px">InputGroup.Text</div>
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
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Input
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
                                    Input Sizing
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
                                    Input Groups
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
                                    Input State
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
                                    Select Options
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
                                    Vertical Form
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
                                    Horizontal Form
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
                                    Inline Form
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
                                    Checkbox & Switch
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
                                    Radio
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
