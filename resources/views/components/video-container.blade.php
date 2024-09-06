<div id="video-call-container" class="hidden flex justify-between flex-1 xl:flex-row 2xl:flex-row lg:flex-row md:flex-row flex-col">
    <div class="flex w-full text-white  justify-center items-center">
        <div>
            <div class="relative rounded overflow-hidden">
                {{-- Receiver Video --}}
                 <video id="remoteVideo" class="w-[830px] h-[442px] object-cover scale-x-[-1]"  autoplay>
                  Your browser does not support the video tag.
                </video> 
                <div class="w-[200px] overflow-hidden absolute bottom-[1px] right-0 bg-black">
                    {{-- Sender Video --}}
                    <video id="localVideo" class="w-full h-full scale-x-[-1]" muted autoplay>
                     Your browser does not support the video tag.
                    </video>
                </div>
                {{-- Name for receiver --}}
                <span id="video-call-name" class="absolute bottom-[0px] bg-black text-white rounded-tr-lg text-[14px] px-4 py-2"></span>
            </div>
            <div>
                <div><span></span></div>
            </div>
        </div>
    </div>
</div>
<div id="video-call-footer" class="hidden bg-[#404749] flex h-[65px] justify-between items-center">
    {{-- Mic/Cam mute buttons --}}
    <div class="px-6 space-x-4">
        <span id="muteMicBtn" class="text-white hover:text-red-400"><i class="fa-solid fa-microphone-slash cursor-pointer"></i></span>
        <span id="muteCamBtn" class="text-white"><i class="fa-solid fa-video"></i></span>
    </div>
    <div>
     </div>
     {{-- Hang up button --}}
    <div class="px-6 space-x-4">
        <span id="hangupBtn" class="text-[#F87979] text-[14px] hover:underline cursor-pointer">End Meeting</span>
    </div>
</div> 
