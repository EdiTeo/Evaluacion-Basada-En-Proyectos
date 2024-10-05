<div class="space-y-6">
    
    <div>
        <label for="area" class="block font-medium text-sm text-gray-700">{{ __('Area') }}</label>
        <input id="area" name="area" type="text" class="mt-1 block w-full" value="{{ old('area', $docente?->area) }}" autocomplete="area" placeholder="Area"/>
        @error('area')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="group" class="block font-medium text-sm text-gray-700">{{ __('Group') }}</label>
        <input id="group" name="group" type="text" class="mt-1 block w-full" value="{{ old('group', $docente?->group) }}" autocomplete="group" placeholder="Group"/>
        @error('group')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="user_id" class="block font-medium text-sm text-gray-700">{{ __('User Id') }}</label>
        <input id="user_id" name="user_id" type="text" class="mt-1 block w-full" value="{{ old('user_id', $docente?->user_id) }}" autocomplete="user_id" placeholder="User Id"/>
        @error('user_id')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Submit</button>
    </div>

</div>
