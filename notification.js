// Function to display notification
function displayNotification() {
    // Check if the browser supports notifications
    if ("Notification" in window) {
        // Request permission for notifications
        Notification.requestPermission().then(function(permission) {
            if (permission === 'granted') {
                // Create notification
                var notification = new Notification('Welcome to Webbee!', {
                    body: 'Thank you for visiting our website.'
                });
            }
        });
    }
}

// Call the function to display notification
displayNotification();
