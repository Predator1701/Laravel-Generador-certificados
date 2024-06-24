<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar '. $proyecto->nombre) }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="formulario">
                            <form method="POST" action="{{ route('project.update', ['project' => $proyecto->id])}}">
                                    @csrf
                                    @method("PUT")
                                    
                                    <div>
                                        <fieldset>
                                            <legend>Proyecto</legend>
                                            <div class="campos"> 
                                                <label for="text">Nombre</label>
                                                <input type="text" id="name" name="name" value="{{old('name', $proyecto->nombre)}}" />
                                            </div>

                                            <div class="campos"> 
                                                <label for="text">Plantilla</label>
                                                <input type="text" id="plantilla" name="plantilla" value="{{old('plantilla', $proyecto->plantilla)}}" />
                                            </div>

                                            <div class="campos">
                                                <label for="text">número de páginas</label>
                                                <input type="number" id="pagina" name="pagina" value="{{old('pagina', $proyecto->numero_pagina)}}"/>
                                            </div>
                                        <fieldset>
                                            <legend>Proyecto</legend>
                                            <div class="campos">
                                                <label for="text">Configuración correo</label>
                                                <input type="email" id="email" name="email" value="{{old('email', $proyecto->configuracion_correo)}}"/><br>
                                            </div>
                                            
                                            <div class="campos"> 
                                                <label for="text">Copia de correo enviado</label>
                                                <input type="email" id="emailco" name="emailco" value="{{old('emailco', $proyecto->copia_correo)}}" />
                                            </div>

                                            <div class="campos">
                                                <label for="text">Contraseña</label>
                                                <input type="password" id="password" name="password" value="{{ old('password', $proyecto->password) }}"
                                                    required />
                                            </div>

                                            <div class="campos">
                                                <label for="text">Servidor</label>
                                                <input type="text" id="servidor" name="servidor" value="{{ old('servidor', $proyecto->servidor) }}"
                                                    required />
                                            </div>

                                            <div class="campos">
                                                <label for="text">Puerto</label>
                                                <input type="number" id="puerto" name="puerto" value="{{ old('puerto', $proyecto->puerto) }}"
                                                    required /><br>
                                            </div>

                                            <div class="campos">
                                                <label for="text">Tipo de Seguridad</label>
                                                <input type="text" id="criptografia" name="criptografia"
                                                    value="{{ old('criptografia', $proyecto->criptografia) }}"required />
                                            </div>
                                        </fieldset>
                                        </fieldset>
                                    </div>
                                    <div>
                                        <button>Guardar</button>
                                        <a class="cancelar" href="/dashboard">Cancelar</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>            
</body>
</html>