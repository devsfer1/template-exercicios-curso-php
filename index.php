<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Curso PHP</title>
</head>

<body>
  <header class="header">
    <h1>Curso PHP</h1>
    <h2>índice dos Exercícios</h2>
  </header>
  <main class="main">
    <div class="content">
      <nav class="modules">
        <div class="module green">
          <h3>Básico</h3>
          <ul>
            <li>
              <a href="exercise.php?dir=basic&file=hello">
                Olá PHP
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=html">
                Integração HTML
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=css">
                Integração CSS
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=comments">
                Comentários PHP
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=desafio">
                Desafio
              </a>
            </li>
          </ul>
        </div>
        <div class="module red">
          <h3>Tipos</h3>
          <ul>
            <li>
              <a href="exercise.php?dir=types&file=int">
                Tipo Inteiro
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=float">
                Tipo Float
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=aritmeticas">
                Operações Aritmeticas
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=desafio_precedencia">
                Desafio Precedência
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=string">
                Tipo String
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=desafio_string">
                Desafio String
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=boolean">
                Tipo Boolean
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=types&file=conversions">
                Conversões
              </a>
            </li>
          </ul>
        </div>
        <div class="module blue">
          <h3>Tipos</h3>
          <ul>
            <li>
              <a href="exercise.php?dir=variables&file=basic">
                Variáveis
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </main>
  <footer class="footer">
    COD3R & ALUNOS <?= date('Y'); ?>
  </footer>
</body>

</html>