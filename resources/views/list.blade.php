<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Ceps consultados:</h1>
        <br>
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th>Endereco</th>
                        <th>Opcoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ceps as $cep)
                        <tr>
                            <td> {{ $cep->numero_cep }} - {{ $cep->endereco }} ,  {{ $cep->bairro }} , {{ $cep->estado }} </td>
                            <td>
                                <a href="{{ action('CepsController@destruir', $cep->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="text-align: right;">
                
                <a class="btn btn-primary" href="{{ action('CepsController@consultar') }}" role="button">Consultar Cep</a>
            </div>
            
        </section>
    </div>
</body>
</html>