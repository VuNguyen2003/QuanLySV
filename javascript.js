var menubtn = document.querySelector('.gioi-Thieu nav .nav > i')
var dangnhapbangtin = document.querySelector('.gioi-Thieu nav .nav ul')
var body = document.querySelector('body')
var dangnhapbangtin_style = window.getComputedStyle(dangnhapbangtin)
menubtn.onclick=function(e){
    if(dangnhapbangtin_style.display == 'none'){
        dangnhapbangtin.style.display = 'block'
    }
    else{
        dangnhapbangtin.style.display = 'none'
    }
    e.stopPropagation()
}
body.onclick=function(){
    if(body.clientWidth <= 739){
        dangnhapbangtin.style.display = 'none'
    }
}
