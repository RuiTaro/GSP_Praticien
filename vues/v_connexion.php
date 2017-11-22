  <div id="page">
    <div id="content">
      <div class="boxtab">
         <div class="login">
          <div class="form">
          <!-- <img src="https://travelplanet.pro/assets/img/Travel_Planet_blanc.png" alt=""> -->
          <h1>Bienvenue</h1>
            <div class="box">
              <h1>Sign in</h1>
              <form action="index.php?uc=administrer&action=verifConnexion" method='POST'>       
                  <div class="input-group">
                    <input type="login" id="login" name ="login" onblur="checkInput(this)" />
                    <label for="login">Login</label>
                  </div>

                  <div class="input-group">
                    <input type="Password" id="mdp" name ="mdp" onblur="checkInput(this)" />
                    <label for="mdp">Password</label>
                  </div>

                  <input type="submit" value="Se connecter">
              </form>
            </div>
          </div>
        </div> 
      </div>      
    </div>
    <br class="clearfix" />     
</div>