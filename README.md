<div align="center" id="top">
  <img src="./.github/app.gif" alt="Wireui" />

&#xa0;

  <!-- <a href="https://wireui.netlify.app">Demo</a> -->
</div>

<h1 align="center">Wireui</h1>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8">

  <img alt="License" src="https://img.shields.io/github/license/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8">

  <!-- <img alt="Github issues" src="https://img.shields.io/github/issues/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8" /> -->

  <!-- <img alt="Github forks" src="https://img.shields.io/github/forks/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8" /> -->

  <!-- <img alt="Github stars" src="https://img.shields.io/github/stars/{{YOUR_GITHUB_USERNAME}}/wireui?color=56BEB8" /> -->
</p>

<!-- Status -->

<!-- <h4 align="center">
	🚧  Wireui 🚀 Under construction...  🚧
</h4>

<hr> -->

<p align="center">
  <a href="#dart-about">Acerca de</a> &#xa0; | &#xa0;
  <a href="#sparkles-features">Secciones del Curso</a> &#xa0; | &#xa0;
  <a href="#rocket-technologies">Tecnologias</a> &#xa0; | &#xa0;
  <a href="#white_check_mark-requirements">Requirimientos</a> &#xa0; | &#xa0;
  <a href="#checkered_flag-starting">Introduccion</a> &#xa0; | &#xa0;
  <a href="#memo-license">Licencia</a> &#xa0; | &#xa0;
  <a href="https://github.com/{{YOUR_GITHUB_USERNAME}}" target="_blank">Autor</a>
</p>

<br>

## :dart: Acerca de este Curso

Livewire y WireUI: Crea interfaces web responsivas de forma fácil
Aprende a desarrollar aplicaciones con WireUI para Laravel y Livewire y mejora tu productividad. Desarrolla interfaces atractivas y funcionales en menos tiempo.

## :sparkles: Secciones Del curso

:heavy_check_mark: Introduccion 01 Clases:01.Crear nuevo proyecto 02.Instalar paquete Wire Ui 03.Traducir la aplicacion Nro.Clases:03.
:heavy_check_mark: Componentes(Definicion) 02 Clases:04.Componentes de Clase 05.Componentes anonimos Nro.Clases:02.
:heavy_check_mark: Rutas 03 Clases:06.Rutas que utilizaremos Nro.Clases:01.

## :rocket: Tecnologías

Las siguientes son las Tecnologias utilizadas en este proyecto:

-   [Laravel 10](https://laravel.com/docs/10.x)
-   [Laravel Jetstream](https://jetstream.laravel.com/3.x/introduction.html)
-   [Wireui](https://pt-br.reactjs.org/)
-   [Tailwind Css](https://tailwindcss.com/docs/installation/)

## :white_check_mark: Requirimientos

Antes de iniciar :checkered_flag:, Necesitas tener instalado [Git](https://git-scm.com) y [Node](https://nodejs.org/en/).

## :checkered_flag: Seccion 01 Introduccion

```bash
# Crear el proyecto
$ laravel new Filament-datatables

# Acceder al proyecto
$ cd Filament-datatables

# Instalar dependencies
$ composer require filament/filament:"^2.0"
$ php artisan migrate
$ php artisan vendor:publish --tag=filament-translations
$ php artisan vendor:publish --tag=filament-config
$ php artisan make:filament-user
$ php artisan vendor:publish --tag=filament-config
$ Configurar el Idioma en config.php y cambiamos el 'locale' => 'es',

# Colocar los scripts en app.blade.php
$       <!-- Scripts -->
        @wireUiScripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])

# Adicionar los estilos de wireui en Tailwind.config.js

    presets: [

        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [

        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],

# Crear las migraciones y los modelos para estas tablas de la Base de datos en est eorden

#Countries php artisan make:model Country -m
#States php artisan make:model State -m
#Cities php artisan make:model City -m
#Departments php artisan make:model Department -m
# Employees  php artisan make:model Employees -m

# Publicar los archivos de wireui

php artisan vendor:publish --tag="wireui.config"
php artisan vendor:publish --tag="wireui.resources"
php artisan vendor:publish --tag="wireui.lang"

# Donde encontrar los  recursos de las Vistas de wireui Resources\views\vendor\wireui

#3. Vamos a la Vista Register.blade.php y colocamos el componente de wireui
Cambiamos la etiqueta value por label de wireui
$ <x-label for="name" value="{{ __('Name') }}" />
Se corrige por
$ <x-label for="name" label="{{ __('Name') }}" />

# 3.1 Vamos a la Vista Register.blade.php y colocamos el componente de wireui Otra forma
$  <x-label for="name">
  {{ __('Name') }}
  </x-label>
# 3.2 Corregir el boton Register para que envie el Formulario
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
Se corrige al colocar el type="submit"
                <x-button type="submit" class="ml-4">
                    {{ __('Register') }}
                </x-button>

# 3.2 Instalar laravel Lang

$ composer require laravel-lang/common --dev
$ php artisan lang:add es
$ Configurar el Idioma en config.php y cambiamos el 'locale' => 'es',

```

## :rocket: Seccion 02:Componentes

Los componentes nos permiten crear interfaces de usuario reutilizables y personalizables. Los componentes son como las etiquetas HTML personalizadas, pero con la capacidad de ser dinámicos y reutilizables.

```bash
# 004.Componentes de Clases Crear un componente de nombre Alert
$ php artisan make:component Alert
$ Esto crea un componente en la carpeta app/View/Components/Alert.php
$ y tambien crea una vista en la carpeta resources/views/components/alert.blade.php

# Tomamos un ejemplo de Tailwind y lo colocamos en la vista alert.blade.php
$ <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Holy smokes!</strong>
  <span class="block sm:inline">Something seriously bad happened.</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>

#Copiamos el codigo del alert en el dashboard.blade.php
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
cambiamos por esto
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-alert />
            </div>
        </div>
    </div>
</x-app-layout>
 Los componentes se llaman con la etiqueta con el nombre que le dimos al componente de la clase
  creado Alert.php
  <x-alert />

  # 005. En el alert.blade.php  pasarle un parametro al componente y lo mostramos en la vista Tenemos contenido variable y contenido estatico
   <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Holy smokes!</strong> lo identificamos con una varibale llamada {{ $title }}
    <span class="block sm:inline">
        {{ $slot  }} Tenemos Contenido Variable pasamos con nombres
    </span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
            <title>Close</title>
            <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>

#En la vista dashboard.blade.php colocamos esto para que se muestre el mensaje que le pasamos al componente alert
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert>
                <strong>Whoops!</strong> Something went wrong!
            </x-alert>
        </div>
    </div>

#En la vista dashboard.blade.php colocamos esto para que se muestre el mensaje que le pasamos al componente alert x-slot  para slot de nombres son variables no estaticos y se especifica con la variable que hemos colocado en lavista del componente resources\views\components\alert.blade.php
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert>
                <x-slot name="title">

                </x-slot>

                <strong>Whoops!</strong> Something went wrong!
            </x-alert>
        </div>
    </div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert>
                <x-slot name="title">
                    Prueba
                </x-slot>
                    Whoops! Aqui pasa algo raro!
            </x-alert>
        </div>
    </div>
</x-app-layout>

# MAndar parametros adicionales especifico el tipo de alertas y mando como un atributo a mi componente dbe recibirlo el componente  <x-alert type="success">

@props(['type'])
@php

switch ($type) {
    case 'success':
        $clases = 'bg-green-100 border border-green-400 text-green-700';
        $title = 'Success';
        break;
    case 'error':
        $clases = 'bg-red-100 border border-red-400 text-red-700 px-4 ';
        $title = 'Error';
        break;
    default:
        $clases = 'bg-blue-100 border border-blue-400 text-blue-700 px-4 ';
        $title = 'Info';
        break;
}

@endphp

<div class="{{$clases}} px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">{{$title}}</strong>
    <span class="block sm:inline">
        {{ $slot  }}
    </span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
            <title>Close</title>
            <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>

# En la vista dashboard.blade.php <x-alert type="info">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert type="info">
                <x-slot name="title">
                    Prueba
                </x-slot>
                    Whoops! Aqui pasa algo raro!
            </x-alert>
        </div>
    </div>
</x-app-layout>


#Con clases por defecto

@props(['type'])

@php

switch ($type) {
    case 'success':
        $clases = 'bg-green-100 border border-green-400 text-green-700';

        $classIcon = 'text-green-500';
        break;
    case 'error':
        $clases = 'bg-red-100 border border-red-400 text-red-700 px-4 ';

        $classIcon = 'text-red-500';
        break;

        default:

        $clases = 'bg-blue-100 border border-blue-400 text-blue-700 px-4 ';
        $classIcon = 'text-blue-500';

        break;
}

@endphp

<div class="{{$clases}} px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">
        {{$title}}
    </strong>
    <span class="block sm:inline">
        {{ $slot  }}
    </span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 {{$classIcon}}" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
            <title>Close</title>
            <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>

# Darle un valor por defecto a Title en caso que no lo mandemos desde el componente
$ @props(['type' => 'success', 'title' => 'success'])

@php

$ la vista queda asi
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert>

                <x-slot name="title">
                    Prueba
                </x-slot>
                    Whoops! Aqui pasa algo raro!
            </x-alert>

        </div>
    </div>
</x-app-layout>

#Pasos Para agregar php desde una variable una la base de datos


```

## :dart: Seccion 03 Rutas

```bash
# 006. Rutas que utilizaremos


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/forms', function () {
    return view('forms');
})->name('forms');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/livewire', function () {
    return view('livewire');
})->name('livewire');

Route::get('/actions', function () {
    return view('actions');
})->name('actions');

Route::get('/ui', function () {
    return view('ui');
})->name('ui');


```
## :dart: Seccion 3.1 Rutas -Crear vistas

```bash
# 006. Vistas que utilizaremos en resources\views

forms.blade.php
tables.blade.php
livewire.blade.php
actions.blade.php
ui.blade.php

*Todas extienden de la plantilla principal
<x-app-layout>

</x-app-layout>
* Usamos el Ejemplo del Dashboard y usamos la Cabecera

<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Actions
        </h2>
    </x-slot>


</x-app-layout>




```
## :dart: Seccion 3.1 Rutas -Que aparezcan los enlaces

```bash
# 006. Nos dirigimos al menu de navegacion resources\views\navigation-menu.blade

 * EL menu de  Jetstream consta de dos Menus

 <!-- Primary Navigation Menu -->

 <!-- Responsive Navigation Menu -->

 * EL menu de  Jetstream consta de dos Menus y de los menus de Navegacion
  <!-- Navigation Links -->
  <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

forms.blade.php
tables.blade.php
livewire.blade.php
actions.blade.php
ui.blade.php

*Todas extienden de la plantilla principal
<x-app-layout>

</x-app-layout>
* Usamos el Ejemplo del Dashboard y usamos la Cabecera

<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Actions
        </h2>
    </x-slot>


</x-app-layout>




```

## :rocket: Seccion 04:Componentes de Formularios

```bash
# 007.Inputs
$ laravel new wireui --jet

# 008.Input Password
$ cd wireui

```

## :memo: Licencia

Hecho con :heart: por <a href="https://github.com/{{YOUR_GITHUB_USERNAME}}" target="_blank">{{Yorkcorp El Campeon de Campeones}}</a>

&#xa0;

<a href="#top">Regresar</a>
