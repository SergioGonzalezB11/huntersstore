var frmHeader = [];
var fmrDetalles = [];
let myHeaders = new Headers({ "Content-Type": "application/json" })
// Función para agregar un encabezado de factura al arreglo
document.querySelector("#agregarHeader").addEventListener("click",(e)=>{
    (e).preventDefault;
    let form = document.querySelector("#frmCabeza");
    let dataHeader = Object.fromEntries(new FormData(form));
    frmHeader.push(dataHeader);
    console.log(frmHeader);
    //document.getElementById("headerForm").reset();
});
// document.querySelectorAll("#agregarDetails").addEventListener("click",(e)=>{
//     let form = document.querySelector("#detailForm");
//     let dataDetail = Object.fromEntries(new FormData(form));
//     fmrDetalles.push(dataDetail);
//     console.log(fmrDetalles);
// //     document.getElementById("detailForm").reset();
    
// });
document.querySelector("#agregar").addEventListener("click",e=>{
    let formulario =document.querySelector("#detalles");
    formulario.innerHTML+=/*html*/` 
    <form action="" id="detailForm" method="POST">
        <div class="p-3 row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="producto" class="form-label">Producto</label>
                    <input type="text" name="producto" class="form-control" id="producto">
                </div>
            </div>
            <div class="col-1">
                <div class="mb-3">
                    <label class="form-label" for="valor">valor</label>
                    <input type="number" name="valor" class="form-control" id="valor"value="valor">
                </div>
            </div>
            <div class="col-2">
                <div class="mb-3">
                    <label class="form-label" for="cantidad">cantidad</label>
                    <input type="number" name="cantidad" class="form-control" id="cantidad"value="cantidad">
                </div>
            </div>
            <div class="col-2">
                <div class="mb-3">
                    <label class="form-label" for="total">total</label>
                    <input type="number" name="total" class="form-control" id="total"value="total">
                </div>
            </div>
            <div class="col-1">
                <div class="mt-2" ><br>
                    <button type="button" class=" bg-success "> + </button>
                </div>
            </div>
            <div class="col-1">
                <div  class="mt-2"><br>
                    <button type="button" class="bg-secondary "> - </button>
                </div>
            </div>
            <div class="col-1">
            <div class="mt-2" ><br>
                <button type="button" id="agregarDetails"class="bg-primary ">check </button>
            </div>
        </div>
    </form>    
    <div class="col-1">
        <div  class="mt-2"><br>
            <button type="button" class="bg-danger "> delete </button>
        </div>
    </div>
    </div>
    `
})
// Función para enviar los datos al script PHP
function submitForm() {
    var data = {
        headers: frmHeader,
        details: fmrDetalles
    };

    fetch("saveData.php", {
        method: "POST",
        headers: myHeaders,
        body: JSON.stringify(data)
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(response) {
        document.querySelector("#result").innerHTML = response;
      // Restablece los arreglos después de enviar los datos
        frmHeader = [];
        fmrDetalles = [];
    });
}

