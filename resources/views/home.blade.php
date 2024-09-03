<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>

    @vite('resources/css/home.css')
</head>
<body>
    <div class="header">
        
    </div>

    <center>
        <h1>Máquinas</h1>
    </center>

    </div>
    <div class="container">
        <div class="maquina">
            <img src="{{ asset('storage/imagens/torno.jpg') }}" alt="Torno gs200">
            <h2>Torno gs200</h2>
            <a href='pagTorno.html'target=”_blank”><button>Utilizar maquina</button></a>
        </div>

        <div class="maquina2">
            <img src="{{ asset('storage/imagens/ITAP.png') }}" alt="Bomba ITAP">
            <h2>Bomba ITAP</h2>
            <a href='pagMaq.html'target=”_blank”><button>Utilizar maquina</button></a>
        </div>
    </div>
    
</body> 
</html>