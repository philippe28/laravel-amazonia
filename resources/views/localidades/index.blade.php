@extends('layout')


@section('content')

<div style="background: url('http://images6.fanpop.com/image/photos/33100000/Amazon-amazon-rainforest-33125137-1024-768.jpg') center ;width:100%;    height: 400px;">

<center>
<h2 >Salve á Amazonia</h2>
</center>


</div>

<div >
<br><br>
<center>
<h3>Preencha o formulario para saber como salvar à Amazonia</h3>
</center>



<br><br>


          {!! Form::open(array('route' => 'localidades.store','method'=>'POST')) !!}
               @include('localidades.form')
          {!! Form::close() !!}

</div>


@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>

<script>

$(document).ready(function() {
$("#telefone").mask("(99)9999-9999");
$("#celular").mask("(99)99999-9999");


  $( "#cep" ).blur(function() {
    let cep =  $(this).val()
    $.get( `https://webmaniabr.com/api/1/cep/${cep}/`, { app_key: "vPqFXJP188sjpekGiQPO1mz03quccr1Z", app_secret: "4KsiRO3n5LGLiW185PSGzq0t1ACYzLN1wDQQDBjHcQadtrcI" } )
    .done(function( obj ) {
        $.each( obj, function( key, value ) {
            $(`#${key}`).val(value);
        });

      });

  });
});
</script>


<style >
body{
      overflow-x: hidden;
       background: linear-gradient(to right, #3ca55c, #b5ac49);
}

*{
  color:white;
}

h2{
  color: white;
      position: absolute;
      left: 30%;
      top: 20%;
      font-size: 70px!important;
      text-shadow: 1px 4px 10px #020202;

}


</style>
