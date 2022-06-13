<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibol text-xl text-gray-800 leading-tight">
            {{__('Ver Materias')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div clas="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                <x-jet-label for="nombre" value="{{__('Nombre Materia')}}"/>
                <x-jet-input id="nombree" class="block mt-1 w-full" type="text" name="nombree" :value="old('nombree',$materia->nombre)" readonly/>
            
                
                <x-jet-label for="version" value="{{__('Version Materia')}}"/>
                <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version',$materia->version)" readonly/>
                </div>
            </div>
            </div>
    </div>
    <div class="flex justify-center">
        <div class="p-2">
        <div class="flex justifity-end">
           <a href="{{route('materias.index')}}">
             <x-jet-button type="button">
                 volver
             </x-jet-button>  

        </div>
        </div>
    </div>  


</x-app-layout>