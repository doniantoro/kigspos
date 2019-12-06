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
                        <h4 class="card-title">Category Management</h4>
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
                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-plus-circle"></i> Add Category</h4>
    
                                    <div class="form-group">
                                        <label for="userinput5" class="sr-only">Kategori</label>
                                        <input class="form-control" placeholder="Kategori" id="userinput5" name="category">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="userinput6" class="sr-only">Jenis Permata</label>
                                        <input class="form-control" placeholder="Jenis Permata" id="userinput6" name="type">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="userinput8" class="sr-only">Deskripsi</label>
                                        <textarea id="userinput8" rows="5" class="form-control" name="description" placeholder="Deskripsi"></textarea>
                                    </div>
    
                                </div>
    
                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="ft-check"></i> Submit
                                    </button>
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
								<th>Kategori</th>
								<th>Deskripsi</th>
								<th>Jenis Permata</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
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
