<form action="{{url('student')}}" method="post">
{!! csrf_field() !!}
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
  <input type="text" name="name" class="form-control" placeholder="name" value="{{(isset($student))?$student->name:old('name')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

     <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Age</span>
        <input type="text" name="age" class="form-control" placeholder="age" value="{{(isset($student))?$student->age:old('age')}}" aria-label="age" aria-describedby="basic-addon1">
     </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Submit">
      <!-- </div> -->
</form>

<form action="index.html" method="post">
<input type="submit" class="btn btn-primary" form="create"/>
</form>


<form action="/action_page.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form> 