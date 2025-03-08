const create = document.getElementById("createAcc");
const login = document.getElementById("loginAcc");

const left = document.getElementById("left");
const right = document.getElementById("right");

left.classList.toggle('change');

create.onclick =()=> {
    right.classList.toggle('change');
    left.classList.remove('change');
    
}
login.onclick =()=> {
    left.classList.toggle('change');
    right.classList.remove('change');
}
