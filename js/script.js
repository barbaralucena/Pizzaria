document.addEventListener("DOMContentLoaded", ()=>{
    const removeItemCartButtons= document.querySelectorAll(".removeItemCart");
    const quantityInputs= document.querySelectorAll(".change-quantity");

    function calculateTotal(){
        let total=0;
        const subtotals=document.querySelectorAll(".subtotal");

        for(let subtotal of subtotals){
            total=Number(subtotal.textContent)+total;
        }

        document.querySelector(".total").textContent=total;
    }

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

                    calculateTotal();
                }
                else{
                    alert("Ocorreu um erro, tente mais tarde");
                }
            });
        });
    }
    for(let input of quantityInputs){
        const tr= input.parentNode.parentNode;
        const product_id= tr.dataset.product_id;

        fetch("/quantitychange/"+ product_id, {
            "method":"POST",
            "headers":{
                "Content-Type":"application/x-www-form-urlencoded"
            },
            "body":"quantity="+ input.value
        })
        .then(response=>{
            if(response.status==200){
                const subtotal=input.value*tr.dataset.price;

                tr.querySelector(".subtotal").textContent=subtotal;
                
                calculateTotal();

            }else{
                alert("Ocorreu um erro, tente mais tarde");
            }
        });
    }
});