<?php require_once 'header.php';
?>

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Photo de profil</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Telecharger une image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-3">
                <div class="card-header">Compte</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNomUtilisateur">NomUtilisateur (comment votre nom apparaitra vers d'autres utilisateur sur le site)</label>
                            <input class="form-control" id="inputNomUtilisateur" type="text" placeholder="Enter your username" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-5">
                                <label class="small mb-1" for="inputFirstName">NOM</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-5">
                                <label class="small mb-1" for="inputLastName">PRENOM</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">NOM DE L'ORGANISATION</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Entrer le nom de l'organisation" value="">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Adresse Email </label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-5">
                                <label class="small mb-1" for="inputPhone">Numero de telephone</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Entrer votre numero de telephone" value="">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-5">
                                <label class="small mb-1" for="inputNiveau">Niveau</label>
                                <input class="form-control" id="inputNiveau" type="text" name="niveau" placeholder="Entrer votre niveau" value="">
                            </div>
                            <div class="col-md-5">
                                <label class="small mb-1" for="inputDomaine">Domaine</label>
                                <input class="form-control" id="inputDomaine" type="text" name="domaine" placeholder="Entrer votre domaine" value="">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php';
?>