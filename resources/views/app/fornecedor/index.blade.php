@isset($fornecedores)
    <div>
        Fornecedor: {{ $fornecedores[0]['nome'] }}
        <br>
        Status: {{ $fornecedores[0]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        <br>
        Fone: {{ $fornecedores[0]['fone'] }}
        <br>
        @switch ($fornecedores[0]['ddd'])
            @case ('11')
                São Paulo - SP
            @break

            @case ('64')
                Ipameri - GO
            @break

            @default
                Nâo foi identificado.
        @endswitch
    </div>
    <br />
    <div>
        Fornecedor: {{ $fornecedores[1]['nome'] }}
        <br>
        Status: {{ $fornecedores[1]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'CNPJ NAO INFORMADO' }}
    </div>
@endisset
@isset($fornecedores)
    <div>
        Fornecedor: {{ $fornecedores[0]['nome'] }}
        <br>
        Status: {{ $fornecedores[0]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        <br>
        Fone: {{ $fornecedores[0]['fone'] }}
        <br>
        @switch ($fornecedores[0]['ddd'])
            @case ('11')
                São Paulo - SP
            @break

            @case ('64')
                Ipameri - GO
            @break

            @default
                Nâo foi identificado.
        @endswitch
    </div>
    <br />
    <div>
        Fornecedor: {{ $fornecedores[1]['nome'] }}
        <br>
        Status: {{ $fornecedores[1]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'CNPJ NAO INFORMADO' }}
    </div>
@endisset
