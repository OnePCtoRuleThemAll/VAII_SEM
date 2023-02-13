async function filterProfiles(query) {
    const response = await fetch('?c=admin&a=filter&substring=' + query);
    const profiles = await response.json();

    document.getElementById('tableBody').innerHTML = '';

    profiles.forEach(function (profile) {
        const newRow = document.createElement('tr');
        newRow.classList.add("table-active");
        newRow.innerHTML =
            `<td>${profile.id}</td>
            <td>${profile.name}</td>
            <td>${profile.surename}</td>
            <td>${profile.age}</td>
            <td>${profile.faculty}</td>`
        document.getElementById('tableBody').appendChild(newRow);
    })
}
