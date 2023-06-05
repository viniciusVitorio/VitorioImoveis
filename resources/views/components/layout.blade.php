<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <title>Vitório Imóveis - {{$title}}</title>
</head>

<body>
  <header>
    <h1 id="titulo-logo">Vitório imóveis</h1>
    <div class="header-links">
      <h3 class="titulo-link"><a href="/">Vendas</a></h3>
      <h3 class="titulo-link"><a href="/imoveis/criar">Adicionar imóvel</a></h3>
    </div>
  </header>
  <div class="line"></div>
  {{$slot}}
</body>

</html>