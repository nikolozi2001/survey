<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


const toggleBtn = document.querySelector('#toggleBtn');
const divList = document.querySelector('.second-table');

toggleBtn.addEventListener('click', () => {
    if (divList.style.display === 'none') {
        divList.style.display = 'block';
        toggleBtn.innerHTML = 'თეიბლის დამალვა';
    } else {
        divList.style.display = 'none';
        toggleBtn.innerHTML = 'თეიბლის გამოჩენა';
    }
})