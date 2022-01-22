<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

       
    </head>
    <body class="antialiased">
       <h1>Algum titulo</h1>
       <img src="/img/banner.jpg" alt="">
            @if(10>15)
                <p>A condição e true</p>
            @endif

            <p>{{$nome}}</p>

            @if($nome == "Pedro")
            <p>O nome é Pedro</p>
            @elseif($nome == "Ramon")
            <p>O nome é {{$nome}} e ele tem {{$idade2}} anos e trabalha como {{$profissao}}</p>
            @else
            <p>O nome nao e Pedro</p>
            @endif
            @for($i = 0;$i < count($arr);$i++)
                <p>{{$arr[$i]}}- {{$i}}</p>
                @if($i ==2)
                    <p>O i é 2</p>
                @endif
            @endfor

            @foreach($nomes as $nome)
                <p>{{$loop -> index}}</p>
                <p>{{$nome}}</p>
            @endforeach

            @php
                $name = "Joao";
                echo $name;
            @endphp
            {{--este é o comentário do blade--}}

    </body>
</html>
