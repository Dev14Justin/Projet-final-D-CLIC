<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <title>Document</title>
</head>
<body>

    <main>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erreurs :</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section>
            <h1>Ajouter un nouveau vin</h1>
            <form action="{{ route('vin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="image">Image du vin</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div>

                <div>
                    <label for="nom">Nom du vin</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom du produit">
                </div>

                <div>
                    <label for="prix">Prix du vin</label>
                    <input type="number" id="prix" name="prix" placeholder="Prix en €">
                </div>

                <div>
                    <label for="description">Description du vin</label>
                    <input type="text" id="description" name="description" placeholder="Description du produit">
                </div>

                <div>
                    <label for="quantite">Quantité du vin en stock</label>
                    <input type="number" id="quantite" name="quantite" placeholder="Quantité disponible">
                </div>
                
                <div class="option">
                    <button type="submit">Ajouter le vin</button>
                    
                </div>

            </form>
        </section>
    </main>

    <footer>
        
    </footer>
</body>
</html>