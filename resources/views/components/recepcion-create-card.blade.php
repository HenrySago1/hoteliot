<head>
    <!-- Otros enlaces de CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo para eliminar subrayado en los enlaces */
        a {
            text-decoration: none; /* Elimina el subrayado */
        }
        a:hover {
            text-decoration: none; /* Asegura que no haya subrayado al pasar el puntero */
        }
        .rounded-custom {
            border-radius: 15px; /* Cambia el valor para ajustar el redondeo */
        }
        .svg-container {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
            height: 100%; /* Asegúrate de que el contenedor tenga altura suficiente */
        }
    </style>
</head>

<!-- Featured Item -->
<a href="{{ $habitacion->estado == 'disponible' ? '/admin-recepciones/create/' . $habitacion->id : '/admin-recepciones/edit/' . $habitacion->id }}"
   class="focus:outline-none sm:mb-0 mb-8 rounded-custom overflow-hidden shadow-xs bg-success">
    <div class="p-4 rounded-2xl text-white d-flex justify-content-between align-items-center badge bg-{{ $habitacion->estado === 'disponible' ? 'success' : ($habitacion->estado === 'ocupado' ? 'danger' : 'warning') }}">
        <!-- Contenido de la habitación -->
        <div class="text-start">
            <h2 tabindex="0" class="focus:outline-none text-3xl font-bold">Nro: {{ $habitacion->numero_habitacion }}</h2>
            <p class="text-sm text-white">Tipo: {{ $habitacion->tipo }}</p>
            <p class="text-sm text-white">Capacidad: {{ $habitacion->capacidad }}</p>
            <p class="text-sm text-white">Precio: {{ $habitacion->precio_por_noche }} Bs.</p>
            <p class="text-sm card-text">Estado:
                <span class="badge text-xl bg-{{ $habitacion->estado === 'disponible' ? 'success' : ($habitacion->estado === 'ocupado' ? 'danger' : 'warning') }}">
                    {{ ucfirst($habitacion->estado) }}
                </span>
            </p>
        </div>

        <div class="svg-container">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="110.000000pt" height="150.000000pt" viewBox="0 0 408.000000 315.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,315.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M1022 2768 c-9 -9 -12 -99 -12 -345 l0 -333 322 0 321 0 -6 123 c-4 67 -11 140 -16 162 -6 22 -7 43 -3 47 4 3 57 0 117 -7 146 -19 489 -19 630 0 60 8 113 11 117 7 4 -4 3 -25 -3 -47 -5 -22 -12 -95 -16 -162 l-6 -123 321 0 322 0 0 333 c0 350 -1 357 -45 357 -33 0 -45 -20 -45 -77 0 -29 -2 -53 -3 -53 -2 0 -30 9 -63 21 -94 32 -207 57 -379 81 -141 20 -201 23 -510 23 -438 0 -640 -23 -887 -99 l-78 -24 0 52 c0 56 -12 76 -45 76 -12 0 -26 -5 -33 -12z"/>
                    <path d="M2484 1973 c13 -92 14 -88 -19 -87 -16 0 -88 7 -159 14 -145 14 -486 9 -600 -10 -37 -7 -72 -8 -77 -3 -4 4 -4 28 2 52 5 24 8 46 5 48 -2 2 -19 -3 -38 -13 -53 -27 -151 -135 -198 -218 -24 -42 -47 -76 -51 -76 -4 0 -20 10 -36 23 -46 38 -119 86 -172 112 -98 50 -197 24 -244 -64 -14 -25 -51 -104 -82 -176 -31 -71 -68 -154 -81 -184 -15 -33 -21 -58 -15 -64 10 -10 2675 -6 2685 4 4 3 -7 35 -22 70 -92 204 -262 600 -262 610 0 5 -133 9 -321 9 l-322 0 7 -47z m416 -160 c-182 -17 -279 -40 -543 -124 -267 -85 -560 -158 -532 -132 6 5 57 20 115 32 58 13 201 54 319 93 184 59 393 116 481 131 14 2 63 4 110 4 47 0 69 -2 50 -4z m-1050 -69 c80 -11 154 -15 245 -11 140 5 123 -7 -25 -19 -60 -4 -126 -1 -225 12 -176 24 -305 24 -360 0 -22 -9 -35 -12 -29 -6 41 42 201 51 394 24z m-870 -53 c-5 -11 -10 -36 -10 -56 0 -54 39 -85 147 -118 127 -39 240 -50 443 -43 412 14 608 17 660 9 42 -7 10 -9 -135 -10 -104 0 -251 -6 -325 -12 -190 -15 -401 -14 -506 4 -144 24 -268 77 -294 124 -20 39 -6 121 21 121 6 0 6 -7 -1 -19z"/>
                    <path d="M664 1230 c-54 -22 -54 -21 -54 -476 0 -491 -8 -456 106 -455 93 0 98 7 102 129 2 53 8 108 15 120 27 54 -26 52 1229 52 1139 0 1164 0 1195 -20 38 -23 41 -34 46 -157 2 -56 8 -97 16 -107 19 -23 153 -23 176 0 14 14 15 62 13 445 l-3 428 -23 23 -23 23 -1387 2 c-769 1 -1397 -2 -1408 -7z"/>
                </g>
            </svg>
        </div>
    </div>
</a>
<!-- /Featured Item -->
