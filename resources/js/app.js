import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
const btnDelete = document.querySelectorAll('.delete-btn');
btnDelete.forEach(btn => {
    btn.addEventListener('click', event => {
        event.preventDefault();
        console.log(event.currentTarget.dataset.title);
        const modal = new bootstrap.Modal(
            document.getElementById("my-modal")
        );
        document.querySelector(".modal-title").textContent = `Vuoi eliminare il progetto ${event.currentTarget.dataset.title}?`;
        const modalBtn = document.querySelector("#delete-project");
        modalBtn.addEventListener('click', () => {
            btn.parentElement.submit();
        })
        modal.show();
    })
})