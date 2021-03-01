<x-master>
    <header class="mb-6 relative">
        <img
            src="/images/default-profile-banner.jpg"
            alt=""
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans()  }}</p>
            </div>

            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>

                <form method="POST" action="/profiles/{{ $user->name }}/follow">
                    @csrf
                    <button type="submit"
                            class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs"
                    >
                       {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
                    </button>
                </form>
            </div>
        </div>

        <p class="text-sm">
            The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
            and white r abbit or hare who is famous for his flippant, insouciant personality.
            He is also characterized by a Brooklyn accent, his portrayal as a trickster,
            and his catch phrase "Eh...What's up, doc?"
        </p>

        <img src="{{ $user->avatar }}" alt="" class="rounded-full absolute" style="width: 150px;margin-top: -235px;left: calc(50% - 75px)">

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-master>
