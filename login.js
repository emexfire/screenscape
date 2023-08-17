$.ajax({
    type: "POST",
    url: "login_process.php",
    data: formData,
    success: function(response) {
        window.location.href = 'welcome.php';
    },
    error: function(error) {
        // Handle errors
    }
});