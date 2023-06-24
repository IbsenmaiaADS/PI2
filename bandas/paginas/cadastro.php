<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="revista.css" />
    <title>Cadastro</title>
    <script type="text/javascript">
      function validaCad(Cad) {
        if (
          Cad.fname.value == "" ||
          Cad.fname.value == null ||
          Cad.fname.value.lenght < 3
        )
          alert("Por favor, indique o seu nome.");
        Cad.fname.focus();
        return false;
      }

      if (
        Cad.email.value.indexOf("@") == -1 ||
        Cad.email.valueOf.indexOf(".") == -1 ||
        Cad.email.value == "" ||
        Cad.email.value == null
      ) {
        alert("Por favor, indique um e-mail válido.");
        Cad.email.focus();
        return false;
      }

      escolhaSexo = -1;
      for (x = Cad.sexo.lenght - 1; x > -1; x--) {
        if (Cad.sexo[x].checked) {
          escolhaSexo = x;
        }
      }

      if (escolhaSexo == -1) {
        alert("qual o seu sexo?");
        Cad.sexo[0].focus();
        return false;
      }
    </script>
  </head>
  <body>
    <header>
      <div class="flex-container menu">
        <div><h1>Música em revista</h1></div>
        <ul class="list-menu">
          <li><a href="index.html" target="_blank">Página inicial</a></li>
          <li><a href="bandas.html" target="_blank">Bandas</a></li>
          <li><a href="cadastro.html" target="_blank">Cadastro</a></li>
          <li><a href="cifra.html" target="_blank">Cifras</a></li>
        </ul>
      </div>
    </header>
    <div class="flex-container entrevista">
      <div class="texto-entrevista">
        <h1>Sua revista de música digital</h1>
        <h2>Receba as atualizações</h2>
        <form method="GET">
          <label for="fname">Nome:</label><br />
          <input type="text" id="fname" name="fname" required /><br />
          <label for="snome">Sobrenome:</label><br />
          <input type="text" id="snome" name="snome" required /><br />
          <label for="mail">E-mail</label><br />
          <input type="text" id="mail" name="mail" /><br />
          <label for="senha">Senha</label><br />
          <input type="text" id="senha" name="senha" required /><br />
          <label for="csenha">Confirma Senha</label><br />
          <input type="text" id="csenha" name="csenha" required /><br />
          <label for="tel">Telefone</label><br />
          <input type="text" id="tel" name="tel" /><br />
          <label for="sexo">Sexo:</label><br />
          <input type="radio" id="M" name="genero" value="M" />
          <label for="M">Masculino</label><br />
          <input type="radio" id="F" name="genero" value="F" />
          <label for="F">Feminino</label><br />
          <input type="radio" id="O" name="genero" value="O" />
          <label for="O">Outro</label><br />
          <label for="titulação">Titulação:</label><br />
          <select id="Titulação" name="Titulação">
            <br />
            <option value=""></option>
            <br />
            <option value="senhor">Sr.</option>
            <option value="senhora">Srª.</option></select
          ><br />

          <input type="submit" value="Enviar" />
          <input type="reset" value="Apagar" /><br />
        </form>
      </div>
    </div>
  </body>
</html>
