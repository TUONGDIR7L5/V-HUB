const carousel = document.querySelector('#multiCardCarousel');
const bsCarousel = new bootstrap.Carousel(carousel, {
interval: 3000, // chạy mỗi 3 giây
ride: 'carousel',
pause: false,   // không dừng khi rê chuột
wrap: true
});


document.getElementById('openProfileBtn').addEventListener('click', function () {
const profile = document.querySelector('.profile');
profile.classList.toggle('show');
});

document.addEventListener('click', function (event) {
const profile = document.querySelector('.profile');
const button = document.getElementById('openProfileBtn');
if (!profile.contains(event.target) && !button.contains(event.target)) {
    profile.classList.remove('show');
}
});

