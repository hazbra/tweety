<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @auth
            @foreach(auth()->user()->follows as $user)
                <li class="mb-4">
                    <div>
                        <a href="{{ $user->path() }}" class="flex items-center text-sm">
                            <img
                                src="{{ $user->avatar }}"
                                alt=""
                                class="rounded-full mr-2"
                                width="40"
                                height="40"
                            >

                        {{ $user->name }}
                    </div>
                </li>
            @endforeach
        @endauth
    </ul>
</div>
