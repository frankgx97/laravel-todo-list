@include ('header');
<div class="container">
  <div class="jumbotron">
	<form class="form-horizontal" action="/add" method="post">
	  <fieldset>
		<legend>新建</legend>
		  <label for="newtask" class="col-md-2 control-label">新任务</label>
		  <div class="col-md-10">
			<input type="text" class="form-control" name="newtask">
		  </div>
      <div class="col-md-10 col-md-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
         {{ csrf_field() }}
	  </fieldset>
	</form>
  </div>
</div>
