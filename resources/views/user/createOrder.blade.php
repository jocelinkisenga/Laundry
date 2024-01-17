@extends("layouts.app")
@section("content")
    @livewire('create-order-list' , ["orderId" => $orderId])
@endsection
