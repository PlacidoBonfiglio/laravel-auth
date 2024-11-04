@extends("layouts.app")

@section("page-title", "Laravel Comics Index")

@section("content")
    <section class="container">

        <h2 class="text-center mb-5">Lista degli esercizi</h2>

        <div>
            <a href="{{ route("admin.exercises.create") }}" class="btn btn-primary mb-4 fw-bold">Aggiungi esercizio</a>
        </div>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Nome originale</th>
                  <th scope="col">Bonus</th>
                  <th scope="col">Data</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

                @foreach ( $exercises as $exercise )
                    <tr>
                        <th scope="row">{{ $exercise->id}}</th>
                        <td>{{ $exercise->title }}</td>
                        <td>{{ $exercise->original_title }}</td>
                        <td>{{ $exercise->nationality }}</td>
                        <td>{{ $exercise->date }}</td>
                        <td>{{ $exercise->vote }}</td>
                        <td class="text-center">
                            <a href="{{ route("admin.exercises.show") }}" class="btn btn-primary">Mostra</a>
                            {{-- <a href="{{ route("movies.edit", $movie->id) }}" class="btn btn-success">Modifica</a>

                            <form action="{{ route("movies.delete", $movie->id) }}" method="POST" class="d-inline env-destroyer" custom-data-name="{{ $movie->title }}">
                                @method("DELETE")
                                @csrf
                                <button href="/delete" type="submit" class="btn btn-danger">Rimuovi</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

              </tbody>
        </table>

    </section>
@endsection

@section("additional-scripts")
    @vite("resources/js/movies/delete-confirmation.js")
@endsection
