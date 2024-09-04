<form method="post" class="w-full" action="{{ route('login') }}">
    @csrf
    <div class="mx-auto text-white flex-col flex">
        <h1 class="2xl:text-[28px] xl:text-[28px] lg:text-[28px] text-[20px] font-semibold">SkyHi</h1>
        <h2 class="text-[26px] xl:mt-8 2xl:mt-8 lg:mt-4">Sign In</h2>
        <input type="email" name="email" placeholder="Email"
            class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[50px] text-[14px] rounded px-4">
        <input type="password" name="password" placeholder="Password"
            class="my-2 bg-[#404749] lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[50px] text-[14px] rounded px-4">

        @if (session('error'))
            <div
                class="my-0 lg:w-[470px] xl:w-[470px] 2xl:w-[470px] h-[28px] text-[11px] text-[#FC2323] bg-[#F07650]/[0.20] flex items-center px-2 rounded">
                {{ session('error') }}
            </div>
        @endif


        <button type="submit"
            class="my-4 bg-[#487D27] lg:w-[470px] xl:w-[470px] 2xl:w-[470px]  h-[60px] text-[16px] rounded px-4 font-semibold  hover:bg-[#287D27]">Log
            in</button>
        <div>
            <span class="text-[14px] mx-2">If you don’t have an account you can
                <a href="{{ route('register') }}" class="hover:underline text-[#F87979] mx-2">Sign-up</a>for free</span>
        </div>
    </div>
</form>
