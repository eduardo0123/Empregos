<div class="input-group">
    <div class="input-box">
<h2>Listar vagas</h2>
    </div>
    <div class="input-group">
        <div class="input-box">
<ul>
    @foreach ($vagas as $vaga)
        <li>{{ $vaga->cargo }} - {{ $vaga->remuneracao }}</li>
    @endforeach
</ul>
</div>
    
