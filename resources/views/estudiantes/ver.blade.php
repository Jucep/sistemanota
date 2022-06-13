<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibol text-xl text-gray-800 leading-tight">
            {{__('Ver Estudiantes')}}
        </h2>
    </x-slot>


@csrf
<div class="block">
    <x-jet-label for="documento" value="{{__('Documento')}}"/>
    <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento',$estudiante->documento)" readonly/>

    
    <x-jet-label for="namee" value="{{__('Nombre Estudiante')}}"/>
    <x-jet-input id="namee" class="block mt-1 w-full" type="text" name="namee" :value="old('namee',$estudiante->nombre)" readonly/>
       
    <x-jet-label for="edad" value="{{__('Edad')}}"/>
    <x-jet-input id="edad" class="block mt-1 w-full" type="text" name="edad" :value="old('edad',$estudiante->edad)" readonly/>
  
    <x-jet-label for="grado" value="{{__('Grado')}}"/>
    <x-jet-input id="grado" class="block mt-1 w-full" type="text" name="grado" :value="old('grado',$estudiante->grado)" readonly/>

    <div class="flex justify-center">
        <div class="p-2">
        <div class="flex justifity-end">
           <a href="{{route('estudiantes.index')}}">
             <x-jet-button type="button">
                 volver
             </x-jet-button>  

        </div>
        </div>
    </div>     
</div>
</x-app-layout>
    
