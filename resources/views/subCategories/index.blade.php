@extends('layouts.master')

@section('title')
    <title>Category Management</title>
@endsection

@section('content')
    <body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
      <div class="content-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sub Category Management</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{session()->get('message')}}
                                </div>
                                
                            @endif
                            <form class="form" action="{{route('subCategories.store')}}" method="POST" >
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-plus-circle"></i> Add Category</h4>
    
                                    <div class="form-group">
                                        <label for="userinput5" class="sr-only">Kategori</label>
                                        <input class="form-control" placeholder="Kategori" id="userinput5" name="name" required>
                                    </div>
    
                                    {{-- <div class="form-group">
                                        {{-- {{dd($subCategories)}} --}}
                                        {{-- <select class="select2 form-control">
                                        @foreach ($subCategories as $subCategory)    
                                            <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                        @endforeach
                                        </select> --}}
                                    {{-- </div> --}}
    
                                </div>
    
                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="ft-check"></i> Submit
                                    </button>
                                    {{ csrf_field() }}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Card sizing section end -->

    <!-- Small table start -->
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
                <h4 class="card-title">List Kategori</h4>
                <br>
                @if (session()->has('success'))
                    <div class="alert alert-danger">
                        {{session()->get('success')}}
                    </div>
                @endif
				<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        		<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content">
				<div class="table-responsive">
					<table class="table table-sm mb-0">
						<thead>
							<tr>
								<th>#</th>
								<th>Sub Kategori</th>
                                <th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @php $no = 1; @endphp
                            @forelse ($subCategories as $category)
                                <tr>
                                    <th>{{$no++}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                            <form action="{{ route('subCategories.destroy', $category->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ route('subCategories.edit', $category->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada Data</td>
                                </tr>
                            @endforelse
						</tbody>
					</table>
				</div>		
			</div>
		</div>
	</div>
<!-- Small table end -->
        </div>
    </div>
    </body>
    @slot('footer')
        
    @endslot
@endsection
