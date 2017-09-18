@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>
@section('main')
<h3 id="q1">最新消息</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/newNews/create') }} role="button">發佈消息</a>
<a class="btn btn-warning" href="#" role="button">編輯消息</a>
<a class="btn btn-danger" href={{ url('webAdmin/newNews/delete/0') }} role="button">刪除消息</a>
<br><br>
<a class="btn btn-info" href={{ url('/webAdmin/newNews/managerFilter') }} role="button">管理分類</a>
@endsection