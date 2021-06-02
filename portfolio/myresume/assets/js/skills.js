function competence_add()
{
    let new_competence = document.createElement('div')
    new_competence.classList.add("row", "mt-2", "mx-auto", "col-12")
    new_competence.innerHTML = `
        <div class="col-12 col-lg-9">
            <input name="competences_new[]" type="text" class="form-control was-validated" placeholder="Description" value="">
        </div>
        <div class="col-4 col-lg-1">
            <input name="valeurs_new[]" type="number" class="form-control was-validated" placeholder="%" value="">
        </div>
        <div class="col-4 col-lg-1 mx-0">
            <input name="couleurs_new[]" type="color" id="colorSkills" name="colorSkills" class="form-control form-control-color was-validated" value="">
        </div>
        <div class="col-4 col-lg-1 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16" onclick="competence_remove(this)">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
            </svg>
        </div>
    `
    document.getElementById("competences").append(new_competence)
}

function competence_remove(btn)
{
    btn.closest(".row").remove()
}