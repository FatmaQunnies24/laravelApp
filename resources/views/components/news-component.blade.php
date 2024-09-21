<div class="unique_blog-form-container">
    <h2>Create New </h2>
    <form id="createBlogForm" enctype="multipart/form-data">
        <div class="error-message" id="error-message"></div>
        
        <label for="name">New Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter New name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="desc" placeholder="Write New description" required></textarea>

        <label for="image">Image:</label>
        <input type="file" id="image" name="file" accept="image/*" required>

        <button type="submit" class="submit-btn">Create New</button>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
});

document.getElementById("createBlogForm").addEventListener("submit", function (event) {
    event.preventDefault();
    
    document.getElementById('error-message').textContent = '';

    const formData = new FormData(this);

    const createdDate = new Date().toISOString().split('T')[0];
    formData.append('date', createdDate);

    fetch('http://127.0.0.1:8000/api/news', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('new created successfully:', data);
        alert('New created successfully!');
        this.reset();
        location.reload();
    })
    .catch(error => {
        console.error('Error occurred:', error);
        document.getElementById('error-message').textContent = 'An error occurred. Please try again.';
    });
});

function resetForm() {
    document.getElementById("createBlogForm").reset();
    document.getElementById('error-message').textContent = '';
}

</script>










<div class="news__areaa" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="editPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit News</h3>
        <form id="editForm" enctype="multipart/form-data">
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="name" required><br><br>

            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="desc" required></textarea><br><br>

            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="file"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    fetch('http://127.0.0.1:8000/api/news')
        .then(response => response.json())
        .then(data => {
            const container = document.querySelector('.news__areaa'); 

            if (!container) {
                console.error('Element with class "news__areaa" not found.');
                return;
            }

            const items = data.News;
            items.forEach((item, index) => {
                const div = document.createElement('div');
                div.className = 'single__bloga';
                div.innerHTML = `
                    <div class="thuma">
                        <img src="${item.imgUrl}" alt="${item.name}"/>
                    </div>
                    <div class="newsinfoa">
                        <span>${item.date}</span>
                        <h3>${item.name}</h3>
                        <p>${item.desc}</p>
                       
                            <button class="editBtn" data-id="${item.id}" data-name="${item.name}" data-info="${item.desc}" onclick="openEditPopup(this)">Edit</button>
                            <button class="deleteBtn" data-id="${item.id}" onclick="deletePost(this)">Delete</button>
                       
                    </div>
                `;
                container.appendChild(div);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
});
function openEditPopup(button) {
    const postId = button.getAttribute('data-id');
    document.getElementById("editName").value = button.getAttribute('data-name');
    document.getElementById("editDesc").value = button.getAttribute('data-info');
    document.getElementById("editImg").value = '';

    const popup = document.getElementById("editPopup");
    popup.style.display = "block";

    document.querySelectorAll('.editBtn').forEach(btn => btn.classList.add('hidden'));
    document.querySelectorAll('.deleteBtn').forEach(btn => btn.classList.add('hidden'));

    document.getElementById("editForm").dataset.id = postId;
}

const closeBtn = document.getElementsByClassName("close")[0];
closeBtn.onclick = function() {
    const popup = document.getElementById("editPopup");
    popup.style.display = "none";
    resetButtonsAndForm();
};

window.onclick = function(event) {
    const popup = document.getElementById("editPopup");
    if (event.target == popup) {
        popup.style.display = "none";
        resetButtonsAndForm();
    }
};

function resetButtonsAndForm() {
    document.getElementById("editForm").reset();
    document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
}

document.getElementById("editForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const postId = this.dataset.id; 

    if (postId) {
        fetch(`http://127.0.0.1:8000/api/news/${postId}`, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Operation successful:', data);
            location.reload(); 
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    } else {
        console.error('Post id not specified.');
    }

    const popup = document.getElementById("editPopup");
    popup.style.display = "none";
    resetButtonsAndForm();
});

function deletePost(button) {
    const postId = button.getAttribute('data-id');
    if (confirm('Are you sure you want to delete this post?')) {
        fetch(`http://127.0.0.1:8000/api/news/${postId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Post deleted:', data);
            location.reload();
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    }
}

 </script>