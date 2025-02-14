@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Loading Icon
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Discover the simplicity and effectiveness of our Loading Icon
                    component
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Available Icons
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
                                    Loading icons are used to indicate that a process is in
                                    progress or that the application is fetching data. They
                                    provide visual feedback to users, letting them know that
                                    an action is being executed. This section covers how to
                                    use loading icons in your web application and provides
                                    examples of different loading icon styles.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="grid grid-cols-12 gap-y-6 py-3 sm:gap-7">
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="audio"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        audio
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="ball-triangle"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        ball-triangle
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="bars"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        bars
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="circles"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        circles
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="grid"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        grid
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="hearts"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        hearts
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="oval"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        oval
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="puff"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        puff
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="rings"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        rings
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="spinning-circles"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        spinning-circles
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="tail-spin"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        tail-spin
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                    <x-base.loading-icon
                                                        class="h-8 w-8"
                                                        color="#64748b"
                                                        icon="three-dots"
                                                    />
                                                    <div class="mt-2 text-center text-xs">
                                                        three-dots
                                                    </div>
                                                </div>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="grid grid-cols-12 gap-y-6 py-3 sm:gap-7">
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="audio"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            audio
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="ball-triangle"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            ball-triangle
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="bars"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            bars
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="circles"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            circles
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="grid"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            grid
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="hearts"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            hearts
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="oval"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            oval
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="puff"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            puff
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="rings"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            rings
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="spinning-circles"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            spinning-circles
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="tail-spin"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            tail-spin
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
                                                        <x-base.loading-icon
                                                            class="h-8 w-8"
                                                            icon="three-dots"
                                                        />
                                                        <div class="mt-2 text-center text-xs">
                                                            three-dots
                                                        </div>
                                                    </div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Loading icons are essential for providing feedback to
                                    users during asynchronous operations. By using the
                                    `LoadingIcon` component and customizing its appearance,
                                    you can create a consistent and visually appealing
                                    loading experience in your web application. Be sure to
                                    choose an appropriate loading icon style that matches
                                    your application's design and provides clear feedback to
                                    users.
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
                                    <div class="-mt-px">Tab</div>
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
                                                <x-base.table.td>`icon`</x-base.table.td>
                                                <x-base.table.td>
                                                    `audio`, `ball-triangle`, `bars`, `circles` ,
                                                    `grid`, `hearts`, `oval`, `puff`, `rings` ,
                                                    `spinning-circles`, `tail-spin`, `three-dots`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    Specifies the name of the loading icon to render
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`color`</x-base.table.td>
                                                <x-base.table.td>`string`</x-base.table.td>
                                                <x-base.table.td>Specifies the color of the icon</x-base.table.td>
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
                                    Available Icons
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
