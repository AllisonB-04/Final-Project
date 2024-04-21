$(document).ready(function () {

    $('#login-form').on('submit', function (e) {
        e.preventDefault();

        const formData = {
            email: $('#email').val(),
            password: $('#password').val()
        };

        // Send POST request to login endpoint
        $.ajax({
            url: 'login.php', // Adjust the URL according to your backend endpoint
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Log a message to the console upon successful login
                    console.log('Logged in successfully. Redirecting to home page...');
                    // Redirect to home page if login is successful
                    window.location.replace('home');
                } else {
                    // Handle login errors
                    if (response.errors.email) {
                        $('#email-error').text(response.errors.email);
                    } else if (response.errors.password) {
                        $('#password-error').text(response.errors.password);
                    } else {
                        // Handle other errors if needed
                        console.error('An unexpected error occurred. Please try again later.');
                    }
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX request failed:', status, error);
                // Handle other errors if needed
                if (xhr.status === 500) {
                    // Internal server error - handle accordingly
                    console.error('Internal server error. Please try again later.');
                } else if (xhr.status === 404) {
                    // Resource not found - handle accordingly
                    console.error('Resource not found. Please check your network connection.');
                } else {
                    // Other error cases - handle accordingly
                    console.error('An unexpected error occurred. Please try again later.');
                }
            }
        });
    });

});
