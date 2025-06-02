const select = document.getElementById('type');

let sections = document.querySelector('.form-group-select').children;

let facturaGroup = document.querySelector('.factura-group');
let messageGroup = document.querySelector('.message-group');
let queryGroup = document.querySelector('.query-group');

select.addEventListener('change',(e)=>{

    for(let i=0;i<sections.length;i++){

        if(e.target.value==i){
           sections[i].style.display = 'flex';
        }else{
            sections[i].style.display='none'
        }

    }

})