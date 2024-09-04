$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#searchField').on('keyup', function() {
        let searchVal = $(this).val();

        $.ajax({
            url: '/user/search',
            type: 'GET',
            data: { search: searchVal },
            success: function(response) {
                $('#results').empty();

                if (response.length > 0) {
                    response.forEach(user => {
                        let result = `
                            <div class="flex items-center hover:bg-[#202532] cursor-pointer transition duration-150 ease-out hover:ease-in rounded h-[50px]">
                                <img src="/${user.profile_image}" class="rounded-full w-[30px] h-[30px] ml-2">
                                <a href="/profile/${user.username}"><span class="px-2 text-white text-[14px]">${user.name}</span></a>
                            </div>
                        `;
                        $('#results').append(result);
                    });
                } else {
                    $('#results').append('<div class="text-white text-center">No users found</div>');
                }
            }
        });
    });
});
