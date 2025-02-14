@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col mt-4 gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Add Product
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Product Information
                            </div>
                            <div class="mt-5">
                                <x-base.alert
                                    class="flex items-center px-4 mb-2 border-warning/30 bg-warning/5"
                                    variant="outline-warning"
                                >
                                    <div>
                                        <x-base.lucide
                                            class="mr-3 h-4 w-4 stroke-[1.3] 2xl:mr-2"
                                            icon="Lightbulb"
                                        />
                                    </div>
                                    <div class="mr-5 leading-relaxed">
                                        Avoid selling counterfeit products / violating
                                        Intellectual Property Rights, so that your products
                                        are not deleted.
                                        <a
                                            class="ml-1 font-medium underline decoration-warning/50 decoration-dotted underline-offset-[3px]"
                                            href=""
                                        >
                                            Learn More
                                        </a>
                                        <x-base.alert.dismiss-button class="inset-y-0 btn-close">
                                            <x-base.lucide
                                                class="w-4 h-4"
                                                icon="X"
                                            />
                                        </x-base.alert.dismiss-button>
                                    </div>
                                </x-base.alert>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Name</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the unique name of your product. Make it
                                                descriptive and easy to remember for customers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="Product name"
                                        />
                                        <x-base.form-help>Maximum character 0/70</x-base.form-help>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Category</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Select the primary category that best represents your
                                                product. This helps customers find your product more
                                                easily.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-select id="category">
                                            @foreach ($categories as $fakerKey => $faker)
                                                <option value="{{ $fakerKey }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.form-select>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Subcategory</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Choose a more specific subcategory that closely
                                                matches your product. It provides further details
                                                about your item.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.tom-select
                                            class="w-full"
                                            data-placeholder="Etalase"
                                            multiple
                                        >
                                            @foreach ($categories as $fakerKey => $faker)
                                                <option value="{{ $fakerKey }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/80 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/80 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Upload Product
                            </div>
                            <div class="mt-5">
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Photos</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                High-quality images can significantly impact your
                                                product's appeal. Upload clear, well-lit photos that
                                                showcase your item from different angles and
                                                perspectives.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="border border-dashed rounded-md border-slate-300/80">
                                            <div class="grid grid-cols-9 gap-5 px-5 pt-5 sm:grid-cols-10">
                                                @foreach ($products->take(5) as $fakerKey => $faker)
                                                    <div
                                                        class="relative h-24 col-span-3 cursor-pointer image-fit zoom-in md:col-span-2">
                                                        <img
                                                            class="rounded-lg"
                                                            src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        >
                                                        <x-base.tippy
                                                            class="absolute top-0 right-0 w-5 h-5 -mt-2 -mr-2 bg-white rounded-full"
                                                            content="Remove this image?"
                                                        >
                                                            <span
                                                                class="flex items-center justify-center w-full h-full text-white border rounded-full border-danger/50 bg-danger/80">
                                                                <x-base.lucide
                                                                    class="h-4 w-4 stroke-[1.3]"
                                                                    icon="X"
                                                                />
                                                            </span>
                                                        </x-base.tippy>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div
                                                class="relative flex items-center justify-center px-4 pb-4 mt-5 cursor-pointer">
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Image"
                                                />
                                                <span class="mr-1 text-primary">
                                                    Upload a file
                                                </span>
                                                or drag and drop
                                                <x-base.form-input
                                                    class="absolute top-0 left-0 w-full h-full opacity-0"
                                                    id="horizontal-form-1"
                                                    type="file"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Product Details
                            </div>
                            <div class="mt-5">
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Condition</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Accurately select the condition of your product to set
                                                clear expectations for buyers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="flex flex-col sm:flex-row">
                                            <x-base.form-check class="mr-4">
                                                <x-base.form-check.input
                                                    id="condition-new"
                                                    name="horizontal_radio_button"
                                                    type="radio"
                                                    value="horizontal-radio-chris-evans"
                                                />
                                                <x-base.form-check.label for="condition-new">
                                                    New
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.form-check class="mt-2 mr-4 sm:mt-0">
                                                <x-base.form-check.input
                                                    id="condition-second"
                                                    name="horizontal_radio_button"
                                                    type="radio"
                                                    value="horizontal-radio-liam-neeson"
                                                />
                                                <x-base.form-check.label for="condition-second">
                                                    Second
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Description</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Craft a comprehensive description that highlights the
                                                unique features, benefits, and specifications of your
                                                product.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.classic-editor />
                                        <x-base.form-help class="text-right">
                                            Maximum character 0/2000
                                        </x-base.form-help>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Video</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Add a video showcasing your product in action.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.button
                                            class="w-40 border-primary/50"
                                            variant="outline-primary"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="Camera"
                                            />
                                            Add Video URL
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Product Details
                            </div>
                            <div class="mt-5">
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Variant</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your full legal name as it appears on your
                                                official identification.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.button
                                            class="w-40 border-primary/50"
                                            variant="outline-primary"
                                        >
                                            <x-base.lucide
                                                class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="KanbanSquare"
                                            />
                                            Add Variant
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Product Variant (Details)
                            </div>
                            <div class="mt-5">
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Variant 1</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Specify different variations of your product, such as
                                                size, color, or style.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div
                                            class="relative py-10 pl-5 pr-5 border rounded-md border-slate-200/80 bg-slate-50/80 dark:border dark:bg-transparent xl:pr-10">
                                            <a
                                                class="absolute top-0 right-0 mt-4 mr-4 text-slate-500"
                                                href=""
                                            >
                                                <x-base.lucide
                                                    class="w-5 h-5"
                                                    icon="X"
                                                />
                                            </a>
                                            <div>
                                                <x-base.form-inline class="mt-5 first:mt-0">
                                                    <x-base.form-label class="sm:w-20">Name</x-base.form-label>
                                                    <div class="flex items-center flex-1 xl:pr-20">
                                                        <x-base.input-group class="flex-1">
                                                            <x-base.form-input
                                                                type="text"
                                                                placeholder="Size"
                                                            />
                                                            <x-base.input-group.text>6/14</x-base.input-group.text>
                                                        </x-base.input-group>
                                                    </div>
                                                </x-base.form-inline>
                                                <x-base.form-inline class="items-start mt-5 first:mt-0">
                                                    <x-base.form-label class="mt-2 sm:w-20">
                                                        Options
                                                    </x-base.form-label>
                                                    <div class="flex-1">
                                                        <div class="items-center mt-5 first:mt-0 xl:flex">
                                                            <x-base.input-group class="flex-1">
                                                                <x-base.form-input
                                                                    type="text"
                                                                    placeholder="Small"
                                                                />
                                                                <x-base.input-group.text>6/14</x-base.input-group.text>
                                                            </x-base.input-group>
                                                            <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                                                                <a
                                                                    class="xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Move"
                                                                    />
                                                                </a>
                                                                <a
                                                                    class="ml-3 xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Trash2"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="items-center mt-5 first:mt-0 xl:flex">
                                                            <x-base.input-group class="flex-1">
                                                                <x-base.form-input
                                                                    type="text"
                                                                    placeholder="Medium"
                                                                />
                                                                <x-base.input-group.text>6/14</x-base.input-group.text>
                                                            </x-base.input-group>
                                                            <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                                                                <a
                                                                    class="xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Move"
                                                                    />
                                                                </a>
                                                                <a
                                                                    class="ml-3 xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Trash2"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="items-center mt-5 first:mt-0 xl:flex">
                                                            <x-base.input-group class="flex-1">
                                                                <x-base.form-input
                                                                    type="text"
                                                                    placeholder="Large"
                                                                />
                                                                <x-base.input-group.text>6/14</x-base.input-group.text>
                                                            </x-base.input-group>
                                                            <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                                                                <a
                                                                    class="xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Move"
                                                                    />
                                                                </a>
                                                                <a
                                                                    class="ml-3 xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Trash2"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </x-base.form-inline>
                                                <div class="mt-5 first:mt-0 xl:ml-20 xl:pl-5 xl:pr-20">
                                                    <x-base.button
                                                        class="w-full border-dashed"
                                                        variant="outline-primary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3]"
                                                            icon="Plus"
                                                        />
                                                        Add New Option
                                                    </x-base.button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-2 mt-2 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Variant 2</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Specify different variations of your product, such as
                                                size, color, or style.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div
                                            class="relative py-10 pl-5 pr-5 border rounded-md border-slate-200/80 bg-slate-50/80 dark:border dark:bg-transparent xl:pr-10">
                                            <a
                                                class="absolute top-0 right-0 mt-4 mr-4 text-slate-500"
                                                href=""
                                            >
                                                <x-base.lucide
                                                    class="w-5 h-5"
                                                    icon="X"
                                                />
                                            </a>
                                            <div>
                                                <x-base.form-inline class="mt-5 first:mt-0">
                                                    <x-base.form-label class="sm:w-20">Name</x-base.form-label>
                                                    <div class="flex items-center flex-1 xl:pr-20">
                                                        <x-base.input-group class="flex-1">
                                                            <x-base.form-input
                                                                type="text"
                                                                placeholder="Size"
                                                            />
                                                            <x-base.input-group.text>6/14</x-base.input-group.text>
                                                        </x-base.input-group>
                                                    </div>
                                                </x-base.form-inline>
                                                <x-base.form-inline class="items-start mt-5 first:mt-0">
                                                    <x-base.form-label class="mt-2 sm:w-20">
                                                        Options
                                                    </x-base.form-label>
                                                    <div class="flex-1">
                                                        <div class="items-center mt-5 first:mt-0 xl:flex">
                                                            <x-base.input-group class="flex-1">
                                                                <x-base.form-input
                                                                    type="text"
                                                                    placeholder="Small"
                                                                />
                                                                <x-base.input-group.text>6/14</x-base.input-group.text>
                                                            </x-base.input-group>
                                                            <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                                                                <a
                                                                    class="xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Move"
                                                                    />
                                                                </a>
                                                                <a
                                                                    class="ml-3 xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Trash2"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="items-center mt-5 first:mt-0 xl:flex">
                                                            <x-base.input-group class="flex-1">
                                                                <x-base.form-input
                                                                    type="text"
                                                                    placeholder="Medium"
                                                                />
                                                                <x-base.input-group.text>6/14</x-base.input-group.text>
                                                            </x-base.input-group>
                                                            <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                                                                <a
                                                                    class="xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Move"
                                                                    />
                                                                </a>
                                                                <a
                                                                    class="ml-3 xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Trash2"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="items-center mt-5 first:mt-0 xl:flex">
                                                            <x-base.input-group class="flex-1">
                                                                <x-base.form-input
                                                                    type="text"
                                                                    placeholder="Large"
                                                                />
                                                                <x-base.input-group.text>6/14</x-base.input-group.text>
                                                            </x-base.input-group>
                                                            <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                                                                <a
                                                                    class="xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Move"
                                                                    />
                                                                </a>
                                                                <a
                                                                    class="ml-3 xl:ml-5"
                                                                    href=""
                                                                >
                                                                    <x-base.lucide
                                                                        class="w-4 h-4"
                                                                        icon="Trash2"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </x-base.form-inline>
                                                <div class="mt-5 first:mt-0 xl:ml-20 xl:pl-5 xl:pr-20">
                                                    <x-base.button
                                                        class="w-full border-dashed"
                                                        variant="outline-primary"
                                                    >
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3]"
                                                            icon="Plus"
                                                        />
                                                        Add New Option
                                                    </x-base.button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 mt-2 first:mt-0 first:pt-0 xl:ml-60 xl:pl-14">
                                    <x-base.button
                                        class="w-full py-3 border-slate-200/80 bg-slate-50/80"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4 stroke-[1.3]"
                                            icon="Plus"
                                        />
                                        Add New Variant
                                    </x-base.button>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Variant Information</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Use this section to specify the various options,
                                                configurations, or variants available for your
                                                product.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="grid-cols-4 gap-2 sm:grid">
                                            <x-base.input-group>
                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                <x-base.form-input
                                                    type="text"
                                                    placeholder="Price"
                                                />
                                            </x-base.input-group>
                                            <x-base.form-input
                                                class="mt-2 sm:mt-0"
                                                type="text"
                                                placeholder="Stock"
                                            />
                                            <x-base.form-input
                                                class="mt-2 sm:mt-0"
                                                type="text"
                                                placeholder="Variant Code"
                                            />
                                            <x-base.button
                                                class="mt-2 border-primary/50 bg-primary/5 sm:mt-0"
                                                variant="outline-primary"
                                            >
                                                Apply To All
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Variant List</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Use this section to showcase the different product
                                                variants, options, or configurations available to
                                                customers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="overflow-x-auto">
                                            <x-base.table class="border">
                                                <x-base.table.thead>
                                                    <x-base.table.tr>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Size
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            <div class="flex items-center">
                                                                Color
                                                                <x-base.lucide
                                                                    class="w-4 h-4 ml-2"
                                                                    icon="HelpCircle"
                                                                />
                                                            </div>
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Price
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative -mt-0.5 mr-2 h-4 w-4 before:absolute before:h-4 before:w-4 before:rounded-full before:bg-primary/20 before:content-[''] after:absolute after:h-4 after:w-4 after:rounded-full after:border-4 after:border-white/60 after:bg-primary after:content-[''] after:dark:border-darkmode-300 lg:before:animate-ping">
                                                                </div>
                                                                Stock
                                                                <x-base.lucide
                                                                    class="w-4 h-4 ml-2"
                                                                    icon="HelpCircle"
                                                                />
                                                            </div>
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !pl-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Variant Code
                                                        </x-base.table.th>
                                                    </x-base.table.tr>
                                                </x-base.table.thead>
                                                <x-base.table.tbody>
                                                    <x-base.table.tr>
                                                        <x-base.table.td
                                                            class="border-r"
                                                            rowspan="3"
                                                        >
                                                            Small
                                                        </x-base.table.td>
                                                        <x-base.table.td>Black</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td>White</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td>Gray</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td
                                                            class="border-r"
                                                            rowspan="3"
                                                        >
                                                            Medium
                                                        </x-base.table.td>
                                                        <x-base.table.td>Black</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td>White</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td>Gray</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td
                                                            class="border-r"
                                                            rowspan="3"
                                                        >
                                                            Large
                                                        </x-base.table.td>
                                                        <x-base.table.td>Black</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td>White</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td>Gray</x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Stock"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Variant Code"
                                                            />
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                </x-base.table.tbody>
                                            </x-base.table>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Wholesale Price</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Set the discounted price for purchasing products in
                                                larger quantities.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="overflow-x-auto">
                                            <x-base.table class="border">
                                                <x-base.table.thead>
                                                    <x-base.table.tr>
                                                        <x-base.table.th
                                                            class="bg-slate-50 !pr-2 dark:bg-darkmode-800"></x-base.table.th>
                                                        <x-base.table.th
                                                            class="bg-slate-50 dark:bg-darkmode-800"></x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Min.
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Max.
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Unit Price
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="bg-slate-50 !px-2 dark:bg-darkmode-800"></x-base.table.th>
                                                    </x-base.table.tr>
                                                </x-base.table.thead>
                                                <x-base.table.tbody>
                                                    <x-base.table.tr>
                                                        <x-base.table.td class="!pr-2">1.</x-base.table.td>
                                                        <x-base.table.td class="whitespace-nowrap">
                                                            Wholesale Price 1
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Min Qty"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Max Qty"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-4 text-slate-500">
                                                            <a href="">
                                                                <x-base.lucide
                                                                    class="w-4 h-4"
                                                                    icon="Trash2"
                                                                />
                                                            </a>
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td class="!pr-2">2.</x-base.table.td>
                                                        <x-base.table.td class="whitespace-nowrap">
                                                            Wholesale Price 2
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Min Qty"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Max Qty"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-4 text-slate-500">
                                                            <a href="">
                                                                <x-base.lucide
                                                                    class="w-4 h-4"
                                                                    icon="Trash2"
                                                                />
                                                            </a>
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                    <x-base.table.tr>
                                                        <x-base.table.td class="!pr-2">3.</x-base.table.td>
                                                        <x-base.table.td class="whitespace-nowrap">
                                                            Wholesale Price 3
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Min Qty"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.form-input
                                                                class="min-w-[6rem]"
                                                                type="text"
                                                                placeholder="Max Qty"
                                                            />
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!px-2">
                                                            <x-base.input-group>
                                                                <x-base.input-group.text>$</x-base.input-group.text>
                                                                <x-base.form-input
                                                                    class="min-w-[6rem]"
                                                                    type="text"
                                                                    placeholder="Price"
                                                                />
                                                            </x-base.input-group>
                                                        </x-base.table.td>
                                                        <x-base.table.td class="!pl-4 text-slate-500">
                                                            <a href="">
                                                                <x-base.lucide
                                                                    class="w-4 h-4"
                                                                    icon="Trash2"
                                                                />
                                                            </a>
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                </x-base.table.tbody>
                                            </x-base.table>
                                        </div>
                                        <x-base.button
                                            class="w-full mt-4 border-dashed"
                                            variant="outline-primary"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="Plus"
                                            />
                                            Add New Wholesale Price
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Product Management
                            </div>
                            <div class="mt-5">
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Status</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Choose the status that best reflects the availability
                                                of this product for customers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-switch>
                                            <x-base.form-switch.input
                                                id="product-status-active"
                                                type="checkbox"
                                            />
                                            <x-base.form-switch.label for="product-status-active">
                                                Active
                                            </x-base.form-switch.label>
                                        </x-base.form-switch>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Stock</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the total quantity of this product currently in
                                                stock.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input
                                            id="product-stock"
                                            type="text"
                                            placeholder="Input Product Stock"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Stock Keeping Unit</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter a distinct identifier for this product in your
                                                inventory.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input
                                            id="sku"
                                            type="text"
                                            placeholder="Input SKU"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Shipping
                            </div>
                            <div class="mt-5">
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Weight</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the weight of the product in the preferred unit
                                                of measurement (e.g., pounds, kilograms, ounces).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="grid-cols-4 gap-2 sm:grid">
                                            <x-base.form-select>
                                                <option value="Gram (g)">Gram (g)</option>
                                                <option value="Kilogram (kg)">Kilogram (kg)</option>
                                            </x-base.form-select>
                                            <x-base.form-input
                                                class="mt-2 sm:mt-0"
                                                id="product-weight"
                                                type="text"
                                                placeholder="Stock"
                                            />
                                        </div>
                                        <x-base.alert
                                            class="flex items-center px-4 mt-5 mb-2 border-primary/20 bg-primary/5"
                                            variant="outline-primary"
                                        >
                                            <x-base.lucide
                                                class="mr-3 h-[1.15rem] w-[1.15rem]"
                                                icon="AlertTriangle"
                                            />
                                            <div class="mr-5 leading-relaxed">
                                                Pay close attention to the weight of the product
                                                so that there is no difference in data with the
                                                shipping courier.
                                                <a
                                                    class="ml-1 font-medium underline decoration-primary/50 decoration-dotted underline-offset-[3px]"
                                                    href=""
                                                >
                                                    Learn More
                                                </a>
                                            </div>
                                            <x-base.alert.dismiss-button class="btn-close">
                                                <x-base.lucide
                                                    class="w-4 h-4"
                                                    icon="X"
                                                />
                                            </x-base.alert.dismiss-button>
                                        </x-base.alert>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Product Size</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the dimensions or size of the product, including
                                                length, width, and height, in the preferred unit
                                                (e.g., inches, centimeters).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="grid-cols-3 gap-2 sm:grid">
                                            <x-base.input-group>
                                                <x-base.form-input
                                                    type="text"
                                                    placeholder="Width"
                                                />
                                                <x-base.input-group.text>cm</x-base.input-group.text>
                                            </x-base.input-group>
                                            <x-base.input-group class="mt-2 sm:mt-0">
                                                <x-base.form-input
                                                    type="text"
                                                    placeholder="Height"
                                                />
                                                <x-base.input-group.text>cm</x-base.input-group.text>
                                            </x-base.input-group>
                                            <x-base.input-group class="mt-2 sm:mt-0">
                                                <x-base.form-input
                                                    type="text"
                                                    placeholder="Length"
                                                />
                                                <x-base.input-group.text>cm</x-base.input-group.text>
                                            </x-base.input-group>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Shipping Insurance</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Indicate whether shipping insurance is offered for
                                                this product to protect against loss or damage during
                                                transit.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="flex flex-col gap-y-2 sm:flex-row">
                                            <x-base.form-check class="mr-4">
                                                <x-base.form-check.input
                                                    id="shipping-insurance-required"
                                                    name="horizontal_radio_button"
                                                    type="radio"
                                                    value="horizontal-radio-chris-evans"
                                                />
                                                <x-base.form-check.label>
                                                    <span class="font-medium">Required</span>
                                                    <span class="w-56 mt-1 text-xs leading-relaxed text-slate-500">
                                                        You
                                                        <span class="font-medium text-slate-600 dark:text-slate-300">
                                                            require
                                                        </span>
                                                        the buyer to activate shipping insurance
                                                    </span>
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.form-check class="mt-2 mr-4 sm:mt-0">
                                                <x-base.form-check.input
                                                    id="shipping-insurance-optional"
                                                    name="horizontal_radio_button"
                                                    type="radio"
                                                    value="horizontal-radio-liam-neeson"
                                                />
                                                <x-base.form-check.label>
                                                    <span class="block font-medium">Optional</span>
                                                    <span class="block w-56 mt-1 text-xs leading-relaxed text-slate-500">
                                                        You
                                                        <span class="font-medium text-slate-600 dark:text-slate-300">
                                                            give the buyer the option
                                                        </span>
                                                        to activate shipping insurance
                                                    </span>
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Shipping Service</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the preferred shipping service or method for
                                                delivering this product to customers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="flex flex-col sm:flex-row">
                                            <x-base.form-check class="mr-4">
                                                <x-base.form-check.input
                                                    id="shipping-service-standard"
                                                    name="horizontal_radio_button"
                                                    type="radio"
                                                    value="horizontal-radio-chris-evans"
                                                />
                                                <x-base.form-check.label for="shipping-service-standard">
                                                    Standard
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.form-check class="mt-2 mr-4 sm:mt-0">
                                                <x-base.form-check.input
                                                    id="shipping-service-custom"
                                                    name="horizontal_radio_button"
                                                    type="radio"
                                                    value="horizontal-radio-liam-neeson"
                                                />
                                                <x-base.form-check.label for="shipping-service-custom">
                                                    Custom
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                        </div>
                                        <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                            The delivery service for this product will be the same
                                            as in the
                                            <a
                                                class="ml-1 font-medium text-primary"
                                                href=""
                                            >
                                                Shipping Settings.
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Pre Order</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enable pre-order for this product if it's not yet
                                                available, allowing customers to reserve it in
                                                advance.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-switch>
                                            <x-base.form-switch.input
                                                id="preorder-active"
                                                type="checkbox"
                                            />
                                            <x-base.form-switch.label
                                                class="text-xs leading-relaxed text-slate-500"
                                                for="preorder-active"
                                            >
                                                Activate PreOrder if you need a longer shipping
                                                process.
                                                <a
                                                    class="ml-1 font-medium text-primary"
                                                    href=""
                                                >
                                                    Learn more.
                                                </a>
                                            </x-base.form-switch.label>
                                        </x-base.form-switch>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end gap-3 mt-1 md:flex-row">
                        <x-base.button
                            class="w-full rounded-[0.5rem] border-slate-300/80 bg-white/80 py-2.5 md:w-56"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="PenLine"
                            />
                            Cancel
                        </x-base.button>
                        <x-base.button
                            class="w-full rounded-[0.5rem] border-slate-300/80 bg-white/80 py-2.5 md:w-56"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="PenLine"
                            />
                            Save & Add New
                        </x-base.button>
                        <x-base.button
                            class="w-full rounded-[0.5rem] py-2.5 md:w-56"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                icon="PenLine"
                            />
                            Save
                        </x-base.button>
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
                                    Upload Product
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
                                    Product Information
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
                                    Product Detail
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
                                    Product Variant
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
                                    Product Variant (Details)
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
                                    Product Management
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
                                    Weight & Shipping
                                </a>
                            </li>
                        </ul>
                        <div
                            class="relative mt-7 rounded-[0.6rem] border border-warning/[0.15] bg-warning/[0.07] p-5 dark:border-0 dark:bg-darkmode-600">
                            <x-base.lucide
                                class="absolute top-0 right-0 w-12 h-12 mt-5 mr-3 text-warning/80"
                                icon="Lightbulb"
                            />
                            <h2 class="text-lg font-medium">Tips</h2>
                            <div class="mt-4 font-medium">Price</div>
                            <div class="mt-2 text-xs leading-relaxed text-slate-600/90 dark:text-slate-500">
                                <div>
                                    The image format is .jpg .jpeg .png and a minimum size of
                                    300 x 300 pixels (For optimal images use a minimum size of
                                    700 x 700 pixels).
                                </div>
                                <div class="mt-2">
                                    Select product photos or drag and drop up to 5 photos at
                                    once here. Include min. 3 attractive photos to make the
                                    product more attractive to buyers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
