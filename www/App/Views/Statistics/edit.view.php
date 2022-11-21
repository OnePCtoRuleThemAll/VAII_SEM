<?php /**@var \App\Models\Actual $data */ ?>

<form action="?c=statistics&a=saveEdited&id=<?=$data->getId()?>" method="post" onsubmit="return validateAll()">
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerName">Player name</label>
        <input name="name" type="text" class="form-control" id="nameInput" value="<?=$data->getName()?>"
               onchange="validateName()">
        <p id="nameWarrning"></p>

    </div>
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerSurename">Player surename</label>
        <input name="surename" type="text" class="form-control" id="surenameInput" value="<?=$data->getSurename()?>"
               onchange="validateSurename()">
        <p id="surenameWarrning"></p>

    </div>
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerPoint">Player points</label>
        <input name="points" type="number" class="form-control" id="pointsInput" value="<?=$data->getPoints()?>"
               onchange="validatePoints()">
        <p id="pointsWarrning"></p>

    </div>
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerNote">Player note</label>
        <input name="note" type="text" class="form-control" id="noteInput" value="<?=$data->getNote()?>"
               onchange="validateNote()">
        <p id="noteWarrning"></p>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>