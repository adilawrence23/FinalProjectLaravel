<x-app>
    <form method="POST" action="{{$user->path()}} " enctype="multipart/form-data">
        @csrf

        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for name="name">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" value="{{$user->name}}"
                required>

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for name="username">Usename</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username"
                value="{{$user->username}}" required>

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6 ">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for name="avatar">Avatar</label>
        <div class="flex">
            <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar" required>

        <img src="{{$user->avatar}}" alt="Your Avatar" width="40">
        </div>
            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for name="email">Email Address</label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                value="{{$user->email}}" required>

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for name="password">Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for name="">Confirm Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation"
                id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Update</button>
        </div>
    </form>
</x-app>