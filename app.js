$( document ).ready(function() {
    $.ajax('http://ip-api.com/json')
    .then(        
        function success(response) {
        $('#country').val("Current Country: " + response.country);
        $('#state').val("Current State: " + response.regionName );
        $('#city').val("Current City: " + response.city );
    });
});
