@extends('layouts.clone.layoutmin')

@section('content')
<div id="shopify-section-1478798179956" class="shopify-section homepage-section">
    <section class="border-top section products-section" data-section-type="featured-collection">
        <div class="container">
            <div class="opposing-items">
                <h1 class="section-heading left">Rules</h1>
            </div>
            <img src="{{ asset('images/2.png') }}" alt="" width="800" />  
        </div>
    </section>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



@endsection