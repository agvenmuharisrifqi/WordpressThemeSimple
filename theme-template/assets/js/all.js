window.addEventListener('DOMContentLoaded', function(){
    if (window.innerWidth < 992){
        document.getElementById('toggle-nav').addEventListener('click', ()=>{
            document.getElementById('navbar-mobile').classList.toggle('slider');
        });
    }
});