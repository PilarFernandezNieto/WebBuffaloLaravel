<x-app-layout>
    <div class=" my-10 w-[95%] md:w-[80%] mx-auto max-w-[1300px]">
        <h1 class="text-5xl mb-10">15 años de Rock</h1>
        <!-- PRIMER BLOQUE -->
        <section>
            <div class="w-full">
                <span class="flex justify-end text-xs text-slate-600">Foto de Manfred</span>
                <img src="/img/risas_baja.jpg" alt="Buffalos" class="max-h-[70rem] overflow-hidden w-full">
            </div>
            <div class="space-y-8 my-8">
                <p class="text-base leading-7"><b>The Electric Buffalo</b> (Oviedo) surge, como idea, en un garito de
                    costumbres
                    rockeras allá por el año
                    2006, en Oviedo. Álvaro y Wilón, fans estudiosos y entusiastas de los <b>Gov’t Mule</b>, acuerdan,
                    entre
                    vapores etílicos y con el Deepest End de fondo toda la noche (cortesía de Chiri y Noe, porque en su
                    casa, el <b>Sweet Home</b>, sabían cuidar bien de su gente), formar una banda con una única
                    condición:
                    hacer exactamente lo que les dé la gana sin ninguna prisa ni pretensión.
                </p>
                <p class="text-base leading-7">
                    Ahí surgió la idea, pero faltaba la banda. El siguiente paso fue buscar un bajista y decidieron
                    tantear a<b> Alejandro “Espina”</b>. Jandro, bajista de <b>Ilegales</b> por aquella época, era muy
                    conocido
                    también por haber sido profesor de bajo en el <b>Taller de Músicos de Oviedo</b> y por suministrar
                    risas,
                    comedia a paladas, cervezas y música en otro garito rockero y molón de la calle Martínez Vigil de
                    Oviedo, <b>La Armónica Blues Bar</b>, que regentaba su mujer, Irene.
                </p>
                <p class="text-base leading-7">
                    No se hizo de rogar. Álvaro se lo planteó y Jandro dijo “sí” al momento.
                </p>
            </div>

        </section>

        <!-- SEGUNDO BLOQUE -->
        <section class="grid md:grid-cols-2 gap-8 items-end">
            <!-- Columna izquierda -->
            <div class="md:grid md:grid-rows-2 gap-8">
                <!-- Textos -->
                <div class="space-y-8">
                    <p class="text-base leading-7">
                        A partir de ahí, fueron largas mañanas de ensayos en Agüera (La Regueras-Asturias) a unos 30
                        minutos en coche de la capital, previo paso por Casa Edelmiro a desayunar religiosamente. Entre
                        2006 y 2009 se fue cociendo el que sería el primer álbum de la banda “Hidin’ from the Butcher”
                        (2009), la primera y única referencia de Ouroboros Records; una autoedición que tuvo a los
                        mandos
                        al sumo sacerdote de Eclipse Estudios, el gran Dani “Desmond” Sevillano.
                    </p>
                    <p class="text-base leading-7">
                        Van pasando los años desde la salida del disco y la banda va juntándose en las pocas ocasiones
                        que
                        Ilegales y los otros proyectos de Álvaro y Wilón les van dejando. Pero, bueno... esa era la
                        premisa
                        básica, ¿no? No rush. Take your time. En 2016 estaba el segundo largo de la banda, “Keepin’ it
                        warm”
                        (Boomerang Discos), calentito y a punto de salir del horno, cuando ocurrió lo absolutamente
                        inesperado y devastador.
                    </p>
                    <p class="text-base leading-7">La muerte de Alejandro.</p>
                </div>

                <!-- Imagen horizontal -->
                <div class="w-full md:flex md:flex-col justify-end">
                    <span class="flex justify-end text-xs text-slate-600">Foto de Manfred</span>
                    <img src="/img/BuffaloBN.jpg" alt="Foto horizontal" class="w-full block">
                </div>
            </div>

            <!-- Columna derecha -->
            <div class="w-full">
                <span class="flex justify-end text-xs text-slate-600">Foto de Manfred</span>
                <img src="/img/TrioJovenVertical.jpg" alt="Foto vertical" class="w-full max-h-[70rem] object-cover">
            </div>
        </section>
        <!-- TERCER BLOQUE -->
        <section class="my-20">

            <h2 class="text-4xl mb-8 font-medium">La banda ahora</h2>
            <div class="md:grid md:grid-cols-2 gap-8">
                <x-banda :musicos="$musicos" />
            </div>
        </section>
    </div>


</x-app-layout>
