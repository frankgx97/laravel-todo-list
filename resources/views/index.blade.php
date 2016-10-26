@include ('header');
<div class="container">
  @if ($illegal)
    <div class="alert alert-dismissible alert-danger">
      <strong>你是不是想搞事情</strong>
    </div>
  @endif
  <a href="add" class="btn btn-raised btn-primary">新建</a>
  <div class="jumbotron">
    <h3>任务清单</h3>
    @foreach ($tasks as $i)
    <div class="panel panel-default">
      <div class="panel-body">
        <span><a href="/del/{{$i->id}}" class="btn btn-raised btn-success">完成</a>
		{{ $i -> task }}</span>
      </div>
    </div> 
    @endforeach
  </div>
</div>


