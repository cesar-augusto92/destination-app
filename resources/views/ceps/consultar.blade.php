@extends('layouts.app')

@section('content')
<br>
<section class="section">
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="input-field">
                <input type="number" oninput="maxLengthCheck(this)" name="cep" id="numero_cep" maxlength="8" required >
                <label for="cep">Cep</label>
            </div>
            <div class="right-align">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
            </div>
        </form>
    </div>    
    <script>
  // This is an old version, for a more recent version look at
  // https://jsfiddle.net/DRSDavidSoft/zb4ft1qq/2/
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>

</section>

@endsection