<!-- Nom(r) / Prenom(r)
Mail(r) / Telephone
Objet (Autre, formation, collaboration, Devis,)
Message -->
<div class="m-4 shadow-sm">
    <form action="" method="post" class="flex flex-col gap-3">
        <!-- Objets -->
        <div class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none">
            <select name="object" id="object" class="bg-transparent text-slate-800 w-full">
                <option value="">-- À quel sujet me contactez-vous ? --</option>
                <option value="Collaboration">Collaboration</option>
                <option value="Formation">Formation</option>
                <option value="Devis gratuit">Devis gratuit</option>
                <option value="Autre">Autre...</option>
            </select>
        </div>
        <!-- Identité -->
        <fieldset class="border border-slate-200 rounded-lg px-4 py-2">
            <legend class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#707070" d="M19 19H5V5h14m0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-2.5 13.25c0-1.5-3-2.25-4.5-2.25s-4.5.75-4.5 2.25V17h9M12 12.25A2.25 2.25 0 0 0 14.25 10A2.25 2.25 0 0 0 12 7.75A2.25 2.25 0 0 0 9.75 10A2.25 2.25 0 0 0 12 12.25"/></svg>
                Vous êtes ?
            </legend>
            <div class="flex gap-4 my-4">
                <div class="flex flex-col gap-2">
                    <label for="firstname" class="font-semibold text-lg">Votre prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Martin" value="Martine" minlength="2" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="lastname" class="font-semibold text-lg">Votre nom</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Dupont" value="Dupont" minlength="2" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
                </div>
            </div>
        </fieldset>
        <!-- Contact -->
        <fieldset class="border border-slate-200 rounded-lg px-4 py-2">
            <legend class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#707070" d="M20 15.5c-1.2 0-2.5-.2-3.6-.6h-.3c-.3 0-.5.1-.7.3l-2.2 2.2c-2.8-1.5-5.2-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1c-.3-1.1-.5-2.4-.5-3.6c0-.5-.5-1-1-1H4c-.5 0-1 .5-1 1c0 9.4 7.6 17 17 17c.5 0 1-.5 1-1v-3.5c0-.5-.5-1-1-1M5 5h1.5c.1.9.3 1.8.5 2.6L5.8 8.8C5.4 7.6 5.1 6.3 5 5m14 14c-1.3-.1-2.6-.4-3.8-.8l1.2-1.2c.8.2 1.7.4 2.6.4zM15 4c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m3 0c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m3 0c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m-6 3c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m3 0c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m3 0c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m-6 3c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m3 0c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1m3 0c0 .6-.4 1-1 1s-1-.4-1-1s.4-1 1-1s1 .4 1 1"/></svg>
                Vos coordonnées ?
            </legend>
            <div class="flex gap-4 my-4">
                <div class="flex flex-col gap-2">
                    <label for="email" class="font-semibold text-lg">Adresse email</label>
                    <input type="email" name="email" id="firstname" placeholder="martin@gmail.com" value="martin@gmail.com" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="telephone" class="font-semibold text-lg">Téléphone</label>
                    <input type="tel" name="telephone" id="lastname" placeholder="0612345678" value="0612345678" minlength="10" maxlength="12" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
                </div>
            </div>
        </fieldset>
        <!-- Message -->
        <textarea name="message" id="message" rows="10" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" placeholder="Votre message..." required minlength="100"></textarea>
        <button type="submit" class="w-40 text-center bg-white text-slate-800 rounded-lg shadow-md p-2 mt-4 hover:text-white hover:bg-slate-800 flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000000" d="m2 21l21-9L2 3v7l15 2l-15 2z"/></svg>    
            Envoyer
        </button>
    </form>
</div>