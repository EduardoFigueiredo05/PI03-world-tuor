<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pacote;
use App\Http\Requests\PacoteRequest;

/**
 * Controller de Pacotes (área administrativa)
 *
 * Comentários em Português (didáticos):
 * - Este controller gerencia o CRUD de pacotes de viagem.
 * - Usa o model Pacote (em português) pois o banco já está estruturado assim.
 * - Usa PacoteRequest para centralizar regras de validação dos formulários.
 */
class PacoteController extends Controller
{
    public function __construct()
    {
        // Middleware garante que apenas usuários autenticados e admin acessem
        $this->middleware(['auth', 'admin']);
    }

    /**
     * LISTAR PACOTES
     *
     * - Busca os pacotes no banco ordenando pelo ID (mais recentes primeiro)
     * - Pagina o resultado para não carregar tudo de uma vez
     * - Envia os dados para a view admin.pacotes.index
     */
    public function index()
    {
        $pacotes = Pacote::orderBy('id', 'desc')->paginate(15);

        return view('admin.pacotes.index', compact('pacotes'));
    }

    /**
     * FORMULÁRIO DE CADASTRO
     *
     * - Apenas retorna a view com o formulário vazio.
     */
    public function create()
    {
        return view('admin.pacotes.create');
    }

    /**
     * SALVAR NOVO PACOTE
     *
     * - Recebe os dados validados pelo PacoteRequest
     * - Cria um novo registro na tabela pacotes
     * - Redireciona para a listagem com mensagem de sucesso
     */
    public function store(PacoteRequest $request)
    {
        Pacote::create($request->validated());

        return redirect()
            ->route('admin.pacotes.index')
            ->with('success', 'Pacote criado com sucesso!');
    }

    /**
     * EXIBIR UM PACOTE ESPECÍFICO
     */
    public function show($id)
    {
        $pacote = Pacote::findOrFail($id);

        return view('admin.pacotes.show', compact('pacote'));
    }

    /**
     * FORMULÁRIO DE EDIÇÃO
     *
     * - Carrega o pacote pelo ID
     * - Envia os dados para a view de edição
     */
    public function edit($id)
    {
        $pacote = Pacote::findOrFail($id);

        return view('admin.pacotes.edit', compact('pacote'));
    }

    /**
     * ATUALIZAR PACOTE
     *
     * - Recebe os dados validados pelo PacoteRequest
     * - Atualiza o registro existente
     */
    public function update(PacoteRequest $request, $id)
    {
        $pacote = Pacote::findOrFail($id);

        $pacote->update($request->validated());

        return redirect()
            ->route('admin.pacotes.index')
            ->with('success', 'Pacote atualizado com sucesso!');
    }

    /**
     * DELETAR PACOTE
     *
     * - Localiza o pacote pelo ID
     * - Remove do banco
     */
    public function destroy($id)
    {
        $pacote = Pacote::findOrFail($id);
        $pacote->delete();

        return redirect()
            ->route('admin.pacotes.index')
            ->with('success', 'Pacote removido com sucesso!');
    }
}
