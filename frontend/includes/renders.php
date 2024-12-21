<?php

function renderPlats($plat) {
    return "
    <div class='col'>
       <div><img class='rounded img-fluid d-block w-100 fit-cover' style='height: 200px;' src='https://cdn.bootstrapstudio.io/placeholders/1400x800.png'>
          <div class='py-4'>
             <h4>{$plat['Plat_type']}</h4>
             <p>{$plat['Plat_desc']}</p>
             <div class='btn-group'>
                <form method='post' action='' style='display:inline;'>
                    <input type='hidden' name='plat_id' value='{$plat['ID']}'>
                    <button type='submit' name='operation' value='delete_plat' class='btn btn-danger'>Delete</button>
                    <button type='submit' name='operation' value='modify_plat' class='btn btn-primary'>Modify</button>
                </form>
             </div>
          </div>
       </div>
    </div>";
}
function renderMenus() {}
function renderReservations() {}
function renderstats() {}

?>