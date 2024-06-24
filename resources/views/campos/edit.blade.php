<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Campos') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="formulario">
                            <form method="POST" action="{{ route('campos.update', ['id' => $campo->id_campo])}}">
                                @csrf
                                @method("PUT")
                                <div>
                                    <div class="campos"> 
                                        <label for="text">Posición X</label>
                                        <input type="number" id="positionx" name="positionx" value="{{old('positionx', $campo->positionx)}}" />
                                    </div>

                                    <div class="campos">
                                        <label for="text">Posición Y</label>
                                        <input type="number" id="positiony" name="positiony" value="{{old('positiony', $campo->positiony)}}"/>
                                    </div>

                                    <div class="campos">
                                        <label for="text">Número de Página</label>
                                        <input type="number" id="numeropagina" name="numeropagina" value="{{old('numeropagina', $campo->numeropagina)}}"/>
                                    </div>

                                    <div class="campos">
                                        <label for="text">Tipografia</label>
                                        <select class="" id="tipografia" name="tipografia">
                                            <option value="Arial">Arial</option>
                                            <option value="Times New Roman">Times New Roman</option>
                                            <option value="Roboto">Roboto</option>
                                        </select>
                                    </div>

                                    <div class="campos"> 
                                        <label for="text">Tamaño</label>
                                        <input type="text" id="tamano" name="tamano" value="{{old('tamano', $campo->tamano)}}" />
                                    </div>

                                    <div class="campos">
                                        <label for="text">Color</label>
                                        <input type="color" id="color" name="color" value="{{old('color', $campo->color)}}"/>
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
        </x-app-layout>
</body>
</html>