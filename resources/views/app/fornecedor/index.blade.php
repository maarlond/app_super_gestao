<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{-- {{ 'Texto de teste' }} <br> --}}
{{-- <?= 'Texto de teste' ?> --}}


{{-- @dd($fornecedores) Imprimir arrays utilizando blade --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados </h3>
@else
    <h3>Ainda não existem fornecedores cadastrados </h3>
@endif --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>

@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo
@endif
<br>

@unless($fornecedores[0]['status'] == 'S')
    <!-- se o retorno da condição for false -->
    Fornecedor Inativo
@endunless

@php
/*
        if(empty($variavel)) {} // retornar true se a variável estiver vazia
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()
        - $var
*/
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            Cnpj vazio
        @endempty
    @endisset
@endisset
