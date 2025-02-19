<!-- BEGIN: Modal Content -->
<x-base.dialog id="dashboard-firstlogin-preview"
size="xl"
staticBackdrop
>
    <x-base.dialog.panel>
        <a
            class="absolute right-0 top-0 mr-3 mt-3"
            data-tw-dismiss="modal"
            href="#"
        >
            <x-base.lucide
                class="h-8 w-8 text-slate-400"
                icon="X"
            />
        </a>
        {{-- <div class="absolute left-0 top-0 ml-3 mt-3  bg-primary text-white text-sm font-semibold px-2 py-1 rounded">
            Step <span class="current-step"> 01 </span> of <span class="total-step">02</span>
        </div> --}}
        <div class="p-5 text-center">
            <x-base.lucide
                class="mx-auto mt-3 h-8 w-8 text-success"
                icon="CheckCircle"
            />
            <div id="titleModal" class="mt-5 text-2xl">Let’s do the initial setup</div>
        </div>
        <div id="step-1" class=" flex flex-col px-16 pt-5 pb-16">
            <form id="step1-form" action="" method="POST">
                <input type="hidden" name="company_logo" id="company_logo" />
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
            <div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Organization/Company</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Enter your full legal Business or Organization name as it appears on your
                                official document.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <div class="flex flex-col items-center md:flex-row">
                            <x-base.form-input
                                type="text"
                                class="step1__input"
                                placeholder="Example Company Ltd"
                                name="company_name"
                            />
                            
                        </div>
                        
                        <div id="error-company_name" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Phone Number</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Please provide a valid phone number where we can reach
                                you if needed.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <div class="flex flex-col items-center md:flex-row">
                            {{-- <x-base.form-input
                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                type="text"
                                placeholder="+44 123 456 7890"
                                name="company_phone"
                            />
                            <x-base.form-select
                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 md:w-36 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                            >
                                <option value="office">Office</option>
                            </x-base.form-select> --}}

                            <x-base.form-input
                            type="text"
                            placeholder="+44 123 456 7890"
                            name="company_phone"
                            />
                        </div>
                        
                        <div id="error-company_phone" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Business Type</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Your Company type determines the features and
                                privileges you will have on this platform.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <div class="flex flex-col items-center md:flex-row">
                            <div
                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                <x-base.form-check>
                                    <x-base.form-check.input
                                        id="checkbox-switch-4"
                                        type="radio"
                                        value="Sole trader"
                                        name="business_type"
                                    />
                                    <x-base.form-check.label for="checkbox-switch-4">
                                        Sole trader
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            
                            <div
                                class="w-full  border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                <x-base.form-check>
                                    <x-base.form-check.input
                                        id="checkbox-switch-5"
                                        type="radio"
                                        value="Company"
                                        name="business_type"
                                    />
                                    <x-base.form-check.label for="checkbox-switch-5">
                                        Company
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            <div
                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                <x-base.form-check>
                                    <x-base.form-check.input
                                        id="checkbox-switch-6"
                                        type="radio"
                                        value="Other"
                                        name="business_type"
                                    />
                                    <x-base.form-check.label for="checkbox-switch-6">
                                        Other
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                        </div>
                        <div id="error-business_type" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div id="company_register_no"
                    class="mt-5 flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center" style="display: none;">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Registration Number</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Enter Company Registration Number
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder=""
                            name="company_registration"
                        />
                        
                        <div id="error-company_registration" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Address Line 1</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Enter the primary line of your physical address,
                                typically including your house or building number and
                                street name.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder="123 Main Street"
                            name="company_address_line_1"
                        />
                        
                        <div id="error-company_address_line_1" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Address Line 2</div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                This field is optional and can be used to provide any
                                additional address details, such as apartment number,
                                suite, floor, or any other relevant information.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder="Apartment 123"
                            name="company_address_line_2"
                        />
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Town</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Enter the name of the city or locality where your
                                address is located.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder="London"
                            name="company_city"
                        />
                        <div id="error-company_city" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">County</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Please select your state or province from the provided
                                list.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder="London"
                            name="company_state"
                        />
                        <div id="error-company_state" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Post Code</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Enter the postal code or ZIP code associated with your
                                address.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder="SW1W 0NY"
                            name="company_postal_code"
                        />
                        <div id="error-company_postal_code" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Country</div>
                                <div
                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                    Required
                                </div>
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Please specify the country you are currently residing
                                in.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.tom-select
                            class="w-full"
                            data-placeholder="Select your country"
                            name="company_country"
                        >
                                <option value="">Please select</option>
                                @foreach ($countries as $fakerKey => $faker)
                                    <option @if($faker['name'] == "United Kingdom") selected @endif value="{{ $fakerKey }}">
                                        {{ $faker['name'] }}
                                    </option>
                                @endforeach
                        </x-base.tom-select>
                        <div id="error-company_country" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
                <div
                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Vat Number</div>
                                
                            </div>
                            {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                Enter your VAT number if you have one. This field is
                                optional.
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                        <x-base.form-input
                            type="text"
                            placeholder="GB123456789"
                            name="company_vat"
                        />
                        <div id="error-company_vat" class="step1__input-error text-danger mt-2 dark:text-orange-400"></div>
                    </div>
                </div>
            </div>
            </form>
            <div
                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                    <div class="text-left">
                        <div class="flex items-center">
                            <div class="font-medium">Company Logo</div>
                            
                        </div>
                        {{-- <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                            Upload Company logo. if you don't have one now, you can
                            skip this step.
                        </div> --}}
                    </div>
                </div>
                <div class="mt-3 w-full flex-1 xl:mt-0">
                    
                        
                        <form id="myDropzone" action="" class="dropzone [&.dropzone]:border-2 [&.dropzone]:border-dashed dropzone [&.dropzone]:border-slate-300/70 [&.dropzone]:bg-slate-50 [&.dropzone]:cursor-pointer [&.dropzone]:dark:bg-darkmode-600 [&.dropzone]:dark:border-white/5 dz-clickable" id="my-dropzone">
                            @csrf
                            <div class="fallback">
                                <input
                                    name="file"
                                    type="file"
                                />
                            </div>
                            <div class="dz-message">
                                <div class="text-lg font-medium">
                                    Drop files here or click to upload.
                                </div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are
                                    <span class="font-medium">not</span> actually
                                    uploaded.
                                </div>
                            </div>
                            <input type="hidden" name="pid" value="{{ auth()->user()->id }}" />
                        </form>
                        <div id="uploaded-view" class="border-dashed pt-5 mt-5 border-slate-300/60 rounded border-2 px-3 hidden"></div>

                </div>
            </div>
            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end ">
                <x-base.button
                    class="w-full border-primary/50 px-4 md:w-auto"
                    variant="outline-primary"
                    id="btn-step1"
                >
                    <span class="step1-text">Save and Exit</span>  <x-base.loading-icon
                                                        class="h-6 w-6 hidden step1__loading"
                                                        color="#475569"
                                                        icon="oval"
                                                    />
                </x-base.button>
            </div>
        </div>

    </x-base.dialog.panel>
</x-base.dialog>
<!-- END: Modal Content -->


<x-base.dialog id="successModal">
    <x-base.dialog.panel>
        <div class="p-5 text-center">
            <x-base.lucide class="mx-auto mt-3 h-16 w-16 text-success" icon="CheckCircle" />
            <div class="mt-5 text-3xl successModalTitle">Success!</div>
            <div class="mt-2 text-slate-500 successModalDesc">Initial Setup Done</div>
        </div>
        <div class="px-5 pb-8 text-center">
            <x-base.button class="w-24 successCloser" data-action="NONE"  data-red="#" type="button" variant="primary">Ok</x-base.button>
        </div>
    </x-base.dialog.panel>
</x-base.dialog>