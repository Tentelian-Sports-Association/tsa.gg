$(document).ready(function () {
    function readURL(input) {
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                console.log(e.target.result);
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
        $('#profile-pic-form').submit();
    });
});