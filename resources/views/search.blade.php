@extends('master')

@section('content')
<div class="custom-product"> 

        <div class="col-sm-4">
            <a href="">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="tranding-wrapper">
                <h4>Results For Products</h4>
                <div class="">
                    @foreach ($products as $item)
                    <div class="search-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="treding-img" src="{{$item['gallery']}}">
                        <div class="">
                        <h2>{{$item['name']}}</h2>
                        <h5>{{$item['description']}}</h5>
                        </div>
                    </a>
                    </div>       
                    @endforeach
                </div>
            </div>
        </div>

</div>
@endsection