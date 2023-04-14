var previous = document.querySelector('.previous')
var next = document.querySelector('.next')
var thongTin = document.querySelector('.thong-tin')
var items= document.querySelectorAll('.item')
var pos = 0;
var check = () =>{
    if(pos == 0){
        previous.style.display = "none";
    }
    else{
        previous.style.display = "block";
    }
    if(items.length < 4 || -pos/34 == items.length-3){
        next.style.display = "none"
    }
    else{
        next.style.display = "block";
    }
}
check()
next.addEventListener('click',function(){
    pos -= 34;
    thongTin.style.transform = `translateX(${pos}%)`
    check()
})
previous.addEventListener('click',function(){
    pos += 34;
    thongTin.style.transform = `translateX(${pos}%)`
    check()
})
