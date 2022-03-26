
<div class="modal fade" id="modaledit{{$model->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">    
              <h5 class="modal-title" id="exampleModalLabel">Edit Data Customer</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action={{route('cust.update',$model->id)}}>
              <div class="modal-body">
                  @method('PUT')
                  {{ csrf_field() }}
                  <div class="mb-3">
                      <label class="col-form-label">Code</label>
                      <input type="text" name="code" class="form-control" value="{{$model->code}}" required autofocus
                          placeholder="Entry Your Customer Code">
                  </div>
                  <div class="mb-3">
                      <label class="col-form-label">Date</label>
                      <input type="date" name="date" class="form-control"  id="date{{$model->date}}"  
                      value="{{ \Carbon\Carbon::parse($model->date)->format('Y-m-d')}}"
                      required placeholder="Entry Date Now">
                  </div>
                  <div class="mb-3">
                      <label class="col-form-label">Customer Name</label>
                      <input type="text" name="customer" class="form-control" value="{{$model->customer}}" required
                          placeholder="Entry Your Customer Name">
                  </div>
                  <div class="mb-3">
                      <label class="col-form-label">City</label>
                          <select class="form-select" name="city" value="{{$model->city}}" required
                          aria-label="Default select example"
                          placeholder="Entry Your Customer City">
                          <option selected> Select City </option>
                          <option value=" Batam Center "> Batam Center </option>
                          <option value=" Batu Aji "> Batu Aji </option>
                          <option value=" Balerang "> Barerang </option>
                          <option value=" Bengkong Laut "> Bengkong Laut </option>
                          <option value=" Bengkong Lama "> Bengkon Lama </option>
                          <option value=" Nagoya "> Nagoya </option>
                      </select>
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
<form action="{{route('cust.destroy',$model->id)}}" method="post" class="d-inline">
  @method('delete')
  @csrf
  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">Delete</button>
</form>
</td>

{{-- <script> $('#date{{$model->date}}').datepicker('update', '$model>-date') </script> --}}

{{-- <script>console.log("v","{{$model->date}}")
    let value = "{{$model->date}}"
    $("#date{{$model->id}}").val(value)
</script> --}}
