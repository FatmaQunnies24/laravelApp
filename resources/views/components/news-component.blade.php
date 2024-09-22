<div class="nene_blog-form-container">
    <h2>Create New </h2>
    <form id="neneCreateBlogForm" enctype="multipart/form-data">
        <div class="nene-error-message" id="nene-error-message"></div>
        
        <label for="neneName">New Name:</label>
        <input type="text" id="neneName" name="name" placeholder="Enter New name" required>

        <label for="neneDescription">Description:</label>
        <textarea id="neneDescription" name="desc" placeholder="Write New description" required></textarea>

        <label for="neneImage">Image:</label>
        <input type="file" id="neneImage" name="file" accept="image/*" required>

        <button type="submit" class="nene-submit-btn">Create New</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {});

    document.getElementById("neneCreateBlogForm").addEventListener("submit", function (event) {
        event.preventDefault();
        
        document.getElementById('nene-error-message').textContent = '';

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
            document.getElementById('nene-error-message').textContent = 'An error occurred. Please try again.';
        });
    });

    function neneResetForm() {
        document.getElementById("neneCreateBlogForm").reset();
        document.getElementById('nene-error-message').textContent = '';
    }
</script>

<div class="nene_news__areaaa" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="neneEditPopup" class="nene-popup" style="display: none;">
    <div class="nene-popup-content">
        <span class="nene-close">&times;</span>
        <h3>Edit News</h3>
        <form id="neneEditForm" enctype="multipart/form-data">
            <label for="neneEditName">Name:</label>
            <input type="text" id="neneEditName" name="name" required><br><br>

            <label for="neneEditDesc">Description:</label>
            <textarea id="neneEditDesc" name="desc" required></textarea><br><br>

            <label for="neneEditImg">Image:</label>
            <input type="file" id="neneEditImg" name="file"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        fetch('http://127.0.0.1:8000/api/news')
            .then(response => response.json())
            .then(data => {
                const container = document.querySelector('.nene_news__areaaa'); 

                if (!container) {
                    console.error('Element with class "nene_news__areaaa" not found.');
                    return;
                }

                const items = data.News;
                items.forEach((item, index) => {
                    const div = document.createElement('div');
                    div.className = 'nene_single__bloga';
                    div.innerHTML = `
                        <div class="nene_thuma">
                            <img src="${item.imgUrl}" alt="${item.name}"/>
                        </div>
                        <div class="nene_newsinfoa">
                            <span>${item.date}</span>
                            <h3>${item.name}</h3>
                            <p>${item.desc}</p>
                            <button class="nene_editBtn" data-id="${item.id}" data-name="${item.name}" data-info="${item.desc}" onclick="neneOpenEditPopup(this)">Edit</button>
                            <button class="nene_deleteBtn" data-id="${item.id}" onclick="neneDeletePost(this)">Delete</button>
                        </div>
                    `;
                    container.appendChild(div);
                });
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });

    function neneOpenEditPopup(button) {
        const postId = button.getAttribute('data-id');
        document.getElementById("neneEditName").value = button.getAttribute('data-name');
        document.getElementById("neneEditDesc").value = button.getAttribute('data-info');
        document.getElementById("neneEditImg").value = '';

        const popup = document.getElementById("neneEditPopup");
        popup.style.display = "block";

        document.querySelectorAll('.nene_editBtn').forEach(btn => btn.classList.add('hidden'));
        document.querySelectorAll('.nene_deleteBtn').forEach(btn => btn.classList.add('hidden'));

        document.getElementById("neneEditForm").dataset.id = postId;
    }

    const neneCloseBtn = document.getElementsByClassName("nene-close")[0];
    neneCloseBtn.onclick = function() {
        const popup = document.getElementById("neneEditPopup");
        popup.style.display = "none";
        neneResetButtonsAndForm();
    };

    window.onclick = function(event) {
        const popup = document.getElementById("neneEditPopup");
        if (event.target == popup) {
            popup.style.display = "none";
            neneResetButtonsAndForm();
        }
    };

    function neneResetButtonsAndForm() {
        document.getElementById("neneEditForm").reset();
        document.querySelectorAll('.nene_editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.nene_deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    }

    document.getElementById("neneEditForm").addEventListener("submit", function(event) {
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

        const popup = document.getElementById("neneEditPopup");
        popup.style.display = "none";
        neneResetButtonsAndForm();
    });

    function neneDeletePost(button) {
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
