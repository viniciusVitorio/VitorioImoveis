<x-layout title="Imóveis">
  <ul>
    @foreach($Imoveis as $imovel)
    <li>{{$imovel}}</li>
    @endforeach
  </ul>
</x-layout>