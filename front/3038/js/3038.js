
document.querySelectorAll('#deviceTab .nav-link').forEach(link => {
    link.addEventListener('click', function () {
        document.querySelectorAll('#deviceTab .nav-link i').forEach(icon => {
            icon.classList.add('d-none');
        });
        this.querySelector('i').classList.remove('d-none');
    });
});
