@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Slider
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Explore the world of interactive sliders with our Slider component.
                    Engage users, gather input, and enhance user experiences
                    effortlessly.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Single Item
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
                                    The "Tiny Slider" component is a lightweight and
                                    responsive slider/carousel library for displaying images
                                    or content in a slideshow format. This section focuses
                                    on using Tiny Slider to create a simple single-item
                                    slider, which is useful for showcasing one piece of
                                    content at a time, such as a featured image or a
                                    product.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="mx-6">
                                                <x-base.tiny-slider
                                                    id="single-item-slider"
                                                    config="single-item"
                                                >
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                1
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                2
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                3
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                4
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                5
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                6
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </x-base.tiny-slider>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="mx-6">
                                                    <x-base.tiny-slider
                                                        id="single-item-slider"
                                                        config="single-item"
                                                    >
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    1
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    2
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    3
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    4
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    5
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    6
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </x-base.tiny-slider>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The single-item slider created using Tiny Slider is an
                                    excellent choice when you need to display content one
                                    item at a time in a visually appealing and responsive
                                    manner. You can easily integrate this slider into your
                                    web application to showcase featured images, products,
                                    or any other content that benefits from a carousel-style
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
                                    Multiple Item
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
                                    The "Tiny Slider" component allows you to create
                                    responsive and feature-rich sliders/carousels to display
                                    multiple items simultaneously. This section focuses on
                                    using Tiny Slider to create a multiple-item slider,
                                    which is ideal for showcasing a collection of images,
                                    products, or content in a compact and visually appealing
                                    format.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="mx-6">
                                                <x-base.tiny-slider
                                                    id="multiple-item-slider"
                                                    config="multiple-items"
                                                >
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                1
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                2
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                3
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                4
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                5
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                6
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                7
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                8
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                9
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </x-base.tiny-slider>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="mx-6">
                                                    <x-base.tiny-slider
                                                        id="multiple-item-slider"
                                                        config="multiple-items"
                                                    >
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    1
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    2
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    3
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    4
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    5
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    6
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    7
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    8
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    9
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </x-base.tiny-slider>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The multiple-item slider created using Tiny Slider is a
                                    versatile component for showcasing collections of
                                    content, images, or products in a visually appealing and
                                    responsive manner. By following the steps outlined above
                                    and customizing the slider settings to meet your
                                    specific needs, you can enhance your website or
                                    application with an interactive and user-friendly
                                    carousel.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Responsive Display
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
                                    The "Tiny Slider" component provides an easy way to
                                    create responsive sliders and carousels that adapt to
                                    various screen sizes. This section focuses on
                                    configuring Tiny Slider for responsive display, ensuring
                                    that your slider looks and functions seamlessly on both
                                    desktop and mobile devices.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="mx-6 pb-8">
                                                <x-base.tiny-slider
                                                    id="responsive-slider"
                                                    config="responsive"
                                                >
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                1
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                2
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                3
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                4
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                5
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                6
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                7
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                8
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </x-base.tiny-slider>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="mx-6 pb-8">
                                                    <x-base.tiny-slider
                                                        id="responsive-slider"
                                                        config="responsive"
                                                    >
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    1
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    2
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    3
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    4
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    5
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    6
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    7
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    8
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </x-base.tiny-slider>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    By configuring Tiny Slider with responsive settings, you
                                    ensure that your slider adapts gracefully to different
                                    devices and screen sizes. This flexibility enhances the
                                    user experience and ensures that your content looks
                                    stunning on both desktop and mobile platforms.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Center Mode
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
                                    Center mode is a popular slider configuration that
                                    places the active slide in the center of the slider
                                    container, with partially visible slides on each side.
                                    This creates an engaging and visually appealing carousel
                                    effect. This section demonstrates how to configure Tiny
                                    Slider to achieve center mode.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="mx-6">
                                                <x-base.tiny-slider
                                                    id="center-mode-slider"
                                                    config="center-mode"
                                                >
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                1
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                2
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                3
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                4
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                5
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="h-32 px-2">
                                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                            <h3
                                                                class="flex h-full items-center justify-center text-2xl font-medium">
                                                                6
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </x-base.tiny-slider>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="mx-6">
                                                    <x-base.tiny-slider
                                                        id="center-mode-slider"
                                                        config="center-mode"
                                                    >
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    1
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    2
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    3
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    4
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    5
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="h-32 px-2">
                                                            <div
                                                                class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                                                <h3
                                                                    class="flex h-full items-center justify-center text-2xl font-medium">
                                                                    6
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </x-base.tiny-slider>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Center mode is a popular slider configuration that
                                    places the active slide in the center of the slider
                                    container, with partially visible slides on each side.
                                    This creates an engaging and visually appealing carousel
                                    effect. This section demonstrates how to configure Tiny
                                    Slider to achieve center mode.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Fade Animation
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
                                    Fade animation is a sleek and elegant way to transition
                                    between slides in a slider. Tiny Slider provides a
                                    simple configuration to achieve a fade effect when
                                    moving from one slide to another. This section
                                    demonstrates how to set up Tiny Slider with fade
                                    animation.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="mx-6 pb-8">
                                                <x-base.tiny-slider
                                                    id="fade-animation-slider"
                                                    config="fade-mode"
                                                >
                                                    <div class="h-64 px-2">
                                                        <div class="image-fit h-full overflow-hidden rounded-md">
                                                            <img
                                                                src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="h-64 px-2">
                                                        <div class="image-fit h-full overflow-hidden rounded-md">
                                                            <img
                                                                src="{{ Vite::asset($products[1]['images'][0]['path']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="h-64 px-2">
                                                        <div class="image-fit h-full overflow-hidden rounded-md">
                                                            <img
                                                                src="{{ Vite::asset($products[2]['images'][0]['path']) }}"
                                                                alt="Tailwise - Admin Dashboard Template"
                                                            >
                                                        </div>
                                                    </div>
                                                </x-base.tiny-slider>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="mx-6 pb-8">
                                                    <x-base.tiny-slider
                                                        id="fade-animation-slider"
                                                        config="fade-mode"
                                                    >
                                                        <div class="h-64 px-2">
                                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                                <img
                                                                    src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                                    alt="Tailwise - Admin Dashboard Template"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="h-64 px-2">
                                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                                <img
                                                                    src="{{ Vite::asset($products[1]['images'][0]['path']) }}"
                                                                    alt="Tailwise - Admin Dashboard Template"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="h-64 px-2">
                                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                                <img
                                                                    src="{{ Vite::asset($products[2]['images'][0]['path']) }}"
                                                                    alt="Tailwise - Admin Dashboard Template"
                                                                >
                                                            </div>
                                                        </div>
                                                    </x-base.tiny-slider>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    The fade animation in Tiny Slider provides a smooth and
                                    visually appealing way to transition between slides.
                                    It's particularly effective for sliders that need to
                                    convey a sense of elegance and style. With fade
                                    animation enabled, your slider will seamlessly fade in
                                    and out between slides, creating an engaging user
                                    experience.
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
                                    <div class="-mt-px">TinySlider</div>
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
                                                <x-base.table.td>`getRef`</x-base.table.td>
                                                <x-base.table.td>
                                                    `(el: TinySliderElement) =&gt; void`
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    A function that receives a reference to the
                                                    TinySlider container element.
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>`options`</x-base.table.td>
                                                <x-base.table.td>`TinySliderSettings`</x-base.table.td>
                                                <x-base.table.td>
                                                    The settings and configuration options for the
                                                    TinySlider. Defaults to an empty object.
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
                                    Single Item
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
                                    Multiple Item
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
                                    Responsive Display
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
                                    Center Mode
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
                                    Fade Animation
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
