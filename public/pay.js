
        $(document).ready(
        function(){
        $('#cardNumber').on('keypress change', function () {
        $(this).val(function (index, value) {
        return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
    });
    });
    });
    