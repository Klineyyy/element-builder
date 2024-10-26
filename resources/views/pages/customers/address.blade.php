{{-- <script>
    function get_region() {
    $.ajax({
        url: 'https://api/regions',
        type: 'GET',
        success: function(response) {
            const regionSelect = document.getElementById('inp_region');
            regionSelect.innerHTML = '<option value="">Select Region</option>'; // Add default placeholder

            response.forEach(function(region) {
                const option = document.createElement('option');
                option.value = region.regCode;
                option.textContent = region.regDesc;
                regionSelect.appendChild(option);
            });
        },
        error: function(err) {
            console.error("An error occurred: ", err);
        }
    });
}

 get_region();

</script> --}}