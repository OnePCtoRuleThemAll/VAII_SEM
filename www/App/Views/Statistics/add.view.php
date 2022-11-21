<form action="?c=statistics&a=add" method="post" onsubmit="return validateAll()">
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerName">Player name</label>
        <input name="name" type="text" class="form-control" id="nameInput" onchange="validateName()">
        <p id="nameWarrning"></p>
    </div>
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerSurename">Player surename</label>
        <input name="surename" type="text" class="form-control" id="surenameInput" onchange="validateSurename()">
        <p id="surenameWarrning"></p>
    </div>
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerPoint">Player points</label>
        <input name="points" type="number" class="form-control" id="pointsInput" onchange="validatePoints()">
        <p id="pointsWarrning"></p>
    </div>
    <div class="form-group" style="color: #f0f9ff">
        <label for="playerNote">Player note</label>
        <input name="note" type="text" class="form-control" id="noteInput" onchange="validateNote()">
        <p id="noteWarrning"></p>
    </div>
    <div>
        <p></p>
        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
    </div>
</form>