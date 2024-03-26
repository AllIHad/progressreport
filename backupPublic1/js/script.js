var counter = 1;
function add_more() {
    counter++
    if (counter<4){
    var newDiv = `<div id="product_row${counter}" class="form-group row justify-content-center">
    <label for="inputEmail3" class="col-sm-5 col-form-label">Pilih Barang ${counter}</label>
    <div class="col-sm-7">
      <select class="custom-select" name="barang[]">
        @foreach ($nama_barang as $barangs)
        <option value="{{$barangs->nama_barang}}">{{$barangs->nama_barang}}</option>
        @endforeach
          
        </select>
    </div>
  </div>`
    var form = document.getElementById('input-form')
    form.insertAdjacentHTML('beforeend', newDiv);}  
}



function delete_row(id) {
    document.getElementById('product_row'+id).remove()
}

function submit_form() {
    var productData = []
    for (var i = 1; i <= counter; i++){
        var product_row = document.getElementById('product_row'+i)
        if (product_row) {
            var product_name = document.getElementById('name' + i).value
            var price = document.getElementById('price' + i).value
            var data = {
                name: product_name,
                price: price
            }
            productData.push(data)
        }
    }

    axios.post('/dynamicinput/submitform.php', {
        productData: productData
    }).then(resp => {
        window.location.reload()
    })
}