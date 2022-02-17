<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>WhatsCET</title>
  </head>
  <body>
    <!--Comença Header-->

    <header>
      <div class="logo">
        <img src="./images/WhatsCET.png" alt="WhatsCET logo" width="100" />
        <h1>WhatsCet</h1>
      </div>
      <nav>
        <h2>MENU</h2>
        <ul>
          <li><a href="#">Usuaris</a></li>
          <li><a href="#">Configuració</a></li>
          <li><a href="#">Sortir</a></li>
        </ul>
      </nav>
    </header>
    <!--Acaba Header-->

    <!--Comença aside Conectats-->
    <div class="displayPpal">

      <aside>
        <section class="conected">
          <h2>Conectats</h2>
        </section>
        <section class="usersConected">
          <article>
            <p>Nom 1 <!-- aqui s'injectara usuaris conectats --></p>
          </article>
          <article>
            <p>Nom 2</p>
          </article>
          <article>
            <p>Nom 3</p>
          </article>
        </section>
      </aside> 
      <!--Acaba aside Conectats-->
      
      <!--Comença Main Xat-->
      <main>
        <section class="dialog" id="dialog">
          <article>
            <h3>Nom 1</h3>
            <p>Missatge</p>
            <p>
              <?php
            echo $_POST["misatge"];
            echo $_POST['myfile'];
            ?>
          </p>
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
          </svg>
          <p>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="currentColor" d="M19.78,2.2L24,6.42L8.44,22L0,13.55L4.22,9.33L8.44,13.55L19.78,2.2M19.78,5L8.44,16.36L4.22,12.19L2.81,13.55L8.44,19.17L21.19,6.42L19.78,5Z" />
            </svg>
          </p>
        </article>
      </section>
      <section class="messages" id="messages">
        <form action="" method="post" autocomplete="off">
          <p>
            <input
            type="text"
            placeholder="Escriu el missatge"
            name="misatge"
            id="missatge"
            />
          </p>
          <p><input type="file" name="myfile" id="myfile" /></p>
          <button>enviar</button>
        </form>
      </section>
    </main>
    <!--Acaba Main Xat-->
  </div>

    <!-- Comença footer -->
    <footer> 
      <h2>WhatsCET</h2>
    </footer>
    <!-- Acaba footer -->
  </body>
</html>
