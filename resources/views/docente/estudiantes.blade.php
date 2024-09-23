<x-app-layout>
    <div class="container">
        <h1>Mis Estudiantes</h1>
        @if($estudiantes->isEmpty())
            <p>No tienes estudiantes asignados.</p>
        @else
            <ul>
                @foreach($estudiantes as $estudiante)
                    <li>{{ $estudiante->user->name }}</li> {{-- Mostramos el nombre del estudiante desde la tabla users --}}
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>