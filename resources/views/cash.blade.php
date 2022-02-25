@extends('layouts.main') 
@section('content')
    <style>
        body {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("{{asset('img/body-bg.jpg')}}");
}

.card {
    border: none;
    height: 320px;
    background-color: black;
}

input[type=password]{
    width: 100%;
}

input[type=text]{
    width: 100%;
}

.forms-inputs {
    position: relative;
}

.bayar {
    color: white;
}

.forms-inputs span {
    position: absolute;
    top: -18px;
    left: 10px;
    background-color: #fff;
    padding: 5px 10px;
    font-size: 15px;
}

.forms-inputs input {
    height: 50px;
    border: 2px solid #eee;
}

.forms-inputs input:focus {
    box-shadow: none;
    outline: none;
    border: 2px solid #000;
}

.btn {
    height: 50px;
}

.success-data {
    display: flex;
    flex-direction: column;
}

.bxs-badge-check {
    font-size: 90px;
}

    </style>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data text-center" v-if="!submitted">
                    <div class="forms-inputs mb-4">
                        @foreach ($id as $item)
                            
                       
                        <form action="/cash/{{ $item }}">
                            
                            @endforeach
                     <p class="bayar">Masukan Kode Pembayaran!</p> 
                     <input type="password" name="code" id="password">  
                    </div>
                    <div class="check" style="float: left; color: white; padding-bottom: 20px;">
                    <input type="checkbox" id="checkbox"><span class="mx-2">Lihat Kode</span>
                    </div>
                    <button  type="submit" class="btn btn-dark w-100">Submit </button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        $('#checkbox').click(function(){
            if($(this).is(':checked')){
                $('#password').attr('type', 'text');
            }else {
                $('#password').attr('type', 'password');
            }
        });
    });

</script>
@endsection