<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="min-h-screen w-full bg-[#00FFB3] flex items-center justify-center">
        <div
            class="lg:w-[1200px] lg:h-[800px] 2xl:w-[1200px] 2xl:h-[800px] xl:w-[1200px] xl:h-[800px] bg-[#0F121C] my-3 flex justify-between shadow-lg rounded overflow-hidden xl:flex-row 2xl:flex-row lg:flex-row flex-col">
            @yield('content')
            <div class="xl:w-[577px] 2xl:w-[577px] lg:w-[577px] bg-[#080D14] flex xl:py-20 px-4 pb-10 w-full">
                @yield('form')
            </div>
        </div>
    </div>
    <!-- Scripts here -->
    {{-- preview selected image before upload --}}
    <script src="{{ asset('assets/js/previewImage.js') }}"></script>
    {{-- end preview selected image before upload --}}


</body>

</html>
