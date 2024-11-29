import './bootstrap';

window.Echo.private(`App.Models.User.${userId}`)
    .notification((notification) => {
        console.log('Notification received:', notification);

        // Brauzerda xabarni ko'rsatish uchun toastr yoki boshqa kutubxona ishlatishingiz mumkin
        alert(`New Notification: ${notification.title}`);
    });
