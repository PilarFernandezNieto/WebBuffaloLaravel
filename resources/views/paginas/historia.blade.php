<x-app-layout pageTitle="Historia">

    {{-- HERO OSCURO A SANGRE --}}
    <section class="relative flex items-end min-h-[clamp(415px,58vh,600px)] bg-ink-hero border-b-[3px] border-ink overflow-hidden">
        <img src="{{ asset('img/risas_baja.jpg') }}" alt="The Electric Buffalo" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-ink-hero/90 via-ink-hero/35 to-transparent"></div>
        <div class="relative z-10 w-full max-w-content mx-auto px-edge pb-[clamp(32px,5vw,48px)]">
            <div class="flex items-center gap-3 mb-3">
                <span class="inline-block h-px w-11 bg-amber"></span>
                <span class="font-titulo italic text-amber text-[13px] font-semibold uppercase tracking-[1.2px]">Historia</span>
            </div>
            <h1 class="font-titulo font-black uppercase text-cream-white leading-[1] tracking-[-0.02em] text-[clamp(30px,3.6vw,42px)]">15 años de rock</h1>
            <p class="mt-4 font-cuerpo text-onblack-body text-base max-w-[56ch]">Del garito de la calle Martínez Vigil a tres discos: la crónica del Búfalo Eléctrico desde 2006.</p>
        </div>
    </section>

    <div class="max-w-content mx-auto px-edge py-section-lg space-y-section-lg">

        {{-- BLOQUE 1: texto + foto --}}
        <section class="flex flex-wrap gap-cols-lg items-start">
            <div class="flex-1 min-w-[300px] basis-[480px]">
                <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-4">2006 · El origen</p>
                <div class="space-y-5 text-[15px] leading-[1.72] text-ink-body max-w-[70ch]">
                    <p><b>The Electric Buffalo</b> (Oviedo) surge, como idea, en un garito de costumbres rockeras allá por el año 2006, en Oviedo. Álvaro y Wilón, fans estudiosos y entusiastas de los <b>Gov't Mule</b>, acuerdan, entre vapores etílicos y con el Deepest End de fondo toda la noche (cortesía de Chiri y Noe, porque en su casa, el <b>Sweet Home</b>, sabían cuidar bien de su gente), formar una banda con una única condición: hacer exactamente lo que les dé la gana sin ninguna prisa ni pretensión.</p>
                    <p>Ahí surgió la idea, pero faltaba la banda. El siguiente paso fue buscar un bajista y decidieron tantear a <b>Alejandro "Espina"</b>. Jandro, bajista de <b>Ilegales</b> por aquella época, era muy conocido también por haber sido profesor de bajo en el <b>Taller de Músicos de Oviedo</b> y por suministrar risas, comedia a paladas, cervezas y música en otro garito rockero y molón de la calle Martínez Vigil de Oviedo, <b>La Armónica Blues Bar</b>, que regentaba su mujer, Irene.</p>
                    <p>No se hizo de rogar. Álvaro se lo planteó y Jandro dijo "sí" al momento.</p>
                </div>
            </div>
            <figure class="flex-1 min-w-[260px] basis-[320px]">
                <img src="{{ asset('img/BuffaloBN.jpg') }}" alt="The Electric Buffalo en blanco y negro" class="w-full aspect-square object-cover">
                <figcaption class="text-[11px] font-titulo italic text-ink-muted text-right pt-[7px]">Foto de Manfred</figcaption>
            </figure>
        </section>

        {{-- BLOQUE 2: foto + texto (alternado) --}}
        <section class="flex flex-wrap-reverse gap-cols-lg items-start">
            <figure class="flex-1 min-w-[260px] basis-[320px]">
                <img src="{{ asset('img/TrioJovenVertical.jpg') }}" alt="Trío joven" class="w-full aspect-square object-cover object-top">
                <figcaption class="text-[11px] font-titulo italic text-ink-muted text-right pt-[7px]">Foto de Manfred</figcaption>
            </figure>
            <div class="flex-1 min-w-[300px] basis-[480px]">
                <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-4">2006–2016 · Los primeros discos</p>
                <div class="space-y-5 text-[15px] leading-[1.72] text-ink-body max-w-[70ch]">
                    <p>A partir de ahí, fueron largas mañanas de ensayos en Agüera (La Regueras-Asturias) a unos 30 minutos en coche de la capital, previo paso por Casa Edelmiro a desayunar religiosamente. Entre 2006 y 2009 se fue cociendo el que sería el primer álbum de la banda "Hidin' from the Butcher" (2009), la primera y única referencia de Ouroboros Records; una autoedición que tuvo a los mandos al sumo sacerdote de Eclipse Estudios, el gran Dani "Desmond" Sevillano.</p>
                    <p>Van pasando los años desde la salida del disco y la banda va juntándose en las pocas ocasiones que Ilegales y los otros proyectos de Álvaro y Wilón les van dejando. Pero, bueno... esa era la premisa básica, ¿no? No rush. Take your time. En 2016 estaba el segundo largo de la banda, "Keepin' it warm" (Boomerang Discos), calentito y a punto de salir del horno, cuando ocurrió lo absolutamente inesperado y devastador.</p>
                    <p class="font-semibold text-ink-heading">La muerte de Alejandro.</p>
                </div>
            </div>
        </section>

        {{-- CIERRE: cartel flanqueado por texto --}}
        <section class="border-t border-rule-light pt-section">
            <div class="flex flex-wrap gap-cols-lg items-start">
                <div class="flex-1 min-w-[260px] basis-[280px] space-y-4">
                    <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px]">2016 · La llamada a filas</p>
                    <p class="text-[15px] leading-[1.72] text-ink-body">Jandro "Espina", un ser de luz y amor, se iba a los 45. Dejaba una mujer y una hija desoladas y una innumerable cantidad de amigos con el corazón hecho pedazos.</p>
                    <p class="text-[15px] leading-[1.72] text-ink-body">El disco se presentó en Oviedo con un elenco irrepetible de compañeros, currantes de las cuatro cuerdas, con predisposición total a echar un cable.</p>
                </div>
                <figure class="flex-1 min-w-[220px] basis-[260px]">
                    <img src="{{ asset('img/cartel_vertical.jpg') }}" alt="Cartel de presentación" class="w-full object-cover">
                </figure>
                <div class="flex-1 min-w-[260px] basis-[280px] space-y-4">
                    <p class="text-[15px] leading-[1.72] text-ink-body">El exilio espiritual tocó a su fin algunas semanas después, con la decisión de seguir adelante y con la llamada a filas de Sergio "Tutu" Rodríguez, bajista de Los Deltonos, fanático de Miles Davis y amo de llaves de "Tutu Estudios" en Corvera, Asturias.</p>
                    <p class="text-[15px] leading-[1.72] text-ink-body">Junto con el fabuloso teclista "Stone" Sam Rodríguez, que se une a la banda unos meses después, empieza el nuevo periplo del Búfalo Eléctrico.</p>
                </div>
            </div>
        </section>

        {{-- PATROLMAN --}}
        <section class="bg-ink -mx-edge px-edge py-section">
            <div class="flex flex-wrap gap-cols-lg items-center">
                <div class="flex-1 min-w-[260px]">
                    <p class="font-titulo italic text-amber text-[13px] font-semibold uppercase tracking-[1.2px] mb-4">2023 · Patrolman</p>
                    <p class="text-onblack-body text-[15px] leading-[1.72] max-w-[70ch]">
                        Empieza el nuevo periplo del Búfalo Eléctrico que desemboca en la salida de su tercer trabajo discográfico, dedicado, como no podía ser de otra manera, a la memoria de Alejandro. "Patrolman" (Boomerang Discos, 2023), bajo la producción de Sergio "Tutu", es la culminación de un camino andado sin más pretensión que hacer la música y las canciones que les apetece, sin prisa, exactamente como empezó todo allá por aquel año 2006.
                    </p>
                </div>
                <figure class="flex-1 min-w-[220px] basis-[280px]">
                    <img src="{{ asset('img/wilon_joven.jpg') }}" alt="Wilón joven" class="w-full object-cover">
                </figure>
            </div>
        </section>

    </div>
</x-app-layout>
