let addButton = document.getElementById('add-element-button');

addButton.addEventListener('click', function (e) {
    e.preventDefault();

    let elementTable = document.getElementById('arr-items-input-view');

    let count = Number(document.querySelector('#arr-form input[name=count]').value);

    let newItem = document.createElement('tr');
    newItem.appendChild(document.createElement('td'));
    newItem.appendChild(document.createElement('td'));

    newItem.children[0].textContent = '[' + count + ']';
    count += 1;
    document.querySelector('#arr-form input[name=count]').value = count;


    newItem.children[1].innerHTML = `<td><input type="text" class="arr-item__input"></td>`;

    elementTable.appendChild(newItem);

});