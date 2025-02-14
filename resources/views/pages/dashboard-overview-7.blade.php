@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Wallet
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-5">
                <div class="box box--stacked col-span-12 flex flex-col p-5 sm:col-span-6 xl:col-span-3">
                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                            <x-base.lucide
                                class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="h-[54px] w-[54px] cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                            <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100%"
                                    height="100%"
                                    version="1.1"
                                    shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    viewBox="0 0 4091.27 4091.73"
                                >
                                    <g>
                                        <metadata />
                                        <g>
                                            <path
                                                fill="#F7931A"
                                                fill-rule="nonzero"
                                                d="M4030.06 2540.77c-273.24,1096.01 -1383.32,1763.02 -2479.46,1489.71 -1095.68,-273.24 -1762.69,-1383.39 -1489.33,-2479.31 273.12,-1096.13 1383.2,-1763.19 2479,-1489.95 1096.06,273.24 1763.03,1383.51 1489.76,2479.57l0.02 -0.02z"
                                            />
                                            <path
                                                fill="white"
                                                fill-rule="nonzero"
                                                d="M2947.77 1754.38c40.72,-272.26 -166.56,-418.61 -450,-516.24l91.95 -368.8 -224.5 -55.94 -89.51 359.09c-59.02,-14.72 -119.63,-28.59 -179.87,-42.34l90.16 -361.46 -224.36 -55.94 -92 368.68c-48.84,-11.12 -96.81,-22.11 -143.35,-33.69l0.26 -1.16 -309.59 -77.31 -59.72 239.78c0,0 166.56,38.18 163.05,40.53 90.91,22.69 107.35,82.87 104.62,130.57l-104.74 420.15c6.26,1.59 14.38,3.89 23.34,7.49 -7.49,-1.86 -15.46,-3.89 -23.73,-5.87l-146.81 588.57c-11.11,27.62 -39.31,69.07 -102.87,53.33 2.25,3.26 -163.17,-40.72 -163.17,-40.72l-111.46 256.98 292.15 72.83c54.35,13.63 107.61,27.89 160.06,41.3l-92.9 373.03 224.24 55.94 92 -369.07c61.26,16.63 120.71,31.97 178.91,46.43l-91.69 367.33 224.51 55.94 92.89 -372.33c382.82,72.45 670.67,43.24 791.83,-303.02 97.63,-278.78 -4.86,-439.58 -206.26,-544.44 146.69,-33.83 257.18,-130.31 286.64,-329.61l-0.07 -0.05zm-512.93 719.26c-69.38,278.78 -538.76,128.08 -690.94,90.29l123.28 -494.2c152.17,37.99 640.17,113.17 567.67,403.91zm69.43 -723.3c-63.29,253.58 -453.96,124.75 -580.69,93.16l111.77 -448.21c126.73,31.59 534.85,90.55 468.94,355.05l-0.02 0z"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="-mt-0.5 text-lg font-medium text-primary">
                                Bitcoin
                            </div>
                            <div class="mt-0.5 text-slate-500">BTC/USDT</div>
                        </div>
                    </div>
                    <div class="box mt-16 rounded-[0.6rem] border border-dashed border-slate-300/80 px-4 py-2.5 shadow-sm">
                        <div class="flex items-center">
                            <div class="text-xl font-medium leading-tight">23,46</div>
                            <div class="ml-2.5 flex items-center font-medium text-success">
                                +2%
                                <x-base.lucide
                                    class="ml-px h-4 w-4 stroke-[1.5]"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                        <div class="mt-1 text-base text-slate-500">$7,321,010,00</div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 sm:col-span-6 xl:col-span-3">
                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                            <x-base.lucide
                                class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="h-[54px] w-[54px] cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                            <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100%"
                                    height="100%"
                                    version="1.1"
                                    shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    viewBox="0 0 784.37 1277.39"
                                >
                                    <g>
                                        <metadata />
                                        <g>
                                            <g>
                                                <polygon
                                                    fill="#343434"
                                                    fill-rule="nonzero"
                                                    points="392.07,0 383.5,29.11 383.5,873.74 392.07,882.29 784.13,650.54 "
                                                />
                                                <polygon
                                                    fill="#8C8C8C"
                                                    fill-rule="nonzero"
                                                    points="392.07,0 -0,650.54 392.07,882.29 392.07,472.33 "
                                                />
                                                <polygon
                                                    fill="#3C3C3B"
                                                    fill-rule="nonzero"
                                                    points="392.07,956.52 387.24,962.41 387.24,1263.28 392.07,1277.38 784.37,724.89 "
                                                />
                                                <polygon
                                                    fill="#8C8C8C"
                                                    fill-rule="nonzero"
                                                    points="392.07,1277.38 392.07,956.52 -0,724.89 "
                                                />
                                                <polygon
                                                    fill="#141414"
                                                    fill-rule="nonzero"
                                                    points="392.07,882.29 784.13,650.54 392.07,472.33 "
                                                />
                                                <polygon
                                                    fill="#393939"
                                                    fill-rule="nonzero"
                                                    points="0,650.54 392.07,882.29 392.07,472.33 "
                                                />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="-mt-0.5 text-lg font-medium text-primary">
                                Ethereum
                            </div>
                            <div class="mt-0.5 text-slate-500">ETH/USDT</div>
                        </div>
                    </div>
                    <div class="box mt-16 rounded-[0.6rem] border border-dashed border-slate-300/80 px-4 py-2.5 shadow-sm">
                        <div class="flex items-center">
                            <div class="text-xl font-medium leading-tight">203,15</div>
                            <div class="ml-2.5 flex items-center font-medium text-danger">
                                -3%
                                <x-base.lucide
                                    class="ml-px h-4 w-4 stroke-[1.5]"
                                    icon="ChevronDown"
                                />
                            </div>
                        </div>
                        <div class="mt-1 text-base text-slate-500">$1,421,990,00</div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 sm:col-span-6 xl:col-span-3">
                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                            <x-base.lucide
                                class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="h-[54px] w-[54px] cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                            <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100%"
                                    height="100%"
                                    viewBox="0 0 1503 1504"
                                    fill="none"
                                >
                                    <rect
                                        x="287"
                                        y="258"
                                        width="928"
                                        height="844"
                                        fill="white"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M1502.5 752C1502.5 1166.77 1166.27 1503 751.5 1503C336.734 1503 0.5 1166.77 0.5 752C0.5 337.234 336.734 1 751.5 1C1166.27 1 1502.5 337.234 1502.5 752ZM538.688 1050.86H392.94C362.314 1050.86 347.186 1050.86 337.962 1044.96C327.999 1038.5 321.911 1027.8 321.173 1015.99C320.619 1005.11 328.184 991.822 343.312 965.255L703.182 330.935C718.495 303.999 726.243 290.531 736.021 285.55C746.537 280.2 759.083 280.2 769.599 285.55C779.377 290.531 787.126 303.999 802.438 330.935L876.42 460.079L876.797 460.738C893.336 489.635 901.723 504.289 905.385 519.669C909.443 536.458 909.443 554.169 905.385 570.958C901.695 586.455 893.393 601.215 876.604 630.549L687.573 964.702L687.084 965.558C670.436 994.693 661.999 1009.46 650.306 1020.6C637.576 1032.78 622.263 1041.63 605.474 1046.62C590.161 1050.86 573.004 1050.86 538.688 1050.86ZM906.75 1050.86H1115.59C1146.4 1050.86 1161.9 1050.86 1171.13 1044.78C1181.09 1038.32 1187.36 1027.43 1187.92 1015.63C1188.45 1005.1 1181.05 992.33 1166.55 967.307C1166.05 966.455 1165.55 965.588 1165.04 964.706L1060.43 785.75L1059.24 783.735C1044.54 758.877 1037.12 746.324 1027.59 741.472C1017.08 736.121 1004.71 736.121 994.199 741.472C984.605 746.453 976.857 759.552 961.544 785.934L857.306 964.891L856.949 965.507C841.69 991.847 834.064 1005.01 834.614 1015.81C835.352 1027.62 841.44 1038.5 851.402 1044.96C860.443 1050.86 875.94 1050.86 906.75 1050.86Z"
                                        fill="#E84142"
                                    />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="-mt-0.5 text-lg font-medium text-primary">
                                Avalanche
                            </div>
                            <div class="mt-0.5 text-slate-500">AVAX/USDT</div>
                        </div>
                    </div>
                    <div class="box mt-16 rounded-[0.6rem] border border-dashed border-slate-300/80 px-4 py-2.5 shadow-sm">
                        <div class="flex items-center">
                            <div class="text-xl font-medium leading-tight">
                                4,125,15
                            </div>
                            <div class="ml-2.5 flex items-center font-medium text-success">
                                +4.5%
                                <x-base.lucide
                                    class="ml-px h-4 w-4 stroke-[1.5]"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                        <div class="mt-1 text-base text-slate-500">$441,051,00</div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 sm:col-span-6 xl:col-span-3">
                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                            <x-base.lucide
                                class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="flex items-center">
                        <div
                            class="h-[54px] w-[54px] cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                            <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 336.41 337.42"
                                >
                                    <defs></defs>
                                    <title>Asset 1</title>
                                    <g data-name="Layer 2">
                                        <g data-name="Layer 1">
                                            <path
                                                fill="#f0b90b"
                                                d="M168.2.71l41.5,42.5L105.2,147.71l-41.5-41.5Z"
                                            />
                                            <path
                                                fill="#f0b90b"
                                                d="M231.2,63.71l41.5,42.5L105.2,273.71l-41.5-41.5Z"
                                            />
                                            <path
                                                fill="#f0b90b"
                                                d="M42.2,126.71l41.5,42.5-41.5,41.5L.7,169.21Z"
                                            />
                                            <path
                                                fill="#f0b90b"
                                                d="M294.2,126.71l41.5,42.5L168.2,336.71l-41.5-41.5Z"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="-mt-0.5 text-lg font-medium text-primary">
                                Binance
                            </div>
                            <div class="mt-0.5 text-slate-500">BUSD</div>
                        </div>
                    </div>
                    <div class="box mt-16 rounded-[0.6rem] border border-dashed border-slate-300/80 px-4 py-2.5 shadow-sm">
                        <div class="flex items-center">
                            <div class="text-xl font-medium leading-tight">34,49</div>
                            <div class="ml-2.5 flex items-center font-medium text-success">
                                +1.5%
                                <x-base.lucide
                                    class="ml-px h-4 w-4 stroke-[1.5]"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                        <div class="mt-1 text-base text-slate-500">$21,910,00</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-4">
            <div>
                <div class="flex h-10 items-center">
                    <div class="text-base font-medium">Market</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed pb-5">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                            <div class="flex items-center">
                                <div
                                    class="h-11 w-11 cursor-pointer rounded-full border border-primary/70 bg-slate-50 p-0.5">
                                    <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="100%"
                                            height="100%"
                                            viewBox="0 0 1503 1504"
                                            fill="none"
                                        >
                                            <rect
                                                x="287"
                                                y="258"
                                                width="928"
                                                height="844"
                                                fill="white"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M1502.5 752C1502.5 1166.77 1166.27 1503 751.5 1503C336.734 1503 0.5 1166.77 0.5 752C0.5 337.234 336.734 1 751.5 1C1166.27 1 1502.5 337.234 1502.5 752ZM538.688 1050.86H392.94C362.314 1050.86 347.186 1050.86 337.962 1044.96C327.999 1038.5 321.911 1027.8 321.173 1015.99C320.619 1005.11 328.184 991.822 343.312 965.255L703.182 330.935C718.495 303.999 726.243 290.531 736.021 285.55C746.537 280.2 759.083 280.2 769.599 285.55C779.377 290.531 787.126 303.999 802.438 330.935L876.42 460.079L876.797 460.738C893.336 489.635 901.723 504.289 905.385 519.669C909.443 536.458 909.443 554.169 905.385 570.958C901.695 586.455 893.393 601.215 876.604 630.549L687.573 964.702L687.084 965.558C670.436 994.693 661.999 1009.46 650.306 1020.6C637.576 1032.78 622.263 1041.63 605.474 1046.62C590.161 1050.86 573.004 1050.86 538.688 1050.86ZM906.75 1050.86H1115.59C1146.4 1050.86 1161.9 1050.86 1171.13 1044.78C1181.09 1038.32 1187.36 1027.43 1187.92 1015.63C1188.45 1005.1 1181.05 992.33 1166.55 967.307C1166.05 966.455 1165.55 965.588 1165.04 964.706L1060.43 785.75L1059.24 783.735C1044.54 758.877 1037.12 746.324 1027.59 741.472C1017.08 736.121 1004.71 736.121 994.199 741.472C984.605 746.453 976.857 759.552 961.544 785.934L857.306 964.891L856.949 965.507C841.69 991.847 834.064 1005.01 834.614 1015.81C835.352 1027.62 841.44 1038.5 851.402 1044.96C860.443 1050.86 875.94 1050.86 906.75 1050.86Z"
                                                fill="#E84142"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <div class="relative">
                                        <x-base.form-select
                                            class="border-0 bg-none p-0 text-base font-medium text-primary shadow-none focus:ring-0"
                                        >
                                            <option value="avalanche">Avalanche</option>
                                            <option value="bitcoin">Bitcoin</option>
                                            <option value="ethereum">Ethereum</option>
                                            <option value="binance">Binance</option>
                                        </x-base.form-select>
                                        <x-base.lucide
                                            class="absolute inset-y-0 right-0 my-auto -mr-5 h-4 w-4 stroke-[1.3]"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        AVAX/USDT
                                    </div>
                                </div>
                            </div>
                            <div class="sm:ml-auto">
                                <x-base.form-select>
                                    <option value="daily">24 Hours</option>
                                    <option value="weekly">48 Hours</option>
                                    <option value="monthly">64 Hours</option>
                                </x-base.form-select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-slate-500">Avalanche Price</div>
                        <div class="mt-0.5 flex items-center">
                            <div class="text-lg font-medium">$1,342.02</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                1.94%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col rounded-[0.6rem] border border-dashed border-slate-300/80">
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-3.5 py-2.5 last:border-0">
                            <div>
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Low
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="Low"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-1 whitespace-nowrap text-base font-medium text-slate-600">
                                    $2,367,01
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-3.5 py-2.5 last:border-0">
                            <div>
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    High
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="High"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-1 whitespace-nowrap text-base font-medium text-slate-600">
                                    $4,187,02
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 font-medium">Key Stats</div>
                    <div class="mt-4 flex flex-col rounded-[0.6rem] border border-dashed border-slate-300/80">
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-3.5 py-2.5 last:border-0">
                            <div>
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Market Cap
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="Market Cap"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-1 whitespace-nowrap text-base font-medium text-slate-600">
                                    $157,479,048,41
                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    4.94%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-3.5 py-2.5 last:border-0">
                            <div>
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Fully Diluted Market Cap
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="Fully Diluted Market Cap"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-1 whitespace-nowrap text-base font-medium text-slate-600">
                                    $297,479,048,41
                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    2.94%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-3.5 py-2.5 last:border-0">
                            <div>
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Volume
                                    <span
                                        class="ml-1.5 rounded-md border bg-slate-100/80 px-1.5 py-px text-xs text-slate-500"
                                    >
                                        24h
                                    </span>
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="Volume"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-1 whitespace-nowrap text-base font-medium text-slate-600">
                                    $24,479,048,41
                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                    3.74%
                                    <x-base.lucide
                                        class="ml-px h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 px-3.5 py-2.5 last:border-0">
                            <div>
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Circulating Supply
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="Circulating Supply"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-1 whitespace-nowrap text-base font-medium text-slate-600">
                                    $157,479,048,41
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-base.button
                        class="mt-6 w-full border-primary/50"
                        variant="outline-primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        Buy Avalanche
                    </x-base.button>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex h-10 items-center">
                    <div class="text-base font-medium">Withdrawal</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="flex flex-col overflow-hidden rounded-[0.6rem] border border-dashed border-slate-300/80">
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 bg-slate-50/80 px-3.5 py-2.5 last:border-0">
                            <div class="w-full">
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Currency
                                </div>
                                <div class="mt-1.5 flex w-full items-center">
                                    <div class="mr-2.5">
                                        <div
                                            class="h-8 w-8 cursor-pointer rounded-full border border-slate-300/70 bg-white p-0.5">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="100%"
                                                height="100%"
                                                version="1.1"
                                                shape-rendering="geometricPrecision"
                                                text-rendering="geometricPrecision"
                                                image-rendering="optimizeQuality"
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                viewBox="0 0 4091.27 4091.73"
                                            >
                                                <g>
                                                    <metadata />
                                                    <g>
                                                        <path
                                                            fill="#F7931A"
                                                            fill-rule="nonzero"
                                                            d="M4030.06 2540.77c-273.24,1096.01 -1383.32,1763.02 -2479.46,1489.71 -1095.68,-273.24 -1762.69,-1383.39 -1489.33,-2479.31 273.12,-1096.13 1383.2,-1763.19 2479,-1489.95 1096.06,273.24 1763.03,1383.51 1489.76,2479.57l0.02 -0.02z"
                                                        />
                                                        <path
                                                            fill="white"
                                                            fill-rule="nonzero"
                                                            d="M2947.77 1754.38c40.72,-272.26 -166.56,-418.61 -450,-516.24l91.95 -368.8 -224.5 -55.94 -89.51 359.09c-59.02,-14.72 -119.63,-28.59 -179.87,-42.34l90.16 -361.46 -224.36 -55.94 -92 368.68c-48.84,-11.12 -96.81,-22.11 -143.35,-33.69l0.26 -1.16 -309.59 -77.31 -59.72 239.78c0,0 166.56,38.18 163.05,40.53 90.91,22.69 107.35,82.87 104.62,130.57l-104.74 420.15c6.26,1.59 14.38,3.89 23.34,7.49 -7.49,-1.86 -15.46,-3.89 -23.73,-5.87l-146.81 588.57c-11.11,27.62 -39.31,69.07 -102.87,53.33 2.25,3.26 -163.17,-40.72 -163.17,-40.72l-111.46 256.98 292.15 72.83c54.35,13.63 107.61,27.89 160.06,41.3l-92.9 373.03 224.24 55.94 92 -369.07c61.26,16.63 120.71,31.97 178.91,46.43l-91.69 367.33 224.51 55.94 92.89 -372.33c382.82,72.45 670.67,43.24 791.83,-303.02 97.63,-278.78 -4.86,-439.58 -206.26,-544.44 146.69,-33.83 257.18,-130.31 286.64,-329.61l-0.07 -0.05zm-512.93 719.26c-69.38,278.78 -538.76,128.08 -690.94,90.29l123.28 -494.2c152.17,37.99 640.17,113.17 567.67,403.91zm69.43 -723.3c-63.29,253.58 -453.96,124.75 -580.69,93.16l111.77 -448.21c126.73,31.59 534.85,90.55 468.94,355.05l-0.02 0z"
                                                        />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <x-base.form-select
                                        class="w-full border-0 bg-transparent px-0 text-base font-medium shadow-none focus:ring-0"
                                    >
                                        <option value="bitcoin">Bitcoin (BTC)</option>
                                        <option value="avalanche">Avalanche (AVAX)</option>
                                        <option value="ethereum">Ethereum (ETH)</option>
                                        <option value="binance">Binance (BUSD)</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center border-b border-dashed border-slate-300/80 bg-slate-50/80 px-3.5 py-2.5 last:border-0">
                            <div class="w-full">
                                <div class="flex items-center whitespace-nowrap text-slate-500">
                                    Amount
                                </div>
                                <div class="relative mt-1.5">
                                    <x-base.form-input
                                        class="border-0 bg-transparent pl-0 text-base font-medium shadow-none focus:ring-0"
                                        type="text"
                                        value="945.03"
                                    />
                                    <span
                                        class="absolute inset-y-0 right-0 my-auto mr-1.5 flex h-6 items-center rounded-md border bg-slate-100 px-1.5 py-0.5 text-xs text-slate-500"
                                    >
                                        MAX
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center whitespace-nowrap text-slate-500">
                        Address
                        <x-base.tippy
                            class="ml-1.5"
                            as="div"
                            content="Low"
                        >
                            <x-base.lucide
                                class="h-3.5 w-3.5 text-slate-500/70"
                                icon="Info"
                            />
                        </x-base.tippy>
                    </div>
                    <div class="relative mt-2 flex gap-3">
                        <x-base.form-input
                            class="bg-slate-50/80"
                            type="text"
                            value="0x41c087859869703Fa234d"
                        />
                        <x-base.tippy
                            content="Copy link"
                            as="x-base.button"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4 stroke-[1.5]"
                                icon="Copy"
                            />
                        </x-base.tippy>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex h-10 items-center">
                    <div class="text-base font-medium">Exchange</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed pb-5">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                            <div class="font-medium">1 ETH = $1,308,02</div>
                            <div class="sm:ml-auto">
                                <x-base.form-select>
                                    <option value="market">Market</option>
                                </x-base.form-select>
                            </div>
                        </div>
                    </div>
                    <x-base.tab.group class="mt-1">
                        <x-base.tab.list
                            class="rounded-[0.6rem] border-slate-200 bg-white shadow-sm"
                            variant="boxed-tabs"
                        >
                            <x-base.tab
                                class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                id="example-1-tab"
                                selected
                            >
                                <x-base.tab.button
                                    class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                    as="button"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="FileLineChart"
                                    />
                                    Floating
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                                id="example-2-tab"
                            >
                                <x-base.tab.button
                                    class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] text-slate-500"
                                    as="button"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Lock"
                                    />
                                    Fixed
                                </x-base.tab.button>
                            </x-base.tab>
                        </x-base.tab.list>
                        <x-base.tab.panels class="mt-6">
                            <x-base.tab.panel
                                id="example-1"
                                selected
                            >
                                <div
                                    class="flex flex-col overflow-hidden rounded-[0.6rem] border border-dashed border-slate-300/80">
                                    <div
                                        class="flex items-center border-b border-dashed border-slate-300/80 bg-slate-50/80 px-3.5 py-2.5 last:border-0">
                                        <div class="w-full">
                                            <div class="flex items-center whitespace-nowrap text-slate-500">
                                                You Send
                                            </div>
                                            <div class="relative mt-1.5">
                                                <x-base.form-input
                                                    class="border-0 bg-transparent pl-0 text-base font-medium shadow-none focus:ring-0"
                                                    type="text"
                                                    value="9.03"
                                                />
                                                <span
                                                    class="absolute inset-y-0 right-0 my-auto mr-1.5 flex h-6 items-center rounded-md border bg-slate-100 px-1.5 py-0.5 text-xs text-slate-500"
                                                >
                                                    ETH
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center border-b border-dashed border-slate-300/80 bg-slate-50/80 px-3.5 py-2.5 last:border-0">
                                        <div class="w-full">
                                            <div class="flex items-center whitespace-nowrap text-slate-500">
                                                You Receive
                                            </div>
                                            <div class="relative mt-1.5">
                                                <x-base.form-input
                                                    class="border-0 bg-transparent pl-0 text-base font-medium shadow-none focus:ring-0"
                                                    type="text"
                                                    value="00001.03"
                                                />
                                                <span
                                                    class="absolute inset-y-0 right-0 my-auto mr-1.5 flex h-6 items-center rounded-md border bg-slate-100 px-1.5 py-0.5 text-xs text-slate-500"
                                                >
                                                    BTC
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex items-center whitespace-nowrap text-slate-500">
                                    Address
                                    <x-base.tippy
                                        class="ml-1.5"
                                        as="div"
                                        content="Low"
                                    >
                                        <x-base.lucide
                                            class="h-3.5 w-3.5 text-slate-500/70"
                                            icon="Info"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="relative mt-2 flex gap-3">
                                    <x-base.form-input
                                        class="bg-slate-50/80"
                                        type="text"
                                        value="0x41c087859869703Fa234d"
                                    />
                                    <x-base.tippy
                                        content="Copy link"
                                        as="x-base.button"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4 stroke-[1.5]"
                                            icon="Copy"
                                        />
                                    </x-base.tippy>
                                </div>
                                <x-base.button
                                    class="mt-6 w-full border-primary/50"
                                    variant="primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="ArrowRightLeft"
                                    />
                                    Start Exchange
                                </x-base.button>
                            </x-base.tab.panel>
                        </x-base.tab.panels>
                    </x-base.tab.group>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex h-10 items-center">
                    <div class="text-base font-medium">Account</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 flex items-center border-b border-dashed pb-5">
                        <div class="image-fit zoom-in h-10 w-10">
                            <img
                                class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                src="{{ Vite::asset($users[0]['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                            >
                        </div>
                        <div class="ml-3.5">
                            <div class="flex items-center">
                                <span class="mr-4 font-medium">
                                    0x41c0878598697...234d
                                </span>
                                <a href="">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="ExternalLink"
                                    />
                                </a>
                                <a href="">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3]"
                                        icon="Copy"
                                    />
                                </a>
                            </div>
                            <div class="mt-0.5 text-xs text-slate-500">MetaMask</div>
                        </div>
                    </div>
                    <div class="font-medium">Slippage Tolerance</div>
                    <div class="mt-4 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <div class="flex flex-1 items-center rounded-lg border bg-slate-50/80">
                            <a
                                class="flex-1 border-r border-dashed bg-slate-100 px-3 py-2 text-center text-slate-500 last:border-r-0 hover:bg-slate-100"
                                href=""
                            >
                                1.5%
                            </a>
                            <a
                                class="flex-1 border-r border-dashed px-3 py-2 text-center text-slate-500 last:border-r-0 hover:bg-slate-100"
                                href=""
                            >
                                2.0%
                            </a>
                            <a
                                class="flex-1 border-r border-dashed px-3 py-2 text-center text-slate-500 last:border-r-0 hover:bg-slate-100"
                                href=""
                            >
                                2.5%
                            </a>
                            <a
                                class="flex-1 border-r border-dashed px-3 py-2 text-center text-slate-500 last:border-r-0 hover:bg-slate-100"
                                href=""
                            >
                                3%
                            </a>
                        </div>
                        <div class="relative">
                            <x-base.form-input
                                class="pr-11 text-right sm:w-24"
                                type="text"
                                value="5"
                            />
                            <div
                                class="absolute inset-y-0 right-0 my-2 mr-3 flex items-center justify-center border-l pl-2.5 text-xs font-medium">
                                %
                            </div>
                        </div>
                    </div>
                    <x-base.button class="mt-3.5 w-full border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="CloudOff"
                        />
                        Disconnect
                    </x-base.button>
                </div>
            </div>
            <div>
                <div class="flex h-10 items-center">
                    <div class="text-base font-medium">Recent Transactions</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-3.5 flex items-center border-b border-dashed pb-3.5 last:mb-0 last:border-0 last:pb-0">
                        <div>
                            <div class="h-10 w-10 cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                                <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="100%"
                                        height="100%"
                                        viewBox="0 0 1503 1504"
                                        fill="none"
                                    >
                                        <rect
                                            x="287"
                                            y="258"
                                            width="928"
                                            height="844"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M1502.5 752C1502.5 1166.77 1166.27 1503 751.5 1503C336.734 1503 0.5 1166.77 0.5 752C0.5 337.234 336.734 1 751.5 1C1166.27 1 1502.5 337.234 1502.5 752ZM538.688 1050.86H392.94C362.314 1050.86 347.186 1050.86 337.962 1044.96C327.999 1038.5 321.911 1027.8 321.173 1015.99C320.619 1005.11 328.184 991.822 343.312 965.255L703.182 330.935C718.495 303.999 726.243 290.531 736.021 285.55C746.537 280.2 759.083 280.2 769.599 285.55C779.377 290.531 787.126 303.999 802.438 330.935L876.42 460.079L876.797 460.738C893.336 489.635 901.723 504.289 905.385 519.669C909.443 536.458 909.443 554.169 905.385 570.958C901.695 586.455 893.393 601.215 876.604 630.549L687.573 964.702L687.084 965.558C670.436 994.693 661.999 1009.46 650.306 1020.6C637.576 1032.78 622.263 1041.63 605.474 1046.62C590.161 1050.86 573.004 1050.86 538.688 1050.86ZM906.75 1050.86H1115.59C1146.4 1050.86 1161.9 1050.86 1171.13 1044.78C1181.09 1038.32 1187.36 1027.43 1187.92 1015.63C1188.45 1005.1 1181.05 992.33 1166.55 967.307C1166.05 966.455 1165.55 965.588 1165.04 964.706L1060.43 785.75L1059.24 783.735C1044.54 758.877 1037.12 746.324 1027.59 741.472C1017.08 736.121 1004.71 736.121 994.199 741.472C984.605 746.453 976.857 759.552 961.544 785.934L857.306 964.891L856.949 965.507C841.69 991.847 834.064 1005.01 834.614 1015.81C835.352 1027.62 841.44 1038.5 851.402 1044.96C860.443 1050.86 875.94 1050.86 906.75 1050.86Z"
                                            fill="#E84142"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3.5 w-full">
                            <div class="flex w-full items-center">
                                <div class="mr-4 font-medium">Avalanche</div>
                                <span class="ml-auto font-medium">412.10 AVAX</span>
                            </div>
                            <div class="mt-0.5 flex w-full items-center">
                                <a
                                    class="text-xs text-primary"
                                    href=""
                                >
                                    Buy
                                </a>
                                <div class="ml-auto text-xs text-slate-500">
                                    Today, 14.25
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3.5 flex items-center border-b border-dashed pb-3.5 last:mb-0 last:border-0 last:pb-0">
                        <div>
                            <div class="h-10 w-10 cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                                <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="100%"
                                        height="100%"
                                        version="1.1"
                                        shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        viewBox="0 0 784.37 1277.39"
                                    >
                                        <g>
                                            <metadata />
                                            <g>
                                                <g>
                                                    <polygon
                                                        fill="#343434"
                                                        fill-rule="nonzero"
                                                        points="392.07,0 383.5,29.11 383.5,873.74 392.07,882.29 784.13,650.54 "
                                                    />
                                                    <polygon
                                                        fill="#8C8C8C"
                                                        fill-rule="nonzero"
                                                        points="392.07,0 -0,650.54 392.07,882.29 392.07,472.33 "
                                                    />
                                                    <polygon
                                                        fill="#3C3C3B"
                                                        fill-rule="nonzero"
                                                        points="392.07,956.52 387.24,962.41 387.24,1263.28 392.07,1277.38 784.37,724.89 "
                                                    />
                                                    <polygon
                                                        fill="#8C8C8C"
                                                        fill-rule="nonzero"
                                                        points="392.07,1277.38 392.07,956.52 -0,724.89 "
                                                    />
                                                    <polygon
                                                        fill="#141414"
                                                        fill-rule="nonzero"
                                                        points="392.07,882.29 784.13,650.54 392.07,472.33 "
                                                    />
                                                    <polygon
                                                        fill="#393939"
                                                        fill-rule="nonzero"
                                                        points="0,650.54 392.07,882.29 392.07,472.33 "
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3.5 w-full">
                            <div class="flex w-full items-center">
                                <div class="mr-4 font-medium">Ethereum</div>
                                <span class="ml-auto font-medium">12.71 ETH</span>
                            </div>
                            <div class="mt-0.5 flex w-full items-center">
                                <a
                                    class="text-xs text-primary"
                                    href=""
                                >
                                    Buy
                                </a>
                                <div class="ml-auto text-xs text-slate-500">
                                    Today, 01.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3.5 flex items-center border-b border-dashed pb-3.5 last:mb-0 last:border-0 last:pb-0">
                        <div>
                            <div class="h-10 w-10 cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                                <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="100%"
                                        height="100%"
                                        version="1.1"
                                        shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        viewBox="0 0 4091.27 4091.73"
                                    >
                                        <g>
                                            <metadata />
                                            <g>
                                                <path
                                                    fill="#F7931A"
                                                    fill-rule="nonzero"
                                                    d="M4030.06 2540.77c-273.24,1096.01 -1383.32,1763.02 -2479.46,1489.71 -1095.68,-273.24 -1762.69,-1383.39 -1489.33,-2479.31 273.12,-1096.13 1383.2,-1763.19 2479,-1489.95 1096.06,273.24 1763.03,1383.51 1489.76,2479.57l0.02 -0.02z"
                                                />
                                                <path
                                                    fill="white"
                                                    fill-rule="nonzero"
                                                    d="M2947.77 1754.38c40.72,-272.26 -166.56,-418.61 -450,-516.24l91.95 -368.8 -224.5 -55.94 -89.51 359.09c-59.02,-14.72 -119.63,-28.59 -179.87,-42.34l90.16 -361.46 -224.36 -55.94 -92 368.68c-48.84,-11.12 -96.81,-22.11 -143.35,-33.69l0.26 -1.16 -309.59 -77.31 -59.72 239.78c0,0 166.56,38.18 163.05,40.53 90.91,22.69 107.35,82.87 104.62,130.57l-104.74 420.15c6.26,1.59 14.38,3.89 23.34,7.49 -7.49,-1.86 -15.46,-3.89 -23.73,-5.87l-146.81 588.57c-11.11,27.62 -39.31,69.07 -102.87,53.33 2.25,3.26 -163.17,-40.72 -163.17,-40.72l-111.46 256.98 292.15 72.83c54.35,13.63 107.61,27.89 160.06,41.3l-92.9 373.03 224.24 55.94 92 -369.07c61.26,16.63 120.71,31.97 178.91,46.43l-91.69 367.33 224.51 55.94 92.89 -372.33c382.82,72.45 670.67,43.24 791.83,-303.02 97.63,-278.78 -4.86,-439.58 -206.26,-544.44 146.69,-33.83 257.18,-130.31 286.64,-329.61l-0.07 -0.05zm-512.93 719.26c-69.38,278.78 -538.76,128.08 -690.94,90.29l123.28 -494.2c152.17,37.99 640.17,113.17 567.67,403.91zm69.43 -723.3c-63.29,253.58 -453.96,124.75 -580.69,93.16l111.77 -448.21c126.73,31.59 534.85,90.55 468.94,355.05l-0.02 0z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3.5 w-full">
                            <div class="flex w-full items-center">
                                <div class="mr-4 font-medium">Bitcoin</div>
                                <span class="ml-auto font-medium">21.10 BTC</span>
                            </div>
                            <div class="mt-0.5 flex w-full items-center">
                                <a
                                    class="text-xs text-primary"
                                    href=""
                                >
                                    Buy
                                </a>
                                <div class="ml-auto text-xs text-slate-500">
                                    Today, 18.40
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3.5 flex items-center border-b border-dashed pb-3.5 last:mb-0 last:border-0 last:pb-0">
                        <div>
                            <div class="h-10 w-10 cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                                <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 336.41 337.42"
                                    >
                                        <defs></defs>
                                        <title>Asset 1</title>
                                        <g data-name="Layer 2">
                                            <g data-name="Layer 1">
                                                <path
                                                    fill="#f0b90b"
                                                    d="M168.2.71l41.5,42.5L105.2,147.71l-41.5-41.5Z"
                                                />
                                                <path
                                                    fill="#f0b90b"
                                                    d="M231.2,63.71l41.5,42.5L105.2,273.71l-41.5-41.5Z"
                                                />
                                                <path
                                                    fill="#f0b90b"
                                                    d="M42.2,126.71l41.5,42.5-41.5,41.5L.7,169.21Z"
                                                />
                                                <path
                                                    fill="#f0b90b"
                                                    d="M294.2,126.71l41.5,42.5L168.2,336.71l-41.5-41.5Z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3.5 w-full">
                            <div class="flex w-full items-center">
                                <div class="mr-4 font-medium">Binance</div>
                                <span class="ml-auto font-medium">231.50 BUSD</span>
                            </div>
                            <div class="mt-0.5 flex w-full items-center">
                                <a
                                    class="text-xs text-primary"
                                    href=""
                                >
                                    Buy
                                </a>
                                <div class="ml-auto text-xs text-slate-500">
                                    Today, 08.01
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3.5 flex items-center border-b border-dashed pb-3.5 last:mb-0 last:border-0 last:pb-0">
                        <div>
                            <div class="h-10 w-10 cursor-pointer rounded-full border border-primary/80 bg-slate-50 p-0.5">
                                <div class="h-full w-full rounded-full border border-slate-300/70 bg-white p-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="100%"
                                        height="100%"
                                        viewBox="0 0 1503 1504"
                                        fill="none"
                                    >
                                        <rect
                                            x="287"
                                            y="258"
                                            width="928"
                                            height="844"
                                            fill="white"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M1502.5 752C1502.5 1166.77 1166.27 1503 751.5 1503C336.734 1503 0.5 1166.77 0.5 752C0.5 337.234 336.734 1 751.5 1C1166.27 1 1502.5 337.234 1502.5 752ZM538.688 1050.86H392.94C362.314 1050.86 347.186 1050.86 337.962 1044.96C327.999 1038.5 321.911 1027.8 321.173 1015.99C320.619 1005.11 328.184 991.822 343.312 965.255L703.182 330.935C718.495 303.999 726.243 290.531 736.021 285.55C746.537 280.2 759.083 280.2 769.599 285.55C779.377 290.531 787.126 303.999 802.438 330.935L876.42 460.079L876.797 460.738C893.336 489.635 901.723 504.289 905.385 519.669C909.443 536.458 909.443 554.169 905.385 570.958C901.695 586.455 893.393 601.215 876.604 630.549L687.573 964.702L687.084 965.558C670.436 994.693 661.999 1009.46 650.306 1020.6C637.576 1032.78 622.263 1041.63 605.474 1046.62C590.161 1050.86 573.004 1050.86 538.688 1050.86ZM906.75 1050.86H1115.59C1146.4 1050.86 1161.9 1050.86 1171.13 1044.78C1181.09 1038.32 1187.36 1027.43 1187.92 1015.63C1188.45 1005.1 1181.05 992.33 1166.55 967.307C1166.05 966.455 1165.55 965.588 1165.04 964.706L1060.43 785.75L1059.24 783.735C1044.54 758.877 1037.12 746.324 1027.59 741.472C1017.08 736.121 1004.71 736.121 994.199 741.472C984.605 746.453 976.857 759.552 961.544 785.934L857.306 964.891L856.949 965.507C841.69 991.847 834.064 1005.01 834.614 1015.81C835.352 1027.62 841.44 1038.5 851.402 1044.96C860.443 1050.86 875.94 1050.86 906.75 1050.86Z"
                                            fill="#E84142"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3.5 w-full">
                            <div class="flex w-full items-center">
                                <div class="mr-4 font-medium">Avalanche</div>
                                <span class="ml-auto font-medium">132.20 AVAX</span>
                            </div>
                            <div class="mt-0.5 flex w-full items-center">
                                <a
                                    class="text-xs text-primary"
                                    href=""
                                >
                                    Buy
                                </a>
                                <div class="ml-auto text-xs text-slate-500">
                                    Today, 03.31
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
