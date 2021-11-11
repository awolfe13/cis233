
    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required />
    </div>

    <!-- Role -->
    <div class="mt-4">
        <x-label for="role" :value="__('Role')" />

        <select class="block mt-1 w-full" id="role" name="role" required>
            <option value="" selected disabled hidden>--Select--</option>
            <option value="administrator" {{Session::get("role")==="administrator" || old("role")==="administrator" || $user->role === "administrator"
                ? "selected" : "" }}>Administrator</option>
            <option value="coordinator" {{Session::get("role")==="coordinator" || old("role")==="coordinator" || $user->role === "coordinator"
                ? "selected" : "" }}>Coordinator</option>
            <option value="viewer" {{Session::get("role")==="viewer" || old("role")==="viewer" || $user->role === "viewer" ? "selected" : "" }}>
                Viewer</option>
        </select>
        {{--
        <x-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required /> --}}
    </div>