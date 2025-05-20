// Hiệu ứng động của form
const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});


function showMessage(elementId, message, isSuccess) {
            const messageElement = document.getElementById(elementId);
            messageElement.textContent = message;
            messageElement.className = 'alert ' + (isSuccess ? 'alert-success' : 'alert-danger');
            messageElement.style.display = 'block';
        }
// Xử lý form Sign Up
document.getElementById('signup-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Ngăn reload trang

    const formData = new FormData(this);

    fetch('index.php?page=form', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showMessage('signup-message', data.message, true);
        } else {
            showMessage('signup-message', data.message, false);
        }
    })
    .catch(error => {
        showMessage('signup-message', 'Lỗi hệ thống: ' + error.message, false);
    });
});


