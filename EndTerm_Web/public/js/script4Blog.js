document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.getElementsByClassName('dropdown');

    for (let i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-content').style.display = 'block';
        });

        dropdowns[i].addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-content').style.display = 'none';
        });
    }
});