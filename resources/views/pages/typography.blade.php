@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Heading
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Unleash the power of our Heading component to effortlessly create
                    eye-catching and well-structured headings for your web content.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative col-span-12 flex flex-col gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Heading</div>
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
                                    Headings are an essential part of structuring and
                                    organizing content in your application. They provide
                                    hierarchy and help users navigate and understand the
                                    information presented. This section covers how to use
                                    headings effectively in your project.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <h1 class="text-4xl font-medium leading-none">
                                                    h1. Heading 1
                                                </h1>
                                                <h2 class="mt-3 text-3xl font-medium leading-none">
                                                    h2. Heading 2
                                                </h2>
                                                <h3 class="mt-3 text-2xl font-medium leading-none">
                                                    h3. Heading 3
                                                </h3>
                                                <h4 class="mt-3 text-xl font-medium leading-none">
                                                    h4. Heading 4
                                                </h4>
                                                <h5 class="mt-3 text-lg font-medium leading-none">
                                                    h5. Heading 5
                                                </h5>
                                                <h6 class="mt-3 font-medium leading-none">
                                                    h6. Heading 6
                                                </h6>
                                            </div>
                                            <div class="mt-5">
                                                <h1 class="text-4xl font-medium leading-none text-primary">
                                                    h1. Heading 1
                                                </h1>
                                                <h2
                                                    class="mt-3 text-3xl font-medium leading-none text-slate-600 dark:text-slate-500">
                                                    h2. Heading 2
                                                </h2>
                                                <h3 class="mt-3 text-2xl font-medium leading-none text-success">
                                                    h3. Heading 3
                                                </h3>
                                                <h4 class="mt-3 text-xl font-medium leading-none text-warning">
                                                    h4. Heading 4
                                                </h4>
                                                <h5 class="mt-3 text-lg font-medium leading-none text-danger">
                                                    h5. Heading 5
                                                </h5>
                                                <h6 class="mt-3 font-medium leading-none text-slate-500">
                                                    h6. Heading 6
                                                </h6>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                                                    <h2 class="mt-3 text-3xl font-medium leading-none">
                                                        h2. Heading 2
                                                    </h2>
                                                    <h3 class="mt-3 text-2xl font-medium leading-none">
                                                        h3. Heading 3
                                                    </h3>
                                                    <h4 class="mt-3 text-xl font-medium leading-none">
                                                        h4. Heading 4
                                                    </h4>
                                                    <h5 class="mt-3 text-lg font-medium leading-none">
                                                        h5. Heading 5
                                                    </h5>
                                                    <h6 class="mt-3 font-medium leading-none">h6. Heading 6</h6>
                                                </div>
                                                <div class="mt-5">
                                                    <h1 class="text-4xl font-medium leading-none text-primary">
                                                        h1. Heading 1
                                                    </h1>
                                                    <h2
                                                        class="mt-3 text-3xl font-medium leading-none text-slate-600 dark:text-slate-500">
                                                        h2. Heading 2
                                                    </h2>
                                                    <h3 class="mt-3 text-2xl font-medium leading-none text-success">
                                                        h3. Heading 3
                                                    </h3>
                                                    <h4 class="mt-3 text-xl font-medium leading-none text-warning">
                                                        h4. Heading 4
                                                    </h4>
                                                    <h5 class="mt-3 text-lg font-medium leading-none text-danger">
                                                        h5. Heading 5
                                                    </h5>
                                                    <h6 class="mt-3 font-medium leading-none text-slate-500">
                                                        h6. Heading 6
                                                    </h6>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Headings play a crucial role in structuring and
                                    organizing your content. By using headings effectively
                                    and consistently, you can improve the accessibility and
                                    readability of your application. Remember to choose the
                                    appropriate heading level, keep headings semantic, and
                                    follow accessibility best practices for a better user
                                    experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Text Settings
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
                                    Text settings and styles are essential for ensuring that
                                    your content is both visually appealing and easy to
                                    read. This section covers how to apply various text
                                    settings to your content.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <div class="font-normal">Example text</div>
                                                <div class="font-medium">
                                                    Example medium text
                                                </div>
                                                <div class="font-semibold">
                                                    Example semibold text
                                                </div>
                                                <div class="font-bold">
                                                    Example bolder text
                                                </div>
                                                <div class="font-extrabold">
                                                    Example boldest text
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div class="uppercase">
                                                    Example uppercase text
                                                </div>
                                                <div class="lowercase">
                                                    Example lowercase text
                                                </div>
                                                <div class="capitalize">
                                                    Example capitalized text
                                                </div>
                                                <div class="normal-case">
                                                    Example cursive text
                                                </div>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <div class="font-normal">Example text</div>
                                                    <div class="font-medium">Example medium text</div>
                                                    <div class="font-semibold">Example semibold text</div>
                                                    <div class="font-bold">Example bolder text</div>
                                                    <div class="font-extrabold">Example boldest text</div>
                                                </div>
                                                <div class="mt-5">
                                                    <div class="uppercase">Example uppercase text</div>
                                                    <div class="lowercase">Example lowercase text</div>
                                                    <div class="capitalize">Example capitalized text</div>
                                                    <div class="normal-case">Example cursive text</div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Customizing text settings is crucial for creating
                                    visually appealing and readable content. By adjusting
                                    font size, line height, color, font family, text
                                    alignment, and text decoration, you can tailor your text
                                    to suit your application's design and improve the user
                                    experience. Remember to maintain consistency in your
                                    text settings throughout your application for a polished
                                    look.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Common Elements
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
                                    Common HTML elements are often used to style or convey
                                    special meanings within your content. This section
                                    covers some common HTML elements that can be used to
                                    enhance the presentation of your text-based content.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                You can use the mark tag to
                                                <mark class="bg-yellow-200 p-1">
                                                    highlight
                                                </mark>
                                                text.
                                            </div>
                                            <del class="mt-1 block">
                                                This line of text is meant to be treated as
                                                deleted text.
                                            </del>
                                            <s class="mt-1 block">
                                                This line of text is meant to be treated as no
                                                longer accurate.
                                            </s>
                                            <ins class="mt-1 block">
                                                This line of text is meant to be treated as an
                                                addition to the document.
                                            </ins>
                                            <u class="mt-1 block">
                                                This line of text will render as underlined
                                            </u>
                                            <small class="mt-1 block">
                                                This line of text is meant to be treated as fine
                                                print.
                                            </small>
                                            <strong class="mt-1 block">
                                                This line rendered as bold text.
                                            </strong>
                                            <em class="mt-1 block">
                                                This line rendered as italicized text.
                                            </em>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    You can use the mark tag to
                                                    <mark class="bg-yellow-200 p-1">highlight</mark> text.
                                                </div>
                                                <del class="mt-1 block">This line of text is meant to be treated as deleted
                                                    text.</del>
                                                <s class="mt-1 block">This line of text is meant to be treated as no longer
                                                    accurate.</s>
                                                <ins class="mt-1 block">This line of text is meant to be treated as an
                                                    addition to the
                                                    document.</ins>
                                                <u class="mt-1 block">This line of text will render as underlined</u>
                                                <small class="mt-1 block">This line of text is meant to be treated as fine
                                                    print.</small>
                                                <strong class="mt-1 block">This line rendered as bold text.</strong>
                                                <em class="mt-1 block">This line rendered as italicized text.</em>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    These common HTML elements provide you with a range of
                                    tools to enhance the styling and meaning of your
                                    text-based content. By using these elements
                                    appropriately, you can improve the readability and
                                    visual presentation of your content while conveying
                                    specific meanings or emphasis where needed.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Badges</div>
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
                                    Badges are small, informative components used to
                                    visually represent status, notifications, or other
                                    metadata in a concise manner. This section covers how to
                                    use badges effectively in your web applications.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="font-medium">Basic Badge</div>
                                            <div class="mt-2">
                                                <span class="mr-1 rounded-full bg-primary px-1 text-xs text-white">
                                                    1
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                >
                                                    2
                                                </span>
                                                <span class="mr-1 rounded-full bg-success px-1 text-xs text-white">
                                                    3
                                                </span>
                                                <span class="mr-1 rounded-full bg-warning px-1 text-xs text-white">
                                                    4
                                                </span>
                                                <span class="mr-1 rounded-full bg-danger px-1 text-xs text-white">
                                                    5
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                >
                                                    6
                                                </span>
                                            </div>
                                            <div class="mt-6 font-medium">Badge Sizes</div>
                                            <div class="mt-3">
                                                <span class="mr-1 rounded-full bg-primary px-2 py-1 text-white">
                                                    1
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border px-2 py-1 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                >
                                                    2
                                                </span>
                                                <span class="mr-1 rounded-full bg-success px-2 py-1 text-white">
                                                    3
                                                </span>
                                                <span class="mr-1 rounded-full bg-warning px-2 py-1 text-white">
                                                    4
                                                </span>
                                                <span class="mr-1 rounded-full bg-danger px-2 py-1 text-white">
                                                    5
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full bg-slate-100 px-2 py-1 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                >
                                                    6
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <span class="mr-1 rounded-full bg-primary px-3 py-2 text-white">
                                                    1
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                >
                                                    2
                                                </span>
                                                <span class="mr-1 rounded-full bg-success px-3 py-2 text-white">
                                                    3
                                                </span>
                                                <span class="mr-1 rounded-full bg-warning px-3 py-2 text-white">
                                                    4
                                                </span>
                                                <span class="mr-1 rounded-full bg-danger px-3 py-2 text-white">
                                                    5
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full bg-slate-100 px-3 py-2 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                >
                                                    6
                                                </span>
                                            </div>
                                            <div class="mt-6">
                                                <span class="mr-1 rounded-full bg-primary px-4 py-3 text-white">
                                                    1
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border px-4 py-3 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                >
                                                    2
                                                </span>
                                                <span class="mr-1 rounded-full bg-success px-4 py-3 text-white">
                                                    3
                                                </span>
                                                <span class="mr-1 rounded-full bg-warning px-4 py-3 text-white">
                                                    4
                                                </span>
                                                <span class="mr-1 rounded-full bg-danger px-4 py-3 text-white">
                                                    5
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full bg-slate-100 px-4 py-3 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                >
                                                    6
                                                </span>
                                            </div>
                                            <div class="mt-10 font-medium">
                                                Square Badge
                                            </div>
                                            <div class="mt-2">
                                                <span class="mr-1 bg-primary px-1 text-xs text-white">
                                                    1
                                                </span>
                                                <span
                                                    class="mr-1 border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                >
                                                    2
                                                </span>
                                                <span class="mr-1 bg-success px-1 text-xs text-white">
                                                    3
                                                </span>
                                                <span class="mr-1 bg-warning px-1 text-xs text-white">
                                                    4
                                                </span>
                                                <span class="mr-1 bg-danger px-1 text-xs text-white">
                                                    5
                                                </span>
                                                <span
                                                    class="mr-1 bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                >
                                                    6
                                                </span>
                                            </div>
                                            <div class="mt-6 font-medium">
                                                Outline Badge
                                            </div>
                                            <div class="mt-4">
                                                <span
                                                    class="mr-1 rounded-full border border-primary px-3 py-2 text-primary dark:border-primary"
                                                >
                                                    1
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                >
                                                    2
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border border-success px-3 py-2 text-success dark:border-success"
                                                >
                                                    3
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border border-warning px-3 py-2 text-warning dark:border-warning"
                                                >
                                                    4
                                                </span>
                                                <span
                                                    class="mr-1 rounded-full border border-danger px-3 py-2 text-danger dark:border-danger"
                                                >
                                                    5
                                                </span>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="font-medium">Basic Badge</div>
                                                <div class="mt-2">
                                                    <span
                                                        class="mr-1 rounded-full bg-primary px-1 text-xs text-white">1</span>
                                                    <span
                                                        class="mr-1 rounded-full border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                    >2</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-success px-1 text-xs text-white">3</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-warning px-1 text-xs text-white">4</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-danger px-1 text-xs text-white">5</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                    >6</span>
                                                </div>
                                                <div class="mt-6 font-medium">Badge Sizes</div>
                                                <div class="mt-3">
                                                    <span
                                                        class="mr-1 rounded-full bg-primary px-2 py-1 text-white">1</span>
                                                    <span
                                                        class="mr-1 rounded-full border px-2 py-1 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                    >2</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-success px-2 py-1 text-white">3</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-warning px-2 py-1 text-white">4</span>
                                                    <span class="mr-1 rounded-full bg-danger px-2 py-1 text-white">5</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-slate-100 px-2 py-1 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                    >6</span>
                                                </div>
                                                <div class="mt-4">
                                                    <span
                                                        class="mr-1 rounded-full bg-primary px-3 py-2 text-white">1</span>
                                                    <span
                                                        class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                    >2</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-success px-3 py-2 text-white">3</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-warning px-3 py-2 text-white">4</span>
                                                    <span class="mr-1 rounded-full bg-danger px-3 py-2 text-white">5</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-slate-100 px-3 py-2 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                    >6</span>
                                                </div>
                                                <div class="mt-6">
                                                    <span
                                                        class="mr-1 rounded-full bg-primary px-4 py-3 text-white">1</span>
                                                    <span
                                                        class="mr-1 rounded-full border px-4 py-3 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                    >2</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-success px-4 py-3 text-white">3</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-warning px-4 py-3 text-white">4</span>
                                                    <span class="mr-1 rounded-full bg-danger px-4 py-3 text-white">5</span>
                                                    <span
                                                        class="mr-1 rounded-full bg-slate-100 px-4 py-3 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                    >6</span>
                                                </div>
                                                <div class="mt-10 font-medium">Square Badge</div>
                                                <div class="mt-2">
                                                    <span class="mr-1 bg-primary px-1 text-xs text-white">1</span>
                                                    <span
                                                        class="mr-1 border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                    >2</span>
                                                    <span class="mr-1 bg-success px-1 text-xs text-white">3</span>
                                                    <span class="mr-1 bg-warning px-1 text-xs text-white">4</span>
                                                    <span class="mr-1 bg-danger px-1 text-xs text-white">5</span>
                                                    <span
                                                        class="mr-1 bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                                    >6</span>
                                                </div>
                                                <div class="mt-6 font-medium">Outline Badge</div>
                                                <div class="mt-4">
                                                    <span
                                                        class="mr-1 rounded-full border border-primary px-3 py-2 text-primary dark:border-primary"
                                                    >1</span>
                                                    <span
                                                        class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                                    >2</span>
                                                    <span
                                                        class="mr-1 rounded-full border border-success px-3 py-2 text-success dark:border-success"
                                                    >3</span>
                                                    <span
                                                        class="mr-1 rounded-full border border-warning px-3 py-2 text-warning dark:border-warning"
                                                    >4</span>
                                                    <span
                                                        class="mr-1 rounded-full border border-danger px-3 py-2 text-danger dark:border-danger"
                                                    >5</span>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Badges are versatile components that can help you convey
                                    important information or highlight specific elements in
                                    your application. By using different variants, icons,
                                    counts, and custom styling, you can create badges that
                                    fit seamlessly into your design and improve user
                                    experience.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Separator
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
                                    Separators are used to create visual divisions or
                                    spacing between elements in a user interface. They help
                                    improve the overall layout and readability of a page.
                                    This section covers various ways to use separators
                                    effectively in your web applications.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div
                                                class="w-full border-t border-dashed border-slate-200/60 dark:border-darkmode-400">
                                            </div>
                                            <div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400">
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div
                                                    class="w-full border-t border-dashed border-slate-200/60 dark:border-darkmode-400">
                                                </div>
                                                <div
                                                    class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400">
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Separators play a crucial role in improving the layout
                                    and readability of your web pages. They can help create
                                    a clear visual hierarchy and enhance the overall user
                                    experience. By using different types of separators and
                                    custom styles, you can tailor them to match your
                                    application's design and effectively structure your
                                    content.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Divider</div>
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
                                    Dividers are used to create clear visual separations
                                    between sections or content on a webpage. They help
                                    improve the overall structure and organization of a
                                    page. This section covers various ways to use dividers
                                    effectively in your web applications.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div
                                                class="mt-2 flex w-full justify-center border-t border-slate-200/60 dark:border-darkmode-400">
                                                <div class="-mt-3 bg-white px-5 text-slate-500 dark:bg-darkmode-600">
                                                    or
                                                </div>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div
                                                    class="mt-2 flex w-full justify-center border-t border-slate-200/60 dark:border-darkmode-400">
                                                    <div class="-mt-3 bg-white px-5 text-slate-500 dark:bg-darkmode-600">
                                                        or
                                                    </div>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Dividers are essential for maintaining a well-structured
                                    layout in your web applications. They help create a
                                    clear visual hierarchy and enhance the overall user
                                    experience by providing a sense of organization and
                                    separation between content sections.
                                </p>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="box box--stacked flex flex-col p-5">
                        <x-base.preview-component>
                            <div
                                class="mb-5 flex flex-col border-b border-dashed border-slate-300/70 pb-5 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Links</div>
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
                                    Links are a fundamental part of web development and
                                    navigation. They allow users to navigate between
                                    different pages or resources on the internet. This
                                    section covers the usage of links in web development and
                                    provides examples of how to create and style links
                                    effectively.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <a
                                                    class="block font-normal text-primary"
                                                    href=""
                                                >
                                                    Example text
                                                </a>
                                                <a
                                                    class="block font-medium text-primary"
                                                    href=""
                                                >
                                                    Example medium text
                                                </a>
                                                <a
                                                    class="block font-semibold text-primary"
                                                    href=""
                                                >
                                                    Example semibold text
                                                </a>
                                                <a
                                                    class="block font-bold text-primary"
                                                    href=""
                                                >
                                                    Example bolder text
                                                </a>
                                                <a
                                                    class="block font-extrabold text-primary"
                                                    href=""
                                                >
                                                    Example boldest text
                                                </a>
                                            </div>
                                            <div class="mt-5">
                                                <a
                                                    class="block text-primary"
                                                    href=""
                                                >
                                                    Primary state
                                                </a>
                                                <a
                                                    class="block text-slate-600 dark:text-slate-500"
                                                    href=""
                                                >
                                                    Secondary state
                                                </a>
                                                <a
                                                    class="block text-success"
                                                    href=""
                                                >
                                                    Success state
                                                </a>
                                                <a
                                                    class="block text-warning"
                                                    href=""
                                                >
                                                    Warning state
                                                </a>
                                                <a
                                                    class="block text-danger"
                                                    href=""
                                                >
                                                    Danger state
                                                </a>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div>
                                                    <a
                                                        class="block font-normal text-primary"
                                                        href=""
                                                    >Example text</a>
                                                    <a
                                                        class="block font-medium text-primary"
                                                        href=""
                                                    >Example medium text</a>
                                                    <a
                                                        class="block font-semibold text-primary"
                                                        href=""
                                                    >Example semibold text</a>
                                                    <a
                                                        class="block font-bold text-primary"
                                                        href=""
                                                    >Example bolder text</a>
                                                    <a
                                                        class="block font-extrabold text-primary"
                                                        href=""
                                                    >Example boldest text</a>
                                                </div>
                                                <div class="mt-5">
                                                    <a
                                                        class="block text-primary"
                                                        href=""
                                                    >Primary state</a>
                                                    <a
                                                        class="block text-slate-600 dark:text-slate-500"
                                                        href=""
                                                    >Secondary state</a>
                                                    <a
                                                        class="block text-success"
                                                        href=""
                                                    >Success state</a>
                                                    <a
                                                        class="block text-warning"
                                                        href=""
                                                    >Warning state</a>
                                                    <a
                                                        class="block text-danger"
                                                        href=""
                                                    >Danger state</a>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                                <p class="leading-relaxed">
                                    Links are a crucial part of web development, allowing
                                    users to navigate between different pages and resources.
                                    Understanding how to create and style links effectively
                                    is essential for providing a smooth and user-friendly
                                    browsing experience. By using proper HTML syntax and CSS
                                    styling, you can make your links visually appealing and
                                    functional, enhancing the overall user experience on
                                    your website or web application.
                                </p>
                            </div>
                        </x-base.preview-component>
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
                                    Heading
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
                                    Text Settings
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
                                    Common Elements
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
                                    Badges
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
                                    Separator
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
                                    Divider
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
                                    Links
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
