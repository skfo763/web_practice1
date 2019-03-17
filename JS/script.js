wbtn = document.getElementById('white_btn');
drtn = document.getElementById('dracula_btn');

wbtn.addEventListener('click', () => {
    document.getElementById('background').className='white';
});

drtn.addEventListener('click', () => {
    document.getElementById('background').className='dracula';
})