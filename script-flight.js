const list = document.querySelector('list'),
items = document.querySelectorAll('.flight')

function filter() {
    list.addEventListener('click', event => {
        const targetId = event.target.dataset.id
        console.log(targetId)
    })
}
filter()