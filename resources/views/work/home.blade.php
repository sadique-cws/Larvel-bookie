@extends('work.base')

@section('content')
    <div class="container-fluid mt-4">
        @foreach ($genres as $g)
        
        <div class="row">
            <div class="col-12">
                <h4>{{$g->title}}</h4>
                <div id="slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item  active">
                          <div class="row">
                                @for($x=1;$x<=10;$x++)
                                <div class="col-2">
                                    <div class="card">
                                    <img src="{{asset('cover.jpg')}}" alt="" class="img-fluid">
                                        <div class="card-body">
                                            <h2 class="h6">A monk sell his ferreri</h2>
                                            <h5>500/-</h5>
                                        </div>
                                    </div>
                                </div>
                                @if ($x%6==0)
                            </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                            @endif
                                @endfor
                            </div>    
                        </div>    
                    </div>
                    <a class="carousel-control-prev" href="#slide" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#slide" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                  </div>
            
                    <a href="" class="btn btn-primary bg-gradient float-end mt-2">>> View all</a>
                </div>
        </div>
        @endforeach
    </div>
@endsection