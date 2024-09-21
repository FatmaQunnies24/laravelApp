<div class="form-container">
        <h1>Edit Information</h1>
        <form id="edit-form" method="POST" action="http://127.0.0.1:8000/api/about/1">
            @csrf
          

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook">
                </div>

                <div class="form-group">
                    <label for="pinterest">Pinterest</label>
                    <input type="text" class="form-control" id="pinterest" name="pinterest">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('edit-form');

            // Fetch data from the API
            fetch('http://127.0.0.1:8000/api/about')
                .then(response => response.json())
                .then(data => {
                    if (data.status && data.About.length > 0) {
                        const about = data.About[0];
                        document.getElementById('phone').value = about.phone;
                        document.getElementById('email').value = about.email;
                        document.getElementById('facebook').value = about.facebook;
                        document.getElementById('pinterest').value = about.pinterest;
                        document.getElementById('linkedin').value = about.linkedin;
                        document.getElementById('twitter').value = about.twitter;
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>




<!-- kkkk -->



 <div class="weird_form-container">
    <h2>Create New Blog</h2>
    <form id="createBlogForm" enctype="multipart/form-data">
        <div class="error-message" id="error-message"></div>
        
        <label for="name">Blog Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter blog name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="disc" placeholder="Write blog description" required></textarea>

        <label for="style">Style:</label>
        <input type="text" id="style" name="style" placeholder="Enter blog style" required>

               <label for="image">Image:</label>
        <input type="file" id="image" name="file" accept="image/*" required>

        <button type="submit" class="submit-btn">Create Blog</button>
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

    fetch('http://127.0.0.1:8000/api/blog', {
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
        console.log('Blog created successfully:', data);
        alert('Blog created successfully!');
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






    <div class="blog__areaa" style="width: 100%;  display: flex; gap: 10px; flex-wrap: wrap;"></div>

<div id="editPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h3>Edit Blog</h3>
        <form id="editForm" enctype="multipart/form-data">
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="name" required><br><br>

            <label for="editDesc">Description:</label>
            <textarea id="editDesc" name="disc" required></textarea><br><br>

            <label for="editStyle">Style:</label>
            <input type="text" id="editStyle" name="style" required><br><br>

            <label for="editDate">Date:</label>
            <input type="date" id="editDate" name="date" required><br><br>

            <label for="editImg">Image:</label>
            <input type="file" id="editImg" name="file"><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    fetch('http://127.0.0.1:8000/api/blog')
        .then(response => response.json())
        .then(data => {
            const container = document.querySelector('.blog__areaa');
            if (!container) {
                console.error('Element with class "blog__areaa" not found.');
                return;
            }

            const items = data.Blog;
            items.forEach((blog) => {
                const div = document.createElement('div');
                div.className = 'blog_item';
                div.style = "width: 30%; border: 1px solid #ccc; padding: 10px;";

                div.innerHTML = `
                    <div class="blog_item_img">
                        <img src="${blog.imgUrl}" alt="${blog.name}" style="width: 100%; height: auto;">
                    </div>
                    <div class="blog_details">
                        <h2>${blog.name}</h2>
                        <p>${blog.disc}</p>
                        <p><strong>Style:</strong> ${blog.style}</p>
                        <p><strong>Date:</strong> ${new Date(blog.date).toDateString()}</p>
                    </div>
                    <button class="editBtn" data-id="${blog.id}" data-name="${blog.name}" data-info="${blog.disc}" data-style="${blog.style}" data-date="${blog.date}">Edit</button>
                    <button class="deleteBtn" data-id="${blog.id}">Delete</button>
                `;

                container.appendChild(div);
            });

            document.querySelectorAll('.editBtn').forEach(button => {
                button.addEventListener('click', () => openEditPopup(button));
            });

            document.querySelectorAll('.deleteBtn').forEach(button => {
                button.addEventListener('click', () => deletePost(button));
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
    document.getElementById("editStyle").value = button.getAttribute('data-style');
    
    const dateValue = new Date(button.getAttribute('data-date')).toISOString().split('T')[0];
    document.getElementById("editDate").value = dateValue;
    
    document.getElementById("editImg").value = '';

    const popup = document.getElementById("editPopup");
    popup.style.display = "block";
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
}

document.getElementById("editForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const postId = this.dataset.id; 

    if (postId) {
        fetch(`http://127.0.0.1:8000/api/blog/${postId}`, {
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
        fetch(`http://127.0.0.1:8000/api/blog/${postId}`, {
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