$(document).ready(function() {
    let originalSrc = $('#profileImage').attr('src');

    $('#fileInput').change(function(event) {
        let input = event.target;
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#profileImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            $('#profileImage').attr('src', originalSrc);
        }
    });

    $('#fileInput').on('click', function() {
        $(this).val(null);
    });
});
