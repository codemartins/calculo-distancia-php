<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demostrar os valores que serão gastos como combustível durante uma viagem, com base no consumo do seu veículo, e com distância determinada por você!</p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Díesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                    <input type="number" class="campoTexto" name="distancia" required/>

                    <label for="autonomia">Consumo de combustível do veículo (Km/1)</label>
                    <input type="number" class="campoTexto" name="autonomia" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>