<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadown-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed border-collapse border-green-800">
                        <thead>
                            <tr>
                                <th style="width:10%;">ID</th>
                                <th style="width:20%;">Clave</th>
                                <th style="width:40%;">Producto</th>
                                <th style="width:10%;">U.M.</th>
                                <th style="width:10%;">Existencias</th>
                                <th style="width:10%;">P.U.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                            <tr>
                                <td class="border border-green-800">{!! $producto->id !!}</td>
                                <td class="border border-green-800">{!! $producto->clave !!}</td>
                                <td class="border border-green-800">{!! $producto->producto !!}</td>
                                <td class="border border-green-800">{!! $producto->unidad_medida !!}</td>
                                <td class="border border-green-800">{!! $producto->existencias !!}</td>
                                <td class="border border-green-800">{!! $producto->precio_unitario !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
