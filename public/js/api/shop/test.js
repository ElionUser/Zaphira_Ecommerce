
function load() {

    form = document.getElementById('form-filters')
    Shop = document.getElementById('productsShop')

    form.onsubmit = async (e) => {
        Shop.innerHTML = ''
        e.preventDefault();
        const path = 'http://localhost/MVC-ORM-master/Shopping/1'
        let response = await fetch(path,{
          method: 'POST',
          body: new FormData(form)
        });
    
        let result = await response.json();
         
        if(result == '[]') {
            console.log('vacio')
        } else { templateString(result.products,result.path) }
      };
}

function templateString (data,path) {


    for(let item of data) {

        if(item.descount_active != 0) {decount = `<span class="badge-01 bg-cus-08 ml-2"><small>${item.descount} % OFF</small></span>`}        
        else {decount = ''}
        Shop.innerHTML += 
        `<div class="col-xl-12 bg-white box-list-products-shop">
            <a class="row" style="text-decoration:none;" href="${path}/productos/${item.products_id}"> 
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-4 py-1">
                    <img src="${path}/storage/images/products/${item.img}" class="img-fluid">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-8 py-5 f-b">
                    <h6>${item.name.toUpperCase()}</h6>
                    <small class="f-cb1">
                        <span class="icon-tag mr-2"></span>
                        ${item.name_categories} - ${item.name_brands}
                    </small>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 py-5 price">
                    <h6 class="f-c5 fw-b">$ ${item.price}</h6>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 py-5 tax">
                    <div class="col-xl-12 d-block mx-auto">

                        <small class="fw-b f-cb1">Imp: ${item.tax}</small> <br>
                        ${decount}
                        <br>
                    </div>        
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 py-5 f-b disponibility">
                    <small> <span class="icon-check mr-2"></span> Disponible </small>
                </div>
            </a>
        </div>`
    }
}

addEventListener('load',load)

    

// function promise() {
//     const path = 'http://localhost/MVC-ORM-master/Shopping/1'
//     const data = new FormData();
//     data.append('categories_id', 'Todos');
//     data.append('limit',1);
//     data.append('brands_id','Todos');

//     fetch(path, {
//         method: 'POST',
//         body: data
//     })
//     .then(function(response) {
//     if(response.ok) {
//         return response.text()
//     } else {
//         throw "Error en la llamada Ajax";
//     }

//     })
//     .then(function(texto) {
//     console.log(texto);
//     })
//     .catch(function(err) {
//     console.log(err);
//     });
// }

// function xhr(data) {

//     const path = 'http://localhost/MVC-ORM-master/Shopping/1'

//     xhrHttp = new XMLHttpRequest()
//     xhrHttp.open('post',path)
//     xhrHttp.onreadystatechange = () => {

//         if(xhrHttp.readyState == 4) {

//             console.log(data.response)
//         }
//     }
//     xhrHttp.send(data)
// }

// const Asyncrono = async() => {

//     const formdata = new FormData(form)
//     const path = 'http://localhost/MVC-ORM-master/Shopping/1'

//     try {
//         const res = await fetch(path,{
//             method: 'POST',
//             body : formdata,
//             headers: {
//                 Accept : 'application/json',
//                 'Content-Type': 'application/json'
//             }
//         })
//         const data = await res.text()
//         console.log(data)
//         // templateString(data)

//     } catch (e) { return e }
// }

