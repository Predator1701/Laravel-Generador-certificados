<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="new_pro_camp">
                        <a href="/project/create">Nuevo Proyecto</a> 
                    </div>
                    <div class="tabla">
                        <table>
                        <tr>
                            <th>Id</td>
                            <th>Nombre</td>
                            <th>Fecha</td>
                            <th>Fecha último</td>
                            <th>Plantilla</td>
                            <th>Número de paginas</td>
                            <th>Configuración correo</td>
                            <th>Copia de correo enviado</td>
                        </tr>
                        @foreach($proyectos as $proyecto)
                        <tr>
                            <td>{{$proyecto->id}}</td>
                            <td>{{$proyecto->nombre}}</td>
                            <td>{{$proyecto->created_at}}</td>
                            <td>{{$proyecto->updated_at}}</td>
                            <td>{{$proyecto->plantilla}}</td>
                            <td>{{$proyecto->numero_pagina}}</td>
                            <td>{{$proyecto->configuracion_correo}}</td>
                            <td>{{$proyecto->copia_correo}}</td>
                            <td>
                                <a class="botones" href="/project/{{$proyecto->id}}">Detalles</a>
                            </td>
                            <td>
                                <a class="botones" href="/project/{{$proyecto->id}}/edit">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>