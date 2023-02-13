async function getCode() {
    const code = document.getElementById('taskCode');

    if(code) {
        if(validateCode(code.value)) {
            const response = await fetch('?c=task&a=finishTask&code=' + code.value);
            const state = await response.json();

            if(state.match("Completed")) {
                alert("Task completed!");
            }
        }
    }
}

function validateCode(code) {
    if (!code.match("^[A-Za-z]{1,20}")) {
        alert("Enter code!");
        return false;
    }
    return true;
}