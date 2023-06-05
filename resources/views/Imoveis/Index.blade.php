<x-layout title="Imóveis">
  <ul>
    @foreach($Imoveis as $imovel)
    <li>{{$imovel->nome}}, R$ {{$imovel->preco}}</li>
    @endforeach
  </ul>
</x-layout>