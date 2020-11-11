@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-light font-weight-bolder">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class= "font-weight-bold"> Welcome, {{Auth::user()->name}}!</p>

                    <div class="navabar-search">
                        <form action="{{route('search')}}" method="GET" class="navbar-search__form">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group" style="display:flex">
                                            <input type="text" class="form-control" value="" name="query" id="query"
                                                placeholder="Search">
                                            <button class="btn btn-dark navbar-search__button"> Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

