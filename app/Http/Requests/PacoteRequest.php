<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * PacoteRequest
 *
 * Comentários em Português (didáticos):
 * - Centraliza as regras de validação para criação/edição de pacotes.
 * - Dessa forma o controller fica mais limpo e organizado.
 */
class PacoteRequest extends FormRequest
{
    /**
     * Define se o usuário está autorizado a usar este request.
     * Aqui deixamos como true porque o controle de permissão
     * já é feito pelo middleware (auth, admin).
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Regras de validação dos campos do formulário de Pacote.
     */
    public function rules(): array
    {
        return [
            'nome'        => 'required|string|min:3|max:255',
            'continente'  => 'required|string|max:100',
            'pais'        => 'required|string|max:100',
            'descricao'   => 'nullable|string|max:1000',
            'preco'       => 'required|numeric|min:0',
            'data_inicio' => 'required|date',
            'data_fim'    => 'required|date|after_or_equal:data_inicio',
        ];
    }

    /**
     * Mensagens personalizadas em português para os erros de validação.
     */
    public function messages(): array
    {
        return [
            'nome.required'        => 'O nome do pacote é obrigatório.',
            'nome.min'             => 'O nome do pacote deve ter no mínimo 3 caracteres.',
            'continente.required'  => 'O continente é obrigatório.',
            'pais.required'        => 'O país é obrigatório.',
            'descricao.max'        => 'A descrição pode ter no máximo 1000 caracteres.',
            'preco.required'       => 'O preço é obrigatório.',
            'preco.numeric'        => 'O preço deve ser um número válido.',
            'preco.min'            => 'O preço não pode ser negativo.',
            'data_inicio.required' => 'A data de início é obrigatória.',
            'data_fim.required'    => 'A data de término é obrigatória.',
            'data_fim.after_or_equal' => 'A data de término deve ser igual ou posterior à data de início.',
        ];
    }
}
