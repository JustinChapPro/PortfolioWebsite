<footer class="footer">
  <div class="footer-container">
    <p>© 2024 Tout droit réserver.</p>
    <p>
      Conception et déveleppement fait par
      <span id="Auteur">Justin Chaput et Émile Béliveau</span>
    </p>
    <a>Contactez moi !</a>
  </div>
</footer>

<div id="div-form-user-connection">
  <form id="form-user-connection" name="form-user-connection" method="post" action="./traitement/connection.php">
    <div class="form-group-connection">
      <label class="label-user requis" for="emailUsername">Email / Username:</label>
      <br>
      <input type="text" class="form-control" name="emailUsername" id="form-user-connection-email" placeholder="exemple@gmail.com / username" autofocus>
      <div id="message-erreur-email" class="message-erreur-form"></div>
    </div>
    <div class="form-group">
      <br>
      <label class="label-user requis" for="password">Password:</label>
      <br>
      <input type="password" class="form-control" name="password" id="form-user-connection-password" placeholder="password" autofocus>
      <div id="message-erreur-password" class="message-erreur-form"></div>
    </div>
    <div class="form-checkbox">
      <br>
      <label class="label-login" for="password">Stay Login:</label>
      <input type="checkbox" class="checkbox-auth" id="stay-login" name="stay-login" value="stay_login">
    </div>
    <div id="form-connection-boutton" class="form-group form-button">
      <button type="submit" class="bouton-submit" name="soumettre">Connection</button>
    </div>
  </form>
</div>

</body>
</html>