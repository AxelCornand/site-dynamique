<main class="right">
        <h2 class="right__title">Contact</h2>
        <div class="posts">
          <div class="post post--solo">
            <p class="single">
            <form action="/ma-page-de-traitement" method="post">
                <fieldset>
                 <legend>Identité</legend>
                    <div id="identite">
                    <label for="identity">
                        <span>Je suis</span>
                    </label>
                    <input type="radio" name="size" id="size_1" value="small">
                    <label for="size_1">une femme /</label>
                    <input type="radio" name="size" id="size_1" value="small">
                    <label for="size_1"> un homme</label>
                    </div>
                    <div class="champ">
                        <label for="firstname">Mon prénom est</label>
                        <input type="text" id="firstname" name="user_firstname" placeholder="Prénom">
                    </div>
                    <div class="champ">
                        <label for="lastname">Et mon nom,</label>
                        <input type="text" id="lastname" name="user_lastname" placeholder="Nom">
                    </div>
                    <label for="choice">
                        <span>J'ai connu ce site grâce à</span>
                    </label>
                    <select id="choice" name="userchoice">
                        <option value="facebook">Choisir</option>
                        <option value="facebook">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="google">Google</option>
                        <option value="bao">Bouche à oreilles</option>
                        <option value="jt">JT de 13h de Jean-Pierre Pernault</option>
                        <option value="autre">Autre</option>
                    </select>
                </fieldset>
                <fieldset>
                 <legend>Message</legend>
                    <div class="champ">
                        <label for="answerme">Répondez-moi via</label>
                        <input type="email" id="mail" name="user_mail" placeholder="Adresse e-mail">
                    </div>
                    <div class="champ">
                        <label for="msg">Je voulais vous dire que</label>
                        <textarea id="msg" name="user_message">Votre message</textarea>
                    </div>
                    <div>
                    <label for="myfile">Et vous montrer ça aussi</label>
                    <input type="file" id="myfile" name="myfile">
                    </div>
                </fieldset>
                <fieldset>
                    <div>
                    <label for="scales">Je certifie la véracité de ces informations</label>
                    <input type="checkbox" id="scales" name="scales" checked>
                    </div>
                </fieldset>
                    <div>
                    <input type="submit" value="Envoyer">
                    </div>
                    
            </form>
            </p>
            <a href="./index.php" class="post__link">back to home</a>
          </div>
        </div>
</main>