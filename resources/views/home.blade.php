@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Je bent ingelogd!<br>

                        <a href="{{ url('../new_lijst') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Maak een verlanglijst</a>
                        <a href="{{ url('../my_lijsts') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Mijn lijstjes</a>
                
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
