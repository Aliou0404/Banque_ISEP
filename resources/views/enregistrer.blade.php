<form action="/enregistrer" method="POST">
    @csrf
    <input type="text" name="nom" />
    <input type="email" name="email" />
    <button type="submit">Envoyer</button>
</form>
