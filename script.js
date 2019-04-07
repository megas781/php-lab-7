let addButton = document.querySelectorAll('.add-element-button');


addButton.forEach(function (value, key, parent) {
    value.addEventListener('click', function (e) {
        e.preventDefault();

        let elementTable = document.getElementById('arr-items-input-view');

        let count = Number(document.querySelector('#arr-form input[name=count]').value);

        let newItem = document.createElement('tr');
        newItem.appendChild(document.createElement('td'));
        newItem.appendChild(document.createElement('td'));

        newItem.children[0].textContent = '[' + count + ']';
        newItem.children[1].innerHTML = `<td><input type="text" name="arr[${count}]" class="arr-item__input"></td>`;

        count += 1;
        document.querySelector('#arr-form input[name=count]').value = count;

        elementTable.appendChild(newItem);

    });
});
