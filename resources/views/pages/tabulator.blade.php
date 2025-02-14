@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Tabulator
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="PenLine"
                        />
                        Add New User
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-8">
                <div class="box box--stacked flex flex-col">
                    <div class="flex flex-col gap-y-2 p-5 xl:flex-row xl:items-center">
                        <form
                            class="flex flex-col gap-x-5 gap-y-2 rounded-[0.6rem] border border-dashed border-slate-300/80 p-4 sm:p-5 xl:flex-row xl:border-0 xl:p-0"
                            id="tabulator-html-filter-form"
                        >
                            <x-base.form-inline class="flex-col items-start gap-y-2 xl:flex-row xl:items-center">
                                <x-base.form-label class="mr-3 whitespace-nowrap">
                                    Search by
                                </x-base.form-label>
                                <x-base.form-select
                                    class=""
                                    id="tabulator-html-filter-field"
                                >
                                    <option value="name">Name</option>
                                    <option value="category">Category</option>
                                    <option value="remaining_stock">Remaining Stock</option>
                                </x-base.form-select>
                            </x-base.form-inline>
                            <x-base.form-inline class="flex-col items-start gap-y-2 xl:flex-row xl:items-center">
                                <x-base.form-label class="mr-3 whitespace-nowrap">Type</x-base.form-label>
                                <x-base.form-select
                                    class=""
                                    id="tabulator-html-filter-type"
                                >
                                    <option value="like">like</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                    <option value="<=">&lt;=</option>
                                    <option value=">">&gt;</option>
                                    <option value=">=">&gt;=</option>
                                    <option value="!=">!=</option>
                                </x-base.form-select>
                            </x-base.form-inline>
                            <x-base.form-inline class="flex-col items-start gap-y-2 xl:flex-row xl:items-center">
                                <x-base.form-label class="mr-3 whitespace-nowrap">
                                    Keywords
                                </x-base.form-label>
                                <x-base.form-input
                                    class=""
                                    id="tabulator-html-filter-value"
                                    type="text"
                                    placeholder="Search..."
                                />
                            </x-base.form-inline>
                            <div class="mt-2 flex flex-col gap-2 sm:flex-row xl:mt-0">
                                <x-base.button
                                    class="w-full border-primary/20 bg-primary/5 sm:w-auto"
                                    id="tabulator-html-filter-go"
                                    type="button"
                                    variant="outline-primary"
                                >
                                    Search
                                </x-base.button>
                                <x-base.button
                                    class="w-full bg-slate-50/50 sm:w-auto"
                                    id="tabulator-html-filter-reset"
                                    type="button"
                                    variant="outline-secondary"
                                >
                                    Reset
                                </x-base.button>
                            </div>
                        </form>
                        <div class="mt-3 flex flex-col gap-x-3 gap-y-2 sm:flex-row xl:ml-auto xl:mt-0">
                            <x-base.button
                                id="tabulator-print"
                                variant="outline-secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Printer"
                                />
                                Print
                            </x-base.button>
                            <x-base.menu class="sm:ml-auto xl:ml-0">
                                <x-base.menu.button
                                    class="w-full sm:w-auto"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="FileCheck2"
                                    />
                                    Export
                                    <x-base.lucide
                                        class="ml-2 h-4 w-4 stroke-[1.3]"
                                        icon="ChevronDown"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item id="tabulator-export-csv">
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileCheck2"
                                        />
                                        Export CSV
                                    </x-base.menu.item>
                                    <x-base.menu.item id="tabulator-export-json">
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileCheck2"
                                        />
                                        Export JSON
                                    </x-base.menu.item>
                                    <x-base.menu.item id="tabulator-export-xlsx">
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileCheck2"
                                        />
                                        Export XLSX
                                    </x-base.menu.item>
                                    <x-base.menu.item id="tabulator-export-html">
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileCheck2"
                                        />
                                        Export HTML
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                    <div class="pb-5">
                        <div class="scrollbar-hidden overflow-x-auto">
                            <div id="tabulator"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/vendors/tabulator.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tabulator.js')
    @vite('resources/js/vendors/lucide.js')
    @vite('resources/js/vendors/lodash.js')
    @vite('resources/js/vendors/xlsx.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/pages/tabulator.js')
@endPushOnce
