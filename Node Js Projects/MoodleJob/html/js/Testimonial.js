( function () {
    const buttons = document.querySelectorAll('.btn')
    const sort = document.querySelectorAll('.ppl')

    buttons.forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault()
            const filter = e.target.dataset.filter

            sort.forEach((item) => {
                if (filter === 'all') {
                    item.style.display = 'flex'
                }
                else {
                    if (item.classList.contains(filter)) {
                        item.style.display = 'flex'
                    } else {
                        item.style.display = 'none'
                    }
                }
            })
        })
    })
})();