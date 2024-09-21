
<div class="creative_blog-form-wrapper">
    <h2>Create New Volunteer</h2>
    <form id="newBlogForm" enctype="multipart/form-data">
        <div class="alert-message" id="alert-message"></div>
        
        <label for="newName">Volunteer Name:</label>
        <input type="text" id="newName" name="name" placeholder="Enter Volunteer Name" class="input-field" required>

        <label for="newDescription">info:</label>
        <textarea id="newDescription" name="info" placeholder="Write New info" class="text-field" required></textarea>

        <label for="newImage">Image:</label>
        <input type="file" id="newImage" name="imgUrl" accept="image/*" class="file-input" required>

        <label for="newFacebook">Facebook:</label>
        <input type="url" id="newFacebook" name="facebook" placeholder="Enter Facebook URL" class="input-field">

        <label for="newPinterest">Pinterest:</label>
        <input type="url" id="newPinterest" name="pinterest" placeholder="Enter Pinterest URL" class="input-field">

        <label for="newLinkedIn">LinkedIn:</label>
        <input type="url" id="newLinkedIn" name="linkedin" placeholder="Enter LinkedIn URL" class="input-field">

        <label for="newTwitter">Twitter:</label>
        <input type="url" id="newTwitter" name="twitter" placeholder="Enter Twitter URL" class="input-field">

        <button type="submit" class="primary-btn">Create Volunteer</button>
    </form>
</div>


<script>
    document.getElementById("newBlogForm").addEventListener("submit", function (event) {
        event.preventDefault();
        
        document.getElementById('alert-message').textContent = '';

        const formData = new FormData(this);

        const createdDate = new Date().toISOString().split('T')[0];
        formData.append('date', createdDate);

        fetch('http://127.0.0.1:8000/api/volunteer', {
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
            console.log('volunteer created successfully:', data);
            alert('volunteer created successfully!');
            this.reset();
            location.reload();
        })
        .catch(error => {
            console.error('Error occurred:', error);
            document.getElementById('alert-message').textContent = 'An error occurred. Please try again.';
        });
    });

    function resetForm() {
        document.getElementById("newBlogForm").reset();
        document.getElementById('alert-message').textContent = '';
    }
</script>

<div class="reson_area" style="width: 100%; margin-left: 15%; display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="editPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit</h3>
        <form id="editForm" enctype="multipart/form-data">
            <label for="editName">Name</label>
            <input type="text" id="editName" name="name" required><br><br>

            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="info" required></textarea><br><br>

            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="imgUrl"><br><br>

            <label for="editFacebook">Facebook:</label>
            <input type="url" id="editFacebook" name="facebook"><br><br>

            <label for="editPinterest">Pinterest:</label>
            <input type="url" id="editPinterest" name="pinterest"><br><br>

            <label for="editLinkedin">LinkedIn:</label>
            <input type="url" id="editLinkedin" name="linkedin"><br><br>

            <label for="editTwitter">Twitter:</label>
            <input type="url" id="editTwitter" name="twitter"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    // On page load
    document.addEventListener('DOMContentLoaded', () => {
        // Fetch volunteer data from the API
        fetch('http://127.0.0.1:8000/api/volunteer')
            .then(response => response.json())
            .then(data => {
                console.log('Data fetched:', data);
                const container = document.querySelector('.reson_area');

                if (!container) {
                    console.error('Element with class "reson_area" not found.');
                    return;
                }

                const items = data.Volunteer; // Get volunteer data
                items.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'single_volunteer';
                    div.innerHTML = `
                        <div class="volunteer_thumb">
                            <img src="{{ asset('assets/auth') }}${item.imgUrl}" alt="Volunteer"/>
                        </div>
                        <div class="volunteer_info">
                            <div class="social_links">
                                <ul>
                                    <li><a href="${item.facebook}"> <i class="fab fa-facebook"></i> </a></li>
                                    <li><a href="${item.pinterest}"> <i class="fab fa-pinterest"></i> </a></li>
                                    <li><a href="${item.linkedin}"> <i class="fab fa-linkedin"></i> </a></li>
                                    <li><a href="${item.twitter}"> <i class="fab fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>${item.name}</h4>
                                <p>${item.info}</p>
                            </div>
                            <div class="edit-delete-buttons">
                                <button class="editBtn" data-id="${item.id}" data-name="${item.name}" data-info="${item.info}" data-facebook="${item.facebook}" data-pinterest="${item.pinterest}" data-linkedin="${item.linkedin}" data-twitter="${item.twitter}" onclick="openEditPopup(this)">Edit</button>
                                <button class="deleteBtn" data-id="${item.id}" onclick="deletePost(this)">Delete</button>
                            </div>
                        </div>
                    `;
                    container.appendChild(div);
                });
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });

    // Open edit popup
    function openEditPopup(button) {
        const postId = button.getAttribute('data-id');
        document.getElementById("editName").value = button.getAttribute('data-name');
        document.getElementById("editDesc").value = button.getAttribute('data-info');
        document.getElementById("editFacebook").value = button.getAttribute('data-facebook');
        document.getElementById("editPinterest").value = button.getAttribute('data-pinterest');
        document.getElementById("editLinkedin").value = button.getAttribute('data-linkedin');
        document.getElementById("editTwitter").value = button.getAttribute('data-twitter');
        document.getElementById("editImg").value = '';

        popup.style.display = "block";

        document.querySelectorAll('.editBtn').forEach(btn => btn.classList.add('hidden'));
        document.querySelectorAll('.deleteBtn').forEach(btn => btn.classList.add('hidden'));

        // Set the id in a hidden property
        document.getElementById("editForm").dataset.id = postId;
    }

    // Close popup
    const popup = document.getElementById("editPopup");
    const closeBtn = document.getElementsByClassName("close")[0];

    closeBtn.onclick = function() {
        popup.style.display = "none";
        document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.getElementById("editForm").reset();
    };

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
            document.getElementById("editForm").reset();
            document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
            document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        }
    };

    // On form submit
    document.getElementById("editForm").addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const postId = this.dataset.id; // Get the post id

        if (postId) {
            formData.append("id", postId);

            fetch(`http://127.0.0.1:8000/api/volunteer/${postId}`, {
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
                location.reload(); // Reload the page after editing
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        } else {
            console.error('Post id not specified.');
        }

        popup.style.display = "none";
        document.querySelectorAll('.editBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
        document.querySelectorAll('.deleteBtn.hidden').forEach(btn => btn.classList.remove('hidden'));
    });

    
    
    function deletePost(button) {
        const postId = button.getAttribute('data-id');
        if (confirm('Are you sure you want to delete this post?')) {
            fetch(`http://127.0.0.1:8000/api/volunteer/${postId}`, {
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