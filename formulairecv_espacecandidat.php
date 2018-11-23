<div  class="container-fluid col-md-12" id="formulairecv">
	<h2>Créer votre CV</h2>
	<form onsubmit="return foncverif()"">
	<div class="form-group col-md-6">
		<label class="control-label col-md-2" for="prenom">Prénom : </label>
		<input  class="form-control" type="text" value="" name="" autocomplete="on" id="champPrenom">
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-md-2" for="nom">Nom : </label>
		<input  class="form-control" type="text" value="" name="" autocomplete="on" id="champNom">
	</div>
	<div class="form-group  col-md-6">
		<label class="control-label col-md-2" for="adresse">Adresse : </label>
		<input  class="form-control" type="text" value="" name="" autocomplete="on" id="champAdresse">
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-md-2" for="adresse">Code Postal :</label>
		<input  class="form-control" type="text" value="" name="" autocomplete="on" id="champCP">
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-md-2" for="adresse">Ville : </label>
		<input  class="form-control" type="text" value="" name="" autocomplete="on" id="champVille">
	</div>
	<div class="form-group col-md-6">
		<label class="control-label col-md-2" for="adresse">Telephone : </label>
		<input  class="form-control" type="text" value="" name="" autocomplete="on" id="champTel">
	</div>

	<div class="col-md-6">
		<legend>Compétences : </legend>

		<div class="checkbox">
			<label><input type="checkbox" value="">Compétences 1</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Compétences 2</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Compétences 3</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Compétences 4</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Compétences 5</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Compétences 6</label>
		</div>

	</div>
	<div class="col-md-6">
		<legend>Qualifications : </legend>

		<div class="checkbox">
			<label><input type="checkbox" value="">Qualifications 1</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Qualifications 2</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Qualifications 3</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Qualifications 4</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Qualifications 5</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" value="">Qualifications 6</label>
		</div>

	</div>
	<div class="col-md-12">
		<legend>Expériences : </legend>

		<div class="blocexperience">
			<div class="col-md-12 col-md-offset-11" > 
				<span class="glyphicon glyphicon-plus add " data-toggle="tooltip" data-placement="top" title="Ajouter nouvelle expérience" ></span>
			</div>
			<div  class="form-group col-md-6 col-md-offset-3">
				<div class="col-md-4">
					<label>De : </label>
					<input class="form-control" type="date"  name="">

				</div>

				<div class="col-md-4">
					<label> Jusqu'au :</label>
					<input class="form-control" type="date"  name="">
				</div>

				<div class="col-md-12">
					<label>Détaillez votre expérience : </label><textarea class="form-control" rows="8"	 class="comment"></textarea>
				</div>
			</div>
		</div>
	</div>

	<div id="nouvellediv"></div>
	<div class="col-md-12">
		<legend>Identifiants : </legend>
		<div class="col-md-3">
			<div class="form-group">
				<label class="control-label" for="email">Adresse mail :</label>
				<input  class="form-control" type="email" value="" name="" id="champMail">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label class="control-label" for="password">Mot de passe : </label>
					<input  class="form-control" type="password" value="" name="" id="champMDP">
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-md-offset-10">
		<div class="form-group col-md-1">
			<button type="submit" class="btn btn-secondary btn-lg hvr-bounce-to-right">Envoyer</button>
		</div>
		<div class="form-group col-md-1">
			<button type="reset" class="btn btn-secondary btn-lg hvr-bounce-to-right">Annuler</button>
		</div>
	</div>

</form>
</div>