<x-app-layout pageTitle="Historia">
    <div class="my-10 w-95p lg:w-4/5 max-w-1300px mx-auto space-y-16">

        <h1 class="text-4xl font-medium">15 años de Rock</h1>

        {{-- BLOQUE 1: imagen horizontal + texto --}}
        <section class="space-y-6">
            <figure>
                <img src="/img/risas_baja.jpg" alt="The Electric Buffalo" class="w-full rounded-lg object-cover">
                <figcaption class="text-xs text-gray-400 italic text-right mt-1">Foto de Manfred</figcaption>
            </figure>
            <div class="space-y-5 text-base leading-7 text-gray-800">
                <p><b>The Electric Buffalo</b> (Oviedo) surge, como idea, en un garito de costumbres rockeras allá por
                    el año
                    2006, en Oviedo. Álvaro y Wilón, fans estudiosos y entusiastas de los <b>Gov't Mule</b>, acuerdan,
                    entre vapores etílicos y con el Deepest End de fondo toda la noche (cortesía de Chiri y Noe, porque
                    en su
                    casa, el <b>Sweet Home</b>, sabían cuidar bien de su gente), formar una banda con una única
                    condición:
                    hacer exactamente lo que les dé la gana sin ninguna prisa ni pretensión.</p>
                <p>Ahí surgió la idea, pero faltaba la banda. El siguiente paso fue buscar un bajista y decidieron
                    tantear a <b>Alejandro "Espina"</b>. Jandro, bajista de <b>Ilegales</b> por aquella época, era muy
                    conocido
                    también por haber sido profesor de bajo en el <b>Taller de Músicos de Oviedo</b> y por suministrar
                    risas,
                    comedia a paladas, cervezas y música en otro garito rockero y molón de la calle Martínez Vigil de
                    Oviedo, <b>La Armónica Blues Bar</b>, que regentaba su mujer, Irene.</p>
                <p>No se hizo de rogar. Álvaro se lo planteó y Jandro dijo "sí" al momento.</p>
            </div>
        </section>

        {{-- BLOQUE 2: texto izquierda + imagen vertical derecha --}}
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            <div class="space-y-5 text-base leading-7 text-gray-800">
                <p>A partir de ahí, fueron largas mañanas de ensayos en Agüera (La Regueras-Asturias) a unos 30
                    minutos en coche de la capital, previo paso por Casa Edelmiro a desayunar religiosamente. Entre
                    2006 y 2009 se fue cociendo el que sería el primer álbum de la banda "Hidin' from the Butcher"
                    (2009), la primera y única referencia de Ouroboros Records; una autoedición que tuvo a los
                    mandos al sumo sacerdote de Eclipse Estudios, el gran Dani "Desmond" Sevillano.</p>
                <p>Van pasando los años desde la salida del disco y la banda va juntándose en las pocas ocasiones
                    que Ilegales y los otros proyectos de Álvaro y Wilón les van dejando. Pero, bueno... esa era la
                    premisa básica, ¿no? No rush. Take your time. En 2016 estaba el segundo largo de la banda,
                    "Keepin' it warm" (Boomerang Discos), calentito y a punto de salir del horno, cuando ocurrió lo
                    absolutamente inesperado y devastador.</p>
                <p class="font-medium text-gray-900">La muerte de Alejandro.</p>

                <figure class="mt-4">
                    <img src="/img/BuffaloBN.jpg" alt="The Electric Buffalo en blanco y negro"
                        class="w-full rounded-lg">
                    <figcaption class="text-xs text-gray-400 italic text-right mt-1">Foto de Manfred</figcaption>
                </figure>
            </div>
            <figure>
                <img src="/img/TrioJovenVertical.jpg" alt="Trío joven"
                    class="w-full rounded-lg object-cover object-top">
                <figcaption class="text-xs text-gray-400 italic text-right mt-1">Foto de Manfred</figcaption>
            </figure>
        </section>

        {{-- BLOQUE 3: imagen vertical izquierda + texto y foto derecha --}}
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            <figure>
                <img src="/img/cartel_vertical.jpg" alt="Cartel" class="w-full rounded-lg">
            </figure>
            <div class="flex flex-col gap-8">
                <div class="space-y-5 text-base leading-7 text-gray-800">
                    <p>Jandro "Espina", un ser de luz y amor, se iba a los 45. Dejaba una mujer y una hija desoladas y
                        una innumerable cantidad de amigos con el corazón hecho pedazos.</p>
                    <p>El disco se presentó en Oviedo con un elenco irrepetible de compañeros, currantes de las cuatro
                        cuerdas, con predisposición total a echar un cable. Fueron días de muchos ensayos con muchos
                        amigos, con caras muy largas, pero con muchas ganas de hacer un show irrepetible. Y después de
                        todo esto, con tanta emoción desbordada, comenzó un pequeño exilio en el desierto con un futuro
                        algo incierto.</p>
                    <p>El exilio espiritual tocó a su fin algunas semanas después, con la decisión de seguir adelante y
                        con la llamada a filas de Sergio "Tutu" Rodríguez, bajista de Los Deltonos, fanático de Miles
                        Davis y amo de llaves de "Tutu Estudios" en Corvera, Asturias.</p>
                    <p>Junto con el fabuloso teclista "Stone" Sam Rodríguez, que se une a la banda unos meses después,
                        empieza el nuevo periplo del Búfalo Eléctrico que desemboca en la salida de su tercer trabajo
                        discográfico dedicado, como no podía ser de otra manera, a la memoria de Alejandro. "Patrolman"
                        (Boomerang Discos, 2023), bajo la producción de Sergio "Tutu", es la culminación de un camino
                        andado sin más pretensión que hacer la música y las canciones que les apetece, sin prisa,
                        exactamente como empezó todo allá por aquel año 2006.</p>
                </div>
                <figure>
                    <img src="/img/wilon_joven.jpg" alt="Wilón joven" class="w-full rounded-lg">
                    <figcaption class="text-xs text-gray-400 italic text-right mt-1">Foto de Manfred</figcaption>
                </figure>
            </div>
        </section>

    </div>
</x-app-layout>
