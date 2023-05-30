import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


if (window.location.href.includes('comics/')){
    const deleteButton = document.querySelector('button.deleteButton')
    const confirmButton = document.querySelector('button.confirmDelete')
    const undoDelete = document.querySelector('button.undoDelete')

    const handleClick = function (event)
    {
        event.preventDefault();
        deleteButton.disabled = true
        confirmButton.classList.remove('d-none')
        undoDelete.classList.remove('d-none')
        undoDelete.addEventListener('click', (e) => {
            e.preventDefault()
            deleteButton.disabled = false
            confirmButton.classList.add('d-none')
            undoDelete.classList.add('d-none')
        })
    }

    deleteButton.addEventListener('click', handleClick)
}


