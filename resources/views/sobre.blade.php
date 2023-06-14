@extends('layouts.app')
@section('card-title', 'Quem Somos')
@section('content')
<div class="container">
    <h2 class="section-title">Quem Somos</h2>
    <div class="section-content">
        <p>{{ $sobre['desc'] }}</p>
        <div class="map-container">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.766232062879!2d-49.09882492684153!3d-22.324679072371868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf665250000001%3A0x2abef30e2119c99a!2sInstitui%C3%A7%C3%A3o%20Toledo%20de%20Ensino%20-%20ITE!5e0!3m2!1spt-BR!2sbr!4v1685327747453!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    -->
            {!! $sobre ['iframe'] !!}
        </div>
    </div>
</div>
@endsection