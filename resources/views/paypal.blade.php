@extends('master')
@section('content')
<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
        <script>paypal.Buttons().render('body');</script>
@endsection
