<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <style>
        /* EStilos básicas*/
        .caixa{
            width: 300px;
            height: 200px;
            background-color: #e74c3c;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            border-radius: 10px;
        }
        .caixa2{
            width: 300px;
            height: 200px;
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            border-radius: 10px;

        }
        .caixa3{
            width: 300px;
            height: 100px;
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            border-radius: 10px;
        }
        .destaque{
            color: #e74c3c;
            font-weight: bold;
            
        }
        .table{
            width: 100%;
            border-collapse: collapse;
        }
        th, td{
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .th{
            background-color:  blue;
        }
        .caixa4{
            width: 300px;
            height: 250px;
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            border-radius: 10px;
        }
        form{
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 2px;
            background-color: black;
        }
        input[type="text"],input[type="email"],input[type="password"]{
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color: #e74c3c;
        }

    </style>
</head>
<body>
    <div class="caixa">
        <h2>Minha Caixa de Conteúdos</h2>
        <p>Este é um exemplo de uma div estilizada com CSS.</p>
    </div>

    <div class="caixa2">
        <h3>Cristiano Ronaldo</h3>
        <p>CR7 é a mesma pessoa que Cristiano Ronaldo</p>
    </div>

    <div class="caixa3">
    <p>Este é um exemplo de como usamos a tag <span class="destaque">span</span> para destacar uma parte destacar uma parte do texto em vermelho</p>
    </div>

    <div class="caixa4">
    <h2>Tabela de Exemplos</h2>
        <table>
            <thead>
                 <tr>
                 <th>Nome</th>
                 <th>Idade</th>
                 <th>Cidade</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Matheus</th>
                    <th>17</th>
                    <th>Joinville</th>
                </tr>
                <tr>
                    <th>Gabriel</th>
                    <th>27</th>
                    <th>São Paulo</th>
                </tr>
                <tr>
                    <th>Carlos</th>
                    <th>28</th>
                    <th>Belo Horizonte</th>
                </tr>
            </tbody>
        </table>
    </div>

    <h2>Formulário de Cadastro</h2>
    <form action="/submit" method="POST">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Cadastrar</button>
     </form>
    
</body>
</html>