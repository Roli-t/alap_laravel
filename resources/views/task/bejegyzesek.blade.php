<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Bejegyzések</title>
</head>
<body>
<main>
<thead>
      <tr>
        <th>bejegyzés_id</th>
        <th>tevékenység_id</th>
        <th>osztály_id</th>
        <th>állapot</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($bejegyzesek as $bejegyzes): ?>
        <tr>
          <th>{{ $bejegyzesek->id}}</th>
          <td>{{ $bejegyzesek->tevekenyseg_id}}</td>
          <td>{{ $bejegyzesek->osztaly_id }}</td>
          <td>{{ $bejegyzesek->allapot }}</td>
          <td style="display: flex;">
            
          
        </tr>
        <?php endforeach; ?> 
    </tbody>
    <div><a href="/task/new"><button class="btn btn-sm btn-success">Új bejegyzés létrehozása</button></a></div>
    </main>
     </body>