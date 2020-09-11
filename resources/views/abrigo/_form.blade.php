<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ isset($pessoa->nome) ? $pessoa->nome : '' }}" required autocomplete="name" autofocus>

    </div>
</div>

<div class="form-group row">
    <label for="idade" class="col-md-4 col-form-label text-md-right">Idade</label>

    <div class="col-md-6">
        <input id="idade" type="text" class="form-control" name="idade" value="{{ isset($pessoa->idade) ? $pessoa->idade : '' }}" required>
    </div>
</div>

<div class="form-group row">
    <label for="especialidade" class="col-md-4 col-form-label text-md-right">Especialidade</label>

    <div class="col-md-6">
        <input id="especialidade" type="text" class="form-control" name="especialidade" value="{{ isset($pessoa->especialidade) ? $pessoa->especialidade : '' }}" required>
    </div>
</div>

<div class="form-group row">
    <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>

    <div class="col-md-6">
        <textarea id="descricao" class="form-control" name="descricao" required>{{ isset($pessoa->descricao) ? $pessoa->descricao : '' }}</textarea>
    </div>
</div>

<div class="form-group row">
    <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

    <div class="col-md-6">
        <select class="form-control" name="sexo" id="sexo">
            <option>Escolha o Sexo</option>
            <option value="masculino" {{ isset($pessoa->sexo) && $pessoa->sexo == 'masculino' ? 'selected' : '' }} >Masculino</option>
            <option value="feminino" {{ isset($pessoa->sexo) && $pessoa->sexo == 'feminino' ? 'selected' : '' }} >Feminino</option>
          </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="ativo" id="ativo" {{ isset($pessoa->ativo) && $pessoa->ativo == 'on' ? 'checked' : '' }}>

            <label class="form-check-label" for="ativo">
                Ativo
            </label>
        </div>
    </div>
</div>
