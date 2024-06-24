<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Proyecto</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ingrese Proyecto') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="formulario">
                            <form method="POST" action="{{ route('project.store') }}">
                                @csrf
                                <div>
                                    <fieldset>
                                        <legend>Proyecto</legend>
                                        <div class="campos">
                                            <label for="text">Nombre</label>
                                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                                required />
                                        </div>

                                        <div class="campos">
                                            <label for="text">Plantilla</label>
                                            <input type="text" id="plantilla" name="plantilla" value="{{ old('plantilla') }}"
                                                required />
                                        </div>

                                        <div class="campos">
                                            <label for="text">Número de páginas</label>
                                            <input type="number" id="pagina" name="pagina" value="{{ old('pagina') }}" />
                                        </div>


                                        <div>
                                            <fieldset>
                                                <legend>Configuración de Correo</legend>
                                                <div class="campos">
                                                    <label for="text">Correo del Emisor</label>
                                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                        required /><br>
                                                </div>

                                                <div class="campos">
                                                    <label for="text">Copia de correo enviado</label>
                                                    <input type="email" id="emailco" name="emailco"
                                                        value="{{ old('emailco') }}"required />
                                                </div>

                                                <div class="campos">
                                                    <label for="text">Contraseña</label>
                                                    <input type="password" id="password" name="password" value="{{ old('password') }}"
                                                        required />
                                                </div>

                                                <div class="campos">
                                                    <label for="text">Servidor</label>
                                                    <input type="text" id="servidor" name="servidor" value="{{ old('servidor') }}"
                                                        required />
                                                </div>

                                                <div class="campos">
                                                    <label for="text">Puerto</label>
                                                    <input type="number" id="puerto" name="puerto" value="{{ old('puerto') }}"
                                                        required /><br>
                                                </div>

                                                <div class="campos">
                                                    <label for="text">Tipo de Seguridad</label>
                                                    <input type="text" id="criptografia" name="criptografia"
                                                        value="{{ old('criptografia') }}"required />
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="campos">
                                            <label for="text">Subir Archivo</label>
                                            <input type="file" id="file" name="file"/>
                                        </div>
                                    </fieldset>
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
