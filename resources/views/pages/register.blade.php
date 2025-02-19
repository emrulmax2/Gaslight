@extends('../themes/base')

@section('head')
    <title>Gas Certificate - New Registration </title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
@endsection

@section('content')
    <div
        class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
        <div @class([
            'relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0',
            "before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5",
        ])>
            <div class="relative z-10 flex h-full w-full flex-col justify-center py-2 lg:py-24">
                <div class="flex h-[55px] w-[55px] items-center justify-center rounded-[0.8rem] border border-primary/30">
                    <div
                        class="relative flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] bg-white bg-gradient-to-b from-theme-1/90 to-theme-2/90">
                        <div class="relative h-[26px] w-[26px] -rotate-45 [&_div]:bg-white">
                            <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[20%] rounded-full opacity-50"></div>
                            <div class="absolute inset-0 m-auto h-[120%] w-[20%] rounded-full"></div>
                            <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[20%] rounded-full opacity-50"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="text-2xl font-medium">Sign Up</div>
                    <div class="mt-2.5 text-slate-600">
                        Already have an account?
                        <a
                            class="font-medium text-primary"
                            href="{{ route('login') }}"
                        >
                            Sign In
                        </a>
                    </div>
                    
                    <div class="mt-6">
                        <form
                        id="register-form"
                        class="mt-6"
                        method="POST">
                        <x-base.form-label>Full Name*</x-base.form-label>
                        <x-base.form-input
                            class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                            type="text"
                            placeholder="David Peterson"
                            name="name"
                        />
                        
                        <div id="error-name" class="register__input-error text-danger mt-2 dark:text-orange-400"></div>
                        <x-base.form-label class="mt-5">Email*</x-base.form-label>
                        <x-base.form-input
                            class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                            type="text"
                            placeholder="{{ $users[0]['email'] }}"
                            name="email"
                        />
                        
                        <div id="error-email" class="register__input-error text-danger mt-2 dark:text-orange-400"></div>
                        <x-base.form-label class="mt-5">Role*</x-base.form-label>
                        <x-base.tom-select
                            class="block rounded-[1rem] border-slate-300/80 px-2 py-1.5"
                            data-placeholder="Please Select your Role"
                            name="role"
                        >
                            <option value="">Please Select</option>
                            <option value="admin">Admin</option>
                            <option value="engineer">Engineer</option>
                        </x-base.tom-select>
                        
                        <div id="error-role" class="register__input-error text-danger mt-2 dark:text-orange-400"></div>
                        <x-base.form-label class="mt-5">Password*</x-base.form-label>
                        <div class="relative">
                        <x-base.form-input
                            class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                            type="password"
                            placeholder="************"
                            name="password"
                            id="password"
                        />
                        <span id="togglePasswordShow" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                            <i id="togglePasswordIcon" data-lucide="eye-off"></i>
                        </span>
                        </div>
                        
                        <div id="error-password" class="register__input-error text-danger mt-2 dark:text-orange-400"></div>
                        <div id="password-strength" class="mt-3.5 grid h-1.5 w-full grid-cols-12 gap-4">
                            <div class="col-span-3 h-full rounded border border-slate-400/20 bg-slate-400/30"></div>
                            <div class="col-span-3 h-full rounded border border-slate-400/20 bg-slate-400/30"></div>
                            <div class="col-span-3 h-full rounded border border-slate-400/20 bg-slate-400/30"></div>
                            <div class="col-span-3 h-full rounded border border-slate-400/20 bg-slate-400/30"></div>
                        </div>
                        <a
                            class="mt-3 block text-xs text-slate-500/80 sm:text-sm"
                            href=""
                        >
                            What is a secure password?
                        </a>
                        <x-base.form-label class="mt-5">Password Confirmation*</x-base.form-label>
                        <div class="relative">
                            <x-base.form-input
                                class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                                type="password"
                                placeholder="************"
                                name="password_confirmation"
                                id="password_confirmation"
                            />
                            <span id="toggleConfirmPasswordShow" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" >
                                <i id="togglePasswordConfirmationIcon" data-lucide="eye-off"></i>
                            </span>
                        </div>
                        <div class="mt-5 flex items-center text-xs text-slate-500 sm:text-sm">
                            <x-base.form-check.input
                                class="mr-2 border"
                                id="terms"
                                type="checkbox"
                                name="terms"
                            />
                            <label
                                class="cursor-pointer select-none"
                                for="terms"
                            >
                                I agree to the 
                            </label>
                            <a
                                class="ml-1 mr-1 text-primary dark:text-slate-200"
                                href=""
                            >Term & Conditions</a> and
                            <a
                                class="ml-1 text-primary dark:text-slate-200"
                                href=""
                            >
                                Privacy Policy
                            </a>
                            .
                            
                        </div>
                        <div id="error-terms" class="register__input-error text-danger mt-2 dark:text-orange-400"></div>
                        {{-- <div class="g-recaptcha mt-5 text-center xl:mt-8 xl:text-left" data-sitekey="6Lcm-NkqAAAAAKHwPaoF1krwOMOtfVgB0V3N2nuD"></div> --}}
                        
                    </form>
                    <x-base.alert
                        id="register-success"
                        class="my-7 flex items-center rounded-[0.6rem] border-primary/20 bg-primary/5 px-4 py-3 leading-[1.7] hidden"
                        variant="outline-primary"
                    >
                        <div class="">
                            <x-base.lucide
                                class="mr-2 h-7 w-7 fill-primary/10 stroke-[0.8]"
                                icon="Lightbulb"
                            />
                        </div>
                        <div class="ml-1 mr-8">
                            Register <span class="font-medium">Sucessful</span>! check the
                            <span id="email" class="font-medium">given email</span> for the verification link.
                        </div>
                        <x-base.alert.dismiss-button class="btn-close text-primary">
                            <x-base.lucide
                                class="w-5 h-5"
                                icon="X"
                            />
                        </x-base.alert.dismiss-button>
                    </x-base.alert>

                        <div class="mt-5 text-center xl:mt-8 xl:text-left">
                            <x-base.button
                                id="btn-register"
                                class="w-full bg-gradient-to-r from-theme-1/70 to-theme-2/70 py-3.5 xl:mr-3"
                                variant="primary"
                                rounded
                            >
                                <span class="register-text">Register Now </span> <x-base.loading-icon
                                class="h-6 w-6 hidden register__loading"
                                icon="oval" color="#fff"
                            />
                            </x-base.button>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fixed inset-0 grid h-screen w-screen grid-cols-12 pl-14 pr-12 lg:max-w-[1550px] xl:px-24 2xl:max-w-[1750px]">
        <div @class([
            'relative h-screen col-span-12 lg:col-span-5 2xl:col-span-4 z-20',
            "after:bg-white after:hidden after:lg:block after:content-[''] after:absolute after:right-0 after:inset-y-0 after:bg-gradient-to-b after:from-white after:to-slate-100/80 after:w-[800%] after:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]",
            "before:content-[''] before:hidden before:lg:block before:absolute before:right-0 before:inset-y-0 before:my-6 before:bg-gradient-to-b before:from-white/10 before:to-slate-50/10 before:bg-white/50 before:w-[800%] before:-mr-4 before:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]",
        ])></div>
        <div @class([
            'h-full col-span-7 2xl:col-span-8 lg:relative',
            "before:content-[''] before:absolute before:lg:-ml-10 before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%]",
            "after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat",
        ])>
            <div class="sticky top-0 z-10 ml-16 hidden h-screen flex-col justify-center lg:flex xl:ml-28 2xl:ml-36">
                <div class="text-[2.6rem] font-medium leading-[1.4] text-white xl:text-5xl xl:leading-[1.2]">
                    Embrace Excellence <br> in Dashboard Development
                </div>
                <div class="mt-5 text-base leading-relaxed text-white/70 xl:text-lg">
                    Unlock the potential of Tailwise, where developers craft
                    meticulously structured, visually stunning dashboards with
                    feature-rich modules. Join us today to shape the future of your
                    application development.
                </div>
                <div class="mt-10 flex flex-col gap-3 xl:flex-row xl:items-center">
                    <div class="flex items-center">
                        <div class="image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                            <x-base.tippy
                                class="rounded-full border-[3px] border-white/50"
                                src="{{ Vite::asset($users[0]['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                                as="img"
                                content="{{ $users[0]['name'] }}"
                            />
                        </div>
                        <div class="image-fit zoom-in -ml-3 h-9 w-9 2xl:h-11 2xl:w-11">
                            <x-base.tippy
                                class="rounded-full border-[3px] border-white/50"
                                src="{{ Vite::asset($users[1]['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                                as="img"
                                content="{{ $users[1]['name'] }}"
                            />
                        </div>
                        <div class="image-fit zoom-in -ml-3 h-9 w-9 2xl:h-11 2xl:w-11">
                            <x-base.tippy
                                class="rounded-full border-[3px] border-white/50"
                                src="{{ Vite::asset($users[2]['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                                as="img"
                                content="{{ $users[2]['name'] }}"
                            />
                        </div>
                        <div class="image-fit zoom-in -ml-3 h-9 w-9 2xl:h-11 2xl:w-11">
                            <x-base.tippy
                                class="rounded-full border-[3px] border-white/50"
                                src="{{ Vite::asset($users[3]['photo']) }}"
                                alt="Tailwise - Admin Dashboard Template"
                                as="img"
                                content="{{ $users[3]['name'] }}"
                            />
                        </div>
                    </div>
                    <div class="text-base text-white/70 xl:ml-2 2xl:ml-3">
                        Over 7k+ strong and growing! Your journey begins here.
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <ThemeSwitcher /> --}}

@endsection
@pushOnce('vendors')
    @vite('resources/js/utils/helper.js')
    @vite('resources/js/vendors/axios.js')
    @vite('resources/js/vendors/toastify.js')
@endPushOnce

@pushOnce('scripts')
    <script type="module">
        
        (function () {
            document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });

        function togglePasswordVisibility(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.setAttribute('data-lucide', 'eye');
            } else {
                passwordInput.type = 'password';
                icon.setAttribute('data-lucide', 'eye-off');
            }
            lucide.createIcons();
        }

        function evaluatePasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBars = document.querySelectorAll('#password-strength > div');
            let strength = 0;

            if (password.length >= 8) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;

            strengthBars.forEach((bar, index) => {
                if (index < strength) {
                    bar.classList.add('bg-theme-1/30');
                    bar.classList.remove('bg-slate-400/30');
                } else {
                    bar.classList.add('bg-slate-400/30');
                    bar.classList.remove('bg-theme-1/30');
                }
            });
        }
            async function register() {
                // Reset state
                $('#register-form').find('.register__input').removeClass('border-danger')
                $('#register-form').find('.register__input-error').html('')

                // Create FormData object
                let formData = new FormData(document.getElementById('register-form'));

                $('.register-text').addClass('hidden');
                $('#btn-register .register__loading').removeClass('hidden');
                // Loading state
                await helper.delay(1500)

                axios.post(route('register'), formData)
                    .then(res => {
                        // Show Toastify message
                        $("#register-success").removeClass('hidden');

                        // Redirect to login after a short delay
                        setTimeout(() => {
                            location.href = route('login');
                        }, 3000);
                    })
                    .catch(err => {
                        $('#btn-register .register__loading').addClass('hidden');
                        $('.register-text').removeClass('hidden');
                        if (err.response && err.response.data.errors) {
                            for (const [key, val] of Object.entries(err.response.data.errors)) {
                                $(`#${key}`).addClass('border-danger')
                                $(`#error-${key}`).html(val)
                            }
                        } else if (err.response && err.response.data.error) {
                            Toastify({
                                text: err.response.data.error,
                                duration: 3000,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "right", // `left`, `center` or `right`
                                backgroundColor: "#FF0000",
                            }).showToast();
                        }
                    });
            }

            $('#register-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    register()
                }
            })

            $('#btn-register').on('click', function() {
                register()
            })

            $('#password').on('input', function() {
                evaluatePasswordStrength()
            })
            $('#togglePasswordShow').on('click', function() {
                togglePasswordVisibility('password', 'togglePasswordIcon')
            })
            $('#toggleConfirmPasswordShow').on('click', function() {
                togglePasswordVisibility('password_confirmation', 'togglePasswordConfirmationIcon')
            })
        })();
    </script>
@endPushOnce