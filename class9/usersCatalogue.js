function refreshUsersCatalogue() {
    $.ajax({
        url: "getUsers.php",
        type: "GET",
        dataType: "json",
        data: {
            'message': "success"
        },
        method: "GET",
        async: false,
        success:function(data) {
            $('#usersTableBody').empty();
            for(let i = 0; i < data.length; i++) {
                let rowNum = i+1;
                let user = data[i];
                let id = user.id;
                let name = user.name;
                let surname = user.surname;
                $('#usersTable').find('tbody').append(`
                <tr>
                    <th scope="row">${rowNum}</th>
                    <td id="name${id}">${name}</td>
                    <td id="surname${id}">${surname}</td>
                    <td id="buttons${id}">
                        <button name="editButton" class="btn btn-primary" onClick="editUser(${id})">Edytuj</button>
                        <button name="deleteButton" class="btn btn-danger" onClick="deleteUser(${id})">Usuń</button>
                    </td>
                </tr>`);
            }
        },
        error: function(data)
        {
            console.log(data.Message);
        }
    })
}

function addNewUser() {
    var name = $('#newName').val();
    var surname = $('#newSurname').val();

    $.ajax({
        url: "addUser.php",
        type: "POST",
        dataType: "json",
        data: {
            'name': name,
            'surname': surname
        },
        method: "POST",
        success:function(data) {
            refreshUsersCatalogue();
        }
        ,
        error: function(data) {
            console.log(data.Message);
        }
    })
}

function deleteUser(id) {
    $.ajax({
        url: "deleteUser.php",
        type: "POST",
        dataType: "json",
        data: {
            'id': id
        },
        method: "POST",
        success:function(data) {
            refreshUsersCatalogue();
        }
        ,
        error: function(data) {
            console.log(data.Message);
        }
    })
}

function editUser(id) {
    refreshUsersCatalogue();

    let nameCell = $(`#name${id}`);
    let surnameCell = $(`#surname${id}`);
    let buttonsCell = $(`#buttons${id}`);

    let name = nameCell.text();
    let surname = surnameCell.text();

    nameCell.empty();
    nameCell.append(`<input type="text" value="${name}" id="editName${id}" \>`);

    surnameCell.empty();
    surnameCell.append(`<input type="text" value="${surname}" id="editSurname${id}" \>`);

    buttonsCell.empty();
    buttonsCell.append(`
        <button id='save${id}' class="btn btn-success" onclick="submitUser(${id})">Zapisz</button>
        <button id='cancel${id}' class="btn btn-warning" onclick="refreshUsersCatalogue()">Anuluj</button>
    `);
}

function submitUser(id) {
    var name = $(`#editName${id}`).val();
    var surname = $(`#editSurname${id}`).val();

    $.ajax({
        url: "editUser.php",
        type: "POST",
        dataType: "json",
        data: {
            'id': id,
            'name': name,
            'surname': surname
        },
        method: "POST",
        success:function(data) {
            refreshUsersCatalogue();
        }
        ,
        error: function(data) {
            console.log(data.Message);
        }
    })
}