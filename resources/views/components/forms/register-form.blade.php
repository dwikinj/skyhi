<form action="{{ route('register.submit') }}" method="POST">
    @csrf
    <div class="mx-auto text-white flex-col flex">
        <h1 class="2xl:text-[28px] xl:text-[28px] lg:text-[28px] text-[20px] font-semibold">SkyHi</h1>
        <h2 class="text-[26px] xl:mt-8 2xl:mt-8 lg:mt-4">Sign up</h2>
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
            class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4">
        @error('name')
            <div
                class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
                {{ $message }}
            </div>
        @enderror

        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"
            class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4">
        @error('username')
            <div
                class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
                {{ $message }}
            </div>
        @enderror

        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"
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
        <button type="submit"
            class="my-4 bg-[#487D27] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[60px] text-[16px] rounded px-4 font-semibold  hover:bg-[#287D27]">Create
            account</button>
        <div>
            <span class="text-[14px] mx-2">If you already have an account just<a href="{{ url('/') }}"
                    class="hover:underline text-[#287D27] mx-2">Sign-in</a>.</span>
        </div>
    </div>
</form>
