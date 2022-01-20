<x-layout>

    <main class="w-[75%] mx-auto flex flex-col">
        <form
            class="w-full mx-auto"
            method="get"
            action="/"
        >
            <input
                class="w-full my-8 px-4 py-2 rounded-xl bg-gray-100 focus:bg-gray-200 text-xl text-gray-900"
                type="text"
                name="search"
                placeholder="Search..."
                value="{{ $search }}"
            />
        </form>
        <div class="grid grid-cols-2 gap-2">
            @forelse ($universities as $u)
                <article class="p-2 rounded-xl bg-gray-50">
                    <h2 class="text-xl font-semibold">{{ $u['name'] }}</h2>
                    <span class="text-sm">{{ $u['country'] }}</span>

                </article>
            @empty
                No data.
            @endforelse
        </div>
        <x-pagination :pages="$pages" :page="$page" to="?search={{ $search }}&page="/>
    </main>
</x-layout>
