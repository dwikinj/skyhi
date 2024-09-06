<div id="caller-popup-container" class="hidden fixed bg-gray-800/[0.80] flex items-center justify-center min-h-screen w-full z-[1000]">
	<div class="bg-[#2E2C2C] w-[400px] h-[100px] rounded-md flex items-center justify-between px-6">
		<div class="flex items-center">
		{{-- Caller image--}}
			<img id="caller-profileImage" src="" class="w-[35px] object-cover h-[35px] rounded-full"> 
		{{-- Caller name--}}
		<span id="caller-name" class="text-white mx-2 text-[14px]">is calling you</span>
		</div>
		<div class="flex">
			{{-- Accept / Decline Buttons --}}
			<div class="flex call-buttons">
				<span id="declineBtn" class="mx-4 text-[#F92E2E] hover:text-red-600 rotate-[135deg]"><i class="fa-solid fa-phone cursor-pointer"></i></span>
				<span id="acceptBtn" class="mx-2 text-[#02C509] hover:text-green-400 cursor-pointer"><i class="fa-solid fa-phone-flip"></i></span>
			</div>
		</div>
	</div>
</div>
