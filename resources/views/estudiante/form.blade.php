<div class="space-y-6">
    
    <div>
        <x-input-label for="user_id" :value="__('User Id')"/>
        <x-text-input id="user_id" name="user_id" type="text" class="mt-1 block w-full" :value="old('user_id', $estudiante?->user_id)" autocomplete="user_id" placeholder="User Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
    </div>
    <div>
        <x-input-label for="docente_id" :value="__('Docente Id')"/>
        <x-text-input id="docente_id" name="docente_id" type="text" class="mt-1 block w-full" :value="old('docente_id', $estudiante?->docente_id)" autocomplete="docente_id" placeholder="Docente Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('docente_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>