@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">
         <div class="form-group">
             <label for="menu">Tên Danh Mục</label>
             <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
        </div>  
        <div class="form-group">
            <label >Danh Mục </label>
            <select name="parent_id"  class="form-control">
                <option value="0">Danh Mục Cha</option>
                @foreach($menus as $menu)
                <option value=" {{$menu->id}} ">{{ $menu->name }}</option>

                @endforeach

            </select>
        </div >  
            <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="description" class="form-control" ></textarea>
        </div>

        <div class="form-group">
            <label> Mô Tả Chi Tiết</label>
            <textarea name="content"  id = "content" class="form-control" ></textarea>  
        </div>
      
        <div class="form-group">
            <label >Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="1" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>

            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no-active" name="active" >
                <label for="no-active" class="custom-control-label">Không</label>
            </div> 

        </div>
 

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
    @csrf
</form>

@endsection
