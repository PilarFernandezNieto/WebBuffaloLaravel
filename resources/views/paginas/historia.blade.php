<x-app-layout pageTitle="Historia">

    {{-- HERO OSCURO A SANGRE --}}
    <section
        class="relative flex items-end min-h-[clamp(415px,58vh,600px)] bg-ink-hero border-b-[3px] border-ink overflow-hidden">
        <img src="{{ asset('img/risas_trio.webp') }}" alt="The Electric Buffalo riendo en el local de ensayo"
            class="absolute inset-0 w-full h-full object-cover object-[80%_10%] md:object-[50%_18%]">
        <div class="absolute inset-0 bg-gradient-to-t from-ink-hero/90 via-ink-hero/35 to-transparent"></div>
        <div class="relative z-10 w-full max-w-content mx-auto px-edge pb-[clamp(32px,5vw,48px)]">
            <div class="flex items-center gap-3 mb-3">
                <span class="inline-block h-px w-11 bg-amber"></span>
                <span
                    class="font-titulo italic text-amber text-sm font-semibold uppercase tracking-[1.2px]">Historia</span>
            </div>
            <h1
                class="font-titulo font-black uppercase text-cream-white leading-[1] tracking-[-0.02em] text-[clamp(30px,3.6vw,42px)]">
                15 años de rock</h1>
            <p class="mt-4 font-cuerpo text-onblack-body text-base max-w-[56ch]">Desde un garito de costumbres
                rockeras en Oviedo, 2006. Sin prisa y sin pretensiones.</p>
        </div>
        <p class="absolute right-edge bottom-3 font-titulo italic text-[12px] text-onblack-body/80">Foto de Manfred
        </p>
    </section>

    <div class="max-w-content mx-auto px-edge py-section-lg space-y-section-lg">

        {{-- 2006 · LA IDEA --}}
        <section class="flex flex-wrap gap-cols-lg items-start">
            <div class="flex-1 min-w-[300px] basis-[480px]">
                <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-4">
                    2006 · La idea</p>
                <div class="space-y-5 leading-[1.78] text-ink-body max-w-[70ch]">
                    <p><b>The Electric Buffalo</b> (Oviedo) surge, como idea, en un garito de costumbres rockeras allá
                        por el año 2006, en Oviedo. Álvaro y Wilón, fans estudiosos y entusiastas de los <b>Gov't
                            Mule</b>, acuerdan, entre vapores etílicos y con el Deepest End de fondo toda la noche
                        (cortesía de Chiri y Noe, porque en su casa, el <b>Sweet Home</b>, sabían cuidar bien de su
                        gente), formar una banda con una única condición: hacer exactamente lo que les dé la gana sin
                        ninguna prisa ni pretensión.</p>
                    <p>Ahí surgió la idea, pero faltaba la banda. El siguiente paso fue buscar un bajista y decidieron
                        tantear a <b>Alejandro "Espina"</b>. Jandro, bajista de <b>Ilegales</b> por aquella época, era
                        muy conocido también por haber sido profesor de bajo en el <b>Taller de Músicos de
                            Oviedo</b> y por suministrar risas, comedia a paladas, cervezas y música en otro garito
                        rockero y molón de la calle Martínez Vigil de Oviedo, <b>La Armónica Blues Bar</b>, que
                        regentaba su mujer, Irene.</p>
                </div>
            </div>
            <figure class="flex-1 min-w-[220px] basis-[260px] m-0">
                <img src="{{ asset('img/trio_vertical.webp') }}" alt="El trío en sus primeros años"
                    class="w-full aspect-[1500/2256] object-cover">
                <figcaption class="text-xs font-titulo italic text-ink-muted text-right pt-[7px]">Foto de Manfred
                </figcaption>
            </figure>
        </section>

        {{-- CITA --}}
        <section class="flex flex-wrap gap-cols-lg">
            <blockquote class="flex-1 min-w-[260px] basis-[300px] m-0 border-l-4 border-oxide-light pl-6">
                <p
                    class="font-titulo font-bold text-ink-heading leading-[1.15] tracking-[-0.015em] text-[clamp(24px,3.2vw,36px)] m-0">
                    No se hizo de rogar. Álvaro se lo planteó y Jandro dijo "sí" al momento.</p>
            </blockquote>
            <div class="flex-1 min-w-[280px] basis-[340px]">
                <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-4">
                    2006–2009 · Hidin' from the Butcher</p>
                <p class="leading-[1.78] text-ink-body m-0">Fueron largas mañanas de ensayos en Agüera (Las Regueras,
                    Asturias) a unos 30 minutos en coche de la capital, previo paso por Casa Edelmiro a desayunar
                    religiosamente. Entre 2006 y 2009 se fue cociendo el que sería el primer álbum de la banda,
                    <i>Hidin' from the Butcher</i> (2009), la primera y única referencia de Ouroboros Records; una
                    autoedición que tuvo a los mandos al sumo sacerdote de Eclipse Estudios, el gran Dani "Desmond"
                    Sevillano.
                </p>
            </div>
        </section>

        {{-- FOTO APAISADA + TEXTO CORTO --}}
        <section class="flex flex-wrap gap-cols-lg items-end">
            <figure class="flex-1 min-w-[300px] basis-[460px] relative m-0">
                <img src="{{ asset('img/trio_bn.webp') }}" alt="The Electric Buffalo en blanco y negro"
                    class="w-full aspect-[600/369] object-cover block">
                <p
                    class="absolute left-2.5 bottom-3 font-titulo italic text-[12px] text-white bg-black/40 px-1.5 py-0.5">
                    Foto de Manfred</p>
            </figure>
            <div class="flex-1 min-w-[240px] basis-[280px]">
                <p class="leading-[1.78] text-ink-body m-0">Van pasando los años y la banda va juntándose en las
                    pocas ocasiones que Ilegales y los otros proyectos de Álvaro y Wilón les van dejando. Pero,
                    bueno… esa era la premisa básica, ¿no? <i>No rush. Take your time.</i> En 2016 estaba el segundo
                    largo, <i>Keepin' it warm</i> (Boomerang Discos), calentito y a punto de salir del horno, cuando
                    ocurrió lo absolutamente inesperado y devastador.</p>
            </div>
        </section>

        {{-- 2016 + LLAMADA A FILAS --}}
        <section class="flex flex-wrap gap-cols-lg items-start">

            <div class="flex-1 min-w-[300px] basis-[380px]">
                <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-4">
                    2016 · La muerte de Alejandro</p>
                <div class="space-y-5 leading-[1.78] text-ink-body">
                    <p>Jandro "Espina", un ser de luz y amor, se iba a los 45. Dejaba una mujer y una hija desoladas y
                        una innumerable cantidad de amigos con el corazón hecho pedazos.</p>
                    <p>El disco se presentó en Oviedo con un elenco irrepetible de compañeros, currantes de las
                        cuatro cuerdas, con predisposición total a echar un cable. Fueron días de muchos ensayos con
                        muchos amigos, con caras muy largas, pero con muchas ganas de hacer un show irrepetible. Y
                        después de todo esto, con tanta emoción desbordada, comenzó un pequeño exilio en el desierto
                        con un futuro algo incierto.</p>
                </div>
                <p
                    class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mt-6 pt-5 border-t border-rule-light">
                    La llamada a filas</p>
                <div class="space-y-5 leading-[1.78] text-ink-body mt-4">
                    <p>El exilio espiritual tocó a su fin algunas semanas después, con la decisión de seguir adelante
                        y con la llamada a filas de Sergio "Tutu" Rodríguez, bajista de Los Deltonos, fanático de
                        Miles Davis y amo de llaves de "Tutu Estudios" en Corvera, Asturias.</p>
                    <p>Junto con el fabuloso teclista "Stone" Sam Rodríguez, que se une a la banda unos meses después,
                        empieza el nuevo periplo del Búfalo Eléctrico.</p>
                </div>
            </div>
            <figure class="flex-1 min-w-[240px] basis-[300px] m-0">
                <img src="{{ asset('img/cartel_aniversario.webp') }}"
                    alt="Cartel del concierto de presentación en Oviedo"
                    class="w-full aspect-[578/1036] object-cover block">
                <figcaption class="text-xs font-titulo italic text-ink-muted text-right pt-[7px]">Cartel del
                    concierto de presentación</figcaption>
            </figure>
        </section>

        {{-- CIERRE FOTO --}}
        <section class="relative bg-ink-hero border-y-[3px] border-ink max-w-[1200px] mx-auto">
            <img src="{{ asset('img/wilon_joven.webp') }}" alt="Wilón joven, tocando la guitarra"
                class="w-full h-[clamp(320px,42vw,520px)] object-cover object-[70%_5%]  md:object-[20%_5%] block">
            <p class="absolute right-edge bottom-3 font-titulo italic text-[12px] text-onblack-body">Foto de Manfred</p>
        </section>

        {{-- PATROLMAN --}}
        {{-- <section class="border-t border-rule-light pt-section">
            <div class="flex flex-wrap gap-cols-lg items-center">

                <img src="{{ asset('img/patrolman-cover.jpg') }}" alt="Portada de Patrolman"
                    class="flex-1 min-w-[220px] basis-[300px] w-full aspect-square object-cover shadow-[0_18px_44px_rgba(62,48,37,0.28)]">
                <div class="flex-1 min-w-[280px] basis-[360px]">
                    <p
                        class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-2.5">
                        2023 · Boomerang Discos</p>
                    <h2
                        class="font-titulo font-black uppercase text-ink-heading leading-[1.02] tracking-[-0.02em] text-[clamp(28px,3.8vw,44px)] mb-4">
                        Patrolman</h2>
                    <p class="leading-[1.78] text-ink-body mb-5">El nuevo periplo desemboca en su tercer trabajo
                        discográfico, dedicado — como no podía ser de otra manera — a la memoria de Alejandro. Bajo la
                        producción de Sergio "Tutu", es la culminación de un camino andado sin más pretensión que
                        hacer la música y las canciones que les apetece.</p>
                    <p class="font-titulo italic text-oxide-light leading-[1.4] text-[clamp(17px,2vw,22px)] m-0">Sin
                        prisa, exactamente como empezó todo allá por aquel año 2006.</p>
                </div>
            </div>
        </section> --}}

    </div>


    {{-- CTA --}}
    <div class=" px-edge-home bg-oxide py-section-lg ">
        <div class="max-w-content mx-auto  px-edge flex items-center justify-between gap-7 flex-wrap">
            <div>
                <h2
                    class="font-titulo font-black uppercase text-cream tracking-[-0.015em] text-[clamp(24px,3vw,32px)] mb-2">
                    Sigue el camino</h2>
                <p class="text-cream text-base leading-[1.6] max-w-[52ch] m-0">Tres discos desde 2006, sin prisa.
                    Escucha por dónde va el búfalo.</p>
            </div>
            <div class="flex gap-3.5 flex-wrap">
                <a class="inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 bg-transparent border-2 border-cream rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-cream-white hover:text-ink hover:bg-cream-white  transition duration-[220ms] ease-in-out"
                    href="{{ route('discografia') }}">Discografía</a>
                <x-button-ghost href="{{ route('banda') }}">La banda</x-button-ghost>
            </div>
        </div>
    </div>

</x-app-layout>
