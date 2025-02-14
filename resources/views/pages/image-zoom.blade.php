@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Tailwise - Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Image Zoom
                </div>
                <div class="mx-3 hidden group-[.mode--light]:text-white/80 lg:block">
                    •
                </div>
                <div class="hidden leading-relaxed text-slate-500 group-[.mode--light]:text-white/80 lg:block">
                    Elevate user experiences by allowing them to zoom in and explore
                    details effortlessly.
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">
                                    Implementation
                                </div>
                                <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                                    Image zoom functionality allows users to interactively
                                    enlarge and inspect images by zooming in and panning
                                    around. This feature is particularly useful for
                                    showcasing high-resolution images, products, or detailed
                                    visual content. This section demonstrates how to
                                    implement image zoom in your web application.
                                </p>
                                <div
                                    class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 px-3 ml-4 -mt-2 text-xs uppercase bg-white text-slate-500">
                                        <div class="-mt-px">Example code / preview</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div class="leading-relaxed">
                                                <p class="mb-5">
                                                    Trust fund seitan chia, wolf lomo letterpress
                                                    Bushwick before they sold out. Carles kogi
                                                    fixie, squid twee Tonx readymade cred typewriter
                                                    scenester locavore kale chips vegan organic.
                                                    Meggings pug wolf Shoreditch typewriter
                                                    skateboard. McSweeney's iPhone chillwave, food
                                                    truck direct trade disrupt flannel irony tousled
                                                    Cosby sweater single-origin coffee. Organic
                                                    disrupt bicycle rights, tattooed messenger bag
                                                    flannel craft beer fashion axe bitters.
                                                    Readymade sartorial craft beer, quinoa
                                                    sustainable butcher Marfa Echo Park Terry
                                                    Richardson gluten-free flannel retro cred mlkshk
                                                    banjo. Salvia 90's art party Blue Bottle, PBR&B
                                                    cardigan 8-bit.
                                                </p>
                                                <p class="mb-5">
                                                    Meggings irony fashion axe, tattooed master
                                                    cleanse Blue Bottle stumptown bitters authentic
                                                    flannel freegan paleo letterpress ugh sriracha.
                                                    Wolf PBR&B art party aesthetic meh cliche.
                                                    Sartorial before they sold out deep v, aesthetic
                                                    PBR&B craft beer post-ironic synth keytar pork
                                                    belly skateboard pour-over. Tonx cray pug Etsy,
                                                    gastropub ennui wolf ethnic Odd Future viral
                                                    master cleanse skateboard banjo. Pitchfork
                                                    scenester cornhole, whatever try-hard ethnic
                                                    banjo +1 gastropub American Apparel vinyl
                                                    skateboard Shoreditch seitan. Blue Bottle
                                                    keffiyeh Austin Helvetica art party. Portland
                                                    ethnic fixie, beard retro direct trade ugh
                                                    scenester Tumblr readymade authentic plaid
                                                    pickled hashtag biodiesel.
                                                </p>
                                                <div class="w-full h-64 my-5 image-fit">
                                                    <x-base.image-zoom
                                                        class="w-full rounded-md"
                                                        src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                                <p class="mb-5">
                                                    Thundercats freegan Truffaut, four loko twee
                                                    Austin scenester lo-fi seitan High Life paleo
                                                    quinoa cray. Schlitz butcher ethical Tumblr,
                                                    pop-up DIY keytar ethnic iPhone PBR sriracha.
                                                    Tonx direct trade bicycle rights gluten-free
                                                    flexitarian asymmetrical. Whatever drinking
                                                    vinegar PBR XOXO Bushwick gentrify. Cliche
                                                    semiotics banjo retro squid Wes Anderson.
                                                    Fashion axe dreamcatcher you probably haven't
                                                    heard of them bicycle rights. Tote bag organic
                                                    four loko ethical selfies gastropub, PBR
                                                    fingerstache tattooed bicycle rights.
                                                </p>
                                                <p class="mb-5">
                                                    Ugh Portland Austin, distillery tattooed
                                                    typewriter polaroid pug Banksy Neutra keffiyeh.
                                                    Shoreditch mixtape wolf PBR&B, tote bag
                                                    dreamcatcher literally bespoke Odd Future
                                                    selfies 90's master cleanse vegan. Flannel tofu
                                                    deep v next level pickled, authentic Etsy
                                                    Shoreditch literally swag photo booth iPhone pug
                                                    semiotics banjo. Bicycle rights butcher Blue
                                                    Bottle, actually DIY semiotics Banksy banjo
                                                    mixtape Austin pork belly post-ironic. American
                                                    Apparel gastropub hashtag, McSweeney's master
                                                    cleanse occupy High Life bitters wayfarers next
                                                    level bicycle rights. Wolf chia Terry
                                                    Richardson, pop-up plaid kitsch ugh. Butcher +1
                                                    Carles, swag selfies Blue Bottle viral.
                                                </p>
                                                <p class="mb-5">
                                                    Keffiyeh food truck organic letterpress leggings
                                                    iPhone four loko hella pour-over occupy, Wes
                                                    Anderson cray post-ironic. Neutra retro fixie
                                                    gastropub +1, High Life semiotics. Vinyl
                                                    distillery Etsy freegan flexitarian cliche jean
                                                    shorts, Schlitz wayfarers skateboard tousled
                                                    irony locavore XOXO meh. Ethnic Wes Anderson
                                                    McSweeney's messenger bag, mixtape XOXO
                                                    slow-carb cornhole aesthetic Marfa banjo
                                                    Thundercats bitters. Raw denim banjo typewriter
                                                    cray Tumblr, High Life single-origin coffee.
                                                    90's Tumblr cred, Terry Richardson occupy raw
                                                    denim tofu fashion axe photo booth banh mi.
                                                    Trust fund locavore Helvetica, fashion axe
                                                    selvage authentic Shoreditch swag selfies
                                                    stumptown +1.
                                                </p>
                                                <div class="float-left w-3/5 h-64 mr-6 image-fit">
                                                    <x-base.image-zoom
                                                        class="w-full rounded-md"
                                                        src="{{ Vite::asset($products[0]['images'][1]['path']) }}"
                                                        alt="Tailwise - Admin Dashboard Template"
                                                    />
                                                </div>
                                                <p class="mb-5">
                                                    Scenester chambray slow-carb, trust fund
                                                    biodiesel ugh bicycle rights cornhole. Gentrify
                                                    messenger bag Truffaut tousled roof party pork
                                                    belly leggings, photo booth jean shorts. Austin
                                                    readymade PBR plaid chambray. Squid Echo Park
                                                    pour-over, wayfarers forage whatever locavore
                                                    typewriter artisan deep v four loko. Locavore
                                                    occupy Neutra Pitchfork McSweeney's, wayfarers
                                                    fingerstache. Actually asymmetrical drinking
                                                    vinegar yr brunch biodiesel. Before they sold
                                                    out sustainable readymade craft beer Portland
                                                    gastropub squid Austin, roof party Thundercats
                                                    chambray narwhal Bushwick pug.
                                                </p>
                                                <p class="mb-5">
                                                    Literally typewriter chillwave, bicycle rights
                                                    Carles flannel wayfarers. Biodiesel
                                                    farm-to-table actually, locavore keffiyeh hella
                                                    shabby chic pour-over try-hard Bushwick.
                                                    Sriracha American Apparel Brooklyn, synth cray
                                                    stumptown blog Bushwick +1 VHS hashtag. Wolf
                                                    umami Carles Marfa, 90's food truck Cosby
                                                    sweater. Fanny pack try-hard keytar pop-up
                                                    readymade, master cleanse four loko trust fund
                                                    polaroid salvia. Photo booth kitsch forage
                                                    chambray, Carles scenester slow-carb lomo
                                                    cardigan dreamcatcher. Swag asymmetrical
                                                    leggings, biodiesel Tonx shabby chic ethnic
                                                    master cleanse freegan.
                                                </p>
                                                <p>
                                                    Raw denim Banksy shabby chic, 8-bit salvia
                                                    narwhal fashion axe. Ethical Williamsburg four
                                                    loko, chia kale chips distillery Shoreditch
                                                    messenger bag swag iPhone Pitchfork. Viral PBR&B
                                                    single-origin coffee quinoa readymade, ethical
                                                    chillwave drinking vinegar gluten-free Wes
                                                    Anderson kitsch Tumblr synth actually bitters.
                                                    Butcher McSweeney's forage mlkshk kogi
                                                    fingerstache. Selvage scenester butcher
                                                    Shoreditch, Carles beard plaid disrupt DIY. Pug
                                                    readymade selvage retro, Austin salvia vinyl
                                                    master cleanse flexitarian deep v bicycle rights
                                                    plaid Terry Richardson mlkshk pour-over. Trust
                                                    fund try-hard banh mi Brooklyn, 90's Etsy kogi
                                                    YOLO salvia.
                                                </p>
                                            </div>
                                        </x-base.preview>
                                        <x-base.source>
                                            <x-base.highlight>
                                                <div class="leading-relaxed">
                                                    <p class="mb-5">
                                                        Trust fund seitan chia, wolf lomo letterpress Bushwick before
                                                        they sold out. Carles kogi fixie, squid twee Tonx readymade
                                                        cred typewriter scenester locavore kale chips vegan organic.
                                                        Meggings pug wolf Shoreditch typewriter skateboard.
                                                        McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                                                        flannel irony tousled Cosby sweater single-origin coffee.
                                                        Organic disrupt bicycle rights, tattooed messenger bag flannel
                                                        craft beer fashion axe bitters. Readymade sartorial craft
                                                        beer, quinoa sustainable butcher Marfa Echo Park Terry
                                                        Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                                                        90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                                                    </p>
                                                    <p class="mb-5">
                                                        Meggings irony fashion axe, tattooed master cleanse Blue
                                                        Bottle stumptown bitters authentic flannel freegan paleo
                                                        letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                                                        cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                                                        craft beer post-ironic synth keytar pork belly skateboard
                                                        pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                                                        Future viral master cleanse skateboard banjo. Pitchfork
                                                        scenester cornhole, whatever try-hard ethnic banjo +1
                                                        gastropub American Apparel vinyl skateboard Shoreditch seitan.
                                                        Blue Bottle keffiyeh Austin Helvetica art party. Portland
                                                        ethnic fixie, beard retro direct trade ugh scenester Tumblr
                                                        readymade authentic plaid pickled hashtag biodiesel.
                                                    </p>
                                                    <div class="w-full h-64 my-5 image-fit">
                                                        <img
                                                            class="w-full rounded-md"
                                                            src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                    <p class="mb-5">
                                                        Thundercats freegan Truffaut, four loko twee Austin scenester
                                                        lo-fi seitan High Life paleo quinoa cray. Schlitz butcher
                                                        ethical Tumblr, pop-up DIY keytar ethnic iPhone PBR sriracha.
                                                        Tonx direct trade bicycle rights gluten-free flexitarian
                                                        asymmetrical. Whatever drinking vinegar PBR XOXO Bushwick
                                                        gentrify. Cliche semiotics banjo retro squid Wes Anderson.
                                                        Fashion axe dreamcatcher you probably haven\'t heard of them
                                                        bicycle rights. Tote bag organic four loko ethical selfies
                                                        gastropub, PBR fingerstache tattooed bicycle rights.
                                                    </p>
                                                    <p class="mb-5">
                                                        Ugh Portland Austin, distillery tattooed typewriter polaroid
                                                        pug Banksy Neutra keffiyeh. Shoreditch mixtape wolf PBR&B,
                                                        tote bag dreamcatcher literally bespoke Odd Future selfies
                                                        90\'s master cleanse vegan. Flannel tofu deep v next level
                                                        pickled, authentic Etsy Shoreditch literally swag photo booth
                                                        iPhone pug semiotics banjo. Bicycle rights butcher Blue
                                                        Bottle, actually DIY semiotics Banksy banjo mixtape Austin
                                                        pork belly post-ironic. American Apparel gastropub hashtag,
                                                        McSweeney\'s master cleanse occupy High Life bitters wayfarers
                                                        next level bicycle rights. Wolf chia Terry Richardson, pop-up
                                                        plaid kitsch ugh. Butcher +1 Carles, swag selfies Blue Bottle
                                                        viral.
                                                    </p>
                                                    <p class="mb-5">
                                                        Keffiyeh food truck organic letterpress leggings iPhone four
                                                        loko hella pour-over occupy, Wes Anderson cray post-ironic.
                                                        Neutra retro fixie gastropub +1, High Life semiotics. Vinyl
                                                        distillery Etsy freegan flexitarian cliche jean shorts,
                                                        Schlitz wayfarers skateboard tousled irony locavore XOXO meh.
                                                        Ethnic Wes Anderson McSweeney\'s messenger bag, mixtape XOXO
                                                        slow-carb cornhole aesthetic Marfa banjo Thundercats bitters.
                                                        Raw denim banjo typewriter cray Tumblr, High Life
                                                        single-origin coffee. 90\'s Tumblr cred, Terry Richardson
                                                        occupy raw denim tofu fashion axe photo booth banh mi. Trust
                                                        fund locavore Helvetica, fashion axe selvage authentic
                                                        Shoreditch swag selfies stumptown +1.
                                                    </p>
                                                    <div class="float-left w-3/5 h-64 mr-6 image-fit">
                                                        <img
                                                            class="w-full rounded-md"
                                                            src="{{ Vite::asset($products[0]['images'][1]['path']) }}"
                                                            alt="Tailwise - Admin Dashboard Template"
                                                        />
                                                    </div>
                                                    <p class="mb-5">
                                                        Scenester chambray slow-carb, trust fund biodiesel ugh bicycle
                                                        rights cornhole. Gentrify messenger bag Truffaut tousled roof
                                                        party pork belly leggings, photo booth jean shorts. Austin
                                                        readymade PBR plaid chambray. Squid Echo Park pour-over,
                                                        wayfarers forage whatever locavore typewriter artisan deep v
                                                        four loko. Locavore occupy Neutra Pitchfork McSweeney\'s,
                                                        wayfarers fingerstache. Actually asymmetrical drinking vinegar
                                                        yr brunch biodiesel. Before they sold out sustainable
                                                        readymade craft beer Portland gastropub squid Austin, roof
                                                        party Thundercats chambray narwhal Bushwick pug.
                                                    </p>
                                                    <p class="mb-5">
                                                        Literally typewriter chillwave, bicycle rights Carles flannel
                                                        wayfarers. Biodiesel farm-to-table actually, locavore keffiyeh
                                                        hella shabby chic pour-over try-hard Bushwick. Sriracha
                                                        American Apparel Brooklyn, synth cray stumptown blog Bushwick
                                                        +1 VHS hashtag. Wolf umami Carles Marfa, 90\'s food truck
                                                        Cosby sweater. Fanny pack try-hard keytar pop-up readymade,
                                                        master cleanse four loko trust fund polaroid salvia. Photo
                                                        booth kitsch forage chambray, Carles scenester slow-carb lomo
                                                        cardigan dreamcatcher. Swag asymmetrical leggings, biodiesel
                                                        Tonx shabby chic ethnic master cleanse freegan.
                                                    </p>
                                                    <p>
                                                        Raw denim Banksy shabby chic, 8-bit salvia narwhal fashion
                                                        axe. Ethical Williamsburg four loko, chia kale chips
                                                        distillery Shoreditch messenger bag swag iPhone Pitchfork.
                                                        Viral PBR&B single-origin coffee quinoa readymade, ethical
                                                        chillwave drinking vinegar gluten-free Wes Anderson kitsch
                                                        Tumblr synth actually bitters. Butcher McSweeney\'s forage
                                                        mlkshk kogi fingerstache. Selvage scenester butcher
                                                        Shoreditch, Carles beard plaid disrupt DIY. Pug readymade
                                                        selvage retro, Austin salvia vinyl master cleanse flexitarian
                                                        deep v bicycle rights plaid Terry Richardson mlkshk pour-over.
                                                        Trust fund try-hard banh mi Brooklyn, 90\'s Etsy kogi YOLO
                                                        salvia.
                                                    </p>
                                                </div>
                                            </x-base.highlight>
                                        </x-base.source>
                                    </div>
                                </div>
                            </div>
                        </x-base.preview-component>
                    </div>
                    <div class="flex flex-col p-5 box box--stacked">
                        <div
                            class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
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
                                    <div class="-mt-px">ImageZoom</div>
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
                                    class="block -mt-px truncate"
                                    href=""
                                >
                                    Implementation
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
