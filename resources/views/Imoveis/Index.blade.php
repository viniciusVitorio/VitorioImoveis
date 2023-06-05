<x-layout title="Imóveis">
  <div class="card">
    @foreach($Imoveis as $imovel)
    <div class="card-item">
      <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="Imagem do imóvel">
      <div class="card-content">
        <h3>{{$imovel->nome}}</h3>
        <p>R$ {{$imovel->preco}}</p>
      </div>

      <form action="{{ route('imoveis.destroy', $imovel->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
      </form>
    </div>
    @endforeach
  </div>
</x-layout>