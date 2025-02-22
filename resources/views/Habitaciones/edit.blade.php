<!-- resources/views/habitaciones/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Habitación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('habitaciones.update', $habitacion->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="numero_habitacion" class="block text-sm font-medium text-gray-700">Número de Habitación</label>
                            <input type="text" name="numero_habitacion" id="numero_habitacion" value="{{ $habitacion->numero_habitacion }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
                            <select name="tipo" id="tipo" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                                <option value="simple" {{ $habitacion->tipo == 'simple' ? 'selected' : '' }}>Simple</option>
                                <option value="doble" {{ $habitacion->tipo == 'doble' ? 'selected' : '' }}>Doble</option>
                                <option value="matrimonial" {{ $habitacion->tipo == 'matrimonial' ? 'selected' : '' }}>Matrimonial</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="capacidad" class="block text-sm font-medium text-gray-700">Capacidad</label>
                            <input type="number" name="capacidad" id="capacidad" value="{{ $habitacion->capacidad }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="detalles" class="block text-sm font-medium text-gray-700">Detalles</label>
                            <input type="text" name="detalles" id="detalles" value="{{ $habitacion->detalles }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="precio_por_noche" class="block text-sm font-medium text-gray-700">Precio por Noche</label>
                            <input type="number" step="0.01" name="precio_por_noche" id="precio_por_noche" value="{{ $habitacion->precio_por_noche }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
                            <select name="estado" id="estado" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                                <option value="disponible" {{ $habitacion->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                                <option value="ocupado" {{ $habitacion->estado == 'ocupado' ? 'selected' : '' }}>Ocupado</option>
                                <option value="reservado" {{ $habitacion->estado == 'reservado' ? 'selected' : '' }}>Reservado</option>
                            </select>
                        </div>
                        <div class="mb-4">
    <label for="device_id" class="block text-sm font-medium text-gray-700">Dispositivo</label>
    <select name="device_id" id="device_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
    <option value="">-- Seleccionar dispositivo --</option>
    @foreach($devicesDisponibles as $device)
        <option value="{{ $device->uuid }}" {{ (isset($habitacion) && $habitacion->device_id == $device->uuid) ? 'selected' : '' }}>
            {{ $device->nombre }} - {{ $device->uuid }}
        </option>
    @endforeach
</select>

</div>


                        <div class="mt-6">
                            <x-primary-button>
                                {{ __('Actualizar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
