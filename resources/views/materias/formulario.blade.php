@csrf
<div class="block">
    <x-jet-label for="nombre" value="{{__('Nombre Materia')}}"/>
    <x-jet-input id="nombree" class="block mt-1 w-full" type="text" name="nombree" :value="old('nombree',$materia->nombre)" required autofocus/>

    
    <x-jet-label for="version" value="{{__('Version Materia')}}"/>
    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version',$materia->version)" required autofocus/>
       
    
    <div class="flex justify-center">
        <div class="p-2">
        <div class="flex justifity-end">
           <a href="{{('materias.create')}}">
             <x-jet-button type="submit">
                 Guardar
             </x-jet-button>  

        </div>
        </div>
    </div>     
</div>