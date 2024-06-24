<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
</head>
<body>
    
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$proyecto->nombre}}
            </h2>
        </x-slot>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="tabla">
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Fecha último</th>
                                <th>Plantilla</th>
                                <th>Número de paginas</th>
                                <th>Configuración correo</th>
                                <th>Copia de correo enviado</th>
                                <th>Contraseña</th>
                                <th>Servidor</th>
                                <th>Puerto</th>
                                <th>Seguridad</th>
                            </tr>
                            <tr>
                                <td>{{$proyecto->id}}</td>
                                <td>{{$proyecto->nombre}}</td>
                                <td>{{$proyecto->created_at}}</td>
                                <td>{{$proyecto->updated_at}}</td>
                                <td>{{$proyecto->plantilla}}</td>
                                <td>{{$proyecto->numero_pagina}}</td>
                                <td>{{$proyecto->configuracion_correo}}</td>
                                <td>{{$proyecto->copia_correo}}</td>
                                <td>{{$proyecto->password}}</td>
                                <td>{{$proyecto->servidor}}</td>
                                <td>{{$proyecto->puerto}}</td>
                                <td>{{$proyecto->criptografia}}</td>

                                <td> 
                                    <form class="delete" method="POST" action="{{route('project.destroy',['project' => $proyecto->id])}}" onsubmit="return confirm('¿Desea eliminar los campos?');">
                                        @method('DELETE')
                                        @csrf
                                        <button class="botones" type="submit">Eliminar</button>
                                    </form>
                                </td>

                                <td>
                                    <a class="botones" href="/project/{{$proyecto->id}}/edit">Editar</a>
                                </td>
                            </tr>
                        </table>    
                        </div>    
                    </div>
                </div>
            </div>
        </div>



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="new_pro_camp">
                            <a href="{{ route('campos.create', ['id' => $proyecto->id])}}">Agregar Campos</a> 
                        </div>
                        <table class="tabla">
                            <tr>
                                <th>Id</td>
                                <th>Posición X</td>
                                <th>Posición Y</td>
                                <th>Tipografía</td>
                                <th>Tamaño</td>
                                <th>Número de Página</th>
                                <th>Color</td>
                            </tr>
                            @foreach ($campos as $campo)
                                <tr>
                                    <td>{{$campo->id_campo}}</td>
                                    <td>{{$campo->positionx}}</td>
                                    <td>{{$campo->positiony}}</td>
                                    <td>{{$campo->tipografia}}</td>
                                    <td>{{$campo->tamano}}</td>
                                    <td>{{$campo->numeropagina}}
                                    <td>{{$campo->color}}</td>
                                    <td>
                                        <a class="botones" href="/campos/{{$campo->id_campo}}/edit">Editar</a>
                                    </td>
                                    <td> 
                                        <form class="delete" method="POST" action="{{route('campos.destroy', $campo->id_campo)}}" onsubmit="return confirm('¿Desea eliminar los campos?');">
                                            @method('DELETE')
                                            @csrf
                                            <button class="botones" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>                                
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>
</html>


