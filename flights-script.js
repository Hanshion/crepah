const list = document.querySelector('.list')
const items = document.querySelectorAll('.flight')


function filter() {
    list.addEventListener('click', event => {
        const targetId = event.target.dataset.id
        console.log(targetId)

        switch(targetId) {
            case 'all':
                items.forEach(item => {
                    item.style.display = 'inline-block'
                })
            break
            case 'local':
                items.forEach(item => {
                    if(item.classList.contains('local')){
                        item.style.display = 'inline-block'
                    } else {
                        item.style.display = 'none'
                    }
                })
            break
            case 'international':
                items.forEach(item => {
                    if(item.classList.contains('international')){
                        item.style.display = 'inline-block'
                    } else {
                        item.style.display = 'none'
                    }
                })
            break
        }
    })
}
filter()