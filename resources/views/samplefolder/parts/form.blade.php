
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
  <input type="text" name="name" class="form-control" placeholder="name" value="{{(isset($samples))?$samples->name:old('name')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Age</span>
        <input type="text" name="age" class="form-control" placeholder="age" value="{{(isset($samples))?$samples->age:old('age')}}" aria-label="age" aria-describedby="basic-addon1">
     </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary"  value="Save changes">
      </div>