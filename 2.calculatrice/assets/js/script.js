function init(){

    let btn = document.querySelector('#C')
    let nbr1 = document.querySelector('#nbr1')
    let nbr2 = document.querySelector('#nbr2')

    btn.addEventListener('click', () => {
        nbr1.value = ""
        nbr2.value = ""
    })
}

window.onload = init;
