<div id="profile-container"
    class="flex-grow overflow-y-auto flex justify-between flex-1 xl:flex-row 2xl:flex-row lg:flex-row md:flex-row flex-col">
    <div class="flex w-full xl:w-[260px] 2xl:w-[260px] md:w-[260px] bg-[#080D14] max-sm:order-1 justify-center">
        <div class="flex flex-col my-10 items-center">
            <input id="searchField" class="bg-[#202532] text-white rounded w-[80%] h-[45px] px-4 py-2 mx-auto"
                type="text" name="search" placeholder="Search User">
            <div id="results"
                class="mx-auto xl:my-6 2xl:my-6 lg:my-6 md:my-6 my-0 w-[80%] xl:h-[550px] 2xl:h-[550px] lg:h-[550px] h-full overflow-y-auto space-y-0">
                @foreach ($users as $user)
                    <a href="{{ route('profile', $user->username) }}">
                        <div
                            class="flex items-center hover:bg-[#202532] cursor-pointer transition duration-150 ease-out hover:ease-in rounded h-[50px]">
                            <img src="{{ asset($user->profile_image) }}" class="rounded-full w-[30px] h-[30px] ml-2">
                            <span class="px-2 text-white text-[14px]">{{ $user->name }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @yield('content')
</div>
