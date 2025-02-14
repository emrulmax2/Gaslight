@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Regular Table
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Explore table component variations with simplified styling for
                    dynamic tables!
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Basic Table
                                </div>
                                <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                                    <x-base.form-switch.label
                                        class="ml-0 sm:ml-2"
                                        for="show-example-12"
                                    >
                                        Show example code
                                    </x-base.form-switch.label>
                                    <x-base.form-switch.input
                                        class="ml-3 mr-0"
                                        id="show-example-12"
                                        type="checkbox"
                                    />
                                </x-base.form-switch>
                            </div>
                            <div>
                                <p class="leading-relaxed">
                                    The "Basic Table" component provides a straightforward
                                    way to create structured tables in your web
                                    applications. This table style is clean and minimal,
                                    making it suitable for a wide range of use cases.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table>
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                                <x-base.table
                                                    class="mt-5"
                                                    dark
                                                >
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table>
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                    <x-base.table
                                                        class="mt-5"
                                                        dark
                                                    >
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The example above demonstrates how to create a basic
                                    table with columns for "First Name," "Last Name," and
                                    "Username." The table is easy to read and can be
                                    customized further to suit your application's needs. Use
                                    the "Basic Table" component when you want a simple,
                                    clean table structure without additional styling or
                                    complexity.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Bordered Table
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
                                    The "Bordered Table" component is a variation of the
                                    basic table, with the added feature of borders around
                                    the table and its cells. This styling choice enhances
                                    the visual distinction between rows and columns, making
                                    the table content more defined and organized.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table bordered>
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table bordered>
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, a "Bordered Table" is created with
                                    borders around the table and its cells. This added
                                    visual distinction can be particularly useful when you
                                    want to emphasize the structure of your table. Use the
                                    "Bordered Table" component when you need a table with
                                    well-defined borders to enhance the visual separation
                                    between rows and columns.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Hoverable Table
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
                                    The "Hoverable Table" component is designed to enhance
                                    the user experience by adding a hover effect to the
                                    table rows. When users hover their mouse over a row, it
                                    becomes highlighted, providing a visual cue and
                                    improving interactivity.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table
                                                    bordered
                                                    hover
                                                >
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table
                                                        bordered
                                                        hover
                                                    >
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, a "Hoverable Table" is created by
                                    adding the hover prop to the Table component. As users
                                    hover over rows, they visually respond by highlighting,
                                    making it easier to track their interactions. Use the
                                    "Hoverable Table" component when you want to improve
                                    user engagement and provide a more interactive
                                    experience in your table-based content.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Table Row States
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
                                    The "Table Row States" feature allows you to add visual
                                    indicators to table rows, enhancing the presentation and
                                    conveying additional information to users. You can apply
                                    different styles to rows to represent various states or
                                    categories, making your tables more informative and
                                    engaging.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table>
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr class="bg-primary text-white">
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr class="bg-danger text-white">
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr class="bg-warning">
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table>
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr class="bg-primary text-white">
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr class="bg-danger text-white">
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr class="bg-warning">
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, we've applied different row states to
                                    highlight specific rows:
                                </p>
                                <ul class="mb-4 ml-7 mt-2 list-decimal leading-relaxed">
                                    <li class="mb-0.5">
                                        The first row is marked with a primary state,
                                        typically used for positive or highlighted content.
                                    </li>
                                    <li class="mb-0.5">
                                        The second row is marked with a danger state, often
                                        used for indicating a critical or negative condition.
                                    </li>
                                    <li class="mb-0.5">
                                        The third row is marked with a warning state, suitable
                                        for alerting users to a cautionary situation.
                                    </li>
                                </ul>
                                <p class="leading-relaxed">
                                    By using "Table Row States," you can visually
                                    differentiate rows based on their significance or
                                    category, making it easier for users to understand the
                                    content within the table.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Table Head Options
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
                                    The "Table Head Options" feature allows you to customize
                                    the appearance of the table header to better match your
                                    application's design and styling. You can choose between
                                    two different variants: "dark" and "light," each
                                    offering a distinct visual style for the table header.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table>
                                                    <x-base.table.thead variant="dark">
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                                <x-base.table class="mt-5">
                                                    <x-base.table.thead variant="light">
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table>
                                                        <x-base.table.thead variant="dark">
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                    <x-base.table class="mt-5">
                                                        <x-base.table.thead variant="light">
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, we showcase two different table headers
                                    using the "dark" and "light" variants:
                                </p>
                                <ul class="mb-4 ml-7 mt-2 list-decimal leading-relaxed">
                                    <li class="mb-0.5">
                                        The first table header is styled with the "dark"
                                        variant, which provides a dark background color and
                                        white text, creating a visually distinct header.
                                    </li>
                                    <li class="mb-0.5">
                                        The second table header utilizes the "light" variant,
                                        offering a light background with dark text for a more
                                        subtle appearance.
                                    </li>
                                </ul>
                                <p class="leading-relaxed">
                                    By using "Table Head Options," you can align your table
                                    headers with your application's design scheme, ensuring
                                    a cohesive and aesthetically pleasing user interface.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Responsive Table
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
                                    The "Responsive Table" feature ensures that your table
                                    content adapts gracefully to different screen sizes,
                                    offering an optimal viewing experience on both large
                                    desktop screens and smaller mobile devices. When you
                                    enable the "Responsive Table" component, it allows users
                                    to scroll horizontally to view the entire table,
                                    ensuring that no data is cut off on smaller screens.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table>
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Email
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Address
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                1
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                Angelina
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                Jolie
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                @angelinajolie
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                angelinajolie@gmail.com
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                260 W. Storm Street New York, NY 10025.
                                                            </x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                2
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                Brad
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                Pitt
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                @bradpitt
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                bradpitt@gmail.com
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                47 Division St. Buffalo, NY 14241.
                                                            </x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                3
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                Charlie
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                Hunnam
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                @charliehunnam
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                charliehunnam@gmail.com
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">
                                                                8023 Amerige Street Harriman, NY 10926.
                                                            </x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table>
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Email
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Address
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td
                                                                    class="whitespace-nowrap">1</x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    Angelina
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    Jolie
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    @angelinajolie
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    angelinajolie@gmail.com
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    260 W. Storm Street New York, NY 10025.
                                                                </x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td
                                                                    class="whitespace-nowrap">2</x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    Brad
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    Pitt
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    @bradpitt
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    bradpitt@gmail.com
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    47 Division St. Buffalo, NY 14241.
                                                                </x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td
                                                                    class="whitespace-nowrap">3</x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    Charlie
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    Hunnam
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    @charliehunnam
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    charliehunnam@gmail.com
                                                                </x-base.table.td>
                                                                <x-base.table.td class="whitespace-nowrap">
                                                                    8023 Amerige Street Harriman, NY 10926.
                                                                </x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, a "Responsive Table" is created by
                                    wrapping it within a container with horizontal overflow.
                                    This allows users to scroll horizontally to view the
                                    complete table, ensuring that all columns and data
                                    remain accessible on smaller screens. Use the
                                    "Responsive Table" component when you want your table to
                                    maintain readability and usability across various
                                    devices, regardless of screen size.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Small Table
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
                                    The "Small Table" component allows you to create a
                                    compact and space-efficient table, ideal for situations
                                    where you need to display tabular data in a confined
                                    space or emphasize a minimalistic design. By adding the
                                    sm (small) prop to the table, you can reduce the overall
                                    size of the table, making it more suitable for
                                    displaying information in a concise manner.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table sm>
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table sm>
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, a "Small Table" is created by applying
                                    the sm prop to the table component. This reduces the
                                    table's overall size, making it more compact and
                                    suitable for situations where space is limited. Use the
                                    "Small Table" component when you need to display tabular
                                    data in a constrained space or when you want to maintain
                                    a clean and minimalist design.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Striped Rows Table
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
                                    The "Striped Rows Table" feature enhances the
                                    readability and visual appeal of your tables by applying
                                    alternating background colors to rows. This creates a
                                    clear distinction between even and odd rows, making it
                                    easier for users to track and interpret tabular data.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="overflow-x-auto">
                                                <x-base.table striped>
                                                    <x-base.table.thead>
                                                        <x-base.table.tr>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                #
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                First Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Last Name
                                                            </x-base.table.th>
                                                            <x-base.table.th class="whitespace-nowrap">
                                                                Username
                                                            </x-base.table.th>
                                                        </x-base.table.tr>
                                                    </x-base.table.thead>
                                                    <x-base.table.tbody>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>1</x-base.table.td>
                                                            <x-base.table.td>Angelina</x-base.table.td>
                                                            <x-base.table.td>Jolie</x-base.table.td>
                                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>2</x-base.table.td>
                                                            <x-base.table.td>Brad</x-base.table.td>
                                                            <x-base.table.td>Pitt</x-base.table.td>
                                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                                        </x-base.table.tr>
                                                        <x-base.table.tr>
                                                            <x-base.table.td>3</x-base.table.td>
                                                            <x-base.table.td>Charlie</x-base.table.td>
                                                            <x-base.table.td>Hunnam</x-base.table.td>
                                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                                        </x-base.table.tr>
                                                    </x-base.table.tbody>
                                                </x-base.table>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="overflow-x-auto">
                                                    <x-base.table striped>
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.th
                                                                    class="whitespace-nowrap">#</x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    First Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Last Name
                                                                </x-base.table.th>
                                                                <x-base.table.th class="whitespace-nowrap">
                                                                    Username
                                                                </x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>1</x-base.table.td>
                                                                <x-base.table.td>Angelina</x-base.table.td>
                                                                <x-base.table.td>Jolie</x-base.table.td>
                                                                <x-base.table.td>@angelinajolie</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>2</x-base.table.td>
                                                                <x-base.table.td>Brad</x-base.table.td>
                                                                <x-base.table.td>Pitt</x-base.table.td>
                                                                <x-base.table.td>@bradpitt</x-base.table.td>
                                                            </x-base.table.tr>
                                                            <x-base.table.tr>
                                                                <x-base.table.td>3</x-base.table.td>
                                                                <x-base.table.td>Charlie</x-base.table.td>
                                                                <x-base.table.td>Hunnam</x-base.table.td>
                                                                <x-base.table.td>@charliehunnam</x-base.table.td>
                                                            </x-base.table.tr>
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    In this example, a "Striped Rows Table" is created by
                                    adding the striped prop to the table component.
                                    Even-numbered rows are styled with a background color,
                                    while odd-numbered rows remain with the default
                                    background. This alternating pattern improves the visual
                                    separation of rows and enhances the overall readability
                                    of the table. Use the "Striped Rows Table" component
                                    when you want to present tabular data in a visually
                                    organized and easy-to-read format.
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
                                    <div class="-mt-px">Table</div>
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
                                                <x-base.table.td>`dark`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Enables dark mode styling for the table.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`bordered`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>Adds borders to the table cells.</x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`hover`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Enables hover effects on table rows.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`striped`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Alternates row background colors for improved
                                                    readability.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`sm`</x-base.table.td>
                                                <x-base.table.td>`boolean`</x-base.table.td>
                                                <x-base.table.td>
                                                    Reduces the size of the table for a more compact
                                                    display.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Table.Thead</div>
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
                                                <x-base.table.td>`variant`</x-base.table.td>
                                                <x-base.table.td>`default`, `light`, `dark`</x-base.table.td>
                                                <x-base.table.td>
                                                    Sets the variant style for the table head.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                            <div
                                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                <div class="absolute left-0 -mt-2.5 ml-4 bg-white px-3 font-medium text-slate-500">
                                    <div class="-mt-px">Tab.Tbody</div>
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
                                    <div class="-mt-px">Table.Tr</div>
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
                                    <div class="-mt-px">Table.Th</div>
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
                                    <div class="-mt-px">Table.Td</div>
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
                                    Basic Table
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
                                    Bordered Table
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
                                    Hoverable Table
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
                                    Table Row States
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
                                    Table Head Options
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
                                    Responsive Table
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
                                    Small Table
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
                                    Striped Rows
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
