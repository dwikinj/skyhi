<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
    class="mx-auto text-white flex-col flex">
    @csrf

    <h1 class="2xl:text-[28px] xl:text-[28px] lg:text-[28px] text-[20px] font-semibold">SkyHi</h1>
    <h2 class="text-[26px] xl:mt-8 2xl:mt-8 lg:mt-4">Settings</h2>
    <input type="text" name="name" placeholder="Name" value="{{ old('name', $auth->name) }}"
        class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4">
    @error('name')
        <div
            class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            {{ $message }}
        </div>
    @enderror


    <input type="text" name="username" placeholder="Username" value="{{ old('username', $auth->username) }}"
        class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4">

    @error('username')
        <div
            class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            {{ $message }}
        </div>
    @enderror


    <input type="text" name="email" placeholder="Email" value="{{ old('email', $auth->email) }}"
        class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4">
    @error('email')
        <div
            class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            {{ $message }}
        </div>
    @enderror


    <input type="password" name="password" placeholder="Password"
        class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[50px] text-[14px] rounded px-4">

    @error('password')
        <div
            class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            {{ $message }}
        </div>
    @enderror


    <div class="flex items-center space-x-6 py-2">
        <div class="shrink-0">
            <img id="profileImage" class="h-16 w-16 object-cover rounded-full"
                src="{{ $auth->profile_image ? asset($auth->profile_image) : asset('assets/images/user.png') }}"
                alt="Current profile photo" />
        </div>
        <label class="block">
            <span class="sr-only">Choose profile photo</span>
            <input type="file" name="file" id="fileInput"
                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-gray-700 hover:file:bg-gray-100" />
        </label>
    </div>

    @error('file')
        <div
            class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
            {{ $message }}
        </div>
    @enderror


    <button type="submit"
        class="my-4 bg-[#487D27] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[60px] text-[16px] rounded px-4 font-semibold  hover:bg-[#287D27]">Update</button>
    {{-- Display sucess message --}}
    @if (session('success'))
        <div class="p-2 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div>
        <span class="text-[14px] mx-2">Back to<a href="{{ route('home') }}"
                class="hover:underline text-[#287D27] mx-2">Home</a>page.</span>
    </div>
</form>
