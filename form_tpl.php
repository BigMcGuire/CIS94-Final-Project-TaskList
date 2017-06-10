<form class="form-horizontal" method="post">

<fieldset>
<!-- Form Name -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Task</label>  
  <div class="col-md-4">
  <input id="task" name="task" type="text" placeholder="Enter Task" class="form-control input-md">
  <span class="help-block">Enter the task in the box above.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="datecompleted">Date Created</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="datecreated" name="datecreated">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="datecompleted">Date Completed</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="datecompleted" name="datecompleted">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="datecompleted">Completed?</label>
  <div class="col-md-4">                     
    <input type="text" class="form-control" id="iscompleted" name="iscompleted">
  </div>
</div>

<div class="form-group">
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>
</form>
