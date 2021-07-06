<section>
    <div class="container mt-5 mb-5 p-4 bg-secondary rounded">
        <div class="w-100 text-center display-3 mb-4 text-white bg-dark ">Les femmes</div>
        <div class="rounded bg-dark text-white row row-cols-4 m-1 text-left">
            <div class="col h1">ID:</div>
            <div class="col h1">NOM:</div>
            <div class="col h1">AGE:</div>
            <div class="col h1">GENRE:</div>        
        </div>
        @foreach ($membres as $membre )
        <div class="rounded {{$membre->genre === 'Homme'?'d-none':''}}  bg-dark text-white row row-cols-4 m-2 text-left">
                <div class="col">{{$membre->id}}</div>
                <div class="col">{{$membre->nom}}</div>
                <div class="col">{{$membre->age}}</div>
                <div class="col">{{$membre->genre}}</div>        
            </div>
        @endforeach
    </div>
</section>