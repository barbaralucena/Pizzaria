document.addEventListener("DOMContentLoaded", ()=>{
    const removeItemCartButtons= document.querySelectorAll(".removeItemCart");

    for(let removeItemCartButton of removeItemCartButtons){
        const tr= removeItemCartButton.parentNode.parentNode;
        const removeItemData= "removeItem_id="+removeItemCartButton.dataset.product_id;
        
        removeItemCartButton.addEventListener("click", ()=>{
            fetch("/removeproduct", {
                "method":"POST",
                "headers":{
                    "Content-Type":"application/x-www-form-urlencoded"
                },
                body: removeItemData
            })
            .then(response=>{
                if(response.status==200){
                    tr.remove();
                }
                else{
                    alert("Ocorreu um erro, tente mais tarde");
                }
            });
        });
    }
});