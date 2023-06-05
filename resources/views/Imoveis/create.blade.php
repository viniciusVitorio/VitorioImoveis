<x-layout title="Adicionar">
  <form action="/imovel/salvar" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nome: </label>
    <input name=" nome" type="text"> <br>

    <label>Preço</label>
    <input name="preço" type="text"> <br>

    <label for="image">Imagem</label>
    <input type="file" id="imagem" name="imagem"> <br>

    <input type="submit">
  </form>
</x-layout>