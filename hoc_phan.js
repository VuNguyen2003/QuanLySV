const  butoon = document.querySelector('.container table .butoon');
const  container_sub=document.querySelector('.container-sub');
const container=document.querySelector('.container');
const full=document.querySelector('.sidebar');
const butoon_x=document.querySelector('.container-sub .butoon');
butoon.onclick=()=>{
    container_sub.style.display='block';
    container.style.opacity=0.1;
    full.style.opacity=0.1;
};

butoon_x.onclick=()=>{
    container_sub.style.display='none';
    container.style.opacity=1;
    full.style.opacity=1;
}