<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Campos</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ingresar Campos') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="grid grid-cols-1 justify-center">
                            @if($errors)
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                        </div>

                        <div class="formulario">
                            <form method="POST" action="{{ route('campos.store', ['id' => $proyecto->id]) }}">
                                @csrf
                                
                                <div>
                                    <div class="campos">
                                        <label for="text">Número de Página</label>
                                        <input type="number" id="numeropagina" name="numeropagina"
                                            value="{{ old('numeropagina') }}" required />
                                    </div>

                                    <div class="campos">
                                        <label for="text">Posición X</label>
                                        <input type="number" id="positionx" name="positionx"
                                            value="{{ old('positionx') }}" required />
                                    </div>

                                    <div class="campos">
                                        <label for="text">Posición Y</label>
                                        <input type="number" id="positiony" name="positiony"
                                            value="{{ old('positiony') }}" required />
                                    </div>

                                    <div class="campos">
                                        <label for="text">Tipografia</label>
                                        <select class="" id="tipografia" name="tipografia">
                                            <option value="Arial">Arial</option>
                                            <option value="Times New Roman">Times Roman</option>
                                            <option value="Roboto">Roboto</option>
                                        </select>
                                    </div>

                                    <div class="campos">
                                        <label for="text">Tamaño</label>
                                        <input type="text" id="tamano" name="tamano"
                                            value="{{ old('tamano') }}" />
                                        @error('tamano')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="campos">
                                        <label for="text">Color</label>
                                        <input class="input_color" type="color" id="color" name="color"
                                            value="{{ old('color') }}" />
                                    </div>

                                    <div class="campos">
                                        <input type="hidden" id="id_pro" name="id_pro"
                                            value="{{ $proyecto->id }}" /><br>
                                    </div>

                                    <div>
                                        <button>Guardar</button>
                                        <a class="cancelar" href="/project/{{$campo->id_proyecto}}">
                                            Cancelar
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
