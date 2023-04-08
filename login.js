function Check(ob){
    ob.Rules.forEach(rule => {
        let inputelement=document.querySelector(rule.value);
        let errorelement=inputelement.parentElement.querySelector('.error');
        inputelement.onblur=function(){
            let error=rule.test(inputelement.value);
            if(error){
                errorelement.innerText=error;
            }
            else {
                errorelement.innerText=' ';
            }
        }
        inputelement.onclick=function(){
            errorelement.innerText=' ';
        }
    });
    
}

Check.isRequired=function(value){
    return{
        value:value,
        test:function(mess){
            return mess?undefined:"Vui lòng nhập hợp lệ";
        }
    };
}