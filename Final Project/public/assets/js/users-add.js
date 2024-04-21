$(document).ready(function () {
    $('#form-id').on('submit', function (e) {
        e.preventDefault();
        const email = $('#email').val();
        const username = $('#username').val();

        const data = {
            email,
            username,
        };

        $.ajax({
            url: `http://localhost:8888/users`,
            type: "POST",
            data: data,
            dataType: "json",
            success: function (data) {
                console.log(data);
                // Refresh the table data
                refreshTable();
                // Reset form fields
                $('#email').val('');
                $('#username').val('');
            },
            error: function (data){
                console.error(data);
                // Handle error
            }
        });
    });
});

function refreshTable() {
    $.ajax({
        url: "fetch_users.php", // Replace with the endpoint that fetches updated user data
        type: "GET",
        dataType: "json",
        success: function (data) {
            // Clear existing table rows
            $('#users-table tbody').empty();
            // Append new table rows with updated data
            data.forEach(function(user) {
                $('#users-table tbody').append(
                    '<tr>' +
                        '<td>' + user.id + '</td>' +
                        '<td>' + user.username + '</td>' +
                        '<td>' + user.email + '</td>' +
                        '<td>' + user.role + '</td>' +
                        '<td>' + user.date + '</td>' +
                    '</tr>'
                );
            });
        },
        error: function (xhr, status, error) {
            console.error('Failed to fetch user data:', status, error);
        }
    });
}
