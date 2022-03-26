
<div class="modal fade" id="modaledit{{$model->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">    
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="/item_update/{{$model->id}}">
                <div class="modal-body">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label class="col-form-label">Name Item</label>
                        <input type="text" name="item" class="form-control" value="{{$model->item}}" required autofocus
                            placeholder="Entry Your Name Item">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Quantity</label>
                        <input type="text" id="jumlah{{$model->id}}" name="qty" onkeyup="update_value('{{$model->id}}')" class="form-control" value="{{$model->qty}}"
                        required placeholder="Entry Date Quantity">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Price</label>
                        <input type="text" id="harga{{$model->id}}" name="price" onkeyup="update_value('{{$model->id}}')" class="form-control" value="{{$model->price}}"
                            required
                            placeholder="Entry Your Item Price">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Total</label>
                        <input type="text" id="total{{$model->id}}" name="total" class="form-control" value="{{$model->price * $model->qty}}"
                            required
                            placeholder="Entry Your Item Price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="liveToastBtn">Save</button>
                </div>
            </form>
        </div>
    </div>
  </div>
  <td class="text-center">
  <button type="button" class="btn btn-sm btn-primary get_data_json" data-bs-toggle="modal" data-bs-target="#modaledit{{$model->id}}" >
    Edit
  </button>
  <form action="/item_destroy/{{$model->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</button>
  </form>
  </td>
  