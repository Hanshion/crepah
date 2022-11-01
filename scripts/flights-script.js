const list = document.querySelector('.list')
const items = document.querySelectorAll('.flight')

function fadeElementIn(element) {
    element.style.display = "inline-block"

    setTimeout(() => {
        element.style.opacity = 1
    }, 300)
}

function fadeElementOut(element) {
    element.style.opacity = 0

    setTimeout(() => {
        element.style.display = "none"
    }, 300)
}

function filter() {
    list.addEventListener('click', event => {
        const targetId = event.target.dataset.id
        console.log(targetId)

        switch(targetId) {
            case 'all':
                items.forEach(item => {
                    fadeElementIn(item)
                })
            break
            case 'local':
                items.forEach(item => {
                    if(item.classList.contains('local')){
                        fadeElementIn(item)
                    } else {
                        fadeElementOut(item)
                    }
                })
            break
            case 'international':
                items.forEach(item => {
                    if(item.classList.contains('international')){
                        fadeElementIn(item)
                    } else {
                        fadeElementOut(item)
                    }
                })
            break
        }
    })
}

filter()
