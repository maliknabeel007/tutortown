@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><span class="badge badge-pill badge-primary">Replies of the request</span></li>
                    </ul>
<br>
                            <ul class="thread-list">
                            @foreach( $show as $s)
                                <li class="thread"><span class="title">{{$s ->replyr }} </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li> <hr>
                             @endforeach
                           
                        </div>
                        {{$show->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
