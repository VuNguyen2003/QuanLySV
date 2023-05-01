const  container_sub=document.querySelector('.container-sub');
const container=document.querySelector('.container');
const full=document.querySelector('.sidebar');
const butoon_x=document.querySelector('.container-sub .butoon');


butoon_x.onclick=()=>{
    container_sub.style.display='none';
    container.style.opacity=1;
    full.style.opacity=1;
}

const container_sub_kq=document.querySelector('.container-sub_kq');
const butoon_x_kq=document.querySelector('.container-sub_kq .butoon_kq');

butoon_x_kq.onclick=()=>{
    container_sub_kq.style.display='none';
    container_sub.style.opacity=1;
}

const container_sub_them=document.querySelector('.container-sub_them_diem');
const butoon_x_them=document.querySelector('.container-sub_them_diem .butoon_them_diem');

butoon_x_them.onclick=()=>{
    container_sub_them.style.display='none';
    container_sub.style.opacity=1;
}

