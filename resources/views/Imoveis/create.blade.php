<x-layout title="Adicionar">
  <form action="/imovel/salvar" method="POST">
    @csrf
    <label>Nome: </label>
    <input name="nome" type="text">

    <label>Preço</label>
    <input name="preço" type="text">

    <input type="submit">
  </form>
</x-layout>