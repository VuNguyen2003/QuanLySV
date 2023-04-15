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


// sub container
var backgroundSubContainer = document.querySelector('.background-sub-container')
var tieuDe_SubContainer= document.querySelector('.sub-container .tieu-de')
var noiDung_SubContainer = document.querySelector('.sub-container p')
var close = document.querySelector('.close-sub-container')
var xemChiTiet = document.querySelectorAll('.chi-tiet span')
var mangXemChiTiet = [...xemChiTiet]
close.onclick = function(){
    backgroundSubContainer.classList.remove('open-sub-container')
}
mangXemChiTiet.forEach(function(node){
    node.addEventListener('click',function(){
        backgroundSubContainer.classList.add('open-sub-container')
        var tieuDe = node.parentElement.parentElement.querySelector('.tieu-de').innerHTML
        var noiDung = node.parentElement.parentElement.querySelector('.noi-dung').innerHTML
        tieuDe_SubContainer.innerHTML=tieuDe
        noiDung_SubContainer.innerHTML=noiDung
    })
})
