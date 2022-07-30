@extends('layouts.app')


@section('titulo')
    Regístrate en DevTagram
@endsection


@section('contenido')
    <div class="md:flex">

        <div class="md:w-1/2">
            <p>Imagen aquí</p>
        </div>

        <div class="md:w-1/2">
            <form action="">

                {{-- Nombre --}}
                <div class="mb-5">
                    <label for="name" 
                            class="mb-2 block uppercase text-gray-500 font-bold">
                            Nombre
                    </label>
                    <input type="text"
                            name="name"
                            id="name"
                            placeholder="Tu nombre"
                            class="border p-3 w-full rounded-lg"
                    >
                </div>

                {{-- Username --}}
                <div class="mb-5">
                    <label for="username" 
                            class="mb-2 block uppercase text-gray-500 font-bold">
                            Username
                    </label>
                    <input type="text"
                            name="name"
                            id="username"
                            placeholder="Tu username"
                            class="border p-3 w-full rounded-lg"
                    >
                </div>

                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" 
                            class="mb-2 block uppercase text-gray-500 font-bold">
                            Email
                    </label>
                    <input type="text"
                            name="email"
                            id="email"
                            placeholder="Tu username"
                            class="border p-3 w-full rounded-lg"
                    >
                </div>

            </form>
        </div>

    </div>


@endsection