<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Bejegyzés felvitele</title>
</head>
<body>
    <main>
            <h2>Bejegyzés felvitele</h2>
            <form action="/api/bejegyzes" method="POST">
                @csrf
                <label for="id">Bejegyzés id</label>
                <input type="number" id="id" name="id"><br>
                <label for="osztaly_id">Osztály</label>
                <input type="number" id="osztaly_id" name="osztaly_id"><br>
                <label for="tevekenyseg_id">Tevékenység</label>
                <select name="tevekenyseg_id">
                @foreach ($tevekenysegs as $tevekenyseg)
                <option value="{{ $tevekenyseg->tevekenyseg_id }}">{{ $tevekenyseg->tevekenyseg_nev }}</option>
                @endforeach
                </select><br>
                <label for="allapot">Állapot</label>
                <input type="number" id="allapot" name="allapot"><br>
                
                <button type="submit" class="btn btn-success" style="width: 100%;">Mentés</button>
              </form> 
        </article>
    </main>
</div>
</form>
</body>
</html>
