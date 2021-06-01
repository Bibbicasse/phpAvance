function experience_add() {
    let new_experience = document.createElement('div')
    new_experience.classList.add("row", "mx-auto", "col-12")
    new_experience.innerHTML = `
        <div class="col-4">
            <label class="labels">Nom</label>
            <input name="xp_name" type="text" class="form-control" placeholder="Titre de l'experience" value="">
        </div>

        <div class="col-7">
            <label class="labels">Description</label>
            <textarea name="xp_description" class="form-control" id="xp_description" role="3"></textarea>
        </div>
        <div class="col-1 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16" onclick="experience_remove(this)">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
            </svg>
        </div>
        <div class="col-6">
            <label class="labels">Entreprise</label>
            <input name="xp_company" type="text" class="form-control" placeholder="Entreprise ou école" value="">
        </div>

        <div class="col-6">
            <label class="labels">Localisation</label>
            <input name="xp_location" type="text" class="form-control" placeholder="Lieu" value="">
        </div>

        <div class="col-3">
            <label class="labels">Date de commencement</label>
            <input name="xp_date_start" type="date" class="form-control" placeholder="" value="">
        </div>

        <div class="col-3">
            <label class="labels">Date de fin</label>
            <input name="xp_date_end" type="date" class="form-control" placeholder="" value="">
        </div>
        <div class="col-6">
            <label class="labels">Poste occupé</label>
            <input name="xp_poste_actual" type="text" class="form-control" placeholder="Votre rôle" value="">
        </div>
    `
    document.getElementById("experience").append(new_experience)
}

function experience_remove(btn) {
    btn.closest(".row").remove()
}