@extends('admin.index')
@section('navbar')
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="index.html">Starlight</a>
  <span class="breadcrumb-item active">Dashboard</span>
</nav>
@endsection
@section('main')

<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">Basic Responsive DataTable</h6>
  <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

  <div class="table-wrapper">
    <table id="datatable1" class="table display responsive nowrap">
      <thead>
        <tr>
          <th class="wd-15p">#</th>
          <th class="wd-15p">Category name</th>
          <th class="wd-20p">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($categories as $key=> $category)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$category->category_name }}</td>
          
            <td>
              <form action="{{ route('category.destroy', $category->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a> 

                <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
              </form>
            </td>
            @endforeach
          </tr>


        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div><!-- card -->



  @endsection
