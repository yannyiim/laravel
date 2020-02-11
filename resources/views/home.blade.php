<!-- TODO Etendre le layout "app" -->
@extends('layouts.app')
<!-- TODO Dans la séction "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->

@section('content')
    <div class="container">

        @forelse($contact as $contact)
            <p>L'utilisateur {{$contact->name}} a {{$contact->contacts->count()}} contact(s).</p>
        @empty
            <p>Il n'y a pas encore d'utilisateurs</p>
        @endforelse
    </div>
@endsection