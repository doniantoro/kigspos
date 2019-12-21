@extends('layouts.master')

@section('title')
    <title>Edit Kategori</title>
@endsection

@section('content')
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
        <div class="content-body">
          <div class="row">
              <div class="col-md-12">
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
                              @if (session()->has('message'))
                                  <div class="alert alert-success">
                                      {{session()->get('message')}}
                                  </div>
                                  
                              @endif
                              {{-- {{dd($categories)}} --}}
                              <form class="form" action="#" method="POST" >
                                  @csrf
                                  <input type="hidden" name="_method" value="PUT">
                                  <div class="form-body">
                                      <h4 class="form-section"><i class="fa fa-plus-circle"></i> Add Category</h4>

                                      <div class="form-group">
                                          <label for="userinput5" class="sr-only">Kategori</label>
                                          <input class="form-control" placeholder="Kategori" id="userinput5" name="name" value="{{$categories->name}}">
                                      </div>
      
                                  </div>
      
                                  <div class="form-actions right">
                                      <button type="submit" class="btn btn-outline-primary">
                                          <i class="ft-check"></i> Update
                                      </button>
                                      {{ csrf_field() }}

                                  {{-- {{dd($categories->id)}} --}}
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
      </section>
      <!-- Card sizing section end -->
          </div>
      </div>
      </body>
      @slot('footer')
          
      @endslot
@endsection