@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Dropzone
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the power of our Dropzone component for easy and flexible
                    file uploads in your web applications.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Single File Upload
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
                                    The "Dropzone" component provides an easy way to
                                    implement file upload functionality in your web
                                    application. This example demonstrates how to create a
                                    "Dropzone" for single file uploads, with options for
                                    setting file upload constraints and additional headers.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.dropzone
                                                class="dropzone"
                                                data-single="true"
                                                action="/file-upload"
                                            >
                                                <div class="text-lg font-medium">
                                                    Drop files here or click to upload.
                                                </div>
                                                <div class="text-gray-600">
                                                    This is just a demo dropzone. Selected files are
                                                    <span class="font-medium">not</span> actually
                                                    uploaded.
                                                </div>
                                            </x-base.dropzone>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.dropzone
                                                    class="dropzone"
                                                    data-single="true"
                                                    action="/file-upload"
                                                >
                                                    <div class="text-lg font-medium">
                                                        Drop files here or click to upload.
                                                    </div>
                                                    <div class="text-gray-600">
                                                        This is just a demo dropzone. Selected files are
                                                        <span class="font-medium">not</span> actually
                                                        uploaded.
                                                    </div>
                                                </x-base.dropzone>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Dropzone" component simplifies the implementation
                                    of single file uploads in your web application. You can
                                    configure various options such as the upload URL,
                                    maximum file size, and headers to meet your specific
                                    needs. In this example, a "Dropzone" for single file
                                    uploads is created, with an informative user interface.
                                    However, it's important to note that the selected files
                                    are not actually uploaded to a server in this demo.
                                    Customize the "Dropzone" component as required to enable
                                    real file uploads and enhance the file handling
                                    capabilities of your web application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Multiple File Upload
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
                                    The "Dropzone" component provides an easy way to
                                    implement file upload functionality in your web
                                    application. This example demonstrates how to create a
                                    "Dropzone" for multiple file uploads, with options for
                                    setting file upload constraints and additional headers.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.dropzone
                                                class="dropzone"
                                                data-single="true"
                                                action="/file-upload"
                                            >
                                                <div class="text-lg font-medium">
                                                    Drop files here or click to upload.
                                                </div>
                                                <div class="text-gray-600">
                                                    This is just a demo dropzone. Selected files are
                                                    <span class="font-medium">not</span> actually
                                                    uploaded.
                                                </div>
                                            </x-base.dropzone>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.dropzone
                                                    class="dropzone"
                                                    data-single="true"
                                                    action="/file-upload"
                                                >
                                                    <div class="text-lg font-medium">
                                                        Drop files here or click to upload.
                                                    </div>
                                                    <div class="text-gray-600">
                                                        This is just a demo dropzone. Selected files are
                                                        <span class="font-medium">not</span> actually
                                                        uploaded.
                                                    </div>
                                                </x-base.dropzone>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Dropzone" component simplifies the implementation
                                    of multiple file uploads in your web application. You
                                    can configure various options such as the upload URL,
                                    maximum file size, and headers to meet your specific
                                    needs. In this example, a "Dropzone" for multiple file
                                    uploads is created, with an informative user interface.
                                    However, it's important to note that the selected files
                                    are not actually uploaded to a server in this demo.
                                    Customize the "Dropzone" component as required to enable
                                    real file uploads and enhance the file handling
                                    capabilities of your web application.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>

                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    File Type Validation
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
                                    The "Dropzone" component allows you to implement file
                                    upload functionality in your web application with the
                                    ability to validate file types before uploading. This
                                    example demonstrates how to create a "Dropzone" with
                                    file type validation using accepted file formats.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <x-base.dropzone
                                                class="dropzone"
                                                data-single="true"
                                                action="/file-upload"
                                            >
                                                <div class="text-lg font-medium">
                                                    Drop files here or click to upload.
                                                </div>
                                                <div class="text-gray-600">
                                                    This is just a demo dropzone. Selected files are
                                                    <span class="font-medium">not</span> actually
                                                    uploaded.
                                                </div>
                                            </x-base.dropzone>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <x-base.dropzone
                                                    class="dropzone"
                                                    data-single="true"
                                                    action="/file-upload"
                                                >
                                                    <div class="text-lg font-medium">
                                                        Drop files here or click to upload.
                                                    </div>
                                                    <div class="text-gray-600">
                                                        This is just a demo dropzone. Selected files are
                                                        <span class="font-medium">not</span> actually
                                                        uploaded.
                                                    </div>
                                                </x-base.dropzone>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The "Dropzone" component with file type validation
                                    enhances your web application's file upload
                                    functionality by allowing you to specify accepted file
                                    formats. In this example, a "Dropzone" is created with
                                    validation rules for image file formats (JPEG, PNG, and
                                    JPG). Users will be restricted to uploading only the
                                    specified file types. Customize the "Dropzone" component
                                    and file format validation as needed to ensure secure
                                    and controlled file uploads in your application.
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
                                    <div class="-mt-px">Dropzone</div>
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
                                                <x-base.table.td>`DropzoneOptions`</x-base.table.td>
                                                <x-base.table.td>Dropzone configuration options.</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: DropzoneElement) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A function that receives a reference to the Dropzone
                                                    element.
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
                                    Single File Upload
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
                                    Multiple Fiel Upload
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
                                    File Type Validation
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
