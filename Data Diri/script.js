window.onload = function() {
    fetchUsers();
};

function fetchUsers() {
    fetch('process.php')
    .then(response => response.json())
    .then(data => {
        const userList = document.getElementById('userList');
        userList.innerHTML = '';
        data.forEach(user => {
            const li = document.createElement('li');
            li.textContent = `${user.username} - ${user.email}`;
            userList.appendChild(li);
        });
    })
    .catch(error => console.error('Error:', error));
}
