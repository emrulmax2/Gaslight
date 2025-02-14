@props(['variant' => 'tabs'])

<ul
    data-tw-merge
    role="tablist"
    {{ $attributes->class(
            merge([
                $variant == 'tabs' ? 'border-b border-slate-200 dark:border-darkmode-400' : null,
                $variant == 'boxed-tabs'
                    ? 'p-0.5 border bg-slate-50/70 border-slate-200/70 rounded-lg dark:border-darkmode-400'
                    : null,
                'w-full flex',
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</ul>
