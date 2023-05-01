const  butoon = document.querySelectorAll('.container table .butoon');
const  container_sub=document.querySelector('.container-sub');
const container=document.querySelector('.container');
const full=document.querySelector('.sidebar');
const butoon_x=document.querySelector('.container-sub .butoon');

for (const x of butoon) { 
    x.onclick=()=>{
        container_sub.style.display='block';
        container.style.opacity=0.1;
        full.style.opacity=0.1;
        const mssv = x.dataset.mssv;
        const xhr = new XMLHttpRequest();
        document.querySelector('#tuan').value=0;
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                onChange();
            }
        };
        xhr.open("POST","danh_Sach_Sv_GV_2.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("mssv=" +mssv );
    };
    console.log(x);
}
butoon_x.onclick=()=>{
    container_sub.style.display='none';
    container.style.opacity=1;
    full.style.opacity=1;
}


