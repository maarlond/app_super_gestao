<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{ 'Texto de teste' }} <br>
<?= 'Texto de teste' ?>
@php

@endphp

{{-- @dd($fornecedores) Imprimir arrays utilizando blade --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados </h3>
@else
    <h3>Ainda não existem fornecedores cadastrados </h3>
@endif
